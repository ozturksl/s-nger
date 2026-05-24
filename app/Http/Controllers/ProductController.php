<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    public function addProduct(Request $request)
    {
        $request->validate([
            'urun_adi' => 'required|string',
            'urun_aciklama' => 'required|string',
            'urun_fiyat' => 'required|integer|max:7',
            'urun_ozellikler' => 'required|integer',
            'urun_foto' => 'sometimes|nullable|image|mimes:jpeg,png,jpg|max:2048',
            'category_id' => 'required|exists:prodcategories,category_id',
        ],

            [
                'urun_adi.required' => 'Ürün Adı alanı boş bırakılamaz.',
                'urun_aciklama.required' => 'Ürün Açıklama alanı boş bırakılamaz.',
                'urun_fiyat.required' => 'Ürün Fiyat alanı boş bırakılamaz.',
                'urun_ozellikler.required' => 'Ürün ÖZellikleri alanı boş bırakılamaz.',
                'max' => 'Girilen değer çok uzun.',
                'mimes' => 'Dosya izin verilen türde değil.',
                'category_id.required' => 'Ürün Kategori seçimi boş bırakılamaz.',

            ]
        );

        try {
            $fotoAdi = null;
            if ($request->hasFile('urun_foto')) {
                $file = $request->file('urun_foto');
                $fotoAdi = 'product_'.time().'.'.$file->getClientOriginalExtension();
                $file->storeAs('product', $fotoAdi, 'public');
            }

            ProductModel::create([
                'product_name' => $request->input('urun_adi'),
                'product_price' => $request->input('urun_fiyat'),
                'product_comment' => $request->input('urun_aciklama'),
                'user_photo' => $fotoAdi,
                'product_feature' => $request->input('urun_ozellikler'),
                'category_id' => $request->input('category_id'),
            ]);

            return redirect()->route('products')->with('success', 'Ürün başarıyla eklendi.');

        } catch (Exception $e) {
            Log::error('Ürün ekleme hatası: '.$e->getMessage());

            return redirect()->back()
                ->withInput()
                ->with('error', 'Ürün eklenirken bir hata oluştu.');
        }

    }

    public function getProduct()
    {
        try {
            $product = DB::table('product')
                ->join('prodcategories', 'product.category_id', '=', 'prodcategories.category_id')
                ->select(
                    'product.*',
                    'prodcategories.category_name as kateogri_adi',
                )
                ->get();

            return view('lpanel.front.productsetting', compact('products'));

        } catch (Exception $e) {
            Log::error('Ürün listeleme hatası: '.$e->getMessage());

            return redirect()->back()->with('error', 'Ürünler listelenirken bir hata oluştu.');
        }
    }

    public function updateProduct($id)
    {
        $product = DB::table('product')->where('product_id', $id)->first();

        if (! $product) {
            return redirect()->back()->with('error', 'Ürün bulunamadı.');
        }

        return view('lpanel.front.productupdate', compact('products'));
    }

    public function updateProductAction(Request $request, $id)
    {
        $request->validate([
            'urun_adi' => 'required|string',
            'urun_aciklama' => 'required|string',
            'urun_fiyat' => 'required|integer|max:7',
            'urun_ozellikler' => 'required|integer',
            'urun_foto' => 'sometimes|nullable|image|mimes:jpeg,png,jpg|max:2048',
            'category_id' => 'required|exists:prodcategories,category_id',
        ],

            [
                'urun_adi.required' => 'Ürün Adı alanı boş bırakılamaz.',
                'urun_aciklama.required' => 'Ürün Açıklama alanı boş bırakılamaz.',
                'urun_fiyat.required' => 'Ürün Fiyat alanı boş bırakılamaz.',
                'urun_ozellikler.required' => 'Ürün ÖZellikleri alanı boş bırakılamaz.',
                'max' => 'Girilen değer çok uzun.',
                'mimes' => 'Dosya izin verilen türde değil.',
                'category_id.required' => 'Ürün Kategori seçimi boş bırakılamaz.',

            ]
        );

        try {
            $currentProduct = DB::table('product')->where('product_id', $id)->first();

            if (! $currentProduct) {
                return redirect()->back()->with('error', 'Güncellenecek ürün bulunamadı.');
            }

            $data = [
                'product_name' => strip_tags($request->input('urun_adi')),
                'product_price' => strip_tags($request->input('urun_fiyat')),
                'product_comment' => strip_tags($request->input('urun_aciklama')),
                'product_feature' => strip_tags($request->input('urun_ozellikler')),
                'category_id' => $request->input('category_id') ?? $currentProduct->category_id,
                'updated_at' => now(),
            ];

            if ($request->hasFile('urun_foto')) {
                if ($currentProduct && $currentProduct->user_photo) {
                    Storage::disk('public')->delete('product/'.$currentProduct->product_photo);
                }

                $file = $request->file('urun_foto');
                $fileName = 'product_'.time().'.'.$file->getClientOriginalExtension();
                $file->storeAs('product', $fileName, 'public');

                $data['product_photo'] = $fileName;
            } else {
                $data['product_photo'] = $currentProduct->product_photo ?? null;
            }

            DB::table('product')
                ->where('product_id', $id)
                ->update($data);

            return redirect()->back()->with('success', 'Ürün bilgileri başarıyla güncellendi!');

        } catch (Exception $e) {
            Log::error('Güncelleme hatası: '.$e->getMessage());

            return redirect()->back()
                ->withInput()
                ->with('error', 'Veritabanı işlemi sırasında bir hata oluştu.');
        }
    }

    public function deleteProduct($id)
    {
        try {
            $product = DB::table('')->where('user_id', $id)->first();

            if (! $user) {
                return redirect()->back()->with('error', 'Kullanıcı veritabanında bulunamadı.');
            }

            if (! empty($user->user_photo)) {
                Storage::disk('public')->delete('user/'.$user->user_photo);
            }

            DB::table('users')->where('user_id', $id)->delete();

            return redirect()->back()->with('success', 'Kullanıcı ve profil fotoğrafı başarıyla silindi.');

        } catch (Exception $e) {
            Log::error('Silme hatası: '.$e->getMessage());

            return redirect()->back()->with('error', 'Silme işlemi başarısız oldu.');
        }
    }
}

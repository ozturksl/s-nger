<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function addProduct(Request $request)
    {
        $request->validate([
            'urun_adi' => 'required|string',
            'urun_aciklama' => 'required|string',
            'urun_fiyat' => 'required|integer',
            'urun_ozellikler' => 'required|string',
            'urun_foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'category_id' => 'nullable|integer|exists:prodcategories,category_id',
            'product_status_id' => 'required|exists:product_status,product_status_id',
        ],

            [
                'urun_adi.required' => 'Ürün Adı alanı boş bırakılamaz.',
                'urun_aciklama.required' => 'Ürün Açıklama alanı boş bırakılamaz.',
                'urun_fiyat.required' => 'Ürün Fiyat alanı boş bırakılamaz.',
                'urun_ozellikler.required' => 'Ürün Özellikleri alanı boş bırakılamaz.',
                'urun_foto.required' => 'Ürün Fotoğrafı boş bırakılamaz.',
                'max' => 'Girilen değer çok uzun.',
                'mimes' => 'Dosya izin verilen türde değil.',
                'product_status_id.required' => 'Ürün Durum seçimi boş bırakılamaz.',

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
                'product_photo' => $fotoAdi,
                'product_feature' => $request->input('urun_ozellikler'),
                'category_id' => $request->input('category_id'),
                'product_status_id' => $request->input('product_status_id'),
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
            $products = DB::table('product')
                ->leftJoin('prodcategories', 'product.category_id', '=', 'prodcategories.category_id')
                ->join('product_status', 'product.product_status_id', '=', 'product_status.product_status_id')
                ->select(
                    'product.*',
                    'prodcategories.category_name as kategori_adi',
                    'product_status.product_status_name as urun_durumadi'
                )
                ->get();

            return view('lpanel.front.productsetting', compact('products'));

        } catch (Exception $e) {
            Log::error('Ürün listeleme hatası: '.$e->getMessage());

        }
    }

    public function updateProduct($id)
    {
        $products = DB::table('product')->where('product_id', $id)->first();

        if (! $products) {
            return redirect()->back()->with('error', 'Ürün bulunamadı.');
        }

        return view('lpanel.front.productupdate', compact('products'));
    }

    public function updateProductAction(Request $request, $id)
    {
        try {
            $currentProduct = DB::table('product')->where('product_id', $id)->first();

            if (! $currentProduct) {
                return redirect()->back()->with('error', 'Güncellenecek ürün bulunamadı.');
            }

            $data = [
                'product_name' => $request->filled('urun_adi') ? strip_tags($request->input('urun_adi')) : $currentProduct->product_name,
                'product_price' => $request->filled('urun_fiyat') ? strip_tags($request->input('urun_fiyat')) : $currentProduct->product_price,
                'product_comment' => $request->filled('urun_aciklama') ? strip_tags($request->input('urun_aciklama')) : $currentProduct->product_comment,
                'product_feature' => $request->filled('urun_ozellikler') ? strip_tags($request->input('urun_ozellikler')) : $currentProduct->product_feature,
                'category_id' => $request->input('category_id') ?? $currentProduct->category_id,
                'product_status_id' => $request->input('product_status_id') ?? $currentProduct->product_status_id,
                'updated_at' => now(),
            ];

            if ($request->hasFile('urun_foto')) {
                if ($currentProduct && $currentProduct->product_photo) {
                    Storage::disk('public')->delete('product/'.$currentProduct->product_photo);
                }

                $file = $request->file('urun_foto');
                $fileName = 'product_'.time().'.'.$file->getClientOriginalExtension();
                $file->storeAs('product', $fileName, 'public');

                $data['product_photo'] = $fileName;
            } else {
                $data['product_photo'] = $currentProduct->product_photo;
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
            $product = DB::table('product')->where('product_id', $id)->first();

            if (! $product) {
                return redirect()->back()->with('error', 'Ürün veritabanında bulunamadı.');
            }

            if ($product->product_photo) {
                $filePath = 'product/'.$product->product_photo;

                if (Storage::disk('public')->exists($filePath)) {
                    Storage::disk('public')->delete($filePath);
                }
            }

            DB::table('product')->where('product_id', $id)->delete();

            return redirect()->back()->with('success', 'Ürün başarıyla silindi.');

        } catch (Exception $e) {
            Log::error('Silme hatası: '.$e->getMessage());

            return redirect()->back()->with('error', 'Silme işlemi başarısız oldu.');
        }
    }

    public function productDetail($id)
    {
        $product = DB::table('product')->where('product_id', $id)->first();

        if (! $product) {
            return redirect()->back()->with('error', 'Ürün bulunamadı.');
        }

        return view('front.product-detail', compact('product'));
    }
}

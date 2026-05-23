<?php

namespace App\Http\Controllers;

use App\Models\ProductCategoriesModel;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ProdCategoriesController extends Controller
{
    public function getCategories(Request $request)
    {
        try {
            $category = DB::table('prodcategories')
                ->select(
                    'product.*'
                )
                ->get();
        } catch (Exception $e) {
            Log::error('Kategori listeleme hatası: '.$e->getMessage());
        }
    }

    public function addCategories(Request $request)
    {

        try {

            ProductCategoriesModel::create([
                'category_name' => $request->input('kategori_adi'),

            ]);

            return redirect()->route('category')->with('success', 'Kategori başarıyla eklendi.');

        } catch (Exception $e) {
            Log::error('Kategori ekleme hatası: '.$e->getMessage());

            return redirect()->back()
                ->withInput()
                ->with('error', 'Kategori eklenirken bir hata oluştu.');
        }
    }

    public function updateCategories($id)
    {
        $category = DB::table('prodcategories')->where('category_id', $id)->first();

        if (! $category) {
            return redirect()->back()->with('error', 'Kategori bulunamadı');
        }

        return view('lpanel.front.categoryupdate', compact('category'));
    }

    public function updateCategoryAction(Request $request, $id)
    {
        try {
            $currentContent = DB::table('prodcategories');

            if (! $currentContent) {
                return redirect()->back()->with('error', 'Güncellenecek kategori bulunamadı');
            }

            $data = [
                'category_name' => strip_tags($request->input('kategori_adi')),
                'updated_at' => now(),
            ];

            DB::table('prodcategories')
                ->where('category_id', $id)
                ->update($data);

            return redirect()->back()->with('success', 'Kategori başarıyla güncellendi!');

        } catch (Exception $e) {
            Log::error('Güncelleme hatası: '.$e->getMessage());

            return redirect()->back()->withInput()->with('error', 'Veritabanı işlemi sırasında bir hata oluştu');

        }
    }

    public function deleteCategory($id)
    {
        try {
            $category = DB::table('prodcategories')->where('category_id', $id)->first();

            if (! $category) {
                return redirect()->back()->with('error', 'Kategori veritabanında bulunamadı.');
            }

            DB::table('prodcategories')->where('category_id', $id)->delete();

            return redirect()->back()->with('success', 'Kategori başarıyla silindi.');

        } catch (Exception $e) {
            Log::error('Silme hatası: '.$e->getMessage());

            return redirect()->back()->with('error', 'Silme işlemi başarısız oldu.');
        }
    }
}

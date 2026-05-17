<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SeoModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Exception;

class SeoController extends Controller
{
    public function updateSeo(Request $request){

     $request->validate([
            'seofavicon' => 'sometimes|nullable|image|mimes:jpeg,png,jpg|max:2048',
            'seoicon' => 'sometimes|nullable|image|mimes:jpeg,png,jpg|max:2048',
            'seocomment' => 'sometimes|string|max:500',
            'seokeys' => 'sometimes|string|max:500',
        ], [
            'max' => 'Girilen değer çok uzun, lütfen sınırları aşmayınız.',
            'mimes' => 'Dosya türü izin verilen türde değil.'
        ]);

        try {
            $currentSeo = DB::table('seo')->where('seo_id', 1)->first();

            $data = [
                'seo_favicon' => $request->filled('seofavicon') ? strip_tags($request->input('seofavicon')) : ($currentSeo?->seo_favicon ?? ''),
                'seo_icon' => $request->filled('seoicon') ? strip_tags($request->input('seoicon')) : ($currentSeo?->seo_icon ?? ''),
                'seo_comment' => $request->filled('seocomment') ? strip_tags($request->input('seocomment')) : ($currentSeo?->seo_comment ?? ''),
                'seo_keys' => $request->filled('seokeys') ? strip_tags($request->input('seokeys')) : ($currentSeo?->seo_keys ?? ''),
                'updated_at' => now(),
            ];

            DB::table('seo')->updateOrInsert(
                ['seo_id' => 1],
                $data
            );

            return redirect()->back()->with('success', 'İçerik başarıyla güncellendi.');

        } catch (Exception $e) {
            Log::error('Güncelleme hatası: '.$e->getMessage());

            return redirect()->back()
                ->withInput()
                ->with('error', 'Veritabanı işlemi sırasında bir hata oluştu.');
        }
    }
}

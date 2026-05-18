<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class SeoController extends Controller
{
    public function updateSeo(Request $request)
    {

        $request->validate([
            'seofavicon' => 'sometimes|nullable|image|mimes:jpeg,png,jpg|max:2048',
            'seoicon' => 'sometimes|nullable|image|mimes:jpeg,png,jpg|max:2048',
            'seocomment' => 'sometimes|nullable|string|max:500',
            'seokey' => 'sometimes|nullable|string|max:500',
        ], [
            'max' => 'Girilen değer çok uzun, lütfen sınırları aşmayınız.',
            'mimes' => 'Dosya izin verilen türde değil.',
        ]);

        try {
            $currentSeo = DB::table('seo')->where('seo_id', 1)->first();

            $data = [
                'seo_comment' => $request->filled('seocomment') ? strip_tags($request->input('seocomment')) : ($currentSeo?->seo_comment ?? ''),
                'seo_keys' => $request->filled('seokey') ? strip_tags($request->input('seokey')) : ($currentSeo?->seo_keys ?? ''),
                'updated_at' => now(),
            ];

            if ($request->hasFile('seofavicon')) {
                if ($currentSeo && $currentSeo->seo_favicon) {
                    Storage::disk('public')->delete('seo/'.$currentSeo->seo_favicon);
                }

                $favicon = $request->file('seofavicon');
                $faviconName = 'favicon_'.time().'.'.$favicon->getClientOriginalExtension();
                $favicon->storeAs('seo', $faviconName, 'public');

                $data['seo_favicon'] = $faviconName;
            } else {
                $data['seo_favicon'] = $currentSeo?->seo_favicon ?? '';
            }

            if ($request->hasFile('seoicon')) {
                if ($currentSeo && $currentSeo->seo_icon) {
                    Storage::disk('public')->delete('seo/'.$currentSeo->seo_icon);
                }

                $icon = $request->file('seoicon');
                $iconName = 'icon_'.time().'.'.$icon->getClientOriginalExtension();
                $icon->storeAs('seo', $iconName, 'public');

                $data['seo_icon'] = $iconName;
            } else {
                $data['seo_icon'] = $currentSeo?->seo_icon ?? '';

            }

            DB::table('seo')->updateOrInsert(
                ['seo_id' => 1],
                $data
            );

            return redirect()->back()->with('success', 'İçerik ve görseller başarıyla güncellendi.');

        } catch (Exception $e) {
            Log::error('Güncelleme hatası: '.$e->getMessage());

            return redirect()->back()
                ->withInput()
                ->with('error', 'Veritabanı veya dosya yükleme işlemi sırasında bir hata oluştu.');
        }
    }
}

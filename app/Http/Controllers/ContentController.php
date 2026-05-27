<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ContentController extends Controller
{
    public function updateContent(Request $request)
    {
        $request->validate([
            'insta-link' => 'sometimes|nullable|url|max:255',
            'linkedin-link' => 'sometimes|nullable|url|max:255',
            'number1' => 'sometimes|nullable|string|max:20|regex:/^[0-9+\s\(\)-]+$/',
            'number2' => 'sometimes|nullable|string|max:20|regex:/^[0-9+\s\(\)-]+$/',
            'address' => 'sometimes|nullable|string|max:1000',
            'mail' => 'sometimes|nullable|email:rfc,dns|max:100',
            'harita' => 'sometimes|nullable|string|max:2000',
        ], [
            'insta-link.url' => 'Lütfen geçerli bir Instagram URL adresi giriniz.',
            'linkedin-link.url' => 'Lütfen geçerli bir Linkedin URL adresi giriniz.',
            'mail.email' => 'Lütfen geçerli ve aktif bir e-posta adresi giriniz.',
            'number1.regex' => 'Telefon 1 formatı geçersiz (Sadece rakam, +, boşluk ve parantez içerebilir).',
            'number2.regex' => 'Telefon 2 formatı geçersiz.',
            'max' => 'Girilen değer çok uzun, lütfen sınırları aşmayınız.',
        ]);

        try {
            $currentContent = DB::table('content')->where('content_id', 1)->first();

            $data = [
                'ct_instagram' => $request->filled('insta-link') ? strip_tags($request->input('insta-link')) : ($currentContent?->ct_instagram ?? ''),
                'ct_linkedin' => $request->filled('linkedin-link') ? strip_tags($request->input('linkedin-link')) : ($currentContent?->ct_linkedin ?? ''),
                'ct_number1' => $request->filled('number1') ? strip_tags($request->input('number1')) : ($currentContent?->ct_number1 ?? ''),
                'ct_number2' => $request->filled('number2') ? strip_tags($request->input('number2')) : ($currentContent?->ct_number2 ?? ''),
                'ct_address' => $request->filled('address') ? strip_tags($request->input('address')) : ($currentContent?->ct_address ?? ''),
                'ct_mail' => $request->filled('mail') ? strip_tags($request->input('mail')) : ($currentContent?->ct_mail ?? ''),
                'ct_harita' => $request->filled('harita') ? trim($request->input('harita')) : ($currentContent?->ct_harita ?? ''),
                'updated_at' => now(),
            ];

            DB::table('content')->updateOrInsert(
                ['content_id' => 1],
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

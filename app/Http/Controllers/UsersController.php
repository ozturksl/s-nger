<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function addUser(Request $request){
        
    }

    public function getUser(){

    }

    public function updateUser(){
        $request->validate([
            'adsoyad' => 'sometimes|nullable|url|max:255',
            'kullanici_adi' => 'sometimes|nullable|url|max:255',
            'kullanici_tur' => 'sometimes|nullable|string|max:20|regex:/^[0-9+\s\(\)-]+$/',
            'kullanici_durum' => 'sometimes|nullable|string|max:20|regex:/^[0-9+\s\(\)-]+$/',
            'sifre' => 'sometimes|nullable|string|max:1000',
            'kullanici_foto' => 'sometimes|nullable|email:rfc,dns|max:100',
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

    public function deleteUser(){

    }
}

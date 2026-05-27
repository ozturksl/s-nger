<?php

namespace App\Http\Controllers;

use App\Models\UsersModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

class LoginController extends Controller
{
    public function loginFunction(Request $request)
    {

        $request->validate([
            'kullanici_adi' => 'required',
            'password' => 'required',
        ]);

        try {

            $credentials = [
                'user_nickname' => $request->input('kullanici_adi'),
                'password' => $request->input('password'),
            ];

            if (Auth::attempt($credentials)) {

                $user = Auth::user();

                if ($user->status?->user_status_name !== 'Etkin') {
                    Auth::logout();

                    return back()->withInput()->with('error', 'Hesabınız pasif durumdadır.');
                }

                $request->session()->regenerate();

                return redirect()->route('dashboard')->with('success', 'Giriş başarılı.');
            }

            return back()->withInput()->with('error', 'Kullanıcı adı veya şifre hatalı!');

        } catch (\Exception $e) {
            \Log::error('Giriş hatası: '.$e->getMessage());

            return back()->withInput()->with('error', 'Sistemsel bir hata oluştu: '.$e->getMessage());
        }
    }

    public function logoutFunction(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'Başarıyla çıkış yapıldı.');
    }
}

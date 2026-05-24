<?php

namespace App\Http\Controllers;

use App\Models\UsersModel;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class UsersController extends Controller
{
    public function addUser(Request $request)
    {
        $request->validate([
            'adsoyad' => 'required|string|max:25',
            'kullanici_adi' => 'required|string|max:50|unique:users,user_nickname',
            'sifre' => 'required|string|min:4|max:22',
            'sifre_tekrar' => 'required|same:sifre',
            'user_type_id' => 'required|exists:usertype,usertype_id',
            'user_status_id' => 'required|exists:user_status_models,user_status_id',
            'kullanici_foto' => 'sometimes|nullable|image|mimes:jpeg,png,jpg|max:2048',
        ], [
            'adsoyad.required' => 'Ad Soyad alanı boş bırakılamaz.',
            'kullanici_adi.required' => 'Kullanıcı Adı alanı boş bırakılamaz.',
            'sifre.required' => 'Şifre alanı boş bırakılamaz.',
            'sifre_tekrar.required' => 'Şifre Tekrar alanı boş bırakılamaz.',
            'user_type_id.required' => 'Kullanıcı Türü seçimi boş bırakılamaz.',
            'user_status_id.required' => 'Kullanıcı Durumu seçimi boş bırakılamaz.',
            'max' => 'Girilen değer çok uzun.',
            'same' => 'Girdiğiniz şifreler birbiriyle eşleşmiyor.',
            'unique' => 'Bu kullanıcı adı zaten alınmış.',
            'exists' => 'Geçersiz bir seçim yaptınız.',
            'mimes' => 'Dosya izin verilen türde değil.',
        ]);

        try {
            $fotoAdi = null;
            if ($request->hasFile('kullanici_foto')) {
                $file = $request->file('kullanici_foto');
                $fotoAdi = 'user_'.time().'.'.$file->getClientOriginalExtension();
                $file->storeAs('user', $fotoAdi, 'public');
            }

            UsersModel::create([
                'user_name' => $request->input('adsoyad'),
                'user_nickname' => $request->input('kullanici_adi'),
                'user_password' => bcrypt($request->input('sifre')),
                'user_photo' => $fotoAdi,
                'user_type_id' => $request->input('user_type_id'),
                'user_status_id' => $request->input('user_status_id'),
            ]);

            return redirect()->route('user')->with('success', 'Kullanıcı başarıyla eklendi.');

        } catch (Exception $e) {
            Log::error('Kullanıcı ekleme hatası: '.$e->getMessage());

            return redirect()->back()
                ->withInput()
                ->with('error', 'Kullanıcı eklenirken bir hata oluştu.');
        }
    }

    public function getUser()
    {
        try {
            $users = DB::table('users')
                ->join('usertype', 'users.user_type_id', '=', 'usertype.usertype_id')
                ->join('user_status_models', 'users.user_status_id', '=', 'user_status_models.user_status_id')
                ->select(
                    'users.*',
                    'usertype.usertype_name as tur_adi',
                    'user_status_models.user_status_name as durum_adi'
                )
                ->get();

            return view('lpanel.front.usersetting', compact('users'));

        } catch (Exception $e) {
            Log::error('Kullanıcı listeleme hatası: '.$e->getMessage());

            return redirect()->back()->with('error', 'Kullanıcılar listelenirken bir hata oluştu.');
        }
    }

    public function updateUser($id)
    {
        $user = DB::table('users')->where('user_id', $id)->first();

        if (! $user) {
            return redirect()->back()->with('error', 'Kullanıcı bulunamadı.');
        }

        return view('lpanel.front.userupdate', compact('user'));
    }

    public function updateUserAction(Request $request, $id)
    {
        $request->validate([
            'adsoyad' => 'string|max:25',
            'kullanici_adi' => 'string|max:50|unique:users,user_nickname,'.$id.',user_id',
            'sifre' => 'nullable|string|min:4|max:22',
            'sifre_tekrar' => 'same:sifre',
            'user_type_id' => 'exists:usertype,usertype_id',
            'user_status_id' => 'exists:user_status_models,user_status_id',
            'kullanici_foto' => 'sometimes|nullable|image|mimes:jpeg,png,jpg|max:2048',
        ], [
            'max' => 'Girilen değer çok uzun.',
            'same' => 'Girdiğiniz şifreler birbiriyle eşleşmiyor.',
            'unique' => 'Bu kullanıcı adı zaten alınmış.',
            'exists' => 'Geçersiz bir seçim yaptınız.',
            'mimes' => 'Dosya izin verilen türde değil.',
        ]);

        try {
            $currentUser = DB::table('users')->where('user_id', $id)->first();

            if (! $currentUser) {
                return redirect()->back()->with('error', 'Güncellenecek kullanıcı bulunamadı.');
            }

            $data = [
                'user_name' => strip_tags($request->input('adsoyad')),
                'user_nickname' => strip_tags($request->input('kullanici_adi')),
                'user_type_id' => $request->input('user_type_id') ?? $currentUser->user_type_id,
                'user_status_id' => $request->input('user_status_id') ?? $currentUser->user_status_id,

                'updated_at' => now(),
            ];

            if ($request->filled('sifre')) {
                $data['user_password'] = bcrypt($request->input('sifre'));
            }

            if ($request->hasFile('kullanici_foto')) {
                if ($currentUser && $currentUser->user_photo) {
                    Storage::disk('public')->delete('user/'.$currentUser->user_photo);
                }

                $file = $request->file('kullanici_foto');
                $fileName = 'user_'.time().'.'.$file->getClientOriginalExtension();
                $file->storeAs('user', $fileName, 'public');

                $data['user_photo'] = $fileName;
            } else {
                $data['user_photo'] = $currentUser->user_photo ?? null;
            }

            DB::table('users')
                ->where('user_id', $id)
                ->update($data);

            return redirect()->back()->with('success', 'Kullanıcı bilgileri başarıyla güncellendi!');

        } catch (Exception $e) {
            Log::error('Güncelleme hatası: '.$e->getMessage());

            return redirect()->back()
                ->withInput()
                ->with('error', 'Veritabanı işlemi sırasında bir hata oluştu.');
        }
    }

    public function deleteUser($id)
    {
        try {
            $user = DB::table('users')->where('user_id', $id)->first();

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

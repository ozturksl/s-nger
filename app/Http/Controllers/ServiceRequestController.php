<?php

namespace App\Http\Controllers;

use App\Models\CustomerMessageModel;
use App\Models\ProductModel;
use App\Models\ServiceRequestModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceRequestController extends Controller
{
    public function getService()
    {
        try {
            $urunSayisi = ProductModel::count();

            $talepSayisi = ServiceRequestModel::count();

            $mesajSayisi = CustomerMessageModel::count();

            $services = DB::table('service_request_models')
                ->join('service_type_models', 'service_request_models.service_type_id', '=', 'service_type_models.service_type_id')
                ->select('service_request_models.*', 'service_type_models.service_type_name as servis_tip_adi')
                ->get();

            $messages = DB::table('customer_message_models')
                ->select('customer_message_models.*')->get();

            return view('lpanel.front.index', compact('services', 'urunSayisi', 'talepSayisi', 'messages', 'mesajSayisi'));

        } catch (Exception $e) {
            Log::error('Hata oluştu: '.$e->getMessage());

            return redirect()->back()->with('error', 'Bir hata oluştu.');
        }
    }

    public function addService(Request $request)
    {
        try {
            ServiceRequestModel::create([
                'servicereq_taker' => $request->input('hizmet_alan_adi'),
                'servicereq_number' => $request->input('hizmet_alan_telefon'),
                'servicereq_message' => $request->input('hizmet_alan_aciklama'),
                'service_type_id' => $request->input('service_type_id'),
                'created_at' => now(),
            ]);

            return redirect()->route('request')->with('success', 'Hizmet talebi başarıyla gönderildi. En kısa zamanda size dönüş yapılacaktır.');
        } catch (Exception $e) {
            Log::error('Talep gönderilirken hata oluştu: '.$e->getMessage());

            return redirect()->back()
                ->withInput()
                ->with('error', 'Veritabanı işlemi sırasında bir hata oluştu.');
        }
    }

    public function deleteService($id)
    {
        try {
            $services = DB::table('service_request_models')->where('servicereq_id', $id)->first();

            if (! $services) {
                return redirect()->back()->with('error', 'Talep veritabanında bulunamadı.');
            }

            DB::table('service_request_models')->where('servicereq_id', $id)->delete();

            return redirect()->back()->with('success', 'Talep başarıyla silindi.');

        } catch (Exception $e) {
            Log::error('Silme hatası: '.$e->getMessage());

            return redirect()->back()->with('error', 'Silme işlemi başarısız oldu.');
        }
    }

    public function addMessage(Request $request)
    {
        try {
            CustomerMessageModel::create([
                'customer_name' => $request->input('adsoyadfr'),
                'customer_message' => $request->input('kullanici_mesaj'),
                'created_at' => now(),
            ]);

            return redirect()->back()->with('success', 'Mesajınız başarıyla gönderildi. En kısa zamanda size dönüş yapılacaktır.');
        } catch (Exception $e) {
            Log::error('Mesaj gönderilirken hata oluştu: '.$e->getMessage());

            return redirect()->back()
                ->withInput()
                ->with('error', 'Veritabanı işlemi sırasında bir hata oluştu.');
        }
    }

    public function deleteMessage($id)
    {
        try {
            $messages = DB::table('customer_message_models')->where('customer_id', $id)->first();

            if (! $messages) {
                return redirect()->back()->with('error', 'Mesaj veritabanında bulunamadı.');
            }

            DB::table('customer_message_models')->where('customer_id', $id)->delete();

            return redirect()->back()->with('success', 'Mesaj başarıyla silindi.');

        } catch (Exception $e) {
            Log::error('Silme hatası: '.$e->getMessage());

            return redirect()->back()->with('error', 'Silme işlemi başarısız oldu.');
        }
    }
}

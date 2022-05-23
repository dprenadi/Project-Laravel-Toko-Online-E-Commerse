<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Province;
use App\Models\Provincies;
use App\Models\Regency;
use App\Models\City;
use Kavist\RajaOngkir\Facades\RajaOngkir;


class LocationController extends Controller
{
    public function provinces(Request $request)
    {
        return Province::all();
    }

    public function regencies(Request $request, $provinces_id)
    {
        return Regency::where('province_id', $provinces_id)->get();
    }

    // Raja Ongkir
    public function provincies(Request $request)
    {
        return Provincies::all();
    }

    public function City($province_id)
    {
        return City::where('province_id', $province_id)->get();
    }

    public function City_ID($city_id)
    {
        return City::find($city_id);
    }

    public function checkOngkir(Request $request)
    {
        $cost =  RajaOngkir::ongkosKirim([
            'origin' => 457, //ID kota / Kabupaten asal/ 113 adalah kode kota Bekasi
            // 'originType' => "city",
            'destination' => $request->city_destination, //Id Kota //kabupaten tujuan
            // 'destinationType' => "city",
            'weight' => 100, // berat barang dalam gram sample 100
            'courier' => $request->courier // kode kurir pengiriman: ['jne', 'tiki', 'pos'] untuk starter
        ])->get();

        return response()->json([
            'success' => true,
            'message' => 'List Data Cost All Courir: ' . $request->courier,
            'data'    => $cost
        ]);
    }
}

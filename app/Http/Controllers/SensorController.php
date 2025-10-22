<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SensorController extends Controller
{
    public function showForm()
    {
        return view('sensor');
    }

    public function prosesData(Request $request)
    {
        $data = $request->validate([
            'lokasi_sensor' => 'required|string',
            'kedalaman_air' => 'required|numeric',
            'curah_hujan' => 'required|numeric',
            'kelembapan_tanah' => 'required|numeric',
        ]);

        return view('hasil', ['data' => $data]);
    }
}

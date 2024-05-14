<?php

namespace App\Http\Controllers;

use App\Models\Ucapan;
use Illuminate\Http\Request;

class UcapanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dea_sidik(Request $request)
    {
        $ucapan = Ucapan::all();

        $tamu = $request->input('to');

        if(is_null($tamu)){
            return view('welcome');
        } else {
            return view('dea-sidik', 
            [
                'tempat' => 'Kediaman Mempelai Perempuan di Damartoharjo, Kalitinggar, Kec. Padamara, Kabupaten Purbalingga, Jawa Tengah',
                'hari' => 'Rabu - Kamis',
                'tanggal' => '26 - 27',
                'acara' => 'Akad Nikah',
                'tamu' => $tamu,
                'nama1' => 'Dea',
                'nama2' => 'Sidik',
                'ucapan' => $ucapan,
                'maps' => 'https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3232.5181112744426!2d109.3076510221811!3d-7.379070284168603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zN8KwMjInNDQuNSJTIDEwOcKwMTgnMjQuOSJF!5e0!3m2!1sid!2sid!4v1715584962004!5m2!1sid!2sid'
            ]
        );
        }
    }

    public function sidik_dea(Request $request)
    {
        $ucapan = Ucapan::all();

        $tamu = $request->input('to');

        if(is_null($tamu)){
            return view('welcome');
        } else {
            return view('sidik-dea', 
            [
                'tempat' => 'Kediaman Mempelai Pria di III, Sikapat, Kec. Sumbang, Kabupaten Banyumas, Jawa Tengah',
                'tanggal' => '25 - 26',
                'hari' => 'Selasa - Rabu',
                'acara' => 'Tasyakuran',
                'ucapan' => $ucapan,
                'tamu' => $tamu,
                'nama2' => 'Dea',
                'nama1' => 'Sidik',
                'maps' => 'https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d1762.6799864803168!2d109.2798014514764!3d-7.3446137943579695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zN8KwMjAnMzkuMyJTIDEwOcKwMTYnNDcuNSJF!5e0!3m2!1sid!2sid!4v1715584872482!5m2!1sid!2sid'
            ]
        );
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Ucapan::create([
            'nama' => $request->input('nama'),
            'ucapan' => $request->input('ucapan'),
            'konfirmasi' => $request->input('konfirmasi'),
        ]);
        return redirect()->back()->with('notif', 'Ucapan Telah Terkirim, Terimakasih atas Ucapan dan Doa Restunya');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ucapan $ucapan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ucapan $ucapan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ucapan $ucapan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ucapan $ucapan)
    {
        //
    }
}

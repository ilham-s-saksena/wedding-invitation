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
                'tamu' => $tamu,
                'nama1' => 'Dea',
                'nama2' => 'Sidik',
                'ucapan' => $ucapan,
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
                'ucapan' => $ucapan,
                'tamu' => $tamu,
                'nama2' => 'Dea',
                'nama1' => 'Sidik'
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

<?php

namespace App\Http\Controllers;

use App\Models\Ujikom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class UjikomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $sort = $request->get('sort', 'nama_siswa');
        $order = $request->get('order', 'asc');

        $data = Ujikom::orderBy($sort, $order)->get();

        // total data
        $total = Ujikom::count();
        $totalLuas   = Ujikom::whereNotNull('luas')->count();
        $totalVolume = Ujikom::whereNotNull('volume')->count();

        // hitung persentase (hindari division by zero)
        $persenLuas   = $total > 0 ? round(($totalLuas / $total) * 100, 2) : 0;
        $persenVolume = $total > 0 ? round(($totalVolume / $total) * 100, 2) : 0;
        return view('ujikom', compact(
            'data',
            'sort',
            'order',
            'totalLuas',
            'totalVolume',
            'persenLuas',
            'persenVolume'
        ));
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
        $validated = $request->validate([
            'nama_siswa'     => 'required|string|max:255',
            'nama_sekolah'   => 'required|string|max:255',
            'usia'           => 'required|integer',
            'alamat_rumah'   => 'required|string|max:255',
            'nomor_telepon'  => 'required|string|max:20',
            'bangun_datar'   => 'nullable|string',
            'bangun_ruang'   => 'nullable|string'
        ]);

        $luas = null;
        $volume = null;

        // =================
        // Hitung Luas
        // =================
        switch ($request->bangun_datar) {
            case 'persegi':
                $luas = $request->sisi * $request->sisi;
                break;

            case 'segitiga':
                $luas = 0.5 * ($request->alas * $request->tinggi);
                break;

            case 'lingkaran':
                $luas = 3.14 * ($request->jari_jari * $request->jari_jari);
                break;

        }

        // =================
        // Hitung Volume
        // =================
        switch ($request->bangun_ruang) {
            case 'kubus':
                $volume = $request->sisi_kubus * $request->sisi_kubus * $request->sisi_kubus;
                break;

            case 'limas':
                $luasAlasSegitiga = 0.5 * ($request->alas_limas * $request->tinggi_segitiga);
                $volume = (1 / 3) * $luasAlasSegitiga * $request->tinggi_limas;
                break;

            case 'tabung':
                $volume = 3.14 * ($request->jari_tabung * $request->jari_tabung) * $request->tinggi_tabung;
                break;

        }

        // =================
        // Simpan ke DB
        // =================
        Ujikom::create([
            'nama_siswa'    => $validated['nama_siswa'],
            'nama_sekolah'  => $validated['nama_sekolah'],
            'usia'          => $validated['usia'],
            'alamat_rumah'  => $validated['alamat_rumah'],
            'nomor_telepon' => $validated['nomor_telepon'],
            'bangun_datar'  => $validated['bangun_datar'],
            'bangun_ruang'  => $validated['bangun_ruang'],
            'luas'          => $luas,
            'volume'        => $volume,
        ]);

        return redirect()->route('ujikom.index')->with('success', 'Data berhasil disimpan!');
    }


    /**
     * Display the specified resource.
     */
    public function show(Ujikom $ujikom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ujikom $ujikom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ujikom $ujikom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ujikom $ujikom)
    {
        //
    }
}

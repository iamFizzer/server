<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = DB::table('vmata_kuliah')->where('aktif_kur','t')->get();
    //   $data = $this->MahasiswaAll();
    //   dd($data);
      return response()->json([
        'data'=>$mahasiswa
      ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mahasiswa = mahasiswa::create([
            'nim' => $request->nim,
            'nama'=> $request->nama,
            'alamat' => $request->alamat
        ]);
        return response()->json([
            'data'=> $mahasiswa
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(mahasiswa $mahasiswa)
    {
       return response()->json([
            'data'=>$mahasiswa
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, mahasiswa $mahasiswa)
    {
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->save();

        return response()->json([
            'data'=> $mahasiswa
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return response()->json([
            'message'=>'data berhasil di hapus'
        ],204);
    }
}

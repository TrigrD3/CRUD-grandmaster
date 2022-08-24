<?php

namespace App\Http\Controllers;

use App\Models\Grandmaster;
use Illuminate\Http\Request;

class GrandmasterController extends Controller
{
    public function index()
    {
        $grandmaster = Grandmaster::all();
        $data = [
            'grandmaster' => $grandmaster,
        ];
        return view('index', $data);
    }
    public function create(Request $req)
    {
        $grandmaster = Grandmaster::create([
            'nama' => $req->nama,
            'tanggal_lahir' => $req->tanggal_lahir,
            'rating' => $req->rating,
            'deskripsi' => $req->deskripsi,
        ]);

        return redirect()->route('grandmaster.index')->with('status', 'Tambah Data Berhasil');
    }
    public function update(Request $req)
    {
        $grandmaster = Grandmaster::where('id', $req->id)->update([
            'nama' => $req->nama,
            'tanggal_lahir' => $req->tanggal_lahir,
            'rating' => $req->rating,
            'deskripsi' => $req->deskripsi,
        ]);

        return redirect()->route('grandmaster.index')->with('status', 'Edit Data Berhasil');

    }
    public function delete($id)
    {
        $grandmaster = Grandmaster::find($id);
        $grandmaster->delete();
        return redirect()->route('grandmaster.index')->with('status', 'Hapus Data Berhasil');

    }
    public function getKaryawan($id)
    {
        $grandmaster = Grandmaster::find($id);

        return json_encode($grandmaster);

    }
}
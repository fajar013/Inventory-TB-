<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Supplaier;
use App\Models\Barang_masuk;
use Illuminate\Http\Request;

class MasukController extends Controller
{
    public function index()
    {
        // $barang = Barang::all();
        $masuk = Barang_masuk::all();
        return view('content.barang_masuk.barang_masuk', ['barang_masuks' => $masuk, 'title' => "BARANG MASUK"]);
        // $barang = Barang::all();
        // return view('content.barang', ['barangs' => $barang], ['title' => "BARANG"]);
    }




    public function barang()
    {
        $barang = Barang::all();
        $supplaier = Supplaier::all();
        return view('content.barang_masuk.barang_masuk', [
            'barangs' => $barang,
            'suppaiers' => $supplaier,
            'title' => "BARANG MASUK"
        ]);
    }







    public function create()
    {
        $barang = Barang::all();
        $supplaier = Supplaier::all();
        return view('form.tambah_barangm', [
            'barangs' => $barang,
            'suppaiers' => $supplaier,
            'title' => "TAMBAH BARANG",
        ]);
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'tgl_masuk'  => 'required',
            'supplaier_id' => 'required',
            'barang_id' => 'required',
        ]);

        Barang_masuk::create([
            'tgl_masuk' => $request->tgl_masuk,
            'supplaier_id' => $request->supplaier_id,
            'barang_id' => $request->barang_id,
        ]);

        return redirect('/masuk');
    }
}

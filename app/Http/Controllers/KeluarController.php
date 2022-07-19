<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use PDF;
use App\Models\Pelanggan;
use App\Models\Barang_masuk;
use Illuminate\Http\Request;
use App\Models\Barang_keluar;

class KeluarController extends Controller
{
    public function index()
    {
        // $barang = Barang::all();
        $keluar = Barang_keluar::all();
        return view('content.barang_keluar.barang_keluar', ['barang_keluars' => $keluar, 'title' => "BARANG MASUK"]);
        // $barang = Barang::all();
        // return view('content.barang', ['barangs' => $barang], ['title' => "BARANG"]);
    }




    public function barang($id)
    {
        $barang_keluar = Barang_keluar::find($id);
        return view('content.barang_keluar.detail_barang_keluar', [
            'pelanggans' => $barang_keluar->pelanggan,
            'barangs' => $barang_keluar->barang,
            'barang_keluars' => $barang_keluar,
            'title' => "BARANG KELUAR"
        ]);
    }


    public function printbk()
    {
        $keluar = Barang_keluar::all();
        $pelanggan = Pelanggan::all();

        $pdf = PDF::loadview('content.barang_keluar.cetak_barang_keluar', [
            'pelanggans' => $pelanggan,
            'barang_keluars' => $keluar,
        ]);
        return $pdf->download('barang-keluar.pdf');
    }




    public function create()
    {
        $barang = Barang::all();
        $pelanggan = Pelanggan::all();
        return view('form.tambah_barangk', [
            'barangs' => $barang,
            'pelanggans' => $pelanggan,
            'title' => "TAMBAH BARANG",
        ]);
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'tgl_keluar'  => 'required',
            'pelanggan_id' => 'required',
            'barang_id' => 'required',
        ]);

        Barang_keluar::create([
            'tgl_keluar' => $request->tgl_keluar,
            'pelanggan_id' => $request->pelanggan_id,
            'barang_id' => $request->barang_id,
        ]);

        return redirect('/keluar');
    }


    public function editk($id)
    {
        $barang_keluar = Barang_keluar::find($id);
        $barang = Barang::all();
        $pelanggan = Pelanggan::all();
        return view('form.edit_barangk', [
            'barang_keluars' => $barang_keluar,
            'barangs' => $barang,
            'pelanggans' => $pelanggan,
            'title' => "EDIT BARANG",
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'tgl_keluar'  => 'required',
            'pelanggan_id' => 'required',
            'barang_id' => 'required',
        ]);

        $barang_keluar = Barang_keluar::find($id);
        $barang_keluar->tgl_keluar          = $request->kode;
        $barang_keluar->barang_id           = $request->barang_id;
        $barang_keluar->pelanggan_id           = $request->pelanggan_id;
        $barang_keluar->save();
        return redirect('/keluar');
    }


    public function destroy($id)
    {
        $barang_keluar = Barang_keluar::find($id);
        $barang_keluar->delete();
        return redirect('/keluar');
    }
}

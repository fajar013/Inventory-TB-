<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {

        //return view('content.pelanggan.pelanggan', ['title' => "PELANGGAN"]);
        $pelanggan = Pelanggan::all();
        return view('content.pelanggan.pelanggan', ['pelanggans' => $pelanggan], ['title' => "PELANGGAN"]);
    }
    public function create()
    {

        return view('form.tambah_pelanggan', ['title' => "TAMBAH PELANGGAN"]);
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3|max:50',
            'no_hp' => 'required',
            'alamat' => 'required',
        ]);

        Pelanggan::create([

            'name' => $request->name,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
        ]);

        return redirect('/pelanggan');
    }


    public function editp($id)
    {
        $pelanggan = Pelanggan::find($id);
        return view('form.edit_pelanggan', [
            'pelanggans' => $pelanggan,
            'title' => "EDIT PELANGGAN",
        ]);
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|min:3|max:50',
            'no_hp' => 'required',
            'alamat' => 'required',
        ]);

        $pelanggan = Pelanggan::find($id);
        $pelanggan->name           = $request->name;
        $pelanggan->no_hp          = $request->no_hp;
        $pelanggan->alamat          = $request->alamat;
        $pelanggan->save();
        return redirect('/pelanggan');
    }


    public function pdestroy($id)
    {
        $pelanggan = Pelanggan::find($id);
        $pelanggan->delete();
        return redirect('/pelanggan');
    }
}

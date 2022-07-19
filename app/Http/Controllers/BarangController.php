<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Category;
use Illuminate\Http\Request;

class BarangController extends Controller
{

    public function index()
    {

        $barang = Barang::all();
        return view('content.barang.barang', ['barangs' => $barang], ['title' => "BARANG"]);
    }

    public function category()
    {
        $category = Category::all();
        return view('content.category.category', ['categories' => $category], ['title' => "KATEGORI"]);
    }


    public function create()
    {
        $category = Category::all();
        return view('form.tambah_barang', ['categories' => $category], ['title' => "TAMBAH BARANG"]);
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'kode'  => 'required',
            'nama' => 'required|min:3|max:50',
            'stok' => 'required',
            'harga' => 'required',
            'category_id' => 'required'
        ]);

        Barang::create([
            'kode' => $request->kode,
            'nama' => $request->nama,
            'stok' => $request->stok,
            'harga' => $request->harga,
            'category_id' => $request->category_id,
        ]);

        return redirect('/barang');
    }


    public function editb($id)
    {
        $category = Category::all();
        $barang = Barang::find($id);
        return view('form.edit_barang', [
            'barangs' => $barang,
            'title' => "EDIT BARANG",
            'categories' => $category
        ]);
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'kode'          => 'required',
            'nama'          => 'required|min:3|max:50',
            'stok'          => 'required',
            'harga'         => 'required',
            'category_id'   => 'required'
        ]);

        $barang = Barang::find($id);
        $barang->kode           = $request->kode;
        $barang->nama           = $request->nama;
        $barang->stok           = $request->stok;
        $barang->harga          = $request->harga;
        $barang->category_id    = $request->category_id;
        $barang->save();
        return redirect('/barang');
    }


    public function destroy($id)
    {
        $barang = Barang::find($id);
        $barang->delete();
        return redirect('/barang');
    }
}

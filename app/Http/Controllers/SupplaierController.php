<?php

namespace App\Http\Controllers;

use App\Models\Supplaier;
use Illuminate\Http\Request;

class SupplaierController extends Controller
{
    public function index()
    {


        $supplaier = Supplaier::all();
        return view('content.supplaier.supplaier', ['suppaiers' => $supplaier], ['title' => "SUPPLAIER"]);
    }


    public function screate()
    {
        $suplaier = Supplaier::all();
        return view('form.tambah_supplaier', ['supplaiers' => $suplaier], ['title' => "TAMBAH SUPPLAIER"]);
    }


    public function store(Request $request)
    {
        $this->validate($request, [

            'name' => 'required|min:3|max:50',
            'no_hp' => 'required',
            'alamat' => 'required',
        ]);

        Supplaier::create([

            'name' => $request->name,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
        ]);

        return redirect('/supplaier');
    }





    public function edits($id)
    {
        $suplaier = Supplaier::find($id);
        return view('form.edit_supplaier', [
            'suplaiers' => $suplaier,
            'title' => "EDIT SUPPLAIER",
        ]);
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|min:3|max:50',
            'no_hp' => 'required',
            'alamat' => 'required',
        ]);

        $supplaier = Supplaier::find($id);
        $supplaier->name           = $request->name;
        $supplaier->no_hp          = $request->no_hp;
        $supplaier->alamat          = $request->alamat;
        $supplaier->save();
        return redirect('/supplaier');
    }


    public function destroy($id)
    {
        $supplaier = Supplaier::find($id);
        $supplaier->delete();
        return redirect('/supplaier');
    }
}

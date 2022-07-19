<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $category = Category::all();
        return view('content.category.category', ['categories' => $category], ['title' => "KATEGORI"]);
    }


    public function barang($id)
    {
        $category = Category::find($id);
        return view('content.category.detail_category', [
            'barangs' => $category->barang,
            'category' => $category,
            'title' => "KATEGORI"
        ]);
    }


    public function ccreate()
    {
        $category = Category::all();
        return view('form.tambah_category', ['categories' => $category], ['title' => "TAMBAH KATEGORI"]);
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3|max:50',
        ]);
        Category::create([
            'name' => $request->name,
        ]);

        return redirect('/category');
    }


    public function editc($id)
    {
        $category = Category::find($id);
        return view('form.edit_category', [
            'title' => "EDIT KATEGORI",
            'categories' => $category
        ]);
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'          => 'required|min:3|max:50',
        ]);

        $category = Category::find($id);
        $category->name = $request->name;
        $category->save();
        return redirect('/category');
    }


    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('/category');
    }
}

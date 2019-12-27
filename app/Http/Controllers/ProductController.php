<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $data_product = \App\Product::all();
        return view('product.index', ['data_product' => $data_product]);
    }

    public function create(Request $request) {
        \App\Product::create($request->all());
        return redirect('/product')->with('sukses', 'Data berhasil ditambahkan');
    }

    public function edit($id) {
        $data_product = \App\Product::find($id);
        return view('product.edit', ['product' => $data_product]);
    }

    public function editAction(Request $request, $id) {
        $data_product = \App\Product::find($id);
        $data_product->update($request->all());
        return redirect('/product')->with('sukses', 'Data berhasil diupdate');
    }

    public function delete($id) {
        $data_product = \App\Product::find($id);
        $data_product->delete($data_product);
        return redirect('/product')->with('sukses_delete', 'Data berhasil dihapus');
    }

}

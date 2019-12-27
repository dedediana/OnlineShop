<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $data_user = \App\User::all();
        return view('user.index', ['data_user' => $data_user]);
    }

    public function create(Request $request) {
        \App\User::create($request->all());
        return redirect('/user')->with('sukses', 'Data berhasil ditambahkan');
    }

    public function edit($id) {
        $data_user = \App\User::find($id);
        return view('user.edit', ['user' => $data_user]);
    }

    public function editAction(Request $request, $id) {
        $data_user = \App\User::find($id);
        $data_user->update($request->all());
        return redirect('/user')->with('sukses', 'Data berhasil diupdate');
    }

    public function delete($id) {
        $data_user = \App\User::find($id);
        $data_user->delete($data_user);
        return redirect('/user')->with('sukses_delete', 'Data berhasil dihapus');
    }
}

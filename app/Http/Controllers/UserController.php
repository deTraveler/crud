<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index() {
        // Mengambil data dari tbluser
        $users = DB::table('tbluser')->get();
        // Lalu kirim ke view
        return view('index', ['users'=>$users]);
    }

    public function create() {
        return view('create');
    }

    public function store(Request $request) {
        // Insert data ke dalam tabel database
        DB::table('tbluser')->insert([
            'name' => $request->name,
            'age' => $request->age,
            'address' => $request->address
        ]);

        return redirect('/user');
    }

    public function edit($id) {
        // Ambil data pegawai berdasarkan id yang dipilih
        $users = DB::table('tbluser')->where('id', $id)->get();
        // Lalu passing data useryang didapat ke view edit.blade.php
        return view('edit', ['users'=>$users]);
    }

    public function update(Request $request) {
        DB::table('tbluser')->where('id', $request->id)->update([
            'name' => $request->name,
            'age' => $request->age,
            'address' => $request->address
        ]);
        return redirect('/user');
    }

    public function delete($id) {
        // Menghapus data yang dipilih
        DB::table('tbluser')->where('id', $id)->delete();
        return redirect('/user');
    }
}

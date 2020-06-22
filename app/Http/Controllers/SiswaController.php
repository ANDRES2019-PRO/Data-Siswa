<?php

namespace App\Http\Controllers;

use App\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data_siswa = Siswa::where('nama_depan', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $data_siswa = Siswa::all();
        }
        return view('siswa.index', ['data_siswa' => $data_siswa]);
    }

    public function create(Request $request)
    {
        Siswa::create($request->all());
        return redirect('/siswa')->with('sukses', 'data berhasil diinput');
    }

    public function edit($id)
    {
        $siswa = Siswa::find($id);
        return view('siswa/edit', ['siswa' => $siswa]);
    }
    public function update(Request $request, $id)
    {
        $siswa = Siswa::find($id);
        $siswa->update($request->all());
        return redirect('/siswa')->with('sukses', 'data berhasil diubah');
    }
    public function delete(Request $request, $id)
    {
        $siswa = Siswa::find($id);
        $siswa->delete($request);
        return redirect('/siswa')->with('sukses', 'data berhasil dihapus');
    }
}

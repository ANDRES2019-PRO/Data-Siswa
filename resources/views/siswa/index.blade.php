@extends('layouts.master')

@section('tittle', 'Data Siswa')

@section('content')



@if(session('sukses'))
<div class="alert alert-success" role="alert">
    {{session('sukses')}}
</div>
@endif

<div class="row">
    {{-- <b<!-- Button trigger modal --> --}}
    <div class="col-6">
        <h1>Data Siswa</h1>
    </div>
    <div class="col-6">
        <button type="button" class="btn btn-primary float-right btn-sm" data-toggle="modal"
            data-target="#exampleModal">
            Tambah data Siswa
        </button>
    </div>


    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama Depan</th>
                <th scope="col">Nama Belakang</th>
                <th scope="col">Agama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Alamat</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach($data_siswa as $siswa)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$siswa->nama_depan}}</td>
                <td>{{$siswa->nama_belakang}}</td>
                <td>{{$siswa->agama}}</td>
                <td>{{$siswa->jenis_kelamin}}</td>
                <td>{{$siswa->alamat}}</td>
                <td>
                    <a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                    <a href="/siswa/{{$siswa->id}}/delete" class="btn btn-danger btn-sm" onClick="return confirm('Yakin dihapus ?')">Delete</a>
                </td>
                @endforeach
            </tr>
        </tbody>
    </table>
</div>
</div>
{{-- !-- Modal --> --}}
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/siswa/create" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nama_depan">Nama Depan</label>
                        <input type="text" class="form-control" id="nama_depan" name="nama_depan"
                            placeholder="Nama Depan">
                    </div>
                    <div class="form-group">
                        <label for="nama_belakang">Nama Belakang</label>
                        <input type="text" class="form-control" name="nama_belakang" id="nama_belakang"
                            placeholder="Nama belakang">
                    </div>
                    <div class="form-group">
                        <label for="Jenis Kelamin">Jenis Kelamin</label>
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                            <option>Pilih Jenis Kelamin</option>
                            <option value="L">L</option>
                            <option value="P">P</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Agama">Agama</label>
                        <input type="text" class="form-control" id="agama" placeholder="Agama" name="agama">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        @endsection

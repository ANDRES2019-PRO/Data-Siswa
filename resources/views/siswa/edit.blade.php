@extends('layouts.master')

@section('tittle', 'Edit Data Siswa')
@section('content')



@if(session('sukses'))
<div class="alert alert-success" role="alert">
    {{session('sukses')}}
</div>
@endif
<div class="row">
    <div class="col-lg-12">
        <form action="/siswa/{{$siswa->id}}/update" method="post">
            @csrf
            <div class="form-group">
                <label for="nama_depan">Nama Depan</label>
                <input type="text" value="{{$siswa->nama_depan}}" class="form-control" id="nama_depan" name="nama_depan"
                    placeholder="Nama Depan">
            </div>
            <div class="form-group">
                <label for="nama_belakang">Nama Belakang</label>
                <input type="text" value="{{$siswa->nama_belakang}}" class="form-control" name="nama_belakang"
                    id="nama_belakang" placeholder="Nama belakang">
            </div>
            <div class="form-group">
                <label for="Jenis Kelamin">Jenis Kelamin</label>
                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                    <option>Pilih Jenis Kelamin</option>
                    <option value="L" @if($siswa->jenis_kelamin == 'L') selected @endif>L</option>
                    <option value="P" @if($siswa->jenis_kelamin == 'P') selected @endif>P</option>

                </select>
            </div>
            <div class="form-group">
                <label for="Agama">Agama</label>
                <input type="text" value="{{$siswa->agama}}" class="form-control" value="{{$siswa->agama}}" id="agama"
                    placeholder="Agama" name="agama">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3">{{$siswa->alamat}}</textarea>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-warning">Update</button>
            </div>
        </form>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
@endsection

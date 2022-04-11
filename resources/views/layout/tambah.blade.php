@extends('header.main')

@section('container-fluid')

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tambah Data Pengguna</h1>

<form action="{{route('store')}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nip" class="col-sm-2 col-form-label">Id</label>:
        <div class="col-sm-9">
            <input type="text" class="form-control" name="id">
        </div>
        <div class="form-group">
            <label for="nip" class="col-sm-2 col-form-label">NIP</label>:
            <div class="col-sm-9">
                <input type="text" class="form-control" name="nip">
            </div>
        </div>
        <div class="form-group">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>:
            <div class="col-sm-9">
                <input type="text" class="form-control" name="nama">
            </div>
        </div>
        <div class="form-group">
            <label for="username" class="col-sm-2 col-form-label">Username</label>:
            <div class="col-sm-9">
                <input type="text" class="form-control" name="username">
            </div>
        </div>
        <div class="form-group">
            <label for="Password" class="col-sm-2 col-form-label">Password</label>:
            <div class="col-sm-9">
                <input type="password" class="form-control" name="Password">
            </div>
        </div>
        <div class="form-group">
            <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>:
            <div class="col-sm-9">
                <input type="text" class="form-control" name="jabatan">
            </div>
        </div>
        <div class="form-group">
            <label for="instansi" class="col-sm-2 col-form-label">Instansi</label>:
            <div class="col-sm-9">
                <input type="text" class="form-control" name="instansi">
            </div>
        </div>
        <div class="form-group">
            <label for="instansi" class="col-sm-2 col-form-label">Bidang</label>:
            <div class="col-sm-9">
                <input type="text" class="form-control" name="bidang">
            </div>
        </div>
        <button type="cancel" class="col-md-1 btn btn-primary">
            <a href="http://127.0.0.1:8000/admin" class="text-decoration-none text-light">Cancel</a>
        </button>
        <button type="submit" class="col-md-1 btn btn-primary">Save</button>
</form>
@endsection


{{-- Radio button --}}

{{-- <fieldset class="row mb-3">
    <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
    <div class="col-sm-10">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
            <label class="form-check-label" for="gridRadios1">
                First radio
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
            <label class="form-check-label" for="gridRadios2">
                Second radio
            </label>
        </div>
        <div class="form-check disabled">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
            <label class="form-check-label" for="gridRadios3">
                Third disabled radio
            </label>
        </div>
    </div>
</fieldset>
<div class="row mb-3">
    <div class="col-sm-10 offset-sm-2">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck1">
            <label class="form-check-label" for="gridCheck1">
                Example checkbox
            </label>
        </div>
    </div>
</div> --}}
@extends('layouts.main')

@section('container')
<form>
    <div class="row mb-3">
      <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
      <div class="col-sm-10">
        <input type="date" class="form-control" id="tanggal" name="tanggal">
      </div>
    </div>
    <div class="row mb-3">
        <label for="tempat" class="col-sm-2 col-form-label">Tempat</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="tempat" name="tempat">
        </div>
    </div>
    <div class="row mb-3">
        <label for="jam" class="col-sm-2 col-form-label">Jam</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="jam" name="jam">
        </div>
    </div>
    <div class="row mb-3">
        <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="keterangan" name="keterangan">
        </div>
    </div>
    <div class="row mb-3">
      <label for="peserta" class="col-sm-2 col-form-label">Keterangan</label>
      <div class="col-sm-10">
        <div class="multi_select_box">
          <select class="multi_select" multiple>
            <option value="php">Cyntia Maripossa - Dinas Pendidikan</option>
            <option value="php">Shakira Thalita - Dinas Pendidikan</option>
            <option value="php">Cyntia Maripossa - Dinas Pendidikan</option>
            <option value="php">Cyntia Maripossa - Dinas Pendidikan</option>
          </select>
        </div>
      </div>
  </div>
    <div class="row mb-3">
        <label for="keterangan" class="col-sm-2 col-form-label">Peserta Rapat</label>
        <div class="col-sm-10">
          <select class="w-100" id="multiple-checkboxes" multiple="multiple" value="Pilih Peserta">
            <option value="php">Cyntia Maripossa - Dinas Pendidikan</option>
            <option value="php">Shakira Thalita - Dinas Pendidikan</option>
            <option value="php">Cyntia Maripossa - Dinas Pendidikan</option>
            <option value="php">Cyntia Maripossa - Dinas Pendidikan</option>
            <option value="php">Cyntia Maripossa - Dinas Pendidikan</option>
            <option value="php">Cyntia Maripossa - Dinas Pendidikan</option>
            <option value="php">Cyntia Maripossa - Dinas Pendidikan</option>
          </select>
        </div>
    </div>
       
    <button type="submit" class="btn btn-primary">Buat Rapat</button>
  </form>
  
@endsection
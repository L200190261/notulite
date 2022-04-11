@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-between">
        <div class="col-md-6">
            <div class="card mb-3">
                <h5 class="card-title">Private</h5>
                <small class="text-muted">
                    <p>Tanggal</p>
                </small>
                <div class="card-body">
                    <p class="card-text">isi</p>
                  </div>
            </div>
            <div class="card">
                <h5 class="card-title">Publik</h5>
                <small class="text-muted">
                    <p>Tanggal</p>
                </small>
                <div class="card-body">
                    <p class="card-text">isi</p>
                  </div>
                </div>
          </div>
          <div class="col-4">
            {{-- <div class="card"> --}}
                <div class="card border-success mb-3" style="max-width: 18rem;">
                    <div class="card-header">Reminder</div>
                    <div class="card-body text-success">
                      <h5 class="card-title">Rapat hari ini</h5>
                      <p class="card-text">Jam : </p>
                      <p class="card-text">Tempat : </p>
                      <h5 class="card-title">Rapat Tanggal 21</h5>
                      <p class="card-text">Jam : </p>
                      <p class="card-text">Tempat : </p>
                    </div>
                  </div>
                {{-- </div> --}}
          </div>
        {{-- <div class="col-md-6 mb-3">
            <div class="card">
                <h5 class="card-title">Private</h5>
                <small class="text-muted">
                    <p>Tanggal</p>
                </small>
                <div class="card-body">
                  <p class="card-text">isi</p>
                </div>
            </div> --}}
        </div>
    </div>
@endsection
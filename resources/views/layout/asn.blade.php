@extends('header.main')

@section('container-fluid')

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Pengguna</h1>
                
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tabel Data ASN</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="dataTables_filter" id="dataTable_filter">
                                                <label>
                                                    <input type="search" class="form-control form-control-sm" placeholder="Search">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2 btn-group ms-auto" role="group" aria-label="Basic mixed styles example">
                                            <button type="button" class="btn btn-primary">
                                                <a href="http://127.0.0.1:8000/tambah-data" class="text-decoration-none text-light">Tambah Data</a>
                                            </button></div>
                                    </div>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Id</th>
                                            <th>NIP</th>
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Jabatan</th>
                                            <th>Instansi</th>
                                            <th>Bidang</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection

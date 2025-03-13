@extends('admin.master')


@section('konten')
    <div class="content-wrapper">
        <div class="col-xl-6 grid-margin stretch-card flex-column">
            <h5 class="mb-2 text-titlecase mb-4">Tambah Mahasiswa</h5>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Form Edit Data Mahasiswa </h4>
                        <p class="card-description">
                            Basic form elements
                        </p>
                        <form class="forms-sample" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="code">NIM Mahasiswa</label>
                                <input type="text" class="form-control" id="code" placeholder="nim" name="nim"
                                    value="{{ $data->nim }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Nama Mahasiswa</label>
                                <input type="text" class="form-control" id="nama mahasiswa" placeholder="Nama mahasiswa"
                                    name="name" value="{{ $data->name }}">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" placeholder="Email" name="email"
                                    value="{{ $data->email }}">
                            </div>
                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                            <a type="button" href="/lihatmahasiswa" class="btn btn-light">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection

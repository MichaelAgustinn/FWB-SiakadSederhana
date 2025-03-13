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
                        <h4 class="card-title">Form Tambah Mahasiswa </h4>
                        <p class="card-description">
                            Basic form elements
                        </p>
                        <form class="forms-sample" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="code">NIM Mahasiswa</label>
                                <input type="text" class="form-control" id="nim" placeholder="nim mahasiswa"
                                    name="nim">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Nama Mahasiswa</label>
                                <input type="text" class="form-control" id="nama_mahasiswa" placeholder="nama mahasiswa"
                                    name="name">
                            </div>

                            <div class="form-group">
                                <label for="credits">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="email"
                                    name="email">
                            </div>
                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection

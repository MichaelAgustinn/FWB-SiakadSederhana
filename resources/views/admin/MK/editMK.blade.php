@extends('admin.master')


@section('konten')
    <div class="content-wrapper">
        <div class="col-xl-6 grid-margin stretch-card flex-column">
            <h5 class="mb-2 text-titlecase mb-4">Tambah Matakuliah</h5>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Form Tambah Matakuliah </h4>
                        <p class="card-description">
                            Basic form elements
                        </p>
                        <form class="forms-sample" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="code">Kode Matakuliah</label>
                                <input type="text" class="form-control" id="code" placeholder="Kode MK"
                                    name="kode_mk" value="{{ $data->kode_mk }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Nama Matakuliah</label>
                                <input type="text" class="form-control" id="nama_matakuliah"
                                    placeholder="Nama Matakuliah" name="nama_matakuliah"
                                    value="{{ $data->nama_matakuliah }}">
                            </div>
                            <div class="form-group">
                                <label for="credits">SKS</label>
                                <input type="number" class="form-control" id="credits" placeholder="SKS" name="sks"
                                    value="{{ $data->sks }}">
                            </div>
                            <div class="form-group">
                                <select class="form-select" id="id_dosen" name="id_dosen">
                                    <option value="">Dosen</option>
                                    @foreach ($dosen as $d)
                                        <option value="{{ $d->id }}">{{ $d->nama_dosen }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                            <a type="button" href="/lihatmk" class="btn btn-light">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>




        </div>
    @endsection

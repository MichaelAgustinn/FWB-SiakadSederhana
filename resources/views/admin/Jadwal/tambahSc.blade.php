@extends('admin.master')


@section('konten')
    <div class="content-wrapper">

        <div class="col-xl-6 grid-margin stretch-card flex-column">
            <h5 class="mb-2 text-titlecase mb-4">Tambah Jadwal</h5>
        </div>

        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Form Tambah Jadwal </h4>
                        <p class="card-description">
                            Basic form elements
                        </p>
                        <form class="forms-sample" method="POST">
                            @csrf
                            <div class="form-group">
                                <select class="form-select" name="course_id">
                                    <option value="">Matakuliah </option>
                                    @foreach ($sch as $d)
                                        <option value="{{ $d->id }}">{{ $d->nama_matakuliah }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Hari</label>
                                <input type="text" class="form-control" id="day" placeholder="hari" name="day">
                            </div>

                            <div class="form-group">
                                <label for="credits">Waktu Mulai</label>
                                <input type="time" class="form-control" placeholder="waktu mulai" name="start_time">
                            </div>
                            <div class="form-group">
                                <label for="code">Waktu Selesai</label>
                                <input type="time" class="form-control" placeholder="waktu selesai" name="end_time">
                            </div>
                            <div class="form-group">
                                <label for="code">Ruangan</label>
                                <input type="text" class="form-control" placeholder="ruangan" name="room">
                            </div>
                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection

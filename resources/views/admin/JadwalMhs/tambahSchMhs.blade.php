@extends('admin.master')


@section('konten')
    <div class="content-wrapper">

        <div class="col-xl-6 grid-margin stretch-card flex-column">
            <h5 class="mb-2 text-titlecase mb-4">Tambah Jadwal Mahasiswa</h5>
        </div>

        <div class="row">

            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Form Tambah Jadwal Mahasiswa </h4>
                        <p class="card-description">
                            Basic form elements
                        </p>
                        <form class="forms-sample" method="POST">
                            @csrf
                            <div class="form-group">
                                <select class="form-select" name="student_id">
                                    <option value="">Mahasiswa</option>
                                    @foreach ($student as $d)
                                        <option value="{{ $d->id }}">{{ $d->nim . ' | ' . $d->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-select" name="schedule_id">
                                    <option value="">Jadwal</option>
                                    @foreach ($schedule as $d)
                                        <option value="{{ $d->id }}">
                                            {{ $d->course->nama_matakuliah . ' - ' . $d->day . ' - ' . $d->start_time . ' - ' . $d->end_time }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                            <a class="btn btn-light" href="{{ route('lihatJadwalMhs') }}">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection

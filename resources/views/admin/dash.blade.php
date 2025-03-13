@extends('admin.master')


@section('konten')
    <div class="content-wrapper">

        <div class="row">
            <div class="col-md-12">
                <div class="grid-margin stretch-card flex-column">
                    <h5 class="mb-2 text-titlecase mb-4">Jadwal</h5>
                    <div class="card">
                        <div class="table-responsive pt-3">
                            <table class="table table-striped project-orders-table">
                                <thead>
                                    <tr>
                                        <th>Nama Matakuliah</th>
                                        <th>Nama Dosen</th>
                                        <th>Hari</th>
                                        <th>Jam</th>
                                        <th>Ruangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sch as $d)
                                        <tr>
                                            <td>{{ $d->course->nama_matakuliah }}</td>
                                            <td>{{ $d->course->lecturer->nama_dosen }}</td>
                                            <td>{{ $d->day }}</td>
                                            <td>{{ $d->start_time . '-' . $d->end_time }}</td>
                                            <td>{{ $d->room }}</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a type="button" href="/editjadwal/{{ $d->id }}"
                                                        class="btn btn-success btn-sm btn-icon-text me-3">
                                                        Edit
                                                        <i class="typcn typcn-edit btn-icon-append"></i>
                                                    </a>
                                                    <a type="button" href="/hapusjadwal/{{ $d->id }}"
                                                        class="btn btn-danger btn-sm btn-icon-text">
                                                        Delete
                                                        <i class="typcn typcn-delete-outline btn-icon-append"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="grid-margin stretch-card flex-column">
                    <h5 class="mb-2 text-titlecase mb-4">Data Mata Kuliah</h5>
                    <div class="card">
                        <div class="table-responsive pt-3">
                            <table class="table table-striped project-orders-table">
                                <thead>
                                    <tr>
                                        <th class="ms-5">Kode MK</th>
                                        <th>Nama Matakuliah</th>
                                        <th>SKS</th>
                                        <th>Dosen</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($course as $m)
                                        <tr>
                                            <td>{{ $m->kode_mk }}</td>
                                            <td>{{ $m->nama_matakuliah }} </td>
                                            <td>{{ $m->sks }}</td>
                                            <td>{{ $m->lecturer->nama_dosen }}</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a type="button" href="/editmk/{{ $m->id }}"
                                                        class="btn btn-success btn-sm btn-icon-text me-3">
                                                        Edit
                                                        <i class="typcn typcn-edit btn-icon-append"></i>
                                                    </a>
                                                    <a type="button" href="/hapusmk/{{ $m->id }}"
                                                        class="btn btn-danger btn-sm btn-icon-text">
                                                        Delete
                                                        <i class="typcn typcn-delete-outline btn-icon-append"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="grid-margin stretch-card flex-column">
                    <h5 class="mb-2 text-titlecase mb-4">Data Mahasiswa</h5>
                    <div class="card">
                        <div class="table-responsive pt-3">
                            <table class="table table-striped project-orders-table">
                                <thead>
                                    <tr>
                                        <th>NIM Mahasiswa</th>
                                        <th>Nama Mahasiswa</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($mhs as $d)
                                        <tr>
                                            <td>{{ $d->nim }}</td>
                                            <td>{{ $d->name }}</td>
                                            <td>{{ $d->email }}</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a type="button" href="/editmahasiswa/{{ $d->id }}"
                                                        class="btn btn-success btn-sm btn-icon-text me-3">
                                                        Edit
                                                        <i class="typcn typcn-edit btn-icon-append"></i>
                                                    </a>
                                                    <a type="button" href="/hapusmahasiswa/{{ $d->id }}"
                                                        class="btn btn-danger btn-sm btn-icon-text">
                                                        Delete
                                                        <i class="typcn typcn-delete-outline btn-icon-append"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>


                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

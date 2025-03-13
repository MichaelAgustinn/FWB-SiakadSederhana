@extends('admin.master')

@section('konten')
    <div class="content-wrapper">

        <div class="row">
            <div class="grid-margin stretch-card flex-column">
                <h5 class="mb-2 text-titlecase mb-4">Ini Tabel</h5>
                <div class="col-md-12">
                    <div class="card">
                        <div class="table-responsive pt-3">
                            <table class="table table-striped project-orders-table">
                                <thead>
                                    <tr>
                                        <th class="ms-5">ID</th>
                                        <th>NIM</th>
                                        <th>Nama Mahasiswa</th>
                                        <th>Matakuliah</th>
                                        <th>Hari</th>
                                        <th>Jam</th>
                                        <th>Ruangan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $mk)
                                        <tr>
                                            <td>{{ $mk->id }}</td>
                                            <td>{{ $mk->student->nim }}</td>
                                            <td>{{ $mk->student->name }}</td>
                                            <td>{{ $mk->schedule->course->nama_matakuliah }}</td>
                                            <td>{{ $mk->schedule->day }}</td>
                                            <td>{{ $mk->schedule->start_time . ' - ' . $mk->schedule->end_time }}</td>
                                            <td>{{ $mk->schedule->room }}</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a type="button" href="/editjadwalmhs/{{ $mk->id }}"
                                                        class="btn btn-warning btn-sm btn-icon-text me-3">
                                                        Edit
                                                        <i class="typcn typcn-edit btn-icon-append"></i>
                                                    </a>
                                                    <a type="button" href="/hapusjadwalmhs/{{ $mk->id }}"
                                                        class="btn btn-danger btn-sm btn-icon-text">
                                                        Delete
                                                        <i class="typcn typcn-delete-outline btn-icon-append"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a type="button" href="/tambahjadwalmhs"
                                                    class="btn btn-success btn-sm btn-icon-text">
                                                    Tambah
                                                    <i class="typcn typcn-plus-outline btn-icon-append"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

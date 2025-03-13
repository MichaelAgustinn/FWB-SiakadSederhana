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
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($mhs as $d)
                                        <tr>
                                            <td>{{ $d->id }}</td>
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

@extends('admin.master')


@section('konten')
    <div class="content-wrapper">

        <div class="col-xl-6 grid-margin stretch-card flex-column">
            <h5 class="mb-2 text-titlecase mb-4">Ini Tabel</h5>


        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="table-responsive pt-3">
                        <table class="table table-striped project-orders-table">
                            <thead>
                                <tr>
                                    <th class="ms-5">ID</th>
                                    <th>Kode Matakuliah</th>
                                    <th>Nama MK</th>
                                    <th>SKS</th>
                                    <th>Nama Dosen </th>

                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>


                                @foreach ($matakuliah->matakuliah as $mk)
                                    <tr>
                                        <td>{{ $mk->id }}</td>
                                        <td>{{ $mk->kode_mk }}</td>
                                        <td>{{ $mk->nama_matakuliah }}</td>
                                        <td>{{ $mk->sks }}</td>
                                        <td>{{ $mk->dosen->nama_dosen }}</td>

                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button type="button" class="btn btn-success btn-sm btn-icon-text me-3">
                                                    Edit
                                                    <i class="typcn typcn-edit btn-icon-append"></i>
                                                </button>
                                                <button type="button" class="btn btn-danger btn-sm btn-icon-text">
                                                    Delete
                                                    <i class="typcn typcn-delete-outline btn-icon-append"></i>
                                                </button>
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
@endsection

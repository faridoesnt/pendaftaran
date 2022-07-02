@extends('layouts.admin')

@section('main-content')

    <h1 class="h3 mb-4 text-gray-800">Data Pendaftaran</h1>

    @if (session('success'))
        <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="row">
        <div class="col-lg-12 order-lg-1">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NISN</th>
                                    <th>Nama Lengkap</th>
                                    <th>Nama Ibu Kandung</th>
                                    <th>Asal Sekolah</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Alamat</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($pendaftaran as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nisn }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->nama_ibu }}</td>
                                        <td>{{ $item->asal_sekolah }}</td>
                                        <td>{{ $item->tempat_lahir }}</td>
                                        <td>{{ date('j F Y', strtotime($item->tanggal_lahir)) }}</td>
                                        <td>{{ $item->alamat }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" class="text-center">No Data Found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $pendaftaran->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
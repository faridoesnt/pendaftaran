@extends('layouts.auth')

@section('main-content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-8 col-10">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Pendaftaran Online - SMAN 1 Gunung Putri</h1>
                                </div>

                                @if ($errors->any())
                                    <div class="alert alert-danger border-left-danger" role="alert">
                                        <ul class="pl-4 my-2">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                @if(session()->has('sukses'))
                                    <div class="alert alert-success  border-left-success" role="alert">
                                        {{ session()->get('sukses') }}
                                    </div>
                                @endif

                                <form method="POST" action="{{ route('proses-pendaftaran') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="pl-1"><strong>NISN</strong></label>
                                                <input type="text" class="form-control" name="nisn" placeholder="NISN" value="{{ old('nisn') }}" required autofocus>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="pl-1"><strong>Nama Lengkap</strong></label>
                                                <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" value="{{ old('nama') }}" required>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="pl-1"><strong>Nama Ibu Kandung</strong></label>
                                                <input type="text" class="form-control" name="nama_ibu" placeholder="Nama Ibu Kandung" value="{{ old('nama_ibu') }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="pl-1"><strong>Asal Sekolah</strong></label>
                                                <input type="text" class="form-control" name="asal_sekolah" placeholder="Contoh: SMPN 1 Gunung Putri" value="{{ old('asal_sekolah') }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="pl-1"><strong>Sekolah Tujuan</strong></label>
                                                <input type="hidden" name="daftar_sekolah" value="SMAN 1 Gunung Putri" required>
                                                <input type="text" class="form-control" value="SMAN 1 Gunung Putri" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="pl-1"><strong>Tempat Lahir</strong></label>
                                                <input type="text" class="form-control" name="tempat_lahir" placeholder="Contoh: Jakarta" value="{{ old('tempat_lahir') }}" required>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="pl-1"><strong>Tanggal Lahir</strong></label>
                                                <input type="date" class="form-control" name="tanggal_lahir" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="pl-1"><strong>Alamat Lengkap</strong></label>
                                                <textarea name="alamat" class="form-control" cols="30" rows="5" placeholder="Alamat Lengkap">{{   old('alamat')   }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Daftar
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

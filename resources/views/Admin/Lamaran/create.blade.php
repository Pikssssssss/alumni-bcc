@extends('Admin.Dashboard.index')
@section('title','Tambah Lamaran Pekerjaan')
@section('content')
    <div class="container py-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow h-100">
                    <div class="card-header">
                        <h5 class="card-title m-0 me-4">Tambah Lamaran Pekerjaan</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('lamaran/create') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row g-2">
                                <div class="col mb-0">
                                    <label for="lowongan" class="form-label">Lowongan</label>
                                    <select id="id_lowongan" name="id_lowongan" class="select2 form-select form-select-1" data-allow-clear="true">
                                        <option value="">Pilih Lowongan</option>
                                        @foreach ($lowongan as $item)
                                            <option value="{{ $item->id_lowongan }}">{{ $item->lowongan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col mb-0">
                                    <label for="alumni" class="form-label">Alumni</label>
                                    <select id="nisn" name="nisn" class="select2 form-select form-select-1" data-allow-clear="true">
                                        <option value="">Pilih Alumni</option>
                                        @foreach ($alumni as $item)
                                            <option value="{{ $item->nisn }}">{{ $item->nama_alumni }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col mb-0">
                                    <label for="surat_lamaran" class="form-label fw-bold">Surat Lamaran</label>
                                    <input type="file" name="surat_lamaran" id="surat_lamaran" class="form-control">
                                </div>
                                <div class="col mb-0">
                                    <label for="cv" class="form-label fw-bold">CV</label>
                                    <input type="file" name="cv" id="cv" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mt-3">
                                    <button type="submit" class="btn form-control text-white" style="background-color: #696cff">Kirim</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
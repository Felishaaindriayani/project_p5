@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List Kategori</div>
                <div class="card-body">
                    <form action="{{ route('lokasi.update', $lokasi->id )}} " method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">Nama Lokasi</label>
                            <input type="text" class="form-control" name="nama_lokasi" value="{{ $lokasi ->nama_lokasi}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Provinsi</label>
                            <input type="text" class="form-control" name="provinsi" value="{{ $lokasi ->provinsi}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kabupaten</label>
                            <input type="text" class="form-control" name="kabupaten" value="{{ $lokasi ->kabupaten}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

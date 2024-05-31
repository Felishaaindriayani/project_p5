@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List Kategori</div>
                <div class="card-body">
                    <form action="{{ route('lokasi.store') }} " method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nama Lokasi</label>
                            <input type="text" class="form-control" name="nama_lokasi">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Provinsi</label>
                            <input type="text" class="form-control" name="provinsi">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kabupaten</label>
                            <input type="text" class="form-control" name="kabupaten">
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

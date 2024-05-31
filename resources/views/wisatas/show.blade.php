@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List Data Wisata</div>
                <div class="card-body">
                    <form action=" " method="POST">
                        <div class="mb-3">
                            <label class="form-label">Nama Wisata</label>
                            <input type="text" class="form-control" name="nama_wisata" value="{{ $wisata->nama_wisata}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kategori</label>
                            <input type="text" class="form-control" name="kategori" value="{{ $wisata->nama_kategori}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Lokasi</label>
                            <input type="text" class="form-control" name="nama_lokasi" value="{{ $wisata->nama_lokasi}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Deskripsi</label>
                            <input type="text" class="form-control" name="deskripsi" value="{{ $wisata->deskripsi}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Event</label>
                            <input type="text" class="form-control" name="tema_event" value="{{ $wisata->tema_event}}" disabled>
                        </div>
                        <a href="{{url('wisata')}}" class="btn btn-primary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List Data Wisata</div>
                <div class="card-body">
                    <form action="{{ route('wisata.update', $wisata->id )}} " method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">Nama Wisata</label>
                            <input type="text" class="form-control" name="nama_wisata" value="{{ $wisata ->nama_wisata}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kategori</label>
                            <select type="text" class="form-control" name="id_kategori">
                                @foreach ($kategori as $data)
                                    <option value="{{$data->id}}">{{$data->kategori}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Lokasi</label>
                            <select type="text" class="form-control" name="id_lokasi">
                                @foreach ($lokasi as $data)
                                    <option value="{{$data->id}}">{{$data->nama_lokasi}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Deskripsi</label>
                            <input type="text" class="form-control" name="deskripsi" value="{{ $wisata->deskripsi}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Cover</label>
                            <img src="{{ asset('/images/wisata/'. $wisata->cover) }}" width="100">
                            <input type="file" class="form-control" name="cover">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Event</label>
                            <select type="text" class="form-control" name="id_event">
                                @foreach ($event as $data)
                                    <option value="{{$data->id}}">{{$data->tema_event}}</option>
                                @endforeach
                            </select>
                        
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

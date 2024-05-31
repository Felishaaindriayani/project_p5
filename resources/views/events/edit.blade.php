@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List Kategori</div>
                <div class="card-body">
                    <form action="{{ route('event.update', $event->id )}} " method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">Event</label>
                            <input type="text" class="form-control" name="tema_event" value="{{ $event ->tema_event}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal</label>
                            <input type="text" class="form-control" name="tanggal" value="{{ $event ->tanggal}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Lokasi</label>
                            <select type="text" class="form-control" name="id_lokasi">
                                @foreach ($lokasi as $data)
                                    <option value="{{$data->id}}">{{$data->nama_lokasi}}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

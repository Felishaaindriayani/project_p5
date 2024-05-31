@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List Lokasi</div>

                <div class="card-body">
                    <a href="{{ route('wisata.create')}}" class="btn btn-primary">Add Data</a>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Wisata</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Lokasi</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Cover</th>
                            <th scope="col">Event</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ($wisata as $data)
                            <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <td>{{ $data->nama_wisata}}</td>
                                <td>{{ $data->kategori->kategori}}</td>
                                <td>{{ $data->lokasi->nama_lokasi}}</td>
                                <td>{{ $data->deskripsi}}</td>
                                <td>
                                    <img src="{{ asset('/images/wisata/'. $data->cover) }}" width="100">
                                </td>
                                <td>{{ $data->event->tema_event}}</td>
                                <form action="{{route('wisata.destroy', $data->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <td>
                                        <a href="{{ route('wisata.edit', $data->id) }}" class="btn btn-success">Edit</a>
                                        <a href="{{ route('wisata.show', $data->id) }}" class="btn btn-warning">Show</a>
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </td>
                                </form>
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

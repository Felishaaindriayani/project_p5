@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List Event</div>

                <div class="card-body">
                    <a href="{{ route('event.create')}}" class="btn btn-primary">Add Data</a>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Event</th>
                            <th scope="col">Tanggal Diselenggarakan</th>
                            <th scope="col">Lokasi</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ($event as $data)
                            <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <td>{{ $data->tema_event}}</td>
                                <td>{{ $data->tanggal}}</td>
                                <td>{{ $data->lokasi->nama_lokasi}}</td>
                                <form action="{{route('event.destroy', $data->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <td>
                                        <a href="{{ route('event.edit', $data->id) }}" class="btn btn-success">Edit</a>
                                        <a href="{{ route('event.show', $data->id) }}" class="btn btn-warning">Show</a>
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

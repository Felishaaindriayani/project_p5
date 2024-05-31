@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List Event</div>
                <div class="card-body">
                    <form action=" " method="POST">
                        <div class="mb-3">
                            <label class="form-label">Event</label>
                            <input type="text" class="form-control" name="tema_event" value="{{ $event->tema_event}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal Diselenggarakan</label>
                            <input type="text" class="form-control" name="tanggal" value="{{ $event->tanggal}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Lokasi</label>
                            <input type="text" class="form-control" name="nama_lokasi" value="{{ $event->nama_lokasi}}" disabled>
                        </div>
                        <a href="{{url('event')}}" class="btn btn-primary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dasboard Admin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{asset('admin/img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('admin/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
</head>




<body  id="page-top">
    
    <div id="wrapper">
        @include('layouts.sidebar')
        @include('layouts.navbar')
        <div class="content">
            <div class="container-fluid">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">List Lokasi</div>
                
                                <div class="card-body">
                                    <a href="{{ route('lokasi.create')}}" class="btn btn-primary">Add Data</a>
                                    <table class="table">
                                        <thead>
                                          <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Lokasi</th>
                                            <th scope="col">Provinsi</th>
                                            <th scope="col">Kabupaten</th>
                                            <th scope="col">Action</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            @php $no = 1; @endphp
                                            @foreach ($lokasi as $data)
                                            <tr>
                                                <th scope="row">{{ $no++ }}</th>
                                                <td>{{ $data->nama_lokasi}}</td>
                                                <td>{{ $data->provinsi}}</td>
                                                <td>{{ $data->kabupaten}}</td>
                                                <form action="{{route('lokasi.destroy', $data->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <td>
                                                        <a href="{{ route('lokasi.edit', $data->id) }}" class="btn btn-success">Edit</a>
                                                        <a href="{{ route('lokasi.show', $data->id) }}" class="btn btn-warning">Show</a>
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
            </div>
        </div>
    </div>




 <!-- JavaScript Libraries -->
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
 <script src="{{asset('admin/lib/chart/chart.min.js')}}"></script>
 <script src="{{asset('admin/lib/easing/easing.min.js')}}"></script>
 <script src="{{asset('admin/lib/waypoints/waypoints.min.js')}}"></script>
 <script src="{{asset('admin/lib/owlcarousel/owl.carousel.min.js')}}"></script>
 <script src="{{asset('admin/lib/tempusdominus/js/moment.min.js')}}"></script>
 <script src="{{asset('admin/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
 <script src="{{asset('admin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

 <!-- Template Javascript -->
 <script src="{{asset('admin/js/main.js')}}"></script>
</body>

</html>

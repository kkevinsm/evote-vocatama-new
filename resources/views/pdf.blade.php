<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <link rel="shortcut icon" href="{{asset('public/assets/img/favicon.ico')}}">
  <title>Evote | Musycab</title>
  <link rel="icon" type="images/x-icon" href="{{asset('public/assets/images/evote.png')}}" />

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
  <!-- <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"> -->

  <style>
    .main-content .row {
        display: flex;
        flex-wrap: wrap;
        gap: 15px; /* Jarak antar-card */
        justify-content: space-around; /* Mengatur posisi card */
    }

    .card {
        flex: 0 1 calc(25% - 15px); /* Ukuran 25% dari lebar, dikurangi jarak */
        height: 250px;
        margin: 0;
        border: 1px solid #ddd;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        background-color: #fff;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
    }

    .card-header {
        padding: 10px;
        background-color: #f5f5f5;
        border-bottom: 1px solid #ddd;
        text-align: center;
    }

    .card-header h6 {
        margin: 0;
        font-size: 14px;
        color: #333;
        font-weight: bold;
    }

    .card-body {
        padding: 15px;
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .card-body label {
        font-size: 12px;
        color: #555;
        margin-bottom: 5px;
        display: block;
    }

    .card-body b {
        font-size: 14px;
        color: #333;
    }

    .form-group {
        margin-bottom: 0;
    }
</style>


  <!-- CSS Tambahan -->
  @yield('head')
</head>

<body class="sidebar-mini">
<div id="app">
    <div class="main-wrapper">
        <!-- Main Content -->
        <div class="main-content" style="padding: 15px 30px 0px 80px;">
            <section class="section">
                <div class="row">
                    @foreach($datas as $data)
                    <div class="card">
                        <div class="card-header">
                            <h6 style="color:#262626">Akun Pemilih {{ $data->instansi }}</h6>
                        </div>
                        <div class="card-body mb-0">
                            <div class="form-group mb-0">
                                <label>Nama Lengkap</label>
                                <label><b>{{ \Illuminate\Support\Str::limit($data->name, 20, '...') }}</b></label>
                            </div>
                            <div class="form-group mb-0">
                                <label>Username: </label>
                                <label>{{ $data->username }}</label>
                            </div>
                            <div class="form-group mb-0">
                                <label>Password: </label>
                                <label>{{ $data->password }}</label>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </section>
        </div>
    </div>    
  </div> -->
</body>
</html>
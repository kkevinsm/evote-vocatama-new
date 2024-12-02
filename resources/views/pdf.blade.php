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
    /* Global Reset */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* Grid Layout */
    .row {
        display: flex;
        flex-wrap: wrap;
        margin: 0 -5px; /* Menghapus spasi antar kolom */
    }

    .col-4 {
        padding: 5px; /* Jarak antar card */
        box-sizing: border-box;
    }

    /* Card Style */
    .card {
        border: 1px solid #ddd;
        border-radius: 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        background-color: #fff;
        height: auto; /* Sesuaikan tinggi otomatis */
        overflow: hidden;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
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
        font-weight: bold;
        color: #333;
    }

    .card-body {
        padding: 10px;
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .card-body label {
        font-size: 12px;
        color: #555;
        margin-bottom: 5px;
    }

    .card-body b {
        font-size: 14px;
        color: #333;
    }

    .form-group {
        margin-bottom: 10px;
    }

    /* Print Styles */
    @media print {
        .row {
            page-break-inside: avoid;
        }

        .col-4 {
            float: left;
            padding: 5px;
        }

        .card {
            box-shadow: none; /* Hapus bayangan di mode cetak */
        }

        .card-header {
            background-color: #fff; /* Hapus background di mode cetak */
            color: #000; /* Warna teks lebih kontras */
        }
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
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                <h6 style="color:#262626">Akun Pemilih {{ $data->instansi }}</h6>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nama:</label>
                                    <b>{{ \Illuminate\Support\Str::limit($data->name, 20, '...') }}</b>
                                </div>
                                <div class="form-group">
                                    <label>Username:</label>
                                    <label><b>{{ $data->username }}</b></label>
                                </div>
                                <div class="form-group">
                                    <label>Password:</label>
                                    <label><b>{{ $data->password }}</b></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                
            </section>
        </div>
    </div>    
  </div>
</body>
</html>
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
  
  <style>
    @media print {
        /* Adjusting the layout for print */
        .pdf-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .pdf-card {
            width: 48%; /* 48% width for two cards per row */
            margin-bottom: 20px;
            box-sizing: border-box;
        }
    }

    .main-content .row {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
        justify-content: space-around;
    }

    .card {
        flex: 0 1 calc(50% - 15px); /* Adjust to 50% for two cards per row */
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
                <div class="pdf-row">
                    @foreach($datas as $data)
                    <div class="card">
                        <div class="card-header">
                            <h6 style="color:#262626">Akun Pemilih {{ $data->instansi }}</h6>
                        </div>
                        <div class="card-body mb-0">
                            <div class="form-group mb-0">
                                <label>Nama</label>
                                <label><b>{{ \Illuminate\Support\Str::limit($data->name, 20, '...') }}</b></label>
                            </div>
                            <div class="form-group mb-0">
                                <label><b>Username: {{ $data->username }}</b></label>
                            </div>
                            <div class="form-group mb-0">
                                <label><b>Password: {{ $data->password }}</b></label>
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

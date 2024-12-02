<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Export PDF</title>
    <style>
        /* Reset and Base Styles */
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            margin: 0;
            padding: 0;
        }

        /* Table Layout for Cards */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            width: 33.33%; /* 3 columns */
            padding: 10px;
            vertical-align: top;
        }

        .card {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 10px;
            box-sizing: border-box;
            height: 100%; /* To make all cards the same height */
        }

        .card-header {
            font-weight: bold;
            text-align: center;
            background-color: #f5f5f5;
            padding: 5px;
            border-bottom: 1px solid #ddd;
            border-radius: 10px 10px 0 0;
        }

        .card-body {
            padding: 10px 5px;
        }

        .form-group {
            margin-bottom: 8px;
        }

        .form-group label {
            display: block;
            font-size: 10px;
            color: #555;
        }

        .form-group b {
            font-size: 12px;
            color: #333;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            @foreach($datas as $index => $data)
                <td>
                    <div class="card">
                        <div class="card-header">
                            Akun Pemilih {{ $data->instansi }}
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama:</label>
                                <b>{{ \Illuminate\Support\Str::limit($data->name, 20, '...') }}</b>
                            </div>
                            <div class="form-group">
                                <label>Username:</label>
                                <b>{{ $data->username }}</b>
                            </div>
                            <div class="form-group">
                                <label>Password:</label>
                                <b>{{ $data->password }}</b>
                            </div>
                        </div>
                    </div>
                </td>
                @if(($index + 1) % 3 === 0)
                    </tr><tr>
                @endif
            @endforeach
        </tr>
    </table>
</body>
</html>
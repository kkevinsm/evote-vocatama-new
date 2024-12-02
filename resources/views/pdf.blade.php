<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Export PDF</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">


    <style>
        body {
    font-family: 'Roboto', sans-serif;
    font-size: 12px;
    margin: 0;
    padding: 0;
}

table {
    width: 100%;
    border-collapse: collapse;
    table-layout: fixed; /* Tambahkan ini untuk memastikan tabel mengikuti lebar yang konsisten */
}

td {
    width: 33.33%; /* Untuk membuat 3 kolom dalam satu baris */
    padding: 10px;
    vertical-align: top;
}

.card {
    border: 1px solid #ddd;
    border-radius: 10px;
    padding: 10px;
    box-sizing: border-box;
    height: auto; /* Pastikan kartu menyesuaikan isi */
}

.card-header {
    font-weight: bold;
    text-align: center;
    background-color: #f5f5f5;
    padding: 5px;
    border-bottom: 1px solid #ddd;
}

.card-body {
    padding: 5px;
}

.page-break {
    page-break-before: always; /* Tambahkan class ini bila perlu untuk memaksa pindah halaman */
}

@media print {
    table {
        page-break-inside: auto; /* Mencegah tabel terpotong */
    }
    tr {
        page-break-inside: avoid; /* Mencegah baris tabel terpotong */
    }
    td {
        page-break-inside: avoid;
        page-break-after: auto;
    }
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
                                <label><br><b>{{ $data->username }}</b></br></label>
                            </div>
                            <div class="form-group">
                                <label>Password:</label>
                                <label><br><b>{{ $data->password }}</b></br></label>
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
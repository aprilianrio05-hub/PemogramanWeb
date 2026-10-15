<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Surat Masuk</title>
    <!-- Menggunakan Bootstrap 5 untuk styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">Detail Surat Masuk</h4>
                        <a href="{{ route('surat-masuk.index') }}" class="btn btn-light btn-sm">Kembali</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th style="width: 30%;">ID</th>
                                <td>{{ $surat['id'] }}</td>
                            </tr>
                            <tr>
                                <th>Nomor Surat</th>
                                <td>{{ $surat['nomor_surat'] }}</td>
                            </tr>
                            <tr>
                                <th>Tanggal</th>
                                <td>{{ $surat['tanggal'] }}</td>
                            </tr>
                            <tr>
                                <th>Pengirim</th>
                                <td>{{ $surat['pengirim'] }}</td>
                            </tr>
                            <tr>
                                <th>Perihal</th>
                                <td>{{ $surat['perihal'] }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
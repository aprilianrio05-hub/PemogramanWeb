<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Surat Masuk</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    

    <h2>Daftar Surat Masuk</h2>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nomor Surat</th>
                <th>Tanggal</th>
                <th>Pengirim</th>
                <th>Perihal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($suratMasuk as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item['nomor_surat'] }}</td>
                    <td>{{ $item['tanggal'] }}</td>
                    <td>{{ $item['pengirim'] }}</td>
                    <td>{{ $item['perihal'] }}</td>
                    <td>
                        <a href="/surat-masuk/{{ $item['id'] }}">Detail Surat</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
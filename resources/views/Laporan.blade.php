<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laporan Rental</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
            position: relative;
        }
        .logo {
            position: absolute;
            top: 0;
            left: 0;
            width: 100px; /* Adjust the width as needed */
            height: auto;
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="images/logo-rentcang.png" alt="Rentcang" class="logo">
        <h1>Laporan Rental Kendaraan</h1>
    </div>
    <table>
        <thead>
            <tr>
                <th>Nama Penyewa</th>
                <th>Kendaraan</th>
                <th>Tanggal Sewa</th>
                <th>Tanggal Selesai</th>
                <th>Total Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
            <tr>
                <td>{{ $item['nama_penyewa'] }}</td>
                <td>{{ $item['kendaraan'] }}</td>
                <td>{{ $item['tanggal_sewa'] }}</td>
                <td>{{ $item['tanggal_selesai'] }}</td>
                <td>{{ $item['total_harga'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rentcang Receipt</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f7fafc;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }
        .content {
            max-width: 64rem;
            margin: auto;
            background-color: #fff;
            padding: 1.5rem;
            border-radius: 0.5rem;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }
        .header {
            border-bottom: 1px solid #000;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-bottom: 1rem;
            position: relative;
        }
        .logo {
            height: 2.5rem;
        }
        .informasi {
            position: absolute;
            right: 0;
            top: 0;
            text-align: right;
            margin-top: 1rem;
        }
        .rentcang {
            font-size: 1.25rem;
            font-weight: 700;
            margin: 0;
        }
        .alamatheader {
            font-size: 0.875rem;
            margin: 0;
        }
        .title {
            font-size: 1.5rem;
            font-weight: 800;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
            text-align: center;
        }
        .section-title {
            font-size: 1.25rem;
            font-weight: 600;
            margin-top: 1rem;
            margin-bottom: 0.5rem;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1rem;
            font-size: 0.8rem;
            padding: 2rem;
        }
        .table .table strong {
            border: none;
            padding: 0.5rem;
        }
        .table {
            background-color: #f0f0f0;
        }
        .order-table {
            width: 100%;
            margin-top: 2rem;
            border-collapse: collapse;
        }
        .order-table th, .order-table td {
            border: 1px solid #000;
            padding: 0.5rem;
            text-align: center;
        }
        .footer {
            display: grid;
            justify-content: center;
            margin-top: 1.5rem;
        }
        .footer-text {
            font-size: 0.75rem;
            text-align: center;
            margin: 0;
        }
        .ucapan {
            font-size: 0.875rem;
            margin-top: 1.5rem;
            margin: 0;
        }
        .padding{
            padding-right: 17rem;
        }
        .td1, .td2, .td3, .td4, .td5, .td6 {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            <div class="header">
                <table>
                    <tr>
                        <td class="padding"><img src="images/logo-rentcang.png" alt="Rentcang" class="logo"></td>
                        <td><h2 class="rentcang">Rentcang</h2>
                            <p class="alamatheader">Jl. Kelompok 2 IF2D, Politeknik Negeri Batam, Indonesia</p></td>
                    </tr>
                </table>
            </div>
            <div class="mt-6">
                <p class="title">RESI</p>
                <h3 class="section-title">Informasi Penyewaan</h3>
                <table class="table">
                    <tr>
                        <td><strong>Nama Penyewa:</strong></td>
                        <td class="td1">{{$nama_penyewa}}</td>
                    </tr>
                    <tr>
                        <td><strong>No HP Pelanggan:</strong></td>
                        <td class="td2">{{$no_handphone}}</td>
                    </tr>
                    <tr>
                        <td><strong>Kendaraan:</strong></td>
                        <td class="td3">{{$kendaraan}}</td>
                    </tr>
                    <tr>
                        <td><strong>Alamat:</strong></td>
                        <td class="td4">{{$alamat}}</td>
                    </tr>
                    <tr>
                        <td><strong>Tanggal Sewa:</strong></td>
                        <td class="td6">{{$jumlah_sewa}}</td>
                    </tr>
                    <tr>
                        <td><strong>Total Harga:</strong></td>
                        <td class="td6">Rp {{ number_format($total_harga, 0, ',', '.') }}</td>
                    </tr>
                </table>
            </div>
            <table class="order-table">
                <tr>
                    <th>No Pesanan</th>
                    <th>{{$no_pesanan}}</th>
                </tr>
            </table>
            <div class="footer">
                <p class="footer-text">
                    Terima kasih telah menggunakan layanan kami. Jika Anda memiliki pertanyaan lebih lanjut
                    atau memerlukan bantuan tambahan, jangan ragu untuk menghubungi kami di nomor telepon
                    08123456789 atau melalui email di rentcang@gmail.com.
                </p>
                <br>
                <p class="ucapan">Hormat kami</p>
                <p class="ucapan">Tim Layanan Rentcang</p>
            </div>
        </div>
    </div>
</body>
</html>

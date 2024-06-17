<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resi</title>
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
        .container {
            width: 21cm;
            height: 29.7cm;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .content {
            width: 100%;
            height: 100%;
            margin: auto;
            background-color: #fff;
            padding: 1.5rem;
            border-radius: 0.5rem;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
            box-sizing: border-box;
        }
        .header {
            border-bottom: 1px solid #000;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-bottom: 1rem;
        }
        .logo {
            height: 2.5rem;
        }
        .informasi {
            width: 13rem;
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
        }
        .section-title {
            font-size: 1.25rem;
            font-weight: 600;
            margin-top: 1rem;
            margin-bottom: 0.5rem;
        }
        .grid {
            display: grid;
            gap: 1rem;
        }
        .grid-2 {
            grid-template-columns: repeat(1, minmax(0, 1fr));
        }
        @media (min-width: 640px) {
            .grid-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }
        .label {
            font-weight: 700;
            margin: 0;
        }
        .value {
            margin: 0;
        }
        .order {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            margin-top: 2rem;
        }
        .order .left, .order .right {
            border: 1px solid #000;
            padding: 1rem;
        }
        .order .right {
            border-left: none;
        }
        .no-pesanan {
            font-size: 1.25rem;
            display: grid;
            justify-content: center;
            margin: 0;
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
        @media print {
            body, .container {
                width: 21cm;
                height: 29.7cm;
                margin: 0;
                padding: 0;
                box-shadow: none;
                background: none;
            }
            .content {
                border: none;
                box-shadow: none;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            <div class="header">
                <img src="images/logo-rentcang.png" alt="Rentcang" class="logo">
                <div class="informasi">
                    <h2 class="rentcang">Rentcang</h2>
                    <p class="alamatheader">Jl. Kelompok 2 IF2D, Politeknik Negeri Batam, Indonesia</p>
                </div>
            </div>
            <div class="mt-6">
                <p class="title">RESI</p>
                <h3 class="section-title">Informasi Penyewaan</h3>
                <div class="grid grid-2">
                    <div>
                        <p class="label">Nama Penyewa:</p>
                        <p class="value">Jon Thor</p>
                    </div>
                    <div>
                        <p class="label">No HP Pelanggan:</p>
                        <p class="value">08123456789</p>
                    </div>
                    <div>
                        <p class="label">Kendaraan Yang Disewa:</p>
                        <p class="value">Toyota Avanza</p>
                    </div>
                    <div>
                        <p class="label">Alamat:</p>
                        <p class="value">Jl. Penyewa No. 456, Kota, Negara</p>
                    </div>
                    <div>
                        <p class="label">Jumlah Sewa:</p>
                        <p class="value">2 Hari</p>
                    </div>
                    <div>
                        <p class="label">Total Harga:</p>
                        <p class="value">Rp 1.000.000</p>
                    </div>
                </div>
            </div>
            <div class="order">
                <div class="left">
                    <p class="no-pesanan">No Pesanan:</p>
                </div>
                <div class="right">
                    <p class="no-pesanan">RNCG000001</p>
                </div>
            </div>
            <div class="footer">
                <p class="footer-text">
                    Terima kasih telah menggunakan layanan kami. Jika Anda memiliki pertanyaan lebih lanjut
                    atau memerlukan bantuan tambahan, jangan ragu untuk menghubungi kami di nomor telepon 
                    08123456789 atau melalui email di rentcang@gmail.com.
                </p>
                <p class="ucapan">Hormat kami</p>
                <p class="ucapan">Tim Layanan Rentcang</p>
            </div>
        </div>
    </div>
</body>
</html>

@extends('layout/app')

@section('title')
  Rules dan Informasi
@endsection

@section('navbar')
  @include('components/navbar')
@endsection

@section('content')
<body class="bg-gray-100 min-h-screen"> 
<div class="container flex flex-col md:flex-row justify-between items-center">
    <div class="px-4 py-14 absolute top-20 left-6 ">
        <a class="font-bold text-black flex items-center">
        <svg width="20" height="20" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M15 0C12.0333 0 9.13319 0.879734 6.66645 2.52796C4.19972 4.17618 2.27713 6.51885 1.14181 9.25974C0.00649926 12.0006 -0.290551 15.0166 0.288228 17.9263C0.867006 20.8361 2.29562 23.5088 4.3934 25.6066C6.49119 27.7044 9.16394 29.133 12.0737 29.7118C14.9834 30.2905 17.9994 29.9935 20.7403 28.8582C23.4811 27.7229 25.8238 25.8003 27.472 23.3335C29.1203 20.8668 30 17.9667 30 15C30 13.0302 29.612 11.0796 28.8582 9.25974C28.1044 7.43986 26.9995 5.78628 25.6066 4.3934C24.2137 3.00052 22.5601 1.89563 20.7403 1.14181C18.9204 0.387986 16.9698 0 15 0ZM15 27C12.6266 27 10.3066 26.2962 8.33316 24.9776C6.35977 23.659 4.8217 21.7849 3.91345 19.5922C3.0052 17.3995 2.76756 14.9867 3.23058 12.6589C3.69361 10.3311 4.83649 8.19295 6.51472 6.51472C8.19295 4.83649 10.3312 3.6936 12.6589 3.23058C14.9867 2.76755 17.3995 3.00519 19.5922 3.91344C21.7849 4.8217 23.6591 6.35977 24.9776 8.33315C26.2962 10.3065 27 12.6266 27 15C27 18.1826 25.7357 21.2348 23.4853 23.4853C21.2348 25.7357 18.1826 27 15 27Z" fill="black"/>
            <path d="M15 10.5C15.8284 10.5 16.5 9.82843 16.5 9C16.5 8.17157 15.8284 7.5 15 7.5C14.1716 7.5 13.5 8.17157 13.5 9C13.5 9.82843 14.1716 10.5 15 10.5Z" fill="black"/>
            <path d="M15 12C14.6022 12 14.2206 12.158 13.9393 12.4393C13.658 12.7206 13.5 13.1022 13.5 13.5V21C13.5 21.3978 13.658 21.7794 13.9393 22.0607C14.2206 22.342 14.6022 22.5 15 22.5C15.3978 22.5 15.7794 22.342 16.0607 22.0607C16.342 21.7794 16.5 21.3978 16.5 21V13.5C16.5 13.1022 16.342 12.7206 16.0607 12.4393C15.7794 12.158 15.3978 12 15 12Z" fill="black"/>
        </svg>Peraturan dan Informasi
        </a>
    </div>
    <div class="container m-16 lg:w-7/8">
        <div class="bg-white p-10 md:p-35 h-auto rounded-lg ms-64 py-9 shadow-md">
            <p class="text-black font-bold text-2xl">RENTCANG</p><br>
            <div class="text-black">
                <h1 class="font-bold text-lg">Peraturan :</h1>
                <table class="table-auto border-collapse">
                    <tr>
                        <td class="border px-4 py-2">Penyewa harus mendaftar terlebih dahulu sebelum dapat menggunakan layanan rental kendaraan.</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">Pengguna harus berusia minimal 18 tahun atau sesuai dengan ketentuan hukum yang berlaku untuk dapat menggunakan layanan ini.</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">Pembayaran dilakukan secara online, tidak menerima pembayaran secara langsung.</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">Ketersediaan kendaraan tergantung pada stok yang tersedia. Pemesanan akan dikonfirmasi berdasarkan ketersediaan.</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">Penyewa bertanggung jawab atas segala pelanggaran hukum yang dilakukan selama penggunaan kendaraan.</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">Penyewa harus merawat kendaraan dengan baik selama masa sewa. Segala kerusakan yang terjadi akibat kelalaian pengguna akan menjadi tanggung jawab pengguna.</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">Kendaraan harus dikembalikan sesuai dengan waktu yang telah disepakati. Keterlambatan pengembalian dapat dikenakan biaya tambahan.</td>
                    </tr>
                </table>
                <br>
                <h1 class="font-bold text-lg">Informasi :</h1>
                <table class="table-auto">
                    <tr>
                        <td class="border px-4 py-2">Aplikasi web ini menyediakan motor dan mobil yang siap disewa.</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">Tim layanan pelanggan tersedia untuk membantu pengguna dalam segala pertanyaan atau masalah yang terkait dengan penyewaan kendaraan.</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">Penyewa mendapatkan informasi jelas dan mudah tentang persyaratan dan peraturan penyewaan kendaraan</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">Penyewa dapat melakukan komunikasi via chat Whatsapp.</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">Informasi pribadi pengguna akan disimpan dan dikelola dengan aman sesuai dengan kebijakan privasi yang berlaku.</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
@endsection

@section('footer')
  @include('components/footer')
@endsection
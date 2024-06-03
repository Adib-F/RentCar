<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Kendaraan</title>
    <link href="https://cdn.tailwindcss.com/3.4.1/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.3/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    
</head>
<div class="navbar bg-base-100 shadow-md">
     <div class="navbar-start">
        <div class="dropdown">
         <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
         </div>
         <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
            <li><a>HOME</a></li>
            <li><a>NOTIFIKASI</a></li>
            <li><a>STATUS</a></li>
            <li>
            <a><img src="{{asset('images/kendaraan.png') }}" class="w-6 h-6">KENDARAAN</a>
             <ul>
                <li><a>MOTOR  </a></li>
                <li><a>MOBIL</a></li>
             </ul>
            </li>
            <li>
             <a><img src="{{asset('images/settings.png') }}" class="w-6 h-6"></a>
             <ul>
                    <li><a>USERNAME<a><li>
                    <li><a>SETTINGS<a><li>
                    <li><a>LOG OUT<a><li>
             </ul>
            </li>
         </ul>
        </div>
        <a><img src="{{asset('images/logo.png') }} "class="w-28 h-8"></a>
     </div>
     <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1">
        <li class="- font-bold "><a><img src="{{asset('images/home.svg') }} "class="w-6 h-6">HOME</a></li>
        <li class="- font-bold "><a><img src="{{asset('images/notif.svg') }}" class="w-6 h-6">NOTIFIKASI</a></li>
        <li class="- font-bold "><a><img src="{{asset('images/key.svg') }}" class="w-6 h-6">STATUS</a></li>
         <li>
            <details>
            <summary class="font-bold "><img src="{{asset('images/kendaraan.png') }}" class="w-6 h-6">KENDARAAN</summary>
             <ul class="z-40">
                <li class="font-bold"><a href="Motor"><img src="{{asset('images/Motorcycle.svg') }}" class="w-6 h-6 text-black-500">MOTOR  </a></li>
                <li class="font-bold"><a href="Mobil"><img src="{{asset('images/mobil.png') }}" class="w-6 h-5 text-black-500">MOBIL  </a></li>
             </ul>
            </details>
         </li>
         
         </ul>
     </div>
     <div class="navbar-end">
        <ul class="menu menu-horizontal px-1">
         <li>
            <details>
             <summary><img src="{{asset('images/settings.png') }}" class="w-6 h-6"></summary>
             <ul>
                <li class="font-bold "><a>USERNAME</a></li>
                <li class="font-bold "><a>SETTINGS</a></li>
                <li class="font-bold "><a>LOG OUT</a></li>
             </ul>
            </details>
         </li>
        </ul>
     </div>
    </div>
    <select id="jenisKendaraan">
    <option value="mobil">Mobil</option>
    <option value="motor">Motor</option>
</select>

<div id="dataKendaraan"></div>

<script>
    document.getElementById('jenisKendaraan').addEventListener('change', function() {
        let jenis = this.value;
        fetch(`/vehicles/${jenis}`)
            .then(response => response.json())
            .then(data => {
                let html = '';
                data.forEach(vehicle => {
                    html += `<p>${vehicle.nama} - ${vehicle.merk} - ${vehicle.tahun}</p>`;
                });
                document.getElementById('dataKendaraan').innerHTML = html;
            });
    });
</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.3/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            clifford: '#da373d',
          },
          fontFamily: {
                poppins: ["Poppins", "sans"],
            },
          }
        }
      }
    
  </script>
</head>
<body class="font-poppins">
<div class="navbar shadow-md ">
  <div class="navbar-start ">
    <div class="dropdown">
      <div tabindex="0" role="button" class="btn btn-ghost lg:hidden  " >
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
      </div>
      <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-54 ">
        <li><a>Beranda</a></li>
        <li>
          <a>Kendaraan</a>
          <ul class="p-2">
            <li><a>Mobil</a></li>
            <li><a>Motor</a></li>
          </ul>
        </li>
        <li><a>Status</a></li>
        <li><a>Riwayat</a></li>
      </ul>
    </div>
    <a class="btn btn-ghost text-xl"><img src="images/logo-rentcang.png" class="h-10 w-34" alt=""></a>
  </div>
  <div class="navbar-center hidden lg:flex font-semibold ">
    <ul class="menu menu-horizontal px-1 text-lg">
      <li><a><img src="images/Beranda.svg"alt="">Beranda</a></li>
      <li>
        <details>
          <summary><img src="images/Kendaraan.png"class="w-7 h-7" alt="">Kendaraan</summary>
          <ul class="p-2 shadow-md">
            <li><a><img src="images/Car.png"class="w-6 h-5"  alt="">Mobil</a></li>
            <li><a><img src="images/Motorcycle.png"class="w-6 h-5"  alt="">Motor</a></li>
          </ul>
        </details>  
      </li>
      <li><a><img src="images/Status.svg" alt="">Status</a></li>
      <li><a><img src="images/Riwayat.svg" alt="">Riwayat</a></li>
    </ul>
  </div>
  <div class="navbar-end">
  <ul class="menu menu-horizontal px-2 text-lg">
      <li>
        <details>
          <summary class="ml-20"><img src="images/settings.svg" alt=""></summary>
          <ul class="p-2 shadow-lg">
            <li><a><img src="images/user.svg" alt="">Julianto</a></li>
            <li><a><img src="images/settings.svg" alt="">Profile</a></li>
            <li><a><img src="images/logout.svg" alt="">Logout</a></li>
          </ul>
        </details>  
      </li>
    </ul>
  </div>
</div>

<br>
<div class="w-full flex justify-center gap-6 ">
    <div class="card w-80 bg-base-100 shadow-xl shadow-slate-300">
        <figure class="px-10 pt-10 bg-orange-400" >
            <img src="images/copper1.png" alt="" class="rounded-xl " />
        </figure>
    <div class="card-body items-center text-center h-60">
        <h2 class="card-title font-extrabold">Copper Hardtop 4 Door</h2>
        <br>
        <h4 class="font-bold text-orange-400">Sedang Menunggu Konfirmasi</h4>
        <br>
    <div class="card-actions">
        <button class="btn bg-orange-400 text-black font-extrabold px-8">Detail Pesanan</button>
    </div>
  </div>
</div>
</div>


<br>
<footer class="footer p-7 bg-gray-400">
  <aside class="py-12">
  <a href="#"><img src="images/logo-footer.png"class="w-22 h-12" alt=""></a>
  </aside> 
  <nav class="md:justify-self-end px-2">
    <h6 class="font-bold text-black text-lg px-4 py-2">TEMUKAN KAMI DI</h6> 
    <div class="grid grid-flow-col gap-6 px-6">
    <a href="https://www.facebook.com/"><img src="images/facebook.svg" alt=""></a>
        <a href="https://www.instagram.com/"><img src="images/instagram.svg" alt=""></a>
        <a href="https://discord.gg/b5YDtCn6"><img src="images/discord.svg" alt=""></a>
    </div>
    <a href="aboutus" class="px-12"><h1 class="text-black">Tentang Kami</h1></a>
    <a href="rulesandinfo"><h1 class="text-black px-2">Peraturan dan Informasi</h1></a>
  </nav>
</footer>
</body>
</html>
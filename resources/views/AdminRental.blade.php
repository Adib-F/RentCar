@extends('layout/app')

@section('title')
Admin Rental
@endsection

@section('navbar')
  @include('components/navbaradmin')
@endsection

@section('content')
<body class="font-poppins">
<div class="text-left ml-[21rem] mt-12 mb-4">
    <ul>
      <li class="text-xl font-bold mb-">RENTAL</li>
    </ul>
</div>
<table class="table-fixed border border-slate-200 ml-[21rem] font-medium">
  <thead class="">
    <tr>
      <th class="border border-slate-200 p-2 text-xs">ID</th>
      <th class="border border-slate-200 p-2  text-xs">SIM</th>
      <th class="border border-slate-200 p-2 w-[8rem] text-xs">No. Handphone</th>
      <th class="border border-slate-200 p-2 w-[8rem] text-xs">Alamat</th>
      <th class="border border-slate-200 p-2 w-[8rem] text-xs">Tanggal Sewa</th>
      <th class="border border-slate-200 p-2 w-[8rem] text-xs">Tanggal Selesai</th>
      <th class="border border-slate-200 p-2 w-[7rem] text-xs">Total</th>
      <th class="border border-slate-200 p-2 w-[9rem] text-xs">Aksi</th>
    </tr>
  </thead>
  <tbody class="text-center">
    <tr>
      <td class="border border-slate-200 p-2 text-xs">1</td>
      <td class="border border-slate-200 p-2 text-xs">
        <button class="btn bg-yellow-200 text-xs btn-xs rounded-lg mr-1">Detail</button>
      </td>
      <td class="border border-slate-200 p-2 text-xs">0813848484</td>
      <td class="border border-slate-200 p-2 text-xs">Batam Centre</td>
      <td class="border border-slate-200 p-2 text-xs">12-03-2023</td>
      <td class="border border-slate-200 p-2 text-xs">13-03-2023</td>
      <td class="border border-slate-200 p-2 text-xs">Rp.300.000</td>
      <td class="border border-slate-200 p-2 text-xs flex justify-center items-center">
        <button class="btn bg-green-400 text-xs btn-xs rounded-lg mr-1">Edit</button>
        <button class="btn bg-red-400 text-xs btn-xs rounded-lg">Delete</button>
      </td>
    </tr>
    <tr>
      <td class="border border-slate-200 p-2 text-xs">2</td>
      <td class="border border-slate-200 p-2 text-xs">
        <button class="btn bg-yellow-200 text-xs btn-xs rounded-lg mr-1">Detail</button>
      </td>
      <td class="border border-slate-200 p-2 text-xs">0817563738</td>
      <td class="border border-slate-200 p-2 text-xs">Batu Aji</td>
      <td class="border border-slate-200 p-2 text-xs">3-12-2024</td>
      <td class="border border-slate-200 p-2 text-xs">5-12-2024</td>
      <td class="border border-slate-200 p-2 text-xs">Rp.500.000</td>
      <td class="border border-slate-200 p-2 text-xs flex justify-center items-center">
        <button class="btn bg-green-400 text-xs btn-xs rounded-lg mr-1">Edit</button>
        <button class="btn bg-red-400 text-xs btn-xs rounded-lg">Delete</button>
      </td>
    </tr>
    <tr>
      <td class="border border-slate-200 p-2 text-xs">3</td>
      <td class="border border-slate-200 p-2 text-xs">
        <button class="btn bg-yellow-200 text-xs btn-xs rounded-lg mr-1">Detail</button>
      </td>
      <td class="border border-slate-200 p-2 text-xs">08578902344</td>
      <td class="border border-slate-200 p-2 text-xs">Piayu</td>
      <td class="border border-slate-200 p-2 text-xs">21-5-2024</td>
      <td class="border border-slate-200 p-2 text-xs">13-5-2024</td>
      <td class="border border-slate-200 p-2 text-xs">Rp.250.000</td>
      <td class="border border-slate-200 p-2 text-xs flex justify-center items-center">
        <button class="btn bg-green-400 text-xs btn-xs rounded-lg mr-1">Edit</button>
        <button class="btn bg-red-400 text-xs btn-xs rounded-lg">Delete</button>
      </td>
    </tr>
    <tr>
      <td class="border border-slate-200 p-2 text-xs">4</td>
      <td class="border border-slate-200 p-2 text-xs">
        <button class="btn bg-yellow-200 text-xs btn-xs rounded-lg mr-1">Detail</button>
      </td>
      <td class="border border-slate-200 p-2 text-xs">08921457389</td>
      <td class="border border-slate-200 p-2 text-xs">Sekupang</td>
      <td class="border border-slate-200 p-2 text-xs">19-9-2023</td>
      <td class="border border-slate-200 p-2 text-xs">25-9-2023</td>
      <td class="border border-slate-200 p-2 text-xs">Rp.400.000</td>
      <td class="border border-slate-200 p-2 text-xs flex justify-center items-center">
        <button class="btn bg-green-400 text-xs btn-xs rounded-lg mr-1">Edit</button>
        <button class="btn bg-red-400 text-xs btn-xs rounded-lg">Delete</button>
      </td>
    </tr>
    <tr> 
      <td class="border border-slate-200 p-2 text-xs">5</td>
      <td class="border border-slate-200 p-2 text-xs">
        <button class="btn bg-yellow-200 text-xs btn-xs rounded-lg mr-1">Detail</button>
      </td>
      <td class="border border-slate-200 p-2 text-xs">0875637881</td>
      <td class="border border-slate-200 p-2 text-xs">Sagulung</td>
      <td class="border border-slate-200 p-2 text-xs">17-04-2024</td>
      <td class="border border-slate-200 p-2 text-xs">20-04-2024</td>
      <td class="border border-slate-200 p-2 text-xs">Rp.700.000</td>
      <td class="border border-slate-200 p-2 text-xs flex justify-center items-center">
        <button class="btn bg-green-400 text-xs btn-xs rounded-lg mr-1">Edit</button>
        <button class="btn bg-red-400 text-xs btn-xs rounded-lg">Delete</button>
      </td>
    </tr>
    <tr>
      <td class="border border-slate-200 p-2 text-xs">6</td>
      <td class="border border-slate-200 p-2 text-xs">
        <button class="btn bg-yellow-200 text-xs btn-xs rounded-lg mr-1">Detail</button>
      </td>
      <td class="border border-slate-200 p-2 text-xs">08134757372</td>
      <td class="border border-slate-200 p-2 text-xs">Batu Ampar</td>
      <td class="border border-slate-200 p-2 text-xs">23-11-2024</td>
      <td class="border border-slate-200 p-2 text-xs">24-11-2024</td>
      <td class="border border-slate-200 p-2 text-xs">Rp.450.000</td>
      <td class="border border-slate-200 p-2 text-xs flex justify-center items-center">
        <button class="btn bg-green-400 text-xs btn-xs rounded-lg mr-1">Edit</button>
        <button class="btn bg-red-400 text-xs btn-xs rounded-lg">Delete</button>
      </td>
    </tr>
    <tr>
      <td class="border border-slate-200 p-2 text-xs">7</td>
      <td class="border border-slate-200 p-2 text-xs">
        <button class="btn bg-yellow-200 text-xs btn-xs rounded-lg ">Detail</button>
      </td>
      <td class="border border-slate-200 p-2 text-xs">08134758389</td>
      <td class="border border-slate-200 p-2 text-xs">Botania</td>
      <td class="border border-slate-200 p-2 text-xs">2-2-2024</td>
      <td class="border border-slate-200 p-2 text-xs">3-2-2024</td>
      <td class="border border-slate-200 p-2 text-xs">Rp.550.000</td>
      <td class="border border-slate-200 p-2 text-xs flex justify-center items-center">
        <button class="btn bg-green-400 text-xs btn-xs rounded-lg mr-1">Edit</button>
        <button class="btn bg-red-400 text-xs btn-xs rounded-lg">Delete</button>
      </td>
    </tr>
   
  </tbody>
</table>
<div class=" join flex justify-end mt-3 ">
  <button class="join-item btn btn-xs mr-1"><</button>
  <div class="outline outline-1 rounded-none flex">
    <button class="join-item btn btn-xs btn-active bg-orange-400">1</button>
    <button class="join-item btn btn-xs ">2</button>
    <button class="join-item btn btn-xs">3</button>
    <button class="join-item btn btn-xs">4</button>
  </div>
  <button class="join-item btn btn-xs  ml-1">></button>
</div>
</body>
@endsection


@extends('layout/app')

@section('title')
Admin Riwayat
@endsection

@section('navbar')
  @include('components/navbaradmin')
@endsection

@section('content')
<body class="font-poppins">
<div class="text-left ml-[21rem] mt-12 mb-4">
    <ul>
      <li class="text-xl font-bold mb-">Riwayat</li>
    </ul>
</div>
<table class="table-fixed border border-slate-200 ml-[21rem] font-medium">
  <thead class="">
    <tr>
      <th class="border border-slate-200 p-2 w-[8rem] text-xs">Id</th>
      <th class="border border-slate-200 p-2 w-[16rem] text-xs">No Pesanan</th>
      <th class="border border-slate-200 p-2 w-[8rem] text-xs">Tanggal Mulai</th>   
      <th class="border border-slate-200 p-2 w-[8rem] text-xs">Tanggal Selesai</th>
      <th class="border border-slate-200 p-2 w-[16rem] text-xs">Detail Pesanan</th>
    </tr>
  </thead>
  <tbody class="text-center">
    <tr>
      <td class="border border-slate-200 p-2 text-xs">1</td>
      <td class="border border-slate-200 p-2 text-xs">RNCG00001</td>
      <td class="border border-slate-200 p-2 text-xs">13-03-2023</td>
      <td class="border border-slate-200 p-2 text-xs">14-03-2023</td>
      <td class="border border-slate-200 p-2 text-xs">
        <button class="btn bg-yellow-200 text-xs btn-xs rounded-lg">Detail</button>
      </td>
    </tr>
    <tr>
    <td class="border border-slate-200 p-2 text-xs">2</td>
      <td class="border border-slate-200 p-2 text-xs">RNCG00002</td>
      <td class="border border-slate-200 p-2 text-xs">13-03-2023</td>
      <td class="border border-slate-200 p-2 text-xs">14-03-2023</td>
      <td class="border border-slate-200 p-2 text-xs">
        <button class="btn bg-yellow-200 text-xs btn-xs rounded-lg">Detail</button>
      </td>
    </tr>
    <tr>
    <td class="border border-slate-200 p-2 text-xs">3</td>
      <td class="border border-slate-200 p-2 text-xs">RNCG00003</td>
      <td class="border border-slate-200 p-2 text-xs">13-03-2023</td>
      <td class="border border-slate-200 p-2 text-xs">14-03-2023</td>
      <td class="border border-slate-200 p-2 text-xs">
        <button class="btn bg-yellow-200 text-xs btn-xs rounded-lg">Detail</button>
      </td>
    </tr>
    <tr>
    <td class="border border-slate-200 p-2 text-xs">4</td>
      <td class="border border-slate-200 p-2 text-xs">RNCG00004</td>
      <td class="border border-slate-200 p-2 text-xs">13-03-2023</td>
      <td class="border border-slate-200 p-2 text-xs">14-03-2023</td>
      <td class="border border-slate-200 p-2 text-xs">
        <button class="btn bg-yellow-200 text-xs btn-xs rounded-lg">Detail</button>
      </td>
    </tr>
    <tr> 
    <td class="border border-slate-200 p-2 text-xs">5</td>
      <td class="border border-slate-200 p-2 text-xs">RNCG0000</td>
      <td class="border border-slate-200 p-2 text-xs">13-03-2023</td>
      <td class="border border-slate-200 p-2 text-xs">14-03-2023</td>
      <td class="border border-slate-200 p-2 text-xs">
        <button class="btn bg-yellow-200 text-xs btn-xs rounded-lg">Detail</button>
      </td>
    </tr>
    <tr>
    <td class="border border-slate-200 p-2 text-xs">6</td>
      <td class="border border-slate-200 p-2 text-xs">RNCG00006</td>
      <td class="border border-slate-200 p-2 text-xs">13-03-2023</td>
      <td class="border border-slate-200 p-2 text-xs">14-03-2023</td>
      <td class="border border-slate-200 p-2 text-xs">
        <button class="btn bg-yellow-200 text-xs btn-xs rounded-lg">Detail</button>
      </td>
    </tr>
    <tr>
    <td class="border border-slate-200 p-2 text-xs">7</td>
      <td class="border border-slate-200 p-2 text-xs">RNCG00007</td>
      <td class="border border-slate-200 p-2 text-xs">13-03-2023</td>
      <td class="border border-slate-200 p-2 text-xs">14-03-2023</td>
      <td class="border border-slate-200 p-2 text-xs">
        <button class="btn bg-yellow-200 text-xs btn-xs rounded-lg">Detail</button>
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


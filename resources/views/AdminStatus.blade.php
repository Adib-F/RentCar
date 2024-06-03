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
      <th class="border border-slate-200 p-2 w-[8rem] text-xs">No</th>
      <th class="border border-slate-200 p-2 w-[16rem] text-xs">Penyewa</th>
      <th class="border border-slate-200 p-2 w-[8rem] text-xs">No Hp</th>
      <th class="border border-slate-200 p-2 w-[8rem] text-xs">Alamat</th>
      <th class="border border-slate-200 p-2 w-[16rem] text-xs">Detail Pesanan</th>
    </tr>
  </thead>

  @foreach ($statuss  as $index => $status)

  @endforeach
  <tbody class="text-center">
    <tr>
      <td class="p-2 text-xs border border-slate-200">{{$index + 1}}</td>
      <td class="p-2 text-xs border border-slate-200">{{$status -> }}</td>
      <td class="p-2 text-xs border border-slate-200">13-03-2023</td>
      <td class="p-2 text-xs border border-slate-200">14-03-2023</td>
      <td class="p-2 text-xs border border-slate-200">
        <button class="text-xs bg-yellow-200 rounded-lg btn btn-xs">Detail</button>
      </td>
    </tr>
    <tr>


  </tbody>
</table>
<div class="flex justify-end mt-3 join">
  <button class="mr-1 join-item btn btn-xs"><</button>
  <div class="flex rounded-none outline outline-1">
    <button class="bg-orange-400 join-item btn btn-xs btn-active">1</button>
    <button class="join-item btn btn-xs ">2</button>
    <button class="join-item btn btn-xs">3</button>
    <button class="join-item btn btn-xs">4</button>
  </div>
  <button class="ml-1 join-item btn btn-xs">></button>
</div>
</body>
@endsection


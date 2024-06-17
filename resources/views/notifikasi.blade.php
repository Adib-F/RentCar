@extends('layout.app')

@section('title', 'Notifikasi')

@section('navbar')
    @include('components.navbar')
@endsection

@section('content')
<div class="bg-gray-100 ">
  <div class="max-w-3xl mx-auto p-20 bg-white rounded-lg shadow">
    <h2 class="text-2xl font-bold mb-6">Notifikasi</h2>

    <div class="space-y-4">
      @foreach ($notifikasis as $notifikasi)
      <div class="flex items-start p-4 bg-gray-50 rounded-lg shadow">
        <div class="flex-shrink-0">
          <div class="w-12 h-12 bg-green-500 text-white flex items-center justify-center rounded-full">
            <span><img src="images/user.svg" alt=""></span>
          </div>
        </div>
        <div class="ml-4 flex-1">
          <p class="font-semibold">
            @if ($notifikasi->Pengajuan == 'Disetujui')
                Pesanan Anda Disetujui
            @else
                Pesanan Anda Ditolak
            @endif
          </p>
          <p class="text-gray-600 text-sm">{{ $notifikasi->Pesan }}</p>
        </div>
        <div class="ml-auto text-gray-400 text-sm">
          <p>{{ $notifikasi->created_at->format('d M Y \a\t h:i A') }}</p>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>  
@endsection

@section('footer')
    @include('components.footer')
@endsection

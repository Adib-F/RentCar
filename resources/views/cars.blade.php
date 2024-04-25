@extends('layout/app')

@section('title')
 Cars
@endsection

@section('navbar')
  @include('components/navbar')
@endsection

@section('content')
<body class="bg-white min-h-screen text-black">
<table>
    <tbody>
        <section class="py-8 bg-gray-100 shadow-inner">
         <div class="container mx-auto">
            <h1 class="text-2xl text-center font-bold mb-10">MOBIL</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <!-- Motor Card -->
                <div class="card w-84 glass bg-gray-300 shadow-xl bg-gradient-to-b">
                    <figure class="px-10 pt-10"><img src="{{asset('images/cooper.png') }}" class="mb-4 w-[20rem]"/></figure>
                    <div class="card-body bg-white items-center text-center">
                    <h2 class="card-title font-bold text-xl">Cooper Handtop 4 DOOR</h2>
                    <p class="font-bold text-md">Rp500.000</p>
                        <div class="flex justify-between items-center">   
                            <div class="card-actions justify-start px-10">
                                <button class="btn btn-primary">RENTAL</button>
                            </div> 
                            <div class="card-actions justify-end">
                                <button class="btn btn-outline btn-info" onclick="my_modal_1.showModal()">DETAILS</button>
                                <dialog id="my_modal_1" class="modal">
                                    <div class="modal-box w-11/12 max-w-5xl">
                                        <h3 class="font-bold text-lg">Input Data</h3>
                                        <p class="py-4">Disini ada ada kendaraan dan inputan data nanti</p>
                                        <div class="modal-action">
                                            <form method="dialog">
                                                <button class="btn btn-outline btn-info">Close</button>
                                            </form>
                                        </div>
                                    </div>
                                </dialog>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card w-84 glass bg-gray-300 shadow-xl bg-gradient-to-b">
                    <figure class="px-10 pt-10"><img src="{{asset('images/aventgarde1.png') }}" class="mb-16"/></figure>
                    <div class="card-body bg-white items-center text-center">
                    <h2 class="card-title font-bold text-xl">V 250 Aventgarde</h2>
                    <br>
                    <p class="font-bold text-md">Rp500.000</p>
                        <div class="flex justify-between items-center">
                            <div class="card-actions justify-start px-10">
                                <button class="btn btn-primary">RENTAL</button>
                            </div> 
                            <div class="card-actions justify-end">
                                <button class="btn btn-outline btn-info" onclick="my_modal_2.showModal()">DETAILS</button>
                                <dialog id="my_modal_2" class="modal">
                                    <div class="modal-box w-11/12 max-w-5xl">
                                        <h3 class="font-bold text-lg">Input Data</h3>
                                        <p class="py-4">Disini ada ada kendaraan dan inputan data nanti</p>
                                        <div class="modal-action">
                                            <form method="dialog">
                                                <button class="btn btn-outline btn-info">Close</button>
                                            </form>
                                        </div>
                                    </div>
                                </dialog>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card w-84 glass bg-gray-300 shadow-xl bg-gradient-to-b">
                    <figure class="px-10 pt-10"><img src="{{asset('images/alpart.png') }}" class="mb-4"/></figure>
                    <div class="card-body bg-white items-center text-center">
                    <h2 class="card-title font-bold text-xl">Alpart 2.5 HEV Type</h2>
                    <p class="font-bold text-md">Rp500.000</p>
                        <div class="flex justify-between items-center">
                            <div class="card-actions justify-start px-10">
                                <button class="btn btn-primary">RENTAL</button>
                            </div> 
                            <div class="card-actions justify-end">
                                <button class="btn btn-outline btn-info" onclick="my_modal_3.showModal()">DETAILS</button>
                                <dialog id="my_modal_3" class="modal">
                                    <div class="modal-box w-11/12 max-w-5xl">
                                        <h3 class="font-bold text-lg">Input Data</h3>
                                        <p class="py-4">Disini ada ada kendaraan dan inputan data nanti</p>
                                        <div class="modal-action">
                                            <form method="dialog">
                                                <button class="btn btn-outline btn-info">Close</button>
                                            </form>
                                        </div>
                                    </div>
                                </dialog>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card w-84 glass bg-gray-300 shadow-xl bg-gradient-to-b">
                    <figure class="px-10 pt-10"><img src="{{asset('images/mclaren1.png') }}" class="mb-4"/></figure>
                    <div class="card-body bg-white items-center text-center">
                    <h2 class="card-title font-bold text-xl">2024 Mclarent Artura</h2>
                    <p class="font-bold text-md">Rp500.000</p>
                        <div class="flex justify-between items-center">
                            <div class="card-actions justify-start px-10">
                                <button class="btn btn-primary">RENTAL</button>
                            </div> 
                            <div class="card-actions justify-end">
                                <button class="btn btn-outline btn-info" onclick="my_modal_4.showModal()">DETAILS</button>
                                <dialog id="my_modal_4" class="modal">
                                    <div class="modal-box w-11/12 max-w-5xl">
                                        <h3 class="font-bold text-lg">Input Data</h3>
                                        <p class="py-4">Disini ada ada kendaraan dan inputan data nanti</p>
                                        <div class="modal-action">
                                            <form method="dialog">
                                                <button class="btn btn-outline btn-info">Close</button>
                                            </form>
                                        </div>
                                    </div>
                                </dialog>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card w-84 glass bg-gray-300 shadow-xl bg-gradient-to-b">
                    <figure class="px-10 pt-10"><img src="{{asset('images/agya.png') }}" class="mb-4"/></figure>
                    <div class="card-body bg-white items-center text-center">
                    <h2 class="card-title font-bold text-xl">Agya</h2>
                    <p class="font-bold text-md">Rp500.000</p>
                        <div class="flex justify-between items-center">
                            <div class="card-actions justify-start px-10">
                                <button class="btn btn-primary">RENTAL</button>
                            </div> 
                            <div class="card-actions justify-end">
                                <button class="btn btn-outline btn-info" onclick="my_modal_5.showModal()">DETAILS</button>
                                <dialog id="my_modal_5" class="modal">
                                    <div class="modal-box w-11/12 max-w-5xl">
                                        <h3 class="font-bold text-lg">Input Data</h3>
                                        <p class="py-4">Disini ada ada kendaraan dan inputan data nanti</p>
                                        <div class="modal-action">
                                            <form method="dialog">
                                                <button class="btn btn-outline btn-info">Close</button>
                                            </form>
                                        </div>
                                    </div>
                                </dialog>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card w-84 glass bg-gray-300 shadow-xl bg-gradient-to-b">
                    <figure class="px-10 pt-10"><img src="{{asset('images/corolla.png') }}" class="mb-4"/></figure>
                    <div class="card-body bg-white items-center text-center">
                    <h2 class="card-title font-bold text-xl">Corolla</h2>
                    <p class="font-bold text-md">Rp500.000</p>
                        <div class="flex justify-between items-center">
                            <div class="card-actions justify-start px-10">
                                <button class="btn btn-primary">RENTAL</button>
                            </div> 
                            <div class="card-actions justify-end">
                                <button class="btn btn-outline btn-info" onclick="my_modal_6.showModal()">DETAILS</button>
                                <dialog id="my_modal_6" class="modal">
                                    <div class="modal-box w-11/12 max-w-5xl">
                                        <h3 class="font-bold text-lg">Input Data</h3>
                                        <p class="py-4">Disini ada ada kendaraan dan inputan data nanti</p>
                                        <div class="modal-action">
                                            <form method="dialog">
                                                <button class="btn btn-outline btn-info">Close</button>
                                            </form>
                                        </div>
                                    </div>
                                </dialog>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card w-84 glass bg-gray-300 shadow-xl bg-gradient-to-b">
                    <figure class="px-10 pt-10"><img src="{{asset('images/bmw2series.png') }}" class="mb-4"/></figure>
                    <div class="card-body bg-white items-center text-center">
                    <h2 class="card-title font-bold text-xl">BMW 2 Series</h2>
                    <p class="font-bold text-md">Rp500.000</p>
                        <div class="flex justify-between items-center">
                            <div class="card-actions justify-start px-10">
                                <button class="btn btn-primary">RENTAL</button>
                            </div> 
                            <div class="card-actions justify-end">
                                <button class="btn btn-outline btn-info" onclick="my_modal_7.showModal()">DETAILS</button>
                                <dialog id="my_modal_7" class="modal">
                                    <div class="modal-box w-11/12 max-w-5xl">
                                        <h3 class="font-bold text-lg">Input Data</h3>
                                        <p class="py-4">Disini ada ada kendaraan dan inputan data nanti</p>
                                        <div class="modal-action">
                                            <form method="dialog">
                                                <button class="btn btn-outline btn-info">Close</button>
                                            </form>
                                        </div>
                                    </div>
                                </dialog>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card w-84 glass bg-gray-300 shadow-xl bg-gradient-to-b ">
                    <figure class="px-10 pt-10"><img src="{{asset('images/bmwz4.png') }}" class="mb-4"/></figure>
                    <div class="card-body bg-white items-center text-center">
                    <h2 class="card-title font-bold text-xl">BMW Z4</h2>
                    <p class="font-bold text-md">Rp500.000</p>
                        <div class="flex justify-between items-center">
                            <div class="card-actions justify-start px-10">
                                <button class="btn btn-primary">RENTAL</button>
                            </div> 
                            <div class="card-actions justify-end">
                                <button class="btn btn-outline btn-info" onclick="my_modal_8.showModal()">DETAILS</button>
                                <dialog id="my_modal_8" class="modal">
                                    <div class="modal-box w-11/12 max-w-5xl">
                                        <h3 class="font-bold text-lg">Input Data</h3>
                                        <p class="py-4">Disini ada ada kendaraan dan inputan data nanti</p>
                                        <div class="modal-action">
                                            <form method="dialog">
                                                <button class="btn btn-outline btn-info">Close</button>
                                            </form>
                                        </div>
                                    </div>
                                </dialog>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
        </section>
    </tbody>
</table>
</body>
@endsection

@section('footer')
 @include('components/footer')
@endsection
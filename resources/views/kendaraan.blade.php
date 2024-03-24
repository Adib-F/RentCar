@extends('layout.list')

@section('title', 'Rentcang')
@section('content')

<table>
    <tbody>
        <section class="py-8 bg-gray-300 shadow-inner">
         <div class="container mx-auto">
            <h1 class="text-2xl text-center font-bold mb-10">MOTOR</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <!-- Motor Card -->
                <div class="card w-84 glass bg-base-100 shadow-xl bg-gradient-to-b from-base-300 to-base-100">
                    <figure class="px-10 pt-10"><img src="{{asset('images/lexi.png') }}" class="mb-4"/></figure>
                    <div class="card-body bg-base-100 items-center text-center">
                    <h2 class="card-title font-bold text-3xl">LEXI</h2>
                    <p class="font-bold text-2xl">Rp500.000</p>
                        <div class="flex justify-between items-center">    
                            <div class="card-actions justify-center">
                                <button class="btn btn-outline btn-info" onclick="my_modal_1.showModal()">RENTAL NOW</button>
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
                <div class="card w-84 glass bg-base-100 shadow-xl bg-gradient-to-b from-base-300 to-base-100">
                    <figure class="px-10 pt-10"><img src="{{asset('images/Aerox.png') }}" class="mb-4"/></figure>
                    <div class="card-body bg-base-100 items-center text-center">
                    <h2 class="card-title font-bold text-3xl">AEROX</h2>
                    <p class="font-bold text-2xl">Rp500.000</p>
                        <div class="flex justify-between items-center">
                            <div class="card-actions justify-center">
                                <button class="btn btn-outline btn-info" onclick="my_modal_2.showModal()">RENTAL NOW</button>
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
                <div class="card w-84 glass bg-base-100 shadow-xl bg-gradient-to-b from-base-300 to-base-100">
                    <figure class="px-10 pt-10"><img src="{{asset('images/mio.png') }}" class="mb-4"/></figure>
                    <div class="card-body bg-base-100 items-center text-center">
                    <h2 class="card-title font-bold text-3xl">MIO</h2>
                    <p class="font-bold text-2xl">Rp500.000</p>
                        <div class="flex justify-between items-center">
                            <div class="card-actions justify-center">
                                <button class="btn btn-outline btn-info" onclick="my_modal_3.showModal()">RENTAL NOW</button>
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
                <div class="card w-84 glass bg-base-100 shadow-xl bg-gradient-to-b from-base-300 to-base-100">
                    <figure class="px-10 pt-10"><img src="{{asset('images/Beat.png') }}" class="mb-4"/></figure>
                    <div class="card-body bg-base-100 items-center text-center">
                    <h2 class="card-title font-bold text-3xl">BEAT</h2>
                    <p class="font-bold text-2xl">Rp500.000</p>
                        <div class="flex justify-between items-center">
                            <div class="card-actions justify-center">
                                <button class="btn btn-outline btn-info" onclick="my_modal_4.showModal()">RENTAL NOW</button>
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
            </div>
         </div>
        </section>
        <section class="py-8 bg-gray-300">
         <div class="container mx-auto">
            <h1 class="text-2xl text-center font-bold mb-10">MOBIL</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <!-- Mobil Card -->
                <div class="card w-84 glass bg-base-100 shadow-xl bg-gradient-to-b from-base-300 to-base-100">
                    <figure class="px-10 pt-10"><img src="{{asset('images/Jazz.png') }}" class="mb-4"/></figure>
                    <div class="card-body bg-base-100 items-center text-center">
                    <h2 class="card-title font-bold text-3xl">JAZZ</h2>
                    <p class="font-bold text-2xl">Rp500.000</p>
                        <div class="flex justify-between items-center">    
                            <div class="card-actions justify-center">
                                <button class="btn btn-outline btn-info" onclick="my_modal_5.showModal()">RENTAL NOW</button>
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
                <div class="card w-84 glass bg-base-100 shadow-xl bg-gradient-to-b from-base-300 to-base-100">
                    <figure class="px-10 pt-10"><img src="{{asset('images/fortuner.png') }}" class="mb-4"/></figure>
                    <div class="card-body bg-base-100 items-center text-center">
                    <h2 class="card-title font-bold text-3xl">FORTUNER</h2>
                    <p class="font-bold text-2xl">Rp500.000</p>
                        <div class="flex justify-between items-center">    
                            <div class="card-actions justify-center">
                                <button class="btn btn-outline btn-info" onclick="my_modal_6.showModal()">RENTAL NOW</button>
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
                <div class="card w-84 glass bg-base-100 shadow-xl bg-gradient-to-b from-base-300 to-base-100">
                    <figure class="px-10 pt-10"><img src="{{asset('images/ertiga.png') }}" class="mb-4"/></figure>
                    <div class="card-body bg-base-100 items-center text-center">
                    <h2 class="card-title font-bold text-3xl">ERTIGA</h2>
                    <p class="font-bold text-2xl">Rp500.000</p>
                        <div class="flex justify-between items-center">    
                            <div class="card-actions justify-center">
                                <button class="btn btn-outline btn-info" onclick="my_modal_7.showModal()">RENTAL NOW</button>
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
                <div class="card w-84 glass bg-base-100 shadow-xl bg-gradient-to-b from-base-300 to-base-100">
                    <figure class="px-10 pt-10"><img src="{{asset('images/Confero.png') }}" class="mb-4"/></figure>
                    <div class="card-body bg-base-100 items-center text-center">
                    <h2 class="card-title font-bold text-3xl">CONFERO</h2>
                    <p class="font-bold text-2xl">Rp500.000</p>
                        <div class="flex justify-between items-center">    
                            <div class="card-actions justify-center">
                                <button class="btn btn-outline btn-info" onclick="my_modal_8.showModal()">RENTAL NOW</button>
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
@endsection
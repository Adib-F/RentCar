@extends('layout/app')

@section('title')
 Motor
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
            <h1 class="text-2xl text-center font-bold mb-10">MOTOR</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <!-- Motor Card -->
                <div class="card w-84 glass bg-gray-300 shadow-xl bg-gradient-to-b">
                    <figure class="px-10 pt-10"><img src="{{asset('images/pcx.png') }}" class="mb-4 w-[12rem]"/></figure>
                    <div class="card-body bg-white items-center text-center">
                    <h2 class="card-title font-bold text-xl">PCX</h2>
                    <p class="font-bold text-xl">Rp500.000</p>
                        <div class="flex justify-between items-center">  
                            <div class="card-actions justify-start px-2">
                                <button class="btn bg-orange-400">RENTAL</button>
                            </div>   
                            <div class="card-actions justify-end">
                                <button class="btn bg-slate-300" onclick="my_modal_1.showModal()">DETAILS</button>
                                <dialog id="my_modal_1" class="modal">
                                    <div class="modal-box w-11/12 max-w-5xl">
                                        <h3 class="font-bold text-lg">Input Data</h3>
                                        <p class="py-4">Disini ada ada kendaraan dan inputan data nanti</p>
                                        <div class="modal-action">
                                            <form method="dialog">
                                                <button class="btn bg-slate-300">Close</button>
                                            </form>
                                        </div>
                                    </div>
                                </dialog>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card w-84 glass bg-gray-300 shadow-xl bg-gradient-to-b">
                    <figure class="px-10 pt-10"><img src="{{asset('images/beatstreet.png') }}" class="mb-4 w-[14rem]"/></figure>
                    <div class="card-body bg-white items-center text-center">
                    <h2 class="card-title font-bold text-xl">Beat Street</h2>
                    <p class="font-bold text-md">Rp500.000</p>
                        <div class="flex justify-between items-center">
                            <div class="card-actions justify-start px-2">
                                <button class="btn bg-orange-400">RENTAL</button>
                            </div> 
                            <div class="card-actions justify-end">
                                <button class="btn bg-slate-300" onclick="my_modal_2.showModal()">DETAILS</button>
                                <dialog id="my_modal_2" class="modal">
                                    <div class="modal-box w-11/12 max-w-5xl">
                                        <h3 class="font-bold text-lg">Input Data</h3>
                                        <p class="py-4">Disini ada ada kendaraan dan inputan data nanti</p>
                                        <div class="modal-action">
                                            <form method="dialog">
                                                <button class="btn bg-slate-300">Close</button>
                                            </form>
                                        </div>
                                    </div>
                                </dialog>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card w-84 glass bg-gray-300 shadow-xl bg-gradient-to-b">
                    <figure class="px-10 pt-10"><img src="{{asset('images/hondacbr.png') }}" class="mb-16"/></figure>
                    <div class="card-body bg-white items-center text-center">
                    <h2 class="card-title font-bold text-xl">Honda CBR</h2>
                    <p class="font-bold text-md">Rp500.000</p>
                        <div class="flex justify-between items-center">
                            <div class="card-actions justify-start px-2">
                                <button class="btn bg-orange-400">RENTAL</button>
                            </div> 
                            <div class="card-actions justify-end">
                                <button class="btn bg-slate-300" onclick="my_modal_3.showModal()">DETAILS</button>
                                <dialog id="my_modal_3" class="modal">
                                    <div class="modal-box w-11/12 max-w-5xl">
                                        <h3 class="font-bold text-lg">Input Data</h3>
                                        <p class="py-4">Disini ada ada kendaraan dan inputan data nanti</p>
                                        <div class="modal-action">
                                            <form method="dialog">
                                                <button class="btn bg-slate-300">Close</button>
                                            </form>
                                        </div>
                                    </div>
                                </dialog>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card w-84 glass bg-gray-300 shadow-xl bg-gradient-to-b">
                    <figure class="px-10 pt-10"><img src="{{asset('images/vario.png') }}" class="mb-4 w-[13rem]"/></figure>
                    <div class="card-body bg-white items-center text-center">
                    <h2 class="card-title font-bold text-xl">VARIO</h2>
                    <p class="font-bold text-md">Rp500.000</p>
                        <div class="flex justify-between items-center">
                            <div class="card-actions justify-start px-2">
                                <button class="btn bg-orange-400">RENTAL</button>
                            </div> 
                            <div class="card-actions justify-end">
                                <button class="btn bg-slate-300" onclick="my_modal_4.showModal()">DETAILS</button>
                                <dialog id="my_modal_4" class="modal">
                                    <div class="modal-box w-11/12 max-w-5xl">
                                        <h3 class="font-bold text-lg">Input Data</h3>
                                        <p class="py-4">Disini ada ada kendaraan dan inputan data nanti</p>
                                        <div class="modal-action">
                                            <form method="dialog">
                                                <button class="btn bg-slate-300">Close</button>
                                            </form>
                                        </div>
                                    </div>
                                </dialog>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card w-84 glass bg-gray-300 shadow-xl bg-gradient-to-b">
                    <figure class="px-10 pt-10"><img src="{{asset('images/ST125.png') }}" class="mb-4 w-[14rem]"/></figure>
                    <div class="card-body bg-white items-center text-center">
                    <h2 class="card-title font-bold text-xl">ST125</h2>
                    <p class="font-bold text-md">Rp500.000</p>
                        <div class="flex justify-between items-center">
                            <div class="card-actions justify-start px-2">
                                <button class="btn bg-orange-400">RENTAL</button>
                            </div> 
                            <div class="card-actions justify-end">
                                <button class="btn bg-slate-300" onclick="my_modal_5.showModal()">DETAILS</button>
                                <dialog id="my_modal_5" class="modal">
                                    <div class="modal-box w-11/12 max-w-5xl">
                                        <h3 class="font-bold text-lg">Input Data</h3>
                                        <p class="py-4">Disini ada ada kendaraan dan inputan data nanti</p>
                                        <div class="modal-action">
                                            <form method="dialog">
                                                <button class="btn bg-slate-300">Close</button>
                                            </form>
                                        </div>
                                    </div>
                                </dialog>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card w-84 glass bg-gray-300 shadow-xl bg-gradient-to-b">
                    <figure class="px-10 pt-10"><img src="{{asset('images/ADV.png') }}" class="mb-4 w-[14.3rem]"/></figure>
                    <div class="card-body bg-white items-center text-center">
                    <h2 class="card-title font-bold text-xl">ADV</h2>
                    <p class="font-bold text-md">Rp500.000</p>
                        <div class="flex justify-between items-center">
                            <div class="card-actions justify-start px-2">
                                <button class="btn bg-orange-400">RENTAL</button>
                            </div> 
                            <div class="card-actions justify-end">
                                <button class="btn bg-slate-300" onclick="my_modal_6.showModal()">DETAILS</button>
                                <dialog id="my_modal_6" class="modal">
                                    <div class="modal-box w-11/12 max-w-5xl">
                                        <h3 class="font-bold text-lg">Input Data</h3>
                                        <p class="py-4">Disini ada ada kendaraan dan inputan data nanti</p>
                                        <div class="modal-action">
                                            <form method="dialog">
                                                <button class="btn bg-slate-300">Close</button>
                                            </form>
                                        </div>
                                    </div>
                                </dialog>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card w-84 glass bg-gray-300 shadow-xl bg-gradient-to-b">
                    <figure class="px-10 pt-10"><img src="{{asset('images/scoppy.png') }}" class="mb-4 w-[14.6rem]"/></figure>
                    <div class="card-body bg-white items-center text-center">
                    <h2 class="card-title font-bold text-xl">Scoopy</h2>
                    <p class="font-bold text-md">Rp500.000</p>
                        <div class="flex justify-between items-center">
                            <div class="card-actions justify-start px-10">
                                <button class="btn bg-orange-400">RENTAL</button>
                            </div> 
                            <div class="card-actions justify-end">
                                <button class="btn bg-slate-300" onclick="my_modal_7.showModal()">DETAILS</button>
                                <dialog id="my_modal_7" class="modal">
                                    <div class="modal-box w-11/12 max-w-5xl">
                                        <h3 class="font-bold text-lg">Input Data</h3>
                                        <p class="py-4">Disini ada ada kendaraan dan inputan data nanti</p>
                                        <div class="modal-action">
                                            <form method="dialog">
                                                <button class="btn bg-slate-300">Close</button>
                                            </form>
                                        </div>
                                    </div>
                                </dialog>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card w-84 glass bg-gray-300 shadow-xl bg-gradient-to-b">
                    <figure class="px-10 pt-10"><img src="{{asset('images/genio.png') }}" class="mb-4 w-[15.1rem]"/></figure>
                    <div class="card-body bg-white items-center text-center">
                    <h2 class="card-title font-bold text-xl">Genio</h2>
                    <p class="font-bold text-md">Rp500.000</p>
                        <div class="flex justify-between items-center">
                            <div class="card-actions justify-start px-2">
                                <button class="btn bg-orange-400">RENTAL</button>
                            </div> 
                            <div class="card-actions justify-end">
                                <button class="btn bg-slate-300" onclick="my_modal_8.showModal()">DETAILS</button>
                                <dialog id="my_modal_8" class="modal">
                                    <div class="modal-box w-11/12 max-w-5xl">
                                        <h3 class="font-bold text-lg">Input Data</h3>
                                        <p class="py-4">Disini ada ada kendaraan dan inputan data nanti</p>
                                        <div class="modal-action">
                                            <form method="dialog">
                                                <button class="btn bg-slate-300">Close</button>
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

@section('footer')
 @include('components/footer')
@endsection
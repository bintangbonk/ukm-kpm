@extends('layouts.main')

@section('content')
    <section class="mt-36 mb-16">
        <div class="container">
            <h2 class=" text-center font-bold text-dark text-3xl mb-1 lg:text-4xl">
                Galeri Foto
            </h2>
            <div class="flex items-center justify-center py-4 md:py-8 flex-wrap" id="btnFilterGallery">
                <ul class="flex">
                    <li class="list bg-gray-300 rounded-xl py-[8px] px-[20px] m-[5px] cursor-pointer " data-filter="all">Semua
                        Foto</li>
                    <li class="list bg-gray-300 rounded-xl py-[8px] px-[20px] m-[5px] cursor-pointer" data-filter="batik">
                        Batik</li>
                    <li class="list bg-gray-300 rounded-xl py-[8px] px-[20px] m-[5px] cursor-pointer" data-filter="almet">
                        Almamater</li>
                </ul>
            </div>
            <div class="product grid grid-cols-2 md:grid-cols-3 gap-4">
                <img class="photo h-auto max-w-full rounded-lg almet transition ease-in-out" src="asset/img/divisiA.jpg"
                    alt="">
                <img class="photo h-auto max-w-full rounded-lg almet transition ease-in-out" src="asset/img/almet-1.jpg"
                    alt="">
                <img class="photo h-auto max-w-full rounded-lg almet transition ease-in-out" src="asset/img/almet-2.jpg"
                    alt="">
                <img class="photo h-auto max-w-full rounded-lg almet transition ease-in-out" src="asset/img/almet-3.jpg"
                    alt="">
                <img class="photo h-auto max-w-full rounded-lg batik transition ease-in-out" src="asset/img/divisiB.jpg"
                    alt="">
                <img class="photo h-auto max-w-full rounded-lg batik transition ease-in-out" src="asset/img/batik-1.jpg"
                    alt="">
                <img class="photo h-auto max-w-full rounded-lg batik transition ease-in-out" src="asset/img/batik-2.jpg"
                    alt="">
                <img class="photo h-auto max-w-full rounded-lg batik transition ease-in-out" src="asset/img/batik-3.jpg"
                    alt="">
            </div>
        </div>
    </section>


    {{-- <!-- Modal toggle -->
    <button data-modal-target="defaultModal" data-modal-toggle="defaultModal"
        class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        type="button">
        Toggle modal
    </button>

    <!-- Main modal -->
    <div id="defaultModal" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Terms of Service
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="defaultModal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        With less than a month to go before the European Union enacts new consumer privacy laws for its
                        citizens, companies around the world are updating their terms of service agreements to comply.
                    </p>
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is
                        meant to ensure a common set of data rights in the European Union. It requires organizations to
                        notify users as soon as possible of high-risk data breaches that could personally affect them.
                    </p>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="defaultModal" type="button"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I
                        accept</button>
                    <button data-modal-hide="defaultModal" type="button"
                        class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                </div>
            </div>
        </div>
    </div> --}}



    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
        crossorigin="anonymous"></script>
    <script type="text/javasript">
        
    </script>
@endsection

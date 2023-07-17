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
                <img class="photo h-auto max-w-full rounded-lg almet transition ease-in-out" src="asset/img/divisiA.jpg" alt="">
                <img class="photo h-auto max-w-full rounded-lg almet transition ease-in-out" src="asset/img/almet-1.jpg" alt="">
                <img class="photo h-auto max-w-full rounded-lg almet transition ease-in-out" src="asset/img/almet-2.jpg" alt="">
                <img class="photo h-auto max-w-full rounded-lg almet transition ease-in-out" src="asset/img/almet-3.jpg" alt="">
                <img class="photo h-auto max-w-full rounded-lg batik transition ease-in-out" src="asset/img/divisiB.jpg" alt="">
                <img class="photo h-auto max-w-full rounded-lg batik transition ease-in-out" src="asset/img/batik-1.jpg" alt="">
                <img class="photo h-auto max-w-full rounded-lg batik transition ease-in-out" src="asset/img/batik-2.jpg" alt="">
                <img class="photo h-auto max-w-full rounded-lg batik transition ease-in-out" src="asset/img/batik-3.jpg" alt="">
            </div>
        </div>
    </section>


    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
        crossorigin="anonymous"></script>
    <script type="text/javasript">
        
    </script>
@endsection

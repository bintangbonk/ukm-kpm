@extends('layouts.main')

@section('content')
    <section class="pt-36 pb-16">
        {{-- content --}}
        <div class="container">
            <div class="w-full xl:w-9/12">
                <div class="container px-2 mx-auto">
                    <section class="mb-32 text-gray-800 text-justify">
                        <article class="">
                            <h2 class="text-4xl font-bold mb-5">{{ $news->title }}</h2>
                            <div class="my-5">
                                {{-- <img src="asset/img/divisiA.JPG" alt=""> --}}
                                <img src="https://source.unsplash.com/500x500" alt="">
                            </div>
                            <div class="">
                                <div class="flex flex-wrap">
                                    <div class="item-detail">
                                        <div
                                            class="py-1 px-4 mb-5 rounded-lg outline outline-batik text-batik dark:text-almet dark:outline-almet mr-5">
                                            Author : Admin</div>
                                    </div>
                                    <div class="item-detail">
                                        <div
                                            class="py-1 px-4 mb-5 rounded-lg outline outline-batik text-batik dark:text-almet dark:outline-almet mr-5">
                                            Post At : {{ $news->created_at }}</div>
                                    </div>
                                    <div class="item-detail">
                                        <div
                                            class="py-1 px-4 mb-5 rounded-lg hover:outline hover:outline-batik text-batik dark:text-almet dark:hover:outline-almet mr-5">
                                            <a href="/news"> <u>Kembali ke halaman sebelumnya</u> </a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="leading-relaxed font-semibold text-md text-justify">
                                {!! $news->body !!}
                            </div>
                        </article>
                    </section>
                </div>
            </div>
        </div>
    </section>
@endsection

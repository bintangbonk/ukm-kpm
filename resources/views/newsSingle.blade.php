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
                                <div class="flex flex-wrap justify-between">
                                    <div class="item-detail">
                                        Author
                                    </div>
                                    <div class="item-detail">
                                        Post At 
                                    </div>
                                </div>
                            </div>
                            <a href="/news" class="my-10">Back to News list</a>
                            {!! $news->body !!}
                        </article>
                    </section>
                </div>
            </div>
        </div>
    </section>
@endsection

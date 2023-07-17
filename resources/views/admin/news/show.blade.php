@extends('layouts.admin')

@section('content')
    <div class="p-4 sm:ml-64">
        <section class="pt-36 pb-16">
            <div class="container">
                <div class="flex justify-between flex-wrap items-center mb-10">
                    <h1 class="text-2xl font-bold">
                        {{ $news->title }}
                    </h1>
                </div>

                <div class="">
                    <img src="https://source.unsplash.com/500x500" alt="">
                </div>

                <div class="">
                    {!! $news->body !!}
                </div>

            </div>
        </section>
    </div>
@endsection

@extends('layouts.main')

@section('content')
    <main class="pt-36 pb-12">
        <!-- Heading -->
        <div class="container mx-auto px-4 flex flex-wrap lg:flex-nowrap">
            <!-- Main Content -->
            <div class="w-full xl:w-9/12 ">
                <div class="container px-6 mx-auto">
                    <!-- Section: Design Block -->
                    <section class="mb-32 text-gray-800 md:text-left">
                        <h2 class="text-3xl font-bold mb-12 text-center">Berita Acara</h2>
                        <!-- Card Content -->
                        @if ($newss->count())
                            @foreach ($newss as $news)
                                <div class="flex flex-wrap mb-6">
                                    <div class="grow-0 shrink-0 basis-auto w-full md:w-3/12 px-3 mb-6 md:mb-0 ml-auto">
                                        <div class="relative overflow-hidden bg-no-repeat bg-cover ripple shadow-lg rounded-lg mb-6"
                                            data-mdb-ripple="true" data-mdb-ripple-color="light">
                                            <img src="https://mdbootstrap.com/img/new/standard/city/018.jpg" class="w-full"
                                                alt="Louvre" />
                                            <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out"
                                                style="background-color: rgba(251, 251, 251, 0.2)"></div>
                                        </div>
                                    </div>
                                    <div
                                        class="grow-0 shrink-0 basis-auto w-full md:w-9/12 xl:w-7/12 px-3 mb-6 md:mb-0 mr-auto">
                                        <h5 class="text-lg font-bold mb-3 truncate">{{ $news->title }}</h5>
                                        <p class="text-gray-500 mb-2">
                                            <small>Published <u>{{ $news->created_at->diffForHumans() }}</u></small>
                                        </p>
                                        <p class="text-gray-500 truncate mb-3">
                                            {{ $news->excerpt }}
                                        </p>
                                        <a href="/news/{{ $news->slug }}" class="text-sm text-gray-500"> <u>Baca Lebih
                                                Lengkap...</u></a>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p class="text-center text-xl">No News Found</p>
                        @endif

                        <!-- Pagination -->
                        {{ $newss->links() }}

                    </section>
                </div>
            </div>

            <!-- Right Sidebar -->
            <div class="mt-8 lg:w-3/12 lg:mt-0 ">
                <div class="w-full bg-white shadow-sm rounded-sm p-4 ">
                    <div class="container">
                        <h3 class="text-xl font-semibold text-gray-700 mb-3 font-roboto">Kegiatan</h3>
                        <div class="space-y-4">
                            <!-- list item -->
                            <a href="#" class="flex group">
                                <div class="flex-shrink-0">
                                    <img src="https://mdbootstrap.com/img/new/standard/city/018.jpg"
                                        class="h-14 w-20 lg:w-14 xl:w-20 rounded object-cover">
                                </div>
                                <div class="flex-grow pl-3">
                                    <h5
                                        class="text-md leading-5 block font-roboto font-semibold  transition group-hover:text-blue-500">
                                        Judul Berita
                                    </h5>
                                    <div class="flex text-gray-400 text-sm items-center">
                                        <span class="mr-1 text-xs"><i class="far fa-clock"></i></span>
                                        June 11, 2021
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="flex group">
                                <div class="flex-shrink-0">
                                    <img src="https://mdbootstrap.com/img/new/standard/city/018.jpg"
                                        class="h-14 w-20 lg:w-14 xl:w-20 rounded object-cover">
                                </div>
                                <div class="flex-grow pl-3">
                                    <h5
                                        class="text-md leading-5 block font-roboto font-semibold  transition group-hover:text-blue-500">
                                        Judul Berita
                                    </h5>
                                    <div class="flex text-gray-400 text-sm items-center">
                                        <span class="mr-1 text-xs"><i class="far fa-clock"></i></span>
                                        June 11, 2021
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="container mt-10">
                        <h3 class="text-xl font-semibold text-gray-700 mb-3 font-roboto">Berita Populer</h3>
                        <div class="space-y-4">
                            <!-- list item -->
                            <a href="#" class="flex group">
                                <div class="flex-shrink-0">
                                    <img src="https://mdbootstrap.com/img/new/standard/city/018.jpg"
                                        class="h-14 w-20 lg:w-14 xl:w-20 rounded object-cover">
                                </div>
                                <div class="flex-grow pl-3">
                                    <h5
                                        class="text-md leading-5 block font-roboto font-semibold  transition group-hover:text-blue-500">
                                        Judul Berita
                                    </h5>
                                    <div class="flex text-gray-400 text-sm items-center">
                                        <span class="mr-1 text-xs"><i class="far fa-clock"></i></span>
                                        June 11, 2021
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="flex group">
                                <div class="flex-shrink-0">
                                    <img src="https://mdbootstrap.com/img/new/standard/city/018.jpg"
                                        class="h-14 w-20 lg:w-14 xl:w-20 rounded object-cover">
                                </div>
                                <div class="flex-grow pl-3">
                                    <h5
                                        class="text-md leading-5 block font-roboto font-semibold  transition group-hover:text-blue-500">
                                        Judul Berita
                                    </h5>
                                    <div class="flex text-gray-400 text-sm items-center">
                                        <span class="mr-1 text-xs"><i class="far fa-clock"></i></span>
                                        June 11, 2021
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>
    </main>

@endsection

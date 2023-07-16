@extends('layouts.main')

@section('content')
<section class="mt-36">
    <div class="container">
            <h2 class=" text-center font-bold text-dark text-3xl mb-1 lg:text-4xl">
                Galeri Foto
            </h2>
        <div class="flex items-center justify-center py-4 md:py-8 flex-wrap">
            <button type="button"
                class="text-white hover:text-batik dark:hover:text-almet border border-batik dark:border-almet  bg-batik dark:bg-almet hover:bg-white focus:ring-4 focus:outline-none focus:ring-orange-300 dark:ring-blue-300 rounded-full text-base font-medium px-5 py-2.5 text-center mr-3 mb-3  dark:text-white dark:hover:bg-white  dark:focus:ring-blue-300">All
                Kategori</button>
            <button type="button"
                class="text-gray-900 border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center mr-3 mb-3 dark:text-white dark:focus:ring-gray-800">Shoes</button>

        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
            {{-- <div>
                <img class="h-auto max-w-full rounded-lg"
                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
            </div> --}}
            <div>
                <img class="h-auto max-w-full rounded-lg"
                    src="asset/img/divisiA.jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg"
                    src="asset/img/divisiB.jpg" alt="">
            </div>
        </div>
    </div>
</section>

<!-- Pagination -->
<section class="my-12">
    <div class="container">
        <div class="flex flex-col items-center">
            <!-- Help text -->
            <span class="text-sm text-gray-700 dark:text-gray-400">
                Showing <span class="font-semibold text-gray-900 dark:text-white">1</span> to <span
                    class="font-semibold text-gray-900 dark:text-white">10</span> of <span
                    class="font-semibold text-gray-900 dark:text-white">100</span> Entries
            </span>
            <div class="inline-flex mt-2 xs:mt-0">
                <!-- Buttons -->
                <button
                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-gray-800 rounded-l hover:bg-gray-900 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                    <svg aria-hidden="true" class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    Prev
                </button>
                <button
                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-gray-800 border-0 border-l border-gray-700 rounded-r hover:bg-gray-900 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                    Next
                    <svg aria-hidden="true" class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
        </div>

    </div>
</section>

@endsection

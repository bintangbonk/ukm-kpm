@extends('layouts.admin')

@section('content')
    <div class="p-4 sm:ml-64">
        <section class="pt-36 pb-16">
            <div class="container">
                <div class="flex justify-between flex-wrap items-center mb-10">
                    <h1 class="font-bold text-2xl">
                        Berita Acara
                    </h1>
                </div>

                <form action="/dashboard/berita-acara" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-6 ">
                        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul
                            Berita</label>
                        <input type="text" id="title"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Tulis Judul Berita" required name="title" value="{{ old('title') }}">
                        @error('title')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="mb-6 ">
                        <label for="slug"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Slug</label>
                        <input type="text" id="slug"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" required name="slug" value="{{ old('slug') }}">
                        @error('slug')
                            {{ $message }}
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="image">Upload
                            file</label>
                        <input
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            aria-describedby="file_input_help" id="image" type="file" name="image">
                            @error('image')
                                {{ $message }}
                            @enderror
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">Max Size 5 MB</p>
                    </div>
                    <div class="mb-6">
                        <label for="body" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Isi
                            Berita</label>
                        <input type="hidden" id="body"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" required name="body" value="{{ old('body') }}">
                        <trix-editor input="body"></trix-editor>
                        @error('body')
                            {{ $message }}
                        @enderror
                    </div>
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </form>

            </div>
        </section>
    </div>
    <script>
        const title = document.querySelector("#title");
        const slug = document.querySelector("#slug");

        title.addEventListener("keyup", function() {
            let preslug = title.value;
            preslug = preslug.replace(/ /g, "-");
            slug.value = preslug.toLowerCase();
        });
    </script>
@endsection

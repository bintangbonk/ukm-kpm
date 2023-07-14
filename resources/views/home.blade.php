@extends('layouts.main')

@section('content')
    <!-- Hero Section -->
    <section id="home" class="pt-36 pb-24 ">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4 lg:w-1/2" data-aos="fade-right">
                    <h1 class="text-xl font-bold text-orange-600">
                        Unit Kreativitas Mahasiswa<span class="block font-bold text-dark text-4xl text-black ">Korps Protokoler
                            Mahasiswa</span>
                    </h1>
                    <h2 class="font-semibold text-slate-600 text-lg mb-5">
                        Universitas Islam Malang
                    </h2>
                    <p class="font-medium text-basic mb-10 leading-relaxed">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa
                        laborum voluptatem ratione ipsam, expedita possimus quo
                        aspernatur, reprehenderit doloribus neque similique sapiente
                        excepturi ex distinctio.
                        <span class="block text-dark font-bold">
                            Telusuri Lebih Lanjut
                        </span>
                    </p>

                </div>
                <div class="w-full self-end px-4 lg:w-1/2" data-aos="fade-up-left"> 
                    <div class="relative mt-10">
                        <img src="https://source.unsplash.com/500x500" alt="" class="mx-auto max-w-full" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="pt-36">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-10 lg:w-1/2 " data-aos="fade-right">
                    <h4 class="font-bold uppercase text-orange-600 text-lg mb-3">
                        Tentang Kami
                    </h4>
                    <h2 class="font-bold text-dark text-3xl mb-1 max-w-xl lg:text-4xl">
                        UKM KORPS PROTOKOLER MAHASISWA
                    </h2>
                    <h3 class="font-semibold text-2xl mb-5">
                        Universitas Islam Malang
                    </h3>
                    <p class="font-medium text-basic lg:text-lg">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia
                        eum porro quod fuga aliquam nulla praesentium soluta quo magni
                        error? Consectetur eos cupiditate animi itaque.
                    </p>
                </div>
                <div class="w-full px-4 mb-10 lg:w-1/2" data-aos="fade-right">
                    <h3 class="font-semibold text-dark text-2xl mb-4 lg:text-3xl lg:pt-10">
                        Kegiatan Kami
                    </h3>
                    <p class="font-medium text-base text-basic mb-6 lg:text-lg">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe,
                        impedit porro. Nulla excepturi sunt cupiditate?
                    </p>
                    <h3 class="font-semibold text-dark text-md lg:text-2xl lg:pt-5">
                        Media Sosial Kami
                    </h3>
                    <!-- Social Media -->
                    <div class="flex">
                        <div id="media-social" class="pt-2 text-4xl">
                            <!-- Instagram -->
                            <a href="#"
                                class="text-gray-600 hover:text-orange-600 transition duration-300 ease-in-out"><i
                                    class="bx bxl-instagram"></i></a>
                            <!-- Youtube -->
                            <a href="#"
                                class="text-gray-600 hover:text-orange-600 transition duration-300 ease-in-out"><i
                                    class="bx bxl-youtube"></i></a>
                            <!-- Tiktok -->
                            <a href="#"
                                class="text-gray-600 hover:text-orange-600 transition duration-300 ease-in-out"><i
                                    class="bx bxl-tiktok"></i></a>
                            <!-- Whatsapp -->
                            <a href="#"
                                class="text-gray-600 hover:text-orange-600 transition duration-300 ease-in-out"><i
                                    class="bx bxl-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Visi Misi -->
            <div class="w-full px-4 pt-24"> 
                <div class="max-w-xl mx-auto text-center mb-10" data-aos="fade-right">
                    <h2 class="font-bold text-dark text-3xl mb-4">Tujuan Organisasi</h2>
                    <p class="font-medium text-md text-basic">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Perferendis eligendi illum totam quos excepturi eius?
                    </p>
                </div>
                <div class="flex flex-wrap">
                    <div class="w-full px-4 lg:w-1/2 mt-5 pt-4" data-aos="fade-right">
                        <p class="block max-w-sm p-6  rounded-lg">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Visi
                        </h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Sequi repellat, rem fugit quidem dolor deleniti tempore illo quaerat! Nulla
                            beatae provident nostrum cumque quia quas.</p>
                        </p>
                    </div>
                    <div class="w-full px-4 lg:w-1/2 mt-5 pt-4" data-aos="fade-right">
                        <p class="block max-w-sm p-6 rounded-lg">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Misi
                        </h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Sequi repellat, rem fugit quidem dolor deleniti tempore illo quaerat! Nulla
                            beatae provident nostrum cumque quia quas.</p>
                        </p>
                    </div>
                </div>
            </div>
    </section>
    <!-- Program -->
    <!-- Pendaftaran -->
    <section id="pendaftaran" class="pt-12 pb-24">
        <div class="w-full px-4 pt-24">
            <div class="max-w-xl mx-auto text-center" data-aos="fade-right">
                <h1 class="text-xl font-bold text-orange-600 lg:text-2xl">
                    Pendaftaran
                    <span class="block font-bold text-slate-950 text-3xl lg:text-4xl">Gabung dengan kami</span>
                </h1>
                <p class="font-medium text-basic my-10 leading-relaxed">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni
                    voluptate hic beatae maiores voluptas impedit.
                    <span class="block text-dark font-bold">Klik Tombol dibawah</span>
                </p>
                <a href="#"
                    class="text-base font-semibold text-white bg-orange-600 py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">Gabung
                    Dengan Kami</a>
            </div>
        </div>
    </section>
    <!-- Galeri -->
    <section id="galeri" class="pt-36">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16" data-aos="fade-right">
                    <h4 class="font-semibold text-lg text-orange-600 mb-2">Galeri</h4>
                    <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl">Galeri Foto</h2>
                    <p class="font-medium text-md text-basic md:text-lg">Lorem, ipsum dolor sit amet consectetur adipisicing
                        elit.
                        Perferendis eligendi illum totam quos excepturi eius?</p>
                </div>
                <hr class="my-3">
                <div class="grid lg:grid-cols-3 gap-4" data-aos="fade-right">
                    <div class="rounded-xl shadow-xl overflow-hidden ">
                        <img src="https://source.unsplash.com/500x500" alt="" class="w-full hover:blur-md">
                    </div>
                    <div class="rounded-xl shadow-xl overflow-hidden ">
                        <img src="https://source.unsplash.com/500x500" alt="" class="w-full hover:blur-md">
                    </div>
                    <div class="rounded-xl shadow-xl overflow-hidden ">
                        <img src="https://source.unsplash.com/500x500" alt="" class="w-full hover:blur-md">
                    </div>
                </div>
            </div>
    </section>
    <!-- Berita Acara -->
    <section id="news" class="pt-36 pb-32 bg-slate-100">
        <div class="container">
            <div class="w-full px-4" data-aos="fade-right">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-orange-600 mb-2">Blog</h4>
                    <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl">Berita Acara</h2>
                    <p class="font-medium text-md text-basic md:text-lg">Lorem, ipsum dolor sit amet consectetur
                        adipisicing elit.
                        Perferendis eligendi illum totam quos excepturi eius?</p>
                </div>
            </div>
            <div class="flex flex-wrap">
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3" data-aos="fade-right">
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg mb-10">
                        <img src="https://source.unsplash.com/360x200" class="w-full" alt="">
                        <div class="py-8 px-6">
                            <h3 class="mb-3 font-semibold text-xl text-dark truncate">Judul 1</h3>
                            <p class="font-medium text-basic text-base mb-4 truncate">Lorem, ipsum dolor sit amet
                                consectetur
                                adipisicing elit. Neque aut laudantium et ex laboriosam, vero cupiditate. Placeat nobis
                                aspernatur aperiam
                                error temporibus aut quidem.</p>
                            <a href="#"
                                class="font-medium text-sm text-white bg-orange-600 py-3 px-6 rounded-xl hover:opacity-80">Baca
                                Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3" data-aos="fade-right">
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg mb-10">
                        <img src="https://source.unsplash.com/360x200" class="w-full" alt="">
                        <div class="py-8 px-6">
                            <h3 class="mb-3 font-semibold text-xl text-dark truncate">Judul 1</h3>
                            <p class="font-medium text-basic text-base mb-4 truncate">Lorem, ipsum dolor sit amet
                                consectetur
                                adipisicing elit. Neque aut laudantium et ex laboriosam, vero cupiditate. Placeat nobis
                                aspernatur aperiam
                                error temporibus aut quidem.</p>
                            <a href="#"
                                class="font-medium text-sm text-white bg-orange-600 py-3 px-6 rounded-xl hover:opacity-80">Baca
                                Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3" data-aos="fade-right">
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg mb-10">
                        <img src="https://source.unsplash.com/360x200" class="w-full" alt="">
                        <div class="py-8 px-6">
                            <h3 class="mb-3 font-semibold text-xl text-dark truncate">Judul 1</h3>
                            <p class="font-medium text-basic text-base mb-4 truncate">Lorem, ipsum dolor sit amet
                                consectetur
                                adipisicing elit. Neque aut laudantium et ex laboriosam, vero cupiditate. Placeat nobis
                                aspernatur aperiam
                                error temporibus aut quidem.</p>
                            <a href="#"
                                class="font-medium text-sm text-white bg-orange-600 py-3 px-6 rounded-xl hover:opacity-80">Baca
                                Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

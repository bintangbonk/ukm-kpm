@extends('layouts.main')

@section('content')
    <!-- Hero Section -->
    <section id="home" class="pt-32 pb-24 lg:pt-16">
        <div class="container">
            <div class="flex flex-wrap">
                <div class=" relative w-full self-center px-4 lg:w-1/2 " data-aos="fade-right">
                    <h1 class="text-xl font-extrabold text-batik dark:text-almet">
                        Unit Kreativitas Mahasiswa<span class="block font-bold text-4xl text-black ">Korps
                            Protokoler
                            Mahasiswa</span>
                    </h1>
                    <h2 class="font-bold text-slate-600 text-lg mb-5">
                        Universitas Islam Malang
                    </h2>
                    <p class="font-semibold text-slate-950 mb-10 leading-relaxed">
                        Unit Kreatifitas Mahasiswa Korps Protokoler Mahasiswa adalah salah satu UKM yang ada di Universitas
                        Islam Malang dan biasa dikenal dengan DUTA KAMPUS UNISMA. UKM KPM ini bergerak di tiga bidang yakni
                        Kehumasan, Keprotokoleran dan kedutaan
                    </p>
                    {{-- Batik --}}
                    <span class="dark:hidden absolute top-0 -z-10 right-0 scale-50 -translate-y-32 hover:skew-x-6">
                        <svg width="234" height="230" viewBox="0 0 234 230" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0_2_34" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="29"
                                y="30" width="176" height="171">
                                <ellipse cx="117.282" cy="115.024" rx="88.4882" ry="84.1248"
                                    transform="rotate(26.2721 117.282 115.024)" fill="#EA580C" fill-opacity="0.7" />
                            </mask>
                            <g mask="url(#mask0_2_34)">
                                <rect x="79.7821" y="-34.3271" width="5.91894" height="234.649"
                                    transform="rotate(26.2721 79.7821 -34.3271)" fill="#EA580C" fill-opacity="0.7" />
                                <rect x="87.2127" y="-30.6592" width="5.91894" height="234.649"
                                    transform="rotate(26.2721 87.2127 -30.6592)" fill="#EA580C" fill-opacity="0.7" />
                                <rect x="94.6432" y="-26.9913" width="5.91894" height="234.649"
                                    transform="rotate(26.2721 94.6432 -26.9913)" fill="#EA580C" fill-opacity="0.7" />
                                <rect x="102.074" y="-23.3234" width="5.91894" height="234.649"
                                    transform="rotate(26.2721 102.074 -23.3234)" fill="#EA580C" fill-opacity="0.7" />
                                <rect x="109.504" y="-19.6555" width="5.91894" height="234.649"
                                    transform="rotate(26.2721 109.504 -19.6555)" fill="#EA580C" fill-opacity="0.7" />
                                <rect x="116.935" y="-15.9877" width="5.91894" height="234.649"
                                    transform="rotate(26.2721 116.935 -15.9877)" fill="#EA580C" fill-opacity="0.7" />
                                <rect x="124.365" y="-12.3197" width="5.91894" height="234.649"
                                    transform="rotate(26.2721 124.365 -12.3197)" fill="#EA580C" fill-opacity="0.7" />
                                <rect x="131.796" y="-8.65186" width="5.91894" height="234.649"
                                    transform="rotate(26.2721 131.796 -8.65186)" fill="#EA580C" fill-opacity="0.7" />
                                <rect x="139.226" y="-4.98389" width="5.91894" height="234.649"
                                    transform="rotate(26.2721 139.226 -4.98389)" fill="#EA580C" fill-opacity="0.7" />
                                <rect x="146.657" y="-1.31604" width="5.91894" height="234.649"
                                    transform="rotate(26.2721 146.657 -1.31604)" fill="#EA580C" fill-opacity="0.7" />
                                <rect x="154.088" y="2.35181" width="5.91894" height="234.649"
                                    transform="rotate(26.2721 154.088 2.35181)" fill="#EA580C" fill-opacity="0.7" />
                                <rect x="161.518" y="6.01978" width="5.91894" height="234.649"
                                    transform="rotate(26.2721 161.518 6.01978)" fill="#EA580C" fill-opacity="0.7" />
                                <rect x="168.949" y="9.68762" width="5.91894" height="234.649"
                                    transform="rotate(26.2721 168.949 9.68762)" fill="#EA580C" fill-opacity="0.7" />
                                <rect x="176.379" y="13.3556" width="5.91894" height="234.649"
                                    transform="rotate(26.2721 176.379 13.3556)" fill="#EA580C" fill-opacity="0.7" />
                                <rect x="183.81" y="17.0234" width="5.91894" height="234.649"
                                    transform="rotate(26.2721 183.81 17.0234)" fill="#EA580C" fill-opacity="0.7" />
                                <rect x="191.24" y="20.6914" width="5.91894" height="234.649"
                                    transform="rotate(26.2721 191.24 20.6914)" fill="#EA580C" fill-opacity="0.7" />
                                <rect x="198.671" y="24.3593" width="5.91894" height="234.649"
                                    transform="rotate(26.2721 198.671 24.3593)" fill="#EA580C" fill-opacity="0.7" />
                                <rect x="206.101" y="28.0272" width="5.91894" height="234.649"
                                    transform="rotate(26.2721 206.101 28.0272)" fill="#EA580C" fill-opacity="0.7" />
                                <rect x="213.532" y="31.6951" width="5.91894" height="234.649"
                                    transform="rotate(26.2721 213.532 31.6951)" fill="#EA580C" fill-opacity="0.7" />
                                <rect x="220.962" y="35.363" width="5.91894" height="234.649"
                                    transform="rotate(26.2721 220.962 35.363)" fill="#EA580C" fill-opacity="0.7" />
                                <rect x="228.393" y="39.0309" width="5.91894" height="234.649"
                                    transform="rotate(26.2721 228.393 39.0309)" fill="#EA580C" fill-opacity="0.7" />
                                <rect x="235.824" y="42.6987" width="5.91894" height="234.649"
                                    transform="rotate(26.2721 235.824 42.6987)" fill="#EA580C" fill-opacity="0.7" />
                                <rect x="243.254" y="46.3667" width="5.91894" height="234.649"
                                    transform="rotate(26.2721 243.254 46.3667)" fill="#EA580C" fill-opacity="0.7" />
                                <rect x="250.685" y="50.0345" width="5.91894" height="234.649"
                                    transform="rotate(26.2721 250.685 50.0345)" fill="#EA580C" fill-opacity="0.7" />
                            </g>
                        </svg>
                    </span>
                    {{-- Almet --}}
                    <span class="hidden dark:block absolute top-0 -z-10 right-0 scale-50 -translate-y-32 hover:skew-x-6">
                        <svg width="234" height="230" viewBox="0 0 234 230" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0_4_9" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="29"
                                y="29" width="176" height="171">
                                <ellipse cx="117.282" cy="114.603" rx="88.4882" ry="84.1248"
                                    transform="rotate(26.2721 117.282 114.603)" fill="#1E40AF" fill-opacity="0.7" />
                            </mask>
                            <g mask="url(#mask0_4_9)">
                                <rect x="79.7822" y="-34.7482" width="5.91894" height="234.649"
                                    transform="rotate(26.2721 79.7822 -34.7482)" fill="#1E40AF" fill-opacity="0.7" />
                                <rect x="87.2127" y="-31.0802" width="5.91894" height="234.649"
                                    transform="rotate(26.2721 87.2127 -31.0802)" fill="#1E40AF" fill-opacity="0.7" />
                                <rect x="94.6432" y="-27.4124" width="5.91894" height="234.649"
                                    transform="rotate(26.2721 94.6432 -27.4124)" fill="#1E40AF" fill-opacity="0.7" />
                                <rect x="102.074" y="-23.7444" width="5.91894" height="234.649"
                                    transform="rotate(26.2721 102.074 -23.7444)" fill="#1E40AF" fill-opacity="0.7" />
                                <rect x="109.504" y="-20.0765" width="5.91894" height="234.649"
                                    transform="rotate(26.2721 109.504 -20.0765)" fill="#1E40AF" fill-opacity="0.7" />
                                <rect x="116.935" y="-16.4087" width="5.91894" height="234.649"
                                    transform="rotate(26.2721 116.935 -16.4087)" fill="#1E40AF" fill-opacity="0.7" />
                                <rect x="124.365" y="-12.7407" width="5.91894" height="234.649"
                                    transform="rotate(26.2721 124.365 -12.7407)" fill="#1E40AF" fill-opacity="0.7" />
                                <rect x="131.796" y="-9.07288" width="5.91894" height="234.649"
                                    transform="rotate(26.2721 131.796 -9.07288)" fill="#1E40AF" fill-opacity="0.7" />
                                <rect x="139.227" y="-5.40491" width="5.91894" height="234.649"
                                    transform="rotate(26.2721 139.227 -5.40491)" fill="#1E40AF" fill-opacity="0.7" />
                                <rect x="146.657" y="-1.73706" width="5.91894" height="234.649"
                                    transform="rotate(26.2721 146.657 -1.73706)" fill="#1E40AF" fill-opacity="0.7" />
                                <rect x="154.088" y="1.93079" width="5.91894" height="234.649"
                                    transform="rotate(26.2721 154.088 1.93079)" fill="#1E40AF" fill-opacity="0.7" />
                                <rect x="161.518" y="5.59875" width="5.91894" height="234.649"
                                    transform="rotate(26.2721 161.518 5.59875)" fill="#1E40AF" fill-opacity="0.7" />
                                <rect x="168.949" y="9.2666" width="5.91894" height="234.649"
                                    transform="rotate(26.2721 168.949 9.2666)" fill="#1E40AF" fill-opacity="0.7" />
                                <rect x="176.379" y="12.9346" width="5.91894" height="234.649"
                                    transform="rotate(26.2721 176.379 12.9346)" fill="#1E40AF" fill-opacity="0.7" />
                                <rect x="183.81" y="16.6024" width="5.91894" height="234.649"
                                    transform="rotate(26.2721 183.81 16.6024)" fill="#1E40AF" fill-opacity="0.7" />
                                <rect x="191.24" y="20.2704" width="5.91894" height="234.649"
                                    transform="rotate(26.2721 191.24 20.2704)" fill="#1E40AF" fill-opacity="0.7" />
                                <rect x="198.671" y="23.9382" width="5.91894" height="234.649"
                                    transform="rotate(26.2721 198.671 23.9382)" fill="#1E40AF" fill-opacity="0.7" />
                                <rect x="206.101" y="27.6062" width="5.91894" height="234.649"
                                    transform="rotate(26.2721 206.101 27.6062)" fill="#1E40AF" fill-opacity="0.7" />
                                <rect x="213.532" y="31.274" width="5.91894" height="234.649"
                                    transform="rotate(26.2721 213.532 31.274)" fill="#1E40AF" fill-opacity="0.7" />
                                <rect x="220.962" y="34.942" width="5.91894" height="234.649"
                                    transform="rotate(26.2721 220.962 34.942)" fill="#1E40AF" fill-opacity="0.7" />
                                <rect x="228.393" y="38.6099" width="5.91894" height="234.649"
                                    transform="rotate(26.2721 228.393 38.6099)" fill="#1E40AF" fill-opacity="0.7" />
                                <rect x="235.824" y="42.2777" width="5.91894" height="234.649"
                                    transform="rotate(26.2721 235.824 42.2777)" fill="#1E40AF" fill-opacity="0.7" />
                                <rect x="243.254" y="45.9457" width="5.91894" height="234.649"
                                    transform="rotate(26.2721 243.254 45.9457)" fill="#1E40AF" fill-opacity="0.7" />
                                <rect x="250.685" y="49.6135" width="5.91894" height="234.649"
                                    transform="rotate(26.2721 250.685 49.6135)" fill="#1E40AF" fill-opacity="0.7" />
                            </g>
                        </svg>
                    </span>
                </div>
                <div class="w-full self-end px-4 lg:w-1/2" data-aos="fade-up-left">
                    <div class="relative mt-10">
                        <img src="asset/img/grub-batik-nonbg.png" alt="UKM KPM"
                            class="max-w-full mx-auto hover:translate-x-2 transition ease-out dark:hidden">
                        <img src="asset/img/grub-almet-nonbg.png" alt="UKM KPM"
                            class="hidden max-w-full mx-auto hover:translate-x-2 transition ease-out dark:block">
                        {{-- Batik --}}
                        <span class="absolute top-36 translate-x-40 -z-10 -translate-y-32 scale-150 dark:hidden ">
                            <svg class="" width="90" height="90" viewBox="0 0 90 90" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="45" cy="45" r="45" fill="#EA580C"
                                    fill-opacity="0.7" />
                            </svg>
                        </span>
                        <span class="absolute top-40 right-0 scale-75 -z-10 dark:hidden ">
                            <svg class="" width="218" height="241" viewBox="0 0 218 241" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.68719 104.72L215.708 3.99558L197.427 237.107L4.68719 104.72Z" stroke="#EA580C"
                                    stroke-opacity="0.7" stroke-width="4" />
                            </svg>
                        </span>
                        {{-- Almet --}}
                        <span class="hidden absolute top-36 translate-x-40 -z-10 -translate-y-32 scale-150 dark:block">
                            <svg width="90" height="91" viewBox="0 0 90 91" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="45" cy="45.579" r="45" fill="#1E40AF"
                                    fill-opacity="0.7" />
                            </svg>
                        </span>
                        <span class="hidden absolute top-40 right-0 scale-75 -z-10 dark:block">
                            <svg width="218" height="241" viewBox="0 0 218 241" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.68716 104.299L215.708 3.57456L197.427 236.686L4.68716 104.299Z"
                                    stroke="#1E40AF" stroke-opacity="0.7" stroke-width="4" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="pt-36">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-10 lg:w-2/3" data-aos="fade-right">
                    <div id="default-carousel" class="relative w-full" data-carousel="slide">
                        <!-- Carousel wrapper -->
                        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                            <!-- Item 1 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="asset/img/divisiA.JPG"
                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                            <!-- Item 2 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="asset/img/divisiB.JPG"
                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                            <!-- Item 3 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="asset/img/divisiC.JPG"
                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                        </div>
                        <!-- Slider indicators -->
                        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                                data-carousel-slide-to="0"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                aria-label="Slide 2" data-carousel-slide-to="1"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                aria-label="Slide 3" data-carousel-slide-to="2"></button>
                        </div>
                        <!-- Slider controls -->
                        <button type="button"
                            class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                            data-carousel-prev>
                            <span
                                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M5 1 1 5l4 4" />
                                </svg>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>
                        <button type="button"
                            class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                            data-carousel-next>
                            <span
                                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <span class="sr-only">Next</span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/3 " data-aos="fade-right">
                    <h4 class="font-bold uppercase text-batik dark:text-almet text-lg mb-3">
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
                    <!-- Social Media -->
                    <div class="flex">
                        <div id="media-social" class="pt-2 text-4xl">
                            <!-- Instagram -->
                            <a href="https://instagram.com/paguyubandutaunisma?igshid=ZDc4ODBmNjlmNQ==" target="_blank"
                                class="text-gray-600 hover:text-batik dark:hover:text-almet transition duration-300 ease-in-out"><i
                                    class="bx bxl-instagram"></i></a>
                            <!-- Youtube -->
                            <a href="https://youtube.com/@ukmkpmunisma2658" target="_blank"
                                class="text-gray-600 hover:text-batik dark:hover:text-almet transition duration-300 ease-in-out"><i
                                    class="bx bxl-youtube"></i></a>
                            <!-- Tiktok -->
                            <a href="https://www.tiktok.com/@dutakampus.unisma?_t=8dzHnKTsabS&_r=1" target="_blank"
                                class="text-gray-600 hover:text-batik dark:hover:text-almet transition duration-300 ease-in-out"><i
                                    class="bx bxl-tiktok"></i></a>
                            <!-- Whatsapp -->
                            <a href="https://api.whatsapp.com/send/?phone=6289653301059&text&type=phone_number&app_absent=0"
                                target="_blank"
                                class="text-gray-600 hover:text-batik dark:hover:text-almet transition duration-300 ease-in-out"><i
                                    class="bx bxl-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Visi Misi -->
            <div class="w-full px-4 pt-8">
                <div class="flex flex-wrap">
                    <div class="w-full px-4 mt-5 pt-4 self-center lg:w-1/2">
                        <img src="asset/img/dutaunisma_nonbg.png" alt="UKM KPM" class="max-w-full mx-auto">
                    </div>
                    <div class="w-full px-4 mt-5 pt-4 self-center lg:w-1/2">
                        <span class="relative">
                            <h2 class="font-bold text-dark text-3xl mb-4">Tujuan Organisasi</h2>
                            <p class="font-semibold text-md text-slate-800">
                                Menjalankan amanah sebagai mahasiswa pilihan dalam mewujudkan insan yang cerdas, inovatif,
                                agamis yang didasari oleh keimanan dan ketakwaan serta memiliki integritas dalam
                                memperjuangkan
                                nilai-nilai ahlusunnah waljama’ah . Menjadi wadah mahasiswa pilihan dalam mengembangkan soft
                                skill dan hard skill dalam bidang keprotokolan, kehumasan dan kedutaan. Mendorong mahasiswa
                                pilihan untuk menjadi generasi muda yang unggul dan berdaya saing tinggi serta meningkatkan
                                intelektualitas dan moralitas mahasiswa pilihan sebagai insan terpelajar
                            </p>
                        </span>

                    </div>
                </div>
                {{-- <div class="max-w-xl mx-auto text-center mb-10" data-aos="fade-right">
                    <h2 class="font-bold text-dark text-3xl mb-4">Tujuan Organisasi</h2>
                    <p class="font-semibold text-md text-slate-800">
                        Menjalankan amanah sebagai mahasiswa pilihan dalam mewujudkan insan yang cerdas, inovatif, agamis yang didasari oleh keimanan dan ketakwaan serta memiliki integritas dalam memperjuangkan nilai-nilai ahlusunnah waljama’ah . Menjadi wadah mahasiswa pilihan dalam mengembangkan soft skill dan hard skill dalam bidang keprotokolan, kehumasan dan kedutaan. Mendorong mahasiswa pilihan untuk menjadi generasi muda yang unggul dan berdaya saing tinggi serta meningkatkan intelektualitas dan moralitas mahasiswa pilihan sebagai insan terpelajar
                    </p>
                </div> --}}
                <div class="flex flex-wrap">
                    <div class="w-full px-4 lg:w-1/2 mt-5 pt-4" data-aos="fade-right">
                        <p class="block max-w-sm p-6  rounded-lg">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900  text-center">Visi
                        </h5>
                        <p class="font-semibold text-gray-700">UKM Korps Protokoler Mahasiswa (KPM)
                            Universitas Islam Malang sebagai Unit Kreativitas Mahasiswa sekaligus ikon yang berperan
                            membentuk mahasiswa pilihan dalam Bidang Keprotokolan, Kehumasan, dan Kedutaan yang profesional,
                            cerdas, dan berdaya saing serta berkarakter Ahlussunnah wal jama’ah</p>
                        </p>
                    </div>
                    <div class="w-full px-4 lg:w-1/2 mt-5 pt-4" data-aos="fade-right">
                        <p class="block max-w-sm p-6 rounded-lg">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900  text-center">Misi
                        </h5>
                        <p class="font-normal text-gray-700">
                        <ul>
                            <li class="mt-2 font-semibold">1. Menjalankan fungsi dalam rangka mengharumkan nama baik
                                universitas melalui peningkatan
                                hubungan baik di tingkat Regional, Nasional, maupun Internasional</li>
                            <li class="mt-2 font-semibold">2. Membentuk mahasiswa pilihan yang andal dan profesional dalam
                                menjalankan bidang
                                keprotokolan, kehumasan, dan kedutaan </li>
                            <li class="mt-2 font-semibold">3. Menjalin hubungan baik dengan mitra internal maupun eksternal
                                melalui peningkatan kerja
                                sama di berbagai bidang</li>
                            <li class="mt-2 font-semibold">4. Meningkatkan kualitas sumber daya manusia melalui serangkaian
                                pelatihan dan program kerja</li>
                        </ul>
                        </p>
                        </p>
                    </div>
                </div>
            </div>
    </section>
    <!-- Program -->
    <!-- Pendaftaran -->
    <section id="event" class="pt-12 pb-24">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center lg:w-1/2">
                    <h1 class="text-xl font-bold text-batik dark:text-almet">
                        EVENT
                    </h1>
                    <h3 class="text-3xl font-bold">
                        Pemilihan Duta Kampus <br>
                        Universitas Islam Malang 2023
                    </h3>
                    <p class="font-semibold mt-5 leading-relaxed">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi tempora qui pariatur? Cumque,
                        expedita officia.
                    </p>
                    <a href="#">
                        <button
                            class="mt-5 px-6 py-4 bg-batik dark:bg-almet text-white font-bold rounded-xl hover:opacity-70">Baca
                            Lebih Lanjut</button>
                    </a>
                </div>
                <div class="w-full lg:w-1/2">
                    <img src="asset/img/dutaunisma_nonbg.png" alt="UKM KPM" class="max-w-full mx-auto">
                </div>
            </div>
        </div>
    </section>
    <!-- Galeri -->
    <section id="galeri" class="pt-36">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16" data-aos="fade-right">
                    <h4 class="font-semibold text-lg text-batik dark:text-almet mb-2">Galeri</h4>
                    <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl">Galeri Foto</h2>
                    <p class="font-medium text-md text-basic md:text-lg">Lorem, ipsum dolor sit amet consectetur
                        adipisicing
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
                    <h4 class="font-semibold text-lg text-batik dark:text-almet mb-2">Blog</h4>
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
                                class="font-medium text-sm text-white bg-batik dark:bg-almet py-3 px-6 rounded-xl hover:opacity-80">Baca
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
                                class="font-medium text-sm text-white bg-orange-600 dark:bg-blue-700 py-3 px-6 rounded-xl hover:opacity-80">Baca
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
                                class="font-medium text-sm text-white bg-batik dark:bg-almet py-3 px-6 rounded-xl hover:opacity-80">Baca
                                Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

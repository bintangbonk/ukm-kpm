@extends('layouts.main')

@section('content')
    <!-- Hero -->
    <section class="pt-16">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4 lg:w-1/2">
                    <div class="relative mt-10">
                        <img src="asset/img/grub-batik-nonbg.png" alt="" class="mx-auto max-w-full dark:hidden" />
                        <img src="asset/img/grub-almet-nonbg.png" alt=""
                            class="hidden dark:block mx-auto max-w-full" />
                    </div>
                </div>
                <div class="w-full self-center px-4 lg:w-1/2 relative">
                    <h1 class="text-4xl font-bold text-batik dark:text-almet mb-5">
                        Tentang Kami
                    </h1>
                    <p class="font-medium text-basic mb-5 leading-relaxed">
                        Unit Kreatifitas Mahasiswa Korps Protokoler Mahasiswa adalah salah satu UKM yang ada di Universitas
                        Islam Malang dan biasa dikenal dengan DUTA KAMPUS UNISMA. Di dalam UKM KPM ini menaungi 3 bidang
                        yakni keprotokolan, kehumasan dan kedutaan. Tidak hanya tampil baik diatas panggung tetapi juga bisa
                        menjadi seorang protokol yang memiliki cara berkomunikasi yang baik.<br>
                    </p>
                    <!-- Media Social -->
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
                    <span class="dark:hidden absolute scale-50 bottom-0 right-0 -z-10 -translate-y-48 opacity-70">
                        <svg width="200" height="200" viewBox="0 0 661 661" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M338.198 580.114C478.275 580.114 591.829 466.559 591.829 326.482C591.829 186.406 478.275 72.8511 338.198 72.8511C198.121 72.8511 84.5664 186.406 84.5664 326.482C84.5664 466.559 198.121 580.114 338.198 580.114Z"
                                fill="#EA580C" />
                            <path
                                d="M330.562 644.123C157.412 644.123 17 503.763 17 330.562C17 157.36 157.412 17 330.562 17C503.763 17 644.123 157.36 644.123 330.562"
                                stroke="#EA580C" stroke-width="33.3332" />
                        </svg>
                    </span>
                    <span class="hidden dark:block absolute scale-50 bottom-0 right-0 -z-10 -translate-y-48 opacity-70">
                        <svg width="200" height="200" viewBox="0 0 661 661" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M338.198 580.114C478.275 580.114 591.829 466.559 591.829 326.482C591.829 186.406 478.275 72.8511 338.198 72.8511C198.121 72.8511 84.5664 186.406 84.5664 326.482C84.5664 466.559 198.121 580.114 338.198 580.114Z"
                                fill="#333F55" />
                            <path
                                d="M330.562 644.123C157.412 644.123 17 503.763 17 330.562C17 157.36 157.412 17 330.562 17C503.763 17 644.123 157.36 644.123 330.562"
                                stroke="#333F55" stroke-width="33.3332" />
                        </svg>
                    </span>

                    <span class="absolute -z-10">
                        <img src="asset/img/element2.png" alt="" width="100" class="dark:hidden opacity-70">
                        <img src="asset/img/element2-dark.png" alt="" width="100"
                            class="dark:block hidden opacity-70">
                    </span>

                    <span class="absolute -z-10 bottom-0 right-0 ">
                        <svg width="400" height="100" viewBox="0 0 1925 142" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.710938 46.0706C110.583 10.1438 360.711 -2.19786 482.872 1.67198C696.393 8.41806 881.466 57.2094 1088.97 83.357C1353.74 116.774 1586.93 88.5865 1849.55 53.0258C1878.68 49.1037 1894.47 46.9073 1924.23 46.0706C1895.42 57.0525 1905.56 54.124 1876.07 61.7068C1675.93 113.27 1422.04 146.163 1214.17 140.829C1077.62 137.273 966.968 119.65 833.616 92.6132C596.614 44.554 437.951 26.3553 198.596 36.9712C138.352 39.6383 57.7126 48.9468 0.710938 46.0706Z" fill="#333F55"/>
                            </svg>   
                    </span>

                    {{-- Batik --}}
                </div>
            </div>
        </div>
    </section>

    <!-- About Tabs -->
    <section class="pt-32 pb-16">
        <div class="container ">
            <div class="mb-4 border-b px-8">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab"
                    data-tabs-toggle="#myTabContent" role="tablist">
                    <li class="mr-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg text-lg" id="profile-tab"
                            data-tabs-target="#profile" type="button" role="tab" aria-controls="profile"
                            aria-selected="false">Profil</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 border-transparent rounded-t-lg text-lg hover:text-gray-600 hover:border-gray-300"
                            id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab"
                            aria-controls="dashboard" aria-selected="false">Apa itu UKM ?</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 border-transparent rounded-t-lg text-lg hover:text-gray-600 hover:border-gray-300"
                            id="settings-tab" data-tabs-target="#settings" type="button" role="tab"
                            aria-controls="settings" aria-selected="false">Apa itu Korps Protokoler</button>
                    </li>
                </ul>
            </div>
            <div id="myTabContent">
                <div class="hidden p-4 rounded-lg bg-gray-50" id="profile" role="tabpanel"
                    aria-labelledby="profile-tab">
                    <p class="text-md text-gray-900  mt-2">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Qui totam sequi harum minus. Rem, veritatis eligendi non, officia officiis molestias esse iste
                        explicabo reiciendis sapiente vel dolor qui harum id itaque sunt commodi quidem amet, odit assumenda
                        quam praesentium. Alias nostrum nobis tenetur nisi? Nemo nisi hic deserunt corrupti asperiores.</p>
                    <p class="text-md text-gray-900  mt-2">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Qui totam sequi harum minus. Rem, veritatis eligendi non, officia officiis molestias esse iste
                        explicabo reiciendis sapiente vel dolor qui harum id itaque sunt commodi quidem amet, odit assumenda
                        quam praesentium. Alias nostrum nobis tenetur nisi? Nemo nisi hic deserunt corrupti asperiores.</p>
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50" id="dashboard" role="tabpanel"
                    aria-labelledby="dashboard-tab">
                    <p class="text-md text-gray-900 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Temporibus quaerat, hic voluptatem ea natus laboriosam vero fugiat aliquam molestias fugit
                        veritatis nemo in tempora expedita eveniet! Corporis reprehenderit eveniet eum. Quaerat explicabo,
                        eaque debitis modi dolorem officiis hic ex, quasi autem facere a, maxime ducimus. Labore molestias
                        corporis facere. Nobis.</p>
                    <p class="text-md text-gray-900 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Temporibus quaerat, hic voluptatem ea natus laboriosam vero fugiat aliquam molestias fugit
                        veritatis nemo in tempora expedita eveniet! Corporis reprehenderit eveniet eum. Quaerat explicabo,
                        eaque debitis modi dolorem officiis hic ex, quasi autem facere a, maxime ducimus. Labore molestias
                        corporis facere. Nobis.</p>
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 " id="settings" role="tabpanel"
                    aria-labelledby="settings-tab">
                    <p class="text-md text-gray-900 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Eligendi fuga quaerat odio quibusdam doloremque omnis esse cupiditate amet vel at odit
                        dolores, temporibus quis libero. Doloribus saepe, sit molestias commodi quo, ipsa, facilis amet
                        perspiciatis delectus expedita reprehenderit quod explicabo similique autem reiciendis ipsum
                        consectetur voluptates dolores consequatur eos inventore..</p>
                    <p class="text-md text-gray-900 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Eligendi fuga quaerat odio quibusdam doloremque omnis esse cupiditate amet vel at odit
                        dolores, temporibus quis libero. Doloribus saepe, sit molestias commodi quo, ipsa, facilis amet
                        perspiciatis delectus expedita reprehenderit quod explicabo similique autem reiciendis ipsum
                        consectetur voluptates dolores consequatur eos inventore..</p>
                </div>
            </div>
        </div>
    </section>

    <span class="absolute -z-50 top-72 opacity-60 scale-75 -translate-x-20">
        <svg width="353" height="651" viewBox="0 0 353 651" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M0 1.09821C8.94247 0.366089 17.9372 0 27.0366 0C116.827 0 198.146 36.3974 256.978 95.2294C315.863 154.114 352.26 235.433 352.26 325.223C352.26 415.067 315.863 496.385 256.978 555.218C198.146 614.102 116.827 650.499 27.0366 650.499C17.9372 650.499 8.94247 650.133 0 649.401L0 557.257C8.89017 558.251 17.8849 558.774 27.0366 558.774C91.5165 558.774 149.93 532.678 192.185 490.372C234.439 448.117 260.587 389.756 260.587 325.223C260.587 260.744 234.439 202.33 192.185 160.075C149.93 117.821 91.5165 91.6734 27.0366 91.6734C17.8849 91.6734 8.89017 92.1964 0 93.2422L0 1.09821Z"
                fill="#333F55" />
            <path
                d="M0.261719 108.46C6.27566 107.937 12.2896 107.676 18.4081 107.676C78.7567 107.676 133.353 132.15 172.94 171.685C212.475 211.22 236.897 265.869 236.897 326.217C236.897 386.513 212.475 441.162 172.94 480.697C133.353 520.232 78.7567 544.706 18.4081 544.706C12.2896 544.706 6.27566 544.445 0.261719 543.922L0.261719 482.057C6.22336 482.737 12.2896 483.103 18.4081 483.103C61.7608 483.103 100.982 465.531 129.378 437.135C157.775 408.739 175.294 369.518 175.294 326.217C175.294 282.865 157.775 243.643 129.378 215.247C100.982 186.851 61.7608 169.279 18.4081 169.279C12.2896 169.279 6.22336 169.646 0.261719 170.325L0.261719 108.46Z"
                fill="#333F55" />
            <path
                d="M0.105469 200.133C3.40006 199.872 6.74695 199.715 10.1461 199.715C43.615 199.715 73.8939 213.259 95.8579 235.223C117.77 257.135 131.366 287.414 131.366 320.883C131.366 354.352 117.77 384.683 95.8579 406.594C73.8939 428.558 43.615 442.103 10.1461 442.103C6.74695 442.103 3.40006 441.946 0.105469 441.684L0.105469 407.379C3.40006 407.745 6.74695 407.954 10.1461 407.954C34.2019 407.954 55.9567 398.175 71.6975 382.434C87.4384 366.693 97.1653 344.938 97.1653 320.883C97.1653 296.879 87.4384 275.124 71.6975 259.384C55.9567 243.59 34.2019 233.864 10.1461 233.864C6.74695 233.864 3.40006 234.073 0.105469 234.439L0.105469 200.133Z"
                fill="#333F55" />
        </svg>

    </span>

    <!-- Divisi Tabs -->
    <section class="pt-32 pb-16 bg-white rounded-xl">
        <div class="container ">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-10 relative">
                    <h2 class="font-bold text-dark text-3xl mb-4">Divisi Organisasi</h2>
                    <span class="absolute top-0 -translate-y-32 -z-10 scale-50 dark:hidden">
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
                    <span class="absolute top-0 -translate-y-32 -z-10 scale-50 hidden dark:block ">
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
            </div>
            <div class="mb-4 border-b border-gray-200  px-8">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab"
                    data-tabs-toggle="#myTabContent" role="tablist">
                    <li class="mr-2" role="presentation">
                        <button class=" p-4 border-b-2 rounded-t-lg text-lg font-bold flex" id="divisiA-tab"
                            data-tabs-target="#divisiA" type="button" role="tab" aria-controls="divisiA"
                            aria-selected="false">
                            <h3 class="ml-2 items-center">BPHU</h3>
                        </button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button
                            class=" p-4 border-b-2 border-transparent rounded-t-lg text-lg font-bold flex hover:text-gray-600 hover:border-gray-300 "
                            id="divisiB-tab" data-tabs-target="#divisiB" type="button" role="tab"
                            aria-controls="divisiB" aria-selected="false">
                            <h3 class="ml-2 items-center">Media Relation</h3>
                        </button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button
                            class=" p-4 border-b-2 border-transparent rounded-t-lg text-lg font-bold flex hover:text-gray-600 hover:border-gray-300 "
                            id="divisiC-tab" data-tabs-target="#divisiC" type="button" role="tab"
                            aria-controls="divisiC" aria-selected="false">Marketing</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button
                            class=" p-4 border-b-2 border-transparent rounded-t-lg text-lg font-bold flex hover:text-gray-600 hover:border-gray-300 "
                            id="divisiD-tab" data-tabs-target="#divisiD" type="button" role="tab"
                            aria-controls="divisiD" aria-selected="false">Keaswajaan</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button
                            class=" p-4 border-b-2 border-transparent rounded-t-lg text-lg font-bold flex hover:text-gray-600 hover:border-gray-300 "
                            id="divisiE-tab" data-tabs-target="#divisiE" type="button" role="tab"
                            aria-controls="divisiE" aria-selected="false">Public Relation</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button
                            class=" p-4 border-b-2 border-transparent rounded-t-lg text-lg font-bold flex hover:text-gray-600 hover:border-gray-300 "
                            id="divisiF-tab" data-tabs-target="#divisiF" type="button" role="tab"
                            aria-controls="divisiF" aria-selected="false">PSDM</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button
                            class=" p-4 border-b-2 border-transparent rounded-t-lg text-lg font-bold flex hover:text-gray-600 hover:border-gray-300 "
                            id="divisiG-tab" data-tabs-target="#divisiG" type="button" role="tab"
                            aria-controls="divisiG" aria-selected="false">Entertainment</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button
                            class=" p-4 border-b-2 border-transparent rounded-t-lg text-lg font-bold flex hover:text-gray-600 hover:border-gray-300 "
                            id="divisiH-tab" data-tabs-target="#divisiH" type="button" role="tab"
                            aria-controls="divisiH" aria-selected="false">Keprotokolan</button>
                    </li>
                </ul>
            </div>
            <div id="myTabContent">
                {{-- Divisi A --}}
                <div class="hidden p-4 rounded-lg " id="divisiA" role="tabpanel" aria-labelledby="divisiA-tab">
                    <div class="flex flex-wrap">
                        <div class="w-full lg:w-1/2">
                            <div class="relative overflow-hidden rounded-lg">
                                <img src="asset/img/divisiA.jpg" alt=""
                                    class="mx-auto max-w-full px-5 rounded-2xl" />
                                <div
                                    class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out">
                                </div>
                            </div>
                        </div>
                        <div class="w-full lg:w-1/2">
                            <div class="">
                                <h3 class="text-2xl font-bold hover:text-batik dark:hover:text-almet">Divisi BPHU</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti esse, ipsum, magnam
                                    excepturi sapiente eaque doloribus quidem, nostrum suscipit perferendis quos dignissimos
                                    sit
                                    velit autem.</p>
                                <hr class="my-2">
                                <h3 class="text-xl font-bold">Program Kerja</h3>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis quisquam in suscipit
                                    similique iure praesentium, accusantium nesciunt laborum sunt magni dicta labore maiores
                                    necessitatibus. Maxime quia suscipit ratione quam consequuntur.</p>
                                <hr class="my-2">
                                <ul>
                                    <h3 class="text-xl font-bold">Anggota</h3>
                                    <li class="font-semibold">Ketua Divisi : Ilyas Firman Syahputra</li>
                                    <li>Anggota :</li>
                                    <li>1. Talitha Raniah Azmi</li>
                                    <li>2. Lisma Firda Farhani</li>
                                    <li>3. Gita Maulani Fadhilah</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden p-4 rounded-lg " id="divisiB" role="tabpanel" aria-labelledby="divisiB-tab">
                    <div class="flex flex-wrap">
                        <div class="w-full lg:w-1/2">
                            <div class="relative overflow-hidden rounded-lg">
                                <img src="asset/img/divisiB.jpg" alt=""
                                    class="mx-auto max-w-full px-5 rounded-2xl" />
                                <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out"
                                    style="background-color: rgba(251, 251, 251, 0.2)"></div>
                            </div>
                        </div>
                        <div class="w-full lg:w-1/2">
                            <h3 class="text-2xl font-bold hover:text-batik dark:hover:text-almet">Divisi Media Relation
                            </h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti esse, ipsum, magnam
                                excepturi sapiente eaque doloribus quidem, nostrum suscipit perferendis quos dignissimos sit
                                velit autem.</p>
                            <hr class="my-2">
                            <h3 class="text-xl font-bold">Program Kerja</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis quisquam in suscipit
                                similique iure praesentium, accusantium nesciunt laborum sunt magni dicta labore maiores
                                necessitatibus. Maxime quia suscipit ratione quam consequuntur.</p>
                            <hr class="my-2">
                            <ul>
                                <h3 class="text-xl font-bold">Anggota</h3>
                                <li class="font-semibold">Koordinator Divisi : Maulana Wanikma N</li>
                                <li>Anggota :</li>
                                <li>1. Achmad Adam Abdullah</li>
                                <li>2. Mohammad Dava Nugroho</li>
                                <li>3. Dhadeva Kevin Maharizky A</li>
                                <li>4. Muchammad Ardiansyah</li>
                                <li>5. Fingki Marita Sari </li>
                                <li>6. Gheza Setyaji Nugroho</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="hidden p-4 rounded-lg" id="divisiC" role="tabpanel" aria-labelledby="divisiC-tab">
                    <div class="flex flex-wrap">
                        <div class="w-full lg:w-1/2">
                            <div class="relative overflow-hidden rounded-lg">
                                <img src="asset/img/divisiC.jpg" alt=""
                                    class="mx-auto max-w-full px-5 rounded-2xl" />
                                <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out"
                                    style="background-color: rgba(251, 251, 251, 0.2)"></div>
                            </div>
                        </div>
                        <div class="w-full lg:w-1/2">
                            <h3 class="text-2xl font-bold hover:text-batik dark:hover:text-almet">Divisi Marketing</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti esse, ipsum, magnam
                                excepturi sapiente eaque doloribus quidem, nostrum suscipit perferendis quos dignissimos sit
                                velit autem.</p>
                            <hr class="my-2">
                            <h3 class="text-xl font-bold">Program Kerja</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis quisquam in suscipit
                                similique iure praesentium, accusantium nesciunt laborum sunt magni dicta labore maiores
                                necessitatibus. Maxime quia suscipit ratione quam consequuntur.</p>
                        </div>
                    </div>
                </div>
                <div class="hidden p-4 rounded-lg" id="divisiD" role="tabpanel" aria-labelledby="divisiC-tab">
                    <div class="flex flex-wrap">
                        <div class="w-full lg:w-1/2">
                            <div class="relative overflow-hidden rounded-lg">
                                <img src="asset/img/divisiC.jpg" alt=""
                                    class="mx-auto max-w-full px-5 rounded-2xl" />
                                <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out"
                                    style="background-color: rgba(251, 251, 251, 0.2)"></div>
                            </div>
                        </div>
                        <div class="w-full lg:w-1/2">
                            <h3 class="text-2xl font-bold hover:text-batik dark:hover:text-almet">Divisi Keaswajaan</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti esse, ipsum, magnam
                                excepturi sapiente eaque doloribus quidem, nostrum suscipit perferendis quos dignissimos sit
                                velit autem.</p>
                            <hr class="my-2">
                            <h3 class="text-xl font-bold">Program Kerja</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis quisquam in suscipit
                                similique iure praesentium, accusantium nesciunt laborum sunt magni dicta labore maiores
                                necessitatibus. Maxime quia suscipit ratione quam consequuntur.</p>
                        </div>
                    </div>
                </div>
                <div class="hidden p-4 rounded-lg" id="divisiE" role="tabpanel" aria-labelledby="divisiC-tab">
                    <div class="flex flex-wrap">
                        <div class="w-full lg:w-1/2">
                            <div class="relative overflow-hidden rounded-lg">
                                <img src="asset/img/divisiC.jpg" alt=""
                                    class="mx-auto max-w-full px-5 rounded-2xl" />
                                <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out"
                                    style="background-color: rgba(251, 251, 251, 0.2)"></div>
                            </div>
                        </div>
                        <div class="w-full lg:w-1/2">
                            <h3 class="text-2xl font-bold hover:text-batik dark:hover:text-almet">Divisi Public Relation
                            </h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti esse, ipsum, magnam
                                excepturi sapiente eaque doloribus quidem, nostrum suscipit perferendis quos dignissimos sit
                                velit autem.</p>
                            <hr class="my-4">
                            <h3 class="text-xl font-bold">Program Kerja</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis quisquam in suscipit
                                similique iure praesentium, accusantium nesciunt laborum sunt magni dicta labore maiores
                                necessitatibus. Maxime quia suscipit ratione quam consequuntur.</p>
                            <hr class="my-2">
                            <ul>
                                <h3 class="text-xl font-bold">Anggota</h3>
                                <li class="font-semibold">Koordinator Divisi : Mochammad Erwin S</li>
                                <li>Anggota :</li>
                                <li>1. Dwi Febrianti </li>
                                <li>2. Nining Noviana</li>
                                <li>3. M.Tegar Maulana Anhar </li>
                                <li>4. Billy Abiem Wahyu Adamas</li>
                                <li>5. M Jalaludin Al Afghani</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="hidden p-4 rounded-lg" id="divisiF" role="tabpanel" aria-labelledby="divisiC-tab">
                    <div class="flex flex-wrap">
                        <div class="w-full lg:w-1/2">
                            <div class="relative overflow-hidden rounded-lg">
                                <img src="asset/img/divisiC.jpg" alt=""
                                    class="mx-auto max-w-full px-5 rounded-2xl" />
                                <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out"
                                    style="background-color: rgba(251, 251, 251, 0.2)"></div>
                            </div>
                        </div>
                        <div class="w-full lg:w-1/2">
                            <h3 class="text-2xl font-bold hover:text-batik dark:hover:text-almet">Divisi PSDM</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti esse, ipsum, magnam
                                excepturi sapiente eaque doloribus quidem, nostrum suscipit perferendis quos dignissimos sit
                                velit autem.</p>
                            <hr class="my-4">
                            <h3 class="text-xl font-bold">Program Kerja</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis quisquam in suscipit
                                similique iure praesentium, accusantium nesciunt laborum sunt magni dicta labore maiores
                                necessitatibus. Maxime quia suscipit ratione quam consequuntur.</p>
                            <hr class="my-2">
                            <ul>
                                <h3 class="text-xl font-bold">Anggota</h3>
                                <li class="font-semibold">Koordinator Divisi : Muhammad Bagus Rodhifan</li>
                                <li>Anggota :</li>
                                <li>1. Tito Dhani Muharam </li>
                                <li>2. Rintan Anastasya Al Amin </li>
                                <li>3. Muchammad Novrianto P. D</li>
                                <li>4. Ferliana Firdausiah</li>
                                <li>5. Hafidz Ahmad Niskala</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="hidden p-4 rounded-lg" id="divisiG" role="tabpanel" aria-labelledby="divisiC-tab">
                    <div class="flex flex-wrap">
                        <div class="w-full lg:w-1/2">
                            <div class="relative overflow-hidden rounded-lg">
                                <img src="asset/img/divisiC.jpg" alt=""
                                    class="mx-auto max-w-full px-5 rounded-2xl" />
                                <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out"
                                    style="background-color: rgba(251, 251, 251, 0.2)"></div>
                            </div>
                        </div>
                        <div class="w-full lg:w-1/2">
                            <h3 class="text-2xl font-bold hover:text-batik dark:hover:text-almet">Divisi Entertainment</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti esse, ipsum, magnam
                                excepturi sapiente eaque doloribus quidem, nostrum suscipit perferendis quos dignissimos sit
                                velit autem.</p>
                            <hr class="my-4">
                            <h3 class="text-xl font-bold">Program Kerja</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis quisquam in suscipit
                                similique iure praesentium, accusantium nesciunt laborum sunt magni dicta labore maiores
                                necessitatibus. Maxime quia suscipit ratione quam consequuntur.</p>
                            <hr class="my-2">
                            <ul>
                                <h3 class="text-xl font-bold">Anggota</h3>
                                <li class="font-semibold">Koordinator Divisi : Mochammad Erwin S</li>
                                <li>Anggota :</li>
                                <li>1. Dwi Febrianti </li>
                                <li>2. Nining Noviana</li>
                                <li>3. M.Tegar Maulana Anhar </li>
                                <li>4. Billy Abiem Wahyu Adamas</li>
                                <li>5. M Jalaludin Al Afghani</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="hidden p-4 rounded-lg" id="divisiH" role="tabpanel" aria-labelledby="divisiC-tab">
                    <div class="flex flex-wrap">
                        <div class="w-full lg:w-1/2">
                            <div class="relative overflow-hidden rounded-lg">
                                <img src="asset/img/divisiC.jpg" alt=""
                                    class="mx-auto max-w-full px-5 rounded-2xl" />
                                <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out"
                                    style="background-color: rgba(251, 251, 251, 0.2)"></div>
                            </div>
                        </div>
                        <div class="w-full lg:w-1/2">
                            <h3 class="text-2xl font-bold hover:text-batik dark:hover:text-almet">Divisi Keprotokolan</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti esse, ipsum, magnam
                                excepturi sapiente eaque doloribus quidem, nostrum suscipit perferendis quos dignissimos sit
                                velit autem.</p>
                            <hr class="my-4">
                            <h3 class="text-xl font-bold">Program Kerja</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis quisquam in suscipit
                                similique iure praesentium, accusantium nesciunt laborum sunt magni dicta labore maiores
                                necessitatibus. Maxime quia suscipit ratione quam consequuntur.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Anggota -->
    <section class="pt-32 pb-16">
        <div class="container">
            <h3 class="text-3xl font-bold text-center">
                Struktur Kepengurusan
            </h3>
            <div class="flex mt-10 px-4">
                {{-- Anggota --}}
                {{-- Konek Database Buat Migrasi Baru --}}
                <div class="w-full  rounded-xl border lg:w-3/12 px-4 hover:scale-105">
                    {{-- Card Anggota --}}
                    <div class="w-full max-w-sm bg-white rounded-lg shadow">
                        <div class="flex justify-end px-4 pt-4">
                            <button id="dropdownButton" data-dropdown-toggle="dropdown"
                                class="inline-block text-batik dark:text-almet hover:text-white hover:bg-batik dark:hover:bg-almet focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg text-sm p-1.5"
                                type="button">
                                <span class="sr-only">Open dropdown</span>
                                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 16 3">
                                    <path
                                        d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                                </svg>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="dropdown"
                                class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 border border-batik dark:border-almet">
                                <ul class="py-2" aria-labelledby="dropdownButton">
                                    <li>
                                        <a href="https://www.instagram.com/"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-batik dark:text-almet">Instagram</a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-batik dark:text-almet">Facebook
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="flex flex-col items-center pb-10">
                            <a href="asset/img/ilyas.jpg" class="">
                                <img class="w-full h-full mb-3 rounded-full shadow-lg" src="asset/img/ilyas.jpg"
                                    alt="Bonnie image" />
                            </a>
                            <h5 class="mb-1 text-xl font-semibold text-gray-900">Ilyas Firman</h5>
                            <span class="text-sm text-gray-500"><i>KETUA UKM KPM UNISMA</i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="w-full  rounded-xl border lg:w-3/12 px-4 hover:scale-105">
                    {{-- Card Anggota --}}
                    <div class="w-full max-w-sm bg-white rounded-lg shadow">
                        <div class="flex justify-end px-4 pt-4">
                            <button id="dropdownButton" data-dropdown-toggle="dropdown"
                                class="inline-block text-batik dark:text-almet hover:text-white hover:bg-batik dark:hover:bg-almet focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg text-sm p-1.5"
                                type="button">
                                <span class="sr-only">Open dropdown</span>
                                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 16 3">
                                    <path
                                        d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                                </svg>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="dropdown"
                                class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 border border-batik dark:border-almet">
                                <ul class="py-2" aria-labelledby="dropdownButton">
                                    <li>
                                        <a href="https://www.instagram.com/"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-batik dark:text-almet">Instagram</a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-batik dark:text-almet">Facebook
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="flex flex-col items-center pb-10">
                            <a href="asset/img/talitha.jpg" class="">
                                <img class="w-full h-full mb-3 rounded-full shadow-lg" src="asset/img/talitha.jpg"
                                    alt="Bonnie image" />
                            </a>
                            <h5 class="mb-1 text-xl font-semibold text-gray-900">Talitha Raniah Azmi</h5>
                            <span class="text-sm text-gray-500"><i>WAKIL KETUA UKM KPM UNISMA</i>
                            </span>
                        </div>
                    </div>

                </div>
                <div class="w-full  rounded-xl border lg:w-3/12 px-4 hover:scale-105">
                    {{-- Card Anggota --}}
                    <div class="w-full max-w-sm bg-white rounded-lg shadow">
                        <div class="flex justify-end px-4 pt-4">
                            <button id="dropdownButton" data-dropdown-toggle="dropdown"
                                class="inline-block text-batik dark:text-almet hover:text-white hover:bg-batik dark:hover:bg-almet focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg text-sm p-1.5"
                                type="button">
                                <span class="sr-only">Open dropdown</span>
                                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 16 3">
                                    <path
                                        d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                                </svg>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="dropdown"
                                class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 border border-batik dark:border-almet">
                                <ul class="py-2" aria-labelledby="dropdownButton">
                                    <li>
                                        <a href="https://www.instagram.com/"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-batik dark:text-almet">Instagram</a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-batik dark:text-almet">Facebook
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="flex flex-col items-center pb-10">
                            <a href="asset/img/lisma.jpg" class="">
                                <img class="w-full h-full mb-3 rounded-full shadow-lg" src="asset/img/lisma.jpg"
                                    alt="Bonnie image" />
                            </a>
                            <h5 class="mb-1 text-xl font-semibold text-gray-900">Lisma Firda Farhani</h5>
                            <span class="text-sm text-gray-500"><i>SEKETARIS UKM KPM UNISMA</i>
                            </span>
                        </div>
                    </div>

                </div>
                <div class="w-full  rounded-xl border lg:w-3/12 px-4 hover:scale-105">
                    {{-- Card Anggota --}}
                    <div class="w-full max-w-sm bg-white rounded-lg shadow">
                        <div class="flex justify-end px-4 pt-4">
                            <button id="dropdownButton" data-dropdown-toggle="dropdown"
                                class="inline-block text-batik dark:text-almet hover:text-white hover:bg-batik dark:hover:bg-almet focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg text-sm p-1.5"
                                type="button">
                                <span class="sr-only">Open dropdown</span>
                                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 16 3">
                                    <path
                                        d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                                </svg>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="dropdown"
                                class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 border border-batik dark:border-almet">
                                <ul class="py-2" aria-labelledby="dropdownButton">
                                    <li>
                                        <a href="https://www.instagram.com/"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-batik dark:text-almet">Instagram</a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-batik dark:text-almet">Facebook
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="flex flex-col items-center pb-10">
                            <a href="asset/img/gita.jpg" class="">
                                <img class="w-full h-full mb-3 rounded-full shadow-lg" src="asset/img/gita.jpg"
                                    alt="Bonnie image" />
                            </a>
                            <h5 class="mb-1 text-xl font-semibold text-gray-900">Gita Maulani Fadhilah</h5>
                            <span class="text-sm text-gray-500"><i>BENDAHARA UKM KPM UNISMA</i>
                            </span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

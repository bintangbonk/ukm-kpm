@extends('layouts.main')

@section('content')
    <!-- Hero -->
    <section class="mt-32 mb-12 lg:mt-16">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4 lg:w-1/2">
                    <div class="relative mt-10">
                        <img src="asset/img/Solocew2-almet-nonbg1.png" alt="" class="mx-auto max-w-full dark:hidden" />
                        <img src="asset/img/Solocew2-almet-nonbg.png" alt=""
                            class="hidden dark:block mx-auto max-w-full" />
                    </div>
                </div>
                <div class="w-full self-center px-4 lg:w-1/2">
                    <h1 class="text-4xl font-bold text-batik dark:text-almet mb-5">
                        Tentang Kami
                    </h1>
                    <p class="font-medium text-basic mb-5 leading-relaxed">
                        Unit Kreativitas Mahasiswa (UKM) Korps Protokoler Mahasiswa Unisma merupakan UKM yang berdiri ke 16
                        dari 18 UKM yang ada di Unisma. Namun kita telah menorehkan prestasi baik internal maupun eksternal
                        kampus. <br>
                    </p>
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
        </div>
    </section>

    <!-- About Tabs -->
    <section class="mb-16">
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
                <div class="hidden p-4 rounded-lg bg-gray-50" id="profile" role="tabpanel" aria-labelledby="profile-tab">
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

    <!-- Divisi Tabs -->
    <section class="mb-16">
        <div class="container ">
            <div class="w-full px-4 pt-24">
                <div class="max-w-xl mx-auto text-center mb-10 relative">
                    <h2 class="font-bold text-dark text-3xl mb-4">Divisi Organisasi</h2>
                    <p class="font-medium text-md text-basic">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Perferendis eligendi illum totam quos excepturi eius?
                    </p>
                    <span class="absolute bottom-0 -translate-y-1 -z-10 scale-50 dark:hidden">
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
                    <span class="absolute bottom-0 -translate-y-1 -z-10 scale-50 hidden dark:block ">
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
                        <button class="inline-block p-4 border-b-2 rounded-t-lg text-lg" id="divisiA-tab"
                            data-tabs-target="#divisiA" type="button" role="tab" aria-controls="divisiA"
                            aria-selected="false">Divisi A</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 border-transparent rounded-t-lg text-lg hover:text-gray-600 hover:border-gray-300 "
                            id="divisiB-tab" data-tabs-target="#divisiB" type="button" role="tab"
                            aria-controls="divisiB" aria-selected="false">Divisi B</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 border-transparent rounded-t-lg text-lg hover:text-gray-600 hover:border-gray-300 "
                            id="divisiC-tab" data-tabs-target="#divisiC" type="button" role="tab"
                            aria-controls="divisiC" aria-selected="false">Divisi C</button>
                    </li>
                </ul>
            </div>
            <div id="myTabContent">
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
                            <h3 class="text-2xl font-bold hover:text-orange-600">Divisi A</h3>
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
                            <h3 class="text-2xl font-bold hover:text-batik dark:hover:text-almet">Divisi B</h3>
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
                            <h3 class="text-2xl font-bold hover:text-batik dark:hover:text-almet">Divisi C</h3>
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
@endsection

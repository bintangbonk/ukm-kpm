@extends('layouts.main')

@section('content')
    <!-- Hero -->
    <section class="mt-36 mb-12">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4 lg:w-1/2">
                    <div class="relative mt-10">
                        <img src="https://source.unsplash.com/500x500" alt="" class="mx-auto max-w-full" />
                    </div>
                </div>
                <div class="w-full self-center px-4 lg:w-1/2">
                    <h1 class="text-4xl font-bold text-orange-600 mb-10">
                        Tentang Kami
                    </h1>
                    <p class="font-medium text-basic mb-5 leading-relaxed">
                    Unit Kreativitas Mahasiswa (UKM) Korps Protokoler Mahasiswa Unisma merupakan UKM yang berdiri ke 16 dari 18 UKM yang ada di Unisma. Namun kita telah menorehkan prestasi baik internal maupun eksternal kampus. <br>
                        <span class="block text-dark font-bold">
                            Telusuri Lebih Lanjut
                        </span>
                    </p>
                    <div class="flex">
                        <div id="media-social" class="pt-2 text-4xl">
                            <!-- Instagram -->
                            <a href="#"
                                class="text-basic hover:text-orange-600 transition duration-300 ease-in-out"><i
                                    class="bx bxl-instagram"></i></a>
                            <!-- Youtube -->
                            <a href="#"
                                class="text-basic hover:text-orange-600 transition duration-300 ease-in-out"><i
                                    class="bx bxl-youtube"></i></a>
                            <!-- Tiktok -->
                            <a href="#"
                                class="text-basic hover:text-orange-600 transition duration-300 ease-in-out"><i
                                    class="bx bxl-tiktok"></i></a>
                            <!-- Whatsapp -->
                            <a href="#"
                                class="text-basic hover:text-orange-600 transition duration-300 ease-in-out"><i
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
            <div class="mb-4 border-b border-gray-200 dark:border-gray-700 px-8">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab"
                    data-tabs-toggle="#myTabContent" role="tablist">
                    <li class="mr-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg text-lg" id="profile-tab"
                            data-tabs-target="#profile" type="button" role="tab" aria-controls="profile"
                            aria-selected="false">Profil</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 border-transparent rounded-t-lg text-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                            id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab"
                            aria-controls="dashboard" aria-selected="false">Apa itu UKM ?</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 border-transparent rounded-t-lg text-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                            id="settings-tab" data-tabs-target="#settings" type="button" role="tab"
                            aria-controls="settings" aria-selected="false">Apa itu Korps Protokoler</button>
                    </li>
                </ul>
            </div>
            <div id="myTabContent">
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="profile" role="tabpanel"
                    aria-labelledby="profile-tab">
                    <p class="text-md text-gray-900 dark:text-gray-400 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Qui totam sequi harum minus. Rem, veritatis eligendi non, officia officiis molestias esse iste
                        explicabo reiciendis sapiente vel dolor qui harum id itaque sunt commodi quidem amet, odit assumenda
                        quam praesentium. Alias nostrum nobis tenetur nisi? Nemo nisi hic deserunt corrupti asperiores.</p>
                    <p class="text-md text-gray-900 dark:text-gray-400 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Qui totam sequi harum minus. Rem, veritatis eligendi non, officia officiis molestias esse iste
                        explicabo reiciendis sapiente vel dolor qui harum id itaque sunt commodi quidem amet, odit assumenda
                        quam praesentium. Alias nostrum nobis tenetur nisi? Nemo nisi hic deserunt corrupti asperiores.</p>
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel"
                    aria-labelledby="dashboard-tab">
                    <p class="text-md text-gray-900 dark:text-gray-400 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Temporibus quaerat, hic voluptatem ea natus laboriosam vero fugiat aliquam molestias fugit
                        veritatis nemo in tempora expedita eveniet! Corporis reprehenderit eveniet eum. Quaerat explicabo,
                        eaque debitis modi dolorem officiis hic ex, quasi autem facere a, maxime ducimus. Labore molestias
                        corporis facere. Nobis.</p>
                    <p class="text-md text-gray-900 dark:text-gray-400 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Temporibus quaerat, hic voluptatem ea natus laboriosam vero fugiat aliquam molestias fugit
                        veritatis nemo in tempora expedita eveniet! Corporis reprehenderit eveniet eum. Quaerat explicabo,
                        eaque debitis modi dolorem officiis hic ex, quasi autem facere a, maxime ducimus. Labore molestias
                        corporis facere. Nobis.</p>
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="settings" role="tabpanel"
                    aria-labelledby="settings-tab">
                    <p class="text-md text-gray-900 dark:text-gray-400 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Eligendi fuga quaerat odio quibusdam doloremque omnis esse cupiditate amet vel at odit
                        dolores, temporibus quis libero. Doloribus saepe, sit molestias commodi quo, ipsa, facilis amet
                        perspiciatis delectus expedita reprehenderit quod explicabo similique autem reiciendis ipsum
                        consectetur voluptates dolores consequatur eos inventore..</p>
                    <p class="text-md text-gray-900 dark:text-gray-400 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing
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
                    <div class="max-w-xl mx-auto text-center mb-10">
                        <h2 class="font-bold text-dark text-3xl mb-4">Divisi Organisasi</h2>
                        <p class="font-medium text-md text-basic">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Perferendis eligendi illum totam quos excepturi eius?
                        </p>
                    </div>
                </div>
            <div class="mb-4 border-b border-gray-200 dark:border-gray-700 px-8">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab"
                    data-tabs-toggle="#myTabContent" role="tablist">
                    <li class="mr-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg text-lg" id="divisiA-tab"
                            data-tabs-target="#divisiA" type="button" role="tab" aria-controls="divisiA"
                            aria-selected="false">Divisi A</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 border-transparent rounded-t-lg text-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                            id="divisiB-tab" data-tabs-target="#divisiB" type="button" role="tab"
                            aria-controls="divisiB" aria-selected="false">Divisi B</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 border-transparent rounded-t-lg text-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                            id="divisiC-tab" data-tabs-target="#divisiC" type="button" role="tab"
                            aria-controls="divisiC" aria-selected="false">Divisi C</button>
                    </li>
                </ul>
            </div>
            <div id="myTabContent">
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="divisiA" role="tabpanel"
                    aria-labelledby="divisiA-tab">
                    <div class="flex flex-wrap">
                        <div class="w-full lg:w-1/2">
                            <div class="relative overflow-hidden rounded-lg">
                                <img src="asset/img/divisiA.jpg" alt="" class="mx-auto max-w-full px-5 rounded-2xl" />
                                <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                            </div>
                        </div>
                        <div class="w-full lg:w-1/2">
                            <h3 class="text-2xl font-bold hover:text-orange-600">Divisi A</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti esse, ipsum, magnam excepturi sapiente eaque doloribus quidem, nostrum suscipit perferendis quos dignissimos sit velit autem.</p>
                            <hr class="my-4">
                            <h3 class="text-xl font-bold">Program Kerja</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis quisquam in suscipit similique iure praesentium, accusantium nesciunt laborum sunt magni dicta labore maiores necessitatibus. Maxime quia suscipit ratione quam consequuntur.</p>
                        </div>
                    </div>
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="divisiB" role="tabpanel"
                    aria-labelledby="divisiB-tab">
                    <div class="flex flex-wrap">
                        <div class="w-full lg:w-1/2">
                            <div class="relative overflow-hidden rounded-lg">
                                <img src="asset/img/divisiB.jpg" alt="" class="mx-auto max-w-full px-5 rounded-2xl" />
                                <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                            </div>
                        </div>
                        <div class="w-full lg:w-1/2">
                            <h3 class="text-2xl font-bold hover:text-orange-600">Divisi B</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti esse, ipsum, magnam excepturi sapiente eaque doloribus quidem, nostrum suscipit perferendis quos dignissimos sit velit autem.</p>
                            <hr class="my-4">
                            <h3 class="text-xl font-bold">Program Kerja</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis quisquam in suscipit similique iure praesentium, accusantium nesciunt laborum sunt magni dicta labore maiores necessitatibus. Maxime quia suscipit ratione quam consequuntur.</p>
                        </div>

                    </div>
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="divisiC" role="tabpanel"
                    aria-labelledby="divisiC-tab">
                    <div class="flex flex-wrap">
                        <div class="w-full lg:w-1/2">
                            <div class="relative overflow-hidden rounded-lg">
                                <img src="asset/img/divisiC.jpg" alt="" class="mx-auto max-w-full px-5 rounded-2xl" />
                                <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                            </div>
                        </div>
                        <div class="w-full lg:w-1/2">
                            <h3 class="text-2xl font-bold hover:text-orange-600">Divisi C</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti esse, ipsum, magnam excepturi sapiente eaque doloribus quidem, nostrum suscipit perferendis quos dignissimos sit velit autem.</p>
                            <hr class="my-4">
                            <h3 class="text-xl font-bold">Program Kerja</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis quisquam in suscipit similique iure praesentium, accusantium nesciunt laborum sunt magni dicta labore maiores necessitatibus. Maxime quia suscipit ratione quam consequuntur.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

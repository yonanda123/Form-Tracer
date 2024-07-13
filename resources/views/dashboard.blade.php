<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .background-images {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
        }

        .background-images img {
            position: absolute;
            width: 50%;
            height: auto;
            object-fit: cover;
        }

        .background-images .top-left {
            top: 0;
            left: 0;
        }

        .background-images .top-right {
            top: 0;
            right: 0;
        }

        .highlighted-text {
            background: linear-gradient(to right, #252F3E, #6B84AA);
            border-radius: 1ch;
            padding: 0.2rem 1rem;
            color: white;
        }

        .relative-container {
            position: relative;
            height: 13vh;
        }

        .bottom-right {
            position: absolute;
            bottom: 0;
            right: 0;
        }

        .center {
            position: absolute;
            top: 30%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 80%;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 10;
        }

        .main-container {
            display: grid;
            grid-template-rows: auto auto 1fr;
        }

        @media (max-width: 768px) {
            .relative-container {
                height: auto;
            }
        }
    </style>
</head>

<body>
    <div class="min-h-full">
        <nav class="bg-white" x-data="{ isOpen: false }">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-28 items-center justify-between">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img class="h-8 w-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500"
                                alt="Your Company">
                        </div>
                    </div>
                    <div class="hidden md:flex md:items-center md:justify-between w-full">
                        <div class="ml-auto flex items-baseline space-x-4">
                            <a href="#"
                                class="rounded-md px-3 py-2 text-sm font-medium text-gray-900 hover:text-blue-700"
                                aria-current="page">Beranda</a>
                            <a href="#"
                                class="rounded-md px-3 py-2 text-sm font-medium text-gray-900 hover:text-blue-700">Berita</a>
                            <a href="#"
                                class="rounded-md px-3 py-2 text-sm font-medium text-gray-900 hover:text-blue-700">Statistik</a>
                            <a href="#"
                                class="rounded-md px-3 py-2 text-sm font-medium text-gray-900 hover:text-blue-700">Publikasi</a>
                            <a href="#"
                                class="rounded-md px-3 py-2 text-sm font-medium text-gray-900 hover:text-blue-700">Faq</a>
                            <a href="#"
                                class="rounded-md px-3 py-2 text-sm font-medium text-gray-900 hover:text-blue-700">Isi
                                Kuisoner</a>
                        </div>
                        <a href="#"
                            class="inline-block ml-3 px-3 py-1 border border-transparent text-base font-medium rounded-md shadow-2xl text-white bg-blue-500 hover:bg-blue-700">Login</a>
                    </div>
                    <div class="-mr-2 flex md:hidden">
                        <!-- Mobile menu button -->
                        <button type="button" @click="isOpen = !isOpen"
                            class="relative inline-flex items-center justify-center rounded-md bg-blue-700 p-2 text-white hover:bg-blue-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-white"
                            aria-controls="mobile-menu" aria-expanded="false">
                            <span class="absolute -inset-0.5"></span>
                            <span class="sr-only">Open main menu</span>
                            <!-- Menu open: "hidden", Menu closed: "block" -->
                            <svg :class="{ 'hidden': isOpen, 'block': !isOpen }" class="block h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                            <!-- Menu open: "block", Menu closed: "hidden" -->
                            <svg :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Mobile menu, show/hide based on menu state. -->
            <div x-show="isOpen" class="md:hidden" id="mobile-menu">
                <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
                    <a href="#"
                        class="block rounded-md hover:bg-blue-700 px-3 py-2 text-base font-medium text-gray-900 hover:text-white"
                        aria-current="page">Beranda</a>
                    <a href="#"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-900 hover:bg-blue-700 hover:text-white">Berita</a>
                    <a href="#"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-900 hover:bg-blue-700 hover:text-white">Statistik</a>
                    <a href="#"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-900 hover:bg-blue-700 hover:text-white">Publikasi</a>
                    <a href="#"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-900 hover:bg-blue-700 hover:text-white">Faq</a>
                    <a href="#"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-900 hover:bg-blue-700 hover:text-white">Isi
                        Kuisoner</a>
                </div>
            </div>
        </nav>
        <div class="background-images">
            <img src="{{ URL('img/linear-green.png') }}" alt="Background Top Left" class="top-left">
            <img src="{{ URL('img/linear-purple.png') }}" alt="Background Top Right" class="top-right">
        </div>
        <main class="main-container">
            <div
                class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 flex flex-col lg:flex-row items-center lg:items-start">
                <div class="lg:w-1/2 text-center lg:text-left">
                    <h1 class="text-gray-900 text-3xl font-weight-light mb-6">Selamat Datang!</h1>
                    <div class="text-4xl font-bold mb-12">
                        <span class="text-gray-700">Tracer</span>
                        <span class="highlighted-text">Study</span>
                    </div>
                    <p class="mt-4 max-w-2xl text-lg text-gray-500 lg:mx-0">
                        Selamat datang di Laman Tracer Study, Direktorat Pembelajaran dan Kemahasiswaan, Direktorat
                        Jenderal Pendidikan Tinggi. Laman ini diperuntukkan untuk mengelola data hasil tracer study yang
                        dilaksanakan oleh Perguruan Tinggi di Indonesia.
                    </p>
                    <div class="mt-10 text-center lg:text-left">
                        <a href="#"
                            class="inline-block px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-2xl text-white bg-blue-500 hover:bg-blue-700">Isi
                            Kuesioner</a>
                    </div>
                </div>
                <div class="lg:w-1/2 mt-10 lg:mt-0">
                    <img src="{{ URL('img/saly.png') }}" alt="Welcome Image">
                </div>
            </div>
            <div class="max-w-full mx-auto px-16 mt-12">
                <h1 class="text-3xl font-semibold mb-4 text-gray-500">Tentang Tracer Study</h1>
                <p class="mb-4 text-sm text-gray-500 leading-8">
                    Dikti saat ini sedang melaksanakan upaya untuk merintis kompilasi data tracer study nasional
                    khususnya mengenai transisi dan posisi pekerjaan lulusan PT di Indonesia. Untuk itu sejak tahun
                    2011, telah dikembangkan suatu sistem online yang dapat digunakan oleh Perguruan Tinggi untuk
                    melacak aktivitas para lulusannya setelah masa pendidikan tinggi, baik masa transisi maupun
                    pergerakan mereka di dunia kerja sampai. Tracer study dinilai penting karena menjadi alat evaluasi
                    kinerja PT dan sekarang telah dijadikan salah satu syarat kelengkapan akreditasi oleh Badan
                    Akreditasi Nasional Perguruan Tinggi (BAN-PT), sebagai kelengkapan dalam dokumen Evaluasi Diri yang
                    diperlukan dalam pengajuan proposal melalui Kemdikbud. Tracer study online Dikti ditujukan untuk
                    melacak jejak lulusan/alumni yang dilakukan 2 tahun setelah lulus dan bertujuan untuk mengetahui:
                </p>
                <ol class="list-decimal list-inside mb-4 text-gray-500 text-sm leading-8">
                    <li>Outcome pendidikan dalam bentuk transisi dari dunia pendidikan tinggi ke dunia kerja (termasuk
                        masa tunggu kerja dan proses pencarian kerja pertama), situasi kerja terakhir, dan aplikasi
                        kompetensi di dunia kerja.</li>
                    <li>Output pendidikan yaitu penilaian diri terhadap penguasaan dan perolehan kompetensi.</li>
                    <li>Proses pendidikan berupa evaluasi proses pembelajaran dan kontribusi pendidikan tinggi terhadap
                        perolehan kompetensi. Hasil tracer study akan membantu PT dalam mengetahui posisi lulusan yang
                        telah terserap dalam dunia kerja serta menyiapkan lulusan sesuai dengan kompetansi yang
                        diperlukan di dunia kerja. Hasil tracer study yang kemudian dilaporkan ke Dikti akan membantu
                        program Pemerintah dalam rangka memetakan kebutuhan dunia kerja dengan pembangunan pendidikan di
                        Indonesia.</li>
                </ol>
                <h2 class="text-3xl font-semibold mb-4 text-gray-500 text-center">Berita Terkini</h2>
                <p class="text-center text-gray-500 text-sm">Update terbaru : Pastikan PT anda telah melaporkan data
                    Tracer Studi pelaksanaan tahun 2019, untuk memenuhi data pemeringkatan tahun 2020</p>
                <div class="py-6 space-y-4 w-full max-w-6xl mx-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        <div class="bg-white rounded-lg shadow-xl p-6 content-center text-center">
                            <h3 class="text-lg text-gray-600 font-semibold mb-5">Perpanjangan Batas Waktu Anugerah
                                Pembelajaran dan
                                Kemahasiswaan Tahun 2022 Program Tracer Study</h3>
                            <p class="mt-2 text-gray-600 text-center text-sm mb-5">Yth. 1. Pimpinan Perguruan
                                Tinggi Negeri 2. Pimpinan
                                Perguruan Tinggi Swasta Berdasarkan surat Plt. Direktur Pembelajaran dan
                                Kemahasiswaan nomor 7707/E2/DT.02.01/2022</p>
                            <button
                                class="inline-block px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-2xl text-white bg-blue-500 hover:bg-blue-700">Selengkapnya</button>
                        </div>
                        <div class="bg-white rounded-lg shadow-xl p-6 content-center text-center">
                            <h3 class="text-lg text-gray-600 font-semibold text-center mb-5">Anugerah Pembelajaran
                                dan Kemahasiswaan Tahun 2022
                                untuk Perguruan Tinggi Negeri</h3>
                            <p class="mt-2 text-gray-600 text-center text-sm mb-5">Yth. Pimpinan Perguruan Tinggi
                                Negeri Direktorat Jenderal
                                Pendidikan Tinggi, Riset, dan Teknologi, Kemendikbudristek akan menyelenggarakan
                                Anugerah Pembelajaran dan Kemahasiswaan Tahun 2022 untuk Perguruan</p>
                            <button
                                class="inline-block px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-2xl text-white bg-blue-500 hover:bg-blue-700">Selengkapnya</button>
                        </div>
                        <div class="bg-white rounded-lg shadow-xl p-6 content-center text-center">
                            <h3 class="text-lg text-gray-600 font-semibold text-center mb-5">Anugerah Pembelajaran
                                dan Kemahasiswaan Tahun 2022
                                untuk Perguruan Tinggi Swasta</h3>
                            <p class="mt-2 text-gray-600 text-center text-sm mb-5">Yth. Pimpinan Perguruan Tinggi
                                Swasta Direktorat Jenderal
                                Pendidikan Tinggi, Riset, dan Teknologi, Kemendikbudristek akan menyelenggarakan
                                Anugerah Pembelajaran dan Kemahasiswaan Tahun 2022 untuk Perguruan Tinggi</p>
                            <button
                                class="inline-block px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-2xl text-white bg-blue-500 hover:bg-blue-700">Selengkapnya</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative-container">
                <div class="bottom-right">
                    <img src="{{ URL('img/rounded-green.png') }}">
                </div>
                <div class="center">
                    <img src="{{ URL('img/small-icons.png') }}" >
                </div>
            </div>
        </main>
        <footer class="dark:bg-gray-900 mt-14">
            <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
                <div class="sm:flex sm:items-center sm:justify-between">
                    <a href="https://flowbite.com/"
                        class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                        <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
                        <span
                            class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
                    </a>
                    <ul
                        class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                        <li>
                            <a href="#" class="hover:underline me-4 md:me-6">About</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">Contact</a>
                        </li>
                    </ul>
                </div>
                <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
                <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a
                        href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights
                    Reserved.</span>
            </div>
        </footer>
    </div>

</body>

</html>

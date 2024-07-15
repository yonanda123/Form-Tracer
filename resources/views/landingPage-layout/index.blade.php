@extends('layout.layout-landingPage')
@section('title', 'Form Tracer')
@section('content.landing.page')
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 flex flex-col lg:flex-row items-center lg:items-start">
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
            <img src="{{ URL('img/small-icons.png') }}">
        </div>
    </div>
@endsection

@extends('layout.layout-landingPage')
@section('title', 'Form Tracer')
@section('content.landing.page')
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 flex flex-col lg:flex-row items-center lg:items-start">
        <div class="lg:w-1/2 text-center lg:text-left">
            <h1 class="text-gray-900 text-3xl font-weight-light mb-6">Selamat Datang!</h1>
            <div class="text-4xl font-bold mb-12">
                <span class="text-gray-700">Sharia</span>
                <span class="highlighted-text">Predict</span>
            </div>
            <p class="mt-4 max-w-2xl text-lg text-gray-500 lg:mx-0">
                Selamat datang di Laman ShariaPredict, platform cerdas yang dirancang khusus untuk membantu Anda memprediksi
                pergerakan saham bank syariah dengan lebih akurat dan mudah. Menggabungkan kekuatan CNN (Convolutional
                Neural Networks) dan Bidirectional LSTM (Long Short-Term Memory), aplikasi ini memberikan analisis mendalam
                dengan menggunakan teknologi terbaru dalam machine learning.
            </p>
        </div>
        <div class="lg:w-1/2 mt-10 lg:mt-0">
            <img src="{{ URL('img/saly.png') }}" alt="Welcome Image">
        </div>
    </div>
    <div class="max-w-full mx-auto px-16 mt-12">
        <h1 class="text-3xl font-semibold mb-4 text-gray-500">Tentang Sharia Predict</h1>
        <p class="mb-4 text-sm text-gray-500 leading-8">
            ShariaPredict adalah aplikasi pintar yang memanfaatkan teknologi kecerdasan buatan untuk memberikan prediksi
            akurat terkait pergerakan saham bank syariah. Dengan menggabungkan dua metode unggulan, yaitu CNN (Convolutional
            Neural Networks) dan Bidirectional LSTM, ShariaPredict menawarkan analisis yang mendalam dan real-time untuk
            membantu investor membuat keputusan yang tepat. Dirancang dengan antarmuka yang sederhana namun canggih,
            aplikasi ini dapat digunakan oleh investor pemula maupun profesional yang ingin berinvestasi sesuai prinsip
            syariah.

            Fitur Utama ShariaPredict:
        </p>
        <ol class="list-decimal list-inside mb-4 text-gray-500 text-sm leading-8">
            <li>Menggunakan CNN dan Bidirectional LSTM untuk memprediksi pergerakan saham secara lebih akurat dan detail.
            </li>
            <li>Menyediakan informasi pasar dan prediksi yang diperbarui secara langsung untuk mendukung keputusan
                investasi.</li>
            <li>Dibangun khusus untuk memenuhi kebutuhan investasi berdasarkan prinsip-prinsip syariah.</li>
        </ol>
        <h2 class="text-3xl font-semibold mb-4 text-gray-500 text-center">Berita Terkini</h2>
        <p class="text-center text-gray-500 text-sm">Saham teknologi melonjak hari ini setelah harga minyak turun, memicu
            pemulihan pasar dari kerugian sebelumnya.</p>
        <div class="py-6 space-y-4 w-full max-w-6xl mx-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="bg-white rounded-lg shadow-xl p-6 content-center text-center">
                    <h3 class="text-lg text-gray-600 font-semibold mb-5">Lonjakan Saham Teknologi</h3>
                    <p class="mt-2 text-gray-600 text-center text-sm mb-5">Saham seperti Nvidia dan Meta mengalami kenaikan
                        signifikan karena kepercayaan investor terhadap sektor teknologi.</p>
                    <button
                        class="inline-block px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-2xl text-white bg-blue-500 hover:bg-blue-700">Selengkapnya</button>
                </div>
                <div class="bg-white rounded-lg shadow-xl p-6 content-center text-center">
                    <h3 class="text-lg text-gray-600 font-semibold text-center mb-5">Penurunan Harga Minyak</h3>
                    <p class="mt-2 text-gray-600 text-center text-sm mb-5">Harga minyak mentah turun lebih dari 4%,
                        meredakan kekhawatiran setelah kenaikan sebelumnya.</p>
                    <button
                        class="inline-block px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-2xl text-white bg-blue-500 hover:bg-blue-700">Selengkapnya</button>
                </div>
                <div class="bg-white rounded-lg shadow-xl p-6 content-center text-center">
                    <h3 class="text-lg text-gray-600 font-semibold text-center mb-5">Laporan Inflasi Mendatang</h3>
                    <p class="mt-2 text-gray-600 text-center text-sm mb-5">Yth. Pimpinan Perguruan Tinggi
                        Investor menantikan laporan inflasi September yang akan mempengaruhi keputusan suku bunga Federal
                        Reserve</p>
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

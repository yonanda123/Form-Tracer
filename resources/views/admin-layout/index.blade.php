@extends('layout.layout-adminPage')
@section('title', 'Beranda')
@section('content.admin.page')
    <h5 class="mb-3 text-xl font-bold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
        Pasar
    </h5>
    <div class="grid grid-cols-5 gap-4 mb-6">
        <!-- Jakarta SE -->
        <div class="p-4 bg-gray-100 rounded-lg text-center">
            <h2 class="text-xl font-bold text-gray-700">Jakarta SE</h2>
            <p class="text-3xl font-semibold text-gray-800">7,501.29</p>
            <p class="text-red-600">-55.86 (-0.74%)</p>
        </div>

        <!-- LIQUID 45 -->
        <div class="p-4 bg-gray-100 rounded-lg text-center">
            <h2 class="text-xl font-bold text-gray-700">LIQUID 45</h2>
            <p class="text-3xl font-semibold text-gray-800">931.13</p>
            <p class="text-red-600">-8.15 (-0.87%)</p>
        </div>

        <!-- S&P 500 -->
        <div class="p-4 bg-gray-100 rounded-lg text-center">
            <h2 class="text-xl font-bold text-gray-700">S&P 500</h2>
            <p class="text-3xl font-semibold text-gray-800">5,792.04</p>
            <p class="text-green-600">+40.91 (+0.71%)</p>
        </div>

        <!-- USD/IDR -->
        <div class="p-4 bg-gray-100 rounded-lg text-center">
            <h2 class="text-xl font-bold text-gray-700">USD/IDR</h2>
            <p class="text-3xl font-semibold text-gray-800">15,660.00</p>
            <p class="text-green-600">+45.00 (+0.29%)</p>
        </div>

        <!-- Gold (Emas) -->
        <div class="p-4 bg-gray-100 rounded-lg text-center">
            <h2 class="text-xl font-bold text-gray-700">Gold (Emas)</h2>
            <p class="text-3xl font-semibold text-gray-800">2,631.70</p>
            <p class="text-green-600">+5.70 (+0.22%)</p>
        </div>
    </div>

    <!-- Chart Section -->
    <div class="bg-white p-6 rounded-lg shadow">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-xl font-bold text-gray-800">Market Chart</h3>
            <div class="flex space-x-2">
                <button class="px-3 py-1 bg-gray-200 rounded text-gray-600">1 day</button>
                <button class="px-3 py-1 bg-gray-200 rounded text-gray-600">5 days</button>
                <button class="px-3 py-1 bg-blue-500 text-white rounded">1 month</button>
                <button class="px-3 py-1 bg-gray-200 rounded text-gray-600">1 year</button>
                <button class="px-3 py-1 bg-gray-200 rounded text-gray-600">5 years</button>
                <button class="px-3 py-1 bg-gray-200 rounded text-gray-600">Max</button>
            </div>
        </div>

        <!-- ApexCharts Chart -->
        <div id="chart" class="w-full"></div>
    </div>


    <script>
        // ApexChart Example
        var options = {
            series: [{
                name: 'Market Data',
                data: [15000, 15100, 15200, 15050, 14900, 15300, 15400, 15600, 15700]
            }],
            chart: {
                height: 350,
                type: 'line',
                zoom: {
                    enabled: false
                }
            },
            stroke: {
                curve: 'smooth'
            },
            xaxis: {
                categories: ['11 Sep', '12 Sep', '13 Sep', '14 Sep', '15 Sep', '16 Sep', '17 Sep', '18 Sep', '19 Sep']
            },
            tooltip: {
                x: {
                    format: 'dd MMM'
                }
            }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
    </script>
@endsection

@extends('layout.layout-adminPage')
@section('title', 'Beranda')
@section('content.admin.page')
    <h5 class="mb-3 text-xl font-bold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
        Predict Stock Prices
    </h5>
    <div class="grid grid-cols-3 gap-4 mb-4 p-5">
        <!-- 1D Price Box -->
        <div class="border border-orange-500 rounded-lg p-4 text-center">
            <h5 class="text-orange-500 text-lg font-semibold mb-2">1D Price</h5>
            <p class="text-xl font-bold text-gray-900">Rp. {{ $oneDayPrediction[0] }}</p>
            <p class="text-green-500 font-medium text-base">+0,5%</p>
        </div>

        <!-- 1W Price Box -->
        <div class="border border-orange-500 rounded-lg p-4 text-center">
            <h5 class="text-orange-500 text-lg font-semibold mb-2">1W Price</h5>
            <p class="text-xl font-bold text-gray-900">Rp. {{ $sevenDayPrediction }}</p>
            <p class="text-red-500 font-medium text-base">-0,15%</p>
        </div>

        <!-- 1M Price Box -->
        <div class="border border-orange-500 rounded-lg p-4 text-center">
            <h5 class="text-orange-500 text-lg font-semibold mb-2">1M Price</h5>
            <p class="text-xl font-bold text-gray-900">Rp. {{ $oneMonthPrediction }}</p>
            <p class="text-green-500 font-medium text-base">+0,74%</p>
        </div>
    </div>
    <div id="chart" class="w-full px-2.5"></div> <!-- Elemen Chart -->
    <div
        class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between mt-5 p-4 md:p-6 pt-0 md:pt-0">
        <div class="flex justify-between items-center pt-5">
            <!-- Dropdown dan tautan lain -->
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const threeMonthsTimeSeries = @json($threeMonthsTimeSeries);

            const labels = threeMonthsTimeSeries.map((_, index) => {
                const date = new Date();
                date.setDate(date.getDate() + 7 + index);
                return date.toLocaleDateString();
            });

            const options = {
                chart: {
                    type: 'line',
                    height: '400px',
                    width: '100%'
                },
                series: [{
                    name: "3 Months Time Series",
                    data: threeMonthsTimeSeries
                }],
                xaxis: {
                    categories: labels,
                    labels: {
                        show: true,
                        style: {
                            fontFamily: "Inter, sans-serif",
                            cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
                        }
                    },
                    axisBorder: {
                        show: false,
                    },
                    axisTicks: {
                        show: false,
                    },
                },
                yaxis: {
                    labels: {
                        formatter: function(value) {
                            return 'Rp.' + value.toFixed(
                                2);
                        },
                        style: {
                            fontFamily: "Inter, sans-serif",
                            cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
                        }
                    }
                }
            };
            const chart = new ApexCharts(document.querySelector("#chart"), options);
            chart.render();
        });
    </script>
@endsection

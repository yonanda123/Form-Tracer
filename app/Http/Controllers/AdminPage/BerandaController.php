<?php

namespace App\Http\Controllers\AdminPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $path = public_path('sample.json');
        $data = file_get_contents($path);
        $jsonData = json_decode($data, true);

        if ($jsonData === null) {
            return response()->json(['error' => 'Invalid JSON data.'], 400);
        }

        $oneDayPrediction = $jsonData['1_day_prediction'] ?? [];

        $sevenDayPrediction = $jsonData['7_days_prediction'] ?? [];
        $lastSevenDayPrediction = !empty($sevenDayPrediction) ? end($sevenDayPrediction) : null;

        $oneMonthPrediction = $jsonData['1_month_prediction'] ?? [];
        $lastOneMonthPrediction = !empty($oneMonthPrediction) ? end($oneMonthPrediction) : null;

        $threeMonthsTimeSeries = $jsonData['3_months_time_series'] ?? [];

        return view('admin-layout.index', [
            'threeMonthsTimeSeries' => $threeMonthsTimeSeries,
            'oneDayPrediction' => $oneDayPrediction,
            'sevenDayPrediction' => $lastSevenDayPrediction,
            'oneMonthPrediction' => $lastOneMonthPrediction
        ]);
    }
}

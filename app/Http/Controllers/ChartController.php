<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarChartModel;

class ChartController extends Controller
{
      public function readdata(){
        $data = \App\Models\BarChartModel::orderBy('time_bar', 'DESC')->first();
        return response()->json($data);
    }
}
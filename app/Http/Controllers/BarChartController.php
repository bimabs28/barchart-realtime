<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarChartModel;

class BarChartController extends Controller
{
    
    public function index()
    {

        $data = \App\Models\BarChartModel::all();
        $labels = $data->pluck('time_bar')->toArray();
        $data_bar = $data->pluck('data_bar')->toArray();

        return view('barchart', ['data' => $data, 'labels' => $labels, 'data_bar' => $data_bar]);
    }
}
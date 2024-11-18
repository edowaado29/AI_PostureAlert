<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class adminController extends Controller
{
    public function dashboard()
{
    $chart = (new LarapexChart)->setType('line')
                                ->setTitle('Posture Monitoring')
                                ->setXAxis(['January', 'February', 'March'])
                                ->setDataset([
                                    [
                                        'name' => 'Good Posture',
                                        'data' => [3, 4, 6]
                                    ],
                                    [
                                        'name' => 'Bad Posture',
                                        'data' => [1, 3, 2]
                                    ]
                                ]);
                                
    return view('admin.dashboard', compact('chart'));
}
    public function controller()
    {
        return view('admin.controller');
    }
    public function laporan()
    {
        return view('admin.laporan');
    }
}

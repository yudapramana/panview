<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $services = \App\Models\Services::where('featured', 'yes')->get();
        $carousels = \App\Models\Carousel::where('active', 'yes')->get();
        return view('landing.home', [
            'accountfb' => 'pandanviewmandeh',
            'account' => 'pandanviewmandeh',
            'channel' =>  '@pandanviewmandehofficial4919',
            'services' =>  $services,
            'carousels' =>  $carousels
        ]);
    }
}

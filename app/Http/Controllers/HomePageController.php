<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\resort;

class HomePageController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $resort = resort::all();
        return view('resort', ['resorts'=>$resort]);
    }
}

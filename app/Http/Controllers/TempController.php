<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Temp;

class TempController extends Controller
{

    public function getTemper(Request $request) {
       $date = $request->date;
       //
       return view('components.temper_items',[
           'data'=> Temp::query()->whereDate('datatime', $date)->get()
       ]);
    }

    public function index(){
        $date = now()->format('Y-m-d');
        return view('home',[
            'data' => Temp::query()->whereDate('datatime', $date)->get(),
            'current_date' => $date
        ]);
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Temp;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function getTemper(Request $request) {
        $date = $request->date;
        return view('components.temper_items',[
            'data'=> Temp::query()->whereDate('datatime', $date)->latest('datatime')->get()
        ]);
    }
    public function contact(){
        return view('contact');
    }


    public function temper(){
        $date = now()->format('Y-m-d');
        return view('temper',[
            'data' => Temp::query()->whereDate('datatime', $date)->latest('datatime')->get(),
            'current_date' => $date,
        ]);
    }

    public function setDataArduino(Request $request){
        $tet = $request->tt;
        $ted = $request->td;
        $teu = $request->tu;

        Temp::create([
            'dom' => $ted,
            'ulica' => $teu,
            'teplica' => $tet,
        ]);
    }
}

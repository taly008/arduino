<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Temp;

class TempController extends Controller
{

    public function getTemper(Request $request) {
       $date = $request->date;
       return view('components.temper_items',[
           'data'=> Temp::query()->whereDate('datatime', $date)->latest('datatime')->get()
       ]);
    }
    public function contact(){
     return view('contact');
    }
    public function index(){
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

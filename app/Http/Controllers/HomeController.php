<?php

namespace App\Http\Controllers;

use App\Models\Nastr;
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

/*        $affectedRecords = Nastr::updateOrCreate([
            'id' => 1,
        ],[
            'dom' => $ted,
            'ulica' => $teu,
            'teplica' => $tet
        ]);*/

        $affectedRecords = Nastr::where("id", 1)->update([
            'dom' => $ted,
            'ulica' => $teu,
            'teplica' => $tet
        ]);

    }
}

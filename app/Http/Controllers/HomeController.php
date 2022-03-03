<?php

namespace App\Http\Controllers;

use App\Core\phpSerial;
use Illuminate\Support\Facades\DB;
use App\Models\Setting;
use App\Models\Temp;
use Illuminate\Http\Request;

class HomeController extends Controller
{

//    function findtofile($filename,$keyline){
//
//        $filename = '.htaccess'; // имя файла
//        $keyline = 'Order'; // строка, совпадение с которой нужно найти
//        echo '<pre>';
//        print_r(search_line($filename, $keyline));
//        echo '</pre>';
public function test()
{

//    exec("mode COM3 BAUD=9600 PARITY=N data=8 stop=1 xon=off");
//    $fp = fopen ('COM3', "w+");
////    dd($fp);
//    if (!$fp) {
////        dd("Not open");
//    } else {
//        fwrite($fp, 'S');
//
// //       dd($fp);
//    }
//    fclose($fp);

    $serial = new phpSerial();

}
    public function setting(Request $request)
    {
        return view('setting', [
            'data' => Setting::find(1)
        ]);
    }

    public function saveSetting(Request $request)
    {
        $setting = Setting::find(1);
        $setting->set_teplica = $request->input('set_teplica');
        $setting->set_fan = $request->input('set_fan');
        $setting->set_mode = $request->input('set_mode');
        $setting->save();

        return view('setting', [
            'data' => Setting::find(1)
        ]);
    }

    public function check(Request $request)
    {
        dd($request->all());
    }

    public function checkcode()
    {
        return view('checkcode', [
            'nf' => 'Иван'
        ]);
    }

    public function index()
    {
        return view('home', [
            'data' => Setting::find(1)
        ]);
    }


    public function getHomeTemper()
    {
        $out = Setting::find(1);
        return [
            'date' => $out->datatime->format('H:i:s'),
            'dom' => $out->dom,
            'ulica' => $out->ulica,
            'teplica' => $out->teplica,
        ];

    }

    public function getTemper(Request $request)
    {
        $date = $request->date;
        return view('components.temper_items', [
            'data' => Temp::query()->whereDate('datatime', $date)->latest('datatime')->get()
        ]);
    }


    public function contact()
    {
        return view('contact');
    }

    public function temper()
    {
        $date = now(7)->format('Y-m-d');
        return view('temper', [
            'data' => Temp::query()->whereDate('datatime', $date)->latest('datatime')->get(),
            'current_date' => $date,
        ]);
    }

    public function setDataArduino(Request $request)
    {
        $tet = $request->tt;
        $ted = $request->td;
        $teu = $request->tu;

        Setting::updateOrcreate([
            'id' => 1,
        ],
            [
                'dom' => $ted,
                'ulica' => $teu,
                'teplica' => $tet,
            ]);

        $temper = Temp::query()->orderByDesc('id')->first();

        if (
            abs($temper->dom - $ted) > 0.5 ||
            abs($temper->ulica - $teu) > 0.5 ||
            abs($temper->teplica - $tet) > 0.5
        ) {
            Temp::create([
                'dom' => $ted,
                'ulica' => $teu,
                'teplica' => $tet,
            ]);
        }

        $outStr = '~~~';

        $currentTime = time();
        if (mktime(6, 30, 0) < $currentTime && mktime(22, 0, 0) > $currentTime) {
            $outStr = $outStr.'1;';
        } else {
            $outStr = $outStr.'0;';
        }
        $setting = Setting::find(1);
        $outStr = $outStr.$setting->set_mode.';';
        $outStr = $outStr.$setting->set_teplica.';';
        return $outStr.'~~~';
    }
}

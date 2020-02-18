<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }

    public function soal1()
    {
        return view('soal1');
    }

    public function soal2()
    {
        return view('soal2');
    }

    public function soal3()
    {
        return view('soal3');
    }

    public function prosesSoal1(Request $request)
    {
        $total_angka = $request->angka;

        for($i = 0; $i < $total_angka; $i++){

            for($spasi = $total_angka-1; $spasi > 0; $spasi--){
                echo " ";
            }

            for($bintang = 0; $bintang <= $i; $bintang++){
                echo "*";
            }

            echo "\n";
        }
    }

    public function prosesSoal2(Request $request)
    {
        $total_angka = $request->angka;
        echo "Hasil: \n\n";
        for ($i = 1; $i <= $total_angka; $i++) {

            for ($spasi = $total_angka - $i; $spasi > 0; $spasi--) {
                echo " ";
            }

            for ($bintang = 1; $bintang <= $i; $bintang++) {
                echo "*";
            }

            echo "\n";
        }

        for($x = $total_angka-1 ; $x > 0; $x--){
            for ($spasi = 0; $spasi < $total_angka-$x; $spasi++) {
                echo " ";
            }

            for($bintang = $x; $bintang > 0; $bintang--){
                echo "*";
            }
            echo "\n";
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManiaController extends Controller
{
    public function index(){
        $angka = 100;

        for ($i=1; $i<=$angka; $i++){
            $hasil = "";
            $ket = "";
            if ($i%5==0){       
                if ($i%3==0){
                    $hasil = $this->kelipatanTigadanLima($i);
                    $ket = "<span style='color:Chocolate'> --> Luas persegi panjang :   ";
                } else {
                    $hasil = $this->kelipatanLima($i);
                    $ket = "<span style='color:DarkOliveGreen'> --> Keliling lingkaran :   ";
                }
            } else if ($i%3==0){
                $hasil = $this->kelipatanTiga($i);
                $ket = "<span style='color:RoyalBlue'> --> Luas lingkaran :   ";
            }
            
            if ($hasil!=""){
                echo bcdiv($i, 1, 2).$ket.bcdiv($hasil, 1, 2)."</span><br>";
            } else {
                echo bcdiv($i, 1, 2)."<br>";
            }
            
        }        
    }

    public function kelipatanTiga(float $input){
        $r = $input/3;
        $hitung = 3.14 * $r * $r;

        return $hitung;
    }

    public function kelipatanLima(float $input){
        $r = $input/5;
        $hitung = 3.14 * $r * 2;

        return $hitung;
    }

    public function kelipatanTigadanLima(float $input){
        $hitung = ($input/3) * ($input/5);

        return $hitung;
    }
}

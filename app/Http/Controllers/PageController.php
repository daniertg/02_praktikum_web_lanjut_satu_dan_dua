<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index(){
        return "Selamat Datang Controller";
    }
    public function about(){
        echo"Febrian Dani Ritonga<br>";
        echo"2141720070<br>";
        echo"controller";
    }
    public function artikel($page=1){
        return "Halaman artikel dengan ID (controller) :S".$page;
        
    }

}

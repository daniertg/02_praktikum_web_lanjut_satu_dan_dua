<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function artikel($page=1){
        return "Halaman artikel dengan ID (controller) :".$page;
        
    }
}

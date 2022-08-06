<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class IndexController extends Controller
{
    
    public function index($dil) {

        
       App::setLocale($dil);
        return view('welcome');

    }
}

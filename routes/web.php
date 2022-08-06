<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\IndexController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Livewire\HomeComponent;

Route::redirect('/' , '/tr');

//  Route::get('/', function () {

//   return view('welcome');
//  });

Route::group(['prefix' => '{language}'  ], function(){ 

    Route::get('/' , 'App\Http\Controllers\IndexController@index');

});

 



    // Route::get('/{dil}' , HomeComponent::class );

 

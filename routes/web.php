<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/' , HomeComponent::class );

Route::get('/{locale}', function ($locale) {
    if (! in_array($locale, ['en', 'es', 'tr'])) {
        abort(400);
    }
 
    App::setLocale($locale);
 
    //
});
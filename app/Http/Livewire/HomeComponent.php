<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App;

class HomeComponent extends Component
{
 
    public $dil;

    public function render($dil)
    {
      
       App::setLocale($dil);
        return view('livewire.home-component')->layout('layouts.base');
    }
}

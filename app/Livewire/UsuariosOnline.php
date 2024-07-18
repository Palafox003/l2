<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Character;

class UsuariosOnline extends Component
{    
    
    public function render()
    {
        $players=Character::where('online',1)->get();
        return view('livewire.usuarios-online',['players'=>$players]);
    }
}

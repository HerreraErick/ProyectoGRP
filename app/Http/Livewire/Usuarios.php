<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Usuario;

class Usuarios extends Component
{
    public function render()
    {
        $this->usuarios = Usuario::all();
        return view('livewire.usuarios');
    }
}

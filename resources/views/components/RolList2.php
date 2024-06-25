<?php

namespace App\View\Components;

use Illuminate\View\Component;

class RolList extends Component
{
    public $rol;

    public function __construct($rol)
    {
        $this->rol = $rol;
    }

    public function render()
    {
        return view('components.rol-list');
    }
}
<?php

// ESSSA É A CLASSE DO COMPONENTE TITTLE

namespace App\View\Components;

use Illuminate\View\Component;

class Tittle extends Component
{

    // CONSTRUTOR
    // NECESSÁRIO PARA SETAR OS VALORES ENVIADOS NA SUA INSTÂNCIA
    public function __construct()
    {
        //
    }

    // RENDERIZAÇÃO DA VIEW CORRESPONDENTE
    public function render()
    {
        return view('components.tittle');
    }
}

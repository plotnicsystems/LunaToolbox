<?php

namespace App\View\Components;

use Illuminate\View\Component;
use LunaToolbox\Framework\Illuminate\Support\BladeComponentViewTrait;

class Example extends Component
{
    use BladeComponentViewTrait;

    public function __construct()
    {
        // 
    }

    public function render()
    {
        return $this->view('example');
    }
}

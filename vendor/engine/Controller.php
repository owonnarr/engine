<?php

namespace Engine;

use Engine\View;

class Controller
{
    public $view;
    
    public function __construct()
    {
        $this->view = new View();
    }
    
}
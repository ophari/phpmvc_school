<?php

class Controllers
{
    public function view($view, $data = []) 
    {
        require_once '../app/view/' . $view . '.php';
    }
}
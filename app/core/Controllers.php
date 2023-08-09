<?php

class Controllers
{
    public function view($view, $data = []) 
    {
        require_once '../app/view/' . $view . '.php';
    }

    public function models($model){
        require_once '../app/models/'.$model.'.php';
        return new $model;
    }
}
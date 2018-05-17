<?php

require_once '../models/empleado.php';

class Control {

    public $model;
    
    public function __CONSTRUCT(){
        $this->model = new Empleado();
    }
}

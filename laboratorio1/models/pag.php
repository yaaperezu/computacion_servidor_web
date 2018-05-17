<?php
require_once '../controllers/cont.php';


$c = new Control();
foreach($c->model->listarEmpleados() as $r){
    echo "Karen";
}



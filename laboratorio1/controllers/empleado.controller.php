<?php
require_once 'models/empleado.php';

class empleadoController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Empleado();
    }
    
    public function Index(){
        require_once 'views/empleado.php';
    }
    
    public function Crud(){
        $emp = new Empleado();
        
        if(isset($_REQUEST['id'])){
            $emp = $this->model->obtenerEmpleado($_REQUEST['id']);
        }
        require_once 'views/empleado-editar.php';
    }
    
    public function GuardarEmpleado(){
        $emp = new Empleado();

        $emp->id = $_REQUEST['id'];
        $emp->identificacion = $_REQUEST['identificacion'];
        $emp->nombres = $_REQUEST['nombres'];
        $emp->apellidos = $_REQUEST['apellidos'];
        $emp->sueldo = $_REQUEST['sueldo'];
        $emp->direccion = $_REQUEST['direccion'];
        $emp->correo = $_REQUEST['correo'];
        $emp->fechaingreso = $_REQUEST['fechaingreso'];
        $emp->fechanacimiento = $_REQUEST['fechanacimiento'];
        $emp->estado = $_REQUEST['estado'];

        $emp->id > 0 
            ? $this->model->actualizarEmpleado($emp)
            : $this->model->registrarEmpleado($emp);
        
        header('Location: index.php');
    }
    
    public function EliminarEmpleado(){
        $this->model->eliminarEmpleado($_REQUEST['id']);
        header('Location: index.php');
    }
}
<?php
require_once 'bd.php';

class Empleado extends BD {
	private $php_mvc;
    public $id;
    public $identificacion;
    public $nombres;
    public $apellidos;
	public $sueldo;
	public $direccion;
	public $correo;
	public $fechaingreso;
	public $fechanacimiento;
	public $estado;

	public function __CONSTRUCT() {
        try{
			parent::__CONSTRUCT();
        } catch(PDOException $e){ 
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
	
	public function listarEmpleados() {
		try {
			$result = array();
			$stm = $this->pdo->prepare("SELECT * FROM php_mvc.empleado");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch(Exception $e) {
			die($e->getMessage());
		}
	}

	public function obtenerEmpleado($idEmpleado)
	{
		try
		{
			$stm = $this->pdo->prepare("SELECT * FROM php_mvc.empleado WHERE id = ?");
			$stm->execute(array($idEmpleado));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
	
	public function eliminarEmpleado($idEmpleado)
	{
		try
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM php_mvc.empleado WHERE id = ?");
			$stm->execute(array($idEmpleado));

		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
	
	public function actualizarEmpleado($data)
	{
		try
		{
			$sql = "UPDATE php_mvc.empleado 
			        SET identificacion= ?,
						nombres= ?,
						apellidos= ?,
						sueldo= ?,
						direccion= ?,
						correo= ?,
						fechaingreso= ?,
						fechanacimiento= ?,
						estado= ?
				    WHERE id = ?";
			$this->pdo->prepare($sql)
			     ->execute(
				    array(
						$data->identificacion,
						$data->nombres,
						$data->apellidos,
						$data->sueldo,
						$data->direccion,
						$data->correo,
						$data->fechaingreso,
						$data->fechanacimiento,
						$data->estado,
						$data->id
					)
				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
	
	public function registrarEmpleado(empleado $data)
	{
		try
		{
		$sql = "INSERT INTO php_mvc.empleado(identificacion,nombres,apellidos,sueldo,direccion,correo,fechaingreso,fechanacimiento,estado)
		        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->identificacion,
					$data->nombres,
					$data->apellidos,
					$data->sueldo,
					$data->direccion,
					$data->correo,
					$data->fechaingreso,
					$data->fechanacimiento,
					$data->estado
                )
			);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
	
	
}
?>
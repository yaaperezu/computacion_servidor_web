
<ol class="breadcrumb">
  <li><a href="?c=empleado">Inicio&nbsp</a></li>
  <li class="active"><?php echo $emp->id != null ? 'Editar '.$emp->nombres : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-empleado" action="?c=empleado&a=GuardarEmpleado" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $emp->id; ?>" />
<div class="container">
  <div class="row">
    <div class="col-sm-6">
    <div class="form-group">
    <label>Identificación</label>
        <input type="text" name="identificacion" value="<?php echo $emp->identificacion; ?>" class="form-control" placeholder="Ingrese su identificación" required />
    </div>
</div>
</div>
<div class="row">
    <div class="col-sm-6">
    <div class="form-group">  
    <label>Nombre</label>      
    <input type="text" name="nombres" value="<?php echo $emp->nombres; ?>" class="form-control" placeholder="Ingrese su nombre" required />
    </div>
    
</div>
<div class="col-sm-6">
    <div class="form-group">  
    <label>Apellido</label>      
    <input type="text" name="apellidos" value="<?php echo $emp->apellidos; ?>" class="form-control" placeholder="Ingrese su apellido" required />
    </div>
    
</div>
</div>

<div class="row">
    <div class="col-sm-6">
    <div class="form-group">  
    <label>Sueldo</label>
        <input type="text" name="sueldo" value="<?php echo $emp->sueldo; ?>" class="form-control" placeholder="Ingrese el sueldo" required />
    </div>
    
</div>
<div class="col-sm-6">
    <div class="form-group">  
    <label>Dirección</label>
        <input type="text" name="direccion" value="<?php echo $emp->direccion; ?>" class="form-control" placeholder="Ingrese su dirección" required/>
    </div>
    
</div>
</div>
<div class="row">
    <div class="col-sm-6">
    <div class="form-group">  
    <label>Correo</label>
        <input type="email" name="correo" value="<?php echo $emp->correo; ?>" class="form-control" placeholder="Ingrese su correo electrónico" required/>
    </div>
    
</div>
<div class="col-sm-6">
    <div class="form-group">  
    <label>Fecha de Ingreso</label>
        <input  type="date" name="fechaingreso" value="<?php echo $emp->fechaingreso; ?>" class="form-control datepicker" placeholder="Ingrese su fecha de ingreso" required />
    </div>
    
</div>
</div>
<div class="row">
    <div class="col-sm-6">
    <div class="form-group">  
    <label>Fecha de Nacimiento</label>
        <input  type="date" name="fechanacimiento" value="<?php echo $emp->fechanacimiento; ?>" class="form-control datepicker" placeholder="Ingrese su fecha de nacimiento" required />
    </div>
    
</div>
<div class="col-sm-6">
    <div class="form-group">  
    <label>Estado</label>
        <select name="estado" class="form-control">
            <option <?php echo $emp->estado == 1 ? 'selected' : ''; ?> value="1">Activo</option>
            <option <?php echo $emp->estado == 0 ? 'selected' : ''; ?> value="0">Inactivo</option>
        </select>
    </div>
    
</div>
</div>

        
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

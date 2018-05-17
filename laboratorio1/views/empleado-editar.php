
<h1 class="page-header">
    <?php echo $emp->id != null ? $emp->nombres : 'Nuevo Registro'; ?>
</h1>


<ol class="breadcrumb">
  <li><a href="?c=empleado">Empleado</a></li>
  <li class="active"><?php echo $emp->id != null ? $emp->nombres : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-empleado" action="?c=empleado&a=GuardarEmpleado" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $emp->id; ?>" />

    <div class="form-group">
        <label>Identificación</label>
        <input type="text" name="identificacion" value="<?php echo $emp->identificacion; ?>" class="form-control" placeholder="Ingrese su identificación" data-validacion-tipo="requerido|min:3" />
    </div>
    
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="nombres" value="<?php echo $emp->nombres; ?>" class="form-control" placeholder="Ingrese su nombre" data-validacion-tipo="requerido|min:3" />
    </div>
    
    <div class="form-group">
        <label>Apellido</label>
        <input type="text" name="apellidos" value="<?php echo $emp->apellidos; ?>" class="form-control" placeholder="Ingrese su apellido" data-validacion-tipo="requerido|min:3" />
    </div>

    <div class="form-group">
        <label>Sueldo</label>
        <input type="text" name="sueldo" value="<?php echo $emp->sueldo; ?>" class="form-control" placeholder="Ingrese el sueldo" data-validacion-tipo="requerido|min:5" />
    </div>
    
    <div class="form-group">
        <label>Dirección</label>
        <input type="text" name="direccion" value="<?php echo $emp->direccion; ?>" class="form-control" placeholder="Ingrese su dirección" data-validacion-tipo="requerido|min:10" />
    </div>
    
    <div class="form-group">
        <label>Correo</label>
        <input type="text" name="correo" value="<?php echo $emp->correo; ?>" class="form-control" placeholder="Ingrese su correo electrónico" data-validacion-tipo="requerido|email" />
    </div>

    <div class="form-group">
        <label>Fecha de Ingreso</label>
        <input readonly type="text" name="fechaingreso" value="<?php echo $emp->fechaingreso; ?>" class="form-control datepicker" placeholder="Ingrese su fecha de ingreso" data-validacion-tipo="requerido" />
    </div>

    <div class="form-group">
        <label>Fecha de Nacimiento</label>
        <input readonly type="text" name="fechanacimiento" value="<?php echo $emp->fechanacimiento; ?>" class="form-control datepicker" placeholder="Ingrese su fecha de nacimiento" data-validacion-tipo="requerido" />
    </div>
    
    <div class="form-group">
        <label>Estado</label>
        <select name="estado" class="form-control">
            <option <?php echo $emp->estado == 1 ? 'selected' : ''; ?> value="1">Activo</option>
            <option <?php echo $emp->estado == 0 ? 'selected' : ''; ?> value="0">Inactivo</option>
        </select>
    </div>
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-empleado").submit(function(){
            return $(this).validate();
        });
    })
</script>
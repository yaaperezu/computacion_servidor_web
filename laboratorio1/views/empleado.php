<ol class="breadcrumb">

 <div class="col-md-12 text-right">

<a class="btn btn-primary" href="?c=empleado&a=Crud">Nuevo Empleado</a>

</div>
</ol>

<div class="col-md-12">
<table class="table ble-condensed table-hover table table-striped ta table-sm col-md" id="tablaempleado">
    <thead>
        <tr>
            <th style="font-size:80%;">Identificación</th>
            <th style="font-size:80%;">Nombre</th>
            <th style="font-size:80%;">Apellido</th>
            <th style="font-size:80%;">Dirección</th>
            <th style="font-size:80%;">Sueldo</th>
            <th style="font-size:80%;">Correo Electrónico</th>
            <th style="width:80px; font-size:70%;">Fecha Ingreso</th>
            <th style="width:80px; font-size:70%;">Fecha Nacimiento</th>
            <th style="font-size:80%;">Estado</th>          
            <th style="font-size:80%;"></th>
            <th style="font-size:80%;"></th>

        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->ListarEmpleados() as $r): ?>
        <tr>
            <td style="color:#456789;font-size:70%;"><?php echo $r->identificacion; ?></td>
            <td style="color:#456789;font-size:70%;"><?php echo $r->nombres; ?></td>
            <td style="color:#456789;font-size:70%;"><?php echo $r->apellidos; ?></td>            
            <td style="color:#456789;font-size:70%;"><?php echo $r->direccion; ?></td>
            <td style="color:#456789;font-size:70%;"><?php echo $r->sueldo; ?></td>
            <td style="color:#456789;font-size:70%;"><?php echo $r->correo; ?></td>
            <td style="color:#456789;font-size:70%;"><?php echo $r->fechaingreso; ?></td>
            <td style="color:#456789;font-size:70%;"><?php echo $r->fechanacimiento; ?></td>
            <td style="color:#456789;font-size:70%;"><?php echo $r->estado == 1 ? 'Activo' : 'Inactivo'; ?></td>
            <td>
                <a style="font-size:60%;" href="?c=empleado&a=Crud&id=<?php echo $r->id; ?>" class="btn btn-success btn-sm">Editar</a>
            </td>
            <td>
                <a style="font-size:60%;" onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=empleado&a=EliminarEmpleado&id=<?php echo $r->id; ?>" class="btn btn-danger btn-sm">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
</div>
</div>
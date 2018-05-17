<h1 class="page-header">Empleado</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=empleado&a=Crud">Nuevo Empleado</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">Identificación</th>
            <th style="width:180px;">Nombre</th>
            <th>Apellido</th>
            <th>Dirección</th>
            <th>Sueldo</th>
            <th>Correo</th>
            <th style="width:120px;">Fecha de Ingreso</th>
            <th style="width:120px;">Fecha de Nacimiento</th>
            <th>Estado</th>          
            <th style="width:60px;"></th>
            <th style="width:60px;"></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->listarEmpleados() as $r): ?>
        <tr>
            <td><?php echo $r->identificacion; ?></td>
            <td><?php echo $r->nombres; ?></td>
            <td><?php echo $r->apellidos; ?></td>            
            <td><?php echo $r->direccion; ?></td>
            <td><?php echo $r->sueldo; ?></td>
            <td><?php echo $r->correo; ?></td>
            <td><?php echo $r->fechaingreso; ?></td>
            <td><?php echo $r->fechanacimiento; ?></td>
            <td><?php echo $r->estado == 1 ? 'Activo' : 'Inactivo'; ?></td>
            <td>
                <a href="?c=empleado&a=Crud&id=<?php echo $r->id; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=empleado&a=EliminarEmpleado&id=<?php echo $r->id; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 

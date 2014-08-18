<section class="col-lg-12 panel-all">
	<h2>Reportes</h2>
	<div class="list">
		<div class="opcion-boton">
			<div class="object clear">
				<a href="site/agregar" class="btn btn-success"><i class="fa fa-user"></i> Nuevo Usuario</a>
			</div>
		</div>
		<table class="table table-bordered">
			<thead>
				<tr class="active">
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Usuario</th>
					<th>Privilegio</th>
					<th>Opciones</th>
				<tr>
			</thead>
			<tbody>
				<?php 
					for($i = 0; $i < 20; $i++)
					{
						echo '
						<tr>
	                    	<td align="center">Henry Mucio</td>
	                        <td align="center">Silva Bautista</td>
	                        <td align="center">henry</td>
	                        <td align="center">1</td>
	                        <td align="center" class="table-crud-options">
								<div class="btn-group">
									<a href="" class="btn btn-default" title="editar"><i class="fa fa-pencil-square-o"></i></a>
									<a href="" class="btn btn-danger" title="eliminar"><i class="fa fa-trash-o"></i></a>
								</div>
							</td>
	                    </tr>
						';
					}
				?>
			</tbody>
		</table>
	</div>
</section>
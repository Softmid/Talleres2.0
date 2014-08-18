<section class="col-lg-12 panel-all">
	<h2>Vehiculos</h2>
	<div class="list">
		<div class="opcion-boton">
			<div class="object clear">
				<a href="site/agregar" class="btn btn-success"><i class="fa fa-car"></i> Nuevo Vehiculo</a>
				<a href="site/agregar_categoria" class="btn btn-primary"><i class="fa fa-ellipsis-v"></i> Nueva Categoría</a>
			</div>
			<div class="object clear">
				<div class="col-lg-6 clear pad-0">
					<form class="form-inline" role="form">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-search"></i></div>
								<input class="form-control" type="search" placeholder="Busqueda">
							</div>
						</div>
					</form>
				</div>
				<div class="col-lg-6 clear pad-0">
					
                        <? echo $this->pagination->create_links(); ?>
<!--
						<a class="btn btn-default active">1</a>
						<a class="btn btn-default">2</a>
						<a class="btn btn-default">3</a>
						<a class="btn btn-default">4</a>
-->
				</div>
			</div>
		</div>
		<table class="table table-bordered persist-area">
			<thead>
				<tr class="active persist-header">
					<th width="10%">Nº</th>
					<th width="10%">Marca</th>
					<th width="10%">Modelo</th>
					<th width="10%">Color</th>
					<th width="10%">Cliente</th>
					<th width="10%">Empresa</th>
					<th width="10%">Monto</th>
					<th width="10%">Gastos</th>
					<th width="10%">Monto - Gastos</th>
					<th width="11%">Fecha Promesa</th>
				<tr>
			</thead>
			<tbody>
				<?php 
<<<<<<< HEAD
					for($i = 0; $i < 50; $i++)
=======
					foreach($vehiculos->result() as $vehiculo)
>>>>>>> brito
					{
						echo '
						<tr>
	                    	<td align="center">'.$vehiculo->clave.'</td>
	                        <td align="center">'.$vehiculo->marca.'</td>
	                        <td align="center">'.$vehiculo->modelo.'</td>
	                        <td align="center">'.$vehiculo->color.'</td>
	                        <td align="center">'.$vehiculo->cliente.'</td>
	                        <td align="center">'.$vehiculo->empresa.'</td>
	                        <td align="center">'.number_format($vehiculo->monto,2).'</td>
	                        <td align="center">'.number_format($vehiculo->gastos,2).'</td>                    
	                        <td align="center">'.$total = number_format($vehiculo->monto - $vehiculo->gastos,2).'</td>
	                        <td style="color:#F00;" align="center">'.$this->funciones->convertir_fecha($vehiculo->fechaPromesa).'</td>
	                    </tr>
	                    <div class="ot-'.$i.'"></div>
						';
					}
				?>
			</tbody>
		</table>
	</div>

</section>
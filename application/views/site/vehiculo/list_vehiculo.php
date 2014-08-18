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
					<div class="btn-group page-group">
						<a class="btn btn-default active">1</a>
						<a class="btn btn-default">2</a>
						<a class="btn btn-default">3</a>
						<a class="btn btn-default">4</a>
					</div>
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
					for($i = 0; $i < 50; $i++)
					{
						echo '
						<tr>
	                    	<td align="center">6345</td>
	                        <td align="center">DODGE</td>
	                        <td align="center">ATTITUDE</td>
	                        <td align="center">BLANCO</td>
	                        <td align="center">VALE QUALITAS VINCULO C-6175</td>
	                        <td align="center">particular</td>
	                        <td align="center">$ 1,533.00</td>
	                        <td align="center">$ 0.00</td>                    
	                        <td align="center">$ 1,533.00</td>
	                        <td style="color:#F00;" align="center">Miercoles 30 de Noviembre del -0001 a las 00 Hrs con 00 Min</td>
	                    </tr>
	                    <div class="ot-'.$i.'"></div>
						';
					}
				?>
			</tbody>
		</table>
	</div>

</section>
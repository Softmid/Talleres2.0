<section class="col-lg-12 panel-all">
	<h2>Reportes</h2>
	<div class="list">
		<div class="opcion-boton">
			<div class="object clear">
				<div class="col-lg-12 clear pad-0">
					<form class="form-inline" role="form">
						<div class="form-group">
							<div id="fecha" class="input-group">
								<input type="text" name="" id="fecha_publicacion" data-format="yyyy-MM-dd" class="form-control" value="Desde">
								<span class="input-group-addon add-on"><i class="fa fa-calendar"></i></span>
							</div>
						</div>
						<div class="form-group">
							<div id="fecha" class="input-group">
								<input type="text" name="" id="fecha_publicacion" data-format="yyyy-MM-dd" class="form-control" value="Hasta">
								<span class="input-group-addon add-on"><i class="fa fa-calendar"></i></span>
							</div>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-default">Enviar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<table class="table table-bordered">
			<thead>
				<tr class="active">
					<th>Nº</th>
					<th>Marca</th>
					<th>Modelo</th>
					<th>Color</th>
					<th>Cliente</th>
					<th>Empresa</th>
					<th>Monto</th>
					<th>Gastos</th>
					<th>Monto - Gastos</th>
					<th>Fecha Promesa</th>
				<tr>
			</thead>
			<tbody>
				<?php 
					for($i = 0; $i < 20; $i++)
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
						';
					}
				?>
			</tbody>
		</table>
	</div>
</section>
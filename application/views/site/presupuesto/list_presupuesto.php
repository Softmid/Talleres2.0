<section class="col-lg-12 panel-all">
	<h2>Presupuestos</h2>
	<div class="list">
		<div class="opcion-boton">
			<div class="object clear">
				<a href="site/agregar_presupuesto" class="btn btn-success"><i class="fa fa-flag-checkered"></i> Nuevo Presupuesto</a>
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
		<table class="table table-bordered">
			<thead>
                <tr>
                    <th width="120">Marca</th>
                    <th width="114">Modelo</th>
                    <th width="101">Color</th>
                    <th width="121">Empresa</th>
                    <th width="214">Fecha Promesa</th>
                    <th width="96">Monto</th>
               </tr>
            </thead>
			<tbody>
				<?php 
					for($i = 0; $i < 20; $i++)
					{
						echo '
						<tr>
	                        <td align="center">Ford</td>
	                        <td align="center">Topas</td>
	                        <td align="center">Blanco</td>
	                        <td align="center">particular</td>                    
	                        <td style="color:#F00;" align="center">Miercoles 30 de Noviembre del -0001 a las 00 Hrs con 00 Min</td>
	                        <td align="center">$ 3,200.00</td>
                        </tr>
						';
					}
				?>
			</tbody>
		</table>
	</div>
</section>
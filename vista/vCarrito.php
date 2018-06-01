<?php 

		if (!empty($_SESSION['usuario_nombre_completo'])) {
			$nombre_completo = $_SESSION['usuario_nombre_completo'];
		}else{
			$nombre_completo = "Invitado";
		}

?>

<?php include "includes/navegador.php" ?>

<body>

	<div class="carrito">
			<img src="../vista/img/carrito.png"  alt"" >
	</div>
	


		

	<section class="mostraralquileres">
		
		<div class="contenedor">
			<div class="mostrar">
				<h3>N°</h3>
				<label for="">-------------------------------------------FECHA DE INICIO------</label>
				<label for="">------------------------HORA DE INICIO-----</label>
				<label for="">-------------------------ESTADO------</label>
				<label for="">----------------VER PRENDAS------</label>
			</div>



			<div class="mostrar">

	<?php
				$dni = $_SESSION['usuario_dni'];
				$num_alquiler = 0;

				$query = "select * from alquiler where alquiler_usr_dni='$dni' ";
				$consultar_query = mysqli_query($conexion,$query);

				while ($row = mysqli_fetch_array($consultar_query)) {
				$num_alquiler = $num_alquiler +1;
				$alquiler_id = $row['alquiler_id'];
				$alquiler_fecha = $row['alquiler_fecha'];
				$alquiler_hora = $row['alquiler_hora'];
				$alquiler_estado = $row['alquiler_estado'];

				$query2 = "select * from alquiler_detalle where alquiler_detalle_alquiler_id=$alquiler_id ";
				$consultar_query2 = mysqli_query($conexion,$query2);

				$row2 = mysqli_fetch_array($consultar_query2);
				$monto = $row2['alquiler_detalle_monto'];
				

				$ver_prendas = <<<PRENDA
				
				<div class="datos">
						<h3>$num_alquiler</h3>
						<label for="">$alquiler_fecha</label>
						<label for="">$alquiler_hora</label>
						<label for="">$alquiler_estado</label>
						<a href="">Enviar</a>
					</div>

					<div>
						<label for="show">
	  						<span>[>]</span>
						</label>
						<input type="radio" id="show" name="group">

						<label for="hide">
				 			 <span>[<]</span>
						</label>
						<input type="radio" id="hide" name="group">

					

PRENDA;
				echo $ver_prendas;
			}


	?>

								<?php
				$num_alquiler = 0;

				$query ="select * from alquiler_detalle where alquiler_detalle_alquiler_id=$alquiler_id ";
				$consultar_query = mysqli_query($conexion,$query);

				while ($row = mysqli_fetch_array($consultar_query)) {

				$monto = $row['alquiler_detalle_monto'];
				$prenda = "carrito.png";
				

				$ver_prendas = <<<PRENDA
				
						<div id="content">
							<div class="ver">
								<div class="prenda">
									<figure>
										<img src="../vista/img/$prenda" alt="">
									</figure>
									<label for="">Precio</label>
								</div>
							</div>
							<div class="total">
								<label for="">Total: S/. $monto</label>
							</div>
						</div>

					

PRENDA;
				echo $ver_prendas;
			}


	?>
						
					</div>

					
			</div>
			
		

		</div>

	</section>
	
	<footer>
	<p>Estrellitas Milagrosas ®</p>
	
	</footer>
	</body>

</html>

<?php 

		if (!empty($_SESSION['usuario_nombre_completo'])) {
			$nombre_completo = $_SESSION['usuario_nombre_completo'];
		}else{
			$nombre_completo = "Invitado";
		}

?>

<?php include "includes/navegador.php" ?>

	<?php 


				if (isset($_GET['dniuser'])) {
					$alquiler_usr_dni = $_GET['dniuser'];

					
					$ver_ult_alquiler = "select * from alquiler where alquiler_usr_dni=$alquiler_usr_dni order by alquiler_id desc limit 1";

					$consulta_ult_alquiler = mysqli_query($conexion,$ver_ult_alquiler);

					$resp_ver_ultimo_alquiler = mysqli_fetch_array($consulta_ult_alquiler);

					$estado_ultimo_alquiler = $resp_ver_ultimo_alquiler['alquiler_estado'];


					if ($estado_ultimo_alquiler==="Creado") {
						echo "<script type='text/javascript'> alert('Debe de enviar el ultimo alquiler para crear uno nuevo.'); location.href ='../controlador/cVestido.php';</script>";
					}else{
						$query = "call registrar_alquiler('$alquiler_usr_dni')";

						$iniciar_alquiler_query = mysqli_query($conexion,$query);
						echo "<script type='text/javascript'> alert('Pedido de alquiler iniciado. Para terminar debe de ingresar al carrito xD.'); location.href ='../controlador/cVestido.php'; </script>";
					}

				}

	?>
	
	<section class="cr-container">			

	<input id="select-img-1" name="radio-set-1" type="radio" class="cr-selector-img-1" checked/>
	<label for="select-img-1" class="cr-label-img-1">1</label>

	<input id="select-img-2" name="radio-set-1" type="radio" class="cr-selector-img-2" />
	<label for="select-img-2" class="cr-label-img-2">2</label>

	<input id="select-img-3" name="radio-set-1" type="radio" class="cr-selector-img-3" />
	<label for="select-img-3" class="cr-label-img-3">3</label>

	<input id="select-img-4" name="radio-set-1" type="radio" class="cr-selector-img-4" />
	<label for="select-img-4" class="cr-label-img-4">4</label>

	<div class="clr"></div>	

	<div class="cr-bgimg">
		<div>
			<span>Slice 1 - Image 1</span>
			<span>Slice 1 - Image 2</span>
			<span>Slice 1 - Image 3</span>
			<span>Slice 1 - Image 4</span>
		</div>
		<div>
			<span>Slice 2 - Image 1</span>
			<span>Slice 2 - Image 2</span>
			<span>Slice 2 - Image 3</span>
			<span>Slice 2 - Image 4</span>
		</div>
		<div>
			<span>Slice 3 - Image 1</span>
			<span>Slice 3 - Image 2</span>
			<span>Slice 3 - Image 3</span>
			<span>Slice 3 - Image 4</span>
		</div>
		<div>
			<span>Slice 4 - Image 1</span>
			<span>Slice 4 - Image 2</span>
			<span>Slice 4 - Image 3</span>
			<span>Slice 4 - Image 4</span>
		</div>
	</div>

	<div class="cr-titles">
		<h3>
			<span>Elegante</span>
			<span>Colores de tonos oscuros</span>
		</h3>
		<h3>
			<span>Juvenil</span>
			<span>Vestidos de la ultima moda</span>
		</h3>
		<h3>
			<span>Natural</span>
			<span>Relieves de forma artesanal</span>
		</h3>
		<h3>
			<span>Comodo</span>
			<span>Materiales 100% organicos</span>
		</h3>
	</div>
</section>

<hr> </hr>



<div class="gallery">

   
	<div class="contenedor">
		<?php 
			
			$prenda_codigo = "";

			$query = "select * from prenda where prenda_tipo='zapato'";
			$verb_query = mysqli_query($conexion,$query);

			while ($row = mysqli_fetch_array($verb_query)) {
								
				$prenda_codigo = $row['prenda_codigo'];
				$prenda_tipo = $row['prenda_tipo'];
				$prenda_nombre = $row['prenda_nombre'];
				$prenda_color = $row['prenda_color'];
				$prenda_talla = $row['prenda_talla'];
				$prenda_precio_sugerido = $row['prenda_precio_sugerido'];
				$prenda_imagen = $row['prenda_imagen'];

				$ver_prendas = <<<BONOS

				<div>
					<a href="../controlador/cVestido.php?prendacodigo={$prenda_codigo}#popup1"><img id='vest01' src="../vista/img/$prenda_imagen" alt"" ></a>
				</div>
				
					

BONOS;
				echo $ver_prendas;
			}


		?>

	</div>

   

 </div>

	<?php 

		$alquiler_usr_dni = $_SESSION['usuario_dni'];

		$ver_ult_alquiler = "select * from alquiler where alquiler_usr_dni=$alquiler_usr_dni order by alquiler_id desc limit 1";


		$consulta_ult_alquiler = mysqli_query($conexion,$ver_ult_alquiler);

		$resp_ver_ultimo_alquiler = mysqli_fetch_array($consulta_ult_alquiler);

		$id_ultimo_alquiler = $resp_ver_ultimo_alquiler['alquiler_id'];

		if (isset($_GET['prendacodigo'])) {
			$codigoprenda = $_GET['prendacodigo'];

			$query = "select * from prenda where prenda_codigo='$codigoprenda'";

			$most_query = mysqli_query($conexion,$query);

			$row = mysqli_fetch_array($most_query);
								
			$prenda_codigo = $row['prenda_codigo'];
			$prenda_tipo = $row['prenda_tipo'];
			$prenda_nombre = $row['prenda_nombre'];
			$prenda_color = $row['prenda_color'];
			$prenda_talla = $row['prenda_talla'];
			$prenda_precio_sugerido = $row['prenda_precio_sugerido'];
			$prenda_imagen = $row['prenda_imagen'];
			
		}

			$query_estado_prenda = "select * from alquiler_detalle where alquiler_detalle_prenda_codigo = '$prenda_codigo' and alquiler_detalle_alquiler_id=$id_ultimo_alquiler";

			$enviar_query = mysqli_query($conexion,$query_estado_prenda);

			$rec_query_estado_prenda = mysqli_fetch_array($enviar_query);

			if (mysqli_num_rows($enviar_query)>0) {
				$est_prenda = "Prenda seleccionada";
			}else{
				$est_prenda = "Seleccionar prenda <img src='../vista/img/agregar.jpg' width='30px'></img>";
			}

			echo "<div class='modal-wrapper1' id='popup1'>
		<div class='popup-contenedor'>
				<h2>$prenda_tipo</h2>

				<img src='../vista/img/$prenda_imagen' height='300px' alt='' title='' >
				<h3>Detalles</h3>
			<nav>
				<ul>
					<li><a href = '#'>$prenda_nombre</a></li>
					<li><a href = '#'>$prenda_color</a></li>
					<li><a href = '#'>$prenda_talla</a></li>
					<li><a href = '#'>$prenda_precio_sugerido</a></li>
					<li><a href = '#'>$prenda_codigo</a></li>
				</ul>
			</nav>
				<div class='modificar'>
					
					<a href='../controlador/cVestido.php?prendascodigo={$prenda_codigo}#popup1' >$est_prenda 
					 </a>
				</div>
				<a class='popup-cerrar' href='#''>X</a>
		</div>
	</div>";




		if (isset($_GET['prendascodigo'])) {
			$prenda_codigo = $_GET['prendascodigo'];

			$query = "call registrar_alquiler_detalle($id_ultimo_alquiler,'$prenda_codigo',$prenda_precio_sugerido)";

			$enviar_query = mysqli_query($conexion,$query);
		}

	?>
	

	
<footer>
	<p>Estrellitas Milagrosas ®</p>
	
	</footer>
	
</body>
	
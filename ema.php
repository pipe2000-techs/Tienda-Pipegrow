
<?php
	// Nuestro mensaje debe ser HTML
	
	$mensaje = '
			<div class="col-sm-5 col-md-5 col-lg-3 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="100">
				<a class="block-2-item" href="tienda/semillas.php">
				  <figure class="image">
					<img src="https://www.pipegrow.co/images/semillas/semillas.jpg" width="360" height="360" alt="" class="img-fluid">
				  </figure>
				  <div class="text">
					<h3>Semillas</h3>
				  </div>
				</a>
			  </div>
	';

	// Define que será de tipo será nuestro mensaje: HTML. Y la dirección del emisor.
	$headers = [
		'MIME-Version' => '1.0',
		'Content-type' => 'text/html; charset=utf-8',
		'From' => 'tienda@pipegrow.co'
	];

	// Lo enviamos
	mail('pardodelgadotatiana@gmail.com', 'Factura', $mensaje, $headers);
?>
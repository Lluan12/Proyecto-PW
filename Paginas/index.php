<?php
	include('Includes/header.php');
?>
	<!-- PRIMER CONTENIDO -->
	<main>
		<!-- TEXTO IZQUIERDO -->
		<div class="contenido">
			<h1 class="color1">Estamos listos para</h1>
			<h1 class="color2">Ayudar a tu salud</h1>
			<h1 class="color1">y bienestar</h1>

			<p>En momentos como el actual, tu salud es muy importante, 
				especialmente porque el número de casos de COVID-19 es 
				aumentando día a día, por lo que estamos listos para ayudarte
				con tu consulta de salud</p>

				<button class="boton"><a href="#">Agenda tu cita</a></button>
		</div>
		<!-- IMAGEN DERECHA -->
		<div class="imagen">
			<!-- <div class="elemento2">
				<ul>
					<li><img src="../Imagenes/Index/img1.jpg" alt=""></li>
					<li><img src="../Imagenes/Index/img2.jpg" alt=""></li>
					<li><img src="../Imagenes/Index/img3.jpg" alt=""></li>
				</ul>
			</div> -->
			<div class="elemento"></div>
			<img src="" id="rotar" class="elemento"></a>
			<!-- <img src="Principal/Doctores con cuadro.svg" alt="Presentacion"> -->
		</div>
	</main>
	<!-- SEGUNDO CONTENIDO PARTE BAJA -->
	<div id="servicio">
		<div class="servicios">
			<h2 class="color2">Principales Servicios</h2>
			<h2 class="color1">Mas sobre nosotros</h2>
			
			<!-- CUADRO DE SERVICIOS -->
			<div class="cont_ser">

				<!-- SERVICIO 1 -->
				<a href="#">
					<section class="impar">
						<article>
							<img src="../Imagenes/Index/Servicio 1.svg" alt="Servicio 1">
						</article>
						<h3>Conoce a nuestros Doctores</h3>
						<p>Conoce al personal de salud que trabaja en nuestras instalaciones.</p>
					</section>
				</a>
				
				<!-- SERVICIO 2 -->
				<a href="#">
					<section class="par">
						<article>
							<img src="../Imagenes/Index/Servicio 2.svg" alt="Servicio 2">
						</article>
						<h3>Farmacia</h3>
						<p>Visualiza nuestros precios y existencias.</p>
					</section>
				</a>
				<!-- SERVICIO 3 -->
				<a href="#">
					<section class="impar">
						<article">
							<img src="../Imagenes/Index/Servicio 3.svg" alt="Servicio 3">
						</article>
						<h3>Saca tu Cita</h3>
						<p>Programa tu cita en nuestras intalaciones desde la comodidad de tu hogar.</p>
					</section>
				</a>
			</div>
		</div>
	</div>

<?php
	include("Includes/pie.php");
?>
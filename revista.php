<!DOCTYPE HTML>
<html lang="es">
<head>
<?php include("inc_head.php"); ?>
</head>

<body>

<!-- BANNER -->
<?php include("inc_top-banner.php"); ?>
<!-- HEADER -->
<?php include("inc_header.php"); ?>
<!-- MAIN NAV -->
<?php include("inc_nav.php"); ?>
<!-- CATEGORIA -->
<section class="Row CatHead la-revista">
	<h2>La Revista</h2>
</section>
<!-- CONTENT -->
<main class="Row">
	<div class="Wrapper">
			<article class="Row PediLaRevista">
			<h3>Suscribite a Sophia <span class="Line"></span> <span>4 ejemplares al año</span></h3>
			<div class="row">
				<div class="Modalidad">
					<figure>
						<figcaption>
							<span>Desde diciembre 2014</span><br><strong>Nueva modalidad</strong>
						</figcaption>
						<img src="images/revista/revista-clip.jpg" width="370" height="280" alt=""/>
					</figure>
					<h4><strong>4 ejemplares al año</strong></h4>
					<ul>
						<li><i class="fa fa-sun-o"></i><strong>DICIEMBRE</strong></li>
						<li><i class="fa fa-mar"></i><strong>MARZO</strong></li>
						<li><i class="fa fa-jun"></i><strong>JUNIO</strong></li>
						<li><i class="fa fa-sep"></i><strong>SEPTIEMBRE</strong></li>
					</ul>
				</div>
				<div class="Intro">
					<p class="Texto">SOPHIA es una publicación de interés general que cuestiona los estereotipos de género y propone otros modelos de mujer. SOPHIA revaloriza la sabiduría, la espiritualidad, los vínculos y los valores, a través de historias inspiradoras. SOPHIA se dirige a quienes buscan integrar su cuerpo con su alma, sin dejar de lado las ideas. Más que una revista o una plataforma digital, es una causa que necesita de todos, mujeres y varones, para crecer. Aquí encontrarás entrevistas a fondo, notas de actualidad y nuevas tendencias. ¡Sumate!</p>
					<div class="Tapa">
						<figure><a href="#"><img src="images/revista/revista-tapa.jpg" width="150" height="198" alt=""/></a></figure>
						<div class="Data">
							<h5><strong>Última Edición</strong></h5>
							<h4><strong>#154</strong><br>
								<span>Octubre 2014</span></h4>
							<a href="#" class="Lnk">Sumario</a>
							<a href="#" class="Lnk">Ediciones anteriores</a>
						</div>
					</div>
					<div class="Row">
						<div class="Precio">
							<h4><strong>$55</strong> ARS*</h4>
							<p><strong>cada ejemplar + envío</strong></p>
						</div>
						<a href="#ModalRevista" class="Btn ShowModal"><strong>¡COMPRAR AHORA!</strong></a>
						<div class="MedioPago">
							<p><em>* varía de acuerdo al precio de tapa.</em></p>
							<p><strong>Compra seguro con tu tarjeta de crédito a través de:</strong> <a href="#"><img src="images/revista/mercado-pago.png" width="94" height="23" alt=""/></a></p>
						</div>
					</div>
				</div>
			</div>
		</article>
	</div>
	<div class="Row Pedila">
		<div class="Wrapper">
			<ul>
				<li>
					<h4><i class="fa fa-caret-right"></i><strong>Recibila en tu domicilio</strong></h4>
					<p>Comprando ahora, te enviamos la revista a la <br>
					dirección que indiques dentro de Argentina. Si vivís<br> en el exterior, <a href="#">consultá las condiciones para tu país.</a></p>
				</li>
				<li>
					<h4><i class="fa fa-caret-right"></i><strong>Cancelá en cualquier momento</strong></h4>
					<p>Dale de baja a tu suscripción <a href="#">aquí</a>. No te <br>
					cobramos cargos adicionales. </p>
				</li>
				<li>
				<h4><i class="fa fa-caret-right"></i><strong>¿PREGUNTAS?</strong></h4>
					<p>Escribinos a <a href="mailto:info@vivisophia.com">info@vivisophia.com</a><br>
					o llamá al <strong>(54 11) 4833.5353.</strong><br>
					Te contactaremos dentro de las 48 hs.</p>
				</li>
			</ul>
		</div>
	</div>
	<div class="Row Pedila2">
		<p class="Wrapper">* Conseguila también kioscos de revistas de Buenos Aires y en <a href="#">puntos de distribución</a></p>
	</div>
</main>
<?php include("inc_footer.php"); ?>
<?php include("inc_foot.php"); ?>
<!-- MODAL -->
<div class="Modal" id="ModalRevista" style="display: none">
	<div class="ModalBg PedirRevista">
		<h2>Sophia</h2>
		<div class="ModalBody">
			<h3>Suscribite a La Revista</h3>
			<p>Completá el siguiente formulario, hacé click en el botón "SUSCRIBIRME" y elegí la forma de pago (los ampos marcados con "*" son obligatorios)</p>
			<form>
				<div class="FormRevista">
					<fieldset class="Column Col-1">
						<h4><strong>Datos personales</strong></h4>
						<input name="nombre" type="text" id="Nombre/s" placeholder="Nombre/s (*)" />
						<input name="apellido" type="text" id="Apellido/s" placeholder="Apellido/s (*)" />
						<input name="dni" type="text" id="DNI" placeholder="DNI" />
						<input name="tel" type="text" id="Teléfono de contacto" placeholder="Teléfono de contacto (*)" />
						<input name="email" type="text" id="Email"  placeholder="Email (*)"/>
						<input name="fecha_nac" type="text" id="Fecha de Nacimiento" placeholder="Fecha de Nacimiento (*)" />
					</fieldset>
					<fieldset class="Column Col-2">
						<h4><strong>Domicilio de entrega</strong></h4>
						<input name="calle" type="text" id="Calle" placeholder="Calle (*)" />
						<input name="numero" type="text" id="Nº" class="corto num" placeholder="Nº (*)"  />
						<input name="piso" type="text" id="Piso" class="corto" placeholder="Piso" />
						<input name="depto" type="text" id="Depto" class="corto" placeholder="Depto." />
						<input name="cp" type="text" id="Código postal" placeholder="Código postal (*)" />
						<input name="ciudad" type="text" id="Ciudad" placeholder="Ciudad/Localidad (*)" class="clear" />
						<input name="provincia" type="text" id="Provincia" placeholder="Provincia (*)"  />
						<input name="pais" type="text" id="Pais" placeholder="Pais (*)"  />
					</fieldset>
					<div class="Action">
						<input type="submit" value="Enviar">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>
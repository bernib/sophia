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
<section class="Row CatHead resultado-busqueda">
	<h2>Resultado de la búsqueda</h2>
</section>
<!-- CONTENT -->
<main class="Row">
	<div class="Row Filtro">
		<div class="Wrapper">
			<form>
				<h4>Mostrar solo resultados de: </h4>
				<ul>
					<li>
						<input name="checkbox2" type="checkbox" id="checkbox2" checked="checked">
						<label for="checkbox2">Todo el sitio</label>
					</li>
					<li>
						<input type="checkbox" name="checkbox3" id="checkbox3">
						<label for="checkbox3">Notas</label>
					</li>
					<li>
						<input type="checkbox" name="checkbox4" id="checkbox4">
						<label for="checkbox4">Blogs</label>
					</li>
					<li>
						<input type="checkbox" name="checkbox5" id="checkbox5">
						<label for="checkbox5">Entrevistas</label>
					</li>
					<li>
						<input type="checkbox" name="checkbox6" id="checkbox6">
						<label for="checkbox6">Columnistas</label>
					</li>
				</ul>
				<fieldset>
					<input name="textfield5" type="text" id="textfield5" placeholder="Nueva Búsqueda">
					<input type="submit" name="submit3" id="submit3" value="Buscar">
				</fieldset>
			</form>
		</div>
	</div>
	<div class="Row ResultadoTitle">
		<div class="Wrapper">
			<h3>Consulta: <strong>25</strong> resultados para “<strong>mujer</strong>”</h3>
		</div>
	</div>
	<section class="Row Resultados">
		<div class="Wrapper">
			<ul>
				<li>
					<h4><a href="#">Entrevista</a></h4>
					<h2><a href="#">Beatriz Sarlo</a></h2>
					<p>Por el camino de las ideas</p>
				</li>
				<li>
					<h4><a href="#">solidaridad</a></h4>
					<h2><a href="#">De Vietnam con amor</a></h2>
					<p>El peligro de las "usuras afectivas", menos visibles que las monetarias, pero igual ...</p>
				</li>
				<li>
					<h4>Por Cristina Miguens <a href="#">Punto de vista</a></h4>
					<h2><a href="#">El alma, nuestro punto de partida</a></h2>
					<p>Hace un mes estuve en Córdoba invitada por un grupo de mujeres jóvenes ...</p>
				</li>
				<li>
					<h4><a href="#">vivir bien</a></h4>
					<h2><a href="#">La cocina de Pía: El futuro en tu mesa</a></h2>
					<p>El peligro de las "usuras afectivas", menos visibles que las monetarias, pero igual ...</p>
				</li>
				<li>
					<h4><a href="#">BLOG: DESDE NUEVA YORK</a></h4>
					<h5>04.07.2014</h5>
					<h2><a href="#">Sólo para golosos</a></h2>
					<p>Tan importante como visitar los museos, recorrer sus barrios y pasear por el Central Park ...</p>
				</li>
			</ul>
		</div>
	</section>
</main>
<?php include("inc_footer.php"); ?>
<?php include("inc_foot.php"); ?>
</body>
</html>
@extends('layouts.home')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>SAPPIGO</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://bootstraptaste.com" />


</head>
<body>
<div id="wrapper">
	<!-- Aqui empieza el Menu -->
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<!-- Logo de la empresa -->
                    </button>
                    <img onclick="location.href= '/'" src="img/logos/saappigo.png" style="position: absol ute; top: 0; left: 0;" alt= " "/>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
						<li class="active"><a href="{{url('')}}">INICIO</a></li>
                        <li><a href="{{url('acerca')}}">ACERCA DE </a></li>
                        <li><a href="{{url('ayuda')}}">AYUDA</a></li>
						<li><a href="{{url('contacto')}}">CONTACTO</a></li>
						<li><a href= "{{url('login')}}">INGRESAR</a></li>
						
						
                    </ul>
                </div>
            </div>
        </div>
	</header>

		

	<!-- end header -->
	<section id="featured">
	<!-- Inicia el slider -->
	<div class="container">
		<div class="row">
			<div class="col-lg-12">

	<!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
              <li>
                <img src="img/slides/1066.jpg" alt="" />
                <div class="flex-caption">
                    <h3>Ven y visitanos</h3> 
					<p>Aquí tenemos estilos nuevos "Solo para tí"</p> 
				</div>
				</li>
			  <li>
			  <img src="img/slides/3093.jpg" alt="" />
                <div class="flex-caption">
                    <h3>No lo encontrarás a mejor precio</h3> 
					<p>Contáctanos para adquirir nuestros nuevos modelos</p> 
					
                </div>
			  </li>
			  <li>
                <img src="img/slides/fsssd.jpg" alt="" />
                <div class="flex-caption">
                    <h3>Lleva nuestros nuevos modelos de ropa aquí </h3> 
					<p>¡Porque se ajustan a la calidad y precios que necesitas!</p> 
					
                </div>
              </li>
              <li>
                <img src="img/slides/273431-P5KXK0-658.jpg" alt="" />
                <div class="flex-caption">
                    <h3>¡Ropa de calidad! </h3> 
					<p>No encontrarás este tipo de ropa con mejor calidad en otro lugar</p> 
					
                </div>
              </li>
              <li>
                <img src="img/slides/4208.jpg" alt="" />
                <div class="flex-caption">
                    <h3>¿Qué esperas tú?</h3> 
					<p>Más de 300 clientes fieles y satisfecho adquieren nuestros servicios al mes</p> 
					
                </div>
			  </li>
			  <li>
                <img src="img/slides/OGA1HN0.jpg" alt="" />
                <div class="flex-caption">
						<h3>No lo encontrarás a mejor precio</h3> 
						<p>Contáctanos para adquirir nuestros nuevos modelos</p> 
                </div>
			  </li>
			  <li>
                <img src="img/slides/15332.jpg" alt="" />
                <div class="flex-caption">
						<h3>Lleva nuestros nuevos modelos de ropa aquí </h3> 
						<p>¡Porque se ajustan a la calidad y precios que necesitas!</p> 
                </div>
              </li>
            </ul>
        </div>
	<!-- Termina el slider de imagenes -->
			</div>
		</div>
	</div>	
	

	<div class="row">
		<div class="col-lg-12">

		<!-- ROPA RETRO AQUI SE AGRAGAN LOS MODELOS DE ROPA RETRO -->
		<h2><img src="img/iconos-ropa/retro.png" alt=""> Retro</h2> <br>

		<div class="row">
			<section id="projects">
			<ul id="thumbs" class="portfolio">
				<!-- Item Project and Filter Name -->
				<li class="col-lg-3 design" data-id="id-0" data-type="web">
				<div class="item-thumbs">
				<!-- Fancybox - Gallery Enabled - Title - Full Image -->
				<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Retro" href="img/Retro/retro.jpg">
				<span class="overlay-img"></span>
				<span class="overlay-img-thumb font-icon-plus"></span>
				</a>
				<!-- Thumb Image and Description -->
				<img src="img/Retro/retro.jpg" alt=" Playera cuello mao, manga larga con botón ajustable. Cierre de botones al frente. .">
				</div>
				</li>


				<!-- End Item Project -->
				<!-- Item Project and Filter Name -->
				<li class="item-thumbs col-lg-3 design" data-id="id-1" data-type="icon">
				<!-- Fancybox - Gallery Enabled - Title - Full Image -->
				<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Retro" href="img/Retro/fallkoreanfashion.jpg">
				<span class="overlay-img"></span>
				<span class="overlay-img-thumb font-icon-plus"></span>
				</a>
				<!-- Thumb Image and Description -->
				<img src="img/Retro/fallkoreanfashion.jpg" alt="Playera cuello mao y manga larga con botón ajustable. Cierre de botones al frente.
.">
				</li>


				<!-- End Item Project -->
				<!-- Item Project and Filter Name -->
				<li class="item-thumbs col-lg-3 photography" data-id="id-2" data-type="illustrator">
				<!-- Fancybox - Gallery Enabled - Title - Full Image -->
				<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Retro" href="img/Retro/retro-hombre.jpg">
				<span class="overlay-img"></span>
				<span class="overlay-img-thumb font-icon-plus"></span>
				</a>
				<!-- Imagen y Descripcion -->
				<img src="img/Retro/retro-hombre.jpg" alt="Camisa tipo Oxford con rayas, manga corta, cuello button down y bolsillo a la altura del pecho..">
				</li>

				
				<!-- Item Project and Filter Name -->
				<li class="item-thumbs col-lg-3 photography" data-id="id-2" data-type="illustrator">
				<!-- Fancybox - Gallery Enabled - Title - Full Image -->
				<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Retro" href="img/Retro/retro-ropa.jpg">
				<span class="overlay-img"></span>
				<span class="overlay-img-thumb font-icon-plus"></span>
				</a>
				<!-- Imagen y Descripcion -->
				<img src="img/Retro/retro-ropa.jpg" alt="Camisa tipo Oxford con rayas, manga corta, cuello button down y bolsillo a la altura del pecho..">
				</li>	
			</ul>
			</section>
		</div>
	</div>
</div>

<div class="row">
			<section id="projects">
			<ul id="thumbs" class="portfolio">
				<!-- Item Project and Filter Name -->
				<li class="col-lg-3 design" data-id="id-0" data-type="web">
				<div class="item-thumbs">
				<!-- Fancybox - Gallery Enabled - Title - Full Image -->
				<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Retro" href="img/Retro/Coaches Jacket.jpg">
				<span class="overlay-img"></span>
				<span class="overlay-img-thumb font-icon-plus"></span>
				</a>
				<!-- Imagen y Descripcion -->
				<img src="img/Retro/Coaches Jacket.jpg" alt="Camisa lisa, cuello resort, cierre frontal con botones y bolsillo a la altura del pecho.
.">
				</div>
				</li>


				<!-- End Item Project -->
				<!-- Item Project and Filter Name -->
				<li class="item-thumbs col-lg-3 design" data-id="id-1" data-type="icon">
				<!-- Fancybox - Gallery Enabled - Title - Full Image -->
				<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Retro" href="img/Retro/retro-mujer.jpg">
				<span class="overlay-img"></span>
				<span class="overlay-img-thumb font-icon-plus"></span>
				</a>
				<!-- Imagen y Descripcion -->
				<img src="img/Retro/retro-mujer.jpg" alt="Camisa con roll up, cuello mao y cierre frontal abotonado..">
				</li>


				<!-- End Item Project -->
				<!-- Item Project and Filter Name -->
				<li class="item-thumbs col-lg-3 photography" data-id="id-2" data-type="illustrator">
				<!-- Fancybox - Gallery Enabled - Title - Full Image -->
				<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Retro" href="img/Retro/Floral Raglan.jpg">
				<span class="overlay-img"></span>
				<span class="overlay-img-thumb font-icon-plus"></span>
				</a>
				<!-- Imagen y Descripcion -->
				<img src="img/Retro/Floral Raglan.jpg" alt="Camisa Oxford con cuello button down y cierre frontal abotonado..">
				</li>

				<!-- End Item Project -->
				<!-- Item Project and Filter Name -->
				<li class="item-thumbs col-lg-3 photography" data-id="id-2" data-type="illustrator">
				<!-- Fancybox - Gallery Enabled - Title - Full Image -->
				<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Retro" href="img/Retro/Ropa Mujer Años 50.jpg">
				<span class="overlay-img"></span>
				<span class="overlay-img-thumb font-icon-plus"></span>
				</a>
				<!-- Imagen y Descripcion -->
				<img src="img/Retro/Ropa Mujer Años 50.jpg" alt="Vestido floreado color naranja de mujer">
				</li>	
			</ul>
			</section>
		</div>
	</div>

		 <!-- ROPA HIPPIE AQUI SE AGRAGAN LOS MODELOS DE ROPA HIPPIE -->
		<h2><img src="img/iconos-ropa/hippi.png" alt=""> Hippie</h2> <br>

		<div class="row">
			<section id="projects">
			<ul id="thumbs" class="portfolio">
				<!-- Item Project and Filter Name -->
				<li class="col-lg-3 design" data-id="id-0" data-type="web">
				<div class="item-thumbs">
				<!-- Fancybox - Gallery Enabled - Title - Full Image -->
				<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Hippie" href="img/Hippie/mujer-hippie.jpg">
				<span class="overlay-img"></span>
				<span class="overlay-img-thumb font-icon-plus"></span>
				</a>
				<!-- Imagen y Descripcion -->
				<img src="img/Hippie/mujer-hippie.jpg" alt="Conjunto hippie para mujer todo en uno">
				</div>
				</li>


				<!-- End Item Project -->
				<!-- Item Project and Filter Name -->
				<li class="item-thumbs col-lg-3 design" data-id="id-1" data-type="icon">
				<!-- Fancybox - Gallery Enabled - Title - Full Image -->
				<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Hippie" href="img/Hippie/Summer Outfit.jpg">
				<span class="overlay-img"></span>
				<span class="overlay-img-thumb font-icon-plus"></span>
				</a>
				<!-- Imagen y Descripcion -->
				<img src="img/Hippie/Summer Outfit.jpg" alt="Conjunto para mujer, blusa color cafe">
				</li>


				<!-- End Item Project -->
				<!-- Item Project and Filter Name -->
				<li class="item-thumbs col-lg-3 photography" data-id="id-2" data-type="illustrator">
				<!-- Fancybox - Gallery Enabled - Title - Full Image -->
				<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Hippie" href="img/Hippie/hippie-ropa.jpg">
				<span class="overlay-img"></span>
				<span class="overlay-img-thumb font-icon-plus"></span>
				</a>
				<!-- Imagen y Descripcion -->
				<img src="img/Hippie/hippie-ropa.jpg" alt="Conjunto color negro para mujer.">
				</li>

				<!-- End Item Project -->
				<!-- Item Project and Filter Name -->
				<li class="item-thumbs col-lg-3 photography" data-id="id-2" data-type="illustrator">
				<!-- Fancybox - Gallery Enabled - Title - Full Image -->
				<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Hippie" href="img/Hippie/hippie.jpg">
				<span class="overlay-img"></span>
				<span class="overlay-img-thumb font-icon-plus"></span>
				</a>
				<!-- Imagen y Descripcion -->
				<img src="img/Hippie/hippie.jpg" alt="Conjunto hippie para mujer y un sueter color blanco incluido.">
				</li>	
			</ul>
			</section>
		</div>
	</div>
</div>

<div class="row">
			<section id="projects">
			<ul id="thumbs" class="portfolio">
				<!-- Item Project and Filter Name -->
				<li class="col-lg-3 design" data-id="id-0" data-type="web">
				<div class="item-thumbs">
				<!-- Fancybox - Gallery Enabled - Title - Full Image -->
				<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Hippie" href="img/Hippie/summer-hippie.jpg">
				<span class="overlay-img"></span>
				<span class="overlay-img-thumb font-icon-plus"></span>
				</a>
				<!-- Imagen y Descripcion -->
				<img src="img/Hippie/summer-hippie.jpg" alt="Shorts cortos color azul para mujer..">
				</div>
				</li>


				<!-- End Item Project -->
				<!-- Item Project and Filter Name -->
				<li class="item-thumbs col-lg-3 design" data-id="id-1" data-type="icon">
				<!-- Fancybox - Gallery Enabled - Title - Full Image -->
				<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Hippie" href="img/Hippie/shorts cortos.jpg">
				<span class="overlay-img"></span>
				<span class="overlay-img-thumb font-icon-plus"></span>
				</a>
				<!-- Imagen y Descripcion -->
				<img src="img/Hippie/shorts cortos.jpg" alt="Shorts cortos color azul para mujer.">
				</li>


				<!-- End Item Project -->
				<!-- Item Project and Filter Name -->
				<li class="item-thumbs col-lg-3 photography" data-id="id-2" data-type="illustrator">
				<!-- Fancybox - Gallery Enabled - Title - Full Image -->
				<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Hippie" href="img/Hippie/hippie-hombre.jpg">
				<span class="overlay-img"></span>
				<span class="overlay-img-thumb font-icon-plus"></span>
				</a>
				<!-- Imagen y Descripcion -->
				<img src="img/Hippie/hippie-hombre.jpg" alt="Patch Jacket Hippie para hombre.">
				</li>

				<!-- End Item Project -->
				<!-- Item Project and Filter Name -->
				<li class="item-thumbs col-lg-3 photography" data-id="id-2" data-type="illustrator">
				<!-- Fancybox - Gallery Enabled - Title - Full Image -->
				<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Hippie" href="img/Hippie/Sharma cotton patch jacket.jpg">
				<span class="overlay-img"></span>
				<span class="overlay-img-thumb font-icon-plus"></span>
				</a>
				<!-- Imagen y Descripcion -->
				<img src="img/Hippie/Sharma cotton patch jacket.jpg" alt="Patch Jacket Hippie para hombre.">
				</li>	
			</ul>
			</section>
		</div>
	</div>

		<!-- ROPA ELEGANTE AQUI SE AGRAGAN LOS MODELOS DE ROPA ELEGANTE -->
		<h2><img src="img/iconos-ropa/elegante.png" alt=""> Elegante</h2> <br>

		<div class="row">
			<section id="projects">
			<ul id="thumbs" class="portfolio">
				<!-- Item Project and Filter Name -->
				<li class="col-lg-3 design" data-id="id-0" data-type="web">
				<div class="item-thumbs">
				<!-- Fancybox - Gallery Enabled - Title - Full Image -->
				<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Elegante" href="img/Elegante/Combinaciones.jpg">
				<span class="overlay-img"></span>
				<span class="overlay-img-thumb font-icon-plus"></span>
				</a>
				<!-- Thumb Image and Description -->
				<img src="img/Elegante/Combinaciones.jpg" alt="Conjunto elegante para hombre, camisa azul rey, pantalon de vestir color gris y zapatos elegantes color cafe.">
				</div>
				</li>


				<!-- End Item Project -->
				<!-- Item Project and Filter Name -->
				<li class="item-thumbs col-lg-3 design" data-id="id-1" data-type="icon">
				<!-- Fancybox - Gallery Enabled - Title - Full Image -->
				<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Elegante" href="img/Elegante/Classic outfit.jpg">
				<span class="overlay-img"></span>
				<span class="overlay-img-thumb font-icon-plus"></span>
				</a>
				<!-- Thumb Image and Description -->
				<img src="img/Elegante/Classic outfit.jpg" alt="Conjunto elegante para hombre, camisa blanca, pantalon de vestir color azul rey y zapatos elegantes color cafe..">
				</li>


				<!-- End Item Project -->
				<!-- Item Project and Filter Name -->
				<li class="item-thumbs col-lg-3 photography" data-id="id-2" data-type="illustrator">
				<!-- Fancybox - Gallery Enabled - Title - Full Image -->
				<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Elegante" href="img/Elegante/saco-elegante.jpg">
				<span class="overlay-img"></span>
				<span class="overlay-img-thumb font-icon-plus"></span>
				</a>
				<!-- Thumb Image and Description -->
				<img src="img/Elegante/saco-elegante.jpg" alt="Saco elegante color azul rey para hombre, con corbata a cuadros.">
				</li>

				<!-- End Item Project -->
				<!-- Item Project and Filter Name -->
				<li class="item-thumbs col-lg-3 photography" data-id="id-2" data-type="illustrator">
				<!-- Fancybox - Gallery Enabled - Title - Full Image -->
				<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Elegante" href="img/Elegante/saco-elegante-besh.jpg">
				<span class="overlay-img"></span>
				<span class="overlay-img-thumb font-icon-plus"></span>
				</a>
				<!-- Thumb Image and Description -->
				<img src="img/Elegante/saco-elegante-besh.jpg" alt="Saco elegante color cafe para hombre, con corbata a rayas.">
				</li>	
			</ul>
			</section>
		</div>
	</div>
</div>

<div class="row">
			<section id="projects">
			<ul id="thumbs" class="portfolio">
				<!-- Item Project and Filter Name -->
				<li class="col-lg-3 design" data-id="id-0" data-type="web">
				<div class="item-thumbs">
				<!-- Fancybox - Gallery Enabled - Title - Full Image -->
				<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Elegante" href="img/Elegante/saco-elegante-corbata.jpg">
				<span class="overlay-img"></span>
				<span class="overlay-img-thumb font-icon-plus"></span>
				</a>
				<!-- Thumb Image and Description -->
				<img src="img/Elegante/saco-elegante-corbata.jpg" alt="Saco elegante color cafe para hombre, con corbata azul.">
				</div>
				</li>


				<!-- End Item Project -->
				<!-- Item Project and Filter Name -->
				<li class="item-thumbs col-lg-3 design" data-id="id-1" data-type="icon">
				<!-- Fancybox - Gallery Enabled - Title - Full Image -->
				<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Elegante" href="img/Elegante/pantalon-elegante.jpg">
				<span class="overlay-img"></span>
				<span class="overlay-img-thumb font-icon-plus"></span>
				</a>
				<!-- Thumb Image and Description -->
				<img src="img/Elegante/pantalon-elegante.jpg" alt="Pantalon elegante color azul rey para hombre.">
				</li>


				<!-- End Item Project -->
				<!-- Item Project and Filter Name -->
				<li class="item-thumbs col-lg-3 photography" data-id="id-2" data-type="illustrator">
				<!-- Fancybox - Gallery Enabled - Title - Full Image -->
				<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Elegante" href="img/Elegante/Trousers in Black.jpg">
				<span class="overlay-img"></span>
				<span class="overlay-img-thumb font-icon-plus"></span>
				</a>
				<!-- Thumb Image and Description -->
				<img src="img/Elegante/Trousers in Black.jpg" alt="Jeans elegante color negro para hombre..">
				</li>

				<!-- End Item Project -->
				<!-- Item Project and Filter Name -->
				<li class="item-thumbs col-lg-3 photography" data-id="id-2" data-type="illustrator">
				<!-- Fancybox - Gallery Enabled - Title - Full Image -->
				<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Elegante" href="img/Elegante/MensJeans.jpg">
				<span class="overlay-img"></span>
				<span class="overlay-img-thumb font-icon-plus"></span>
				</a>
				<!-- Thumb Image and Description -->
				<img src="img/Elegante/MensJeans.jpg" alt="Jeans elegante color negro rey para hombre..">
				</li>	
			</ul>
			</section>
		</div>
	</div>

		 <!-- ROPA CASUAL AQUI SE AGRAGAN LOS MODELOS DE ROPA CASUAL -->
		<h2><img src="img/iconos-ropa/Casual.png" alt=""> Casual</h2> <br>

		<div class="row">
				<section id="projects">
				<ul id="thumbs" class="portfolio">
					<!-- Item Project and Filter Name -->
					<li class="col-lg-3 design" data-id="id-0" data-type="web">
					<div class="item-thumbs">
					<!-- Fancybox - Gallery Enabled - Title - Full Image -->
					<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Casual" href="img/Casual/ropa-casual.jpg">
					<span class="overlay-img"></span>
					<span class="overlay-img-thumb font-icon-plus"></span>
					</a>
					<!-- Thumb Image and Description -->
					<img src="img/Casual/ropa-casual.jpg" alt="Conjunto casual para hombre diferentes colores.">
					</div>
					</li>


					<!-- End Item Project -->
					<!-- Item Project and Filter Name -->
					<li class="item-thumbs col-lg-3 design" data-id="id-1" data-type="icon">
					<!-- Fancybox - Gallery Enabled - Title - Full Image -->
					<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Casual" href="img/Casual/casual jeans camisa gris chaqueta cuero.jpg">
					<span class="overlay-img"></span>
					<span class="overlay-img-thumb font-icon-plus"></span>
					</a>
					<!-- Thumb Image and Description -->
					<img src="img/Casual/casual jeans camisa gris chaqueta cuero.jpg" alt="Conjunto para hombre jeans, camisa gris, chaqueta de cuero">
					</li>


					<!-- End Item Project -->
					<!-- Item Project and Filter Name -->
					<li class="item-thumbs col-lg-3 photography" data-id="id-2" data-type="illustrator">
					<!-- Fancybox - Gallery Enabled - Title - Full Image -->
					<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Casual" href="img/Casual/casual layers.jpg">
					<span class="overlay-img"></span>
					<span class="overlay-img-thumb font-icon-plus"></span>
					</a>
					<!-- Thumb Image and Description -->
					<img src="img/Casual/casual layers.jpg" alt="Layes color cafe para hombre..">
					</li>

					<!-- End Item Project -->
					<!-- Item Project and Filter Name -->
					<li class="item-thumbs col-lg-3 photography" data-id="id-2" data-type="illustrator">
					<!-- Fancybox - Gallery Enabled - Title - Full Image -->
					<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Casual" href="img/Casual/casual2.jpg">
					<span class="overlay-img"></span>
					<span class="overlay-img-thumb font-icon-plus"></span>
					</a>
					<!-- Thumb Image and Description -->
					<img src="img/Casual/casual2.jpg" alt="Conjunto casual para hombre...">
					</li>	
				</ul>
				</section>
			</div>
		</div>
	</div>

	<div class="row">
				<section id="projects">
				<ul id="thumbs" class="portfolio">
					<!-- Item Project and Filter Name -->
					<li class="col-lg-3 design" data-id="id-0" data-type="web">
					<div class="item-thumbs">
					<!-- Fancybox - Gallery Enabled - Title - Full Image -->
					<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Casual" href="img/Casual/Pants canvas stretch.jpg">
					<span class="overlay-img"></span>
					<span class="overlay-img-thumb font-icon-plus"></span>
					</a>
					<!-- Thumb Image and Description -->
					<img src="img/Casual/Pants canvas stretch.jpg" alt="Pants Canvas stretch casual para hombre">
					</div>
					</li>


					<!-- End Item Project -->
					<!-- Item Project and Filter Name -->
					<li class="item-thumbs col-lg-3 design" data-id="id-1" data-type="icon">
					<!-- Fancybox - Gallery Enabled - Title - Full Image -->
					<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Casual" href="img/Casual/New fresh grids.jpg">
					<span class="overlay-img"></span>
					<span class="overlay-img-thumb font-icon-plus"></span>
					</a>
					<!-- Thumb Image and Description -->
					<img src="img/Casual/New fresh grids.jpg" alt="Conjunto casual para hombre camisa a cuadros, pantalon gris.">
					</li>


					<!-- End Item Project -->
					<!-- Item Project and Filter Name -->
					<li class="item-thumbs col-lg-3 photography" data-id="id-2" data-type="illustrator">
					<!-- Fancybox - Gallery Enabled - Title - Full Image -->
					<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Casual" href="img/Casual/snekers.jpg">
					<span class="overlay-img"></span>
					<span class="overlay-img-thumb font-icon-plus"></span>
					</a>
					<!-- Thumb Image and Description -->
					<img src="img/Casual/snekers.jpg" alt="Conjunto casual para hombre camisa a cuadros, pantalon cafe...">
					</li>

					<!-- End Item Project -->
					<!-- Item Project and Filter Name -->
					<li class="item-thumbs col-lg-3 photography" data-id="id-2" data-type="illustrator">
					<!-- Fancybox - Gallery Enabled - Title - Full Image -->
					<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Casual" href="img/Casual/zapatos Blancos.jpg">
					<span class="overlay-img"></span>
					<span class="overlay-img-thumb font-icon-plus"></span>
					</a>
					<!-- Thumb Image and Description -->
					<img src="img/Casual/zapatos Blancos.jpg" alt="Conjunto casual para hombre camisa a cuadros, pantalon negro..">
					</li>	
				</ul>
				</section>
			</div>
		</div>

		<!-- ROPA SPORTS AQUI SE AGRAGAN LOS MODELOS DE ROPA SPORTS -->
		<h2><img src="img/iconos-ropa/leggings2.png" alt=""> Sports</h2>
		
			
			<div class="row">
				<section id="projects">
				<ul id="thumbs" class="portfolio">
					<!-- Item Project and Filter Name -->
					<li class="col-lg-3 design" data-id="id-0" data-type="web">
					<div class="item-thumbs">
					<!-- Fancybox - Gallery Enabled - Title - Full Image -->
					<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Sports" href="img/Sport/sport2.jpg">
					<span class="overlay-img"></span>
					<span class="overlay-img-thumb font-icon-plus"></span>
					</a>
					<!-- Thumb Image and Description -->
					<img src="img/Sport/sport2.jpg" alt="Pants color gris para hombre...">
					</div>
					</li>


					<!-- End Item Project -->
					<!-- Item Project and Filter Name -->
					<li class="item-thumbs col-lg-3 design" data-id="id-1" data-type="icon">
					<!-- Fancybox - Gallery Enabled - Title - Full Image -->
					<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Sports" href="img/Sport/sport3.jpg">
					<span class="overlay-img"></span>
					<span class="overlay-img-thumb font-icon-plus"></span>
					</a>
					<!-- Thumb Image and Description -->
					<img src="img/Sport/sport3.jpg" alt="Short negro sport para hombre.">
					</li>


					<!-- End Item Project -->
					<!-- Item Project and Filter Name -->
					<li class="item-thumbs col-lg-3 photography" data-id="id-2" data-type="illustrator">
					<!-- Fancybox - Gallery Enabled - Title - Full Image -->
					<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Sports" href="img/Sport/Sudadera Jack.jpg">
					<span class="overlay-img"></span>
					<span class="overlay-img-thumb font-icon-plus"></span>
					</a>
					<!-- Thumb Image and Description -->
					<img src="img/Sport/Sudadera Jack.jpg" alt="Sudadera negra con anaranjado para hombre..">
					</li>

					<!-- End Item Project -->
					<!-- Item Project and Filter Name -->
					<li class="item-thumbs col-lg-3 photography" data-id="id-2" data-type="illustrator">
					<!-- Fancybox - Gallery Enabled - Title - Full Image -->
					<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Sports" href="img/Sport/t shirt men casual algodón de manga larga camiseta aptitud camiseta sudadera deportiva.jpg">
					<span class="overlay-img"></span>
					<span class="overlay-img-thumb font-icon-plus"></span>
					</a>
					<!-- Imagen y Descripcion -->
					<img src="img/Sport/t shirt men casual algodón de manga larga camiseta aptitud camiseta sudadera deportiva.jpg" alt="T-shirt para hombre casual algodón de manga larga camiseta aptitud camiseta sudadera deportiva.">
					</li>	
				</ul>
				</section>
			</div>
		</div>
	</div>

	<div class="row">
				<section id="projects">
				<ul id="thumbs" class="portfolio">
					<!-- Item Project and Filter Name -->
					<li class="col-lg-3 design" data-id="id-0" data-type="web">
					<div class="item-thumbs">
					<!-- Fancybox - Gallery Enabled - Title - Full Image -->
					<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Sports" href="img/Sport/Casual Slim Fit Shirt 3 Color Long Sleeve Round Neck T-Shirt Tops Tee.jpg">
					<span class="overlay-img"></span>
					<span class="overlay-img-thumb font-icon-plus"></span>
					</a>
					<!-- Imagen y Descripcion -->
					<img src="img/Sport/Casual Slim Fit Shirt 3 Color Long Sleeve Round Neck T-Shirt Tops Tee.jpg" alt="Slim fit para hombre varios colores.">
					</div>
					</li>


					<!-- End Item Project -->
					<!-- Item Project and Filter Name -->
					<li class="item-thumbs col-lg-3 design" data-id="id-1" data-type="icon">
					<!-- Fancybox - Gallery Enabled - Title - Full Image -->
					<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Sports" href="img/Sport/Men's pants.jpg">
					<span class="overlay-img"></span>
					<span class="overlay-img-thumb font-icon-plus"></span>
					</a>
					<!-- Imagen y Descripcion -->
					<img src="img/Sport/Men's pants.jpg" alt="Pants deportivos color negro para hombre.">
					</li>


					<!-- End Item Project -->
					<!-- Item Project and Filter Name -->
					<li class="item-thumbs col-lg-3 photography" data-id="id-2" data-type="illustrator">
					<!-- Fancybox - Gallery Enabled - Title - Full Image -->
					<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Sports" href="img/Sport/Multicolor Panel Round Neck Long Sleeves T-Shirt - BLACK.jpg">
					<span class="overlay-img"></span>
					<span class="overlay-img-thumb font-icon-plus"></span>
					</a>
					<!-- Imagen y Descripcion -->
					<img src="img/Sport/Multicolor Panel Round Neck Long Sleeves T-Shirt - BLACK.jpg" alt="Multicolor sudadera sport para hombre.">
					</li>

					<!-- End Item Project -->
					<!-- Item Project and Filter Name -->
					<li class="item-thumbs col-lg-3 photography" data-id="id-2" data-type="illustrator">
					<!-- Fancybox - Gallery Enabled - Title - Full Image -->
					<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Sports" href="img/Sport/Tazzio - Cárdigan - Asimétrico2.jpg">
					<span class="overlay-img"></span>
					<span class="overlay-img-thumb font-icon-plus"></span>
					</a>
					<!-- Imagen y Descripcion -->
					<img src="img/Sport/Tazzio - Cárdigan - Asimétrico2.jpg" alt="Tazzio - Cárdigan - Asimétrico para hombre.">
					</li>	
				</ul>
				</section>
			</div>
		</div>
	</div>

</div>
</section>
<footer>
	<!-- Informaciòn de nosotros -->
		<div class="container">
				<div class="row">
					<div class="col-lg-3">
						<div class="widget">
							<h5 class="widgetheading">SAPPIGO</h5>
							<address>
							<strong>¡Aquí encontraras lo que buscabas!</strong><br>
							 Revisa los nuevos modelos de ropa que ofrecemos<br>
							 Todo lo que buscas a un buen precio </address>
							<p>
								<img src="img/iconos-ropa/icons8-volumen-del-timbre-25.png"></i> Contactanos: <br> (123) 555-9876 <br>
								<img src= "img/iconos-ropa/icons8-whatsapp-25.png"> Envianos un Whatsapp: <br> (+52) 9982345675 <br>
								<img src= "img/iconos-ropa/icons8-email-25.png"></i> Envianos un correo: <br> contacto@SAPPIGO.com.mx
							</p>
						</div>
					</div>
					<!-- Mapa de sitio -->
					<div class="col-lg-3">
						<div class="widget">
							<h5 class="widgetheading">Mapa de sitio</h5>
							<ul class="link-list">
							<li class="active"><a href="{{url('')}}">INICIO</a></li>
                            <li><a href="{{url('acerca')}}">ACERCA DE </a></li>
                           <li><a href="{{url('ayuda')}}">AYUDA</a></li>
						   <li><a href="{{url('contacto')}}">CONTACTO</a></li>
						   <li><a href= "{{url('login')}}">INGRESAR</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3">
						
					</div>
					
					</div>
				</div>
			</div>
			<div id="sub-footer">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="copyright">
								<p>
									<span>&copy; SAPPIGO es un sitio reservado.</a>
								</p>
							</div>
						</div>
						<div class="col-lg-6">
							<ul class="social-network">
								<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
								<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

</body>
</html>

@endsection
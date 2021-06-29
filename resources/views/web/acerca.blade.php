@extends('layouts.about')

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

	<!-- start header -->
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
					<img onclick="location.href= '/'" src="img/logos/saappigo.png" style="position: absol ute; top: 0; left: 0;" alt= " "/>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li ><a href="{{url('')}}">INICIO</a></li>
                        <li class="active" ><a href="{{url('acerca')}}">ACERCA DE </a></li>
                        <li><a href="{{url('ayuda')}}">AYUDA</a></li>
						<li><a href="{{url('contacto')}}">CONTACTO</a></li>
						<li><a href= "{{url('login')}}">INGRESAR</a></li>
						
                    </ul>
                </div>
            </div>
        </div>
	</header>

	
		
	<CENTER><h1>Linea del tiempo de la empresa</h1> </CENTER>
			<div class="tab-main mx-auto">
					
				<input id="tab1" type="radio" name="tabs" class="w3layouts-sm" checked>
				
				
						
				<section id="content1" class="inner-w3layouts-wrap">
					
					<img src="img/acerca/273431-P5KXK0-658.jpg" class="admin img-fluid" alt="mobile-image">
					<h1>2013 - 2019</h1>
					<h3>INICIO DE LA EMPRESA</h3>
					<h2>AppInventory inicio sus actividades en el 2013, por lo cual ya cuenta con 6 años de presencia y trayectoria en el mercado</h2>
					<br>
					<br>
					<br>
					<br>
					
					<img src="img/acerca/3093.jpg" class="admin img-fluid" alt="mobile-image">
					<h1>Enero 2014</h1>
					<h3>NACE LA PRIMERA EMPRESA</h3>
					<h2>Gracias a los primeros trabajos y el aumento de los clientes se abrio la primera empresa en donde brindabamos nuevos modelos a los clientes</h2>
					<br>
					<br>
					<br>
					<br>

				    <img src="img/acerca/inicio-empresa.jpg" class="admin img-fluid" alt="mobile-image">
					<h1>Marzo 2014</h1>
					<h3>TRANSFORMACIÓN A UN MEJOR DISEÑO DE LA TIENDA</h3>
					<h2>La empresa dió un giro radical, abrio nuevos tiendas con nuevos articulos y modelos de ropa</h2>
					<br>
					<br>
					<br>
					<br>

					<img src="img/acerca/1066.jpg" class="admin img-fluid" alt="mobile-image">
					<h1>Junio 2016</h1>
					<h3>EXPANCIÓN DE LA EMPRESA</h3>
					<h2>Gracias al esfuerzo, desempeño de nuestros trabajores y la confianza de nuestros clientes pudimos abrir dos empresas mas al norte y el sur del pais</h2>
					
				
				</section>


</body>
</html>
@endsection
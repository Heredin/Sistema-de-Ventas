@extends('layouts.contact')

@section('content')


<!DOCTYPE HTML>
<html>

<html lang="en">
<head>
	<meta charset="utf-8">
		<title>SAPPIGO</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="description" content="" />
		<meta name="author" content="http://bootstraptaste.com" />
				
<head>
<title>Curved Contact Form Responsive Widget Template :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Curved Contact Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs Sign up Web Templates, 
 Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->

<!--fonts--> 
<link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
<!--//fonts--> 
</head>
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
				        <li><a href="{{url('')}}">INICIO</a></li>
                        <li><a href="{{url('acerca')}}">ACERCA DE </a></li>
                        <li><a href="{{url('ayuda')}}">AYUDA</a></li>
						<li class="active"><a href="{{url('contacto')}}">CONTACTO</a></li>
						<li><a href= "{{url('login')}}">INGRESAR</a></li>

				</ul>
			</div>
		</div>
	</div>
</header>
<!-- end header -->
<body>
<!--background-->
<!-- login -->




<h1>Contáctanos</h1>
	        <div class="login-w3l">	
			<div class="top-img-agileits-w3layouts">
				<h2>Rellene el siguiente formulario para sabar más sobre nosotros</h2>
				<div class="login-form">	
				<form action="enviar.php" method="post">
		            <h2>Nombre:</h2>
					<input type="text" name="nombre" placeholder="Nombre" required />
					<h2>Apellido:</h2>
					<input type="text" name="apellido" placeholder="Apellido" required />
					<h2>Correo:</h2>
					<input type="email" name="email" placeholder="Correo" required />
					@if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
								@endif
								
					<h2>Mensaje:</h2>
					<textarea name="mensaje" placeholder="Mensaje" required></textarea>
					<input type="submit" value="Enviar"><br>
					<input type="reset" value="Limpiar">
					

					<h2><br> Contáctanos: (+52) 9982345675 - (123) 555-9876 </h2>
						
				</form>	
			</div>
			</div>	
			
			
		
</body>
</html>
@endsection
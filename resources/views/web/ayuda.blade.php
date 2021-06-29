
@extends('layouts.help')

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

	<!-- BARRA DE MENU -->
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
                        <li class="active"><a href="{{url('ayuda')}}">AYUDA</a></li>
						<li><a href="{{url('contacto')}}">CONTACTO</a></li>
						<li><a href= "{{url('login')}}">INGRESAR</a></li>
						
                    </ul>
                </div>
            </div>
        </div>
	</header>
	<!-- end header -->

	<center>
	<h1>
		AYUDA PARA LOS USUARIOS:
		 
	  </h1>

	  <div class="home-content__buttons">
		  <h2>¿Quiéres saber que ofrecemos? 
	  <br>
			  Dale click en el botón "Inicio".
		  </h2>
	  
		  <button  class="button" onclick="location.href= '/'"> Inicio </button> 
	  
	  <br>
		  <h2>¿Quiéres saber más sobre nosotros? 
	  <br>
			  Dale click en el botón "Acerca de".
		  </h2>
	  
		  <button  class="button" onclick="location.href= '/acerca'"> Acerca de </button> 

	  <br>
			
	  
	  <h2>¿Quiéres contactarnos? 
	  <br>
		 1. Dale click en el botón "Contáctanos".
	  <br>
		 2. Llena todos los campos "Todos los campos son necesarios".
	  <br>
		 3. Dale click en el bóton "ENVIAR".
	  <br>
		 4. ¿No estas de acuerdo con los datos que pusiste? Dale click al botón <br>"Limpiar" y se limpiaran los campos.


		 </h2>
		 
		 <button  class="button" onclick="location.href= '/contacto'"> Contacto </button> 
		
		<h2>¿Quiéres registrarte? 
	<br>
		1. Dale click en el botón "Ingresar".
	<br>
	    2. Llena todos los campos "Todos los campos son necesarios".
	<br>
		3. Dale click en el bóton "Ingresar".
	<br>
							
	   </h2>
									
	   <button  class="button" onclick="location.href= '/login'"> Ingresar </button> 
		</center>

	  </div>

<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

</body>
</html>
@endsection
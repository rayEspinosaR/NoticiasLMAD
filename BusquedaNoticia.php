<html lang="es">
	<head>
		<title>Busqueda Noticias</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" media="all" href="css/IndexPlantilla.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/style.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/Acordion.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/buttons.css"> 
		<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
		<script type="text/javascript" src="js/buttons.js"></script>
		<script src="js/jquery.js"></script>
		<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
		<script src="js/Acordion.js" type="text/javascript"></script>
		
		<script >
			$(document).ready(function()
			{
				$('#nav li').hover(function()
				{
					$(this).find('#subnav').fadeIn(400);

				},function()
				{
					$(this).find('#subnav').fadeOut(100);
				});
			});
		</script>

	</head>
	<body id="BsqNoticias">
		<div class="logo">
			<div class="Login">				
					<form id="form" name="form" method="POST">						
						<label class="loginText">Email</label>
						<input type="text" name="email" id="name" class="loginInput" placeholder="Email" />
						<label class="loginText">Password</label>
						<input type="password" name="pass" id="pass" class="loginInput" placeholder="Password" />				
						<div class="botones">
							<button type="submit" class="Boton" >Sign In</button>
							<button type="submit" class="BotonRegis" >Registrate!</button>
						</div>
					</form>			
			</div>
		</div><!-- Logo Encabezado -->
		<br>
		<div class="container">
			<div>
			    <ul id="nav">
			        <li class="currentDos"><a href="#">Inicio</a></li>
			        <li><a href="#">Local</a>
			            <ul id="subnav">
			                <li><a href="#">Elemento 1</a></li>
			                <li><a href="#">Elemento 2</a></li>
			                <li><a href="#">Elemento 3</a></li>		                
			            </ul>
			        </li>
	        		<li><a href="#">Internacional</a>
	        			<ul id="subnav">
			                <li><a href="#">Elemento 1</a></li>
			                <li><a href="#">Elemento 2</a></li>
			                <li><a href="#">Elemento 3</a></li>		                
			            </ul>
	        		</li>
	        		<li><a href="#">Contactanos</a></li>
	        		<li><input type="text" name="busqueda" id="search" placeholder="Buscar" /></li>
	    		</ul>	    		
			</div>
			<div id="accordion-container"> 
     			<h2 class="accordion-header">Titulo Noticia 1</h2> 
     			<div class="accordion-content"> 
          			<p>Contenido 1</p> 
     			</div> 
     			<h2 class="accordion-header">Titulo Noticia 2</h2> 
     			<div class="accordion-content"> 
          			<p>Contenido 2</p> 
     			</div> 
			</div><!--DIV ACORDEON-->
		</div><!--Conainer-->
		<div class="PiePagina"></div><!--Pie de Pagina-->
	</body>
</html>
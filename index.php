<html lang="es">
	<head>
		<title>Noticia LMAD</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" media="all" href="css/IndexPlantilla.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/NoticiaDetalle.css">	
		<link rel="stylesheet" type="text/css" media="all" href="css/FormularioEstilo.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/style.css">
		<link rel="stylesheet" href="css/demo.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/buttons.css"> 

		<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  		<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
		<script type="text/javascript" src="js/buttons.js"></script>		
		<script src="js/jquery.js"></script>

		<script>!window.jQuery && document.write(unescape('%3Cscript src="jquery-1.7.1.min.js"%3E%3C/script%3E'))</script>
		<script type="text/javascript" src="js/demo.js"></script>

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
	<body>
		<div class="logo">
			<div class="Login">				
					<form id="form" name="form" method="POST">						
						<label class="loginText">Email</label>
						<input type="text" name="email" id="name" class="loginInput" placeholder="Email" />
						<label class="loginText">Password</label>
						<input type="password" name="pass" id="pass" class="loginInput" placeholder="Password" />				
						<div class="botones">
							<button type="submit" class="Boton" id="btnLogin" >Sign In</button>
							<!--<a href="#"><button type="submit" class="BotonRegis" id="btnRegistro">Registrate!</button></a>-->
							<input type="button" value="Registrate" class="button" data-type="zoomout" />
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
			<div  class="noticia-principal">
				<div class="titulonoticia">Aqui va el Titulo de la Noticia Principal Local.</div><!--TituloNoticia-->
				<p class="descripcionbreve">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.
				<a href="#" id="linkDesc">Link Descripcion</a>
				</p>
    			<img class="imgnoticia" src="images/defaultimg.png" alt="defaultimg.png">
			</div><!--Noticia Principal Local-->

			<div  class="noticia-principal">
				<div class="titulonoticia">Aqui Va el Titulo Noticia Local o Internacional.</div><!--TituloNoticiaInternaiconak-->
				<p class="descripcionbreve">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.
				<a href="#" id="linkDesc">Link Descripcion</a>
				</p>
    			<img class="imgnoticia" src="images/defaultimg.png" alt="defaultimg.png">
			</div><!--Noticia Principal Nacional o Internacional-->					
			<div class="noticiasmasvistas">
			    <h5 class="titulonoticia">Clima</h5>
			    <p class="descripcionclima">Me gustaria que aqui fuera como que el clima o no se algo asi lo puse de mientras nada mas.</p>
			</div><!-- Clima -->
			<br>			
			<div class="ColumnaNoticias">
				<div class="NoticiasRelevantes"  >
					<h5>Noticias Mas Actuales</h5>
						<ul>							
							<li><a href="#">Primer Noticia</a></li>
							<li><a href="#">segunda noticia</a></li>
							<li><a href="#">tercera Noticia</a></li>
							<li><a href="#">cuarta Noticia</a></li>
							<li><a href="#">quinta noticia</a></li>
							<li><a href="#">sexta noticia</a></li>
							<li><a href="#">septima noticia</a></li>
						</ul>
				</div><!--Noticias Mas Vistas Dinamicamente-->
				<div class="NoticiasRelevantes" align="center">
					<h5>Noticias Mas Comentadas</h5>
						<ul>							
							<li><a href="#">Primer Noticia</a></li>
							<li><a href="#">segunda noticia</a></li>
							<li><a href="#">tercera Noticia</a></li>
							<li><a href="#">cuarta Noticia</a></li>
							<li><a href="#">quinta noticia</a></li>
							<li><a href="#">sexta noticia</a></li>
							<li><a href="#">septima noticia</a></li>
						</ul>
				</div><!--Noticias Deportes Dinamicamente-->
				<div class="NoticiasRelevantes">
					<h5>Noticias Mas Vistas</h5>
						<ul>							
							<li><a href="#">Primer Noticia</a></li>
							<li><a href="#">segunda noticia</a></li>
							<li><a href="#">tercera Noticia</a></li>
							<li><a href="#">cuarta Noticia</a></li>
							<li><a href="#">quinta noticia</a></li>
							<li><a href="#">sexta noticia</a></li>
							<li><a href="#">septima noticia</a></li>
						</ul>
				</div><!--Noticias Espectaculos Dinamicamente-->				
			</div><!--Noticias Principales Dinamicamente-->			
			<!--***************POP UP******************-->
			<div class="overlay-container">
				<div class="window-container zoomout">
					<fieldset id="formulario">
						<form id="form" name="form">
							<h1>Registrate Es Gratis!</h1>
							<label>Nombre
								<span class="detalle">Ingrese su nombre</span>
							</label>
							<input type="text" name="name" id="name" />

							<label>Apellido
								<span class="detalle">Ingrese su apellido</span>
							</label>
							<input type="text" name="apellido" id="apellido" />
							<label>Email
								<span class="detalle">Ingrese su email</span>
							</label>
							<input type="text" name="email" id="email" />
							<label>Password
								<span class="detalle">Ingrese su passworrd</span>
							</label>
							<input type="password" name="pass" id="pass" />						
							<button type="submit">Aceptar</button>
						</form>
					</fieldset>
					<span class="close">Cerrar</span>
				</div>	
		</div><!--Conainer-->
		<div class="PiePagina"></div><!--Pie de Pagina-->
	</body>
</html>
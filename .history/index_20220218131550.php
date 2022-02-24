<!DOCTYPE html>
<html>
	<head>
		<title>Formulario de login</title>
		<meta charset = "UTF-8">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link rel="stylesheet" href="./scss/style.scss">	
		<script type = "text/javascript" src = "js/cargarDatos.js"></script>		
		<script type = "text/javascript" src = "js/sesion.js"></script>		
		<script src = "js/index.js"> </script>	
		<script src = "js/header.js"> </script>	
		<script src = "js/footer.js"> </script>	
		
	</head>	
	<body>		
		<header-component></header-component>
		<section id = "login">
			<form onsubmit="return login()" method = "POST">
				Usuario	<input id = "usuario" type = "text">			
				Clave	<input id = "clave" type = "password">					
				<input type = "submit">
			</form>
		</section>
		<section id = "principal" style="display:none">
			<header>
				<?php require 'cabecera_json.php' ?>
			</header>
			<h2 id = "titulo"></h2>
			<section id = "contenido">			
			</section>			
		</section>	
		<footer-component></footer-component>
	</body>
</html>

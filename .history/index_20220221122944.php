<!DOCTYPE html>
<html>
	<head>
		<title>Sistema de Pedidos On-Line</title>
		<meta charset = "UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link rel="stylesheet" href="/scss/style.scss">
    <link rel="icon" type="image/jpg" href="https://cdn-icons-png.flaticon.com/512/603/603839.png"/>
		<script type = "text/javascript" src = "js/cargarDatos.js"></script>		
		<script type = "text/javascript" src = "js/sesion.js"></script>	
		<script src="js/header.js" type="text/javascript" defer></script>
    	<script src="js/footer.js" type="text/javascript" defer></script>	
		<style>
			.footer {
				margin-top:0;
			}
		</style>
	</head>	
	<body>	
	<header-component></header-component>
  <br><br>
		<main class="container text-center" >
		<section id = "login">
    <form >
    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-chat-heart-fill" viewBox="0 0 16 16">
  <path d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9.06 9.06 0 0 0 8 15Zm0-9.007c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z"/>
</svg>
<br>
    <h1 class="h3 mb-3 fw-normal">Sistema de Pedidos On-Line</h1>

    <div class="input-group mb-3" >
  <div class="input-group-prepend"width="30px">
    <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-envelope-heart" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l3.235 1.94a2.76 2.76 0 0 0-.233 1.027L1 5.384v5.721l3.453-2.124c.146.277.329.556.55.835l-3.97 2.443A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741l-3.968-2.442c.22-.28.403-.56.55-.836L15 11.105V5.383l-3.002 1.801a2.76 2.76 0 0 0-.233-1.026L15 4.217V4a1 1 0 0 0-1-1H2Zm6 2.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z"/>
</svg></span>
  </div>
  <input type="text" class="form-control" placeholder="Correo electrónico" aria-label="Correo electrónico" aria-describedby="basic-addon1">
</div>
  
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
  <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
</svg></span>
  </div>
  <input type="text" class="form-control" placeholder="Contraseña" aria-label="Contraseña" aria-describedby="basic-addon1">
</div>
    
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Recuérdame
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Iniciar sesión</button>
    
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
		</main>	
		<div class="footer">
		<footer-component></footer-component>
		</div>
	</body>

</html>


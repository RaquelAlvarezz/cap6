<!DOCTYPE html>
<html>
	<head>
		<title>Formulario de login</title>
		<meta charset = "UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link rel="stylesheet" href="/scss/style.scss">
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
		<main class="container text-center">
		<section id = "login">
    <form>
    <img class="mb-4" src="https://cdn-icons-png.flaticon.com/512/295/295128.png" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">© 2017–2021</p>
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


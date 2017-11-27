<!DOCTYPE HTML>

<html>
	<head>
		<title>INOVA ENERGIA</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<link rel="shortcut icon" href="images/favicon.png">
	</head>
	<body class="is-loading">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<section id="main">
						<header>
							<span><img src="images/logocompleto.png" width="160" alt="" /></span>
							<!-- <h1>INOVA ENERGIA SOLAR</h1>
							<p>Senior Psychonautics Engineer</p> -->
							<!-- <?php
							@$response = $_GET['email'];
							switch ($response) {
								case 'success':
									# code...
									echo "<p>Email enviado com sucesso.</p>";
									break;
								case 'fail':
									# code...
									echo "<p>Não foi possível enviar o email.</p>";
									break;
								case 'incompleto':
									# code...
									echo "<p>Não foi possível enviar o email! Dados incompletos.</p>";
									break;

								default:
									
									# code...
									break;
							}
							$response = "";

							 ?> -->
						</header>

						<hr />
						<h2>Entre em contato</h2>
						<form method="post" action="https://inovaenergia.com.br/email.php">
							<div class="field">
								<input type="text" name="name" id="name" placeholder="Nome" />
							</div>
							<div class="field">
								<input type="email" name="email" id="email" placeholder="Email" />
							</div>
							<div class="field">
								<input type="text" name="fone" id="fone" placeholder="Telefone" />
							</div>
							<!-- <div class="field">
								<div class="select-wrapper">
									<select name="department" id="department">
										<option value="">Departamento</option>
										<option value="VENDAS">Vendas</option>
										<option value="TECNICO">Suporte Técnico</option>
										<option value="CONSULTORIA">Consultoria</option>
									</select>
								</div>
							</div> -->
							<div class="field">
								<textarea name="message" id="message" placeholder="Mensagem" rows="4"></textarea>
							</div>
							<!-- <div class="field">
								<input type="checkbox" id="human" name="human" /><label for="human">I'm a human</label>
							</div> -->
							<div class="field">
								<label>Você já é cliente?
								<input type="radio" id="client_yes" name="client" value="CLIENTE"/><label for="client_yes">Sim</label>
								<input type="radio" id="client_no" name="client" value="NOVO CLIENTE"/><label for="client_no">Não</label></label>
							</div>
							<ul class="actions">
								<li><input type="submit" class="button" value="Enviar"></input></li>
							</ul>
						</form>
						<hr />

						<footer>
							<ul class="icons">
								<!-- <li><a href="#" class="fa-twitter">Twitter</a></li>-->
								<li id="iconWhats"><a href="https://api.whatsapp.com/send?phone=555180257497" class="fa-whatsapp" id="whatsSquare">Whatsapp</a></li>
								<li><a href="https://facebook.com/inovaenergiasolar" class="fa-facebook">Facebook</a></li>
								<li><a href="mailto:diogo@inovaenergia.com.br" class="fa-envelope">Email</a></li>
							</ul>
						</footer>
					</section>

				<!-- Footer -->
					<!-- <footer id="footer">
						<ul class="copyright">
							<li>&copy; INOVA</li><li>Development: <a href="https://tiagomatana.com">TMD</a></li>
						</ul>
					</footer> -->

			</div>

		<!-- Scripts -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
			<!--[if lte IE 8]><script src="assets/js/respond.min.js"></script><![endif]-->
			<script>
				if ('addEventListener' in window) {
					window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-loading\b/, ''); });
					document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
				}
			</script>
			<script>
			$(function() {
			var w = window.innerWidth;
			if(w>400){
			  $("#iconWhats").hide();
		 } else {
			 $("#iconWhats").show();

		 }
			 });

			</script>
	</body>
</html>

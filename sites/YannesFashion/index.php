<?php
	if(isset($_POST['send'])) {
		$welcome = '<h2>Obrigado por cadastrar seu email</h2>
					<p class="text-center">Logo você receberá as melhores<br /> promoções e novidades no seu email!</p>';
	} else {
		$welcome = '<h2>O poder da moda</h2>
					<p class="text-center">Apaixone-se pelo universo da moda<br />
					com a Yannes Fashion.</p>';
	}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Yannes Fashion</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="landing">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="index.php">Yannes Fashion</a></h1>
					<nav id="nav" style="padding-top: 10px;">
						<ul>
							<li><a href="https://www.facebook.com/Yannesdebora/" target="_blank"><i class="fa fa-2x fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="https://www.instagram.com/yannes.fashion/" target="_blank"><i class="fa fa-2x fa-instagram" aria-hidden="true"></i></a></li>
						</ul>
					</nav>
				</header>

			<!-- Banner -->
				<section id="banner">
					<div class="content">
						<header>
							<?php echo $welcome; ?>
						</header>
						<span class="image"><img src="images/yannesLogo.jpg" alt="" /></span>
					</div>
					<a href="#one" class="goto-next scrolly">Next</a>
				</section>

			<!-- One -->
				<section id="one" class="spotlight bottom">
					<span class="image fit main"><img src="images/montariaBanner.jpg" alt="" /></span>
					<div class="content">
						<div class="container">
							<div class="row">
								<div class="4u 12u$(medium)">
									<header>
										<h2>As marcas mais fashions</h2>
										<p>Se apaixone pelo universo da moda na Yannes Fashion</p>
									</header>
								</div>
								<div class="4u 12u$(medium)">
									<p>✔️ Camisa com calça destroyed. (Aliás, se você trabalha com moda, ou em um ambiente ultra informal, também vale!)<br>
									✔️ Camisa com shorts... Amo, amo esse equilíbrio entre o formal (camisa) e o informal (dos shorts jeans)! </p>
								</div>
								<div class="4u$ 12u$(medium)">
									<p>✔️ E que tal usar a camisa como se ela fosse uma blusa ciganinha?! Se a sua não ficar certinha assim, pode usar um truque com aqueles alfinetes de fralda antigos, por dentro da blusa. </p>
								</div>
							</div>
						</div>
					</div>
					<a href="#two" class="goto-next scrolly">Next</a>
				</section>

			<!-- Two -->
				<section id="two" class="spotlight style2 right">
					<span class="image fit main"><img src="images/colete.jpg" alt="" /></span>
					<div class="content">
						<header>
							<h2>Tudo sobre a moda</h2>
						</header>
						<p>O Colete é uma peça que está fazendo muito sucesso na moda atual, pois ele dá um charme especial ao look feminino. Com ele é possível deixar qualquer visual simples muito mais charmoso e moderno, já que ele dá um toque diferenciado ao look. 💍👑🎀
						Além disso, o colete é uma peça muito versátil, já que pode ser usado tanto no verão como no inverno, e também de dia ☀ e de noite 🌜

						#VemPraYannesFashion</p>
						<!--ul class="actions">
							<li><a href="#" class="button">Learn More</a></li>
						</ul-->
					</div>
					<a href="#three" class="goto-next scrolly">Next</a>
				</section>

			<!-- Three -->
				<section id="three" class="spotlight style3 left">
					<span class="image fit main bottom"><img src="images/t-shirts.jpg" alt="" /></span>
					<div class="content">
						<header>
							<h2>Dicas e novidades</h2>
						</header>
						<p>"T-Shirts" uma peça renovada que tem grande apelo fashion se destacou na temporada com o enfoque nas modelagens e detalhes diferenciados. A T-Shirt é uma opção desponjada e cool.
						Venha para a #YannesFashion e escolha a sua e entre na moda.</p>
						<!--ul class="actions">
							<li><a href="#" class="button">Learn More</a></li>
						</ul-->
					</div>
					<a href="#four" class="goto-next scrolly">Next</a>
				</section>

			<!-- Four -->
				<section id="four" class="wrapper style1 special fade-up">
					<div class="container">
						<header class="major">
							<h2>Quer chegar na Yannes Fashion?</h2>
							<p><a href="https://www.google.com/maps/place/Yannes+Fashion/@-16.7487144,-49.2061836,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0xd4be1da8cb390302!8m2!3d-16.7487144!4d-49.2039949?hl=pt-BR" target="_blank">Localização mais Fashion de Goânia</a></p>
						</header>
					</div>
				</section>

			<!-- Five -->
				<section id="five" class="wrapper style2 special fade">
					<div class="container">
						<header>
							<h2>Quer receber nossas novidades?</h2>
							<p>Cadastre seu email e enviaremos as melhores novidades e promoções!</p>
						</header>
						<form method="post" class="container 50%">
							<div class="row uniform 50%">
								<div class="8u 12u$(xsmall)"><input type="email" name="email" id="email" placeholder="Seu endereço de email" /></div>
								<div class="4u$ 12u$(xsmall)"><input type="submit" name="send" value="Ser fashion" class="fit special" /></div>
							</div>
						</form>
					</div>
				</section>

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="https://www.facebook.com/Yannesdebora/" target="_blank" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="https://www.instagram.com/yannes.fashion/" target="_blank" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon alt fa-envelope"><span class="label">Email</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Yannes Fashion. Todos os direitos reservados.</li><li>Design: <a href="http://html5up.net" target="_blank">HTML5 UP</a> And <a href="http://twohills.com.br" target="_blank">TwoHills Development</a></li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>

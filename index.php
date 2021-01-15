<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link
			rel="stylesheet"
			href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
			integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
			crossorigin="anonymous"
		/>
		<link rel="stylesheet" type="text/css" href="style.css" />
		<link rel="stylesheet" href="menu.css" />
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
		<link rel="icon" type="image/png" href="https://img.icons8.com/ios-filled/50/000000/mountain.png"/>
		<title>Anthony Chatelot</title>
	</head>
	<body>
		<section>
			<div class="menu-wrap">
				<input type="checkbox" class="toggler" />
				<div class="hamburger"><div></div></div>
				<div class="menu">
					<div>
						<div>
							<ul>
								<li><a href="#">Accueil</a></li>
								<li><a href="#about_me">À propos</a></li>
								<li><a href="#projects">Projets</a></li>
								<li><a href="#contacts">Contacts</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>

		<header class="bg">
			<div class="text-right">
				<h1 class="title police m_title">Anthony</h1>
			</div>

			<div class="m_title2">
				<h1 class="title police2">Chatelot</h1>
			</div>

			<div class="fs_link_header">
				<li><a href="#about_me" class="link">À propos</a></li>
				<li><a href="#projects" class="link">Projets</a></li>
				<li><a href="#contacts" class="link">Contacts</a></li>
			</div>
		</header>

		<section id="about_me" class="color_back showcase">
			<div class="container showcase-inner">
				<h1 class="police title2 text_center">À propos</h1>
				<br /><br /><br /><br />
				<p class="police2 fs_text">
					Bonjour je suis Anthony Chatelot. Actuellement en formation Designer web à l'Access Code School de Belfort.
					Disponible pour stage dans le territoire de Belfort.
				</p>
				<a class="police link fs-link m_text m_bottom" href="https://drive.google.com/file/d/1kNBFs-z38VEaQKz1OBj8bACEOSQFuNGp/view?usp=sharing" target="_blank"> Télécharger mon CV </a>
			</div>
		</section>

		<section id="projects" class="color_back">
			<div class="container showcase-inner">
				<h1 class="police title2 text_center m_text">Projets</h1>

				<figure class="snip1104"><img src="img/carte_voeux.jpg"/>
					<figcaption>
					  <h2>Projet<span> Carte de voeux</span></h2>
					</figcaption>
					<a href="https://anthonyc541.promo-45.codeur.online/carte_anim/" target="_blank"></a>
				  </figure>

				  <figure class="snip1104"><img src="img/projet_mul.jpg"/>
					<figcaption>
					  <h2>Projet<span> Multiplication</span></h2>
					</figcaption>
					<a href="https://github.com/antho90/Projet-multiplication" target="_blank"></a>
				  </figure>

				  <figure class="snip1104"><img src="img/crud.jpg"/>
					<figcaption>
					  <h2>Projet<span> CRUD</span></h2>
					</figcaption>
					<a href="https://anthonyc541.promo-45.codeur.online/Comptes/register.php" target="_blank"></a>
				  </figure>

				  <figure class="snip1104"><img src="img/mark.jpg"/>
					<figcaption>
					  <h2>Projet<span> Mark</span></h2>
					</figcaption>
					<a href="https://anthonyc541.promo-45.codeur.online/Mark/" target="_blank"></a>
				  </figure>

				  <figure class="snip1104"><img src="img/wordpress.jpg"/>
					<figcaption>
					  <h2>Projet<span> Wordpress</span></h2>
					</figcaption>
					<a href="https://github.com/antho90/wordpress" target="_blank"></a>
				  </figure>
			</div>
		</section>

		<section id="contacts" class="color_back t showcase">
			<div class="container showcase-inner">
				<h1 class="police title2 text_center">Contacts</h1>
				<br /><br /><br /><br />
				<div class="contact-form police">
					<form id="contact-form" method="POST" action="">
						<input
							name="name"
							type="text"
							class="form-control"
							placeholder="Votre nom"
							required
						/><br />
						<input
							name="email"
							type="email"
							class="form-control"
							placeholder="Votre email"
							required
						/><br />

						<textarea
							name="message"
							class="form-control"
							placeholder="Message"
							rows="4"
							required
						></textarea
						><br />

						<input
							type="submit"
							class="form-control submit police2"
							value="Envoyer"
						/>
						<p id="response"></p>
					</form>
				</div>
				<br /><br />
<!-- 
				<div class="fs_text police">
						<p> anthonychxtelxt@gmail.com </p>
				</div><br /><br /> -->

				<div class="wrapper">
					<a href="https://github.com/antho90" target="_blank">
						<div class="button police">
							<div class="icon">
								<i class="fab fa-github"></i>
							</div>
							<span>Github</span>
						</div></a
					>

					<a
						href="https://www.linkedin.com/in/anthony-chatelot/"
						target="_blank"
					>
						<div class="button police">
							<div class="icon">
								<i class="fab fa-linkedin-in"></i>
							</div>
							<span>Linkedin</span>
						</div></a
					>
				</div>
			</div>
		</section>
		<script src="scrypt.js"></script>
	</body>
</html>

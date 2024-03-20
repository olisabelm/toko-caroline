<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.1.0/remixicon.min.css">
	<link rel="stylesheet" href="homestyle.css">
</head>

<header>
	<?php include "menu.php"; ?>

</header>

<body>
	<!--==================== MAIN ====================-->
	<main class="main">
		<!--==================== HOME ====================-->
		<section class="home section" id="home">
			<div class="home__container container grid">
				<div class="home__content">
					<img src="plant3.png" alt="image" class="home__img">

					<h1 class="home__title">
						<span>F</span>
						<span>-</span>
						<span>B</span>
					</h1>
				</div>

				<div class="home__social">
					<span class="home__social-text">Follow Us</span>

					<div class="home__social-links">
						<a href="https://www.instagram.com/" target="_blank" class="home__social-link">
							<i class="ri-instagram-fill"></i>
						</a>
						<a href="https://www.facebook.com/" target="_blank" class="home__social-link">
							<i class="ri-facebook-fill"></i>
						</a>
						<a href="https://www.twitter.com" target="_blank" class="home__social-link">
							<i class="ri-twitter-fill"></i>
						</a>
					</div>
				</div>
			</div>
		</section>

		<!--==================== KATEGORI ====================-->
		<section class="new section" id="new">
			<div class="new__container container grid">
				<div class="new__data">
					<h1 class="section__title">
					FEATURED CATEGORY
					</h1>

					<p class="new__description">
						Menawarkan beragam tanaman berkualitas
						dalam 3 kategori utama:
						Tanaman Hias, Tanaman Aromatik, Tanaman Herbal.

						Temukan pilihan terbaik untuk kebutuhan Anda di setiap kategori kami.
					</p>
				</div>

				<div class="new__content grid">
					<article class="new__card">
						<img src="plant4.png" alt="image" class="new__img">
						<h2 class="new__title">Tanaman Hias</h2>
					</article>
					<article class="new__card">
						<img src="tanamanaromatik2.png" alt="image" class="new__img">
						<h2 class="new__title">Tanaman Aromatik</h2>
					</article>
					<article class="new__card">
						<img src="tanamanherbal1.png" alt="image" class="new__img">
						<h2 class="new__title">Tanaman Herbal</h2>
					</article>
				</div>
			</div>
		</section>

		<!--==================== TOKO ====================-->
		<section class="shop section" id="shop">
			<h2 class="section__title">
				TOP 9 - BEST PLANTS
			</h2>

			<div class="shop__container container grid">
				<article class="shop__card">
					<img src="tanamanhias1.png" alt="image" class="shop__img">

					<h3 class="shop__title">Alocasia <br> Odora</h3>
					<span class="shop__price">50.000</span>
				</article>
				<article class="shop__card">
					<img src="tanamanhias2.png" alt="image" class="shop__img">

					<h3 class="shop__title">Monstera</h3>
					<span class="shop__price">100.000</span>
				</article>
				<article class="shop__card">
					<img src="tanamanhias3.png" alt="image" class="shop__img">

					<h3 class="shop__title">Fiddle</h3>
					<span class="shop__price">65.000</span>
				</article>
				<article class="shop__card">
					<img src="tanamanaromatik1.png" alt="image" class="shop__img">

					<h3 class="shop__title">Cengkeh</h3>
					<span class="shop__price">20.000</span>
				</article>
				<article class="shop__card">
					<img src="tanamanaromatik2.png" alt="image" class="shop__img">

					<h3 class="shop__title">Lavender</h3>
					<span class="shop__price">40.000</span>
				</article>
				<article class="shop__card">
					<img src="tanamanaromatik3.png" alt="image" class="shop__img">

					<h3 class="shop__title">Chamomile</h3>
					<span class="shop__price">35.000</span>
				</article>
				<article class="shop__card">
					<img src="tanamanherbal1.png" alt="image" class="shop__img">

					<h3 class="shop__title">Ginseng</h3>
					<span class="shop__price">35.000</span>
				</article>
				<article class="shop__card">
					<img src="tanamanherbal2.png" alt="image" class="shop__img">

					<h3 class="shop__title">Kencur</h3>
					<span class="shop__price">15.000</span>
				</article>
				<article class="shop__card">
					<img src="tanamanherbal3.png" alt="image" class="shop__img">

					<h3 class="shop__title">Kunyit</h3>
					<span class="shop__price">20.000</span>
				</article>
			</div>
		</section>

	<!--==================== FOOTER ====================-->
	<footer class="footer">
    
    <span class="footer__copy" style="text-align: center;">
        © 2024 FreshBox. All Rights Reserved.
    </span>
</footer>

	<!--=============== SCROLLREVEAL ===============-->
	<script src="scrollreveal.min.js"></script>

	<!--=============== MAIN JS ===============-->
	<script src="main.js"></script>

</body>

</html>
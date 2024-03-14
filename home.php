<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel="stylesheet" href="homestyle.css">
</head>

<header>
<?php include "menu.php"; ?>

</header>

<body>
	<!--==================== MAIN ====================-->
	<main class="main">
         <!--==================== BERANDA ====================-->
         <section class="home section" id="home">
			<div class="home__container container grid">
				<img src="plant3.png" alt="image" class="home__img">

				<div class="home__data">
					<h1 class="home__title">
						HEI <br>
						<span>PLANTS</span> FOR <br>
						YOUR HOME <br>
					</h1>

					<p class="home__description">
						We design ornamental plants for your
						home in-house for an original style and quality
						you won't find anywhere else.
					</p>
				</div>
			</div>
		 </section>

		<!--==================== KATEGORI ====================-->
		<section class="new section" id="new">
			<div class="new__container container grid">
				<div class="new__data">
					<h2 class="section__title">
						NEW PLANTS FOR <br> YOUR HOME
					</h2>

					<p class="new__description">
						Lorem Ipsum Lorem Ipsum 
						Lorem Ipsum Lorem Ipsum
						Lorem Ipsum
					</p>
				</div>

				<div class="new__content grid">
					<article class="new__card">
						<img src="plant4.png" alt="image" class="new__img">
						<h2 class="new__title">Tanaman Hias</h2>
					</article>
					<article class="new__card">
						<img src="plant5.png" alt="image" class="new__img">
						<h2 class="new__title">Tanaman Aromatik</h2>
					</article>
					<article class="new__card">
						<img src="plant1.png" alt="image" class="new__img">
						<h2 class="new__title">Tanaman Herbal</h2>
					</article>
				</div>
			</div>
		</section>

		<!--==================== TOKO ====================-->
		<section class="shop section" id="shop">
          <h2 class="section__title">
			THE BEST PLANTS
		  </h2>  
		
		  <div class="shop__container container grid">
			<article class="shop__card">
				<img src="plant2.png" alt="image" class="shop__img">

				<h3 class="shop__title">Palem <br> Merah</h3>
				<span class="shop__price">50.000</span>
			</article>
			<article class="shop__card">
				<img src="plant3.png" alt="image" class="shop__img">

				<h3 class="shop__title">Lidah <br> Mertua</h3>
				<span class="shop__price">45.000</span>
			</article>
			<article class="shop__card">
				<img src="plant4.png" alt="image" class="shop__img">

				<h3 class="shop__title">Kuping <br> Gajah</h3>
				<span class="shop__price">65.000</span>
			</article>
			<article class="shop__card">
				<img src="plant5.png" alt="image" class="shop__img">

				<h3 class="shop__title">Aglaonema</h3>
				<span class="shop__price">70.000</span>
			</article>
			<article class="shop__card">
				<img src="plant1.png" alt="image" class="shop__img">

				<h3 class="shop__title">Lili <br> Paris</h3>
				<span class="shop__price">30.000</span>
			</article>
			<article class="shop__card">
				<img src="plant2.png" alt="image" class="shop__img">

				<h3 class="shop__title">Rombusa <br> Mini</h3>
				<span class="shop__price">25.000</span>
			</article>
		  </div>		
		</section>

		 <!--==================== BERITA ====================-->
         <section class="care section" id="care">
         	<h2 class="section__title">
         		LOREM IPSUM <br> LOREM IPSUM
         	</h2>

         	<div class="care__container container grid">
         		<img src="plant5.png" alt="image" class="care__img">

         		<ul class="care__list">
         			<li class="care__item">
         				<h2 class="new__title">Tanaman Hias</h2>

         				<p>
         				 Tanaman hias memberikan sentuhan 
						 alami dan keindahan visual pada ruangan. 
						 Dapat membuat ruangan terlihat 
						 lebih hidup dan menyegarkan.
         				</p>
         			</li>
         			<li class="care__item">
         				<h2 class="new__title">Tanaman Herbal</h2>

         				<p>
         				 Tanaman herbal telah digunakan 
						 selama ribuan tahun dalam 
						 pengobatan tradisional di berbagai 
						 budaya di seluruh dunia. 
         				</p>
         			</li>
         			<li class="care__item">
         				<h2 class="new__title">Tanaman Aromatik</h2>

         				<p>
         				 Tanaman aromatik memberikan manfaat 
						 sebagai penyedap makanan alami, 
						 pengusir serangga, pengobatan alternatif, 
						 sumber aroma menenangkan, dan 
						 bahan untuk produk perawatan tubuh serta minuman.
         				</p>
         			</li>
         		</ul>
         	</div>
         </section>

		<!--==================== CONTACT ====================-->
		<section class="contact section" id="contact">
            <h2 class="section__title">
				CONTACT US
			</h2>

			<div class="content__container container grid">
				<img src="plant1.png" alt="image" class="contact__img">

				<div class="contact__content">
					<div>
						<h3 class="contact__title">Social Media</h3>

					</div>
						<a href="" target="_blank">

						</a>

						<a href="" target="_blank">

						</a>
						
						<a href="" target="_blank">

						</a>
					<div>

					</div>
				</div>
			</div>
			</section>
		 </main>
		
	</main>
</body>
</html>
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
         <!--==================== HOME ====================-->
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

		<!--==================== NEWS ====================-->
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

		<!--==================== SHOP ====================-->
		<section class="shop section" id="shop">
          <h2 class="section__title">
			THE BEST PLANTS
		  </h2>  
		
		  <div class="shop__container container grid">
			<article class="shop__card">
				<img src="plant2.png" alt="image" class="shop__img">

				<h3 class="shop__title"></h3>
				<span class="shop__price"></span>
			</article>
		  </div>		
		</section>

		
	</main>
</body>
</html>
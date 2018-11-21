

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
    <!-- Estilos -->


    <title>Home</title>
  </head>
  <body>
    <div class="main-container">
      <!-- HEADER -->

    
      <!-- carrousel -->
      <div class="carrousel">
        <img src="img\drones.png" alt="">
      </div>
        <!-- productos -->
        <section class="productos">
			<?php foreach ($productos as $producto) { ?>
				<article class="producto">
					<div class="photo-container">
						<img class="photo" src="img/<?=$producto["imagen"]?>" alt="pdto 01">
          </div>
					<h2>
						<?= $producto["titulo"] ?>
					</h2>
					<p><?=$producto["descripcion"]?></p>
            <a class="more" href="producto.php?id=<?=$producto["id"]?>">ver más</a>
				</article>
			<?php } ?>

		</section>








          <!-- Footer -->

    </div> <!-- Aca cierra el div del main-container  -->
  </body>
</html>

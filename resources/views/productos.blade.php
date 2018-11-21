@extends('plantilla')

@section('titulo')
Productos
@endsection
@section('productos')

  <section class="productos">
			foreach ($productos as $producto)
				<article class="producto">
					<div class="photo-container">
						<img class="photo" src="/img/ <$producto["imagen"]?>" alt="pdto 01">
          </div>
					<h2>
						$producto["titulo"]
					</h2>
					<p>$producto["descripcion"]</p>
            <a class="more" href="producto.php?id= $producto["id"]?>">ver más</a>
				</article>
			

		</section>
@endsection()

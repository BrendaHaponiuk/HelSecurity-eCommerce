@extends('home')



@section('productos')
<section class="productos">
			@foreach ($productos as $producto)
				<article class="producto">
					<div class="photo-container">
						<img class="photo" src="/img/{{$producto["imagen"]}}" alt="pdto 01">
          </div>
					<h2>
					@unless($producto["nombre"])
          @endunless()
					</h2>
					<p>{{$producto["precio"]}}</p>
            <a class="more" href= {{$producto["id"]}}" >ver más </a>
				</article>
      @endforeach()


		</section>
@endsection()

<link rel="stylesheet" href="/css/register.css">
<link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
<head>
   <title>Registro</title>
</head>

<body>



  <!-- Comienzo del formulario -->


      <div class="main-container-registro  flex-column container">

        <div class="container form-container">
          <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
              {{ csrf_field() }}

              <div class="flex-container">
              <h1>Alta de usuario</h1>
              <p>Complete con sus datos para crear un usuario</p>
              <hr>
              <div class="form-group">

                <label for="nombre" class="form-control is-invalid" placeholder "nombre">{{ __('Nombre') }}</label>
                <div class="invalid-feedback">

                        <input id="nombre" type="text" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" name="nombre" value="{{ old('nombre') }}" required autofocus>

                        @if ($errors->has('nombre'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif


              </div>





              <div class="form-group">

                <label for="apellido" class="form-control is-invalid" placeholder "apellido">{{ __('Apellido') }}</label>
                <div class="invalid-feedback">

                        <input id="apellido" type="text" class="form-control{{ $errors->has('apellido') ? ' is-invalid' : '' }}" name="apellido" value="{{ old('apellido') }}" required autofocus>

                        @if ($errors->has('apellido'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('apellido') }}</strong>
                            </span>
                        @endif


              </div>


              <div class="form-group">

                <label for="email" class="form-control is-invalid" placeholder "email">{{ __('Email') }}</label>
                <div class="invalid-feedback">

                        <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif


              </div>

              <div class="form-group">

                <label for="password" class="form-control is-invalid" placeholder "password">{{ __('password') }}</label>
                <div class="invalid-feedback">

                        <input id="pw" type="text" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="pwd" value="{{ old('password') }}" required autofocus>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif


              </div>


              <div class="input-group">
                <label class="avatar-label" for="avatar"><b>Avatar</b></label>
                <input class="avatar-input" type="file" name="avatar" value="{{old('avatar')}}">

                <div class="invalid-feedback" style="display: block !important">

                </div>

              </div>
              <!-- Input de Bootstrap, hay que agregarle JS para que funcione bien -->
              <!-- <div class="form-group">
                <label for=""><b>Avatar</b></label>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="avatar" aria-describedby="inputGroupFileAddon01">
                  <label class="custom-file-label" for="avatar">Elegir archivo</label>
                </div>
              </div> -->

              <hr>
              <p>Al ingresar sus datos usted acepta nuestros <a href="#">Términos y condiciones de privacidad</a>.</p>
              <button type="submit" class="registrobtn">Crear Cuenta</button>
            </div>

            <div class="container signin">
              <p class="ya-tiene-cuenta">Ya tiene una cuenta? <a href="/login">Login</a>.</p>
            </div>
          </form>
        </div>

      </div>
</body>

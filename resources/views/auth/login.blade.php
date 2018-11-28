

      <!-- Estilos -->


      <link rel="stylesheet" href="/css/login.css">

      <title>Login</title>

      <div class="login-page">
  <div class="form">
    <form class="register-form">
      @csrf
      <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
      @if ($errors->has('email'))
          <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('email') }}</strong>
          </span>
      @endif

      <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
      @if ($errors->has('password'))
          <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('password') }}</strong>
          </span>
      @endif

    </form>
    <form class="login-form">
      <input type="text" placeholder={{ __('email') }}>
      <input type="password" placeholder={{ __('password') }}>

      <button>{{ __('Login') }}</button>

      <br>

      <div class="form-group row">
          <div class="col-md-6 offset-md-4">
              <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                  <label class="form-check-label" for="remember">
                      {{ __('Recordarme') }}
                  </label>
              </div>
          </div>
      </div>

          @if (Route::has('password.request'))
              <a class="btn btn-link" href="{{ route('password.request') }}">
                  {{ __('¿Olvidó su contraseña?') }}
              </a>
          @endif

      <p class="message">No registrado? <a href="#">Crear cuenta</a></p>
    </form>
  </div>
</div>

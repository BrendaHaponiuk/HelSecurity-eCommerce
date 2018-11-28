

      <!-- Estilos -->

      <link rel="stylesheet" href="/css/styles.css">

      <title>Login</title>

      <body>
      <div class="main-container-login container flex-column justify-content-between">

        <div id="login">
          <h2 class="text-center text-black pt-5">Iniciar sesion</h2>
          <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
              <div id="login-box" class="col-md-12">
                <form id="login-form" class="form" action="" method="post">
                    @csrf
                  <div class="form-group">
                    <label for="email" class="text-info">{{ __('E mail') }}</label><br>

                      <input type="email" name="email" id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                      @if ($errors->has('email'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                      @endif



                  </div>
                  <div class="form-group">
                    <label for="password" class="text-info">{{ __('Contraseña') }}</label><br>

                      <input type="password" name="password" id="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                      @if ($errors->has('password'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('password') }}</strong>
                          </span>
                      @endif

                      </div>



                  </div>

                  <div class="row alert alert-danger" role="alert">

                  </div>

                  <div class="form-group">
                    <label for="remember" class="text-info">
                    <input id="remember"{{ old('remember') ? 'checked' : '' }} name="remember" type="checkbox"></span></label><br>

                  </div>
                  <label class="forget" for="remember">
                      {{ __('Recordarme') }}
                  </label>

                  <button type="submit" class="btn btn-primary">
                      {{ __('Iniciar Sesion') }}
                  </button>
                  @if (Route::has('password.request'))
                      <a class="btn btn-link" href="{{ route('password.request') }}">
                          {{ __('Olvidó su contraseña?') }}
                      </a>
                  @endif

                  </form>
                  



                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>

      </div>
    </body>

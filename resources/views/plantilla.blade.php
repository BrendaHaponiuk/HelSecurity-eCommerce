<!-- Acá va a ir toda la parte que va a ser en común -->


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/styles.css">
    <!-- Estilos -->


    <title>Hel Security</title>
  </head>
  <body>
    <div class="main-container">
      <!-- HEADER -->
      <header class="header">
        <div class="upper">
           <!-- Logo caja 1 -->
          <div class="logo">
            <a class="navbar-brand" href="home.blade.php">
              <img src="img/logo.png" alt="" class="logo">
            </a>
          </div>
          <div class="menu-section">
            <div class="user-menu">
              <ul class="user-items">
                <li> <a href="login.php">Login</a> </li>
                <li> <a href="registro.php">Registro</a> </li>
              </ul>
            </div>
            <div class="categories">
              <ul>
                <li> <a href="#">Kits</a> </li>
                <li> <a href="#">Cámaras</a> </li>
                <li> <a href="#">Alarmas</a> </li>
                <li> <a href="#">Ofertas</a> </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- menues caja 2 -->
        <div class="contact-us">
          <ul class="menu-items">
            <li><a href="{{ url('/home') }}">HOME</a></li>
            <li><a href="{{ url('/servicios') }}">SERVICIOS</a></li>
            <li> <a href="{{ url('/novedades') }}">NOVEDADES</a> </li>
            <li> <a href="#">LLAMENOS +5411 4209-3622</a> </li>
          </ul>
          <ul class="social">
            <li> <a href="#"><i class="fab fa-linkedin"></i></a> </li>
            <li> <a href="#"><i class="fab fa-facebook-square"></i> </a> </li>
            <li> <a href="#"><i class="fab fa-instagram"></i></a> </li>
            <li> <a href="mailto:info@helsecurity.com"><i class="fas fa-envelope"></i></a> </li>
          </ul>
        </div>

      </header>
      <section>

        @yield('carrousel')
      </section>



      <section>
        @yield('principal')
      </section>



      <!-- productos -->

















    </div>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Datasignt</title>
    <link rel="stylesheet" href="{{asset('libs/screen/css/style.css')}}" />
  </head>
  <body>
    <main>
      <div class="big-wrapper light">
        <img src="{{asset('libs/screen/img/shape.png')}}" alt="" class="shape" />

        <header>
          <div class="container">
            <div class="logo">
              <img src="{{asset('libs/screen/img/logo.png')}}" alt="Logo" />
              <h3>Datasignt</h3>
            </div>

            <div class="links">
              <ul>
                <li><a href="#">Características</a></li>
                <li><a href="#">Precios</a></li>
                <li><a href="#">Testimonios</a></li>
                <li><a href="#" class="btn">Registrarse</a></li>
              </ul>
            </div>

            <div class="overlay"></div>

            <div class="hamburger-menu">
              <div class="bar"></div>
            </div>
          </div>
        </header>

        <div class="showcase-area">
          <div class="container">
            <div class="left">
              <div class="big-title">
                <h1>El futuro esta aqui,</h1>
                <h1>Comienza ahora.</h1>
              </div>
              <p class="text">
                ¡Tu salud, mi desafio, tu bienestar, mi compromiso,
                somos Datasignt, gestión hospitalaria a la palma de tu mano!
              </p>
              <div class="cta">
                <a href="login" class="btn">Empezar</a>
              </div>
            </div>

            <div class="right">
              <img src="{{asset('libs/screen/img/person.svg')}}" alt="Person Image" class="person" />
            </div>
          </div>
        </div>

        <div class="bottom-area">
          <div class="container">
            <button class="toggle-btn">
              <i class="far fa-moon"></i>
              <i class="far fa-sun"></i>
            </button>
          </div>
        </div>
      </div>
    </main>

    <!-- JavaScript Files -->

    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <script src="{{asset('libs/screen/js/app.js')}}"></script>
  </body>
</html>

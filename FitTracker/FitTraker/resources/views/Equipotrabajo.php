<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Fit Traker</title>
  <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700|Poppins:300,400,500,700" rel="stylesheet">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


</head>


<body>


<header>
  <div class="menu">
    <div class="contenedor">
      <p class="logo">FitTraker</p>
      <img src="images/menu.png" class="menu-icon" alt="">
      <nav>
        <ul>
          <li><a href="">Index</a></li>
          <li><a href="/view/Buscador.php">Buscador</a></li>
          <li><a href="/view/Fittracker.php">FitTracker</a></li>
          <li><a href="/view/Eventosimportantes.php">Eventos Importantes</a></li>
          <li><a href="/view/Equipotrabajo.php">Equipo de trabajo</a></li>
        </ul>
      </nav>
    </div>
  </div>
</header>

<section id="intro">
  <div class="izquierda">
    <p>Localización,Eficacia,Rapidez</p>
    <H1>FITTRAKER</H1>
    <a href="">¿Tienes un gimnasio? </a>
  </div>
  <div class="derecha">
    <div class="contenido">
      <p>REGISTRA TU USUARIO GRATUITAMENTE Y USA NUESTROS SERVICIOS</p>
      <a href="">INSCRIBETE</a>
    </div>
  </div>
</section>

<section id="programs">
  <div class="contenedor">
    <div class="rojo cero">0.00</div>
    <div class="rojo ini">INITIATION FEE</div>
    <h2>GIMNASIOS INSCRITOS Ó RECOMENDACIONES</h2>
    <p>Aqui te presentamos algunos de los gimnasios inscritos en la página, a los cuales puedes consutar todos sus servicios mediante nuestra web. Velamos por mantener informado a todos los usuarios para facilitar su decision a la hora de ejercitarse.</p>
    <a href="">SERVICIOS QUE PUEDES BUSCAR</a>
    <div class="contenedor-programs">
      <div class="program" id="uno">
        <h3>PERSONAL TRAINING</h3>
        <p>Encuentra localidades en las que personal capacitado pueda cumplir con tus necesidades de entrenamiento personalizado.</p>
      </div>
      <div class="program" id="dos">
        <h3>ACTIVIDADES DEPORTIVAS</h3>
        <p>Tales como el Jiu-Jitsu, Boxeo, Futbol, Beisbol, Karate. Power Lifting y la Calistenia.</p>
      </div>
      <div class="program" id="tres">
        <h3>AMBIENTACIONES</h3>
        <p>Busca el ambiente que requieras, desde pistas para trotar, zona de pesas y de desarrollo cardiovascular, entre otras cosas.</p>
      </div>
    </div>
  </div>
</section>

<section id="section-video">
  <div class="contenedor">
    <video id="video" width="900px" height="600px" src="images/video.mp4"></video>
    <div class="botones">
      <button id="boton" onclick="playVideo()"><i class="far fa-play-circle"></i></button>
    </div>
  </div>
</section>

<script>

var video = document.getElementById('video');
var boton = document.getElementById('boton');

function playVideo() {
  video.play();
  boton.style.display = 'none';
}

video.addEventListener('ended', function() {
  boton.style.display = 'block';
})

</script>

<section id="join">
  <div class="izquierda">
    <a href="">Inscribe tu Gimnasio</a>
    <img id="uno" src="images/izq.jpg" alt="">
  </div>
  <div class="derecha">
    <img id="dos" src="images/der1.jpg" alt="">
    <img id="tres" src="images/der2.jpg" alt="">
  </div>
</section>

<section id="testimonials">
  <div class="contenedor">
    <span class="comillas">"</span>
    <h2>TESTIMONIALS</h2>
    <a href="">JOIN THE MOVEMENT</a>
    <div class="contenedor-testimonials">

      <div class="testimonial">
        <div class="contenido">
          <div class="foto"></div>
          <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in”</p>
        </div>
        <p class="nombre">Marissa James</p>
      </div>

      <div class="testimonial">
        <div class="contenido">
          <div class="foto"></div>
          <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in”</p>
        </div>
        <p class="nombre">Marissa James</p>
      </div>

    </div>
  </div>
</section>

<section id="contacto">
  <div class="izquierda">
  <p>LOCALIZACIÓN,EFICACIA,RÁPIDEZ</p>
    <H2>FITTRAKER</H2>
    <form action="enviar.php" method="post">
      <input type="text" placeholder="Nombre" name="nombre">
      <input type="email" placeholder="Email Address" name="correo">
      <textarea placeholder="Message" name="mensaje"></textarea>
      <input type="submit" value="SUBMIT">
    </form>
  </div>
  <div class="derecha">
    <div class="gym-hours">
      <h3>GYM H0URS</h3>
      <ul>
        <li>Monday-Friday: 5am – 11pm</li>
        <li>Monday-Friday: 5am – 11pm</li>
        <li>Monday-Friday: 5am – 11pm</li>
      </ul>
    </div>
    <div class="pass">
      <h3>Trabaja con nosotros y nos encargaremos de facilitar la información y servicios que causan interes en nuestros usuarios para conseguirte clientela</h3>
      <a href="">INFORMACIÓN</a>
    </div>
  </div>
</section>

<script
  src="https://code.jquery.com/jquery-3.4.0.min.js"
  integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="
  crossorigin="anonymous"></script>
<script src="script.js"></script>
</body>


</html>

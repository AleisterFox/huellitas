<?php 

require 'import.php';

?>

<!DOCTYPE html>
<html lang="es" xml:lang="es" style="overflow-x: visible">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="author" content="Molcajete" />
  <meta name="description" content="Cardiología clínica.
    Subespecialista formado en centro médico nacional Siglo XXI Ciudad de México.
    Diagnostico y tratamiento de las enfermedades Cardiovasculares (insuficiencia cardiaca, arritmias, bradicardia, taquicardia, bloqueo auriculoventricular, cardiopatía isquémica aguda o crónica, miocardiopatías, enfermedades del pericardio, Hipertensión arterial sistémica, estenosis carotidea, Enfermedad valvular cardiaca, entre otros).
    Diagnostico especializado con herramientas diagnosticas como ecocardiograma, monitoreo Holter, monitoreo ambulatorio de la presión arterial, Prueba de esfuerzo." />

  <meta name="Keywords" content="Doctor, Bulmaro Irving Padilla Gomez, salud, cardiología, cardiologo, internista, especialidad, científico, investigación, Puerto Vallarta, México" />

  <meta name="robots" content="all" />
  <meta property="og:title" content="Dr. Bulmaro Irving Padilla Gomez" />
  <meta property="og:description" content="Cardiología clínica.
    Subespecialista formado en centro médico nacional Siglo XXI Ciudad de México.
    Diagnostico y tratamiento de las enfermedades Cardiovasculares (insuficiencia cardiaca, arritmias, bradicardia, taquicardia, bloqueo auriculoventricular, cardiopatía isquémica aguda o crónica, miocardiopatías, enfermedades del pericardio, Hipertensión arterial sistémica, estenosis carotidea, Enfermedad valvular cardiaca, entre otros).
    Diagnostico especializado con herramientas diagnosticas como ecocardiograma, monitoreo Holter, monitoreo ambulatorio de la presión arterial, Prueba de esfuerzo." />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="../img/imagen.png" />
  <meta property="og:image:width" content="300" />
  <meta property="og:image:height" content="300" />
  <meta property="og:site_name" content="Dr. Bulmaro Irving Padilla Gomez" />
  <meta name="msapplication-TileColor" content="rgb(16, 48, 55)" />
  <meta name="theme-color" content="rgb(16, 48, 55)" />

  <?php include 'elements/estilos.php'?>

  <script src="js/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>
  <title>Huellitas diferentes</title>
</head>

<body>

  <div class="whatsapp">
    <a href="https://wa.link/gtiohk" target="_blank"><i class="fab fa-whatsapp"></i></a>
  </div>

  <!-- <div class="loader__screen" id="loader">
    <div id="wifi-loader">
      <svg class="circle-outer" viewBox="0 0 86 86">
        <circle class="back" cx="43" cy="43" r="40"></circle>
        <circle class="front" cx="43" cy="43" r="40"></circle>
        <circle class="new" cx="43" cy="43" r="40"></circle>
      </svg>
      <svg class="circle-middle" viewBox="0 0 60 60">
        <circle class="back" cx="30" cy="30" r="27"></circle>
        <circle class="front" cx="30" cy="30" r="27"></circle>
      </svg>
      <svg class="circle-inner" viewBox="0 0 34 34">
        <circle class="back" cx="17" cy="17" r="14"></circle>
        <circle class="front" cx="17" cy="17" r="14"></circle>
      </svg>
      <div class="text" data-text="Loading..."></div>
    </div>
  </div> -->

  <?php include 'elements/header.php' ?>

  <main>
    <section id="hero">
      <div class="glide" id="hero-slider">
        <div class="glide__track" data-glide-el="track">
          <ul class="glide__slides">
            <li style="border: 1px solid" class="glide__slide">
              <figure><img src="img/collie.jpg" alt="" /></figure>
              <h1>¡Descubre a tu próximo compañero!</h1>
              <p>
                En nuestra tienda en línea encontrarás una amplia selección de
                accesorios para consentir a tu nuevo amigo de cuatro patas.
              </p>
              <a href="" class="button">Contacto</a>
            </li>
            <li style="border: 1px solid" class="glide__slide">
              <figure><img src="img/victor.jpg" alt="" /></figure>
              <h1>¡Descubre a tu próximo compañero!</h1>
              <p>
                En nuestra tienda en línea encontrarás una amplia selección de
                accesorios para consentir a tu nuevo amigo de cuatro patas.
              </p>
              <a href="" class="button">Contacto</a>
            </li>
            <li style="border: 1px solid" class="glide__slide">
              <figure><img src="img/dormidos.jpg" alt="" /></figure>
              <h1>¡Descubre a tu próximo compañero!</h1>
              <p>
                En nuestra tienda en línea encontrarás una amplia selección de
                accesorios para consentir a tu nuevo amigo de cuatro patas.
              </p>
              <a href="" class="button">Contacto</a>
            </li>
            <li style="border: 1px solid" class="glide__slide">
              <figure><img src="img/cachorro.png" alt="" /></figure>
              <h1>¡Descubre a tu próximo compañero!</h1>
              <p>
                En nuestra tienda en línea encontrarás una amplia selección de
                accesorios para consentir a tu nuevo amigo de cuatro patas.
              </p>
              <a href="" class="button">Contacto</a>
            </li>
          </ul>

          <div class="glide__bullets" data-glide-el="controls[nav]">
            <button class="glide__bullet" data-glide-dir="=0"></button>
            <button class="glide__bullet" data-glide-dir="=1"></button>
            <button class="glide__bullet" data-glide-dir="=2"></button>
            <button class="glide__bullet" data-glide-dir="=3"></button>
          </div>
        </div>
      </div>

      <div class="dog__counter">
        <div class="container">
          <figure><img src="img/huella.png" alt="" /></figure>
          <p>
            Perritos <br />
            Adoptados
          </p>
          <h2 class="counter">“12”</h2>
        </div>
      </div>
    </section>
    <div class="banner">
      <figure class="vector"><img src="img/banner1.png" alt="" /></figure>
      <figure class="huellas"><img src="img/huellas-banner.png" alt=""></figure>
      <div class="container">
        <figure><img src="img/comillas.png" alt=""></figure>
        <div class="text">
          <h2>Dejando huella en tu corazón</h2>
          <p>
            En nuestra organización de adopción de perritos, nos dedicamos a
            encontrar hogares amorosos para perros en necesidad. <strong>¡Únete a
              nosotros en esta noble misión!</strong>
          </p>
        </div>
        <figure><img src="img/comillas.png" alt=""></figure>
      </div>
    </div>
    <div class="main-rainbow">
      <section id="services">
        <div class="container">
          <div class="service">
            <figure><img src="img/victor.jpg" alt=""></figure>
            <h4 class="title">Adopción de perritos</h4>
            <p>Ofrecemos servicios de adopción de mascotas, encuentra a tu compañero peludo perfecto</p>
            <a href="perritos.php" class="button">Ver más <i class="fas fa-arrow-right"></i></a>
          </div>
          <div class="service">
            <figure><img src="img/donativos.jpg" alt=""></figure>
            <h4 class="title">Hacer donativos</h4>
            <p>Tus donativos nos ayudan a seguir brindando cuidado y atención a los perritos en espera de un hogar amoroso.</p>
            <a href="donaciones.php" class="button">Ver más <i class="fas fa-arrow-right"></i></a>
          </div>
          <div class="service">
            <figure><img src="img/cachorro.png" alt=""></figure>
            <h4 class="title">Foster to adopt</h4>
            <p>Nuestro programa de foster to adopt te permite brindar un hogar temporal a un perrito antes de adoptarlo de manera permanente.</p>
            <a href="adopciones.php" class="button">Ver más <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </section>

      <div class="cta-banner">
        <figure><img src="img/dormidos.jpg" alt=""></figure>
        <h2>¡Descubre a tu próximo compañero!</h2>
        <div class="buttons">
          <a href="perritos.php" class="button">Ver catálogo</a>
          <a href="donaciones.php" class="button__secondary">Hacer Donativo</a>
        </div>
      </div>

      <section id="products">
        <div class="content">
          <div class="filters">
            <h3>Productos</h3>
            <form action="">
              <div class="option">
                <label for="option1">Producto a seleccionar</label>
                <input type="checkbox" name="" id="option1">
              </div>
              <div class="option">
                <label for="option2">Producto a seleccionar</label>
                <input type="checkbox" name="" id="option2">
              </div>
              <div class="option">
                <label for="option3">Producto a seleccionar</label>
                <input type="checkbox" name="" id="option3">
              </div>
              <div class="option">
                <label for="option4">Producto a seleccionar</label>
                <input type="checkbox" name="" id="option4">
              </div>
              <div class="option">
                <label for="option5">Producto a seleccionar</label>
                <input type="checkbox" name="" id="option5">
              </div>
              <div class="option">
                <label for="option6">Producto a seleccionar</label>
                <input type="checkbox" name="" id="option6">
              </div>
              <div class="option">
                <label for="option7">Producto a seleccionar</label>
                <input type="checkbox" name="" id="option7">
              </div>
            </form>
          </div>
          <div class="products-container">
            <div class="product">
              <figure><img src="img/croquetas.jpg" alt=""></figure>
              <h4>Nombre del producto</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fermentum non lorem vel ornare.</p>
              <a href="producto.php">Ver producto &nbsp; <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="product">
              <figure><img src="img/croquetas.jpg" alt=""></figure>
              <h4>Nombre del producto</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fermentum non lorem vel ornare.</p>
              <a href="producto.php">Ver producto &nbsp; <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="product">
              <figure><img src="img/croquetas.jpg" alt=""></figure>
              <h4>Nombre del producto</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fermentum non lorem vel ornare.</p>
              <a href="producto.php">Ver producto &nbsp; <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="product">
              <figure><img src="img/croquetas.jpg" alt=""></figure>
              <h4>Nombre del producto</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fermentum non lorem vel ornare.</p>
              <a href="producto.php">Ver producto &nbsp; <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="product">
              <figure><img src="img/croquetas.jpg" alt=""></figure>
              <h4>Nombre del producto</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fermentum non lorem vel ornare.</p>
              <a href="producto.php">Ver producto &nbsp; <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="product">
              <figure><img src="img/croquetas.jpg" alt=""></figure>
              <h4>Nombre del producto</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fermentum non lorem vel ornare.</p>
              <a href="producto.php">Ver producto &nbsp; <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="product">
              <figure><img src="img/croquetas.jpg" alt=""></figure>
              <h4>Nombre del producto</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fermentum non lorem vel ornare.</p>
              <a href="producto.php">Ver producto &nbsp; <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="product">
              <figure><img src="img/croquetas.jpg" alt=""></figure>
              <h4>Nombre del producto</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fermentum non lorem vel ornare.</p>
              <a href="producto.php">Ver producto &nbsp; <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="product">
              <figure><img src="img/croquetas.jpg" alt=""></figure>
              <h4>Nombre del producto</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fermentum non lorem vel ornare.</p>
              <a href="producto.php">Ver producto &nbsp; <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="product">
              <figure><img src="img/croquetas.jpg" alt=""></figure>
              <h4>Nombre del producto</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fermentum non lorem vel ornare.</p>
              <a href="producto.php">Ver producto &nbsp; <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </section>

      <section id="alianzas">
        <h2>Alianzas estratégicas</h2>
        <p>Somos una organización protectora de animales especializada, desde el 2020, en la ayuda a perros maltratados y/o abandonados.
          Nuestros rescatistas realizan diariamente labores heroicas en un intento por salvar la mayor cantidad de vidas posible; sin embargo,
          su capacidad de dar cobijo, alimento y atención médica, se ve ampliamente rebasada por una problemática que nunca cesa de crecer.</p>
        <div class="alianzas__logos">
          <figure><img src="img/webflow.png" alt=""></figure>
          <figure><img src="img/relume.png" alt=""></figure>
          <figure><img src="img/webflow.png" alt=""></figure>
          <figure><img src="img/relume.png" alt=""></figure>
        </div>
      </section>

    </div>
    <section id="contact">
      <div class="container">
        <div class="left">
          <h2>Contacto</h2>
          <a href="tel:3314148548"><i class="fas fa-phone"></i> &nbsp; 3314148548</a>
          <a href="mailto:roman@huellitasdiferentes.com"><i class="fas fa-envelope"></i>&nbsp;roman@huellitasdiferentes.com</a>
          <div class="socials">
            <a href=""><i class="fab fa-instagram"></i></a>
            <a href=""><i class="fab fa-facebook"></i></a>
          </div>
        </div>
        <div class="right">
          <form action="">
            <input type="text" name="name" id="name" placeholder="Nombre*" required>
            <input type="tel" name="phone" id="phone" placeholder="Tel.">
            <input type="email" name="email" id="email" placeholder="Email*" required>
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Mensaje"></textarea>
            <button type="submit" class="button">Enviar</button>
          </form>
        </div>
      </div>
    </section>
  </main>

  <?php include 'elements/footer.php' ?>
</body>
<script src="js/script.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="js/loader.js"></script>
<script src="node_modules/@glidejs/glide/dist/glide.min.js"></script>

<script>
  var glide = new Glide("#hero-slider", {
    type: "carousel",
    perView: 1,
    autoplay: 5000,
    animationDuration: 2000,
    animationTimingFunction: "ease-in-out",
  });

  glide.mount();
</script>

</html>
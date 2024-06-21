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
    <section id="process">
      <div class="steps">
        <p>Carrito<i class="fas fa-chevron-right"></i></p>
        <p>Informacion<i class="fas fa-chevron-right"></i></p>
        <p>Pago<i class="fas fa-chevron-right"></i></p>
        <p class="active">Envío</p>
      </div>
      <div class="container">
        <div class="left">
          <div class="buying__cart">
            <div class="top">
              <h3>Información</h3>
            </div>
            <div class="customer__info">
              <p class="customer__name">
                <strong>Nombre de la persona</strong>
              </p>
              <p class="customer__address">Información de la dirección</p>
              <p class="customer__state">Estado</p>
              <p class="customer__city">Ciudad</p>
              <a href="">Cambiar</a>
            </div>
          </div>
          <div class="buying__cart">
            <div class="top">
              <h3>Selecciona método de pago</h3>
            </div>

            <div class="payment">
              <p>En Mercado Pago no es necesario crear una cuenta.</p>
              <form action="">
                <div class="payment__method">
                  <div class="option">
                    <input type="radio" name="payment" id="mercado" checked />
                    <label for="mercado">Mercado Pago</label>
                  </div>
                  <div class="logos">
                    <figure><img src="img/mercado.png" alt="" /></figure>
                    <figure><img src="img/visa.png" alt="" /></figure>
                    <figure><img src="img/master.png" alt="" /></figure>
                    <figure><img src="img/amex.png" alt="" /></figure>
                  </div>
                </div>
              </form>
            </div>
          </div>

          <div class="buying__cart">
            <div class="top">
              <h3>Entrega</h3>
            </div>
            <div class="customer__info">
              <p class="date">Fecha de entrega</p>
              <p class="product__description">Pequeña descripción de producto</p>
              <p class="total__payment">$ 0.00 MXN</p>
            </div>
            <div class="bottom">
              <a href="informacion.php" class="back"><i class="fas fa-chevron-left"></i>Volver al producto</a>
              <a href="confirmacion.php" class="button">Continuar</a>
            </div>
          </div>
        </div>
        <div class="right">
          <div class="cart__total">
            <h2>Total del carrito</h2>
            <div class="subtotal">
              <p>Subtotal</p>
              <p class="subtotal__amount">$ 0.00MXN</p>
            </div>
            <div class="gastos__envio">
              <p>Calculando gastos de envío</p>
              <p class="subtotal__amount">$ 0.00MXN</p>
            </div>
            <div class="total">
              <h3>Total</h3>
              <p class="total__amount">$ 0.00MXN</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php include 'elements/footer.php' ?>
</body>
<script src="js/script.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="js/loader.js"></script>

</html>
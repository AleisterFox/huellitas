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
        <p class="active">Informacion<i class="fas fa-chevron-right"></i></p>
        <p>Pago<i class="fas fa-chevron-right"></i></p>
        <p>Envío</p>
      </div>
      <div class="container">
        <div class="left">
          <div class="buying__cart">
            <div class="top">
              <h3>Información</h3>
            </div>

            <div class="customer__info">
              <form action="">
                <input type="text" name="name" id="name" placeholder="Nombre" required />
                <input type="text" name="lastname" id="lastname" placeholder="Apellido" required />
                <input type="tel" name="phone" id="phone" placeholder="Teléfono" required />
                <input type="email" name="email" id="email" placeholder="Email" required />
                <input type="text" name="address" id="address" placeholder="Dirección (Incluyendo colonia, número, piso, etc.)" required />
                <select name="state" id="state">
                  <option value="javascript:void(0);">Estado</option>
                </select>
                <input type="text" name="city" id="city" placeholder="Ciudad" required />
                <input type="number" name="postalCode" id="postalCode" placeholder="Código Postal" required />
              </form>
            </div>

            <div class="bottom">
              <a href="carrito.php" class="back"><i class="fas fa-chevron-left"></i>Volver al producto</a>
              <a href="pago.php" class="button">Continuar</a>
            </div>
          </div>
        </div>
        <div class="right">
          <div class="cart__total">
            <h2>Total del carrito</h2>
            <div class="subtotal">
              <p>Subtotal</p>
              <p class="subtotal__amount">$ 0.00 MXN</p>
            </div>
            <div class="gastos__envio">
              <p>Calculando gastos de envío</p>
              <p class="subtotal__amount">$ 0.00 MXN</p>
            </div>
            <div class="total">
              <h3>Total</h3>
              <p class="total__amount">$ 0.00 MXN</p>
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

<script>
  const estadosMexicanos = [
    "Aguascalientes",
    "Baja California",
    "Baja California Sur",
    "Campeche",
    "Chiapas",
    "Chihuahua",
    "Coahuila",
    "Colima",
    "Ciudad de México",
    "Durango",
    "Guanajuato",
    "Guerrero",
    "Hidalgo",
    "Jalisco",
    "Estado de México",
    "Michoacán",
    "Morelos",
    "Nayarit",
    "Nuevo León",
    "Oaxaca",
    "Puebla",
    "Querétaro",
    "Quintana Roo",
    "San Luis Potosí",
    "Sinaloa",
    "Sonora",
    "Tabasco",
    "Tamaulipas",
    "Tlaxcala",
    "Veracruz",
    "Yucatán",
    "Zacatecas",
  ];

  const select = document.getElementById("state");

  estadosMexicanos.forEach((estadoMexicano, index) => {
    const option = document.createElement("option");
    option.text = estadoMexicano;
    option.value = index + 1;
    select.add(option);
  });
</script>

</html>
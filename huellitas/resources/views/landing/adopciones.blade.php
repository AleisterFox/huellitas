@extends('layouts.main')

@section('content')
<main>
    <section id="portada-donaciones">
        <figure><img src="img/adopciones.jpg" alt=""></figure>
        <h1>Foster to Adopt</h1>
    </section>
    <section id="donativos">
        <figure><img src="img/fta-vector.png" alt=""></figure>
        <div class="container fta">
            <h2>¿Te gustaría saber que es nuestro programa
                Foster to Adopt?</h2>
            <p>Estamos orgullosos de contar con una experiencia de adopción única para posibles adoptantes llamada nuestro programa Foster to Adopt (también conocido como FTA). Este programa está diseñado para facilitar la transición entre hogares de acogida y adopción al permitir a las familias la posibilidad de actuar como cuidadores temporales de un animal antes de adoptarlo oficialmente. Esto garantiza que sea una buena opción para todas las partes antes de comprometerse a largo plazo.</p>
            <br>
            <p>Nuestro programa FTA está iniciando, y por una buena razón. Muchos posibles adoptantes disfrutan de la nueva capacidad de "probar” a un nuevo mejor amigo para ver cómo el animal que les interesa encaja en los muchos aspectos de su dinámica familiar antes de comprometerse por completo. Para ver si ingresar al programa FTA es lo más adecuado para usted y su familia, lea más sobre el proceso a continuación.</p>
            <div class="middle-content">
                <div class="left">
                    <p>El primer paso, es revisar que la mascota de tu interés este disponible bajo el programa FTA, esto se hace mandando un mensaje a cualquiera de nuestras redes sociales o whats app, indicando el nombre del perro de tu interés.Se deberá llenar una solicitud de adopción, la cual se te proporcionara via electrónica, y de esta forma evaluar si eres candidato a nuestro programa FTA.</p>
                    <br>
                    <p>Después de que nuestro equipo revise su solicitud, nos comunicaremos con usted directamente para discutir los mejores pasos a seguir para su situación particular.Si ha indicado interés en un animal específico que ya forma parte de nuestro programa FTA, se le dará información sobre la fecha y hora de entrega, las necesidades veterinarias pendientes y el cronograma proyectado antes de que se pueda realizar la adopción oficial si todo sale bien.</p>
                    <br>
                    <p>Recuerda que los rescates que tenemos provienen de una multitud de circunstancias y hacemos todo lo posible para comunicar la mayor cantidad de información posible sobre ellos a posibles adoptantes. Sin embargo, es posible que algunos animales experimenten cambios de comportamiento durante momentos de estrés y/o transición, por lo que no podemos garantizar que un animal se adaptará inmediatamente a su hogar. Le pedimos paciencia durante este proceso y estaremos encantados de brindarle recursos que ayuden a facilitar este período de transición tanto para usted como para su posible adoptado.</p>
                </div>
                <div class="right">
                    <figure><img src="img/cachorro.png" alt=""></figure>
                </div>
            </div>

            <div class="bottom-content">
                <div class="left">
                    <figure><img src="img/victor.jpg" alt=""></figure>
                </div>
                <div class="right">
                    <p>Después de que su posible adoptado ingresa a su hogar, se pone a prueba durante 1 semana. Durante este tiempo, también evaluarás si el animal encaja bien en la dinámica familiar. Se pueden conceder extensiones circunstancialmente y las adopciones pueden realizarse antes siempre que el animal haya recibido autorización médica.</p>
                    <br>
                    <p>Los animales adoptados por nuestro rescate deben estar esterilizados/castrados, al día con las vacunas básicas apropiadas para su edad, prueba de parásitos hemáticos, así como desparasitado y al día con su preventivo contra pulgas y garrapatas. Si decide que su posible adoptado es adecuado para su hogar y le gustaría adoptarlo, ¡felicidades!. Entonces será tiempo de celebrar el contrato de adopción y pagando la tarifa de adopción aplicable.</p>
                    <br>
                    <p>Si descubre que su posible adoptado no es adecuado para usted y no desea adoptarlo, nos pondremos de acuerdo con Usted para recoger a nuestro rescate, y seguir con la búsqueda de un hogar para el!</p>
                    <br>
                    <p>Es posible que los animales que ya son elegibles para el programa Foster to Adopt no estén médicamente actualizados con todo lo que necesitan para ser autorizados para adopción. Esto puede incluir estar esterilizado/castrado, vacunacion completa, snap 4dx. Este tipo de cuidado se realiza mientras se encuentra bajo el cuidado de la persona de acogida, bajo la supervisión del rescate, antes de que se lleve a cabo una adopción oficial.</p>
                </div>
            </div>

            <section id="contact">
                <h2>Solicitar más información</h2>
                <form action="">
                    <input type="text" name="name" id="name" placeholder="Nombre*" required>
                    <input type="tel" name="phone" id="phone" placeholder="Tel*" required>
                    <input type="email" name="email" id="email" placeholder="Email*" required>
                    <button type="submit" class="button">Enviar</button>
                </form>
            </section>

            <div class="cta-banner">
                <figure><img src="img/dormidos.jpg" alt=""></figure>
                <h2>¡Descubre a tu próximo compañero!</h2>
                <div class="buttons">
                    <a href="/perritos" class="button">Ver catálogo</a>
                    <a href="/donaciones" class="button__secondary">Hacer Donativo</a>
                </div>
            </div>

        </div>
    </section>

    <div class="success-modal">
        <div class="check"><i class="fas fa-check"></i></div>
        <p>Enviado con éxito.</p>
        <p>En breve nos pondremos en contacto con usted.</p>
        <a href="javascript:void(0)" class="button close-success-modal">Cerrar</a>
    </div>
</main>
@endsection
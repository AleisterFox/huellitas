@extends('layouts.main')

@section('content')
<main>
    <section id="mascota">
        <div class="container">
            <div class="left">
                <div class="glide" id="pet-slider">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                            <li style="border: 1px solid" class="glide__slide">
                                <figure><img src="img/agata.jpg" alt="" /></figure>
                            </li>
                            <li style="border: 1px solid" class="glide__slide">
                                <figure><img src="img/agata2.jpg" alt="" /></figure>
                            </li>
                            <li style="border: 1px solid" class="glide__slide">
                                <figure><img src="img/agata3.jpg" alt="" /></figure>
                            </li>
                            <li style="border: 1px solid" class="glide__slide">
                                <figure><img src="img/agata4.jpg" alt="" /></figure>
                            </li>
                        </ul>

                        <div class="glide__bullets" data-glide-el="controls[nav]">
                            <button class="glide__bullet" data-glide-dir="=0"><img src="img/agata.jpg" alt=""></button>
                            <button class="glide__bullet" data-glide-dir="=1"><img src="img/agata2.jpg" alt=""></button>
                            <button class="glide__bullet" data-glide-dir="=2"><img src="img/agata3.jpg" alt=""></button>
                            <button class="glide__bullet" data-glide-dir="=3"><img src="img/agata4.jpg" alt=""></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right">
                <h2 class="dog__name">Ágata</h2>
                <div class="gender">
                    <p><strong>Sexo:</strong></p>
                    <p>Hembra</p>
                </div>
                <div class="age">
                    <p><strong>Edad:</strong></p>
                    <p>5 años</p>
                </div>
                <div class="size">
                    <p><strong>Talla:</strong></p>
                    <p>Grande</p>
                </div>
                <div class="behavior">
                    <p><strong>Convive con:</strong></p>
                    <p>Perros y niños</p>
                </div>
                <div class="race">
                    <p><strong>Mix de raza:</strong></p>
                    <p>Australian Shepherd</p>
                </div>
                <p class="dog__description">
                    Ágata, una perrita de 5 años, fue rescatada después de pasar15
                    días en la caseta de seguridad de un fraccionamiento. A pesar de
                    buscar a su familia sin éxito, nadie la reclamó. Ante la amenaza
                    de ser llevada a la perrera, Ágata llegó a nuestro refugio. Su
                    personalidad tranquila y amorosa la convierte en una compañera
                    perfecta para otros perros y niños. Ahora, con nosotros, Ágata ha
                    encontrado un refugio lleno de amor y estabilidad, lejos de la
                    incertidumbre que alguna vez la rodeó.
                </p>
                <div class="available">
                    <p>Disponible</p>
                </div>
            </div>
        </div>
        <div class="adoption-form">
            <form action="">
                <h2>Aplica para adoptarme</h2>

                <fieldset>
                    <legend>Datos personales</legend>
                    <input type="text" name="name" id="name" placeholder="Nombre*" required>
                    <select name="age" id="age">
                        <option value="">edad*</option>
                        <option value="">edad</option>
                        <option value="">edad</option>
                        <option value="">edad</option>
                    </select>
                    <input type="text" name="job" id="job" placeholder="Ocupación*" required>
                    <select name="house-type" id="house-type">
                        <option value="">Tipo de vivienda*</option>
                        <option value="">casa</option>
                        <option value="">casa</option>
                        <option value="">casa</option>
                    </select>
                    <input type="text" name="garden" id="garden" placeholder="Tamaño de jardin" required>
                    <input type="text" name="address" id="address" placeholder="Dirección completa*" required>
                    <input type="email" name="email" id="email" placeholder="Correo*" required>
                    <input type="tel" name="phone" id="phone" placeholder="Teléfono*" required>
                </fieldset>

                <fieldset>
                    <legend>Preguntas Generales</legend>
                    <label for="reason">¿Por qué te gustaría adoptar un perro?</label>
                    <textarea name="reason" id="reason" cols="30" rows="10" placeholder="Escribe*" required></textarea>
                    <label for="actual-dog">¿Tienes perro actualmente?</label>
                    <select name="actual-dog" id="actual-dog" required>
                        <option value="">Seleccione*</option>
                        <option value="si">Si</option>
                        <option value="no">No</option>
                    </select>
                    <label for="exercise">¿Cuánto ejercicio le puedes dar a tu perro diario?</label>
                    <select name="exercise" id="exercise" required>
                        <option value="">Seleccione*</option>
                        <option value="">30 min</option>
                        <option value="">1 hr</option>
                    </select>
                    <label for="time-alone">¿Cuánto tiempo se quedaría solo el perro al día?</label>
                    <select name="time-alone" id="time-alone">
                        <option value="">Seleccione*</option>
                        <option value="">time1</option>
                        <option value="">time2</option>
                    </select>
                    <label for="other-people">¿Hay personas de la 3era edad o con capacidad diferente en su vivienda?</label>
                    <select name="other-people" id="other-people">
                        <option value="">Seleccione*</option>
                        <option value="">si</option>
                        <option value="">no</option>
                    </select>
                    <label for="kids">¿Hay niños pequeños en su domicilio que habitaran con el perro?</label>
                    <select name="kids" id="kids">
                        <option value="">Seleccione*</option>
                        <option value="">si</option>
                        <option value="">no</option>
                    </select>
                    <label for="energy">¿Qué tanta energía deseas en el perro?</label>
                    <select name="energy" id="energy">
                        <option value="">Seleccione*</option>
                        <option value="">si</option>
                        <option value="">no</option>
                    </select>
                    <label for="other-pets">¿Cuenta usted con alguna otra mascota (gatos, aves, etc.)?
                        En caso de seleccionar si, mencione cual.</label>

                    <select name="other-pets" id="other-pets">
                        <option value="">Seleccione*</option>
                        <option value="">si</option>
                        <option value="">no</option>
                    </select>
                    <input type="text" name="second-pet" id="second-pet" placeholder="Mencione">
                    <label for="vet">¿Cuentas con veterinario de confianza?</label>
                    <select name="vet" id="vet">
                        <option value="">Seleccione*</option>
                        <option value="">si</option>
                        <option value="">no</option>
                    </select>
                    <label for="unanime">¿Todas las personas que viven en la casa están de acuerdo con la adopción?</label>
                    <select name="unanime" id="unanime">
                        <option value="">Seleccione*</option>
                        <option value="">si</option>
                        <option value="">no</option>
                    </select>
                    <label for="medio-informacion">¿Por qué medio te enteraste de la adopción de Ágata?</label>
                    <select name="medio-informacion" id="medio-informacion">
                        <option value="">Seleccione*</option>
                        <option value="">medio1</option>
                        <option value="">medio2</option>
                    </select>
                    <label for="why">Platícanos un poco más de ti, ¿Por qué consideras que eres la persona adecuada para darle un hogar?</label>
                    <textarea name="why" id="why" cols="30" rows="10" placeholder="Mensaje*" required></textarea>
                    <button type="submit" class="button">Enviar Formulario</button>
                </fieldset>
            </form>
        </div>
    </section>
</main>
@endsection
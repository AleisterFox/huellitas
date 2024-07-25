@extends('layouts.main')

@section('content')
<main>
    <section id="mascota">
        @if (session('success'))
            @include('layouts._alert', ['message' => 'Se ha enviado el formulario satisfactoriamente'])
        @endif
        <div class="container">
            <div class="left">
                <div class="glide" id="pet-slider">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                            <li style="border: 1px solid" class="glide__slide">
                                <figure><img src="{{ asset('/pets/' . $pet->image ) }}" alt="" /></figure>
                            </li>

                            @if ($pet->image2)
                            <li style="border: 1px solid" class="glide__slide">
                                <figure><img src="{{ asset('/pets/' . $pet->image2) }}" alt="" /></figure>
                            </li>
                            @endif

                            @if ($pet->image3)
                            <li style="border: 1px solid" class="glide__slide">
                                <figure><img src="{{ asset('/pets/' . $pet->image3) }}" alt="" /></figure>
                            </li>
                            @endif

                            @if ($pet->image4)
                            <li style="border: 1px solid" class="glide__slide">
                                <figure><img src="{{ asset('/pets/' . $pet->image4) }}" alt="" /></figure>
                            </li>
                            @endif
                        </ul>

                        <div class="glide__bullets" data-glide-el="controls[nav]">
                            <button class="glide__bullet" data-glide-dir="=0">
                                <img src="{{ asset('/pets/' . $pet->image ) }}" alt="">
                            </button>
                            @if ($pet->image2)
                            <button class="glide__bullet" data-glide-dir="=1">
                                <img src="{{ asset('/pets/' . $pet->image2) }}" alt="">
                            </button>
                            @endif

                            @if ($pet->image3)
                            <button class="glide__bullet" data-glide-dir="=2">
                                <img src="{{ asset('/pets/' . $pet->image3) }}" alt="">
                            </button>
                            @endif

                            @if ($pet->image4)
                            <button class="glide__bullet" data-glide-dir="=3">
                                <img src="{{ asset('/pets/' . $pet->image4) }}" alt="">
                            </button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="right">
                <h2 class="dog__name">{{ $pet->name }}</h2>
                <div class="gender">
                    <p><strong>Sexo:</strong></p>
                    <p>Hembra</p>
                </div>
                <div class="age">
                    <p><strong>Edad:</strong></p>
                    <p>{{ $pet->age }} años</p>
                </div>
                <div class="size">
                    <p><strong>Talla:</strong></p>
                    <p>{{ $pet->size }}</p>
                </div>
                <div class="behavior">
                    <p><strong>Convive con:</strong></p>
                    <p>Perros y niños</p>
                </div>
                <div class="race">
                    <p><strong>Mix de raza:</strong></p>
                    <p>{{ $pet->raza->name }}</p>
                </div>
                <p class="dog__description">
                    {{ $pet->description }}
                </p>
                <div class="available">
                    <p>{{ $pet->status() }}</p>
                </div>
            </div>
        </div>
        <div class="adoption-form">

            <form action="{{ route('pet-adoption-form') }}" method="post">
                @csrf
                <h2>Aplica para adoptarme</h2>
                <input type="hidden" value="{{ $pet->id }}" name="pet_id">
                <fieldset>
                    <legend>Datos personales</legend>
                    <input type="text" name="name" id="name" placeholder="Nombre*" required>
                    <input type="number" name="age" id="age" placeholder="Edad*" required>
                    <input type="text" name="work" id="job" placeholder="Ocupación*" required>
                    <select name="house_type" id="house-type" required>
                        <option value="">Tipo de vivienda*</option>
                        <option value="casa">casa</option>
                        <option value="casa">casa</option>
                    </select>
                    <input type="text" name="garden_type" id="garden" placeholder="Tamaño de jardin" required>
                    <input type="text" name="address" id="address" placeholder="Dirección completa*" required>
                    <input type="email" name="email" id="email" placeholder="Correo*" required>
                    <input type="tel" name="phone" id="phone" placeholder="Teléfono*" required>
                </fieldset>

                <fieldset>
                    <legend>Preguntas Generales</legend>
                    <label for="reason">¿Por qué te gustaría adoptar un perro?</label>
                    <textarea name="reason_to_adopt" id="reason" cols="30" rows="10" placeholder="Escribe*" required></textarea>
                    <label for="actual-dog">¿Tienes perro actualmente?</label>
                    <select name="has_pet" id="actual-dog" required>
                        <option value="">Seleccione*</option>
                        <option value="1">Si</option>
                        <option value="0">No</option>
                    </select>
                    <label for="exercise">¿Cuánto ejercicio le puedes dar a tu perro diario?</label>
                    <select name="workout_time" id="exercise" required>
                        <option value="">Seleccione*</option>
                        <option value="30">30 min</option>
                        <option value="1">1 hr</option>
                    </select>
                    <label for="time-alone">¿Cuánto tiempo se quedaría solo el perro al día?</label>
                    <select name="pet_alone_time" id="time-alone">
                        <option value="">Seleccione*</option>
                        <option value="1">time1</option>
                        <option value="2">time2</option>
                    </select>
                    <label for="other-people">¿Hay personas de la 3era edad o con capacidad diferente en su vivienda?</label>
                    <select name="old_parents" id="other-people">
                        <option value="">Seleccione*</option>
                        <option value="1">si</option>
                        <option value="0">no</option>
                    </select>
                    <label for="kids">¿Hay niños pequeños en su domicilio que habitaran con el perro?</label>
                    <select name="kids" id="kids">
                        <option value="">Seleccione*</option>
                        <option value="1">si</option>
                        <option value="0">no</option>
                    </select>
                    <label for="other-pets">¿Cuenta usted con alguna otra mascota (gatos, aves, etc.)?
                        En caso de seleccionar si, mencione cual.</label>

                    <select name="has_any_other_pet" id="other-pets">
                        <option value="">Seleccione*</option>
                        <option value="1">si</option>
                        <option value="0">no</option>
                    </select>
                    <input type="text" name="pet_type" id="second-pet" placeholder="Mencione">
                    <label for="vet">¿Cuentas con veterinario de confianza?</label>
                    <select name="has_vet" id="vet">
                        <option value="">Seleccione*</option>
                        <option value="1">si</option>
                        <option value="0">no</option>
                    </select>
                    <label for="unanime">¿Todas las personas que viven en la casa están de acuerdo con la adopción?</label>
                    <select name="family_aggree" id="unanime">
                        <option value="">Seleccione*</option>
                        <option value="1">si</option>
                        <option value="0">no</option>
                    </select>
                    <label for="medio-informacion">¿Por qué medio te enteraste de la adopción de {{ $pet->name }}?</label>
                    <select name="media_adopt" id="medio-informacion">
                        <option value="">Seleccione*</option>
                        <option value="medio1">medio1</option>
                        <option value="medio12">medio2</option>
                    </select>
                    <label for="why">Platícanos un poco más de ti, ¿Por qué consideras que eres la persona adecuada para darle un hogar?</label>
                    <textarea name="message" id="why" cols="30" rows="10" placeholder="Mensaje*" required></textarea>
                    <button type="submit" class="button">Enviar Formulario</button>
                </fieldset>
            </form>
        </div>
    </section>
</main>
@endsection

@push('scripts')
<script>
    var glide = new Glide("#pet-slider", {
        type: "carousel",
        perView: 1,
        autoplay: 5000,
        animationDuration: 2000,
        animationTimingFunction: "ease-in-out",
    });

    glide.mount();
</script>
@endpush
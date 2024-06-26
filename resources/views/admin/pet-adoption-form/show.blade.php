<div class="row">
    <p><strong>Nombre:</strong> {{ $form->name }}</p>
    <p><strong>Edad:</strong> {{ $form->age }}</p>
    <p><strong>Trabajo:</strong> {{ $form->work }}</p>
    <p><strong>Tipo de casa:</strong> {{ $form->house_type }}</p>
    <p><strong>Tipo de jardin:</strong> {{ $form->garden_type }}</p>
    <p><strong>Dirección:</strong> {{ $form->address }}</p>
    <p><strong>Email:</strong> {{ $form->email }}</p>
    <p><strong>Phone:</strong> {{ $form->phone }}</p>
    <p><strong>Razón adopción:</strong> {{ $form->phone }}</p>
    <p><strong>Tiene otra mascota:</strong> {{ $form->hasPet() }}</p>
    <p><strong>Tiempo ejercicio:</strong> {{ $form->workout_time }}</p>
    <p><strong>Personas mayores en casa:</strong> {{ $form->oldParents() }}</p>
    <p><strong>Niño es casa:</strong> {{ $form->kids() }}</p>
    <p><strong>Cuenta con otra mascota:</strong> {{ $form->hasAnyOtherPet() }}</p>
    <p><strong>Tipo mascota:</strong> {{ $form->pet_type }}</p>
    <p><strong>veterinario de confianza:</strong> {{ $form->hasVet() }}</p>
    <p><strong>Familia de acuerdo:</strong> {{ $form->family_aggree }}</p>
    <p><strong>Medio:</strong> {{ $form->media_adopt }}</p>
    <p><strong>Mensaje:</strong> {{ $form->message }}</p>
</div>
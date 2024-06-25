<input type="hidden" id="petId">
<div class="mb-3">
    <label for="name" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="name" name="name" required>
</div>
<div class="mb-3">
    <label for="description" class="form-label" required>Descripción</label>
    <textarea class="form-control" id="description" name="description"></textarea>
</div>
<div class="mb-3">
    <label for="age" class="form-label" required>Edad</label>
    <input type="number" class="form-control" id="age" name="age"></input>
</div>
<div class="mb-3">
    <label for="age" class="form-label" required>Convive con</label>
    <textarea name="live_with" id="live_with" class="form-control"></textarea>
</div>
<div class="mb-3">
    <label for="age" class="form-label" required>Sexo</label>
    <select name="sex" id="sex" class="form-control">
        <option value="Macho">Macho</option>
        <option value="Hembra">Hembra</option>
    </select>
</div>
<div class="mb-3">
    <label for="breed" class="form-label" required>Raza</label>
    <select name="breed" id="breed" class="form-control">
        @foreach($breeds as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
</div>
<div class="mb-3">
    <label for="size" class="form-label" required>Tamaño</label>
    <select name="size" id="size" class="form-control">
        <option value="Pequeño">Pequeño</option>
        <option value="Mediano">Mediano</option>
        <option value="Grande">Grande</option>
    </select>
</div>
<div class="mb-3">
    <label for="image" class="form-label">Imagen</label>
    <input type="file" class="form-control" id="image" name="image" required>
</div>
<div class="row">
    @foreach($categories as $category)
    <div class="col-sm-4">
        <div class="form-check">
            <input 
                id="defaultCheck-{{ $category->id }}"
                data-id="{{ $category->id }}"
                class="form-check-input" type="checkbox" name="categories"
                @checked( in_array($category->id, $productCategoriesIDS))
                >
            <label class="form-check-label" for="defaultCheck-{{ $category->id }}">
                {{ $category->name }}
            </label>
        </div>
    </div>
    @endforeach
</div>
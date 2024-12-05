<a href="/adoptar/{{ $pet->id }}" class="doggy">
    <figure>
        <img src="{{ asset('pets/' . $pet->image) }}" alt="">
    </figure>
    <h4>{{ $pet->name }}</h4>
</a>
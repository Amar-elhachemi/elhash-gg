@props([
    'name',
    'team',
    'country',
    'image',
    'route'=>'#'
])

<a
    href="{{ $route }}"
    class="featured-player">

    <img
        src="{{ asset($image) }}"
        alt="{{ $name }}">

    <div class="featured-overlay">

        <span>{{ $country }}</span>

        <h3>{{ $name }}</h3>

        <p>{{ $team }}</p>

    </div>

</a>
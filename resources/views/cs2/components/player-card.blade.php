@props([
    'name',
    'team',
    'country',
    'url' => '#'
])

<a href="{{ $url }}" class="player-card">

    <div class="player-card-header">

        <span class="player-flag">

            {{ $country }}

        </span>

    </div>

    <div class="player-card-body">

        <h3>{{ $name }}</h3>

        <p>{{ $team }}</p>

    </div>

</a>


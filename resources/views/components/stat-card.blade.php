@props([
    'title',
    'value',
    'icon' => '📊'
])

<div class="stat-card">

    <div class="stat-icon">

        {{ $icon }}

    </div>

    <div class="stat-content">

        <h2>{{ $value }}</h2>

        <p>{{ $title }}</p>

    </div>

</div>

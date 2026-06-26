<div {{ $attributes->merge(['class' => 'card']) }}>

    <div class="card-glow"></div>

    <div class="card-content">

        {{ $slot }}

    </div>

</div>
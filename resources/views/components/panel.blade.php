<div {{ $attributes->merge(['class' => 'panel']) }}>

    @isset($title)

        <div class="panel-header">

            <h2>{{ $title }}</h2>

            @isset($actions)

                <div class="panel-actions">

                    {{ $actions }}

                </div>

            @endisset

        </div>

    @endisset

    <div class="panel-body">

        {{ $slot }}

    </div>

</div>
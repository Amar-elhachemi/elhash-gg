@extends('layouts.app')

@section('title','Crosshairs')

@section('content')

<x-page-header
    title="🎯 Crosshairs"
    description="Manage all stored crosshair presets."
/>

<div class="table-toolbar">

    <a
        href="{{ route('admin.crosshairs.create') }}"
        class="primary-btn">

        + Add Crosshair

    </a>

</div>

<div class="players-table">

@foreach($crosshairs as $crosshair)

<div class="player-row">

<div>

<strong>{{ $crosshair->player->nickname }}</strong>

</div>

<div>

{{ $crosshair->name }}

</div>

<div>

{{ Str::limit($crosshair->code,25) }}

</div>

<div>

🎯

</div>

</div>

@endforeach

</div>

@endsection

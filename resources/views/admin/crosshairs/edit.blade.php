@extends('layouts.app')

@section('title','Edit Crosshair')

@section('content')

<x-page-header
    title="✏ Edit Crosshair"
    description="Update an existing crosshair preset."
/>

<div class="admin-form-card">

    <form
        action="{{ route('admin.crosshairs.update',$crosshair) }}"
        method="POST">

        @csrf
        @method('PUT')

        <div class="form-grid">

            <div class="form-group">

                <label>Player</label>

                <select name="player_id">

                    @foreach($players as $player)

                        <option
                            value="{{ $player->id }}"
                            @selected($crosshair->player_id==$player->id)>

                            {{ $player->nickname }}

                        </option>

                    @endforeach

                </select>

            </div>

            <div class="form-group">

                <label>Name</label>

                <input
                    type="text"
                    name="name"
                    value="{{ old('name',$crosshair->name) }}">

            </div>

            <div class="form-group full">

                <label>Crosshair Code</label>

                <textarea
                    name="code"
                    rows="4">{{ old('code',$crosshair->code) }}</textarea>

            </div>

            <div class="form-group">

                <label>Color</label>

                <input
                    type="text"
                    name="color"
                    value="{{ old('color',$crosshair->color) }}">

            </div>

            <div class="form-group">

                <label>Size</label>

                <input
                    type="number"
                    step="0.1"
                    name="size"
                    value="{{ old('size',$crosshair->size) }}">

            </div>

            <div class="form-group">

                <label>Gap</label>

                <input
                    type="number"
                    step="0.1"
                    name="gap"
                    value="{{ old('gap',$crosshair->gap) }}">

            </div>

            <div class="form-group">

                <label>Thickness</label>

                <input
                    type="number"
                    step="0.1"
                    name="thickness"
                    value="{{ old('thickness',$crosshair->thickness) }}">

            </div>

            <div class="form-group checkbox">

                <label>

                    <input
                        type="checkbox"
                        name="dot"
                        @checked($crosshair->dot)>

                    Center Dot

                </label>

            </div>

            <div class="form-group checkbox">

                <label>

                    <input
                        type="checkbox"
                        name="outline"
                        @checked($crosshair->outline)>

                    Outline

                </label>

            </div>

        </div>

        <div class="form-actions">

            <button
                class="primary-btn">

                💾 Save Changes

            </button>

            <a
                href="{{ route('admin.crosshairs') }}"
                class="secondary-btn">

                Cancel

            </a>

        </div>

    </form>

</div>

@endsection

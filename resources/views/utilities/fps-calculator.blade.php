@extends('layouts.app')

@section('title','FPS Calculator')

@section('content')

<x-page-header
    title="📈 FPS Calculator"
    description="Estimate your FPS based on your PC hardware."
/>

<div class="container">

    <x-panel>

        <div class="converter-grid">

            <div>

                <label>CPU</label>

                <select id="cpu">

                    <option value="1">Entry Level</option>
                    <option value="2">Mid Range</option>
                    <option value="3">High End</option>

                </select>

            </div>

            <div>

                <label>GPU</label>

                <select id="gpu">

                    <option value="1">Entry Level</option>
                    <option value="2">Mid Range</option>
                    <option value="3">High End</option>

                </select>

            </div>

        </div>

        <button
            id="fpsBtn"
            class="primary-btn">

            Estimate FPS

        </button>

        <div class="result-box">

            <h3>Estimated FPS</h3>

            <p id="fpsResult">0 FPS</p>

        </div>

    </x-panel>

</div>

@endsection

@push('scripts')
@vite('resources/js/utilities/index.js')
@endpush

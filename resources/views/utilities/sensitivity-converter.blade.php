@extends('layouts.app')

@section('title','Sensitivity Converter')

@section('content')

<x-page-header
    title="🎯 Sensitivity Converter"
    description="Convert your sensitivity between CS2 and Valorant instantly."
/>

<div class="container">

    <x-panel>

        <div class="converter-grid">

            <div>

                <label>Game</label>

                <select id="game">

                    <option value="cs2">Counter-Strike 2</option>

                    <option value="valorant">Valorant</option>

                </select>

            </div>

            <div>

                <label>Sensitivity</label>

                <input
                    id="sensitivity"
                    type="number"
                    step="0.01"
                    value="2.00">

            </div>

        </div>

        <button
            id="convertBtn"
            class="primary-btn">

            Convert

        </button>

        <div class="result-box">

            <h3>Converted Sensitivity</h3>

            <p id="result">0.00</p>

        </div>

    </x-panel>

</div>

@endsection

@push('scripts')

@vite('resources/js/utilities/index.js')

@endpush

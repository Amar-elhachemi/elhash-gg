
@extends('layouts.app')

@section('title','Monitor Distance')

@section('content')

<x-page-header
    title="🖥️ Monitor Distance Calculator"
    description="Convert monitor distance percentages between games."
/>

<div class="container">

    <x-panel>

        <div class="converter-grid">

            <div>

                <label>Current Percentage</label>

                <input
                    id="distance"
                    type="number"
                    value="100">

            </div>

        </div>

        <button
            id="distanceBtn"
            class="primary-btn">

            Convert

        </button>

        <div class="result-box">

            <h3>Result</h3>

            <p id="distanceResult">100%</p>

        </div>

    </x-panel>

</div>

@endsection

@push('scripts')
@vite('resources/js/utilities/index.js')
@endpush


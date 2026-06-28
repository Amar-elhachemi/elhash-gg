
@extends('layouts.app')

@section('title','Config Converter')

@section('content')

<x-page-header
    title="⚙️ Config Converter"
    description="Convert configuration commands between different supported games."
/>

<div class="container">

    <x-panel>

        <div class="converter-grid">

            <div>

                <label>Source Game</label>

                <select id="sourceGame">
                    <option>Counter-Strike 2</option>
                    <option>Valorant</option>
                </select>

            </div>

            <div>

                <label>Target Game</label>

                <select id="targetGame">
                    <option>Valorant</option>
                    <option>Counter-Strike 2</option>
                </select>

            </div>

        </div>

        <label>Paste Config</label>

        <textarea
            id="configInput"
            rows="10"
            placeholder="Paste your configuration here..."></textarea>

        <button
            id="configBtn"
            class="primary-btn">

            Convert

        </button>

        <label>Converted Output</label>

        <textarea
            id="configOutput"
            rows="10"
            readonly></textarea>

    </x-panel>

</div>

@endsection

@push('scripts')
@vite('resources/js/utilities/index.js')
@endpush

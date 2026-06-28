@extends('layouts.app')

@section('title','Search')

@section('content')

<x-page-header
    title="🔍 Search"
    :description="'Results for: '.$query"
/>

<div class="tools-grid">

@forelse($results as $result)

<a
    href="{{ $result['route'] }}"
    class="tool-card">

    <h2>{{ $result['title'] }}</h2>

</a>

@empty

<div class="tool-card">

    <h2>No results found.</h2>

</div>

@endforelse

</div>

@endsection
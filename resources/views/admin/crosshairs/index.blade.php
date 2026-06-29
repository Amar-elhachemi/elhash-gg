@php
use Illuminate\Support\Str;
@endphp
@extends('layouts.app')

@section('title','Crosshairs')

@section('content')

<x-page-header
    title="🎯 Crosshairs"
    description="Manage all stored crosshair presets."
/>

<div class="admin-page">

    <div class="admin-toolbar">

        <a
            href="{{ route('admin.crosshairs.create') }}"
            class="primary-btn">

            ➕ Add Crosshair

        </a>

        <span class="admin-count">

            {{ $crosshairs->count() }} Crosshairs

        </span>

    </div>

    <div class="admin-card">

        @if($crosshairs->isEmpty())

            <div class="empty-state">

                <h2>No Crosshairs Found</h2>

                <p>Create your first crosshair preset.</p>

            </div>

        @else

            <table class="admin-table">

                <thead>

                    <tr>

                        <th>Player</th>

                        <th>Name</th>

                        <th>Code</th>

                        <th>Color</th>

                        <th>Size</th>

                        <th>Gap</th>

                        <th>Thickness</th>

                        <th>Actions</th>

                    </tr>

                </thead>

                <tbody>

                    @foreach($crosshairs as $crosshair)

                        <tr>

                            <td>

                                {{ $crosshair->player->nickname }}

                            </td>

                            <td>

                                {{ $crosshair->name }}

                            </td>

                            <td>

                                <code>

                                    {{ Str::limit($crosshair->code,20) }}

                                </code>

                            </td>

                            <td>

                                {{ $crosshair->color }}

                            </td>

                            <td>

                                {{ $crosshair->size }}

                            </td>

                            <td>

                                {{ $crosshair->gap }}

                            </td>

                            <td>

                                {{ $crosshair->thickness }}

                            </td>

                            <td class="actions">

                                <a
                                    href="{{ route('admin.crosshairs.edit',$crosshair) }}"
                                    class="secondary-btn">

                                    Edit

                                </a>

                                <form
                                    action="{{ route('admin.crosshairs.destroy',$crosshair) }}"
                                    method="POST">

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        class="danger-btn"
                                        onclick="return confirm('Delete this crosshair?')">

                                        Delete

                                    </button>

                                </form>

                            </td>

                        </tr>

                    @endforeach

                </tbody>

            </table>

        @endif

    </div>

</div>

@endsection
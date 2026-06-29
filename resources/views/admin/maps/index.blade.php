@extends('layouts.app')

@section('title', 'Maps Manager')

@section('content')

<x-page-header
    title="🗺️ Maps Manager"
    description="Manage Counter-Strike 2 and Valorant maps."
/>

<div class="admin-page">

    <div class="admin-toolbar">

        <div>

            <h2>All Maps</h2>

            <p class="admin-count">

                {{ $maps->count() }} Maps Available

            </p>

        </div>

        <a
            href="{{ route('admin.maps.create') }}"
            class="primary-btn">

            ➕ Add Map

        </a>

    </div>

    <div class="admin-card">

        @if(session('success'))

            <div class="success-alert">

                {{ session('success') }}

            </div>

        @endif

        @if($maps->isEmpty())

            <div class="empty-state">

                <h2>No Maps Found</h2>

                <p>Create your first map to get started.</p>

                <a
                    href="{{ route('admin.maps.create') }}"
                    class="primary-btn">

                    Create Map

                </a>

            </div>

        @else

            <table class="admin-table">

                <thead>

                    <tr>

                        <th>Name</th>

                        <th>Game</th>

                        <th>Difficulty</th>

                        <th>Description</th>

                        <th>Actions</th>

                    </tr>

                </thead>

                <tbody>

                    @foreach($maps as $map)

                        <tr>

                            <td>

                                <strong>

                                    {{ $map->name }}

                                </strong>

                            </td>

                            <td>

                                @if($map->game == 'CS2')

                                    🎯 CS2

                                @else

                                    🔥 Valorant

                                @endif

                            </td>

                            <td>

                                <span class="badge">

                                    {{ $map->difficulty }}

                                </span>

                            </td>

                            <td>

                                {{ \Illuminate\Support\Str::limit($map->description,60) }}

                            </td>

                            <td class="actions">

                                <a
                                    href="{{ route('admin.maps.edit',$map) }}"
                                    class="secondary-btn">

                                    ✏ Edit

                                </a>

                                <form
                                    action="{{ route('admin.maps.destroy',$map) }}"
                                    method="POST"
                                    onsubmit="return confirm('Delete this map?');">

                                    @csrf

                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="danger-btn">

                                        🗑 Delete

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
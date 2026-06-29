@extends('layouts.app')

@section('title', 'Players')

@section('content')

<x-page-header
    title="👑 Players"
    description="Manage all professional players."
/>

<div class="table-toolbar">

    <input
        type="text"
        placeholder="🔍 Search player...">

    <a
        href="{{ route('admin.players.create') }}"
        class="primary-btn">

        + Add Player

    </a>

</div>

<div class="players-table">

    @foreach($players as $player)

        <div class="player-row">

            <div class="player-main">

                <img
                    src="{{ asset($player->image ?? 'images/default-player.png') }}"
                    alt="{{ $player->nickname }}"
                    class="player-avatar">

                <div>

                    <h3>{{ $player->nickname }}</h3>

                    <small>{{ $player->team }}</small>

                </div>

            </div>

            <div>

                {{ $player->game }}

            </div>

            <div>

                {{ $player->country }}

            </div>

            <div class="row-actions">

                <a
                    href="{{ route('admin.players.edit', $player) }}"
                    class="edit-btn">

                    ✏

                </a>

                <form
                    action="{{ route('admin.players.destroy', $player) }}"
                    method="POST"
                    onsubmit="return confirm('Delete {{ $player->nickname }}?')">

                    @csrf
                    @method('DELETE')

                    <button
                        type="submit"
                        class="delete-btn">

                        🗑

                    </button>

                </form>

            </div>

        </div>

    @endforeach

</div>

@endsection

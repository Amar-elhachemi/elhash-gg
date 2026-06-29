@extends('layouts.app')

@section('title','Edit Player')

@section('content')

<x-page-header
title="✏ Edit Player"
description="Update professional player information."
/>

<form
action="{{ route('admin.players.update',$player) }}"
method="POST"
class="admin-form">

@csrf
@method('PUT')

<div class="form-grid">

<div class="form-group">
<label>Nickname</label>
<input name="nickname" value="{{ $player->nickname }}">
</div>

<div class="form-group">
<label>Team</label>
<input name="team" value="{{ $player->team }}">
</div>

<div class="form-group">
<label>Country</label>
<input name="country" value="{{ $player->country }}">
</div>

<div class="form-group">
<label>Game</label>
<input name="game" value="{{ $player->game }}">
</div>

<div class="form-group">
<label>DPI</label>
<input name="dpi" value="{{ $player->dpi }}">
</div>

<div class="form-group">
<label>Sensitivity</label>
<input name="sensitivity" value="{{ $player->sensitivity }}">
</div>

<div class="form-group">
<label>Resolution</label>
<input name="resolution" value="{{ $player->resolution }}">
</div>

<div class="form-group">
<label>Refresh Rate</label>
<input name="refresh_rate" value="{{ $player->refresh_rate }}">
</div>

</div>

<div class="form-actions">

<button class="primary-btn">

Save Changes

</button>

</div>

</form>

@endsection
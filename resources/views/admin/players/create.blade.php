<form
    action="{{ route('admin.players.store') }}"
    method="POST">

    @csrf

    <input name="nickname" placeholder="Nickname">

    <input name="team" placeholder="Team">

    <input name="country" placeholder="Country">

    <input name="game" placeholder="Game">

    <input name="dpi" placeholder="DPI">

    <input name="sensitivity" placeholder="Sensitivity">

    <input name="resolution" placeholder="Resolution">

    <input name="refresh_rate" placeholder="Refresh Rate">

    <button class="primary-btn">

        Save Player

    </button>

</form>
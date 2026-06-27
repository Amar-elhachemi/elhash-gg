<x-panel title="⚙ Crosshair Settings">

    <h2>⚙ Crosshair Settings</h2>

    <div class="control-group">

        <label>

            Size

            <span id="sizeValue">2</span>

        </label>

        <input
            type="range"
            id="size"
            min="1"
            max="10"
            value="2">

    </div>

    <div class="control-group">

        <label>

            Thickness

            <span id="thicknessValue">1</span>

        </label>

        <input
            type="range"
            id="thickness"
            min="0.5"
            max="5"
            step="0.5"
            value="1">

    </div>

    <div class="control-group">

        <label>

            Gap

            <span id="gapValue">-3</span>

        </label>

        <input
            type="range"
            id="gap"
            min="-5"
            max="10"
            value="-3">

    </div>

    <div class="control-group">

        <label>Color</label>

        <input
            type="color"
            id="color"
            value="#00ff00">

    </div>

    <div class="quick-colors">

        <button class="color green" data-color="#00ff00"></button>
        <button class="color red" data-color="#ff3b30"></button>
        <button class="color blue" data-color="#3b82f6"></button>
        <button class="color yellow" data-color="#facc15"></button>
        <button class="color white" data-color="#ffffff"></button>
        <button class="color purple" data-color="#a855f7"></button>

    </div>

    <div class="checkbox-group">

        <label>

            <input type="checkbox" id="centerDot">

            Center Dot

        </label>

        <label>

            <input type="checkbox" id="outline">

            Outline

        </label>

    </div>

</x-panel>
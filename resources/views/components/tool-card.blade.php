<a href="{{ route($route) }}" class="tool-card">

    <div class="tool-card-top">

        <div class="tool-icon">

            {{ $icon }}

        </div>

        <span class="tool-status">

            Available

        </span>

    </div>

    <div class="tool-content">

        <h2>

            {{ $title }}

        </h2>

        <p>

            {{ $description }}

        </p>

    </div>

    <div class="tool-footer">

        <span>

            Launch Tool

        </span>

        <span class="arrow">

            →

        </span>

    </div>

</a>
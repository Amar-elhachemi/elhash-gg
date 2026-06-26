<footer class="footer">

    <div class="footer-container">

        <div class="footer-brand">
            <h2>elhash<span>.gg</span></h2>

            <p>
                The ultimate toolkit for competitive gamers.
            </p>
        </div>

        <div class="footer-links">

            <div>

                <h3>Games</h3>

                <a href="{{ route('cs2') }}">CS2</a>

                <a href="{{ route('valorant') }}">Valorant</a>

            </div>

            <div>

                <h3>Tools</h3>

                <a href="{{ route('cs2.crosshair') }}">Crosshair Generator</a>

                <a href="{{ route('utilities') }}">Utilities</a>

            </div>

            <div>

                <h3>Company</h3>

                <a href="{{ route('about') }}">About</a>

            </div>

        </div>

    </div>

    <div class="copyright">
        © {{ date('Y') }} elhash.gg. All rights reserved.
    </div>

</footer>
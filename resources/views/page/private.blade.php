<div class="page-4">
    <ul class="feature-list no-list clear-fix">
        @foreach ($freetimes as $freetime)
            <li class="feature-list-icon-{{ $freetime->code }}">
                <h3>{{ $freetime->name }}</h3>
                <p>
                    {{ $freetime->description }}
                    @if ($freetime->url):&nbsp;<a href="{{ $freetime->url }}" target="_blank">LINK</a>@endif
                </p>
            </li>
        @endforeach
    </ul>
    <div id="google_map" style="min-height: 350px;"></div>
    <br />
    Powered By: <a href="https://mapicons.mapsmarker.com" target="_blank"><img src="{{ asset('/image/miclogo-88x31.gif') }}"></a>
</div>

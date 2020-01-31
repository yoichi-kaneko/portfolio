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

<script id="map_window" type="text/x-jsrender">
    <div class="map">
        <h3>@{{:name}}</h3>
        <span><b>@{{:date}}</b>&nbsp; @{{:description}}</span>
        @{{if url}}
          <br>
          <div style="text-align: right; text-decoration: underline;">
            <a href="@{{:url}}" target="_blank">詳細はこちら</a>
          </div>
        @{{/if}}
    </div>
</script>

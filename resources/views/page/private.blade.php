<div class="page-4">
    <ul class="feature-list no-list clear-fix">
        @foreach ($freetimes as $freetime)
            <li class="feature-list-icon-{{ $freetime->code }}">
                <h3>{{ $freetime->name }}</h3>
                <p>
                    {{ $freetime->description }}
                </p>
            </li>
        @endforeach
    </ul>
</div>

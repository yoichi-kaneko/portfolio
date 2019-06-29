<div class="page-2">
    <div class="gallery-list-wrapper clear-fix box-center">
        <ul class="no-list gallery-list clear-fix">
            @foreach ($portfolios as $portfolio)
                <li class="@if($loop->index % 3 == 0) left @elseif($loop->index % 3 == 1) center @else right @endif filter-filter-1">
                    <a class="fancybox-iframe image-preloader" href="/portfolio/{{ $portfolio->id }}" >
                        <img src="/image/thumb/{{ $portfolio->code }}.jpg" alt="{{ $portfolio->name }}"/>
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</div>

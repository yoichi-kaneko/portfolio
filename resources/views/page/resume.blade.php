<div class="layout-50 page-3">
    <div class="layout-50-left">
        <h3>学歴</h3>
        <ul class="career-list no-list">
            <li>
                <h5>東京理科大学</h5>
                <p>
                    2000 - 2005<br/>
                    基礎工学部　電子応用工学科
                </p>
            </li>
            <li>
                <h5>筑波大学大学院</h5>
                <p class="padding-bottom-0 margin-bottom-0">
                    2006 - 2007<br/>
                    システム情報工学研究科<br/>コンピュータサイエンス専攻
                </p>
            </li>
        </ul>
        <h3 class="margin-top-30">職歴</h3>
        <ul class="career-list no-list">
@foreach ($works as $work)
            <li>
                <h5>{{ $work->name }}</h5>
                <p>
                    在籍期間: {{ $work->date_from->format('Y/m') }} -
    @empty($work->date_to)
                    now
    @else
                    {{ $work->date_to->format('Y/m') }}
    @endempty
                    <br/>
                    雇用形態: {{ $work->job_type }}
                </p>
                <p>
                    {{ $work->description }}
                </p>
            </li>
@endforeach
        </ul>
    </div>
    <div class="layout-50-right">
        <h3>言語・フレームワーク等</h3>
@foreach ($skills['program'] as $skill)
        <ul class="skill-list no-list">
            <li>
                <h5>{{ $skill->name }}</h5>
                <div class="skill-list-item-level">
@for ($i = 1; $i <= 5; $i++)
                    <span @if($i > $skill->grade)class="skill-list-item-level-off"@endif></span>
@endfor
                </div>
                <div class="skill-list-item-period">
                    {{ $skill->description }}
                </div>
            </li>
        </ul>
@endforeach

        <h3 class="margin-top-30">役割</h3>
@foreach ($skills['position'] as $skill)
        <ul class="skill-list no-list">
            <li>
                <h5>{{ $skill->name }}</h5>
                <div class="skill-list-item-level">
@for ($i = 1; $i <= 5; $i++)
                    <span @if($i > $skill->grade)class="skill-list-item-level-off"@endif></span>
@endfor
                </div>
                <div class="skill-list-item-period">
                    {{ $skill->description }}
                </div>
            </li>
        </ul>
@endforeach

    </div>
</div>
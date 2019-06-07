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
        <h3>Photography</h3>
        <ul class="skill-list no-list">
            <li>
                <h5>Photography</h5>
                <div class="skill-list-item-level">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span class="skill-list-item-level-off"></span>
                </div>
                <div class="skill-list-item-period">
                    5 years experience
                </div>
            </li>
        </ul>
        <h3 class="margin-top-30">Design</h3>
        <ul class="skill-list no-list">
            <li>
                <h5>Web design</h5>
                <div class="skill-list-item-level">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="skill-list-item-period">
                    4 years experience
                </div>
            </li>
            <li>
                <h5>Logo Design</h5>
                <div class="skill-list-item-level">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span class="skill-list-item-level-off"></span>
                </div>
                <div class="skill-list-item-period">
                    4 years experience
                </div>
            </li>
            <li>
                <h5>Graphic Design</h5>
                <div class="skill-list-item-level">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="skill-list-item-period">
                    5 years experience
                </div>
            </li>
            <li>
                <h5>Print Design</h5>
                <div class="skill-list-item-level">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="skill-list-item-period">
                    5 years experience
                </div>
            </li>
        </ul>
        <h3 class="margin-top-30">Coding &amp; Programming</h3>
        <ul class="skill-list no-list">
            <li>
                <h5>HTML/XHTML</h5>
                <div class="skill-list-item-level">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span class="skill-list-item-level-off"></span>
                </div>
                <div class="skill-list-item-period">
                    3 years experience
                </div>
            </li>
            <li>
                <h5>CSS2/CSS3</h5>
                <div class="skill-list-item-level">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span class="skill-list-item-level-off"></span>
                    <span class="skill-list-item-level-off"></span>
                </div>
                <div class="skill-list-item-period">
                    2 years experience
                </div>
            </li>
            <li>
                <h5>jQuery</h5>
                <div class="skill-list-item-level">
                    <span></span>
                    <span></span>
                    <span class="skill-list-item-level-off"></span>
                    <span class="skill-list-item-level-off"></span>
                    <span class="skill-list-item-level-off"></span>
                </div>
                <div class="skill-list-item-period">
                    1 year experience
                </div>
            </li>
            <li>
                <h5>PHP</h5>
                <div class="skill-list-item-level">
                    <span></span>
                    <span></span>
                    <span class="skill-list-item-level-off"></span>
                    <span class="skill-list-item-level-off"></span>
                    <span class="skill-list-item-level-off"></span>
                </div>
                <div class="skill-list-item-period">
                    1 year experience
                </div>
            </li>
        </ul>
    </div>
</div>
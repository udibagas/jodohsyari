<div class="media">
    @if ($p->img && file_exists($p->img))
    <div class="media-left">
        <div  style="width:60px;height:60px;">
            <a href="/post/{{ $p->id }}-{{ str_slug($p->title) }}">
                <img class="media-object cover" src="/{{ $p->img }}" alt="{{ $p->title }}" />
            </a>
        </div>
    </div>
    @endif
    <div class="media-body">
        <a href="/post/{{ $p->id }}-{{ str_slug($p->title) }}">
            <h4 style="margin:0;">{{ $p->title }}</h4>
        </a>
        <small>
            {{ $p->updated_at->diffForHumans() }} /
            <a href="/post/?kategori={{ $p->kategori }}">{{ $p->kategori }}</a> /
            {{ $p->view }} views
        </small>
    </div>
</div>

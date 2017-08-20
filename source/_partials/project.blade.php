<article class="project">

    <div class="level">
        <div class="level-left">
            @foreach ($project->tags as $tag)
                <div class="level-item">
                    <span class="tag is-light">{{ $tag }}</span>
                </div>
            @endforeach
        </div>

        <div class="level-right">
            <div class="level-item">
                <i class="fa fa-calendar-o"></i>
            </div>
            <div class="level-item">
                {{ date('Y-m-d', $project->date) }}
            </div>
        </div>
    </div>

    <h2 class="title is-size-3">
        <a href="{{ $project->getPath() }}">
            {{ $project->title }}
        </a>
    </h2>
    <hr>

    <div class="content">{!! $project->getContent() !!}</div>

</article>

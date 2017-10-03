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
            <i class="icon icon-calendar"></i>
        </div>
        <div class="level-item">
            {{ date('M d, Y', $project->date) }}
        </div>
    </div>
</div>

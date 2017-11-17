@extends('_layouts.master')

@section('body')
    <section class="section">
        <div class="container">
            @foreach ($projects as $project)
                <article class="project">

                    @include('_partials.project-metadata', ['project' => $project])

                    <h2 class="title is-size-4">
                        <a href="{{ $project->getPath() }}" class="is-black">
                            {{ $project->title }}
                        </a>
                    </h2>

                </article>

                @if (! $loop->last)
                    <hr>
                @endif
            @endforeach
        </div>
    </section>
@endsection

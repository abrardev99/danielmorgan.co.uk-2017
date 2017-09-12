@extends('_layouts.master')

@section('body')
    <div class="container">
        <section class="section">
            <div class="columns">

                @foreach ($projects as $project)
                    <div class="column is-narrow">
                        <div class="box">
                            <article class="project">

                                <div class="level is-hidden-mobile">
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
                                            {{ date('Y-m-d', $project->date) }}
                                        </div>
                                    </div>
                                </div>

                                <h2 class="title is-size-4">
                                    <a href="{{ $project->getPath() }}">
                                        {{ $project->title }}
                                    </a>
                                </h2>

                            </article>
                        </div>
                    </div>
                @endforeach

            </div>
        </section>
    </div>
@endsection

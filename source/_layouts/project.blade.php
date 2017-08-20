@extends('_layouts.master')

@section('body')
    <div class="container">
        <div class="columns">
            <div class="column is-10-desktop is-offset-1-desktop is-8-fullhd is-offset-2-fullhd">

                <section class="section">
                    <article class="project">
                        <div class="level">
                            <div class="level-left">
                                @foreach ($page->tags as $tag)
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
                                    {{ date('Y-m-d', $page->date) }}
                                </div>
                            </div>
                        </div>

                        <h2 class="title is-size-3">{{ $page->title }}</h2>
                        <hr>

                        <div class="content">
                            @yield('content')
                        </div>
                    </article>
                </section>

            </div>
        </div>
    </div>
@endsection

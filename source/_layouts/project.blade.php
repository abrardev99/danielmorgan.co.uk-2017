@extends('_layouts.master')

@section('body')
    <div class="container">
        <div class="columns">
            <div class="column is-10-desktop is-offset-1-desktop is-8-fullhd is-offset-2-fullhd">

                <section class="section">
                    <article class="project">

                        @include('_partials.project-metadata', ['project' => $page])

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

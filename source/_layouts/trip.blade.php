@extends('_layouts.master')

@section('body')
    <section class="hero is-primary is-bold">
        <div class="hero-body">
            <div class="container">
                <p class="subtitle">{{ $page->year }}</p>
                <h1 class="title">{{ $page->title }}</h1>
            </div>
        </div>

        <div class="hero-foot">
            <div class="container">
                <div class="level trip-switcher">
                    <div class="level-left">
                        @if ($page->getNext())
                            <a href="{{ $page->getNext()->getPath() }}" class="level-item">
                                &larr; <strong>{{ $page->getNext()->year }}</strong> - {{ $page->getNext()->title }}
                            </a>
                        @endif
                    </div>
                    <div class="level-right">
                        @if ($page->getPrevious())
                            <a href="{{ $page->getPrevious()->getPath() }}" class="level-item">
                                <strong>{{ $page->getPrevious()->year }}</strong> - {{ $page->getPrevious()->title }} &rarr;
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-10 is-offset-1">
                    <article class="content">
                        @yield('content')
                    </article>
                </div>
            </div>
        </div>
    </section>
@endsection

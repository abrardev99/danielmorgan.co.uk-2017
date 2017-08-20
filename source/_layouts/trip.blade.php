@extends('_layouts.master')

@section('body')
    <div class="container">
        <section class="section">
            <p class="subtitle">{{ $page->year }}</p>
            <h1 class="title">{{ $page->title }}</h1>

            @yield('content')

            <div class="level">
                <div class="level-left">
                    @if ($page->getPrevious())
                        <a href="{{ $page->getPrevious()->getPath() }}" class="level-item">
                            &larr; <strong>{{ $page->getPrevious()->year }}</strong> - {{ $page->getPrevious()->title }}
                        </a>
                    @endif
                </div>

                <div class="level-right">
                    @if ($page->getNext())
                        <a href="{{ $page->getNext()->getPath() }}" class="level-item">
                            <strong>{{ $page->getNext()->year }}</strong> - {{ $page->getNext()->title }} &rarr;
                        </a>
                    @endif
                </div>
            </div>
        </section>
    </div>
@endsection

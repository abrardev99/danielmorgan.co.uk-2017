@extends('_layouts.master')

@section('body')
    <section class="hero is-primary is-bold">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Road trips
                </h1>
                <p class="subtitle">
                    I lost all my old travel blogs recently, so I'm going to start piecing them together from backups and put some photos up on this site.
                </p>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-two-thirds-desktop">
                    <ul class="timeline">
                        @foreach ($trips->map->year->unique()->reverse() as $year)
                            <li class="timeline-header">
                                <span class="button is-light">{{ $year }}</span>
                            </li>

                            @foreach ($page->tripsInYear($trips, $year) as $trip)
                                <li class="timeline-item">
                                    <div class="timeline-marker">
                                        <a href="{{ $trip->getPath() }}">
                                            <figure class="image is-32x32"></figure>
                                        </a>
                                    </div>
                                    <div class="timeline-content">
                                        <p class="heading is-size-4">
                                            <a href="{{ $trip->getPath() }}">
                                                {{ $trip->title }}
                                            </a>
                                        </p>
                                        <p>
                                            {{ $trip->summary }}
                                        </p>
                                    </div>
                                </li>
                            @endforeach
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection

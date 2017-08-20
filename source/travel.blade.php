@extends('_layouts.master')

@section('body')
    <section class="hero is-light">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Travels
                </h1>
                <p class="subtitle">
                    I lost all my old travel blogs recently, so I'm going to start piecing them together from backups and put some photos up on this site.
                </p>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            @foreach ($trips->map->year->unique()->reverse() as $year)
                <h1 class="is-size-2">{{ $year }}</h1>

                <div class="columns">
                    @foreach ($page->tripsInYear($trips, $year) as $trip)
                        <div class="column">
                            <a href="{{ $trip->getPath() }}" class="tile subtitle notification is-primary">
                                {{ $trip->title }}
                            </a>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </section>
@endsection

@extends('_layouts.master')

@section('body')
    <section class="hero is-light">
        <div class="container">
            <div class="hero-body">
                <h1 class="title">
                    Travels
                </h1>
                <p class="subtitle">
                    We lost all of our family travel blogs recently, so I'm going to start piecing them together again from backups and put them on this site.
                </p>
            </div>
        </div>
    </section>

    <div class="container">
        <section class="section">
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
        </section>
    </div>
@endsection

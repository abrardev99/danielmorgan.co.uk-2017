@extends('_layouts.master')

@section('body')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="bio column is-half is-offset-one-quarter has-text-centered">
                    <img src="/media/avatar.png" alt="Daniel Morgan's mug">
                    <h1 class="title">
                        {{ $page->myName }}
                    </h1>
                    <p class="subtitle">
                        I'm a developer working in <abbr title="For @rhythmHQ in the Northern Quarter, specifically">Manchester, UK</abbr> with 9 years experience coding websites, designing interactive experiences, and wrangling servers.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection

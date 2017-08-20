@extends('_layouts.master')

@section('body')
    <div class="container">
        <section class="section">
            <div class="bio column is-8 is-offset-2 has-text-centered">
                <img src="/media/avatar.png" alt="Daniel Morgan's mug">
                <h1 class="title">
                    {{ $page->myName }}
                </h1>
                <p class="subtitle">
                    I'm a developer working in <abbr title="For @rhythmHQ in the Northern Quarter, specifically">Manchester, UK</abbr> with 9 years experience coding websites, designing interactive experiences, and wrangling servers.
                </p>
            </div>
        </section>
    </div>
@endsection

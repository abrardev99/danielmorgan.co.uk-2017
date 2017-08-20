@extends('_layouts.master')

@section('body')
    <div class="container">
        <div class="columns">
            <div class="column is-10-desktop is-8-fullhd">

                @foreach ($projects as $project)
                    <section class="section">
                        @include('_partials.project', $project)
                    </section>
                @endforeach

            </div>
        </div>
    </div>
@endsection

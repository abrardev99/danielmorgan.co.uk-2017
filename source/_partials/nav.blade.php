<section class="hero is-dark">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-vcentered">

                <div class="column is-clearfix has-text-centered has-text-left-tablet">
                    <h1 class="my-name is-size-4">{{ $page->myName }}</h1>
                </div>

                <div class="column is-narrow has-text-centered">
                    <span class="nav-link {{ $page->selected('projects') }}">
                        <a href="/">Projects</a>
                    </span>
                    <span class="nav-link {{ $page->selected('travel') }}">
                        <a href="/travel">Travel</a>
                    </span>
                    <span class="nav-link {{ $page->selected('about') }}">
                        <a href="/about">About</a>
                    </span>
                </div>

            </div>
        </div>
    </div>
</section>

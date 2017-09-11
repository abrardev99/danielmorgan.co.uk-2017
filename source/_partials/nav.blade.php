<section class="hero is-dark">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-vcentered">

                <div class="column is-clearfix has-text-centered has-text-left-desktop">
                    <h1 class="my-name is-size-4">{{ $page->myName }}</h1>
                </div>

                <div class="column is-narrow has-text-centered">
                    <a href="/" class="nav-link {{ $page->selected('projects') }}">
                        Projects
                    </a>
                    <a href="/travel" class="nav-link {{ $page->selected('travel') }}">
                        Travel
                    </a>
                    <a href="/about" class="nav-link {{ $page->selected('about') }}">
                        About
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>

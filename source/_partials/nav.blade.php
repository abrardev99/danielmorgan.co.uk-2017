<nav class="navbar">
    <div class="container">
        <div class="navbar-brand">
            <a class="logo navbar-item" href="/">
                {{ $page->myName }}
            </a>

            <div class="navbar-burger burger" data-target="navMenubd-example">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div class="navbar-menu">
            <div class="navbar-end">
                <a href="/" class="navbar-item {{ $page->selected('projects') }}">
                    Projects
                </a>
                <a href="/travel" class="navbar-item {{ $page->selected('travel') }}">
                    Travel
                </a>
                <a href="/about" class="navbar-item {{ $page->selected('about') }}">
                    About
                </a>
            </div>
        </div>
    </div>
</nav>

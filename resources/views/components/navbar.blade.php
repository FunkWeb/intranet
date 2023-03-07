<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4 shadow" aria-label="Fourth navbar example">
    <div class="container">
        <a class="navbar-brand" href="#">{{ config('app.name') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04"
                aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample04">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">{{ __('menu.home') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">{{ __('menu.jobs') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">{{ __('menu.booking') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">{{ __('menu.support') }}</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-bs-toggle="dropdown"
                       aria-expanded="false">{{ __('menu.settings') }}</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown04">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
            <form>
                <input class="form-control" type="text" placeholder="{{ __('menu.search') }}" aria-label="Search">
            </form>
        </div>
    </div>
</nav>

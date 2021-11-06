<nav class="navbar navbar-expand-sm">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="{{ asset('img/Frootie_Logo_Horizontal.png') }}" alt=""></a>
        <div class="collapse navbar-collapse">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link {{ $title == "Home" ? 'active' : null }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title == "Fruits" ? 'active' : null }}" href="{{ route('fruits.index') }}">Fruits</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title == "Reviews" ? 'active' : null }}" href="{{ route('reviews.index') }}">Reviews</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

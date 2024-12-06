<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ route('landing') }}">
            <img src="{{ asset('images/Horizontal Logo.png') }}" alt="Logo" width="100">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="ms-4 collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav gap-4">
                <li class="nav-item"><a class="nav-link" href="{{ route('nutrition-calculator') }}">Nutrition Calculator</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('bmi') }}">BMI Calculator</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('articles') }}">Article</a></li>
            </ul>
        </div>
    </div>
</nav>

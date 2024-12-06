<footer class="text-center py-3" style="background-color: #BEEBC2">
    <div class="container">
        <img src="{{ asset('images/Horizontal Logo.png') }}" alt="Logo" width="200" class="py-4">
        <ul class="nav justify-content-around mx-5 my-4">
            <li class="nav-item"><a class="nav-link text-black" href="{{ route('nutrition-calculator') }}">Nutrition Calculator</a></li>
            <li class="nav-item"><a class="nav-link text-black" href="{{ route('bmi') }}">BMI Calculator</a></li>
            <li class="nav-item"><a class="nav-link text-black" href="{{ route('articles') }}">Article</a></li>
            <li class="nav-item"><a class="nav-link text-black" href="{{ route('landing') }}#about">About Us</a></li>
        </ul>
        <div class="border-top border-success my-4"></div>
    </div>
    <p class="fw-bold fs-5">Geezee - {{ date('Y') }}</p>
</footer>
@extends('layouts.app')

@section('title', 'Articles')

@section('content')
    <section class="py-5">
        <div class="container">
            <p class="display-5 text-center fw-bold mb-4">Articles</p>

            <!-- Search bar -->
            <div class="d-flex justify-content-center mb-5">
                <div class="input-group" style="max-width: 500px;">
                    <input type="text" class="form-control" placeholder="Search...">
                    <button class="btn btn-outline-secondary" type="button">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </div>

            <!-- Tags -->
            <div class="d-flex justify-content-center gap-2 mb-5">
                <button class="btn btn-sm btn-success">Diet</button>
                <button class="btn btn-sm btn-primary">Fitness</button>
                <button class="btn btn-sm btn-warning">Recipe</button>
            </div>

            <!-- Featured Article -->
            <div class="mb-5">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <img src="{{ asset('images/featured-article.png') }}" alt="Featured Article"
                            class="img-fluid rounded">
                    </div>
                    <div class="col-lg-6">
                        <h2 class="fw-bold">WeightWatchers Diet: Reviews, Costs and How It Works</h2>
                        <p class="text-muted">by <a href="#" class="text-danger">Author Name</a></p>
                        <p>
                            WeightWatchers is one of U.S. News & World Report's Best Diets of 2024 with plans starting at
                            $23/month.
                            We cover how the WW Points system works, how the plan incorporates weight loss drugs like
                            Ozempic and how to decide if WW is right for you.
                        </p>
                        <a href="#" class="btn btn-success fw-bold text-white">Read more...</a>
                    </div>
                </div>
            </div>

            <!-- Article Grid -->
            <div class="row g-4">
                @for ($i = 0; $i < 6; $i++)
                    <div class="col-md-4">
                        <div class="card h-100">
                            <img src="{{ asset('images/article.jpeg') }}" class="card-img-top" alt="Article">
                            <div class="card-body">
                                <h5 class="card-title">WeightWatchers Diet: Reviews, Costs and How It Works</h5>
                                <p class="text-muted">by <a href="#" class="text-danger">Author Name</a></p>
                                <p class="card-text">WeightWatchers is one of U.S. News & World Report's Best Diets of 2024
                                    with plans starting at $23/month...</p>
                                <a href="#" class="btn btn-success fw-bold text-white">Read more...</a>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>
@endsection

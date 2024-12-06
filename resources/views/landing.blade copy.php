<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geezee</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/Horizontal Logo.png') }}" alt="Logo" width="100">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="ms-4 collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav gap-4">
                    <li class="nav-item"><a class="nav-link" href="#about">Nutrition Calculator</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">BMI Calculator</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Article</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="text-black py-5 pt-sm-4"
        style="background-image: url('{{ asset('images/herobg.png') }}'); background-size: cover; background-position: bottom;">
        <div class="container pb-sm-5">
            <div class="row align-items-center mb-5">
                <div class="col">
                    <p class="display-4 fw-bold">Healthy Living Starts <br>with <span class="fw-bold text-danger">Smart
                            Nutrition</span></br></h1>
                </div>
                <div class="col text-end">
                    <img src="{{ asset('images/herologo_upscaled.png') }}" alt="Hero Image" width="400">
                </div>
            </div>
        </div>
    </header>

    <section id="why" class="py-3">
        <div class="container">
            <div class="col">
                <div class="row">
                    <p class="display-1 fw-bold mb-0 ">WHY ?</p>
                </div>
                <div class="row">
                    <p class="fs-2 ms-2">Healthy Lifestyle</p>
                </div>
            </div>
            <div class="d-flex col align-items-center mt-1">
                <ul class="list-group-no-border w-75">
                    <li class="list-group-item">
                        <div class="d-flex align-items-center gap-3 mb-2">
                            <img src="{{ asset('images/centang.png') }}" alt="check" width="40">
                            <p class="fs-4">Improved physical health</p>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="d-flex align-items-center gap-3 mb-2">
                            <img src="{{ asset('images/centang.png') }}" alt="check" width="40">
                            <p class="fs-4">Better mental health</p>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="d-flex align-items-center gap-3 mb-2">
                            <img src="{{ asset('images/centang.png') }}" alt="check" width="40">
                            <p class="fs-4">Increased longevity</p>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="d-flex align-items-center gap-3 mb-2">
                            <img src="{{ asset('images/centang.png') }}" alt="check" width="40">
                            <p class="fs-4">Improved self-confidence</p>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="d-flex align-items-center gap-3 mb-2">
                            <img src="{{ asset('images/centang.png') }}" alt="check" width="40">
                            <p class="fs-4">Reduced stress</p>
                        </div>
                    </li>
                </ul>
                <div class="col">
                    <div class="row align-items-center">
                        <div class="d-flex gap-3 justify-content-center">
                            <img src="{{ asset('images/cycle.png') }}" alt="cycle" width="150">
                            <img src="{{ asset('images/lifestyle.png') }}" alt="lifestyle" width="150">
                        </div>
                    </div>
                    <div class="row">
                        <div class="d-flex gap-3">
                            <img src="{{ asset('images/healthytext.png') }}" alt="lifestyle" width="400">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="plans" class="py-5">
        <div class="container">
            <div class="col border rounded-5 text-white p-4 shadow p-3 mb-5 rounded"
                style="background-color: #F2FFF5">
                <p class="fs-2 text-center text-black fw-bold">We have plans for
                    <br>
                    <span class="fs-5 fw-medium">Build healthier habits with personalized lessons</span>
                    </br>
                </p>
                <div class="border-top border-success my-4"></div>
                <div class="row align-items-center">
                    <div class="col text-center">
                        <img src="{{ asset('images/apple.png') }}" alt="apple" width="80">
                        <p class="text-black">Loosing weight</p>
                    </div>
                    <div class="col text-center">
                        <img src="{{ asset('images/banana.png') }}" alt="banana" width="80">
                        <p class="text-black">Gaining weight</p>
                    </div>
                    <div class="col text-center">
                        <img src="{{ asset('images/avo.png') }}" alt="avocado" width="80">
                        <p class="text-black">Maintaining weight</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="for" class="py-3">
        <div class="container">
            <p class="display-5 text-center fw-bold mb-5">Have a <span
                    class="fw-bold text-danger fst-italic display-3">Geezee</span> for</p>
            <!-- Row 1 -->
            <div class="row gap-5">
                <!-- Column 1 -->
                <div class="col d-flex align-items-center mb-4">
                    <img src="{{ asset('images/bmi.png') }}" alt="for" class="w-20">
                    <div class="row">
                        <p class="fw-bold">Understand Your Body's Balance</p>
                        <p class="fw-regular">Quickly check if your weight is healthy with our easy-to-use BMI
                            calculator. It helps you understand your weight status and take steps toward better health.
                        </p>
                    </div>
                </div>

                <!-- Column 2 -->
                <div class="col d-flex align-items-center">
                    <img src="{{ asset('images/learn.png') }}" alt="for" class="w-20 pe-2">
                    <div>
                        <p class="fw-bold">Learn About Nutrition</p>
                        <p>Explore helpful articles on food, diet, and healthy living. Stay informed and discover tips
                            to improve your eating habits and overall wellness.</p>
                    </div>
                </div>
            </div>

            <!-- Row 2 -->
            <div class="row">
                <!-- Column 1 -->
                <div class="col d-flex align-items-center">
                    <img src="{{ asset('images/track.png') }}" alt="for" class="w-20 px-4">
                    <div class="row ms-3">
                        <p class="fw-bold">Track Your Progress</p>
                        <p class="fw-regular text-justify">Enter your meals and get instant insights into your daily
                            nutrient intake. This tool helps you stay on top of what you're eating and make healthier
                            choices.</p>
                    </div>
                </div>
                <!-- Column 2 -->
                <div class="col d-flex align-items-center">
                    <img src="{{ asset('images/chatbot.png') }}" alt="for" class="w-20 ms-2">
                    <div class="row ">
                        <p class="fw-bold">Ask Geezee Chatbot</p>
                        <p>Have questions? Our chatbot is here to help! Get instant answers on nutrition, health, and
                            more anytime you need it.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="what" class="py-5">
        <div class="container mt-4">
            <p class="fs-1 text-start fw-bold mb-5">What is a <span
                    class="fw-bold text-danger fst-italic display-3">Geezee</span> for you?</p>
            <div class="row d-flex pt-5 align-items-center">
                <div class="col">
                    <img src="{{ asset('images/whatis.png') }}" alt="what" class="w-75">
                </div>
                <div class="col">
                    <ul class="list-group-no-border">
                        <li class="list-group-item align-items-center">
                            <div class="d-flex align-items-center gap-3">
                                <img src="{{ asset('images/bulet.png') }}" alt="check" width="40">
                                <p class="fs-4">Improved physical health</p>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex align-items-center gap-3">
                                <img src="{{ asset('images/bulet.png') }}" alt="check" width="40">
                                <p class="fs-4">Better mental health</p>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex align-items-center gap-3">
                                <img src="{{ asset('images/bulet.png') }}" alt="check" width="40">
                                <p class="fs-4">Increased longevity</p>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex align-items-center gap-3">
                                <img src="{{ asset('images/bulet.png') }}" alt="check" width="40">
                                <p class="fs-4">Improved self-confidence</p>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex align-items-center gap-3">
                                <img src="{{ asset('images/bulet.png') }}" alt="check" width="40">
                                <p class="fs-4">Reduced stress</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="articles"
        style="background-image: url('{{ asset('images/articlebg.png') }}'); background-size: cover; background-position: top; background-repeat: no-repeat;">
        <div class="py-5"></div>
        <div class="py-5"></div>
        <div class="py-4"></div>
        <div class="container mb-5">
            <div class="row mb-4 justify-content-center">
                <p class="fs-2 fw-bold text-center">The fresh new <span class="fw-bold text-danger">articles</span></p>
                <p class="fs-5 text-center w-75">With the recipes created (and put to the test) by our in-house team of
                    professional chefs and nutritionists, we can promise you that healthy eating is delicious!</p>
            </div>
            <div class="row g-4">
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('images/healthytext.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-success">Diet, Fitness</h5>
                            <p class="card-text">Get all the protein you need on a plant based diet.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('images/healthytext.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-success">Diet, Fitness</h5>
                            <p class="card-text">Get all the protein you need on a plant based diet.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('images/healthytext.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-success">Diet, Fitness</h5>
                            <p class="card-text">Get all the protein you need on a plant based diet.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section id="about" class="py-5">
            <div class="container justify-content-center">
                <p class="fs-1 text-start fw-bold mb-5">About Us</p>
                <div class="col border rounded-4 p-4 shadow p-3 mb-5 rounded bg-white">
                    <div class="col p-3">
                        <p class="fs-2 text-start fw-bold mb-3 text-success ">At Geezee, we believe that better
                            nutrition leads
                            to a better life</p>
                        <p class="fs-4 text-start mb-5"> Our mission is to make it easier for everyone to understand
                            and
                            improve their nutrition. Whether you're looking to eat healthier, maintain a balanced diet,
                            or
                            achieve specific fitness goals, Geezee provides the tools and knowledge to help you along
                            the way.
                        </p>
                        <p class="fs-4 text-start mb-3"> With features like our BMI calculator, nutrition tracker, and
                            a
                            library of helpful articles, Geezee empowers you to take control of your health. Plus, our
                            chatbot
                            is always available to answer your questions and guide you through your journey.
                        </p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <p class="fs-3 text-center mb-5 w-75    ">At <span class="fw-bold">Geezee</span>, we're passionate about simplifying nutrition, making healthy living accessible to all.
                        Together, let’s make smart choices, one meal at a time.
                    </p>
                </div>
            </div>
        </section>
    </section>

    <footer class="text-center py-3" style="background-color: #BEEBC2">
        <div class="container">
            <img src="{{ asset('images/Horizontal Logo.png') }}" alt="Logo" width="200" class="py-4">
            <ul class="nav justify-content-around mx-5 my-4">
                <li class="nav-item"><a class="nav-link text-black " href="#about">Nutrition Calculator</a></li>
                <li class="nav-item"><a class="nav-link text-black" href="#services">BMI Calculator</a></li>
                <li class="nav-item"><a class="nav-link text-black" href="#contact">Article</a></li>
                <li class="nav-item"><a class="nav-link text-black" href="#contact">About Us</a></li>
            </ul>
            <div class="border-top border-success my-5"></div>
        </div>

        <p class="fw-bold fs-4">Geezee - {{ date('Y') }}</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>

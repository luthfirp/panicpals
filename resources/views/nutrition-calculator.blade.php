@extends('layouts.app')

@section('title', 'Nutrition Calculator')

@section('content')
    <section class="container py-5">
        <p class="display-5 text-center fw-bold">Nutrition Calculator</p>
        <p class="fs-5 text-center mb-5">Select foods and drinks to track your daily intake of calories, protein, carbs, and fats.</p>
        <div class="row text-center mb-5">
            <div class="col-md-3">
                <p id="calories" class="fw-bold display-5">0</p>
                <p>Calories (0% DV)</p>
            </div>
            <div class="col-md-3">
                <p id="protein" class="fw-bold display-5">0</p>
                <p>Protein (0% DV)</p>
            </div>
            <div class="col-md-3">
                <p id="carbs" class="fw-bold display-5">0</p>
                <p>Total Carbs (0% DV)</p>
            </div>
            <div class="col-md-3">
                <p id="fat" class="fw-bold display-5">0</p>
                <p>Total Fat (0% DV)</p>
            </div>
            <div class="text-center my-5">
                <button type="button" class="btn btn-success fw-bold btn-lg" onclick="calculateSelectedNutrition()">Calculate
                    Nutrition</button>
            </div>
        </div>

        <p class="fs-2 text-center fw-bold mb-5">Select Items</p>
        <form id="nutritionForm">
            <div class="row text-center">
                @foreach ($foods as $key => $food)
                <div class="col-md-3 mb-4 d-flex justify-content-center">
                    <div class="card d-flex flex-column align-items-center shadow-sm" style="width: 20rem;">
                        <img src="{{ asset('images/' . $food['image']) }}" class="card-img-top img-fluid" style="width: 100%; height: 25rem; object-fit: cover;" alt="{{ $food['name'] }}">
                        <div class="card-body d-flex flex-column align-items-center">
                            <div class="d-flex align-items-center justify-content-center mt-3">
                                <input type="checkbox" id="{{ $key }}" name="selectedFoods" value="{{ $key }}" class="form-check-input me-2">
                                <label for="{{ $key }}" class="form-check-label">{{ $food['name'] }}</label>
                            </div>
                        </div>                        
                    </div>
                </div>
                @endforeach
            </div>
            
            {{-- <!-- Calculate Button -->
            <div class="text-center mt-4">
                <button type="button" class="btn btn-primary" onclick="calculateSelectedNutrition()">Calculate
                    Nutrition</button>
            </div> --}}
        </form>
    </section>
@endsection

<script>
    let totalNutrition = {
        calories: 0,
        protein: 0,
        carbs: 0,
        fat: 0
    };

    const dailyValues = {
        calories: 2000,
        protein: 50,
        carbs: 275,
        fat: 70
    };

    const nutritionData = {
        'apple': {
            calories: 95,
            protein: 0.5,
            carbs: 25,
            fat: 0.3
        },
        'banana': {
            calories: 105,
            protein: 1.3,
            carbs: 27,
            fat: 0.4
        },
        'broccoli': {
            calories: 55,
            protein: 3.7,
            carbs: 11,
            fat: 0.6
        },
        'salmon': {
            calories: 208,
            protein: 20,
            carbs: 0,
            fat: 13
        },
        'rice': {
            calories: 206,
            protein: 4.2,
            carbs: 45,
            fat: 0.4
        },
        'milk': {
            calories: 122,
            protein: 8,
            carbs: 12,
            fat: 5
        },
        'cheeseburger': {
            calories: 303,
            protein: 17,
            carbs: 31,
            fat: 14
        },
        'french_fries': {
            calories: 365,
            protein: 3.4,
            carbs: 48,
            fat: 17
        },
        'pizza': {
            calories: 285,
            protein: 12,
            carbs: 36,
            fat: 10
        },
        'fried_chicken': {
            calories: 320,
            protein: 18,
            carbs: 11,
            fat: 21
        },
        'hot_dog': {
            calories: 150,
            protein: 5,
            carbs: 2,
            fat: 13
        },
        'cola': {
            calories: 140,
            protein: 0,
            carbs: 39,
            fat: 0
        },
        'milkshake': {
            calories: 350,
            protein: 9,
            carbs: 60,
            fat: 10
        },
        'coffee': {
            calories: 30,
            protein: 0.9,
            carbs: 5,
            fat: 0.3
        },
        'beer': {
            calories: 154,
            protein: 2,
            carbs: 13,
            fat: 0
        },
        'orange_juice': {
            calories: 112,
            protein: 1.7,
            carbs: 26,
            fat: 0.5
        }
    };

    function calculateSelectedNutrition() {
        // Reset total nutrition
        totalNutrition = {
            calories: 0,
            protein: 0,
            carbs: 0,
            fat: 0
        };

        // Get selected food items
        const selectedFoods = document.querySelectorAll('input[name="selectedFoods"]:checked');

        // Loop through selected items and accumulate nutrition values
        selectedFoods.forEach(food => {
            const nutrition = nutritionData[food.value];
            totalNutrition.calories += nutrition.calories;
            totalNutrition.protein += nutrition.protein;
            totalNutrition.carbs += nutrition.carbs;
            totalNutrition.fat += nutrition.fat;
        });

        // Update nutrition display
        updateNutritionDisplay();
    }

    function updateNutritionDisplay() {
        document.getElementById('calories').textContent = totalNutrition.calories;
        document.getElementById('protein').textContent = totalNutrition.protein;
        document.getElementById('carbs').textContent = totalNutrition.carbs;
        document.getElementById('fat').textContent = totalNutrition.fat;

        document.querySelector("#calories + p").textContent =
            `Calories (${getPercentage(totalNutrition.calories, dailyValues.calories)}% DV)`;
        document.querySelector("#protein + p").textContent =
            `Protein (${getPercentage(totalNutrition.protein, dailyValues.protein)}% DV)`;
        document.querySelector("#carbs + p").textContent =
            `Total Carbs (${getPercentage(totalNutrition.carbs, dailyValues.carbs)}% DV)`;
        document.querySelector("#fat + p").textContent =
            `Total Fat (${getPercentage(totalNutrition.fat, dailyValues.fat)}% DV)`;
    }

    function getPercentage(value, dailyValue) {
        return ((value / dailyValue) * 100).toFixed(0);
    }
</script>

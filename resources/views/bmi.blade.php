@extends('layouts.app')

@section('title', 'BMI Calculator')

@section('content')
<section class="container py-5">
    <p class="display-5 text-center fw-bold">BMI Calculator</p>
    <p class="text-center fs-5">Calculate your Body Mass Index (BMI) using the metric system.</p>

    <form id="bmiForm" onsubmit="calculateBMI(event)" class="mt-4">
        <!-- Gender -->
        <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>
            <select id="gender" class="form-select" required>
                <option value="" disabled selected>Select your gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>

        <!-- Age -->
        <div class="mb-3">
            <label for="age" class="form-label">Age (years)</label>
            <input type="number" id="age" class="form-control" min="1" required>
        </div>

        <!-- Height -->
        <div class="mb-3">
            <label for="height" class="form-label">Height (cm)</label>
            <input type="number" id="height" class="form-control" min="1" required>
        </div>

        <!-- Weight -->
        <div class="mb-3">
            <label for="weight" class="form-label">Weight (kg)</label>
            <input type="number" id="weight" class="form-control" min="1" required>
        </div>

        <!-- Submit Button -->
        <div class="text-center">
            <button type="submit" class="btn btn-success fw-bold btn-lg mt-4">Calculate</button>
        </div>
    </form>

    <!-- Result Section -->
    <div id="bmiResult" class="mt-5 d-none">
        <h3 class="text-center fw-bold">Your BMI Result</h3>
        <p class="text-center">Below is your BMI and its interpretation:</p>
        <div class="text-center">
            <p class="fw-bold">BMI: <span id="bmiValue" class="text-primary"></span></p>
            <p class="fw-bold">Category: <span id="bmiCategory" class="text-success"></span></p>
        </div>
    </div>
</section>


<script>
    function calculateBMI(event) {
    event.preventDefault();

    const gender = document.getElementById("gender").value;
    const age = parseInt(document.getElementById("age").value);
    const height = parseFloat(document.getElementById("height").value) / 100; // Convert cm to meters
    const weight = parseFloat(document.getElementById("weight").value);

    // Check if all inputs are valid
    if (!gender || isNaN(age) || isNaN(height) || isNaN(weight) || height <= 0 || weight <= 0) {
        alert("Please fill out all fields with valid values.");
        return;
    }

    // Calculate BMI
    const bmi = (weight / (height * height)).toFixed(1);

    // Determine BMI category
    let category;
    if (bmi < 18.5) {
        category = "Underweight";
    } else if (bmi >= 18.5 && bmi <= 24.9) {
        category = "Normal weight";
    } else if (bmi >= 25 && bmi <= 29.9) {
        category = "Overweight";
    } else {
        category = "Obesity";
    }

    // Display Results
    document.getElementById("bmiValue").textContent = bmi;
    document.getElementById("bmiCategory").textContent = category;

    // Show result section
    document.getElementById("bmiResult").classList.remove("d-none");
}
</script>
@endsection
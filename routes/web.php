<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\NutritionCalculatorController;

// Landing Page
Route::get('/', [LandingPageController::class, 'index'])->name('landing');

// BMI Calculator Page
Route::get('/bmi', function () {
    return view('bmi');
})->name('bmi');

// Article Page
Route::get('/articles', function () {
    return view('articles');
})->name('articles');

// Nutrition Calculator Page
Route::get('/nutrition-calculator', [NutritionCalculatorController::class, 'showNutritionCalculator'])->name('nutrition-calculator');

// Route::get('/nutrition-calculator', function () {
//     return view('nutrition-calculator');
// })->name('nutrition-calculator');


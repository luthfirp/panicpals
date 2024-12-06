<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NutritionCalculatorController extends Controller
{
    public function showNutritionCalculator()
    {
        // Expanded list of food items with nutritional values
        $foods = [
            // Healthy Foods
            'apple' => [
                'name' => 'Apple',
                'image' => 'apple.jpg',
                'calories' => 95,
                'protein' => 0.5,
                'carbs' => 25,
                'fat' => 0.3
            ],
            'banana' => [
                'name' => 'Banana',
                'image' => 'banana.jpg',
                'calories' => 105,
                'protein' => 1.3,
                'carbs' => 27,
                'fat' => 0.4
            ],
            'broccoli' => [
                'name' => 'Broccoli (1 cup)',
                'image' => 'broccoli.jpg',
                'calories' => 55,
                'protein' => 3.7,
                'carbs' => 11,
                'fat' => 0.6
            ],
            'salmon' => [
                'name' => 'Salmon (100g)',
                'image' => 'salmon.jpg',
                'calories' => 208,
                'protein' => 20,
                'carbs' => 0,
                'fat' => 13
            ],
            'rice' => [
                'name' => 'Rice (1 cup)',
                'image' => 'rice.jpg',
                'calories' => 206,
                'protein' => 4.2,
                'carbs' => 45,
                'fat' => 0.4
            ],
            'milk' => [
                'name' => 'Milk (1 cup)',
                'image' => 'milk.jpg',
                'calories' => 122,
                'protein' => 8,
                'carbs' => 12,
                'fat' => 5
            ],

            // Fast Food Items
            'cheeseburger' => [
                'name' => 'Cheeseburger',
                'image' => 'cheeseburger.jpg',
                'calories' => 303,
                'protein' => 17,
                'carbs' => 31,
                'fat' => 14
            ],
            'french_fries' => [
                'name' => 'French Fries (medium)',
                'image' => 'french_fries.jpg',
                'calories' => 365,
                'protein' => 3.4,
                'carbs' => 48,
                'fat' => 17
            ],
            'pizza' => [
                'name' => 'Pizza Slice (pepperoni)',
                'image' => 'pizza.jpg',
                'calories' => 285,
                'protein' => 12,
                'carbs' => 36,
                'fat' => 10
            ],
            'fried_chicken' => [
                'name' => 'Fried Chicken (1 piece)',
                'image' => 'fried_chicken.jpg',
                'calories' => 320,
                'protein' => 18,
                'carbs' => 11,
                'fat' => 21
            ],
            'hot_dog' => [
                'name' => 'Hot Dog',
                'image' => 'hot_dog.jpg',
                'calories' => 150,
                'protein' => 5,
                'carbs' => 2,
                'fat' => 13
            ],

            // Drinks
            'cola' => [
                'name' => 'Cola (1 can)',
                'image' => 'cola.jpg',
                'calories' => 140,
                'protein' => 0,
                'carbs' => 39,
                'fat' => 0
            ],
            'orange_juice' => [
                'name' => 'Orange Juice (1 cup)',
                'image' => 'orange_juice.jpg',
                'calories' => 112,
                'protein' => 1.7,
                'carbs' => 26,
                'fat' => 0.5
            ],
            'milkshake' => [
                'name' => 'Milkshake (medium)',
                'image' => 'milkshake.jpg',
                'calories' => 350,
                'protein' => 9,
                'carbs' => 60,
                'fat' => 10
            ],
            'coffee' => [
                'name' => 'Coffee (with milk and sugar)',
                'image' => 'coffee.jpg',
                'calories' => 30,
                'protein' => 0.9,
                'carbs' => 5,
                'fat' => 0.3
            ],
            'beer' => [
                'name' => 'Beer (1 can)',
                'image' => 'beer.jpg',
                'calories' => 154,
                'protein' => 2,
                'carbs' => 13,
                'fat' => 0
            ],
        ];

        // Pass the foods array to the view
        return view('nutrition-calculator', compact('foods'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalorieCalc extends Controller
{
    public function index()
    {
        return view('calc.index');
    }

//    public function calc() {
//        return view('calc.calc');
//    }

    public function checkAnswer()
    {
        return 'This is the form answer';
    }

    /**
     * GET
     * /calc/calc
     * Show the form to calculate calorie
     */
    public function calc(Request $request)
    {
        $foodsRawData = file_get_contents(database_path('/foods.json'));
        $foods = json_decode($foodsRawData, true);

        return view('calc.calc')->with([
            'foods' => $foods,
            'quantity' => $request -> session() -> get('quantity', ''),
            'unit' => $request -> session() -> get('unit', ''),
            'inputFood' => $request -> session() -> get('inputFood', ''),
            'nutrFacts' => $request -> session() -> get('nutrFacts', [])
        ]);
    }

    /**
     * GET
     * /calc/calc-process
     * Process the form to calculate calorie
     */
    public function calcProcess(Request $request)
    {
        $request->validate([
            'quantity' => 'required|numeric|min:0|max:10',
            'unit' => 'required',
        ]);
//        dump($request->all());
        $foodsRawData = file_get_contents(database_path('/foods.json'));
        $foods = json_decode($foodsRawData, true);

        $quantity = $request->input('quantity', null);
        $unit = $request->input('unit', null);
        $inputFood = $request->input('food', null);

        //set up coefficient based on the unit input
        $coefficient = ($unit === 'lb') ? 4.536 : 10;

        $nutrFacts = [];

        # Save nutrition facts to selected food
        foreach ($foods as $food) {
            if ($inputFood === $food['name']) {
                foreach ($food['nutrition-per-100g'] as $nutr => $nutrAmt) {
                    $nutrFacts[$nutr] = round($nutrAmt * $coefficient * $quantity);

                    if ($nutr == "energy") {
                        $nutrFacts[$nutr] .= " calorie";
                    } else {
                        $nutrFacts[$nutr] .= " g";
                    }
                }
            }
        }

//        return $nutrFacts;

        return redirect('/calc')->with([
            'quantity' => $quantity,
            'unit' => $unit,
            'inputFood' => $inputFood,
            'nutrFacts' => $nutrFacts
        ]);
    }

}

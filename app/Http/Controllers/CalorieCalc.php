<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalorieCalc extends Controller
{
    public function index() {
        return view('calc.index');
    }

    public function calc() {
        return view('calc.calc');
    }

    public function checkAnswer() {
        return 'This is the form answer';
    }

    public function foodList() {

    }
}

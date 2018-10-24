<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{

    public function index() {
        return view('calc.index');
    }

    public function checkAnswer() {
        return 'This is the form answer';
    }

}

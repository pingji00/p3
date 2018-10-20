<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index() {
        return 'The Form is going to be shown here';
    }
    public function checkAnswer() {
        return 'This is the form answer';
    }
}

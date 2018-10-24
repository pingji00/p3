@extends('layout.master')
@section('title')
    Calorie Calculator
@endsection

@section('content')
    <form method='GET' action='calc.php'>

        <label>Qty:<input type="number" name="quantity" placeholder=<?= (isset($foodName)) ? $quantity : "'How much do you eat?'" ?>></label>
        <label><input type='radio' name="unit" id="lb" value="lb" checked> lb</label>
        <label><input type="radio" name="unit" id='kg' value="kg"> kg</label><br><br>
        <label>Food name:
            <select name='food' id='food'>

                <option value='name'>food name</option>

            </select>
        </label>
        <input type='submit' value='submit'><br>

    </form>
@endsection
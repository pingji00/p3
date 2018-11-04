@extends('layout.master')
@section('title')
    Calorie Calculator
@endsection
@push('morecss')
    <link href='/css/calc/calc-form.css' rel='stylesheet'>
@endpush


@section('content')
    <form class='calc-container' method='GET' action='calc/calc-process.php'>

        <label>Qty:<input type="number" name="quantity" placeholder=<?= (isset($foodName)) ? $quantity : "'How much do you eat?'" ?>></label>
        <label><input type='radio' name="unit" id="lb" value="lb" checked> lb</label>
        <label><input type="radio" name="unit" id='kg' value="kg"> kg</label><br><br>
        <label>Food name:
            <select name='food' id='food'>
            {{--@foreach()--}}
                <option value='name'>food name</option>
            {{--@endforeach--}}
            </select>
        </label>
        <input type='submit' value='submit'><br>

    </form>

@endsection
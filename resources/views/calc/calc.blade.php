@extends('layout.master')
@section('title')
    Calorie Calculator
@endsection
@push('morecss')
    <link href='/css/calc/calc-form.css' rel='stylesheet'>
@endpush


@section('content')
    <form class='calc-container' method='GET' action='/calc-process'>

        <label>Qty:<input type="number"
                          name="quantity"
                          placeholder=<?= ($inputFood) ? $quantity : "'How much do you eat?'" ?>></label>
        <label><input type='radio' name="unit" id="lb" value="lb" checked> lb</label>
        <label><input type="radio" name="unit" id='kg' value="kg"> kg</label><br><br>
        <label>Food name:
            <select name='food' id='food'>
                {{--<option value='name'>food name</option>--}}
                @foreach($foods as $food)
                    <option value='{{ $food["name"] }}'> {{ $food["name"] }} </option>
                @endforeach
            </select>
        </label>
        <input type='submit' value='submit'><br>

    </form>
    @if($quantity)
        <div id='result'>
            <p class='alert' role='alert'>{{ $quantity }} {{ $unit }} {{ $inputFood }} contains</p>
            <dl>
                <?php foreach ($nutrFacts as $nutr => $nutrAmout): ?>
                <dt><?= $nutr ?></dt>
                <dd><?= $nutrAmout ?></dd>
                <?php endforeach; ?>
            </dl>
        </div>
    @endif
@endsection
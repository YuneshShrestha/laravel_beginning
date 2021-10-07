
@extends('template')
@section('body')
    <div class="container grid_container py-2">
        <div class="one" style="background-color: {{ $color1 }} ;"></div>
        <div class="two" style="background-color: {{ $color2 }} ;"></div>
        <div class="three" style="background-color: {{ $color3 }} ;"></div>
        <div class="four" style="background-color: {{ $color4 }} ;"></div>
        <div class="five" style="background-color: {{ $color5 }} ;"></div>
    </div>
@endsection
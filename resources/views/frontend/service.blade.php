@extends('template')

@section('body')
    <div class="container py-2">
        <h3>Service</h3>
        <p style="color: {{ $color }}">
            {{ $data }}
        </p>
    </div>
@endsection
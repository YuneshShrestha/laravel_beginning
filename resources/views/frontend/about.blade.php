
@extends('template')
@section('body')
   <div class="container">
    <div class="row py-2">
        <div class="col-md-6">
            <h3>About Us</h3>
            <p>
                {{ $data }}
            </p>
        </div>
        <div class="col-md-6">
           <img src="https://images.pexels.com/photos/16347/pexels-photo.jpg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="" class="img-fluid">
        </div>
    </div>
   </div>
@endsection
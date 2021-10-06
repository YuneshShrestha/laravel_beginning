{{-- inheriting template --}}
@extends('template')
 {{-- Storing data --}}
@section('body')
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner" style="height: 75vh">
      <div class="carousel-item active">
        <img src="https://images.pexels.com/photos/450035/pexels-photo-450035.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block w-100" alt="...">

      </div>
      <div class="carousel-item">
        <img src="https://images.pexels.com/photos/777001/pexels-photo-777001.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block w-100" alt="...">

      </div>
      <div class="carousel-item">
        <img src="https://images.pexels.com/photos/1420701/pexels-photo-1420701.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div class="container py-2">
    <div class="cards">
      <div class="row">
        <div class="col-md-4">
            
            @section('title')
                Course 1
            @endsection
            @section('cardbody')
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo consectetur architecto, tempora cum suscipit qui aut atque reiciendis dolores id deserunt esse fuga. Sunt assumenda quas placeat totam a 1111!
            @endsection
            @include('frontend.card')
        </div>
        <div class="col-md-4">
         
          @section('title')
              Course 2
          @overwrite
          @section('cardbody')
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo consectetur architecto, tempora cum suscipit qui aut atque reiciendis dolores id deserunt esse fuga. Sunt assumenda quas placeat totam a dhdq fa!
            @overwrite
            @include('frontend.card')  
        </div>
        <div class="col-md-4">
        
          @section('title')
              Course 3
          @overwrite
          @section('cardbody')
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo consectetur architecto, tempora cum suscipit qui aut atque reiciendis dolores id deserunt esse fuga. Sunt assumenda quas placeat totam a facere!
            @overwrite
            @include('frontend.card')  
        </div>
      </div>
    </div>
  </div>
@endsection
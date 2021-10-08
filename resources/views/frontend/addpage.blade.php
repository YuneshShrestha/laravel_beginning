@extends('template')
@section('body')
<div class="container py-2">
  <div class="card">
      <div class="card-header">
          <a href="/table_list">Back</a>
      </div>
      <div class="card-body">
        @include('frontend.entry_form')
          
      </div>
  </div>
</div>
@endsection
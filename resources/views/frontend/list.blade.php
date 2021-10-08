@extends('template')
@section('body')
<div class="container py-2">
  <div class="card">
      <div class="card-header">
          <a href="/add">Entry Form</a>
      </div>
      <div class="card-body">
        <table class="table table-light">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Mobile</th>
                    <th>School</th>
                    <th>Refered By</th>
                </tr>
            </thead>
            {{-- <tbody>
                <tr>
                    <td></td>
                </tr>
            </tbody> --}}
        </table>
          
      </div>
  </div>
</div>
@endsection
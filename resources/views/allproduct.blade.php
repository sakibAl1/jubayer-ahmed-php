
@extends('master')
@section('content')
    

   {{-------------------------- main -------------------------}}




   <div class="container mt-3">
    <h2>Basic Table</h2>
    
    @if(session()->has('message'))
<div class="alert alert-danger">
{{ session()->get('message')}}
</div>
@endif


    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>PRODUCT NAME</th>
          <th>PRODUCT IMG</th>
          <th>ACTION</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($products as $item)

        <tr>
          <td>{{ $item->id }}</td>
          <td>{{ $item->product_name }}</td>
          <td><img src="{{asset('upload/productphoto/'.$item->product_img)}}" alt="" width="100"></td>
          <td>
            <a href="{{ route('editproduct', $item->id) }}" class="btn btn-primary">Edit</a>
            <a href="{{ route('deleteproduct', $item->id) }}" class="btn btn-warning">Delete</a>
          </td>
        </tr>
       @endforeach
      
      </tbody>
    </table>
  </div>
        @endsection
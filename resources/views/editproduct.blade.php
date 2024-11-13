@extends('master')
@section('content')
    

   {{-------------------------- main -------------------------}}



   {{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}
    <form action="{{ route('updateproduct', $products->id) }}" method="post">
        @csrf
        <div class="row mb-3">
            <label class="col-sm-3" for="">Product Name</label>
            <div class="col-sm-10">
            <input type="text"  name="product_name">
        </div>
        </div>
        
        <div class="row mb-3">
            <label class="col-sm-3" for="">Product img</label>
            <div class="col-sm-10">
            <input type="file"  name="product_img">
        </div>
        </div>
        
       

        <div class="row">
            <div class="col-sm-3">
                <button type="submit" class="btn btn-secondary">Add Product</button>
            </div>

        </div>
    </form>




@endsection
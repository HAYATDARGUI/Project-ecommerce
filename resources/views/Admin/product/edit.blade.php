@extends('layouts.admin')


@section('content')
<div class="card">
    <div class="card-header">
      <h4>Update Product</h4>
    </div>
    <div class="card-body">
        <form method="POST" action="{{url('update-product/'.$product->id)}}" enctype="multipart/form-data"> 
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="">Name</label>
                    <input type="text" class="form-control border border-dark p-2" value="{{ $product->name }}" name="name">
                </div>    
                <div class="col-md-6 mb-3">
                    <label for="">Slug</label>
                    <input type="text" class="form-control border border-dark p-2" value="{{ $product->slug }}" name="slug">
                </div> 
             
                <div class="col-md-12 mb-3">
                    <label for="">Description</label>
                    <textarea name="description"  rows="3" class="form-control p-2 border border-dark" >{{ $product->description }} </textarea>   
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Original Price</label>
                    <input type="number" class="form-control border border-dark p-2" name="original_price" value="{{ $product->original_price }}">
                </div> 
                <div class="col-md-6 mb-3">
                    <label for="">Selling Price</label>
                    <input type="number" class="form-control border border-dark p-2" name="selling_price" value="{{ $product->selling_price }}">
                </div> 
                <div class="col-md-6 mb-3">
                    <label for="">Quantity</label>
                    <input type="number" class="form-control border border-dark p-2" name="qty" value="{{ $product->qty }}">
                </div> 
               
                <div class="col-md-6 mb-3">
                    <label for="">Status</label>
                    <input type="checkbox"  class="border border-dark p-2" name="status" {{ $product->status == "1" ? "checked" : "" }}>
                </div>    
                <div class="col-md-6 mb-3">
                    <label for="">Trending</label>
                    <input type="checkbox"  class="border border-dark p-2" name="trending" {{ $product->trending == "1" ? "checked" : ""}}>
                </div>    
                 
                   
                  
                @if ($product->image)
                    <img src="{{asset('upload/product/'.$product->image)}}" class="w-25 h-25" alt="no image">
                @endif
                <div class="col-md-12 mb-3">
                   <input type="file" name="image"  class="form-control border border-dark p-2" value="{{ $product->image }}">
                </div>    
                <div class="col-md-12 mb-3">
                   <button type="submit" class="btn btn-primary">Submit</button>
                </div>    
            </div>    
        </form>
    </div>
  </div>
@endsection
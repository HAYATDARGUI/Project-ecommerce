@extends('layouts.admin')


@section('content')
<div class="card">
    <div class="card-header">
      <h4>Update Categories</h4>
    </div>
    <div class="card-body">
        <form method="POST" action="{{url('update-category/'.$category->id)}}" enctype="multipart/form-data"> 
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="">Name</label>
                    <input type="text" class="form-control border border-dark p-2" value="{{ $category->name }}" name="name">
                </div>       
                <div class="col-md-12 mb-3">
                   <button type="submit" class="btn btn-primary">Submit</button>
                </div>    
            </div>    
        </form>
    </div>
  </div>
@endsection
@extends('admin.includes.main_admin')
@section('title','Edit Product')
@section('content')

<div class="container">
    <div class="row">
        @include('admin.includes.sidebar_admin')
         <div class="col-md-9">
              <div class="panel panel-primary">
      <div class="panel-heading">Edit Products</div>
      <div class="panel-body">
       
       <form action="{{route('product.update', $products->id)}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        {{method_field('put')}}
        <div class="form-group">
          <label for="title">Title :</label>
          <input type="text" name="title" class="form-control" value="{{$products->title}}">
        </div>

        <div class="form-group">
          <label for="description">Description :</label>
          <input type="text" name="description" class="form-control" value="{{$products->Description}}">
        </div>

        <div class="form-group">
          <label for="price">Price :</label>
          <input type="text" name="price" class="form-control" value="{{$products->price}}">
        </div>

        <div class="form-group">
          <label for="image">Image :</label>
          <input type="file" name="image" class="form-control">
        </div>

        <div class="form-group">
          <img src="{{asset('images/'.$products->image)}}" style="width:40%" height="200px">
        </div>

        <button type="submit" class="btn btn-success">Submit </button>
       </form> 
    
        </div>
    </div>
    </div>
  </div>
</div>

@endsection
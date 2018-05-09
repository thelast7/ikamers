@extends('admin.includes.main_admin')
@section('title','New Product')
@section('content')

<div class="container">
    <div class="row">
        @include('admin.includes.sidebar_admin')
         <div class="col-md-9">
              <div class="panel panel-primary">
      <div class="panel-heading">All Products</div>
      <div class="panel-body">
       
       <form  action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
          <label for="title">Title :</label>
          <input type="text" name="title" class="form-control" placeholder="Title..">
        </div>

        <div class="form-group">
          <label for="description">Description :</label>
          <input type="text" name="description" class="form-control" placeholder="Description..">
        </div>

        <div class="form-group">
          <label for="price">Price :</label>
          <input type="text" name="price" class="form-control" placeholder="Price..">
        </div>

        <div class="form-group">
          <label for="image">Image :</label>
          <input type="file" name="image" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Submit </button>
       </form> 
    
        </div>
    </div>
    </div>
  </div>
</div>

@endsection
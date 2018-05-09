@extends('admin.includes.main_admin')
@section('title','Product Index')
@section('content')

<div class="container">
    <div class="row">
        @include('admin.includes.sidebar_admin')
         <div class="col-md-9">
              <div class="panel panel-primary">
      <div class="panel-heading">All Products</div>
      <div class="panel-body">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Image</th> 
              <th>Title</th>
              <th>Description</th>
              <th>Price</th>
              <th></th>
              <th></th>
            <tr>
          </thead>
             <tbody>
              @foreach($products as $product)
              <tr>
                  <td width="200"><img src="{{asset('/images/'.$product->image)}}" style="width:100%"></td>
                  <td>{{$product->title}}</td>
                  <td>{{$product->description}}</td>
                  <td>{{$product->price}}</td>
                  <td>
                    <a href="{{route('product.edit', $product->id)}}" class="btn btn-success btn-sm">Edit</a>
                  </td> 
                  <td>
                    <a href="" class="btn btn-danger btn-sm">Delete</a>
                  </td>
                </tr>
                @endforeach
             </tbody>
          </table>
        </div>
    </div>
    <div class="text-center">
      {!!$products->links();!!}
    </div>
    </div>
  </div>
</div>

@endsection
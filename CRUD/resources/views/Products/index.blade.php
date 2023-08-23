@extends('layouts.app')
@section('main')
<div class="container text-end mt-3 mb-3">
  <a href="products/create">New Product</a>
</div>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($products as $Products)
    <tr>
      <th>{{$Products->id}}</th>
      <td>{{$Products->name}}</td>
      <td><img src="products/{{$Products->image}}" class="rounded-circle" width="50" height="50"></td>
      <td><a href="products/{{$Products->id}}/edit">Edit<a>
      <a href="products/{{$Products->id}}/delete">Delete<a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{$products->links()}}
@endsection
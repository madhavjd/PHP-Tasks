@extends('layouts.app')
@section('main')
<div class="container justify-content-center col-sm-5 mt-3">
<form method="post" action="{{route('products.store')}}" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}">
    @if($errors->has('name'))
    <span class="text-danger">{{$errors->first('name')}}</span>
    @endif
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <textarea id="description" class="form-control" name="description" rows="4">{{old('description')}}</textarea>
    @if($errors->has('description'))
    <span class="text-danger">{{$errors->first('description')}}</span>
    @endif
  </div>
  <div class="form-group">
  <label for="image">Images</label>
  <input type="file" class="form-control" name="image" id="name">
  @if($errors->has('description'))
    <span class="text-danger">{{$errors->first('image')}}</span>
    @endif
  </div>
  <button type="submit" class="btn btn-primary mt-3">Submit</button>
</form>
</div>
@endsection
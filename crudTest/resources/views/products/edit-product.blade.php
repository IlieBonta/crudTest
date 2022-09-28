@extends('products.show')

@include('header')

@section('title-block') Product Edit Page @endsection

<form action="{{route('edit-product-submit', $data->id)}}" class="px-md-5 py-md-3 form-control-lg" method="post">
    @csrf   {{--Ключ безопасности для любой формы--}}
    <div class="form-group">
        <label for="name">Product Name</label>
        <input value="{{$data->name}}" type="text" name="name" placeholder="Enter the name of product" id="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="price">Product Price</label>
        <input value="{{$data->price}}" type="number" name="price" placeholder="Enter the price" id="price" class="form-control">
    </div>
    <div class="form-group">
        <label  for="description">Product Description</label>
        <textarea  name="description" id="description" class="form-control" cols="30" rows="10"
                  placeholder="Enter the item description">{{$data->description}}</textarea>
    </div>
    <button type="submit" class="btn btn-success mt-3">Change</button>
</form>

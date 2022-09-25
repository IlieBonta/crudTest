{{--сделал extends product.show чтобы подключить стили--}}
@extends('products.show')
@include('header')
<form action="" class="px-md-5 py-md-3 form-control-lg" method="post">
    <div class="form-group">
        <label for="name">Product Name</label>
        <input type="text" name="name" placeholder="Enter the name of product" id="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="price">Product Price</label>
        <input type="number" name="price" placeholder="Enter the price" id="price" class="form-control">
    </div>
    <div class="form-group">
        <label for="message">Product Description</label>
        <textarea name="message" id="message" class="form-control" cols="30" rows="10"
                  placeholder="Enter the item description"></textarea>
    </div>
    <button type="submit" class="btn btn-success mt-1">Submit</button>
</form>


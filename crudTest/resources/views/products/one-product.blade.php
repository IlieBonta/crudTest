@extends('products.show')
@include('header')
<h1 class="text-center m-5">{{$data->name}}</h1>
<div class="row m-auto mt-5 row-cols-md-3 mb-3 text-center justify-content-center">
    <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
                <h4 class="my-0 fw-normal">{{$data->name}}</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">{{$data->price}}$</h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>{{$data->description}}</li>
                    <li><small>{{$data->created_at}}</small></li>
                </ul>
                <div class="d-flex justify-content-around">
                <a href="{{ route('edit-product',$data->id) }}">
                <button  type="button" class="w-20 btn btn-lg btn-success btn-primary">Edit</button>
                </a>
                <a href="{{ route('delete-product',$data->id) }}">
                <button type="button" class="w-20 btn btn-lg btn-danger btn-primary">Delete</button>
                </a>
                </div>
            </div>
        </div>
    </div>
</div>

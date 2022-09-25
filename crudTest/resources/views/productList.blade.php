
<h1 class="text-center m-5">Products List</h1>
<div class="row row-cols-1 m-auto mt-5 row-cols-md-3 mb-3 text-center">
    @foreach($products as $product)
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">{{$product->name}}</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">{{$product->price}}$</h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>{{$product->description}}</li>

                    </ul>
                    <button href="show.blade.php" type="button" class="w-80 btn btn-lg btn-primary">Take a look</button>
                    <button type="button" class="w-20 btn btn-lg btn-success btn-primary">Edit</button>
                    <button type="button" class="w-20 btn btn-lg btn-danger btn-primary">Delete</button>
                </div>
            </div>
        </div>
    @endforeach
</div>


<h1 class="text-center m-5">Products List</h1>

<div class="row row-cols-1 m-auto mt-5 row-cols-md-3 mb-3 text-center">
    @foreach($products as $productItem)
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">{{$productItem->name}}</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">{{$productItem->price}}$</h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>{{$productItem->description}}</li>
                        <li><small>{{$productItem->created_at}}</small></li>
                    </ul>
                    <a href="{{ route('one-product',$productItem->id) }}">
                        <button type="button" class="w-80 btn btn-lg btn-primary ">Take a look</button>
                    </a>
                    <a href="{{ route('edit-product',$productItem->id) }}">
                        <button type="button" class="w-20 btn btn-lg btn-success btn-primary">Edit</button>
                    </a>
                    <a href="{{ route('delete-product',$productItem->id) }}">
                        <button type="button" class="w-20 btn btn-lg btn-danger btn-primary">Delete</button>
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</div>


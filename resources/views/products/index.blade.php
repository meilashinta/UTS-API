@extends('layouts.app')
@section('content')
        <h1>All Product</h1>
        <div class="row">
            @forelse ($products as $product)
              <div class="col-4 pb-4" style="height: auto;">
                <div class="card h-100">
                  <img src="{{$product['image']}}" class="card-img-top object-fit-contain" alt="..." style="height: 200px;">
                  <div class="card-body d-flex flex-column justify-content-end">
                    <h5 class="card-title">{{$product['title']}}</h5>
                    <p class="card-text">{{$product['price']}}</p>
                    <a href="{{route('detail', ['id' => $product['id']])}}" class="btn btn-primary">Detail</a>
                  </div>
                </div>
              </div>
            @empty
              <span>Product Not Found</span>
            @endforelse
        </div>
@endsection
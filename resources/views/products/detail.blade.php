@extends('layouts.app')
@section('content')
    <div class="row py-5">
        <div class="col-lg-4 col-12">
            <img src="{{ $product['image'] }}" alt="" class="w-100 object-fit-contain">
        </div>
        <div class="col-lg-8 col-12">
            <div class="product-detail">
                <h1 class="fs-1 fw-semibold">{{ $product['title'] }}</h1>
                <span class="fs-2 fw-bold">${{ $product['price'] }}</span>
                <p>{{ $product['description'] }}</p>
            </div>
            <div class="col-12 py-3">
                <button class="btn btn-primary w-100">Buy Now</button>
            </div>
        </div>
    </div>
@endsection
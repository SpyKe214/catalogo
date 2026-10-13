@extends('layouts.app')

@section('content')
    <div class="product-grid">
        @foreach($products as $product)
            @include('partials.product', ['product' => $product])
        @endforeach
    </div>
@endsection
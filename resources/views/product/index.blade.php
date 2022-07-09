<!DOCTYPE html>
<html>
    <head>
        <title>商品一覧 | {{ config('app.name', 'Laravel')}}</title>
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    </head>
    <body>
        <nav class="navbar navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="{{ route('product.index') }}">{{ config('app.name', 'Laravel')}}</a>
                <a class="fas fa-shopping-cart" href="#"></a>
            </div>
        </nav>
    </body>

    <div class="jumbotron top-img">
        <p class="text-center text-white top-img-text">{{ config('app.name', 'Laravel')}}</p>
    </div>

    <div class="container">
        <div class="top__title text-center">
            All Products
        </div>
        <div class="row">
            @foreach ($products as $product)
            <a href="#" class="col-lg-4 col-md-6">
                <div class="card">
                    <img src="{{ asset($product->image) }}" class="card-img"/>
                    <div class="card-body">
                        <p class="card-title">{{ $product->name }}</p>
                        <p class="card-text">¥{{ number_format($product->price) }}</p>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</html>

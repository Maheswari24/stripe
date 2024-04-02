<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link href="{{ asset('resources/css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style>
.card-body {
    margin: 12px auto;
    width: 100%;
    text-align: center;
    border: 1px solid #ccc;
    padding: 12px;
}
h5.card-title {
    font-weight: bold;
}
</style>

</head>
<body>
<div class="container">
    <h1>Products</h1>
    <div class="row">
        @foreach($products as $product)
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">Price: INR {{ $product->price }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href='{{ route("products.show",["id" => $product->id])}}'>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Buy Now</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<script src="{{ asset('resources/js/app.js') }}"></script>
</body>
</html>
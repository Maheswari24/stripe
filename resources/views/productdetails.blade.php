<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link href="{{ asset('resources/css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://js.stripe.com/v3/"></script>    
</head>
<body>
<div class="container">
    <h1>{{ $product->name }}</h1>
    <p>Price: INR {{ $product->price }}</p>
    <!-- Stripe Credit Card Form -->
    <form action="{{route('checkout')}}" method="post" id="payment-form">
        <!-- Display Product Details -->
        <input type="hidden" name="product_id" value="{{ $product->id }}">
        <input type="hidden" name='price' value="{{ $product->price }}" />
        <input type="hidden" name='name' value="{{ $product->name }}" />
        <input type="hidden" name="_token" value="{{csrf_token()}}" />
        <button type="submit">Submit Payment</button>
    </form>
    
</div>
</body>
</html>
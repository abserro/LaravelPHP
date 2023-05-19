<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http - equiv="X-UA-Compatible" content="IE=edge">
    <title> Category </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>

<h1>{{ $category->name }}</h1>

<form action="{{ route('category.filter', $category->code) }}" method="get">
    <div>
        <label for="min_price">Min Price:</label>
        <input type="number" name="min_price" id="min_price" value="{{ $filters['min_price'] ?? '' }}">
    </div>

    <div>
        <label for="max_price">Max Price:</label>
        <input type="number" name="max_price" id="max_price" value="{{ $filters['max_price'] ?? '' }}">
    </div>

    <div>
        <button type="submit">Apply Filter</button>
    </div>
</form>

@if ($products->count() > 0)
    <ul>
        @foreach ($products as $product)
            <li>{{ $product->name }} - Price: ${{ $product->price }}</li>
        @endforeach
    </ul>

    {{ $products->links() }}
@else
    <p>No products found in this category.</p>
@endif

</body>
</html>

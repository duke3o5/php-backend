{{-- Display the list of products --}}
@foreach ($products as $product)
    <div>
        <h2>{{ $product->title }}</h2>
        <p>Category: {{ $product->category }}</p>
        <p>Color: {{ $product->color }}</p>
        <p>Size: {{ $product->size }}</p>
        <p>Price: {{ $product->price }}</p>
        <a href="{{ route('products.show', $product->id) }}">View Details</a>
    </div>
@endforeach

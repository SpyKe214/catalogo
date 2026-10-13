<div class="product-card">
    <img src="{{ asset('img/' . $product->image) }}" alt="{{ $product->name }}" style="width: 100%; border-radius: 8px; margin-bottom: 15px;">
    
    <div class="brand">{{ $product->brand }}</div>
    <h2>{{ $product->name }}</h2>
    <p>{{ $product->description }}</p>
    <div class="price">{{ $product->price }} €</div>
    <button>Añadir al carrito</button>
</div>
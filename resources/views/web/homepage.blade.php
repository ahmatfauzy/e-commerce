<x-layout>
    <x-slot name="title">{{ $title }}</x-slot>

    {{-- Kategori Produk --}}
    <div class="container py-4">
        <h2 class="fw-bold text-primary border-bottom pb-2 mb-4">Kategori Produk</h2>
        <div class="row g-4">
            @foreach($categories as $category)
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card h-100 shadow-sm border border-secondary rounded">
                    <div class="ratio ratio-4x3">
                        <img src="{{ $category->image }}" class="card-img-top object-fit-cover" alt="{{ $category->name }}">
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $category->name }}</h5>
                        <p class="card-text text-muted small flex-grow-1">{{ $category->description }}</p>
                        <a href="/category/{{ $category->slug }}" class="btn btn-outline-primary mt-2">Detail</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    {{-- Semua Produk --}}
    <div class="container py-4">
        <h2 class="fw-bold text-primary border-bottom pb-2 mb-4">Semua Produk</h2>
        <div class="row g-4">
            @foreach($categories as $category)
            @foreach($category->products as $product)
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card h-100 shadow-sm border border-secondary rounded">
                    <div class="ratio ratio-4x3">
                        <img src="{{ $product->image }}" class="card-img-top object-fit-cover" alt="{{ $product->name }}">
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text text-muted small">{{ $product->description }}</p>
                        <div class="d-flex justify-content-between small mb-2">
                            <span class="badge bg-success">{{ number_format($product->price, 0, ',', '.') }} IDR</span>
                            <span class="badge bg-info text-dark">{{ $product->stock }} stok</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-auto">
                            <small class="text-muted">Kategori: {{ $category->name }}</small>
                            <a href="/product/{{ $product->slug }}" class="btn btn-primary btn-sm">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endforeach
        </div>
    </div>

</x-layout>
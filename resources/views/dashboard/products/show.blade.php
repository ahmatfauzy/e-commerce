<x-layouts.app>
    <div class="mx-auto p-4">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-semibold text-gray-200">Product Details</h1>
            <div class="flex space-x-2">
                <a href="{{ route('products.edit', $product->id) }}" class="bg-yellow-600 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                    Edit
                </a>
                <a href="{{ route('products.index') }}" class="bg-gray-600 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                    Back to List
                </a>
            </div>
        </div>

        <div class="bg-gray-800 rounded-lg shadow overflow-hidden">
            <div class="flex flex-col md:flex-row">
                <div class="w-full md:w-1/3 p-6">
                    @if($product->image)
                        <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-full h-auto object-cover rounded">
                    @else
                        <div class="w-full h-64 bg-gray-700 rounded flex items-center justify-center">
                            <span class="text-gray-400">No Image Available</span>
                        </div>
                    @endif
                </div>
                <div class="w-full md:w-2/3 p-6">
                    <div class="mb-4">
                        <h2 class="text-xl font-semibold text-gray-200">{{ $product->name }}</h2>
                        <p class="text-sm text-gray-400">{{ $product->slug }}</p>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-y-4 gap-x-6 mb-6">
                        <div>
                            <h3 class="text-sm font-medium text-gray-400">Price</h3>
                            <p class="text-gray-200 text-lg">{{ number_format($product->price, 2) }}</p>
                        </div>
                        
                        <div>
                            <h3 class="text-sm font-medium text-gray-400">Stock</h3>
                            <p class="text-gray-200 text-lg">{{ $product->stock }}</p>
                        </div>
                        
                        <div>
                            <h3 class="text-sm font-medium text-gray-400">Category</h3>
                            <p class="text-gray-200">{{ $product->category->name }}</p>
                        </div>
                        
                        <div>
                            <h3 class="text-sm font-medium text-gray-400">Created At</h3>
                            <p class="text-gray-200">{{ $product->created_at->format('d M Y, H:i') }}</p>
                        </div>
                    </div>
                    
                    <div>
                        <h3 class="text-sm font-medium text-gray-400">Description</h3>
                        <div class="mt-2 text-gray-300">
                            {{ $product->description ?? 'No description available' }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
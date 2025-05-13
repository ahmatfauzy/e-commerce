<x-layouts.app>
    <div class="mx-auto p-6 max-w-2xl"> <!-- Added max-w-2xl to match the width -->
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-semibold text-gray-200">Edit Product</h1>
            <a href="{{ route('dashboard.products.index') }}">
                <flux:button variant="filled" color="gray" class="hover:bg-gray-600 text-white">Back to List</flux:button>
            </a>
        </div>

        <div class="bg-gray-800 rounded-lg shadow p-6">
            <form action="{{ route('dashboard.products.update', $product->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-1 gap-6">
                    <!-- Name Field -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-300">Name</label>
                        <input type="text" name="name" id="name" value="{{ old('name', $product->name) }}" 
                               class="mt-2 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-base border-gray-600 bg-gray-700 text-white rounded-md px-4 py-2 h-10">
                        @error('name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Category Field -->
                    <div>
                        <label for="category_id" class="block text-sm font-medium text-gray-300">Category</label>
                        <select name="category_id" id="category_id" 
                                class="mt-2 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-base border-gray-600 bg-gray-700 text-white rounded-md px-4 py-2 h-10">
                            <option value="">Select Category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Price Field -->
                    <div>
                        <label for="price" class="block text-sm font-medium text-gray-300">Price</label>
                        <input type="number" name="price" id="price" value="{{ old('price', $product->price) }}" step="0.01" min="0"
                               class="mt-2 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-base border-gray-600 bg-gray-700 text-white rounded-md px-4 py-2 h-10">
                        @error('price')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Stock Field -->
                    <div>
                        <label for="stock" class="block text-sm font-medium text-gray-300">Stock</label>
                        <input type="number" name="stock" id="stock" value="{{ old('stock', $product->stock) }}" min="0"
                               class="mt-2 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-base border-gray-600 bg-gray-700 text-white rounded-md px-4 py-2 h-10">
                        @error('stock')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Description Field -->
                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-300">Description</label>
                        <textarea name="description" id="description" rows="4" 
                                  class="mt-2 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-base border-gray-600 bg-gray-700 text-white rounded-md px-4 py-2">{{ old('description', $product->description) }}</textarea>
                        @error('description')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Product Image URL -->
                    <div>
                        <label for="image" class="block text-sm font-medium text-gray-300">Product Image URL</label>
                        @if($product->image)
                            <div class="mb-2">
                                <img src="{{ $product->image }}" alt="{{ $product->name }}" class="h-16 w-auto object-cover rounded">
                                <p class="text-xs text-gray-400 mt-1">Current image</p>
                            </div>
                        @endif
                        <input type="text" name="image" id="image" value="{{ old('image', $product->image) }}" 
                               class="mt-2 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-base border-gray-600 bg-gray-700 text-white rounded-md px-4 py-2 h-10">
                        <p class="text-xs text-gray-400 mt-1">Enter an image URL or leave blank to keep the current image</p>
                        @error('image')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="mt-6">
                    <flux:button type="submit" variant="filled" color="blue" class="w-full">
                        Update Product
                    </flux:button>
                </div>
            </form>
        </div>
    </div>
</x-layouts.app>
<x-layouts.app>
    <div class="mx-auto p-6">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-semibold text-gray-200">Edit Category</h1>
            <a href="{{ route('dashboard.category.index') }}">
                <flux:button variant="filled" color="gray" class="hover:bg-gray-600 text-white">Back to List</flux:button>
            </a>
        </div>

        <div class="bg-gray-800 rounded-lg shadow p-6">
            <form action="{{ route('dashboard.category.update', $category->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-1 gap-6">
                    <!-- Name Field -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-300">Name</label>
                        <input type="text" name="name" id="name" value="{{ old('name', $category->name) }}" 
                               class="mt-2 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-base border-gray-600 bg-gray-700 text-white rounded-md px-4 py-2">
                        @error('name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Description Field -->
                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-300">Description</label>
                        <textarea name="description" id="description" rows="4" 
                                  class="mt-2 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-base border-gray-600 bg-gray-700 text-white rounded-md px-4 py-2">{{ old('description', $category->description) }}</textarea>
                        @error('description')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Category Image URL -->
                    <div>
                        <label for="image" class="block text-sm font-medium text-gray-300">Category Image URL</label>
                        @if($category->image)
                            <div class="mb-2">
                                <!-- Resize the image here -->
                                <img src="{{ $category->image }}" alt="{{ $category->name }}" class="h-16 w-auto object-cover rounded">
                                <p class="text-xs text-gray-400 mt-1">Current image</p>
                            </div>
                        @endif
                        <input type="text" name="image" id="image" value="{{ old('image', $category->image) }}" 
                               class="mt-2 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-base border-gray-600 bg-gray-700 text-white rounded-md px-4 py-2">
                        <p class="text-xs text-gray-400 mt-1">Enter an image URL or leave blank to keep the current image</p>
                        @error('image')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="mt-6">
                    <flux:button type="submit" variant="filled" color="blue" class="w-full">
                        Update Category
                    </flux:button>
                </div>
            </form>
        </div>
    </div>
</x-layouts.app>

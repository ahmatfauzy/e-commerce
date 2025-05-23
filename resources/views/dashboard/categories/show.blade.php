<x-layouts.app>
    <div class="mx-auto p-6 max-w-6xl">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-semibold text-gray-200">Category Details</h1>
            <div class="flex space-x-2">
                <flux:button 
                    as="a" 
                    href="{{ route('dashboard.category.edit', $category->id) }}" 
                    variant="filled" 
                    color="yellow"
                >
                    Edit
                </flux:button>
                <flux:button 
                    as="a" 
                    href="{{ route('dashboard.category.index') }}" 
                    variant="filled" 
                    color="gray"
                >
                    Back to List
                </flux:button>
            </div>
        </div>

        <div class="bg-gray-800 rounded-lg shadow overflow-hidden">
            <div class="flex flex-col md:flex-row">
                <div class="w-full md:w-1/3 p-6">
                    @if($category->image)
                        <img src="{{ $category->image }}" alt="{{ $category->name }}" class="w-full h-auto object-cover rounded max-h-96">
                    @else
                        <div class="w-full h-64 bg-gray-700 rounded flex items-center justify-center">
                            <span class="text-gray-400">No Image Available</span>
                        </div>
                    @endif
                </div>
                <div class="w-full md:w-2/3 p-6 space-y-6">
                    <div>
                        <h2 class="text-xl font-semibold text-gray-200 mb-1">{{ $category->name }}</h2>
                        <p class="text-sm text-gray-400">{{ $category->slug }}</p>
                    </div>

                    <div>
                        <h3 class="text-sm font-medium text-gray-400 mb-1">Created At</h3>
                        <p class="text-gray-200">{{ $category->created_at->format('d M Y, H:i') }}</p>
                    </div>

                    <div>
                        <h3 class="text-sm font-medium text-gray-400 mb-1">Description</h3>
                        <div class="text-gray-300">
                            {{ $category->description ?? 'No description available' }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
<x-layouts.app>
    <div class="mx-auto p-3 sm:p-6">
        <div class="flex flex-col sm:flex-row justify-between items-center mb-4 sm:mb-6 gap-3">
            <h1 class="text-xl sm:text-2xl font-bold text-gray-200">Products</h1>
            <flux:button
                as="a"
                href="{{ route('dashboard.products.create') }}"
                variant="filled"
                color="primary"
                class="w-full font-bold sm:w-auto px-4 py-2 sm:px-5 sm:py-2.5 rounded-lg shadow-md hover:shadow-lg transition duration-300 flex items-center justify-center gap-2">
                <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-5 sm:w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg> -->
                + Add New Product
            </flux:button>
        </div>

        @if(session('success'))
        <div class="bg-green-500 text-white p-3 sm:p-4 mb-4 sm:mb-6 rounded-lg shadow flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 sm:h-6 sm:w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
            {{ session('success') }}
        </div>
        @endif

        {{-- Mobile view --}}
        <div class="block lg:hidden">
            @foreach ($products as $key => $product)
            <div class="mb-4 bg-gray-800 shadow-lg rounded-lg overflow-hidden">
                <div class="p-3 border-b border-gray-700 flex items-center justify-center">
                    @if($product->image)
                    <img src="{{ $product->image }}" alt="{{ $product->name }}" class="h-40 w-auto object-cover rounded-lg ring-2 ring-gray-600">
                    @else
                    <div class="h-20 w-20 bg-gray-700 rounded-lg flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    @endif
                </div>
                <div class="p-3 border-b border-gray-700 space-y-2 text-gray-300 text-sm">
                    <div><span class="text-gray-400">Name:</span> {{ $product->name }}</div>
                    <div><span class="text-gray-400">Price:</span> Rp {{ number_format($product->price, 0, ',', '.') }}</div>
                    <div><span class="text-gray-400">Stock:</span> {{ $product->stock }}</div>
                    <div><span class="text-gray-400">Category:</span> {{ $product->category->name }}</div>
                </div>
                <div class="p-3 flex flex-wrap gap-2 justify-center">
                    <flux:button
                        as="a"
                        href="{{ route('dashboard.products.show', $product->id) }}"
                        variant="subtle"
                        color="blue"
                        class="flex-1 px-3 py-2 rounded-lg flex items-center justify-center hover:bg-blue-600 transition-colors text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                        View
                    </flux:button>
                    <flux:button
                        as="a"
                        href="{{ route('dashboard.products.edit', $product->id) }}"
                        variant="subtle"
                        color="amber"
                        class="flex-1 px-3 py-2 rounded-lg flex items-center justify-center hover:bg-amber-600 transition-colors text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                        Edit
                    </flux:button>
                    <flux:button
                        as="a"
                        href="#"
                        variant="subtle"
                        color="red"
                        onclick="event.preventDefault(); document.getElementById('delete-form-{{ $product->id }}').submit();"
                        class="flex-1 px-3 py-2 rounded-lg flex items-center justify-center hover:bg-red-600 transition-colors text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                        Delete
                    </flux:button>
                    <form id="delete-form-{{ $product->id }}" action="{{ route('dashboard.products.destroy', $product->id) }}" method="POST" class="hidden">
                        @csrf
                        @method('DELETE')
                    </form>
                </div>
            </div>
            @endforeach
        </div>

        {{-- Desktop view --}}
        <div class="hidden lg:block bg-gray-800 rounded-lg shadow overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-700 table-auto text-gray-300">
                <thead class="bg-gray-900">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">No.</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Image</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Price</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Stock</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Category</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-gray-800 divide-y divide-gray-700">
                    @foreach ($products as $key => $product)
                    <tr>
                        <td class="px-6 py-4 text-sm text-gray-400">{{ $key + 1 }}</td>
                        <td class="px-6 py-4">
                            @if($product->image)
                            <img src="{{ $product->image }}" alt="{{ $product->name }}" class="h-10 w-10 object-cover rounded ring-2 ring-gray-600">
                            @else
                            <div class="h-10 w-10 bg-gray-700 rounded flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                            @endif
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-200">{{ $product->name }}</td>
                        <td class="px-6 py-4 text-sm text-gray-200">Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                        <td class="px-6 py-4 text-sm text-gray-200">{{ $product->stock }}</td>
                        <td class="px-6 py-4 text-sm text-gray-200">{{ $product->category->name }}</td>
                        <td class="px-6 py-4 text-sm text-gray-200">
                            <div class="flex gap-2">
                                <flux:button as="a" href="{{ route('dashboard.products.show', $product->id) }}" variant="subtle" color="blue" class="px-3 py-2 rounded-lg flex items-center justify-center hover:bg-blue-600 transition-colors text-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7s-8.268-2.943-9.542-7z"/>
                                    </svg>
                                    View
                                </flux:button>
                                <flux:button as="a" href="{{ route('dashboard.products.edit', $product->id) }}" variant="subtle" color="amber" class="px-3 py-2 rounded-lg flex items-center justify-center hover:bg-amber-600 transition-colors text-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                    </svg>
                                    Edit
                                </flux:button>
                                <form action="{{ route('dashboard.products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?')">
                                    @csrf
                                    @method('DELETE')
                                    <flux:button as="button" type="submit" variant="subtle" color="red" class="px-3 py-2 rounded-lg flex items-center justify-center hover:bg-red-600 transition-colors text-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                        </svg>
                                        Delete
                                    </flux:button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>

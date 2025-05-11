<x-layouts.app>
    <x-app-logo />

    <table class="min-w-full divide-y divide-gray-700 table-auto bg-gray-800 text-gray-300">
        <thead class="bg-gray-900">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">No.</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Name</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Slug</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Description</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Actions</th>
            </tr>
        </thead>
        <tbody class="bg-gray-800 divide-y divide-gray-700">
            @foreach ($categories as $key => $category)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-400">{{ $key + 1 }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-200">{{ $category->name }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-200">{{ $category->slug }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-400">{{ $category->description }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-400"></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    
</x-layouts.app>
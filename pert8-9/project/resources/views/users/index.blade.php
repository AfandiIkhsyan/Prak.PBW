<x-app-layout>

    <x-slot name="heading">Users</x-slot>
    
    <div class="sm:flex sm:items-center">
        <x-section-title>
            <x-slot name="title">Users</x-slot>
            <x-slot name="description">Daftar semua pengguna di akun Anda termasuk nama, gelar, email dan peran.</x-slot>
        </x-section-title>
        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
            <x-button as="a" href="/users/create" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                Add user
            </x-button>
        </div>
    </div>
    <div class="mt-8 flow-root">
        <x-table class="min-w-full border-collapse border border-gray-200 shadow-sm rounded-lg overflow-hidden">
        <x-table.thead class="bg-gray-100">
            <tr>
                <x-table.th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">#</x-table.th>
                <x-table.th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</x-table.th>
                <x-table.th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</x-table.th>
                <x-table.th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Created At</x-table.th>
                <x-table.th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider"></x-table.th>
            </tr>
        </x-table.thead>
        <x-table.tbody class="bg-white divide-y divide-gray-200">
            @foreach ($users as $user)

            <tr class="hover:bg-gray-50">
                <x-table.td class="px-6 py-4 text-sm text-gray-900">{{ $loop->iteration }}</x-table.td>
                <x-table.td class="px-6 py-4 text-sm text-gray-900">{{ $user->name }}</x-table.td>
                <x-table.td class="px-6 py-4 text-sm text-gray-900">{{ $user->email }}</x-table.td>
                <x-table.td class="px-6 py-4 text-sm text-gray-900">{{ (new \Carbon\Carbon($user->published_at))->format('d M Y') }}</x-table.td>
                <x-table.td class="px-6 py-4 text-sm text-gray-900">
                    <div class="flex justify-end gap-x-2">
                    <a href="/users/{{ $user->id }}" class="text-blue-600 hover:underline">View</a>
                    <a href="/users/{{ $user->id }}/edit" class="text-blue-600 hover:underline">Edit</a>
                    </div>
                </x-table.td>
            </tr>

            @endforeach
        </x-table.tbody>
    </x-table>

    </div>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7fafc;
        }

        table {
            width: 100%;
            border-spacing: 0;
        }

        thead th {
            background-color: #f1f5f9;
            color: #374151;
            text-transform: uppercase;
            font-size: 0.75rem;
            font-weight: 600;
            padding: 0.75rem;
        }

        tbody tr:hover {
            background-color: #f9fafb;
        }

        td {
            padding: 0.75rem;
            font-size: 0.875rem;
            color: #4b5563;
        }

        .hover\:bg-gray-50:hover {
            background-color: #f9fafb;
        }

        .text-blue-600 {
            color: #2563eb;
        }

        .text-blue-600:hover {
            text-decoration: underline;
        }

    </style>

</x-app-layout>

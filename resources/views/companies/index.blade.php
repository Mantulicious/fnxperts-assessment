<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Companies') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            @if (session('success'))
                <div class="p-4 text-sm text-green-800 rounded-lg bg-green-100" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <a href="{{ route('companies.create') }}"
                class="inline-flex items-center rounded-md border border-transparent bg-emerald-600 px-4 py-2 text-xs font-semibold uppercase tracking-widest text-white shadow-sm transition hover:bg-emerald-700 focus:bg-emerald-700 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2 active:bg-emerald-900">
                {{ __('Create new company') }}
            </a>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border border-gray-200">
                <div class="p-6 text-gray-900">
                    <h3 class="text-md font-medium text-gray-700 mb-4">{{ __('Companies list') }}</h3>

                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-4 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                        Logo</th>
                                    <th scope="col"
                                        class="px-4 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                        Name</th>
                                    <th scope="col"
                                        class="px-4 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                        Address</th>
                                    <th scope="col"
                                        class="px-4 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                        Website</th>
                                    <th scope="col"
                                        class="px-4 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                        Email</th>
                                    <th scope="col"
                                        class="px-4 py-3 text-right text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                        Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse ($companies as $company)
                                    <tr>
                                        <td class="px-4 py-3 whitespace-nowrap">
                                            @if ($company->logo)
                                                <img src="{{ asset('storage/' . $company->logo) }}"
                                                    alt="{{ $company->name }}"
                                                    class="h-10 w-10 object-cover rounded border">
                                            @else
                                                <span class="text-xs text-gray-400 italic">No logo</span>
                                            @endif
                                        </td>
                                        <td class="px-4 py-3 whitespace-nowrap font-medium text-gray-900">
                                            {{ $company->name }}</td>
                                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-600">
                                            {{ $company->address ?? '-' }}</td>
                                        <td class="px-4 py-3 whitespace-nowrap text-sm text-blue-600">
                                            @if ($company->website)
                                                <a href="{{ $company->website }}" target="_blank"
                                                    class="hover:underline">{{ $company->website }}</a>
                                            @else
                                                <span class="text-gray-400">-</span>
                                            @endif
                                        </td>
                                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-600">
                                            {{ $company->email ?? '-' }}</td>
                                        <td class="px-4 py-3 whitespace-nowrap text-right text-sm space-x-2">
                                            <a href="{{ route('companies.edit', $company) }}"
                                                class="inline-block px-3 py-1 bg-gray-100 hover:bg-gray-200 text-gray-700 text-xs font-semibold rounded border border-gray-300">
                                                Edit
                                            </a>
                                            <form action="{{ route('companies.destroy', $company) }}" method="POST"
                                                class="inline-block"
                                                onsubmit="return confirm('Are you sure you want to delete this company?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="px-3 py-1 bg-red-600 hover:bg-red-700 text-white text-xs font-semibold rounded">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="px-4 py-6 text-center text-sm text-gray-500">
                                            No companies found. Click "Create new company" above.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination: 10 per page -->
                    <div class="mt-4">
                        {{ $companies->links() }}
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>

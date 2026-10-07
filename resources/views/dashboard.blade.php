<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>

            <div class="mt-6 grid grid-cols-1 gap-4 sm:grid-cols-2">
                <a href="{{ route('companies.index') }}"
                    class="group flex items-center justify-between rounded-lg border border-gray-200 bg-white p-4 text-gray-900 shadow-sm transition hover:border-blue-300 hover:shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    <div>
                        <h3 class="text-base font-semibold">Companies</h3>
                        <p class="mt-1 text-sm text-gray-500">View company list</p>
                    </div>
                    <span class="text-xl text-blue-600 transition-transform group-hover:translate-x-1" aria-hidden="true">&rarr;</span>
                </a>

                <a href="{{ route('employees.index') }}"
                    class="group flex items-center justify-between rounded-lg border border-gray-200 bg-white p-4 text-gray-900 shadow-sm transition hover:border-emerald-300 hover:shadow-md focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2">
                    <div>
                        <h3 class="text-base font-semibold">Employees</h3>
                        <p class="mt-1 text-sm text-gray-500">View employee directory</p>
                    </div>
                    <span class="text-xl text-emerald-600 transition-transform group-hover:translate-x-1" aria-hidden="true">&rarr;</span>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Company Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mb-4">
                        @if ($company->logo)
                            <img src="{{ asset('storage/' . $company->logo) }}" alt="{{ $company->name }}"
                                class="h-32 w-32 rounded object-cover">
                        @endif
                    </div>

                    <div class="mb-4">
                        <h3 class="text-lg font-semibold">Name:</h3>
                        <p>{{ $company->name }}</p>
                    </div>

                    <div class="mb-4">
                        <h3 class="text-lg font-semibold">Email:</h3>
                        <p>{{ $company->email ?? 'N/A' }}</p>
                    </div>

                    <div class="mb-4">
                        <h3 class="text-lg font-semibold">Website:</h3>
                        <p>
                            @if ($company->website)
                                <a href="{{ $company->website }}" target="_blank"
                                    class="text-blue-600 hover:text-blue-900">{{ $company->website }}</a>
                            @else
                                N/A
                            @endif
                        </p>
                    </div>

                    <div class="mb-4">
                        <h3 class="text-lg font-semibold">Employees:</h3>
                        <p>{{ $company->employees->count() }}</p>
                    </div>

                    <div class="flex items-center space-x-4">
                        <a href="{{ route('companies.edit', $company) }}"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Edit
                        </a>
                        <a href="{{ route('companies.index') }}"
                            class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                            Back
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Employee Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mb-4">
                        <h3 class="text-lg font-semibold">First Name:</h3>
                        <p>{{ $employee->first_name }}</p>
                    </div>

                    <div class="mb-4">
                        <h3 class="text-lg font-semibold">Last Name:</h3>
                        <p>{{ $employee->last_name }}</p>
                    </div>

                    <div class="mb-4">
                        <h3 class="text-lg font-semibold">Company:</h3>
                        <p>
                            <a href="{{ route('companies.show', $employee->company) }}"
                                class="text-blue-600 hover:text-blue-900">
                                {{ $employee->company->name }}
                            </a>
                        </p>
                    </div>

                    <div class="mb-4">
                        <h3 class="text-lg font-semibold">Email:</h3>
                        <p>{{ $employee->email ?? 'N/A' }}</p>
                    </div>

                    <div class="mb-4">
                        <h3 class="text-lg font-semibold">Phone:</h3>
                        <p>{{ $employee->phone ?? 'N/A' }}</p>
                    </div>

                    <div class="flex items-center space-x-4">
                        <a href="{{ route('employees.edit', $employee) }}"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Edit
                        </a>
                        <a href="{{ route('employees.index') }}"
                            class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                            Back
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

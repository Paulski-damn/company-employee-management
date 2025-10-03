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
                    <h2 class="text-xl font-semibold mb-2">Welcome to the Company & Employee Management System</h2>
                    <p class="mb-2">
                        This system allows you to manage companies and their employees efficiently. You can:
                    </p>
                    <ul class="list-disc list-inside mb-2">
                        <li>Create, view, update, and delete company records.</li>
                        <li>Manage employee information for each company.</li>
                        <li>Track employee details and company associations easily.</li>
                    </ul>
                    <p>
                        Use the navigation menu to access the <strong>Companies</strong> and <strong>Employees</strong>
                        sections.
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

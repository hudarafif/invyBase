<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('admin.postaddsupplier') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Supplier Name</label>
                            <input type="text" class="form-control"
                            name="supplier_name" placeholder="Enter the name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Contact info</label>
                            <input type="text" class="form-control"
                            name="supplier_address" placeholder="Enter the address info">
                        </div>
                        <button type="submit" class="btn btn-primary">Add Supplier</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

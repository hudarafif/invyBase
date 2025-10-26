div<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-900">
                    <form action="{{ route('admin.postupdatecategory', $category->id) }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Category Name</label>
                            <input type="text" class="form-control"
                            name="category_name" 
                            value="{{ $category->category_name }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Update Category</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

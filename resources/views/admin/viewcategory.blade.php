<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="fw-semibold fs-4 text-dark mb-0">
                {{ __('Admin Dashboard') }}
            </h2>
        </div>
    </x-slot>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-11">
                <div class="card shadow-sm border-0 rounded-4">
                    <div class="card-header bg-primary text-white fw-bold fs-5 py-3 text-center">
                        Category List
                    </div>

                    <div class="card-body bg-light p-4">
                        @if ($categories->isEmpty())
                            <div class="alert alert-warning text-center mb-0">
                                No categories available.
                            </div>
                        @else
                            <div class="table-responsive">
                                <table class="table table-striped table-hover align-middle text-center">
                                    <thead class="table-dark">
                                        <tr>
                                            <th scope="col" class="fw-semibold">Category ID</th>
                                            <th scope="col" class="fw-semibold">Category Name</th>
                                            <th scope="col" class="fw-semibold">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $category)
                                            <tr>
                                                <th scope="row">{{ $category->id }}</th>
                                                <td>{{ $category->category_name }}</td>
                                                <td> 
                                                    <a href="{{ route('admin.deletecategory', $category->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete
                                                    <a href="{{ route('admin.updatecategory', $category->id) }}" class="btn btn-success ms-2">Update
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

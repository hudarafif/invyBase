<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="fw-semibold fs-4 text-dark mb-0">
                {{ __('Admin Dashboard') }}
            </h2>
        </div>
    </x-slot>

    <div class="container py-5 ">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-10">
                <div class="card shadow-sm border-0 rounded-4">
                    <div class="card-header bg-success text-white text-center fw-bold">
                        Add New Category
                    </div>
                    <div class="card-body bg-light">
                        <form action="{{ route('admin.postaddcategory') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="category_name" class="form-label fw-semibold">Category Name</label>
                                <input 
                                    type="text" 
                                    name="category_name" 
                                    id="category_name" 
                                    class="form-control" 
                                    placeholder="Enter category name..." 
                                    required
                                >
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success fw-bold">
                                    <i class="bi bi-plus-circle me-1"></i> Add Category
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

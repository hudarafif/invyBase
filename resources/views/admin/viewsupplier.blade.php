<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

     <div class="card-body bg-light p-4">
                        @if ($suppliers->isEmpty())
                            <div class="alert alert-warning text-center mb-0">
                                No categories available.
                            </div>
                        @else
                            <div class="table-responsive">
                                <table class="table table-striped table-hover align-middle text-center">
                                    <thead class="table-dark">
                                        <tr>
                                            <th scope="col" class="fw-semibold">Supplier Name</th>
                                            <th scope="col" class="fw-semibold">Supplier Address</th>
                                            <th scope="col" class="fw-semibold">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($suppliers as $supplier)
                                            <tr>
                                                <th scope="row">{{ $supplier->supplier_name }}</th>
                                                <td>{{ $supplier->supplier_address}}</td>
                                                <td> 
                                                    <a href="{{ route('admin.deletecategory', $supplier->supplier_name) }}" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete
                                                    <a href="{{ route('admin.updatecategory', $supplier->supplier_name) }}" class="btn btn-success ms-2">Update
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>
</x-app-layout>

@extends('layouts.master')
@section('pages')
    <div class="container">
        <!-- Page Header -->
        <div class="card bg-info mb-3 p-4">
            <div class="row">
                <div class="col-12 d-flex justify-content-between align-item-center ">
                    <h3 class=" card-title text-white d-flex align-items-center  m-0">Stock List</h3>
                    <a href="{{ route('stocks.create') }}" class="btn btn-light btn-sm" title="Create New Product">
                        <i class="fa fa-plus mr-1"></i> Create New Stock
                    </a>
                </div>
            </div>
        </div>
        <!-- Filter Section -->
        <div class="card mb-3 p-4">
            <div class="row">
                <div class="col-12">
                    <div class="form-row">
                        <!-- Search Input with Icon -->
                        <div class="col-md-5">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text px-2 py-2 bg-primary text-white">
                                        <i class="fa fa-search"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="search"
                                    placeholder="Search product by name">
                            </div>
                        </div>

                        <!-- Filter by Category -->
                        <div class="col-md-3">
                            <select class="form-control" id="filterCategory">
                                <option value="">Filter by Category</option>
                                <option value="">option-1</option>
                                <option value="">option-2</option>
                                <option value="">option-3</option>
                                <option value="">option-4</option>
                            </select>
                        </div>

                        <!-- Apply Filters Button -->
                        <div class="col-md-2">
                            <button class="btn btn-primary btn-block">Apply Filters</button>
                        </div>

                        <!-- Reset Filters Button -->
                        <div class="col-md-2">
                            <button class="btn btn-outline-danger btn-block">Reset Filters</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end filter section -->

        <!-- Table section -->
        <div class="card mb-3 p-4">
            <!-- Table -->
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Product id</th>
                            <th>Qty</th>
                            <th>Transaction id</th>
                            <th>Remarks</th>
                            <th>Money store id</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($stocks as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ optional($item->product)->name ?? $item->product_id }}</td>
                                <td>{{ $item->qty }}</td>
                                <td>{{ optional($item->transaction)->name ?? $item->transaction_id }}</td>
                                <td>{{ $item->remarks }}</td>
                                <td>{{ optional($item->moneyStore)->name ?? $item->money_store_id }}</td>
                                <td>
                                    <a href="{{ route('stocks.show', $item->id) }}" class="btn btn-sm btn-info">View</a>
                                    <a href="{{ route('stocks.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('stocks.destroy', $item->id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger"
                                            onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- Pagination -->
            <nav>
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- End table section -->
    </div>
@endsection

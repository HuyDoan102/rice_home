@extends('layouts.admin.layouts')

@section('admin-content')
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">E-commerce Dashboard Template </h2>
                        <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('foods.index') }}">Food Management</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- ============================================================== -->

                <!-- ============================================================== -->

                <!-- recent orders  -->
                <!-- ============================================================== -->
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <h5 class="card-header">Recent Orders</h5>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="bg-light">
                                    <tr class="border-0">
                                        <th class="border-0">#</th>
                                        <th class="border-0">Image</th>
                                        <th class="border-0">Food Name</th>
                                        <th class="border-0">Food Description</th>
                                        <th class="border-0">Price</th>
                                        <th class="border-0">Time</th>
                                        <th class="border-0">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($foods as $food)
                                        <tr>
                                            <td>{{ $food->id }}</td>
                                            <td>
                                                <div class="m-r-10"><img src="{{ $food->image }}" alt="user" class="rounded" width="45"></div>
                                            </td>
                                            <td>{{ $food->name }}</td>
                                            <td>{{ str_limit($food->description, 30) }}</td>
                                            <td>{{ $food->price }}</td>
                                            <td>{{ $food->updated_at }}</td>
                                            <td>
                                                <a href="#" class="btn btn-outline-info btn-sm">Edit</a>
                                                <a href="#" class="btn btn-outline-danger btn-sm">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div>
                                    <span class="justify-content-center">{{ $foods->links() }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
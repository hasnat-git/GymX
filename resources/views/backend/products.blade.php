@extends('backend.layouts.main')
@section('title', 'products')
@section('main-container')
<div class="container-fluid"><br>
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary"><a href="{{url('/admin')}}">Main Menu</a> | products List</h6>
                        <a href="{{url('/admin/product-add')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm float-right"><i
                        class="fas fa-plus fa-sm text-white-50"></i>Add New product</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Details</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>tag</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th width="160px">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($product as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->title }}</td>
                                    <td>{{ $product->details }}</td>
                                    <td>{{ $product->category }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->tag }}</td>
                                    <td>
                                        <img src="/backend/images/products/{{$product->image}}" class="rounded-circle border border-primary" width="50px" height="50px" alt="Image Not Found">
                                    </td>
                                    <td>
                                        @if($product->status == 1)
                                            <a href="">
                                                <span class="badge badge-success p-2">Active</span>
                                            </a>
                                        @else
                                        <a href="">
                                            <span class="badge badge-danger p-2">Disabled</span>
                                        </a>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="#">
                                            <a href="/admin/product-edit/{{ $product->id }}" class="btn btn-success btn-circle btn-sm">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </a>
                                        <form method="post" class="d-inline" action="/admin/product-delete/{{ $product->id }}">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-circle btn-sm" onClick="return confirm('Are you sure you want to Delete Record')"; title="Delete Record"><i class="fas fa-trash"></i></button>

                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

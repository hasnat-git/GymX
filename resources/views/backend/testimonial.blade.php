@extends('backend.layouts.main')
@section('title', 'Testimonials')
@section('main-container')
<div class="container-fluid"><br>
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary"><a href="{{url('/admin')}}">Main Menu</a> | Testimonials List</h6>
                        <a href="{{url('/admin/testimonial-add')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm float-right"><i
                        class="fas fa-plus fa-sm text-white-50"></i>Add New Testimonial</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>About</th>
                                    <th>Statement</th>
                                    <th>Rate</th>
                                    <th>Image</th>
                                    <th width="160px">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($testimonial as $testimonial)
                                <tr>
                                    <td>{{ $testimonial->id }}</td>
                                    <td>{{ $testimonial->name }}</td>
                                    <td>{{ $testimonial->about }}</td>
                                    <td>{{ $testimonial->statement }}</td>
                                    <td>{{ $testimonial->rate }}</td>

                                    <td>
                                        <img src="/backend/images/testimonials/{{$testimonial->image}}" class="rounded-circle border border-primary" width="50px" height="50px" alt="Image Not Found">
                                    </td>

                                    <td>
                                        <a href="#">
                                            <a href="/admin/testimonial-edit/{{$testimonial->id}}" class="btn btn-success btn-circle btn-sm">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </a>
                                        <form method="post" class="d-inline" action="/admin/testimonial-delete/{{ $testimonial->id }}">
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

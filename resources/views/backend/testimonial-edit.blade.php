@extends('backend.layouts.main')
@section('title', 'Edit Testimonial')
@section('main-container')
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block p-4 border-left-success">
                    <strong>
                        {{$message}}
                    </strong>
                </div>
            @endif
            <div class="container-fluid">
                <br>
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <a href="{{url('/admin/testimonial')}}"><button class="btn btn-primary">Testimonial List</button></a></a>
                    </div>
                    <div class="card-body">
                        <form method="post" action="/admin/testimonial-edit/{{$testimonial->id}}" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-floating mb-3">
                                <label for="name">name</label>
                                <input class="form-control" id="name" type="text" placeholder="Enter Name " name="name" value="{{old('name', $testimonial->name)}}">
                                @if ($errors->has('name'))
                                    <span class="text-danger">
                                        {{$errors->first('name')}}
                                    </span>
                                @endif
                            </div>
                            <div class="form-floating mb-3">
                                <label for="about">About</label>
                                <input class="form-control" id="about" type="text" placeholder="Enter About" name="about" value="{{old('about', $testimonial->about)}}">
                                @if ($errors->has('about'))
                                    <span class="text-danger">
                                        {{$errors->first('about')}}
                                    </span>
                                @endif
                            </div>
                            <div class="form-floating mb-3">
                                <label for="about">Statement</label>
                                <input class="form-control" id="statement" type="text" placeholder="Enter Statement" name="statement" value="{{old('statement', $testimonial->statement)}}">
                                @if ($errors->has('statement'))
                                    <span class="text-danger">
                                        {{$errors->first('statement')}}
                                    </span>
                                @endif
                            </div>

                            <div class="form-floating mb-3">
                                <label for="link">Rate</label>
                                <input class="form-control" id="rate"  placeholder="Enter Rating" name="rate" value="{{old('rate', $testimonial->rate)}}"/>
                                @if ($errors->has('rate'))
                                    <span class="text-danger">
                                        {{$errors->first('rate')}}
                                    </span>
                                @endif
                            </div>

                            <div class="form-floating mb-3">
                                <label for="image">Image</label>
                                <input class="form-control" id="image" type="file" name="image" value="{{old('image', $testimonial->image)}}" style="padding-bottom:38px">
                                @if ($errors->has('image'))
                                    <span class="text-danger">
                                        {{$errors->first('image')}}
                                    </span>
                                @endif
                            </div>
                            <div class="mt-4 mb-0">
                                <div class="d-grid">
                                    <input class="btn btn-primary btn-block" type="submit" value="Update product" name="submit">
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('backend.layouts.main')
@section('title', 'Add product')
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
                        <a href="{{route('testimonial.show')}}"><button class="btn btn-primary">Testimonials list</button></a></a>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{route('testimonial.submit')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-floating mb-3">
                                <label for="title">Name</label>
                                <input class="form-control" id="title" type="text" placeholder="Enter product Title" name="name" value="{{old('name')}}">
                                @if ($errors->has('name'))
                                    <span class="text-danger">
                                        {{$errors->first('name')}}
                                    </span>
                                @endif
                            </div>
                            <div class="form-floating mb-3">
                                <label for="details">About</label>
                                <textarea class="form-control" id="about" type="text" name="about" placeholder="Enter product Details" value="{{old('about')}}"></textarea>
                                @if ($errors->has('about'))
                                    <span class="text-danger">
                                        {{$errors->first('about')}}
                                    </span>
                                @endif
                            </div>

                            <div class="form-floating mb-3">
                                <label for="category">Statement</label>
                                <input class="form-control" id="statement" type="text" placeholder="Enter Statement" name="statement" value="{{old('statement')}}">
                                @if ($errors->has('statement'))
                                    <span class="text-danger">
                                        {{$errors->first('statement')}}
                                    </span>
                                @endif
                            </div>
                            <div class="form-floating mb-3">
                                <label for="link">Rating</label>
                                <input class="form-control" id="rate" type="text" placeholder="Rate it" name="rate" value="{{old('rate')}}">
                                @if ($errors->has('rate'))
                                    <span class="text-danger">
                                        {{$errors->first('rate')}}
                                    </span>
                                @endif
                            </div>



                            <div class="form-floating mb-3">
                                <label for="image">Image</label>
                                <input class="form-control" id="image" type="file" accept=".png, .jpg, .jpeg" name="image" value="{{old('image')}}" style="padding-bottom:38px">
                                @if ($errors->has('image'))
                                    <span class="text-danger">
                                        {{$errors->first('image')}}
                                    </span>
                                @endif
                            </div>
                            <div class="mt-4 mb-0">
                                <div class="d-grid">
                                    <input class="btn btn-primary btn-block" type="submit" value="Add product" name="submit">
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('backend.layouts.main')
@section('title', 'Edit Product')
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
                        <a href="{{url('/admin/product')}}"><button class="btn btn-primary">product List</button></a></a>
                    </div>
                    <div class="card-body">
                        <form method="post" action="/admin/product-edit/{{$product->id}}" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-floating mb-3">
                                <label for="title">Title</label>
                                <input class="form-control" id="title" type="text" placeholder="Enter Product Title" name="title" value="{{old('title', $product->title)}}">
                                @if ($errors->has('title'))
                                    <span class="text-danger">
                                        {{$errors->first('title')}}
                                    </span>
                                @endif
                            </div>
                            <div class="form-floating mb-3">
                                <label for="details">Details</label>
                                <input class="form-control" id="details" type="text" placeholder="Enter Product Details" name="details" value="{{old('details', $product->details)}}">
                                @if ($errors->has('details'))
                                    <span class="text-danger">
                                        {{$errors->first('details')}}
                                    </span>
                                @endif
                            </div>
                            <div class="form-floating mb-3">
                                <label for="category">Category</label>
                                <input class="form-control" id="category" type="text" placeholder="Enter product Category" name="category" value="{{old('category', $product->category)}}">
                                @if ($errors->has('category'))
                                    <span class="text-danger">
                                        {{$errors->first('category')}}
                                    </span>
                                @endif
                            </div>

                            <div class="form-floating mb-3">
                                <label for="link">Price</label>
                                <input class="form-control" id="price" type="text" placeholder="Enter Product Price" name="price" value="{{old('price', $product->price)}}"/>
                                @if ($errors->has('price'))
                                    <span class="text-danger">
                                        {{$errors->first('price')}}
                                    </span>
                                @endif
                            </div>
                            <div class="form-floating mb-3">
                                <label for="technology">Tag</label>
                                <input class="form-control" id="fb" type="text" placeholder="Enter Product Tag" name="tag" value="{{old('tag', $product->tag)}}">
                                @if ($errors->has('tag'))
                                    <span class="text-danger">
                                        {{$errors->first('tag')}}
                                    </span>
                                @endif
                            </div>
                            <div class="form-floating mb-3">
                                <label for="image">Image</label>
                                <input class="form-control" id="image" type="file" name="image" value="{{old('image', $product->image)}}" style="padding-bottom:38px">
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

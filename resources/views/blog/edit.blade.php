@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                <a class="nav-link" >{{ __('Edit Blog') }}</a>
                </div>

                <div class="card-body">

                    <!-- {{ __('You are logged in!') }} -->
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    {{ Form::open(array('url' => 'blog')) }}
                            <div class="form-group">
                                <label for="category">Categoty:</label>
                                <select class="form-control" id="category" name="category">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}" {{ old('category') == $category->id ? 'selected' : '' }} {{ $category->id == $blog->category->id ? 'selected' : '' }}>{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="category">Blog:</label>
                                <textarea class="form-control" id="blog" name="blog">{{old('blog')}}{{$blog->blog}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="category">Description:</label>
                                <textarea class="form-control" id="description" name="description">{{old('description')}}{{$blog->description}}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

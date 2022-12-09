@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                <a class="nav-link" href="{{ url('category') }}">{{ __('Add Category') }}</a>
                </div>

                <div class="card-body">

                    <!-- {{ __('You are logged in!') }} -->
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    {{ Form::open(array('url' => 'category')) }}
                            <div class="form-group">
                                <label for="category">Categoty:</label>
                                <input type="text" class="form-control" id="category" name="category">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
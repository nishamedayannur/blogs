@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                <a class="nav-link" href="{{ url('blog') }}">{{ __('List Blog') }}</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <!-- {{ __('You are logged in!') }} -->
                    <table class="table">
                   <thead>
                     <th>ID</th>
                     <th>Category</th>
                     <th>Blog</th>
                     <th>Description</th>
                     <th>Action</th>
                   </tr></thead>
                   <tbody>
                    @foreach($blogs as $blog)
                     <tr>
                       <td>{{$blog->id}}</td>
                       <td>{{$blog->category->name}}</td>
                       <td>{{$blog->blog}}</td>
                       <td>{{$blog->description}}</td>
                       <td>
                            <a class="nav-link" href="{{ url('blog-edit',[$blog->id]) }}">{{ __('Edit') }}</a>
                            <a class="nav-link" href="{{ url('blog-delete',[$blog->id]) }}">{{ __('Delete') }}</a>
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
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                <a class="nav-link" href="{{ url('category') }}">{{ __('List Category') }}</a>
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
                     <th>Action</th>
                   </tr></thead>
                   <tbody>
                    @foreach($categories as $category)
                     <tr>
                       <td>{{$category->id}}</td>
                       <td>{{$category->name}}</td>
                       <td>
                            <a class="nav-link" href="{{ url('category-edit',[$category->id]) }}">{{ __('Edit') }}</a>
                            <a class="nav-link" href="{{ url('category-delete',[$category->id]) }}">{{ __('Delete') }}</a>
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
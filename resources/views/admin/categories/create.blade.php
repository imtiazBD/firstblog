@extends('admin.master')

@section('title', 'Create New Category')

@section('content')
<div class="card">
    <div class="card-block">
        <div class="card-title-block text-center">
            <h2 class="title-block">Create New Category</h2>
        </div>
    </div>
    <div class="card-body">
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            
            <div class="form-group row">
                <label for="category" class="col-md-3 col-form-label text-md-right"> 
                    {{ __( 'Category Name' ) }} 
                </label>
                
                <div class="col-md-7">
                    <input type="text" name="category" id="category" class="boxed form-control{{ $errors->has('category') ? ' is-invalid' : ''}}" value="{{ old('category') }}" placeholder="Category name..." autofocus>
                    
                    @if ($errors->has('category'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('category') }}</strong>
                    </span>
                    @endif
                </div>
            </div> 
            <div class="form-group row">
                <div class="col-md-3"></div>
                <div class="col-md-7">
                    <input type="submit" value="Submit" class="btn btn-info"> 
                </div>
            </div>
        </form>
    </div>
</div>



@endsection
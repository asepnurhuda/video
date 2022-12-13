@extends('layouts.backend.master')
@section('content')

<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4>Edit Category</h4>
        </div>
        <div class="card-body">
        <form action="{{ route('category.update', $category->id) }}" method="post">
            @csrf
            @method('patch')
        
          <div class="form-group">
            <label>Nama</label>
            <input name="name" type="text" class="form-control" value="{{ $category->name }}">
          </div>
        </div>
        <div class="card-footer text-left">
          <button class="btn btn-primary mr-1" type="submit">Submit</button>
        </div>
        </form>
      </div>
    </div>
    
  </div>

  @endsection
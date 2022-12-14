@extends('layouts.backend.master')
@section('content')
<div class="row">
<div class="col-12 col-md-12 col-lg-12">
    <div class="card">
    <form action="{{ route('video.update', $video->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('patch')
      <div class="card-header">
        <h4>Edit Video</h4>
      </div>
      <div class="card-body">
        <div class="form-group">
            <label>Nama</label>
            <input name="name" type="text" class="form-control" value="{{ $video->name }}">
        </div>
        <div class="form-group">
            <label>Link Youtube</label>
            <input name="youtube" type="text" class="form-control" value="{{ $video->youtube }}">
        </div>
        <div class="form-group">
          <label>Images</label>
          <input name="thumbnail" type="file" class="form-control">
      </div>
        <div class="form-group">
          <label>Pilih Kategori</label>
          <select name="categories[]" class="form-control select2" multiple="multiple">
            @foreach($categories as $category)
              
              <option value="{{ $category->id }}" @if($video->categories->contains($category)) selected="selected" @endif>{{ $category->name }}</option> 
              
            @endforeach
          </select>
        </div>
      </div>
      <div class="card-footer">
        <input class="btn btn-primary" type="submit" value="Submit">
      </div>
    </form>
    </div>
  </div>
</div>
@endsection

@push('style')
    <link rel="stylesheet" href="{{ asset('assets/backend/bundles/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/backend/bundles/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/backend/css/components.css') }}">

@endpush

@push('script')
    <script src="{{ asset('assets/backend/bundles/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/page/forms-advanced-forms.js') }}"></script>
    <script src="{{ asset('assets/backend/bundles/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>
@endpush
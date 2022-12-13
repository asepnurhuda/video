@extends('layouts.backend.master')
@section('content')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Video List's</h4>
                <div class="card-header-action">
                    <a href="{{ route('video.add') }}" class="btn btn-primary btn-icon icon-right">Add Video <i
                        class="fas fa-chevron-right"></i></a>
                    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Add Video
                    </button> --}}
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-md">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Youtube Link</th>
                            <th>Action</th>
                        </tr>

                        @foreach($videos as $video)   
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $video->name }}</td>
                            <td>{{ $video->youtube }}</td>
                            <td>
                                <a href="{{ route('video.edit', $video->id) }}" class="btn btn-success"><i class="fas fa-pencil-alt"></i></a>
                                <a href="{{ route('video.delete', $video->id) }}" onclick="return confirm('Yakin mau hapus item ini?');" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            <div class="card-footer text-right">
                <div class="d-flex justify-content-center">
                    {!! $videos->links('pagination::bootstrap-4') !!}
                </div>
            </div>  
        </div>
    </div>
</div>
@endsection

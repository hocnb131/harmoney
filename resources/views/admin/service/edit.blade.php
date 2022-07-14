@extends('admin.dashboard')
@section('title', 'Edit Service')
@section('main')

<form action="{{route('service.update',$service->id)}}" method="POST" role="form" enctype="multipart/form-data">
    @csrf
@method('PUT')
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name" value="{{$service->name}}" placeholder="Input name">
                @error('name')
                <small class="badge badge-danger">{{$message}}</small>
                @enderror
            </div>
            {{-- <div class="form-group">
                <label for="">Creat_At</label>
                <input type="text" class="form-control" value="{{$blog->create_at}}" name="create_at" placeholder="Input creat_at">
                @error('creat_at')
                <small class="badge badge-danger">{{$message}}</small>
                @enderror
            </div> --}}
            <div class="form-group">
                <label for="">Icon</label>
                <input type="text" class="form-control" name="icon" value="{{$service->icon}}" placeholder="Input name">
                @error('icon')
                <small class="badge badge-danger">{{$message}}</small>
                @enderror
            </div>
        </div>
        <div class="col-md-6">

            <div class="form-group">
                <label for="">Service Type</label>
                <input type="text" class="form-control" name="serviceType" value="{{$service->serviceType}}" placeholder="Input name">
                @error('serviceType')
                <small class="badge badge-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Room ID</label>
                <input type="text" class="form-control" name="room_id" value="{{$service->room_id}}" placeholder="Input name">
                @error('room_id')
                <small class="badge badge-danger">{{$message}}</small>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <button type="submit" class="btn btn-primary">Save Data</button>

    </div>

    </div>
</form>


@stop();
{{-- @section('css')
<link rel="stylesheet" href="{{url('/css')}}/plugins/summernote/summernote-bs4.min.css">
@stop();
@section('js')
<script src="{{url('/css')}}/plugins/summernote/summernote-bs4.min.js"></script>
<script>
    $(function(){
        $('#content').summernote();
    });
    // alert(212);
</script>
@stop(); --}}
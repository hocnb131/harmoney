@extends('admin.dashboard')
@section('title', 'Edit Blog')
@section('main')

<form action="{{route('blog.update',$blog->id)}}" method="POST" role="form" enctype="multipart/form-data">
    @csrf
@method('PUT')
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Name</label>

            <textarea name="name" class="form-control" id="content" placeholder="Input name"></textarea>

            @error('name')
                <small class="badge badge-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Content</label>

            <textarea name="content" class="form-control" id="content" placeholder="Input content"></textarea>

            @error('content')
                <small class="badge badge-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Slug</label>

            <textarea name="slug" class="form-control" id="content" placeholder="Input slug"></textarea>

            @error('slug')
                <small class="badge badge-danger">{{ $message }}</small>
            @enderror
        </div>
       
   
</div>
<div class="col-md-6">
    <div class="form-group">
        <label for="">Thumbnail</label>
        <input type="file" class="form-control" name="file_upload" placeholder="Input thumbnail">
        @error('thumbnail')
            <small class="badge badge-danger">{{ $message }}</small>
        @enderror
    </div>
   
    <div class="form-gourp">
        <label for="">NameEn</label>
        <div class="radio">
            <label>
                <input type="radio" name="nameEn" value="1" checked>
                En
            </label>
            <label>
                <input type="radio" name="nameEn" value="0" checked>
                Vi
            </label>
        </div>
    </div>
    <div class="form-gourp">
        <label for="">Status</label>
        
        <div class="radio">
            <label>
                <input type="radio" name="status" value="1" checked>
                Public
            </label>
            <label>
                <input type="radio" name="status" value="0" checked>
                Private
            </label>
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
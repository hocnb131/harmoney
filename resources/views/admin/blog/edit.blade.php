@extends('admin.dashboard')
@section('title', 'Edit Blog')
@section('main')

<form action="{{route('blog.update',$blog->id)}}" method="POST" role="form" enctype="multipart/form-data">
    @csrf
@method('PUT')
    <div class="row">
        <div class="col-md-9">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name" value="{{$blog->name}}" placeholder="Input name">
                @error('name')
                <small class="help-block">{{message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Content</label>
                <input type="text" class="form-control" name="content" value="{{$blog->content}}" placeholder="Input name">
                @error('content')
                <small class="help-block">{{message}}</small>
                @enderror
            </div>
           
        </div>
        <div class="col-md-3">
        {{-- <div class="form-group">
                <label for="">Blog</label>
                
                <select name="blog" class="form-control">
                    <option value="">---SELECT-ONE---</option>
                    @foreach($data as $d)
                    <option value="{{$d->id}}">{{$d->name}}</option>
                    @endforeach
                </select>
                
                @error('blog')
                <small class="help-block">{{message}}</small>
                @enderror
            </div> --}}
            <div class="form-group">
                <label for="">Thumbnail</label>
                <input type="file" class="form-control"  name="file_upload" placeholder="Input thumbnail">
                @error('thumbnail')
                <small class="help-block">{{message}}</small>
                @enderror
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
                
                <!-- <div class="form-group">
                    <label for="">Prioty</label>
                    <input type="number" class="form-control" name="prioty" placeholder="Nhập số lượng">
                    @error('prioty')
                    <small class="help-block">{{message}}</small>
                    @enderror
                </div> -->
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Save Data</button>
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
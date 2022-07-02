@extends('home')
@section('title', 'Add Blog')
@section('main')
    <form action="{{ route('blog.store') }}" method="POST" role="form" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
              
                {{-- <div class="form-group">
                <label for="">Creat_At</label>
                <input type="text" class="form-control" name="create_at" placeholder="Input create_at">
                @error('creat_at')
                <small class="badge badge-danger">{{$message}}</small>
                @enderror
            </div> --}}
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
           
            <div class="form-group">
                <label for="">Name</label>

                <textarea name="name" class="form-control" id="content" placeholder="Input name"></textarea>

                @error('name')
                    <small class="badge badge-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="">NameEn</label>
                <input type="number" class="form-control" name="nameEn" placeholder="Nhap so">
                @error('nameEn')
                    <small class="badge badge-danger">{{ $message }}</small>
                @enderror
            </div>
           
                <!-- <div class="form-group">
                    <label for="">Province</label>
                    
                    <select name="province_id" class="form-control">
                        <option value="">---SELECT-ONE---</option>
                        @foreach ($data as $d)
    <option value="{{ $d->id }}">{{ $d->name }}</option>
    @endforeach
                    </select>
                    
                    @error('blog')
        <small class="badge badge-danger">{{ $message }}</small>
    @enderror
                </div> -->
                <div class="form-group">
                    <label for="">Thumbnail</label>
                    <input type="file" class="form-control" name="file_upload" placeholder="Input thumbnail">
                    @error('thumbnail')
                        <small class="badge badge-danger">{{ $message }}</small>
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
        <small class="badge badge-danger">{{ $message }}</small>
    @enderror
                    </div> -->
                </div>
                {{-- <div class="form-group">
                <label for="">ThumbnailDescription</label>
                <input type="text" class="form-control" name="thumbnailDescription" placeholder="Input thumbnailDescription">
                @error('ThumbnailDescription')
                <small class="badge badge-danger">{{$message}}</small>
                @enderror
            </div> --}}

         
      
        </div>
        </div>
        <button type="submit" class="btn btn-primary">Save Data</button>
    </form>
@stop();
{{-- @section('css')
    <link rel="stylesheet" href="{{ url('/css') }}/plugins/summernote/summernote-bs4.min.css">
@stop();
@section('js')
    <script src="{{ url('/css') }}/plugins/summernote/summernote-bs4.min.js"></script>
    <script>
        $(function() {
            $('#content').summernote();
        });
        // alert(212);
    </script>
@stop(); --}}

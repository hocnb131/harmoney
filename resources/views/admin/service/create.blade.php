@extends('home')
@section('title', 'Create Service')
@section('main')
    <form action="{{ route('service.store') }}" method="POST" role="form" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-9">
          
                <div class="form-group">
                    <label for="">Name</label>

                    <textarea name="name" class="form-control" id="name" placeholder="Input name"></textarea>

                    @error('name')
                        <small class="badge badge-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Icon</label>

                    <textarea name="icon" class="form-control" id="Icon" placeholder="Input icon"></textarea>

                    @error('icon')
                        <small class="badge badge-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="">Service Type</label>

                <textarea name="serviceType" class="form-control" id="serviceType" placeholder="Input Service Type"></textarea>

                @error('serviceType')
                    <small class="badge badge-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Room ID</label>
                <input type="number" class="form-control" name="room_id" placeholder="Nhap so phong">
                @error('room_id')
                    <small class="badge badge-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="col-md-3">
                <!-- <div class="form-group">
                    <label for="">Province</label>
                    
                    <select name="province_id" class="form-control">
                        <option value="">---SELECT-ONE---</option>
                        @foreach ($data as $d)
    <option value="{{ $d->id }}">{{ $d->name }}</option>
    @endforeach
                    </select>
                    
                    @error('service')
        <small class="badge badge-danger">{{ $message }}</small>
    @enderror
                </div> -->
                {{-- <div class="form-group">
           
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

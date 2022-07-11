@extends('admin.dashboard')
@section('title', 'Edit User')
@section('main')

<form action="{{route('user.update',$user->id)}}" method="POST" role="form" enctype="multipart/form-data">
    @csrf
@method('PUT')
    <div class="row">
        <div class="col-md-9">
            <div class="form-group">
                <label for="">Full Name</label>
                <input type="text" class="form-control" name="fullName" value="{{$user->fullName}}" placeholder="Input fullName">
                @error('fullName')
                <small class="help-block">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" value="{{$user->email}}" name="email" placeholder="Input email">
                @error('email')
                <small class="help-block">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Phone</label>
                <input type="number" class="form-control" value="{{$user->phoneNumber}}" name="phoneNumber" placeholder="Input phoneNumber">
                @error('phoneNumber')
                <small class="help-block">{{$message}}</small>
                @enderror
            </div>
        </div>    
        <div class="col-md-3">    
            <div class="form-group">
                <label for="">Role</label>
                <input type="text" class="form-control" name="role" value="{{$user->role}}" placeholder="Input role">
                @error('role')
                <small class="help-block">{{$message}}</small>
                @enderror
            </div>
            <div class="form-gourp">
                <label for="">Status</label>
                <div class="radio">
                    <label>
                        <input type="radio" name="status" value="0" checked>
                        Yes
                    </label>
                    <label>
                        <input type="radio" name="status" value="1" checked>
                        No
                    </label>
                </div>
            </div>   
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
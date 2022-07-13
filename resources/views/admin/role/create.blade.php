@extends('admin.dashboard')
@section('title', 'Add Role')
@section('main')
<form action="{{route('role.store')}}" method="POST" role="form" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-9">
            <div class="form-group">
                <label for="">Role</label>
                <input type="text" class="form-control" name="name" placeholder="Thêm vai trò">
                @error('name')
                <small class="badge badge-danger">{{$message}}</small>
                @enderror
            </div>
            </div>
        </div>
       
    <button type="submit" class="btn btn-primary">Save Data</button>
</form>
@stop();



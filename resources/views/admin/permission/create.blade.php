@extends('admin.dashboard')
@section('title', 'Add Permission')
@section('main')
<form action="{{route('permission.store')}}" method="POST" permission="form" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-9">
            <div class="form-group">
                <label for="">Permission</label>
                <input type="text" class="form-control" name="name" placeholder="Thêm quyền">
                @error('name')
                <small class="badge badge-danger">{{$message}}</small>
                @enderror
            </div>
            </div>
        </div>
       
    <button type="submit" class="btn btn-primary">Save Data</button>
</form>
@stop();



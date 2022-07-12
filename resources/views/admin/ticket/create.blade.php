@extends('admin.dashboard')
@section('title', 'Create ticket')
@section('main')
<form action="{{route('ticket.store')}}" method="POST" role="form" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="form-group">
            <label for="">Room_ID</label>
            
            <select name="room_id" class="form-control">
                <option value="">---SELECT-ONE---</option>
                @foreach($datab as $d)
                <option value="{{$d->id}}">{{$d->name}}</option>
                @endforeach
            </select>
            
            @error('room_id')
            <small class="help-block">{{$message}}</small>
            @enderror
        </div> 
        <div class="form-group">
            <label for="">Payment_ID</label>
            
            <select name="payment_id" class="form-control">
                <option value="">---SELECT-ONE---</option>
                @foreach($data as $d)
                <option value="{{$d->id}}">{{$d->id}}</option>
                @endforeach
            </select>
            
            @error('payment_id')
            <small class="help-block">{{$message}}</small>
            @enderror
        </div> 
        <div class="form-group">
            <label for="">User_ID</label>
            
            <select name="user_id" class="form-control">
                <option value="">---SELECT-ONE---</option>
                @foreach($data as $d)
                <option value="{{$d->id}}">{{$d->id}}</option>
                @endforeach
            </select>
            
            @error('user_id')
            <small class="help-block">{{$message}}</small>
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
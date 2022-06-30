@extends('home')
@section('title', 'Edit Coupon')
@section('main')

<form action="{{route('coupon.update',$coupon->id)}}" method="POST" role="form" enctype="multipart/form-data">
    @csrf
@method('PUT')
    <div class="row">
        <div class="col-md-9">
            <div class="form-group">
                <label for="">Code</label>
                <input type="number" class="form-control" name="code" value="{{$coupon->code}}" placeholder="Input code">
                @error('code')
                <small class="help-block">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Started</label>
                <input type="date" class="form-control" value="{{$coupon->started_at}}" name="started_at" placeholder="Input started_at">
                @error('started_at')
                <small class="help-block">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Ended</label>
                <input type="date" class="form-control" value="{{$coupon->ended_at}}" name="ended_at" placeholder="Input ended_at">
                @error('ended_at')
                <small class="help-block">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Percent</label>
                <input type="number" class="form-control" name="percent" value="{{$coupon->percent}}" placeholder="Input percent">
                @error('percent')
                <small class="help-block">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Amount</label>
                <input type="number" class="form-control" name="amount" value="{{$coupon->amount}}" placeholder="Input amount">
                @error('amount')
                <small class="help-block">{{$message}}</small>
                @enderror
            </div>
            <div class="form-gourp">
                <label for="">Used</label>

                <div class="radio">
                    <label>
                        <input type="radio" name="used" value="0" checked>
                        Yes
                    </label>
                    <label>
                        <input type="radio" name="used" value="1" checked>
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
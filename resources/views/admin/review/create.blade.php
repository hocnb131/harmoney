@extends('home')
@section('title', 'Add Review')
@section('main')
<form action="{{route('review.store')}}" method="POST" role="form" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-9">
            <div class="form-group">
                <label for="">Comment</label>
                
                <textarea name="comment" class="form-control" id="content" placeholder="Input comment"></textarea>
                
                @error('comment')
                <small class="badge badge-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Rate</label>
                <input type="number" min="1" max="5" class="form-control" name="rate" placeholder="Input rate">
                @error('rate')
                <small class="badge badge-danger">{{$message}}</small>
                @enderror
            </div>
        </div>
        <div class="col-md-3">
         <div class="form-group">
                <label for="">User</label>
                <select name="user_id" class="form-control">
                    <option value="">---SELECT-ONE---</option>
                    @foreach($data_u as $u)
                    <option value="{{$u->id}}">{{$u->fullName}}</option>
                    @endforeach
                </select>
                
                @error('user_id')
                <small class="badge badge-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Room</label>
                
                <select name="room_id" class="form-control">
                    <option value="">---SELECT-ONE---</option>
                    @foreach($data as $d)
                    <option value="{{$d->id}}">{{$d->rate}}</option>
                    @endforeach
                </select>
                
                @error('room_id')
                <small class="badge badge-danger">{{$message}}</small>
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
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Save Data</button>
</form>
@stop();



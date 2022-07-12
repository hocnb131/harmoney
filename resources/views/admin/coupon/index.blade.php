@extends('admin.dashboard')
@section('title', 'Coupon List')
@section('main')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<form action="" class="form-inline">
    <div class="form-group">
        <input class="form-control" name="key" placeholder="Search By Name...">
    </div>
    <button type="submit" class="btn btn-primary">
        <i class="fas fa-search"></i>
    </button>
</form>
<hr>
<table class="table table-hover">
    <thead>
        <tr>
            <th>Select</th>
            <th>ID</th>
            <th>Code</th>
            <th>Started</th>
            <th>Ended</th>
            <th>Percent</th>
            <th>Amount</th>
            <th>Used</th>
            <th>Ticket</th>
            <th>Action</th>
            <th>Created</th>
        </tr>
    </thead>
    <tbody>
        <form action="" method="post">
            @foreach($data as $d)
            <tr>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="coupon[]" value="{{$d->id}}"
                            id="form-delete">
                    </div>
                </td>
            <td>{{$d->id}}</td>
            <td>{{$d->code}}</td>
            <td>{{$d->started_at}}</td>
            <td>{{$d->ended_at}}</td>
            <td>{{$d->percent}}</td>
            <td>{{$d->amount}}</td>
            <td>
                @if($d->used == 0)
                <span class="badge badge-danger">Yes</span>
                @else

                <span class="badge badge-success">No</span>
                @endif
            </td>
            <td>{{$d->ticket_id}}</td>
            <td>               
                <a href="{{ route('coupon.edit',$d->id) }}" class="btn btn-sm btn-success">
                    <i class="fas fa-edit"></i>
                </a>

                <a href="{{route('coupon.destroy',$d->id)}}" class="btn btn-sm btn-danger btndelete">
                    <i class="fas fa-trash"></i>
                </a>
            </td>
            <td>{{\Carbon\Carbon::parse($d->created_at)->Format('d-m-Y')}}</td>
        </tr>
        @endforeach
        <tr>
            <th colspan="1">
                <button type="submit" id="data_checkall" name="data_checkall" class="btn btn-sm btn-success btnselectall">
                    <i class="fas fa-check"></i> SELECT ALL
                </button>
            </th>
            <th>
                <button id="form-deleteall" href="{{route('coupon.destroy',$d->id)}}"
                    class="btn btn-sm btn-danger btndeleteall">
                    <i class="fas fa-trash"></i> DELETE ALL
                </button>
            </th>
        </tr>
    </form>
    </tbody>
</table>
<form action="" method="POST" id="form-delete">
    @csrf @method('DELETE')
</form>
<form action="" method="POST" id="form-deleteall">
    @csrf @method('DELETE')
</form>
<hr>
<div class="">
    {{$data->appends(request()->all())->links()}}
</div>
<script>
    $('.btndelete').click(function(ev) {
        ev.preventDefault();
        var _href = $(this).attr('href');
        // alert(_href);
        $('form#form-delete').attr('action', _href);
        if (confirm('Bạn có chắc chắn muốn xóa nó không?')) {
            $('form#form-delete').submit();
        }
    })
    // 
    $('.btnselectall').click(function(ev) {
        ev.preventDefault();
        var _name = $('form-check-input').attr('name');
        $('.btnselectall').submit();
        alert(_name);
        console.log(_name);
 
    })
    </script>
    
    @stop();
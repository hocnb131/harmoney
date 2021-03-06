@extends('admin.dashboard')
@section('title', 'Ticket List')
@section('main')

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
            <th>ID</th>
            <th>Room_ID</th> 
            <th>Payment_ID</th>
            <th>User_ID</th>
            <th>Created_AT</th>
            <th>Status</th>
            <th>Action</th>
           
        </tr>
    </thead>
    <tbody>
        @foreach($data as $d)
        <tr>
            <td>{{$d->id}}</td>
            <td>{{$d->room_id}}</td>
            <td>{{$d->payment_id}}</td>
            <td>{{$d->user_id}}</td>
            <td>{{\Carbon\Carbon::parse($d->created_at)->Format('d-m-Y')}}</td>


            {{-- <!-- <td><img src="{{url('/uploads')}}/{{$d->thumbnail}}" width="50" alt=""></td> --> --}}
           

            <td>
                @if($d->status == 0)
                <span class="badge badge-danger">Private</span>
                @else

                <span class="badge badge-success">Publish</span>

                @endif
            </td>
    
        
            <td>
                
                <form action="{{ route('ticket.destroy',$d->id) }}" method="POST" id="form-delete">
                    @csrf
                    
                    <a href="{{ route('ticket.edit',$d->id) }}" class="btn btn-sm btn-success">
                        <i class="fas fa-edit"></i>
                    </a>
                    @method('DELETE')
                    <button onclick="return confirm('Bạn có chắc muốn xóa không? ')" href="{{route('ticket.destroy',$d->id)}}" class="btn btn-sm btn-danger btndelete">
                        <i class="fas fa-trash"></i>
                    </button>
                </form>
                


            </td>
        
        </tr>
        @endforeach
    </tbody>
</table>
<!-- <form action="" method="POST" id="form-delete">
                @csrf @method('DELETE')

</form> -->
<hr>
<div class="">
    {{$data->appends(request()->all())->links()}}
</div>
@stop();

{{-- @section('js')

 <script>
    $('.btndelete').click(function (ev) {
        ev.preventDefault();
        var _href = $(this).attr('href');
        // alert(_href);
        $('form#form-delete').attr('action',_href);
        if(confirm('Bạn có chắc chắn muốn xóa nó không?')){
            $('form#form-delete').submit();
        }
  })
</script> 

@stop(); --}}
 
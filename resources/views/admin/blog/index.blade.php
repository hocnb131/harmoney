@extends('admin.dashboard')
@section('title', 'Blog List')
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
            <th>Name</th> 
            <th>Status</th>
            <th>Content</th>
            <th>Thumbnail</th>
            <th>Slug</th>
            <th>Action</th>
            <th>Created_At</th>
            <th>Updated_At</th>
            <!-- <th>Image</th> -->
            <!-- <th>Created_At</th>
            <th>Updated_At</th> -->
            <!-- <th>Total Branch</th> -->
        </tr>
    </thead>
    <tbody>
        @foreach($data as $d)
        <tr>
            <td>{{$d->id}}</td>
            <td>{{$d->name}}</td>
 

           

            <td>
                @if($d->status == 0)
                <span class="badge badge-danger">Private</span>
                @else

                <span class="badge badge-success">Publish</span>

                @endif
            </td>
            <td>{{$d->content}}</td>
          
            <td><img src="{{url('/uploads')}}/{{$d->thumbnail}}" width="50" alt=""></td>
            <td>{{$d->slug}}</td>
            
     
        
            <td>
                
                <form action="{{ route('blog.destroy',$d->id) }}" method="POST" id="form-delete">
                    @csrf
                    
                    <a href="{{ route('blog.edit',$d->id) }}" class="btn btn-sm btn-success">
                        <i class="fas fa-edit"></i>
                    </a>
                    @method('DELETE')
                    <button onclick="return confirm('Bạn có chắc muốn xóa không? ')" href="{{route('blog.destroy',$d->id)}}" class="btn btn-sm btn-danger btndelete">
                        <i class="fas fa-trash"></i>
                    </button>
                </form>
                


            </td>
            <td>{{\Carbon\Carbon::parse($d->created_at)->Format('d-m-Y')}}</td>
            <td>{{\Carbon\Carbon::parse($d->created_at)->Format('d-m-Y')}}</td>

            <!-- <td><img src="{{url('/uploads')}}/{{$d->thumbnail}}" width="50" alt=""></td> -->
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
 
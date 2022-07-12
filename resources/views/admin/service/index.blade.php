@extends('home')
@section('title', 'Service List')
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
    <table class="table table-hover table-responsive">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Icon</th>
                <th>Room_ID</th>
                <th>ServiceType</th>
                <th>Action</th>
                


            </tr>
        </thead>
        <tbody>
            @foreach ($data as $d)
                <tr>
                    <td>{{ $d->id }}</td>
                    <td>{{ $d->name }}</td>
                    <td>{{ $d->icon }}</td>
                    <td>{{ $d->room_id }}</td>
                    <td>{{ $d->serviceType }}</td>




                    <td>

                        <form action="{{ route('service.destroy', $d->id) }}" method="POST" id="form-delete">
                            @csrf

                            <a href="{{ route('service.edit', $d->id) }}" class="btn btn-sm btn-success">
                                <i class="fas fa-edit"></i>
                            </a>
                            @method('DELETE')
                            <button onclick="return confirm('Bạn có chắc muốn xóa không? ')"
                                href="{{ route('service.destroy', $d->id) }}" class="btn btn-sm btn-danger btndelete">
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
        {{ $data->appends(request()->all())->links() }}
    </div>
@stop();

@section('js')

    <!-- <script>
        $('.btndelete').click(function(ev) {
            ev.preventDefault();
            var _href = $(this).attr('href');
            // alert(_href);
            $('form#form-delete').attr('action', _href);
            if (confirm('Bạn có chắc chắn muốn xóa nó không?')) {
                $('form#form-delete').submit();
            }
        })
    </script> -->

@stop();

@extends('home')
@section('title', 'Room List')
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
                <th>Adults</th>
                <th>Children</th>
                <th>Description</th>
                <th>Calendar</th>
                <th>Thumbnail</th>
                <th>ThumbnailDescription</th>
                <th>Price</th>
                <th>Bed Type</th>
                <th>Area</th>
                {{-- <th>Created_At</th>
                <th>Updated_At</th> --}}
                <th>Slug</th>
                <th>NameEN</th>
                <th>Status</th>
          
             
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $d)
                <tr>
                    <td>{{ $d->id }}</td>
                    <td>{{ $d->name }}</td>
                    <td>{{ $d->adults }}</td>
                    <td>{{ $d->children }}</td>
                    <td>{{ $d->description }}</td>
                    <td>{{ $d->calendar }}</td>
                    <td><img src="{{ url('/uploads') }}/{{ $d->thumbnail }}" width="50" alt=""></td>
                    <td>{{ $d->thumbnailDescription }}</td>
                    <td>{{ $d->price }}</td>
                    <td>{{ $d->bedType }}</td>
                    <td>{{ $d->area }}</td>
                    {{-- <td>{{ \Carbon\Carbon::parse($d->created_at)->Format('d-m-Y') }}</td>
                    <td>{{ \Carbon\Carbon::parse($d->created_at)->Format('d-m-Y') }}</td> --}}
                    <td>{{ $d->slug }}</td>
                    <td>{{ $d->nameEn }}</td>


                    <td>
                        @if ($d->status == 0)
                            <span class="badge badge-danger">Private</span>
                        @else
                            <span class="badge badge-success">Publish</span>
                        @endif
                    </td>
                    <!-- <td>{{ $d->thumbnail }}</td> -->
         

                    <td>

                        <form action="{{ route('room.destroy', $d->id) }}" method="POST" id="form-delete">
                            @csrf

                            <a href="{{ route('room.edit', $d->id) }}" class="btn btn-sm btn-success">
                                <i class="fas fa-edit"></i>
                            </a>
                            @method('DELETE')
                            <button onclick="return confirm('Bạn có chắc muốn xóa không? ')"
                                href="{{ route('room.destroy', $d->id) }}" class="btn btn-sm btn-danger btndelete">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>



                    </td>


                    <!-- <td><img src="{{ url('/uploads') }}/{{ $d->thumbnail }}" width="50" alt=""></td> -->
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

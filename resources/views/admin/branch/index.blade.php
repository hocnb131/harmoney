@extends('home')
@section('title', 'Branch List')
@section('main')
<table class="table table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>PhoneNumber</th>
            <th>Description</th>
            <th>Thumbnail</th>
            <th>ThumbnailDescription</th>
            <!-- <th>Province</th> -->
            <th>Slug</th>
            <th>province_id</th>
            <th>Status</th>
            <th>NameEn</th>
            <th>Action</th>

        </tr>
    </thead>
    <tbody>
        @foreach($data as $d)
        <tr>
            <td>{{$d->id}}</td>
            <td>{{$d->name}}</td>
            <td>{{$d->email}}</td>
            <td>{{$d->address}}</td>
            <td>{{$d->phoneNumber}}</td>
            <td>{{$d->description}}</td>
            <td><img src="{{url('/uploads')}}/{{$d->thumbnail}}" width="50" alt=""></td>
            <td>{{$d->thumbnailDescription}}</td>
            
            <td>{{$d->slug}}</td>
            <td>{{$d->province_id}}</td>
            <td>
                @if($d->status == 0)
                <span class="badge badge-danger">Private</span>
                @else
                <span class="badge badge-success">Publish</span>
                @endif
            </td>
            <td>
                @if($d->nameEn == 0)
                <span class="badge badge-warning">Vi</span>
                @else
                <span class="badge badge-secondary">En</span>
                @endif
            </td>
            <td>
                
                <form action="{{ route('branch.destroy',$d->id) }}" method="POST" id="form-delete">
                    @csrf
                    
                    <a href="{{ route('branch.edit',$d->id) }}" class="btn btn-sm btn-success">
                        <i class="fas fa-edit"></i>
                    </a>
                    @method('DELETE')
                    <button onclick="return confirm('Bạn có chắc muốn xóa không? ')" href="{{route('province.destroy',$d->id)}}" class="btn btn-sm btn-danger btndelete">
                        <i class="fas fa-trash"></i>
                    </button>
                </form>
                
                


            </td>

        </tr>
        @endforeach
    </tbody>
</table>
<hr>
<div class="">
    {{$data->appends(request()->all())->links()}}
</div>
@stop();
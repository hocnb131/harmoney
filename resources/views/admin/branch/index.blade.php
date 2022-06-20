@extends('home')
@section('title', 'Branch List')
@section('main')
<table class="table table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Thumbnail</th>
            <th>ThumbnailDescription</th>
            <th>Description</th>
            <th>Status</th>
            <th>Address</th>
            <th>PhoneNumber</th>
            <th>Email</th>
            <th>Name</th>
            <th>NameEn</th>
            <th>Slug</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $d)
        <tr>
            <td>{{$d->id}}</td>
            <td>{{$d->thumbnail}}</td>
            <td>{{$d->thumbnailDescription}}</td>
            <td>{{$d->description}}</td>
            <td>{{$d->status}}</td>
            <td>{{$d->address}}</td>
            <td>{{$d->phoneNumber}}</td>
            <td>{{$d->email}}</td>
            <td>{{$d->name}}</td>
            <td>{{$d->nameEn}}</td>
            <td>{{$d->slug}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop();
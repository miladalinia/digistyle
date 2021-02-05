@extends('admin::master')

@section('content')


    @foreach($admins as $admin)
        <p>{{$admin->name}}</p>
    @endforeach


@endsection

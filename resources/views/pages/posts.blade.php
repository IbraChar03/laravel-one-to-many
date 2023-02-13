@extends('layouts.main-layout')
@section('content')
<div class="cont">
    <h1>ALL POSTS</h1>
    <ul>
        @foreach ($posts as $post)
        <li>
            {{$post -> postText}} <br>
            <strong>User : </strong>

        <li>{{$post -> person -> name}}</li>

        </li>

        <br>
        <hr>
        <br>
        @endforeach
    </ul>
</div>
@endsection
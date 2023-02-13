@extends('layouts.main-layout')
@section('content')
<ul>
    @foreach ($persons as $person)
    <li>
        <strong>Nickname : </strong> {{$person -> name}} <br>
        <strong>Email Address : </strong>{{$person -> personDetail -> email}} <br>
        <strong>Post : </strong> @foreach ($person -> posts as $post)
        {{$post -> postText}}
        @endforeach
    </li>
    <hr>
    @endforeach

</ul>
@endsection
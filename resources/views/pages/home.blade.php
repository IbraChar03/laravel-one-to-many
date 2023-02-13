@extends('layouts.main-layout')
@section('content')
<div class="cont">
    <ul>
        @foreach ($persons as $person)
        <li>
            <strong>Nickname : </strong> {{$person -> name}} <br>
            <strong>Email Address : </strong>{{$person -> personDetail -> email}} <br>
            <strong>Posts : {{$person -> posts -> count()}} </strong> @foreach ($person -> posts as $post)

        <li> {{$post -> postText}} </li>

        @endforeach
        </li>
        <br>
        <hr>
        <br>
        @endforeach

    </ul>
</div>
@endsection
@extends('app')


@section('content')

    <h1>About </h1>
    @if (count($people))
    <h3>People I like:</h3>
    <ul>
        @foreach($people as $person)
            <li>{{$person}}</li>
        @endforeach
    </ul>
@endif
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur inventore ipsam optio quibusdam quis? Culpa ex in ipsum soluta vel. Adipisci autem dolorum labore, neque pariatur placeat ratione saepe vel.</p>
@stop

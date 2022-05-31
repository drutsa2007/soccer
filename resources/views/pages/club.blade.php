@extends('layout')

@section('content')
    <a href="{{ route('home') }}">Home</a>
    <hr/>
    <h2>{{ $club->caption }}</h2>
    <h4>Игроки:</h4>
    @foreach ($club->players as $p)
        {{ $p->peoples->name }}
        ( Sex: @if($p->peoples->sex == 1)
            Male,
        @else
            Female,
        @endif
        Age: {{ $p->peoples->age }} )<br/>
    @endforeach
    <br/>
    <h4>Болельщики:</h4>
    @foreach ($club->fans as $f)
        {{ $f->peoples->name }}
        ( Sex: @if($f->peoples->sex == 1)
            Male,
        @else
            Female,
        @endif
        Age: {{ $f->peoples->age }} )<br/>
    @endforeach
    <br/>
@endsection

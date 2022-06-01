@extends('layout')

@section('content')
    <a href="{{ route('create_tournament') }}">Начать матч</a>
    <hr/>
    <h2>Сыгранные матчи</h2>
    @foreach ($matches as $m)
        <a href="{{ route("tournament_logs", $m->id) }}">
            {{ $m->l_club->caption }} VS {{ $m->r_club->caption }}
        </a>
        ({{ $m->left_club_goals }} VS {{ $m->right_club_goals }})<br/>
    @endforeach
    <br/>
    <h2>{{ $clubs_c }} клубов</h2>
    @foreach ($clubs as $c)
        <a href="{{ route('view_club', $c->id) }}">{{ $c->caption }}</a>
        (болельщиков: {{ count($c->fans) }})<br/>
    @endforeach
    <br/>
    <h2>{{ $referees_c }} рефери</h2>
    @foreach ($referees as $r)
        {{ $r->peoples->name }}<br/>
    @endforeach
    <br/>
    <h2>{{ $places_c }} стадионов</h2>
    @foreach ($places as $p)
        {{ $p->caption }}
        (мест: {{ $p->size }})<br/>
    @endforeach
    <br/>
@endsection

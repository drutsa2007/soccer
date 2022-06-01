@extends('layout')

@section('content')
    <a href="{{ route('home') }}">Home</a>
    <hr/>
    <h2>Матч</h2>
    <h3>{{ $tour->l_club->caption }} VS {{ $tour->r_club->caption }}
    ({{ $tour->left_club_goals }}:{{ $tour->right_club_goals }})</h3>
    <hr>
    События:<br/>
    @foreach ($tour->logs as $l)
        <div class="events">{{ $l->text }}</div>
    @endforeach
@endsection


@extends('layout')

@section('content')
    <h2>Матч</h2>
    <h3>{{ $tour->l_club->caption }} VS {{ $tour->r_club->caption }}
    ({{ $tour->left_club_goals }}:{{ $tour->right_club_goals }})</h3>
    <hr>
    События:<br/>
    @foreach ($tour->logs as $l)
        {{ $l->text }}<br/>
    @endforeach
    <div id="texts">12</div>

    <script>
        let el = document.getElementById('texts')
        let t
        let a = setTimeout(() => {
            fetch('{{ route('get_people') }}')
                .then((response) => {
                    response.text()
                        .then((text) => {
                            t = el.innerText;
                            el.innerText = t + '\n' + text;
                        })
                });
        }, 1000)
    </script>
@endsection


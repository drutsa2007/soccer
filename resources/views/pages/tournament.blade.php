@extends('layout')

@section('content')
    <h2>Матч</h2>
    <h3>{{ $tour->l_club->caption }} VS {{ $tour->r_club->caption }}
    ({{ $tour->left_club_goals }}:{{ $tour->right_club_goals }})</h3>
    <hr>
    События:<br/>
    @foreach ($tour->logs as $l)
        <div class="events">{{ $l->text }}</div>
    @endforeach

    <script>
        //let el = document.getElementById('texts')
        let el = document.getElementsByClassName('events')
        //let last_id = el.getAttribute('id').split('-')[1]
        let t
        let a = setInterval(() => {
            fetch('{{ route('start_tournament', $tour->id) }}')
                .then((response) => {
                    response.text()
                        .then((text) => {
                            console.log(text)
                            let newWrapper = document.createElement('div');
                            newWrapper.classList.add('events');
                            newWrapper.innerText = text
                            el[el.length - 1].after(newWrapper);
                            if (text==="Остановить матч!") {
                                let linkBack = document.createElement('a');
                                linkBack.setAttribute('href', '{{ route('home') }}');
                                linkBack.innerText = "Закончить"
                                el[el.length - 1].after(linkBack);
                                clearInterval(a);
                            }
                        })
                });
        }, 1000)
    </script>
@endsection


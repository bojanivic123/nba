@extends("layout.default")

@section("content")
    <p>{{ $team->name }}  {{ $team->city }}</p>
    <p>{{ $team->address }}, {{ $team->email }}</p>
    <ul>
        @foreach ($team->players as $player)
            <li><a href="/players/{{ $player->id }}">{{ $player->firstName }} {{ $player->lastName }}</a></li>
        @endforeach
    </ul>
@endsection


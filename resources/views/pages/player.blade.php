@extends("layout.default")

@section("content")
    <p>{{ $player->firstName }} {{ $player->lastName }}</p>
    <p><a href="/teams/{{$player->team_id}}">{{ $player->team->name }}</a></p>
@endsection


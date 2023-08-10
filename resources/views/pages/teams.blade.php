@extends("layout.default")

@section("content")
    @foreach ($teams as $team)
        @include("components.basic")
    @endforeach
@endsection


@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            @foreach ($boards as $board)
                    @include('components.board')
            @endforeach

            @include('components.boardAdd')
        </div>
    </div>
@endsection

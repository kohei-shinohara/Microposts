@extends('layouts.app')

@section('content')
     @if (Auth::check())
        <?php $user = Auth::user(); ?>
        {{ $user->name }}
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>WELCOME to the MicRoposts</h1>
                <h3>~The Best SNS Experience JUST FOR YOU~</h3>
                 {!! link_to_route('signup.get', 'SIGN UP Here!', null, ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection
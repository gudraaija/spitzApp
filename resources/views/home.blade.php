@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (Auth::user()->role == 'Pet owner')
                        <div class="">
                            <a href="{{ route('pets') }}">My pets</a>
                        </div>
                    @endif

                    @if (Auth::user()->role == 'Trainer')
                        <div class="">
                            <a href="{{ route('pets') }}">My trainings</a>
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

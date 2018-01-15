@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Trainers dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                        <h4>My description:</h4>

                        @foreach ($trainers as $trainer)
                        @if ($trainer->description == ' ')
                        <ul><a href="{{ route('addDescription') }}">Add a description to my profile</a></ul>
                        @else 
                        <ul>{{$trainer->description}}</ul>
                        <ul><a href="{{ route('addDescription') }}">Edit my description</a></ul>
                        @endif
                        @endforeach
                        <h4>My trainings:</h4>
                        <ul><a href="{{ route('addTraining') }}">Add a training to my profile</a></ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
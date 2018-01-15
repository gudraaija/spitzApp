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
                        <ul><p>{{ $trainer->description }}</p></ul>
                        <ul><a href="{{ route('editDescription', $trainer->id) }}">Edit my description</a></ul>

                        <h4>My trainings:</h4>
                        <ul><a href="{{ route('addTraining') }}">Add a training to my profile</a></ul>

                        @foreach ($trainings as $training)
                        <h5>{{ $training->name }} </h5>
                        <button type="button" class="btn btn-outline-dark">Edit training info</button>
                        <button type="button" class="btn btn-outline-dark">Remove from my profile</button>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
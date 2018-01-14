@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Pets dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                        <h4>My pets:</h4>
                        <ul><a href="{{ route('addpet') }}">Add a pet to my profile</a></ul>
                    </div>

                    @foreach ($pets as $pet)
                        <h5>{{ $pet->name }} </h5>
                        <button type="button" class="btn btn-outline-dark">Edit pets profile</button>
                        <button type="button" class="btn btn-outline-dark">Remove from my profile</button>
                        <button type="button" class="btn btn-outline-dark">Assign to training</button>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
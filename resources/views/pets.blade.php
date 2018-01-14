@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Pets dashboard</div>

                <div class="panel-body">

                    <div>
                        <h4>What to do:</h4>
                        <ul><a href="#">Add a pet to my profile</a></ul>
                        <ul><a href="#">Edit my pets profile</a></ul>
                        <ul><a href="#">Remove pet from my profile</a></ul>
                        <ul><a href="#">Assign a pet to training</a></ul>
                    </div>

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

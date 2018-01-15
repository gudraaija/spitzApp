@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add training</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('Training.storeTraining') }}">
                        {{ csrf_field() }}
                        <input id="trainer_id" type="hidden" name="trainer_id" value="{{Auth::id()}}">

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label">Description</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control" name="description" value="{{ old('description') }}" required>

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('date_time') ? ' has-error' : '' }}">
                            <label for="date_time" class="col-md-4 control-label">Date and time</label>

                            <div class="col-md-6">
                                <input id="date_time" type="datetime-local" class="form-control" name="date_time" value="{{ old('date_time') }}" required>

                                @if ($errors->has('date_time'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date_time') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('place') ? ' has-error' : '' }}">
                            <label for="place" class="col-md-4 control-label">Place</label>

                            <div class="col-md-6">
                                <input id="place" type="text" class="form-control" name="place" value="{{ old('place') }}" required>

                                @if ($errors->has('place'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('place') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('public') ? ' has-error' : '' }}">
                            <label for="public" class="col-md-4 control-label">Public</label>
                            <div class="col-md-6">
                                <select name="public">
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>    

                                    @if ($errors->has('public'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('public') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Add
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Assign pet to training</div>

                <div class="panel-body">

                    <form class="form-horizontal" method="POST" action="{{ route('savePetToTraining') }}">
                        {{ csrf_field() }}
                        <input id="pet_id" type="hidden" name="pet_id" value="{{ $pet->id }}">
                        <div class="form-group{{ $errors->has('training_id') ? ' has-error' : '' }}">
                            <label for="training_id" class="col-md-4 control-label">Trainings</label>
                            <div class="col-md-6">
                                <select name="training_id">
                                @foreach ($trainings as $training)
                                    <option value="{{$training->id}}">{{$training->name}}</option>
                                @endforeach
                                </select>    


                                    @if ($errors->has('training_id'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('training_id') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Assigne
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

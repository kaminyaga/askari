@extends('layouts.app')

@section('content')
    <div class="col-md-3">
        @include('layouts.dashboard_options')
    </div>
    <div class="col-md-7">
        <h2>New Impound Offence</h2>
        <hr>
        @include('errors.feedback')

        {!! Form::open(['url' => route('new_impound')]) !!}

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group{{ $errors->has('impound_id') ? ' has-error' : '' }}">
                        {!! Form::label('impound_id', 'Impound ID'); !!}
                        {!! Form::text('impound_id', null, ['class' => 'form-control']) !!}
                        @if ($errors->has('impound_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('impound_id') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group{{ $errors->has('make') ? ' has-error' : '' }}">
                        {!! Form::label('make', 'Make'); !!}
                        {!! Form::text('make', null, ['class' => 'form-control']) !!}
                        @if ($errors->has('make'))
                            <span class="help-block">
                                <strong>{{ $errors->first('make') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group{{ $errors->has('licence_plate') ? ' has-error' : '' }}">
                        {!! Form::label('licence_plate', 'Licence Plate'); !!}
                        {!! Form::text('licence_plate', null, ['class' => 'form-control']) !!}
                        @if ($errors->has('licence_plate'))
                            <span class="help-block">
                                <strong>{{ $errors->first('licence_plate') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group{{ $errors->has('offender_id') ? ' has-error' : '' }}">
                        {!! Form::label('offender_id', 'Offender'); !!}
                        {!! Form::select('offender_id', $offenders, null, ['class' => 'form-control', 'id' => 'select2', 'placeholder' => '']) !!}
                        @if ($errors->has('offender_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('offender_id') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group{{ $errors->has('dln') ? ' has-error' : '' }}">
                        {!! Form::label('dln', 'Driving License'); !!}
                        {!! Form::text('dln', null, ['class' => 'form-control']) !!}
                        @if ($errors->has('dln'))
                            <span class="help-block">
                                <strong>{{ $errors->first('dln') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group{{ $errors->has('vehicle_type') ? ' has-error' : '' }}">
                        {!! Form::label('vehicle_type', 'Vehicle Type'); !!}
                        {!! Form::text('vehicle_type', null, ['class' => 'form-control']) !!}
                        @if ($errors->has('vehicle_type'))
                            <span class="help-block">
                                <strong>{{ $errors->first('vehicle_type') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group{{ $errors->has('citation_number') ? ' has-error' : '' }}">
                        {!! Form::label('citation_number', 'Citation Number'); !!}
                        {!! Form::text('citation_number', null, ['class' => 'form-control']) !!}
                        @if ($errors->has('citation_number'))
                            <span class="help-block">
                                <strong>{{ $errors->first('citation_number') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="form-group">
                {!! Form::submit('Add new Impound Offence', ['class' => 'btn btn-success']) !!}
            </div>
        {!! Form::close() !!}
    </div>
@endsection
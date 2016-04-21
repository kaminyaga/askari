@extends('layouts.app')

@section('content')
    <div class="col-md-3">
        @include('layouts.dashboard_options')
    </div>
    <div class="col-md-9">
        <h2>New Robbery Offence</h2>
        <hr>
        @include('errors.feedback')

        {!! Form::open(['url' => route('new_robbery_offence')]) !!}

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group{{ $errors->has('robbery_id') ? ' has-error' : '' }}">
                        {!! Form::label('robbery_id', 'Robbery ID'); !!}
                        {!! Form::text('robbery_id', null, ['class' => 'form-control']) !!}
                        @if ($errors->has('robbery_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('robbery_id') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group{{ $errors->has('crime_id') ? ' has-error' : '' }}">
                        {!! Form::label('crime_id', 'Crime ID'); !!}
                        {!! Form::text('crime_id', null, ['class' => 'form-control']) !!}
                        @if ($errors->has('crime_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('crime_id') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group{{ $errors->has('evidence_id') ? ' has-error' : '' }}">
                        {!! Form::label('evidence_id', 'Evidence ID'); !!}
                        {!! Form::text('evidence_id', null, ['class' => 'form-control']) !!}
                        @if ($errors->has('evidence_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('evidence_id') }}</strong>
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
                    <div class="form-group{{ $errors->has('user_id') ? ' has-error' : '' }}">
                        {!! Form::label('user_id', 'Issuing user_id'); !!}
                        {!! Form::select('user_id', $officers, null, ['class' => 'form-control', 'id' => 'issuing_officer', 'placeholder' => '']) !!}
                        @if ($errors->has('user_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('user_id') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group{{ $errors->has('victims_name') ? ' has-error' : '' }}">
                        {!! Form::label('victims_name', 'Victim\'s Name'); !!}
                        {!! Form::text('victims_name', null, ['class' => 'form-control']) !!}
                        @if ($errors->has('victims_name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('victims_name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group{{ $errors->has('crime_location') ? ' has-error' : '' }}">
                        {!! Form::label('crime_location', 'Location of Crime'); !!}
                        {!! Form::text('crime_location', null, ['class' => 'form-control']) !!}
                        @if ($errors->has('crime_location'))
                            <span class="help-block">
                                <strong>{{ $errors->first('crime_location') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group{{ $errors->has('comments') ? ' has-error' : '' }}">
                        {!! Form::label('comments', 'Comments'); !!}
                        {!! Form::textarea('comments', null, ['class' => 'form-control']) !!}
                        @if ($errors->has('comments'))
                            <span class="help-block">
                                <strong>{{ $errors->first('comments') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="form-group">
                {!! Form::submit('Add new Robbery offence', ['class' => 'btn btn-success']) !!}
            </div>
        {!! Form::close() !!}
    </div>
@endsection
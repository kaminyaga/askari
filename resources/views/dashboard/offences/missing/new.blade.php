@extends('layouts.app')

@section('content')
    <div class="col-md-3">
        @include('layouts.dashboard_options')
    </div>
    <div class="col-md-7">
        <h2>New Missing Persons report</h2>
        <hr>
        @include('errors.feedback')

        {!! Form::open(['url' => route('new_missing')]) !!}

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                {!! Form::label('name', 'Name'); !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group{{ $errors->has('sex') ? ' has-error' : '' }}">
                        {!! Form::label('sex', 'Sex'); !!}
                        {!! Form::select('sex', ['male' => 'Male', 'female' => 'Female'], 'male', ['class' => 'form-control']) !!}
                        @if ($errors->has('sex'))
                            <span class="help-block">
                                <strong>{{ $errors->first('sex') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group{{ $errors->has('dob') ? ' has-error' : '' }}">
                        {!! Form::label('dob', 'Date of Birth'); !!}
                        {!! Form::text('dob', null, ['class' => 'form-control']) !!}
                        @if ($errors->has('dob'))
                            <span class="help-block">
                                <strong>{{ $errors->first('dob') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group{{ $errors->has('national_id') ? ' has-error' : '' }}">
                        {!! Form::label('national_id', 'National ID'); !!}
                        {!! Form::text('national_id', null, ['class' => 'form-control']) !!}
                        @if ($errors->has('national_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('national_id') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
                        {!! Form::label('phone_number', 'Phone Number'); !!}
                        {!! Form::text('phone_number', null, ['class' => 'form-control']) !!}
                        @if ($errors->has('phone_number'))
                            <span class="help-block">
                                <strong>{{ $errors->first('phone_number') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                 <div class="col-md-4">
                    <div class="form-group{{ $errors->has('guardians') ? ' has-error' : '' }}">
                        {!! Form::label('guardians', 'Parents/Gurdians'); !!}
                        {!! Form::text('guardians', null, ['class' => 'form-control']) !!}
                        @if ($errors->has('guardians'))
                            <span class="help-block">
                                <strong>{{ $errors->first('guardians') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group{{ $errors->has('reporting_date') ? ' has-error' : '' }}">
                        {!! Form::label('reporting_date', 'Reporting date'); !!}
                        {!! Form::text('reporting_date', null, ['class' => 'form-control']) !!}
                        @if ($errors->has('reporting_date'))
                            <span class="help-block">
                                <strong>{{ $errors->first('reporting_date') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
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
                <div class="col-md-4">
                    <div class="form-group{{ $errors->has('date_last_seen') ? ' has-error' : '' }}">
                        {!! Form::label('date_last_seen', 'Date Last Seen'); !!}
                        {!! Form::text('date_last_seen', null, ['class' => 'form-control']) !!}
                        @if ($errors->has('date_last_seen'))
                            <span class="help-block">
                                <strong>{{ $errors->first('date_last_seen') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group{{ $errors->has('place_last_seen') ? ' has-error' : '' }}">
                        {!! Form::label('place_last_seen', 'Place Last Seen'); !!}
                        {!! Form::text('place_last_seen', null, ['class' => 'form-control']) !!}
                        @if ($errors->has('place_last_seen'))
                            <span class="help-block">
                                <strong>{{ $errors->first('place_last_seen') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group{{ $errors->has('suspects') ? ' has-error' : '' }}">
                        {!! Form::label('suspects', 'Suspects'); !!}
                        {!! Form::textarea('suspects', null, ['class' => 'form-control']) !!}
                        @if ($errors->has('suspects'))
                            <span class="help-block">
                                <strong>{{ $errors->first('suspects') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="form-group">
                {!! Form::submit('Add New Missing Person\'s', ['class' => 'btn btn-success']) !!}
            </div>
        {!! Form::close() !!}
    </div>
@endsection
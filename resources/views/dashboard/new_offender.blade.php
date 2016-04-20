@extends('layouts.app')

@section('content')
    <div class="col-md-3">
        @include('layouts.dashboard_options')
    </div>
    <div class="col-md-5">
        <h2>New Offender</h2>
        <hr>
        @include('errors.feedback')

        {!! Form::open(['url' => route('new_offender')]) !!}

            <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                {!! Form::label('first_name', 'First Name'); !!}
                {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
                @if ($errors->has('first_name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('first_name') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                {!! Form::label('last_name', 'Last Name'); !!}
                {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
                @if ($errors->has('last_name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('last_name') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('middle_name') ? ' has-error' : '' }}">
                {!! Form::label('middle_name', 'Middle Name'); !!}
                {!! Form::text('middle_name', null, ['class' => 'form-control']) !!}
                @if ($errors->has('middle_name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('middle_name') }}</strong>
                    </span>
                @endif
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group{{ $errors->has('sex') ? ' has-error' : '' }}">
                        {!! Form::label('sex', 'Sex'); !!}
                        {!! Form::select('sex', array('male' => 'Male', 'female' => 'Female'), 'male', ['class' => 'form-control']) !!}
                        @if ($errors->has('sex'))
                            <span class="help-block">
                                <strong>{{ $errors->first('sex') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
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
            </div>
            <div class="row">
                <div class="col-md-6">
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
                <div class="col-md-6">
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
            </div>
            <div class="form-group">
                {!! Form::submit('Add new offender', ['class' => 'btn btn-success']) !!}
            </div>
        {!! Form::close() !!}
    </div>
@endsection
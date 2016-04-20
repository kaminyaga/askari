@extends('layouts.app')

@section('content')
    <div class="col-md-3">
        @include('layouts.dashboard_options')
    </div>
    <div class="col-md-5">
        <h2>New Traffic Offence</h2>
        <hr>
        @include('errors.feedback')

        {!! Form::open(['url' => route('new_traffic_offence')]) !!}

            <div class="row">
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
                <div class="col-md-6">
                    <div class="form-group{{ $errors->has('traffic_id') ? ' has-error' : '' }}">
                        {!! Form::label('traffic_id', 'Traffic ID'); !!}
                        {!! Form::text('traffic_id', null, ['class' => 'form-control']) !!}
                        @if ($errors->has('traffic_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('traffic_id') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group{{ $errors->has('traffic_offence') ? ' has-error' : '' }}">
                        {!! Form::label('traffic_offence', 'Traffic Offence'); !!}
                        {!! Form::text('traffic_offence', null, ['class' => 'form-control']) !!}
                        @if ($errors->has('traffic_offence'))
                            <span class="help-block">
                                <strong>{{ $errors->first('traffic_offence') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="form-group{{ $errors->has('offender_id') ? ' has-error' : '' }}">
                {!! Form::label('offender_id', 'Offender'); !!}
                {!! Form::select('offender_id', $offenders, null, ['class' => 'form-control', 'id' => 'select2', 'placeholder' => '']) !!}
                @if ($errors->has('offender_id'))
                    <span class="help-block">
                        <strong>{{ $errors->first('offender_id') }}</strong>
                    </span>
                @endif
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group{{ $errors->has('date_of_issue') ? ' has-error' : '' }}">
                        {!! Form::label('date_of_issue', 'Date of Issue'); !!}
                        {!! Form::text('date_of_issue', null, ['class' => 'form-control']) !!}
                        @if ($errors->has('date_of_issue'))
                            <span class="help-block">
                                <strong>{{ $errors->first('date_of_issue') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group{{ $errors->has('court_date') ? ' has-error' : '' }}">
                        {!! Form::label('court_date', 'Court Date'); !!}
                        {!! Form::text('court_date', null, ['class' => 'form-control']) !!}
                        @if ($errors->has('court_date'))
                            <span class="help-block">
                                <strong>{{ $errors->first('court_date') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="col-md-12">
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
            <div class="form-group">
                {!! Form::submit('Add new offender', ['class' => 'btn btn-success']) !!}
            </div>
        {!! Form::close() !!}
    </div>
@endsection
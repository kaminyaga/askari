@extends('layouts.app')

@section('content')
    <div class="col-md-3">
        @include('layouts.dashboard_options')
    </div>
    <div class="col-md-7">
        <h2>New Evidence Report</h2>
        <hr>
        @include('errors.feedback')

        {!! Form::open(['url' => route('new_missing')]) !!}
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group{{ $errors->has('item') ? ' has-error' : '' }}">
                        {!! Form::label('item', 'Item'); !!}
                        {!! Form::text('item', null, ['class' => 'form-control']) !!}
                        @if ($errors->has('item'))
                            <span class="help-block">
                                <strong>{{ $errors->first('item') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group{{ $errors->has('quantity') ? ' has-error' : '' }}">
                        {!! Form::label('quantity', 'Quantity'); !!}
                        {!! Form::text('quantity', null, ['class' => 'form-control']) !!}
                        @if ($errors->has('quantity'))
                            <span class="help-block">
                                <strong>{{ $errors->first('quantity') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group{{ $errors->has('serial_number') ? ' has-error' : '' }}">
                        {!! Form::label('serial_number', 'Serial Number'); !!}
                        {!! Form::text('serial_number', null, ['class' => 'form-control']) !!}
                        @if ($errors->has('serial_number'))
                            <span class="help-block">
                                <strong>{{ $errors->first('serial_number') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                 <div class="col-md-6">
                    <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                        {!! Form::label('status', 'Status'); !!}
                        {!! Form::text('status', null, ['class' => 'form-control']) !!}
                        @if ($errors->has('status'))
                            <span class="help-block">
                                <strong>{{ $errors->first('status') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                        {!! Form::label('description', 'Description'); !!}
                        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
                        @if ($errors->has('description'))
                            <span class="help-block">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="form-group">
                {!! Form::submit('Add New evidence', ['class' => 'btn btn-success']) !!}
            </div>
        {!! Form::close() !!}
    </div>
@endsection
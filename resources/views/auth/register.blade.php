@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {!! csrf_field() !!}
                        <div class="container-fluid">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="control-label">First Name</label>
                                    <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}">
                                    @if ($errors->has('first_name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('first_name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                 <div class="col-md-6">
                                    <label class="control-label">Middle Name</label>
                                    <input type="text" class="form-control" name="middle_name" value="{{ old('middle_name') }}">
                                    @if ($errors->has('middle_name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('middle_name') }}</strong>
                                        </span>
                                    @endif
                                 </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="control-label">Last Name</label>
                                    <input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}">
                                    @if ($errors->has('last_name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('last_name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="control-label">National ID</label>
                                    <input type="text" class="form-control" name="national_id" value="{{ old('national_id') }}">
                                    @if ($errors->has('national_id'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('national_id') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="control-label">Police station</label>
                                    <select class="form-control" name="police_station">
                                        <option>Muthangari</option>
                                        <option>Kilimani</option>
                                        <option>Kibera</option>
                                        <option>Karen</option>
                                    </select>
                                    @if ($errors->has('police_station'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('police_station') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                 <div class="col-md-6">
                                    <label class="control-label">Rank</label>
                                    <input type="text" class="form-control" name="rank" value="{{ old('rank') }}">
                                    @if ($errors->has('rank'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('rank') }}</strong>
                                        </span>
                                    @endif
                                 </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="control-label">Department</label>
                                    <input type="text" class="form-control" name="department" value="{{ old('department') }}">
                                    @if ($errors->has('department'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('department') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                 <div class="col-md-6">
                                    <label class="control-label">Police ID</label>
                                    <input type="text" class="form-control" name="police_id" value="{{ old('police_id') }}">
                                    @if ($errors->has('police_id'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('police_id') }}</strong>
                                        </span>
                                    @endif
                                 </div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="control-label">Username</label>
                                    <input type="text" class="form-control" name="username" value="{{ old('username') }}">
                                    @if ($errors->has('username'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('username') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                 <div class="col-md-6">
                                    <label class="control-label">Email</label>
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                 </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="control-label">Password</label>
                                    <input type="password" class="form-control" name="password">

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                <label class="control-label">Confirm Password</label>
                                    <input type="password" class="form-control" name="password_confirmation">
                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn fa-user"></i>Register
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

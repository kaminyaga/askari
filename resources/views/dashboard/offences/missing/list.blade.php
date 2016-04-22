@extends('layouts.app')

@section('content')
    <div class="col-md-3">
        @include('layouts.dashboard_options')
    </div>
    <div class="col-md-9">
        <div class="col-md-12">
            <span class="pull-right">
                {!! link_to_route('missing', $title = 'New Missing Persons', $parameters = [], $attributes = ['class' => 'btn btn-danger btn-sm']) !!}
            </span>
        </div>
        <hr>
        @include('errors.feedback')

        <div class="col-md-12">
            <table class="table table-striped">
                <tr>
                    <th>Name</th>
                    <th>Sex</th>
                    <th>Date Of Birth</th>
                    <th>Reporting Date</th>
                    <th>evidence ID</th>
                    <th>Date last seen</th>
                    <th>Place Last seen</th>
                    <th>suspects</th>
                </tr>

                @foreach($missing_persons as $offence)

                <tr>
                    <td>{{ $offence->name }}</td>
                    <td>{{ $offence->sex }}</td>
                    <td>{{ $offence->dob }}</td>
                    <td>{{ $offence->reporting_date }}</td>
                    <td>{{ $offence->evidence_id }}</td>
                    <td>{{ $offence->date_last_seen }}</td>
                    <td>{{ $offence->place_last_seen }}</td>
                    <td>{{ $offence->suspects }}</td>
                </tr>

                @endforeach
            </table>
        </div>
    </div>
@endsection
@extends('layouts.app')

@section('content')
    <div class="col-md-3">
        @include('layouts.dashboard_options')
    </div>
    <div class="col-md-9">
        <div class="col-md-12">
            <span class="pull-right">
                {!! link_to_route('traffic_offence', $title = 'New Offence', $parameters = [], $attributes = ['class' => 'btn btn-danger btn-sm']) !!}
            </span>
        </div>
        <hr>
        @include('errors.feedback')

        <div class="col-md-12">
            <table class="table table-striped">
                <tr>
                    <th>Citation Number</th>
                    <th>Offender</th>
                    <th>Date of Issue</th>
                    <th>Court Date</th>
                    <th>Issuing officer</th>
                </tr>

                @foreach($traffic_offences as $offence)

                <tr>
                    <th>{{ $offence->citation_number }}</th>
                    <th>{{ $offence->offender }}</th>
                    <th>{{ $offence->date_of_issue }}</th>
                    <th>{{ $offence->court_date }}</th>
                    <th>{{ $offence->officer }}</th>
                </tr>

                @endforeach
            </table>
        </div>
    </div>
@endsection
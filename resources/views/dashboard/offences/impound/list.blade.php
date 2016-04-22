@extends('layouts.app')

@section('content')
    <div class="col-md-3">
        @include('layouts.dashboard_options')
    </div>
    <div class="col-md-9">
        <div class="col-md-12">
            <span class="pull-right">
                {!! link_to_route('impound', $title = 'New Impound Offence', $parameters = [], $attributes = ['class' => 'btn btn-danger btn-sm']) !!}
            </span>
        </div>
        <hr>
        @include('errors.feedback')

        <div class="col-md-12">
            <table class="table table-striped">
                <tr>
                    <th>impound ID</th>
                    <th>Licence Plate</th>
                    <th>Offender</th>
                    <th>DLN</th>
                    <th>Make</th>
                    <th>Vehicle Type</th>
                    <th>Citation Number</th>
                </tr>

                @foreach($impounds as $offence)

                <tr>
                    <td>{{ $offence->impound_id }}</td>
                    <td>{{ $offence->licence_plate }}</td>
                    <td>{{ $offence->offender }}</td>
                    <td>{{ $offence->dln }}</td>
                    <td>{{ $offence->make }}</td>
                    <td>{{ $offence->vehicle_type }}</td>
                    <td>{{ $offence->citation_number }}</td>
                </tr>

                @endforeach
            </table>
        </div>
    </div>
@endsection
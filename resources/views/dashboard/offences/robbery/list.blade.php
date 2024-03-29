@extends('layouts.app')

@section('content')
    <div class="col-md-3">
        @include('layouts.dashboard_options')
    </div>
    <div class="col-md-9">
        <div class="col-md-12">
            <span class="pull-right">
                {!! link_to_route('robbery_offence', $title = 'New Robbery Offence', $parameters = [], $attributes = ['class' => 'btn btn-danger btn-sm']) !!}
            </span>
        </div>
        <hr>
        @include('errors.feedback')

        <div class="col-md-12">
            <table class="table table-striped">
                <tr>
                    <th>Robbery ID</th>
                    <th>Crime ID</th>
                    <th>Evidence ID</th>
                    <th>Offender</th>
                    <th>Issuing officer</th>
                    <th>Crime Location</th>
                    <th>Comments</th>
                </tr>

                @foreach($robbery_offences as $offence)

                <tr>
                    <td>{{ $offence->robbery_id }}</td>
                    <td>{{ $offence->crime_id }}</td>
                    <td>
                        {!! link_to_route('evidence_profile', $title = $offence->evidence_id , $parameters = [$offence->evidence_id], $attributes = ['class' => 'btn btn-default btn-sm']) !!}
                    </td>
                    <td>
                        {!! link_to_route('offender', $title = $offence->offender, $parameters = [$offence->national_id]) !!}
                    </td>
                    <td>{{ $offence->officer }}</td>
                    <td>{{ $offence->crime_location }}</td>
                    <td>{{ $offence->comments }}</td>
                </tr>

                @endforeach
            </table>
        </div>
    </div>
@endsection
@extends('layouts.app')

@section('content')
    <div class="col-md-3">
        @include('layouts.dashboard_options')
    </div>
    <div class="col-md-9">
        <div class="col-md-12">
            <span class="pull-right">
                {!! link_to_route('new_offender', $title = 'Add new Offender', $parameters = [], $attributes = ['class' => 'btn btn-danger btn-sm']) !!}
            </span>
        </div>
        <hr>
        <div class="col-md-12">
            <div class="col-md-3">
                <img class="img img-thumbnail" src="{{ asset('images/profile.png') }}">
            </div>
            <div class="col-md-9">
                <ul class="list-group">
                    <li class="list-group-item">
                        <strong>Name: </strong> <span class="pull-right">{{ $offender->first_name }} {{ $offender->last_name }} {{ $offender->last_name }}</span>
                    </li>
                    <li class="list-group-item">
                        <strong>Sex: </strong> <span class="pull-right">{{ $offender->sex }}</span>
                    </li>
                    <li class="list-group-item">
                        <strong>Date of Birth: </strong> <span class="pull-right">{{ $offender->dob }}</span>
                    </li>
                    <li class="list-group-item">
                        <strong>National ID: </strong> <span class="pull-right">{{ $offender->national_od }}</span>
                    </li>
                    <li class="list-group-item">
                        <strong>Phone Number: </strong> <span class="pull-right">{{ $offender->phone_number }}</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-12">
            <div>
            <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#traffic" aria-controls="traffic" role="tab" data-toggle="tab">Traffic Offences</a></li>
                <li role="presentation"><a href="#robbery" aria-controls="robbery" role="tab" data-toggle="tab">Robbery Offences</a></li>
                <li role="presentation"><a href="#impounds" aria-controls="impounds" role="tab" data-toggle="tab">Impounds</a></li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="traffic">
                    @if($traffic_offences->count() > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Citation Number</th>
                                <th>Date of Issue</th>
                                <th>Court Date</th>
                                <th>Issuing officer</th>
                            </tr>

                            @foreach($traffic_offences as $offence)

                            <tr>
                                <th>{{ $offence->citation_number }}</th>
                                <th>{{ $offence->date_of_issue }}</th>
                                <th>{{ $offence->court_date }}</th>
                                <th>{{ $offence->officer }}</th>
                            </tr>

                            @endforeach
                        </table>
                    @else
                        <div class="well">{{$offender->name }} has no traffic offences</div>
                    @endif
                </div>
                <div role="tabpanel" class="tab-pane" id="robbery">
                    @if($robbery_offences->count() > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Robbery ID</th>
                                <th>Crime ID</th>
                                <th>Evidence ID</th>
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
                                <td>{{ $offence->officer }}</td>
                                <td>{{ $offence->crime_location }}</td>
                                <td>{{ $offence->comments }}</td>
                            </tr>

                            @endforeach
                        </table>
                    @else
                        <div class="well">{{$offender->name }} has no Robbery offences</div>
                    @endif
                </div>
                <div role="tabpanel" class="tab-pane" id="impounds">
                    @if($impounds->count() > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>impound ID</th>
                                <th>Licence Plate</th>
                                <th>DLN</th>
                                <th>Make</th>
                                <th>Vehicle Type</th>
                                <th>Citation Number</th>
                            </tr>

                            @foreach($impounds as $offence)

                            <tr>
                                <td>{{ $offence->impound_id }}</td>
                                <td>{{ $offence->licence_plate }}</td>
                                <td>{{ $offence->dln }}</td>
                                <td>{{ $offence->make }}</td>
                                <td>{{ $offence->vehicle_type }}</td>
                                <td>{{ $offence->citation_number }}</td>
                            </tr>

                            @endforeach
                        </table>
                    @else
                        <div class="well">{{$offender->name }} has no Robbery offences</div>
                    @endif
                </div>
              </div>

            </div>
        </div>
    </div>
@endsection
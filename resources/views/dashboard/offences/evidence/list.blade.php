@extends('layouts.app')

@section('content')
    <div class="col-md-3">
        @include('layouts.dashboard_options')
    </div>
    <div class="col-md-9">
        <div class="col-md-12">
            <span class="pull-right">
                {!! link_to_route('evidence', $title = 'New Evidence', $parameters = [], $attributes = ['class' => 'btn btn-danger btn-sm']) !!}
            </span>
        </div>
        <hr>
        @include('errors.feedback')

        <div class="col-md-12">
            <table class="table table-striped">
                <tr>
                    <th>Item</th>
                    <th>Quantity</th>
                    <th>serial Number</th>
                    <th>Status</th>
                    <th>Description</th>
                </tr>

                @foreach($evidences as $evidence)

                <tr>
                    <td>
                        {!! link_to_route('evidence_profile', $title = $evidence->item , $parameters = [$evidence->id], $attributes = ['class' => 'btn btn-default btn-sm']) !!}
                    </td>
                    <td>{{ $evidence->quantity }}</td>
                    <td>{{ $evidence->serial_number }}</td>
                    <td>{{ $evidence->status }}</td>
                    <td>{{ $evidence->description }}</td>
                </tr>

                @endforeach
            </table>
        </div>
    </div>
@endsection
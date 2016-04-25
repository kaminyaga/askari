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
        <h2>Evidence Profile for: {{ $evidence->item }}</h2>
        <div class="col-md-8">
            <ul class="list-group">
                <li class="list-group-item">
                    <strong>Item: </strong> <span class="pull-right">{{ $evidence->item }}</span>
                </li>
                <li class="list-group-item">
                    <strong>Quantity: </strong> <span class="pull-right">{{ $evidence->quantity }}</span>
                </li>
                <li class="list-group-item">
                    <strong>Serial Number: </strong> <span class="pull-right">{{ $evidence->serial_number }}</span>
                </li>
                <li class="list-group-item">
                    <strong>Status: </strong> <span class="pull-right">{{ $evidence->status }}</span>
                </li>
                <li class="list-group-item">
                    <strong>Description: </strong>
                    <p>{{ $evidence->description }}</p>
                </li>
            </ul>
        </div>
    </div>
@endsection
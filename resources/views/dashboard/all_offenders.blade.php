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
        @foreach($offenders->chunk(4) as $chunk)
            <div class="row">
                @foreach($chunk as $offender)

                    <div class="col-md-3">
                        <img class="img img-thumbnail" src="{{ asset('images/profile.png') }}">
                        <section class="offender">
                            <div class="title">
                                <h4>
                                    <a href="{{ route('offender', ['id' => $offender->national_id]) }}">
                                    {{ $offender->first_name }} {{ $offender->last_name }}
                                    </a>
                                </h4>
                            </div>
                            <p> ID Number: {{ $offender->national_id }}</p>
                        </section>
                    </div>

                @endforeach
            </div>

        @endforeach
    </div>
@endsection
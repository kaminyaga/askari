@extends('layouts.app')

@section('content')
    @if (url()->full() == route('homepage'))

        <div id="landing-page" class="text-center">
            <section class="landing-page-title">
                <h1>Welcome to <strong class="site-highlight">Askari</strong></h1>
                <h2>An online <strong class="site-highlight">Police management </strong> platform</h2>
                <hr>
                <div class="landing-page-call-to-action">
                    <a href="{{ route('all_offenders') }}" class="btn btn-success btn-lg">GO TO DASHBOARD</a>
                </div>
            </section>

        </div>

    @endif
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (Auth::check())
                        <div class="alert alert-success" role="alert">
                            You are logged in!
                        </div>
                    @endif
                    <div class="alert alert-success" role="alert">
                            Welcome to Nibal Api
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

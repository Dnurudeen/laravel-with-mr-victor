@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }} <h4>{{ Auth::user()->name }}</h4>
                    <h2>{{ __('You are an Admin') }}</h2>
                </div>
            </div>

            <div class="my-4">
                <a href="{{ url('dashboard/view-profile') }}" class="btn btn-danger">View Profile</a>
            </div>
        </div>
    </div>
</div>
@endsection

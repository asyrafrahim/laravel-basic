@extends('admin.layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
            <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('training:index') }}">{{ ('Trainings') }}</a>
            </li>
            </ul>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-white bg-dark border-light">
                <div class="card-header border-light text-center">
                    {{ __('Welcome') }} {{ Auth::user()->name }} :)
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="text-center">
                        <p>{{ __('Que cherchez vous ?') }}</p>
                        <a href="/jobs/create" class="btn btn-secondary mx-2">Un(e) employé(e)</a>                   
                        <a href="/jobs" class="btn btn-secondary mx-2">Un travail</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

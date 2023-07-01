@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="page-title">
            <h1> {{ __('List Page') }} </h1>
        </div>

        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        @include('employee.show', [ 'employees' => $employees ])

    </div>
</div>
@endsection
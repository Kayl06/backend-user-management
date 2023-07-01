@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="page-title d-flex gap-2 align-items-center">

            <div class="pull-right">
                <a class="btn btn-primary " href="{{ route('employee.index') }}" enctype="multipart/form-data">
                    <span>&#8592;</span>
                </a>
            </div>
            <h1>Create Page</h1>

        </div>

        <form class="form-material mt-5" action="{{ route('employee.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group form-default form-static-label">
                <input type="text" name="first_name" class="form-control" placeholder="Enter First name">
                <span class="form-bar"></span>
                <label class="float-label">First name</label>
            </div>

            <div class="form-group form-default form-static-label">
                <input type="text" name="last_name" class="form-control" placeholder="Enter Last name">
                <span class="form-bar"></span>
                <label class="float-label">Last name</label>
            </div>

            @if ( $role == 'manager' )
            <div class="form-group form-default form-static-label">
                <select name="position" class="form-control">
                    <option value="">Select Position</option>
                    <option value="web developer">Web Developer</option>
                    <option value="web designer">Web Designer</option>
                </select>
                <span class="form-bar"></span>
                <label class="float-label">Position</label>
            </div>
            @else
            <input type="hidden" name="position" value="{{$role}}">
            @endif

            <div class="text-end">
                <button type="submit" name="submit" class="btn btn-success">
                    Save
                </button>
            </div>

        </form>
    </div>
</div>

@endsection
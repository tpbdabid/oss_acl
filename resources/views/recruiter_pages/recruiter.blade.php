@extends('layouts.master')

@section('title')
    Recruiter Page
@endsection

@section('content')
    <h1 style="margin-left:35%;">Recruiter's Only</h1>


        <div class="row">
            <div class="col-md-4">
                <h2>Hello Mr. {{ $user->last_name }}</h2>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4">{{ $user->email }}</div>
        </div>


        <div class="row">
            <div class="col-md-6">
                <h3><a href="{{ route('recruiter.new_job') }}">Post New Job</a></h3>
            </div>
            <div class="col-md-6">
                <h3><a href="{{ route('recruiter.my_posted_job') }}">Posted Jobs</a></h3>
            </div>
        </div>




@endsection
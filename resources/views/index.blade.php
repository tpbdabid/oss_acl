@extends('layouts.master')

@section('title')
    Index Page
@endsection

@section('content')
    <h1 style="margin-left: 35%;">Everyone may visit this page!</h1>
    <br>
    <br>
    <h3 style="text-align: center;"><a href="{{ route('job_view') }}">Show Jobs</a></h3>


@endsection
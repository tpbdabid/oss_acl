@extends('ovi_vai.layouts.ovi_master')

@section('title')
    All Jobs
@endsection

@section('content')
    <?php
       // dd($jobs);
    ?>
<div class="container">

        @foreach($jobs as $job)
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-heading"> {{ $job->job_title }} </div>
                    <div class="panel-body"> <p> Education: {{ $job->job_edu_req }}</p> </div>
                    <div class="panel-footer"> <a type="button" a href="{{ url('/full_job/'.$job->id) }}" class="btn btn-success"> View Full Details </a> </div>
                </div>
            </div>
        @endforeach

</div>

    <br>
<br>
<br>

@endsection
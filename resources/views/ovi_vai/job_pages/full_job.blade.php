@extends('ovi_vai.layouts.ovi_master')

@section('title')
    Job Detailes
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">{!! html_entity_decode($job->job_title ) !!} </div>
                    <div class="panel-body">
                        <p>
                        <h4> Number of vacancies </h4>
                        <p>{!! html_entity_decode($job->no_of_vacan ) !!} </p>
                        <h4> Job Type </h4>
                        <p> {!! html_entity_decode($job->job_type ) !!} </p>
                        <h4> Job Level  </h4>
                        <p>{!! html_entity_decode($job->job_level ) !!}</p>
                        <h4> Job Description/Responsibility </h4>
                        {!! html_entity_decode( $job->job_respons ) !!}

                        <h4> Educational Requirements </h4>
                        <p> {!! html_entity_decode( $job->job_edu_req ) !!} </p>

                        <h4>   Additional Requirements </h4>

                        <p style="text-align: justify;"> {!! html_entity_decode( $job->add_requirement ) !!}</p>


                        <h4> Job Location </h4>
                        <p style="text-align: justify;">
                            <?php
                            for($i=0;$i<count($job_loc_name);$i++){
                                echo '<li style="margin-left: 5%;">'.$job_loc_name[$i]->location_name.'</li>';
                            }
                            ?>
                        </p>

                        <h4> Salary </h4>
                        <p>{!! html_entity_decode($job->salary) !!} Taka</p>

                        <h4> Apply Instructions </h4>
                        {!! html_entity_decode($job->apply_instructions) !!}

                        <h4> Company Informations </h4>

                        <p>{!! html_entity_decode($job->company_info) !!}</p>

                        <div class="panel-footer"> <a type="button" a href="#" class="btn btn-success"> Apply Now </a> </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="panel panel-primary">
                    <div class="panel-heading"> Job Summary </div>
                    <div class="panel-body">
                        <h4> Published On  </h4>
                        {{--<p>{!! html_entity_decode($job->publish_date) !!}</p>--}}
                        {{--<p>{!! html_entity_decode($job->publish_date) !!}</p>--}}
                        <p>{{ Carbon\Carbon::parse($job->publish_date)->format('d-m-Y') }}</p>

                        <h4> Job Location </h4>
                        <p>
                            <?php
                            for($i=0;$i<count($job_loc_name);$i++){
                                echo '<li>'.$job_loc_name[$i]->location_name.'</li>';
                            }
                            ?>
                        </p>
                        <h4> Deadline  </h4>
{{--                        <p>{!! html_entity_decode($job->dead_line) !!}</p>--}}
                        <p>{{ Carbon\Carbon::parse($job->dead_line)->format('d-m-Y') }}</p>

                        <h4>Salary </h4>
                        <p> {!! html_entity_decode($job->salary) !!} Taka</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <br>
    <br>

@endsection
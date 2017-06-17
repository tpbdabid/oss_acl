@extends('layouts.master')

@section('title')
    My Posted Job
@endsection

@section('content')
    <h1 style="text-align: center;">Posted Job</h1>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <table>
                    <tr>
                        <th>Job Title</th>
                        <th>Job Category</th>
                        <th>Job Location</th>
                        <th>Vacancyyyyy</th>
                    </tr>



                 @foreach($jobs as $job)
                    <tr>
                        <td>{{ $job->job_title }}</td>
                        <td>{{ $job->cat_name }}</td>
                        <td>{{ $job->location_name }}</td>
                        <td>{{ $job->no_of_vacan }}</td>
                    </tr>
                 @endforeach
                </table>
            </div>
        </div>

        <h3>In this page........</h3>
    </div>


@endsection
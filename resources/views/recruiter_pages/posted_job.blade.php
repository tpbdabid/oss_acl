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
                        <th>Vacancy</th>
                    </tr>

                    <?php
                    $i=0;
                    ?>

                    @foreach($jobs as $job)
                        <?php
                            //dd($job);
                        ?>
                        <tr>
                            <td>{{ $job->job_title }}</td>
                            <td>

                               @for($j=0;$j<count($cat_name[$i]);$j++)
                                   {{ $cat_name[$i][$j]->cat_name }}
                               @endfor
                                    <?php
                                        $i++;
                                    ?>
                            </td>
                      {{--  <td>{{ $job->cat_name }}</td>--}}
                            <td>{{ $job->location_name }}</td>
                            <td>{{ $job->no_of_vacan }}</td>
                            <td style="padding-right: 6%;"><a href="{{ url('/edit_job/'.$job->jobID) }}">Edit</a></td>
                            <td style="padding-right: 6%;"><a href="{{ url('/delete_job/'.$job->jobID) }}">Delete</a></td>
                        </tr>
                    @endforeach



                    <?php
                        $a=0;
                    ?>

                    <div class="input-group">
                        <label for="category">Job Category</label>
                        <select class="js-example-basic-multiple" multiple="multiple" id="category" name="category[]">
                            @for($b=0;$b<count($cat_name[$a]);$b++)
                                <option selected="selected" value="{{ $cat_name[$a][$b]->id }}">{{ $cat_name[$a][$b]->cat_name }}</option>
                            @endfor

                            @foreach($all_cats as $all_cat)
                                @for($b=0;$b<count($cat_name[$a]);$b++)
                                    @if( $cat_name[$a][$b]->cat_name !== $all_cat->cat_name )
                                        <option value="{{ $all_cat->id }}">{{ $all_cat->cat_name }}</option>
                                    @endif
                                @endfor
                            @endforeach

                    <?php
                       $a++;
                    ?>
                            @foreach($category as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->cat_name }}</option>
                            @endforeach
                        </select>
                    </div>


                </table>
            </div>
        </div>


    </div>



    <script type="text/javascript">
        $(".js-example-basic-multiple").select2({
            placeholder: "Select Job Category"
        });

    </script>


@endsection
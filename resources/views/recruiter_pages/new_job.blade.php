@extends('layouts.master')

@section('title')
    Create New Job
@endsection

@section('content')
    <style>
        /*CSS for Text Editor*/
        .Editor-container{
            margin-left: 2% !important;
        }
        .nopadding{
            width: 80%;
        }
        .Editor-editor{
            height: 200px;
        }
        .select2-container--default{
            width: 137px ! important;
        }
    </style>
    <div class="container">
        <h1 style="margin-left:35%;">Create New job </h1>

        <form action="{{ route('recruiter.new_job') }}" method="post">
            {{ csrf_field() }}

            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="input-group">
                <label for="job_title">Job Title</label>
                <input type="text" id="job_title" name="job_title">
            </div>
            <div class="input-group">
                <label for="no_of_vacan">No. of Vacancies</label>
                <input type="text" id="no_of_vacan" name="no_of_vacan">
            </div>

            <div class="input-group">
                <label for="no_of_vacan">Educational Requirement</label>
                <input type="text" id="job_edu_req" name="job_edu_req">
            </div>

            <div class="input-group">
                <label for="dead_line">Dead Line</label>
                <input type="date" id="dead_line" name="dead_line">
            </div>


            <div class="input-group">
                <label for="category">Job Category</label>
                <select class="js-example-basic-multiple" multiple="multiple" id="category" name="category[]">
                    @foreach($category as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->cat_name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="input-group">
                <label for="job_location">Job Location</label>
                <select class="js-example-basic-multiple" multiple="multiple" id="job_location" name="job_location[]">
                    @foreach($job_locations as $job_location)
                        <option value="{{ $job_location->id }}">{{ $job_location->location_name }}</option>
                    @endforeach
                </select>
            </div>


            {{--<div class="input-group">--}}
                {{--<label for="dead_line">Job Location</label>--}}
                {{--<input type="text" id="job_location" name="job_location">--}}
            {{--</div>--}}


            {{--<div class="input-group">--}}
            {{--<label for="category">Job Category</label>--}}
            {{--<select class="js-example-basic-multiple" multiple="multiple" id="category" name="category[]">--}}
            {{--@foreach($category as $cat)--}}
            {{--<option value="{{ $cat->id }}">{{ $cat  ->cat_name }}</option>--}}
            {{--@endforeach--}}
            {{--</select>--}}
            {{--</div>--}}


            <div class="input-group">
                <label for="publish_date">Publish Date</label>
                <input type="date" id="publish_date" name="publish_date">
            </div>
            <div class="input-group">
                {{--<label for="publisher">Publisher Id</label>--}}
                <input type="hidden" id="publisher" name="publisher" value="{{ $user_id }}">
            </div>
           
            <div class="input-group">
                <label for="age_limit">Age Limit</label>
                <input type="text" id="age_limit" name="age_limit">
            </div>


            <div class="input-group">
                <label for="job_level">Job Level</label>
                <input type="radio" name="job_level" value="Entry"> Entry <br>
                <input type="radio" name="job_level" value="Mid"> Mid <br>
                <input type="radio" name="job_level" value="High"> High
            </div>

            <div class="input-group">
                <label for="job_type">Job Type</label>
                <input type="radio" name="job_type" value="Intern">Intern <br>
                <input type="radio" name="job_type" value="Temporary"> Temporary <br>
                <input type="radio" name="job_type" value="Premanent"> Premanent
            </div>

            <div class="input-group">
                <label for="gender"> Gender </label>
                <input type="radio" name="gender" value="male"> Male<br>
                <input type="radio" name="gender" value="female"> Female<br>
                <input type="radio" name="gender" value="other"> Other
            </div>

            <div class="input-group">
                <label for="experience"> Experience </label>
                <input type="text" id="experience" name="experience">
            </div>

            <div class="input-group">
                <label for="salary"> Salary </label>
                <input type="text" id="salary" name="salary">
            </div>

            <div class="input-group">

                <input type="checkbox" name="negotiable" value="1">Negotiable<br>
            </div>

            <div class="input-group">
                <label for="no_of_pub">No. Of Publications </label>
                <input type="number" id="no_of_pub" name="no_of_publications">
            </div>

            <div class="input-group">
                {{--<label for="publish_date">Create Date</label>--}}
                <input type="hidden" id="created_at" name="created_at" value="{{ $today }}">
            </div>

            <div class="input-group">
                <label for="other_ben">Other Benifits</label>
                <div class="row">
                    <div class="col-md-12 nopadding">
                        <textarea  class="form-control" id="other_benefits" name="other_benefits"></textarea>
                    </div>
                </div>
            </div>


            <div class="input-group">
                <label for="app_ins"> Apply Instruction </label>
                <div class="row">
                    <div class="col-md-12 nopadding">
                        <textarea  class="form-control" id="apply_instractions" name="apply_instractions"></textarea>
                    </div>
                </div>
            </div>

            <div class="input-group">
                <label for="key_points"> Key Points </label>
                <div class="row">
                    <div class="col-md-12 nopadding">
                        <textarea  class="form-control" id="key_points" name="key_points"></textarea>
                    </div>
                </div>
            </div>

            <div class="input-group">
                <label for="descripton"> Description </label>
                <div class="row">
                    <div class="col-md-12 nopadding">
                        <textarea  class="form-control" id="description" name="description"></textarea>
                    </div>
                </div>
            </div>

            <div class="input-group">
                <label for="job_res"> Job Responsiblity </label>
                <div class="row">
                    <div class="col-md-12 nopadding">
                        <textarea  class="form-control" id="job_respons" name="job_respons"></textarea>
                    </div>
                </div>
            </div>

            <div class="input-group">
                <label for="add_job_req"> Additional Job Requirement </label>
                <div class="row">
                    <div class="col-md-12 nopadding">
                        <textarea  class="form-control" id="add_requirement" name="add_requirement"></textarea>
                    </div>
                </div>
            </div>

            <div class="input-group">
                <label for="com_info"> Company Information </label>
                <div class="row">
                    <div class="col-md-12 nopadding">
                        <textarea  class="form-control" id="company_info" name="company_info"></textarea>
                    </div>
                </div>
            </div>

        <div>

        </div>



            <button type="submit">Create New Job</button>
        </form>



        <script type="text/javascript">



//            $(".js-example-basic-multiple").select2({
//                placeholder: "Select Job Category"
//            });


            $("#category").select2({
                placeholder: "Select Job Category"
            });

            $("#job_location").select2({
                placeholder: "Select Job Location"
            });


            $(function() {
                $('#other_benefits').wysihtml5({
                    toolbar:{
                        fa: true
                    }
                });
//
            });



            $(function() {
                $('#apply_instractions').wysihtml5({
                    toolbar:{
                        fa: true
                    }
                });
            });


            $(function() {
                $('#key_points').wysihtml5({
                    toolbar:{
                        fa: true
                    }
                });
            });


            $(function() {
                $('#description').wysihtml5({
                    toolbar:{
                        fa: true
                    }
                });
            });



            $(function() {
                $('#job_respons').wysihtml5({
                    toolbar:{
                        fa: true
                    }
                });
            });


            $(function() {
                $('#add_requirement').wysihtml5({
                    toolbar:{
                        fa: true
                    }
                });
            });


            $(function() {
                $('#company_info').wysihtml5({
                    toolbar:{
                        fa: true
                    }
                });
            });

//            $('#other_benefits').Editor("getText");

        </script>

        <script>
//            $('#job_location').on('keyup',function(){
//                var content = $('#job_location').val();
//
//
//                $.ajax({
//                    type: "POST",
//                    url: 'recruiter/new_job/location',
//                    data: {token:_token,content: content},
//                    success: function( msg ) {
//                        console.log('got it');
//                    }
//                });
//            });


        </script>

        <script>
            $(function() {
                $('#editTextArea').wysihtml5({
                    toolbar:{
                        fa: true
                    }
                });
            });
        </script>

{{--        <script src="{{ ('/src/vendor/tinymce/js/tinymce/jquery.tinymce.min.js') }}"></script>--}}
    </div>
@endsection

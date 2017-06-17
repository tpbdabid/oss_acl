<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> @yield('title')</title>
    <link rel="stylesheet" href="{{ URL::to('/css/main.css') }}">

    {{--for Bootstrap and JQuery --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    {{--for select 2--}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

    {{--for Text Editor--}}


    {{--<script src="{{('/text_editor/editor.js')}}"></script>--}}


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    {{--<link href="{{ URL::to('/text_editor/editor.css') }}" type="text/css" rel="stylesheet"/>--}}
    {{--<link rel="stylesheet" href="{{'/text_editor/editor.css'}}">--}}

{{--    <script src="{!! URL::asset('text_editor_sample/bootstrap3-wysihtml5.all.js') !!}}"></script>--}}
    <link rel="stylesheet" href="{{ ('/text_editor_sample/bootstrap3-wysihtml5.css') }}">
    <script src="{{ ('/text_editor_sample/bootstrap3-wysihtml5.all.js') }}"></script>






</head>
<body>
@include('partials.header')

<div class="main">
            @yield('content')
</div>

</body>
</html>
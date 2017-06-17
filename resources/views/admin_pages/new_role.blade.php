@extends('layouts.master')

@section('title')
    Create New Role
@endsection

@section('content')
    <h2>Create New Role</h2>

        @if(isset($edit))
            <form action="{{ route('admin.edit-role') }}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $edit->id }}">
                <div class="input-group">
                    <label for="text">Role's Name:</label>
                    <input type="text" id="role_name" value="{{ $edit->name }}" name="role_name">
                </div>
                <div class="input-group">
                    <label for="text">Role's Description:</label>
                    {{--<input type="text" id="role_description" value="{{ $edit->description }}" name="role_description">--}}
                    <textarea class="form-control" rows="5" id="role_description" name="role_description">{{ $edit->description }}</textarea>
                </div>
        @else
            <form action="{{ route('admin.post-create-new-role') }}" method="post">
                {{ csrf_field() }}
                <div class="input-group">
                    <label for="text">Role's Name:</label>
                    <input type="text" id="role_name" name="role_name">
                </div>
                <div class="input-group">
                    <label for="text">Role's Description:</label>
                    {{--<input type="text" id="role_description" name="role_description">--}}
                    <textarea class="form-control" rows="5" id="role_description" name="role_description"></textarea>

                </div>
        @endif



        <button type="submit">
            @if(isset($edit))
                Update Role
            @else
                Create Role
            @endif
        </button>
    </form>
@endsection
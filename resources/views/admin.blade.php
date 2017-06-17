@extends('layouts.master')

@section('title')
   Admin Page
@endsection

@section('content')

    <h1 style="margin-left:35%;">Admin's Only</h1>

    <div class="new_role" style="background-color: gray; margin-bottom: 5%;margin-top: 2%;">
        <div class="row">
            <div class="col-md-4">
                <a style="color: white;" href="{{ route('admin.create-new-role') }}">Create New Role</a>
            </div>
            <br>
            <div class="col-md-4">
                <a style="color: white;" href="{{ route('admin.show-all-role') }}">Show All Role</a>
            </div>
        </div>
    </div>


    <table>
        <thead>
        <th>First Name</th>
        <th>Last Name</th>
        <th>E-Mail</th>
        <th>User</th>
        <th>Recruiter</th>
        <th>Admin</th>
        <th>Applicant</th>
        <th></th>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <form action="{{ route('admin.assign') }}" method="post">
                    <td>{{ $user->first_name }}</td>
                    <td>{{ $user->last_name }}</td>
                    <td>{{ $user->email }} <input type="hidden" name="email" value="{{ $user->email }}"></td>
                    <td><input type="checkbox" {{ $user->hasRole('User') ? 'checked' : '' }} name="role_user"></td>
                    <td><input type="checkbox" {{ $user->hasRole('Recruiter') ? 'checked' : '' }} name="role_recruiter"></td>
                    <td><input type="checkbox" {{ $user->hasRole('Admin') ? 'checked' : '' }} name="role_admin"></td>
                    <td><input type="checkbox" {{ $user->hasRole('Applicant') ? 'checked' : '' }} name="role_applicant"></td>
                    {{ csrf_field() }}
                    <td><button type="submit">Assign Roles</button></td>
                </form>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
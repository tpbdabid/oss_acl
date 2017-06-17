@extends('layouts.master')

@section('title')
    Show All Role
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <h1>Show All Roles</h1>
            <br>

            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                </tr>
                </thead>

                <tbody>
                @foreach($roles as $role)
                    <tr>
                        <td>{{$role->name}}</td>
                        <td>{{$role->description}}</td>
                        <td><a href="{{ url('/admin/edit-role/'.$role->id) }}">Edit</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
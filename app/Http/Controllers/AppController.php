<?php

namespace App\Http\Controllers;
use App\User;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
    public function getIndex()
    {
        return view('index');
    }

    public function getRecruiterPage()
    {
        $user = Auth::user();
        return view('recruiter_pages.recruiter',compact('user'));
    }

    public function getAdminPage()
    {
        $users = User::all();
        return view('admin', ['users' => $users]);
    }



    public function postAdminAssignRoles(Request $request)
    {
        $user = User::where('email', $request['email'])->first();
        $user->roles()->detach();
        if ($request['role_user']) {
            $user->roles()->attach(Role::where('name', 'User')->first());
        }
        if ($request['role_recruiter']) {
            $user->roles()->attach(Role::where('name', 'Recruiter')->first());
        }
        if ($request['role_admin']) {
            $user->roles()->attach(Role::where('name', 'Admin')->first());
        }
        if ($request['role_applicant']) {
            $user->roles()->attach(Role::where('name', 'Applicant')->first());
        }
        return redirect()->back();
    }

    public function createNewRole(){
        return view('admin_pages.new_role');
    }

    public function postCreateNewRole(Request $request){
        $this->validate($request,[
            'role_name'=>'required|min:3',
            'role_description'=>'required'
        ]);


        if($request['role_name'] != null){
            $role_name = $request['role_name'];
            $role_description = $request['role_description'];

            $role = new Role;
            $role->name = $role_name;
            $role->description = $role_description;
            $role->save();
        }
        return redirect()->route('admin.show-all-role');

    }

    public function showAllRole(){
        $roles = Role::all();
        return view('admin_pages.show_role',compact('roles'));
    }

    public function editRole($id){
        $edit = Role::find($id);

        return view('admin_pages.new_role',compact('edit'));
    }

    public function postEditRole(Request $request){
        $this->validate($request,[
            'role_name'=>'required|min:3',
            'role_description'=>'required'
        ]);
        $role_id = $request['id'];
        $role_name = $request['role_name'];
        $role_description = $request['role_description'];

        $update = Role::find($role_id);
        $update->name = $role_name;
        $update->description = $role_description;
        $update->save();

        return redirect()->route('admin.show-all-role');
    }


    public function test(){
        dd('Applicant');
    }
}
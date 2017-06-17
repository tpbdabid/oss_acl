<?php

    Route::get('/', function () {
        return view('index');
    })->name('main');

    Route::get('/recruiter', [
        'uses' => 'AppController@getRecruiterPage',
        'as' => 'recruiter',
        'middleware' => 'roles',
        'roles' => ['Recruiter']
    ]);



    Route::get('/admin', [
        'uses' => 'AppController@getAdminPage',
        'as' => 'admin',
        'middleware' => 'roles',
        'roles' => ['Admin']
    ]);

    Route::get('/admin/create-new-role',[
        'uses'=>'AppController@createNewRole',
        'as'=>'admin.create-new-role',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    Route::post('/admin/create-new-role',[
        'uses'=>'AppController@postCreateNewRole',
        'as'=>'admin.post-create-new-role',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    Route::get('/admin/show-all-role',[
        'uses'=>'AppController@showAllRole',
        'as'=>'admin.show-all-role',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    Route::get('/admin/edit-role/{id}',[
        'uses'=>'AppController@editRole',
        'as'=>'admin.edit-role',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

    Route::post('/admin/edit-role',[
        'uses'=>'AppController@postEditRole',
        'as'=>'admin.edit-role',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);

//    Route::get('/admin/edit-role/{id}',function(){
//        echo 'edit';
//    })->name('admin/edit-role/{id}');

    Route::get('/admin/delete-role',[
        'uses'=>'AppController@deleteRole',
        'as'=>'admin.delete-role',
        'middleware'=>'roles',
        'roles'=>['Admin']
    ]);


    Route::get('/applicant/test',[
        'uses'=>'AppController@test',
        'as'=>'applicant.test',
        'middleware'=>'roles',
        'roles'=>['Applicant']
    ]);


Route::post('/admin/assign-roles', [
        'uses' => 'AppController@postAdminAssignRoles',
        'as' => 'admin.assign',
        'middleware' => 'roles',
        'roles' => ['Admin']
    ]);

    Route::get('/signup', [
        'uses' => 'AuthController@getSignUpPage',
        'as' => 'signup'
    ]);

    Route::post('/signup', [
        'uses' => 'AuthController@postSignUp',
        'as' => 'signup'
    ]);

    Route::get('/signin', [
        'uses' => 'AuthController@getSignInPage',
        'as' => 'signin'
    ]);

    Route::post('/signin', [
        'uses' => 'AuthController@postSignIn',
        'as' => 'signin'
    ]);

    Route::get('/logout', [
        'uses' => 'AuthController@getLogout',
        'as' => 'logout'
    ]);


    Route::group([
        'namespace'=>'Recruiter',
        'middleware'=>'roles'
    ],
        function(){
            Route::get('recruiter/new_job',[
                'uses'=>'RecruiterController@getNewJob',
                'as'=>'recruiter.new_job',
                'roles'=>['Recruiter']
            ]);
            Route::post('recruiter/new_job',[
                'uses'=>'RecruiterController@postNewJob',
                'as'=>'recruiter.new_job',
                'roles'=>['Recruiter']
            ]);
            Route::get('recruiter/my_posted_job',[
                'uses'=>'RecruiterController@showMyPostedJob',
                'as'=>'recruiter.my_posted_job',
                'roles'=>['Recruiter']
            ]);

            Route::post('recruiter/new_job/ajax_location',[
                'uses'=>'RecruiterController@ajaxLocation',
                'as'=>'recruiter.new_job.ajax_location',
                'roles'=>['Recruiter']
            ]);

            Route::get('/edit_job/{id}',[
                'uses'=>'RecruiterController@getEditJob',
                'as'=>'recruiter.getEditJob',
                'roles'=>['Recruiter']
            ]);

            Route::get('/delete_job/{id}',[
                'uses'=>'RecruiterController@deleteJob',
                'as'=>'recruiter.deleteJob',
                'roles'=>['Recruiter']
            ]);

            Route::get('/edit_job',function(){
                return view('recruiter_pages.edit_job');
            });

        }
    );

    Route::get('/job_view',[
        'uses'=>'JobController@getJobView',
        'as'=>'job_view'
    ]);

    Route::get('/full_job/{id}',[
        'uses'=>'JobController@getFullJob',
        'as'=>'full_job'
    ]);




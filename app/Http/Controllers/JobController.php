<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class JobController extends Controller
{
    public function getJobView(){
        $jobs = DB::table('job')
            ->select('*')
            ->get();
        return view('ovi_vai.job_pages.job_view',compact('jobs'));
    }

    public function getFullJob($id){
        $job = DB::table('job')
            ->join('job_location','job.job_location','=','job_location.id')
            ->select('*')
            ->where('job.id',$id)
            ->first();
        $job_location = explode(',',$job->job_location);
        $job_loc_name = [];
        for($i=0;$i<count($job_location);$i++){
            $job_loc_name[] = DB::table('job_location')
                ->select('*')
                ->where('id',$job_location[$i])
                ->first();
        }

        return view('ovi_vai.job_pages.full_job',compact('job','job_loc_name'));
    }
}
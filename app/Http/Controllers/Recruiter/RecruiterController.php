<?php

namespace App\Http\Controllers\Recruiter;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use DB;

use Carbon\Carbon;

class RecruiterController extends Controller
{
    public function getNewJob(){
        $today = Carbon::now();

        $location = DB::table('job_location')
                        ->select('*')
                        ->get();

        $category = DB::table('job_categories')
                        ->select('*')
                        ->get();

        $job_locations = DB::table('job_location')
                        ->select('*')
                        ->get();

        $user = Auth::user();
        $user_id = $user->id;

        return view('recruiter_pages.new_job',compact('user_id','location','category','today','job_locations'));
    }
    public function postNewJob(Request $request){

//        $this->validate($request,[
//            'job_title'=>'required',
//            'publish_date'=>'required'
//        ]);

        $job_title = $request['job_title'];
        $no_of_vacan = $request['no_of_vacan'];
        $job_edu_req = $request['job_edu_req'];
        $dead_line = $request['dead_line'];
        $category = implode(',',$request['category']);

        $publish_date = $request['publish_date'];
        $publisher = $request['publisher'];

        $job_location = implode(',',$request['job_location']);
        $age_limit = $request['age_limit'];
        $job_level = $request['job_level'];
        $job_type = $request['job_type'];
        $gender = $request['gender'];
        $experience = $request['experience'];
        $salary = $request['salary'];
        $negotiable = $request['negotiable'];
        $no_of_publications = $request['no_of_publications'];
        $other_benefits = $request['other_benefits'];
        $apply_instructions = $request['apply_instractions'];
        $key_points = $request['key_points'];
        $description = $request['description'];
        $job_respons = $request['job_respons'];
        $add_requirement = $request['add_requirement'];
        $company_info = $request['company_info'];
        $created_at = $request['created_at'];


        //dd($request['other_benefits']);

//        echo 'job title'.$job_title.'<br>';
//        echo ' $no_of_vacan'.$no_of_vacan.'<br>';
//        echo ' $dead_line'.$dead_line.'<br>';
//        echo ' $category'.$category.'<br>';
//        echo ' $publish_date'.$publish_date.'<br>';
//        echo ' $publisher'.$publisher.'<br>';
//        echo ' $job_level'.$job_level.'<br>';
//        echo ' $age_limit'.$age_limit.'<br>';
//        echo ' $job_location'.$job_location.'<br>';
//        echo ' $job_type'.$job_type.'<br>';
//        echo ' $gender'.$gender.'<br>';
//        echo ' $experience'.$experience.'<br>';
//        echo ' $salary'.$salary.'<br>';
//        echo ' $negotiable'.$negotiable.'<br>';
//        echo ' $no_of_publications'.$no_of_publications.'<br>';
//        echo ' $other_benefits'.$other_benefits.'<br>';
//        echo ' $apply_instructions'.$apply_instructions.'<br>';
//        echo ' $key_points'.$key_points.'<br>';
//        echo ' $description'.$description.'<br>';
//        echo ' $job_respons'.$job_respons.'<br>';
//        echo ' $add_requirement'.$add_requirement.'<br>';
//        echo ' $company_info'.$company_info.'<br>';
//        echo ' $created_at'.$created_at.'<br>';


       // dd('check it');


        $data = DB::table('job')->insert([
            'job_title'=>$job_title,
            'no_of_vacan'=>$no_of_vacan,
            'job_edu_req'=>$job_edu_req,
            'dead_line'=>$dead_line,
            'category'=>$category,
            'publish_date'=>$publish_date,
            'publisher'=>$publisher,
            'job_location'=>$job_location,
            'age_limit'=>$age_limit,
            'job_level'=>$job_level,
            'job_type'=>$job_type,
            'gender'=>$gender,
            'experience'=>$experience,
            'salary'=>$salary,
            'negotiable'=>$negotiable,
            'no_of_publications'=>$no_of_publications,
            'other_benefits'=>$other_benefits,
            'apply_instructions'=>$apply_instructions,
            'key_points'=>$key_points,
            'description'=>$description,
            'job_respons'=>$job_respons,
            'add_requirement'=>$add_requirement,
            'company_info'=>$company_info,
            'created_at'=>$created_at
        ]);

        if($data){
            return redirect()->route('job_view');
        }else{
            return redirect()->back();
        }

    }

    public function showMyPostedJob(){
        $user = Auth::user();
        $today = Carbon::now();
        $cat_name[]='';

        $all_cats = DB::table('job_categories')
                   ->select('*')
                   ->get();


        $jobs = DB::table('job')
                ->join('job_categories','job.category','=','job_categories.id')
                ->join('job_location','job.job_location','=','job_location.id')
                ->select('job.*','job_categories.*','job_location.*','job.id as jobID')
                ->where('job.publish_date','<=',$today)
                ->where('job.publisher','=',$user->id)
                ->get();
        $ab=0;

        foreach($jobs as $job){
            $job_cats = explode(',',$job->category);
            $z=0;

            foreach($job_cats as $jc){
                //echo $jc.',';

                if($jc != 0 && $jc != null){
                    $cat_name[$ab][$z]=DB::table('job_categories')
                        ->select('*')
                        ->where('id','=',$jc)
                        ->first();
                }
                $z++;
            }


            $ab++;

        }

/*
       $p=0;
        foreach($jobs as $job){
            echo $job->job_title.'<br>';
//            dd(count($cat_name[$i_cat]));
              for($i=0;$i<count($cat_name[$p]);$i++){
                   echo $cat_name[$p][$i]->cat_name;
              }
            $p++;
        }

 */


        return view('recruiter_pages.posted_job',compact('jobs','cat_name','all_cats'));
    }

    public function ajaxLocation(Request $request){
        $content = $request['content'];

        $result = DB::table('job_location')
                  ->select('*')
                  ->where('location_name','like','%'.$content.'%')
                  ->get();

        return $result;
    }

    public function getEditJob($id){
        dd($id);
    }

    public function deleteJob($id){
        $user = Auth::user();
        $user_id = $user->id;
        $deleteJob = DB::table('job')
                    ->where('id','=',$id)
                    ->where('publisher','=',$user_id)
                    ->delete();
        if($deleteJob){
            return redirect()->route('job_view');
        }else{
            return redirect()->back();
        }
    }
}

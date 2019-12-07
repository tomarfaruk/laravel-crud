<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Jobpost;
use App\Application;

class CompanyController extends Controller
{
    public function index(){
        $jobs = Jobpost::all();
        return view('jobportal.app', compact('jobs'));
    }
    public function jobdetails($id){
        $job = Jobpost::findOrFail($id);
        return view('jobportal.jobdetails', compact('job'));
    }

    public function applicants(){
        $applicants = Application::all();
        return view('jobportal.applicants', compact('applicants'));
    }

    public function applicantsedit($id){
        $applicant = Application::findOrFail($id);
        return view('jobportal.applicantsedit', compact('applicant'));
    }

    public function applicantprofileupdate(Request $request, $id){
        $applicant = Application::findOrFail($id);

        $applicant->fname = $request['fname'];
        $applicant->lname = $request['lname'];
        $applicant->email = $request['email'];

        if ($request->file('image')){
            $applicant->image = $request->file('image')->getClientOriginalName();
        }
        if ($request->file('file')){
            $applicant->file = $request->file('file')->getClientOriginalName();
        }

        $applicant->save();

        return view('jobportal.applicantsedit', compact('applicant'));
    }

    public function companyprofile($id){
        $company = Company::findOrFail($id);
        $jobs = $company->jobposts;
        return view('jobportal.companyprofile', compact('company', 'jobs'));
    }

    public function applyjob($id){
        $job = Jobpost::findOrFail($id);
        return $job->applications->count();

        return $job->applications()->toggle(9);
    }
}

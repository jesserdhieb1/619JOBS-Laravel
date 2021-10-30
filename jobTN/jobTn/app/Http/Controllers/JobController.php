<?php

namespace App\Http\Controllers;

use App\Models\job;
use Illuminate\Http\Request;


class JobController extends Controller
{
    public function index(){
        $jobs=job::all();

        return view('jobs.index',['jobs'=>$jobs]);
    }
    public function show($id){
        $job=job::findOrFail($id);
        return view('jobs.show',['job'=>$job]);
    }
    public function create(){
        return view('jobs.create');
    }
    public function store(){
        $job=new job();
        $job->name=request('name');
        $job->email=request('email');
        $job->description=request('description');
        $job->price=request('price');
        $job->time=request('time');
        $job->duration=request('duration');
        
        $job->save();

        return redirect('/jobs');
    }
    public function destroy($id){
        $job=job::findOrFail($id);
        $job->delete();
        return redirect('/jobs');
    }

}


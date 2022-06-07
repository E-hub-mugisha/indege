<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Jobs;
use App\Models\Workers;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function post_job(Request $request)
    {
        $job = new Jobs([
            "job_title" =>$request->job_title,
            "job_poster"=>$request->job_poster,
            "phone" =>$request->phone,
            "job_type" =>$request->job_type,
            "description" =>$request->description,
            "amount" =>$request->amount,
            "payment_mode" =>$request->payment_mode,
            "location" =>$request->location,
        ]);
        $job->save();
        return redirect()->back();
    }
    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
    
        // Search in the title and body columns from the posts table
        $job = Jobs::query()
            ->where('job_title', 'LIKE', "%{$search}%")
            ->orWhere('job_type', 'LIKE', "%{$search}%")
            ->get();
    
        // Return the search view with the resluts compacted
        return view('pages.search', compact('job'));
    }
    public function product($job_title)
    {
        $shareButtons = \Share::page(
            'https://www.indege.rw',
            'Your share text comes here',
        )
        ->facebook()
        ->twitter()
        ->linkedin()
        ->telegram()
        ->whatsapp()        
        ->reddit();
        $job = Jobs::where('job_title', $job_title)->first();
        return view('pages.product', compact('shareButtons','job'));
    }
    public function services()
    {
        $category = Jobs::query()->distinct()->get('job_type');
        $job = Jobs::latest()->paginate(10);
        return view('pages.services', compact('category'), compact('job'))->with('i', (request()->input('page', 1) * 5));
    }
    public function worker()
    {
        $category = Workers::query()->distinct()->get('category');
        $worker = Workers::latest()->paginate(10);
        return view('pages.worker', compact('category'), compact('worker'))->with('i', (request()->input('page', 1) * 5));
    }
    public function category($job_type)
    {
        $job = Jobs::query()->where('job_type', $job_type)->get();
        return view('pages.category', compact('job'));
    }
    public function billing()
    {
        return view('pages.billing');
    }
    
}

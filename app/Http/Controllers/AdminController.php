<?php

namespace App\Http\Controllers;
use App\Models\Jobs;
use App\Models\Workers;
use App\Models\Categories;
use App\Models\Blogs;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {
        return view('admin.admin');
    }
    public function create_post()
    {
        return view('admin.content.create_post');
    }
    public function create_workers()
    {
        return view('admin.content.create_workers');
    }
    public function job_post(Request $request)
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
    public function view_jobs()
    {
        $job = Jobs::latest()->paginate(10);
        return view('admin.content.view_jobs', compact('job'))->with('i', (request()->input('page', 1) * 5));
    }
    public function view_workers()
    {
        $worker = Workers::latest()->paginate(10);
        return view('admin.content.view_workers', compact('worker'))->with('i', (request()->input('page', 1) * 5));
    }
    public function messages()
    {
        return view('admin.content.messages');
    }
    public function upload_worker(Request $request)
    {
        
        $worker = new Workers;
        $request->validate([
            'id_number' => 'required',
            'names' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
            'image' => 'required',
            'experience' => 'required',
            'skills' => 'required',
            'description' => 'required',
            'payment_mode' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
            
        ]);
        $file = $request->image;
        $filename = time().'.'.$file->getClientOriginalExtension();
        $request->image->move('assets/images', $filename);
        $worker->id_number = $request->id_number;
        $worker->names = $request->names;
        $worker->phone = $request->phone;
        $worker->email = $request->email;
        $worker->address = $request->address;
        $worker->experience = $request->experience;
        $worker->skills = $request->skills;
        $worker->payment_mode = $request->payment_mode;
        $worker->description = $request->description;
        $worker->image = $filename;
        $worker->save();
     
        return redirect()->back()
                        ->with('success','worker has been created successfully.');
    }
    public function upload_category(Request $request)
    {
        
        $category = new Categories;
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'description' => 'required',
        ]);
        $file = $request->image;
        $filename = time().'.'.$file->getClientOriginalExtension();
        $request->image->move('assets/images', $filename);
        $category->title = $request->title;
        $category->description = $request->description;
        $category->image = $filename;
        $category->save();
     
        return redirect()->back()
                        ->with('success','category has been created successfully.');
    }
    public function categories()
    {
        $category = Jobs::query()->distinct()->get('job_type');
        return view('admin.content.categories', compact('category'));
    }
    public function blogPost(Request $request)
    {
        
        $blog = new Blogs;
        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
            'content' => 'required',
        ]);
        $file = $request->image;
        $filename = time().'.'.$file->getClientOriginalExtension();
        $request->image->move('assets/images', $filename);
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->category = $request->category;
        $blog->image = $filename;
        $blog->save();
     
        return redirect()->back()
                        ->with('success','blog has been created successfully.');
    }
    public function blogs()
    {
        $blog = Blogs::latest()->paginate(10);
        return view('admin.content.blogs', compact('blog'))->with('i', (request()->input('page', 1) * 5));
    }
    public function create_blog()
    {
        return view('admin.content.create_blog');
    }
}

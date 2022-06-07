<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Contact;
use App\Models\Jobs;
use App\Models\Subscribe;
use App\Models\Workers;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index()
    {
        
        $data['worker'] = Workers::orderBy('id','desc')->paginate(5);
        $job = Jobs::orderBy('id','desc')->paginate(10);
        return view('pages.index', $data, compact('job'))->with('i', (request()->input('page', 1) * 5));
    }
    public function about()
    {
        return view('pages.about');
    }
    public function checkout()
    {
        return view('pages.checkout');
    }
    public function contact()
    {
        return view('pages.contact');
    }
    public function account()
    {
        return view('pages.account');
    }
    public function send_contact(Request $request)
    {
        $contact = new Contact([
            "names" =>$request->names,
            "email" =>$request->email,
            "phone" =>$request->phone,
            "subject" =>$request->subject,
            "message" =>$request->message,
        ]);
        $contact->save();
        return redirect()->back();
    }
    public function task()
    {
        return view('pages.tasks.tasks');
    }
    public function workers($names)
    {
        $worker = Workers::where('names', $names)->first();
        return view('pages.workers', compact('worker'));
    }
    public function subscribe(Request $request)
    {
        $subscribe = new Subscribe([
            "email" => $request->email,
        ]);
        $subscribe->save();
        return redirect()->back();
    }
    public function become_worker()
    {
        return view('pages.become_worker');
    }
    public function become(Request $request)
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
            'category' => 'required',
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
        $worker->category = $request->category;
        $worker->payment_mode = $request->payment_mode;
        $worker->description = $request->description;
        $worker->image = $filename;
        $worker->save();
     
        return redirect()->back()
                        ->with('success','worker has been created successfully.');
    }
}

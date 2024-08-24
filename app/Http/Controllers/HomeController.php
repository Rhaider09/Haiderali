<?php

namespace App\Http\Controllers;

use App\Models\Project_language;
use App\Models\Service;
use App\Models\Project;
use App\Models\Customer;
use App\Models\CV;
use App\Models\Experience;
use App\Models\Skills;
use Illuminate\Http\Request;
use App\Mail\CustomerContactMail;
use App\Models\Project_feature;
use App\Models\Project_image;
use Illuminate\Support\Facades\Mail;
use Twilio\Rest\Client;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::all();
        $projects = Project::all();
        $skills = Skills::all();
        $experience = Experience::all();

        return view('home', compact('services', 'projects', 'skills', 'experience'));
    }
    public function services()
    {
        $services = Service::get();
        return view('services', compact('services'));
    }
    public function portfolio()
    {
        $projects = Project::all();

        return view('portfolio', compact('projects'));
    }
    public function about()
    {
        $services = Service::all();
        $skills = Skills::all();
        return view('about', compact('skills', 'services'));
    }
    public function contact()
    {
        return view('contact');
    }

    public function projectDetail($id)
    {
        $projectDetail = Project::where('id', $id)->first();
        $project_features = Project_feature::where('project_id', $id)->get();
        $project_images = Project_image::where('project_id', $id)->get();
        $project_languages = Project_language::where('project_id', $id)->get();
        return view('portfolio_detail', compact('projectDetail', 'project_features', 'project_images', 'project_languages'));
    }

    public function serviceDetail($id)
    {
        $serviceDetail = Service::where('id', $id)->first();
        return view('service_details', compact('serviceDetail'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'unique:customers', 'regex:/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/'],
            'telephone' => ['required'],
            'description' => ['required', 'max:400'],
        ]);

        $customer = Customer::create([
            'name' => $request->name,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'description' => $request->description,
        ]);

        // Send email
        Mail::to(env('MAIL_TO_EMAIL'))->send(new CustomerContactMail($customer));

        session()->flash('alert_success', 'Your message was delivered successfully');
        return redirect()->back();
    }

    public function downloadcv()
    {
        $cv = CV::first();
        $experience = Experience::all();
        $skills = Skills::all();
        $projects = Project::all();

        return view('mycv', compact('cv', 'experience', 'skills', 'projects'));
    }
}

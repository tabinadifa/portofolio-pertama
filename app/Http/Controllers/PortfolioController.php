<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Home;
use App\Models\Skill;
use App\Models\Project;
use App\Models\Certificate;
use App\Models\Contact;

class PortfolioController extends Controller
{
    public function index() {
    $home = Home::all();
    $about = About::all();
    $skill = Skill::all();
    $project = Project::all();
    $certificate = Certificate::all();
    $contact = Contact::all();

    return view('home', compact('home', 'about', 'skill', 'project', 'certificate', 'contact'));
}
}

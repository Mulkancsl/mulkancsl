<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('pages.dashboard.projects.project');
    }

    public function addProject()
    {
        return view('pages.dashboard.projects.add-project');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lecturer;
use App\Models\Project;
use App\Models\Staff;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function dashboard()
    {
        $pages = 'dash';
        $projects = Project::all();
        return view('admin.dashboard', compact('pages', 'projects'));
    }
}

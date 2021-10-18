<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Job;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::query()->get();
        $jobs = Job::query()
            ->with('location')
            ->with('company')
            ->with('categories')
            ->get();

        return view('home', [
            'categories' => $categories,
            'jobs' => $jobs
        ]);
    }
}

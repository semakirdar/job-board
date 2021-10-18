<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Company;
use App\Models\Job;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $companies = Company::query()
            ->with('location')
            ->get();
        $categories = Category::query()->get();
        $jobs = Job::query()
            ->with('location')
            ->with('company')
            ->with('categories')
            ->get();

        return view('home', [
            'categories' => $categories,
            'jobs' => $jobs,
            'companies' => $companies
        ]);
    }
}

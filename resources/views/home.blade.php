@extends('layout')
@section('content')

    <div class="hero d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center mb-4">
                    <h2>The Easiest Way to Get Your New Job</h2>
                </div>
                <div class="col-sm-12">
                    <form class="d-flex">
                        <div class="input-group mb-3">
                            <input type="search" class="form-control p-4" placeholder="Search" aria-label="Search"
                                   aria-describedby="button-addon2">
                            <button class="btn btn-warning p-3" type="submit" id="button-addon2">Button</button>
                        </div>
                    </form>
                </div>
                <div class="col-sm-12 text-center">
                    <p>Popular Searches : Designer Developer Web IOS PHP Senior Engineer</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="most-popular-jobs text-dark">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>Most Popular Jobs</h3>
                </div>
                <div class="col-lg-12 text-center py-4">
                    <p>Know your worth and find the job that qualify your life</p>
                </div>
                <div class="col-lg-12 text-center mb-4">
                    @foreach($categories as $category)
                        <button class="btn btn-outline-primary me-3">{{ $category->name }}</button>
                    @endforeach
                </div>
            </div>
            <div class="row mb-4">
                @foreach($jobs as $job)
                    <div class="col-sm-12 col-md-12 col-lg-6 mb-4">
                        <div class="popular-job-item">
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img class="img-fluid me-4" src="{{ asset('images/popular-job.jpeg') }}">
                                </div>
                                <div>
                                    <strong>{{ $job->title }}</strong> / <span class="text-success">Featured</span>
                                    <div class="text-muted mt-2">
                                        @foreach($job->categories as $item)
                                            <span class="me-2"><i
                                                    class="fas fa-briefcase me-1"></i>{{ $item->name }}</span>
                                        @endforeach
                                        <span class="me-2"><i class="fas fa-map-marker-alt me-1"></i>{{ $job->location->name }}</span>
                                        <span><i class="fas fa-money-check-alt me-1"></i> $250 - $280 / week</span>
                                    </div>
                                    <button class="btn text-primary btn-sm mt-3">{{ $job->type }}</button>
                                </div>
                            </div>
                            <div>
                                <i class="fas fa-bookmark"></i>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="container text-dark">
        <div class="features">
            <div class="text-center mb-5">
                <h3>How It Works?</h3>
                <p class="text-muted mt-3">Job for anyone, anywhere</p>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="feature-item text-center">
                        <img class="img-fluid mb-3" src="{{ asset('images/feature-1.jpeg') }}">
                        <p>Register an account <br> to start</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="feature-item text-center">
                        <img class="img-fluid mb-3" src="{{ asset('images/feature-2.jpeg') }}">
                        <p>Register an account <br> to start</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="feature-item text-center">
                        <img class="img-fluid mb-3" src="{{ asset('images/feature-3.jpeg') }}">
                        <p>Register an account <br> to start</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="top-companies text-dark mt-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h3>Top Company Registered</h3>
                <span>
                    <a href="#">Browse All Companys  <i class="fas fa-chevron-right"></i> </a>
                </span>
            </div>
            <p class="text-muted mb-5 mt-2">Some of the companies we’ve helped recruit excellent applicants over the
                years.</p>
            <div class="row">
                @foreach($companies as $company)
                    <div class="col-sm-12 col-md-12 col-lg-3">
                        <div class="card p-5 text-center">
                            <div class="text-center top-company-image mb-2">
                                <img src="{{ asset('images/popular-job.jpeg') }}">
                            </div>
                            <strong>{{ $company->name }} </strong>
                            <span class="me-2 text-muted mt-2"><i class="fas fa-map-marker-alt me-1"></i>{{ $company->location->name }}</span>
                            <button class="btn btn-sm mt-2">Open Job</button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="container">
        <div class="popular-categories text-dark">
            <div class="mb-5">
                <h3 class="text-center">Popular Job Categories</h3>
                <p class="text-muted text-center">2020 jobs live – 293 added today.</p>
            </div>


            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="popular-category-item d-flex justify-content-start align-items-center p-3">
                        <div class="popular-category-icon me-3">
                            <i class="fas fa-file-code"></i>
                        </div>
                        <div>
                            <h5>category name</h5>
                            <p class="text-muted m-0">(1 open position)</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="popular-category-item d-flex justify-content-start align-items-center p-3">
                        <div class="popular-category-icon me-3">
                            <i class="fas fa-file-code"></i>
                        </div>
                        <div>
                            <h5>category name</h5>
                            <p class="text-muted m-0">(1 open position)</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="popular-category-item d-flex justify-content-start align-items-center p-3">
                        <div class="popular-category-icon me-3">
                            <i class="fas fa-file-code"></i>
                        </div>
                        <div>
                            <h5>category name</h5>
                            <p class="text-muted m-0">(1 open position)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection

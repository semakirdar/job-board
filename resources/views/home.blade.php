@extends('layout')
@section('content')

    <div>
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
    </div>

    <div class="container">
        <div class="most-popular-job text-dark">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>Most Popular Jobs</h3>
                </div>
                <div class="col-lg-12 text-center py-4">
                    <p>Know your worth and find the job that qualify your life</p>
                </div>
                <div class="col-lg-12 text-center mb-4">
                    <button class="btn btn-outline-primary me-3">All</button>
                    <button class="btn btn-outline-primary me-3">Design</button>
                    <button class="btn btn-outline-primary me-3">Marketing</button>
                    <button class="btn btn-outline-primary me-3">Health</button>
                    <button class="btn btn-outline-primary ">Development</button>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="popular-job-item">
                        <div class="d-flex justify-content-center">
                            <div>
                                <img class="img-fluid me-4" src="{{ asset('images/popular-job.jpeg') }}">
                            </div>
                            <div>
                                <strong>Assistant / Store Keeper</strong> <span class="text-success">Featured</span>

                                <div class="text-muted mt-2">
                                    <span class="me-2"><i class="fas fa-briefcase me-1"></i> Automotive Jobs</span>
                                    <span class="me-2"><i class="fas fa-map-marker-alt me-1"></i> Location</span>
                                    <span><i class="fas fa-money-check-alt me-1"></i> $250 - $280 / week</span>
                                </div>
                                <button class="btn btn-info text-white btn-sm mt-3">PartTime</button>
                            </div>
                        </div>
                        <div>
                            <i class="fas fa-bookmark"></i>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="popular-job-item">
                        <div class="d-flex justify-content-center">
                            <div>
                                <img class="img-fluid me-4" src="{{ asset('images/popular-job.jpeg') }}">
                            </div>
                            <div>
                                <strong>Assistant / Store Keeper</strong> <span class="text-success">Featured</span>

                                <div class="text-muted mt-2">
                                    <span class="me-2"><i class="fas fa-briefcase me-1"></i> Automotive Jobs</span>
                                    <span class="me-2"><i class="fas fa-map-marker-alt me-1"></i> Location</span>
                                    <span><i class="fas fa-money-check-alt me-1"></i> $250 - $280 / week</span>
                                </div>
                                <button class="btn btn-info text-white btn-sm mt-3">PartTime</button>
                            </div>
                        </div>
                        <div>
                            <i class="fas fa-bookmark"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="popular-job-item">
                        <div class="d-flex justify-content-center">
                            <div>
                                <img class="img-fluid me-4" src="{{ asset('images/popular-job.jpeg') }}">
                            </div>
                            <div>
                                <strong>Assistant / Store Keeper</strong> <span class="text-success">Featured</span>

                                <div class="text-muted mt-2">
                                    <span class="me-2"><i class="fas fa-briefcase me-1"></i> Automotive Jobs</span>
                                    <span class="me-2"><i class="fas fa-map-marker-alt me-1"></i> Location</span>
                                    <span><i class="fas fa-money-check-alt me-1"></i> $250 - $280 / week</span>
                                </div>
                                <button class="btn btn-info text-white btn-sm mt-3">PartTime</button>
                            </div>
                        </div>
                        <div>
                            <i class="fas fa-bookmark"></i>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="popular-job-item">
                        <div class="d-flex justify-content-center">
                            <div>
                                <img class="img-fluid me-4" src="{{ asset('images/popular-job.jpeg') }}">
                            </div>
                            <div>
                                <strong>Assistant / Store Keeper</strong> <span class="text-success">Featured</span>

                                <div class="text-muted mt-2">
                                    <span class="me-2"><i class="fas fa-briefcase me-1"></i> Automotive Jobs</span>
                                    <span class="me-2"><i class="fas fa-map-marker-alt me-1"></i> Location</span>
                                    <span><i class="fas fa-money-check-alt me-1"></i> $250 - $280 / week</span>
                                </div>
                                <button class="btn btn-info text-white btn-sm mt-3">PartTime</button>
                            </div>
                        </div>
                        <div>
                            <i class="fas fa-bookmark"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection

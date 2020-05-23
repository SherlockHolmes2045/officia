@extends('includes.header')

@section('styles')
    @include('styles.post-job')
@endsection

@section('content')

    <!-- Breadcrumb -->
    <div class="alice-bg padding-top-70 padding-bottom-70">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="breadcrumb-area">
                        <h1>Post A Job</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Post A Job</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

<div class="alice-bg section-padding-bottom">
    <div class="container no-gliters">
        <div class="row no-gliters">
            <div class="col">
                <div class="post-container">
                    <div class="post-content-wrapper">
                        <form action="{{route('job.savejob')}}" class="job-post-form" method="POST" enctype="multipart/form-data" id="post-job">
                            @csrf
                            <div class="basic-info-input">
                                <h4><i data-feather="plus-circle"></i>Post A Job</h4>

                                        <!-----------STEP 1----------------->
                                            <!---JOB Title--->
                                            <div id="job-title" class="form-group row">
                                                <label class="col-md-3 col-form-label">Job Title</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Your job title here *" name="title" id="title" value="{{ old('title') }}" required>
                                                    @error('title')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div id="job-summery" class="row">
                                                <label class="col-md-3 col-form-label">Job Summary</label>
                                                <div class="col-md-9">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control @error('location') is-invalid @enderror" placeholder="Job Location" value="{{old('location')}}" name="location" id="location">
                                                                @error('location')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <select class="form-control @error('type') is-invalid @enderror" name="type" id="type" required>
                                                                    <option value="">Job Type *</option>
                                                                    <option value="Part Time">Part Time</option>
                                                                    <option value="Full Time">Full Time</option>
                                                                    <option value="Freelance">Freelance</option>
                                                                </select>
                                                                <i class="fa fa-caret-down"></i>
                                                                @error('type')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <select class="form-control @error('experience') is-invalid @enderror" name="experience"  id="experience" required>
                                                                    <option value="">Experience *</option>
                                                                    <option value="any">Any</option>
                                                                    <option value="Less than 1 year">Less than 1 Year</option>
                                                                    <option value="2 year">2 Year</option>
                                                                    <option value="3 year">3 Year</option>
                                                                    <option value="4 year">4 Year</option>
                                                                    <option value="Over 5 year">Over 5 Year</option>
                                                                </select>
                                                                <i class="fa fa-caret-down"></i>
                                                                @error('experience')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="number" class="form-control @error('salary') is-invalid @enderror" placeholder="Average Salary in CFA" value="{{old("salary")}}" name="salary" id="salary">
                                                                @error('salary')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <select class="form-control @error('gender') is-invalid @enderror" name="gender" id="gender" required>
                                                                    <option value="">Gender *</option>
                                                                    <option value="Any">Any</option>
                                                                    <option value="Male">Male</option>
                                                                    <option value="Female">Female</option>
                                                                </select>
                                                                <i class="fa fa-caret-down"></i>
                                                                @error('gender')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control @error('link') is-invalid @enderror" placeholder="Application Link" value="{{old('link')}}" name="link" id="link">
                                                                @error('link')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 col-form-label">Application Deadline</label>
                                                <div class="col-md-9">
                                                    <input type="date" class="form-control @error('deadline') is-invalid @enderror" placeholder="Application Deadline*" id="deadline" value="{{old('deadline')}}" name="deadline">
                                                    @error('deadline')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3 col-form-label">Job Duration</label>
                                                <div class="col-md-9">
                                                    <input type="number" class="form-control @error('duration') is-invalid @enderror" placeholder="Job Duration in month" value="{{old('duration')}}" id="duration" name="duration">
                                                    @error('duration')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 col-form-label">Extra document(pdf,doc,docx)</label>
                                                <div class="col-md-9">
                                                    <input type="file" class="form-control  @error('extra') is-invalid @enderror" placeholder="Extra document" name="extra">
                                                    @error('extra')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        <!----------STEP 2 -------->
                                            <div id="job-description" class="row">
                                                <label class="col-md-3 col-form-label">Job Description</label>
                                                <div class="col-md-9" >
                                                    <textarea id="mytextarea" class="" placeholder="Description text here" name="description"></textarea>
                                                    @error('description')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        <!-------------STEP 3--------------->
                                            <div class="form-group row">
                                                <label class="col-md-3 col-form-label">Job Category</label>
                                                <div class="col-md-8 ">
                                                    <input type="text" id="mycategories" class="form-control @error('categories') is-invalid @enderror"  name="categories">
                                                    @error('categories')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                        <!-------------STEP 4 --------------->

                                            <div  class="form-group row">
                                                <label class="col-md-3 col-form-label">Job skills</label>
                                                <div class="col-md-8">
                                                    <input type="text" id="myskills" class="form-control @error('skills') is-invalid @enderror" name="skills">
                                                    @error('skills')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                        <!--------STEP 5----------->
                                <br>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label"></label>
                                    <div class="col-md-9 justify-content-end">
                                        <button class="button" type="submit" id="submit-button">Post Your Job</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="post-sidebar">
                        <h5><i data-feather="arrow-down-circle"></i>Navigation</h5>
                        <ul class="sidebar-menu">
                            <li><a href="#job-title">Job Title</a></li>
                            <li><a href="#job-summery">Job Summary</a></li>
                            <li><a href="#job-description">Job Descruption</a></li>
                            <li><a href="#response">Responsibilities</a></li>
                            <li><a href="#education">Education</a></li>
                            <li><a href="#others">Your Location</a></li>
                            <li><a href="#post-location">About Company</a></li>
                            <li><a href="#package">Select Package</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
     @include('scripts.post-job.smartwizard')
    @endsection

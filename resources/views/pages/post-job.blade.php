@extends('includes.header')

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
                                <div id="smartwizard">
                                    <ul>
                                        <li><a href="#step-1">Job Summary<br /><small>Information summary</small></a></li>
                                        <li><a href="#step-2">Job description<br /><small>Job description</small></a></li>
                                        <li><a href="#step-3">Job categories<br /><small>Categories in which your job falls</small></a></li>
                                        <li><a href="#step-4">Job skills<br /><small>Job skills</small></a></li>
                                        <li><a href="#step-5">Job duration<br /><small>Duration and deadline details</small></a></li>
                                    </ul>
                                    <div>
                                        <!-----------STEP 1----------------->
                                        <div id="step-1" class="">
                                            <!---JOB Title--->
                                            <div id="job-title" class="form-group row">
                                                <label class="col-md-3 col-form-label">Job Title</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" placeholder="Your job title here *" name="title" id="title" required>
                                                </div>
                                            </div>

                                            <div id="job-summery" class="row">
                                                <label class="col-md-3 col-form-label">Job Summary</label>
                                                <div class="col-md-9">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" placeholder="Job Location" name="location" id="location">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <select class="form-control" name="type" id="type" required>
                                                                    <option value="">Job Type *</option>
                                                                    <option value="Part Time">Part Time</option>
                                                                    <option value="Full Time">Full Time</option>
                                                                    <option value="Freelance">Freelance</option>
                                                                </select>
                                                                <i class="fa fa-caret-down"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <select class="form-control" name="experience" id="experience" required>
                                                                    <option value="">Experience *</option>
                                                                    <option value="any">Any</option>
                                                                    <option value="Less than 1 year">Less than 1 Year</option>
                                                                    <option value="2 year">2 Year</option>
                                                                    <option value="3 year">3 Year</option>
                                                                    <option value="4 year">4 Year</option>
                                                                    <option value="Over 5 year">Over 5 Year</option>
                                                                </select>
                                                                <i class="fa fa-caret-down"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="number" class="form-control" placeholder="Average Salary in CFA" name="salary" id="salary">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <select class="form-control" name="gender" id="gender" required>
                                                                    <option value="">Gender *</option>
                                                                    <option value="Any">Any</option>
                                                                    <option value="Male">Male</option>
                                                                    <option value="Female">Female</option>
                                                                </select>
                                                                <i class="fa fa-caret-down"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" placeholder="Application Link" name="link" id="link">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 col-form-label">Application Deadline</label>
                                                <div class="col-md-9">
                                                    <input type="date" class="form-control" placeholder="Application Deadline*" id="deadline" name="deadline">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3 col-form-label">Job Duration</label>
                                                <div class="col-md-9">
                                                    <input type="number" class="form-control" placeholder="Job Duration in month" id="duration" name="duration">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 col-form-label">Extra document(pdf,doc,docx)</label>
                                                <div class="col-md-9">
                                                    <input type="file" class="form-control" placeholder="Extra document" name="extra">
                                                </div>
                                            </div>
                                        </div>
                                        <!----------STEP 2 -------->
                                        <div id="step-2" class="">
                                            <div id="job-description" class="row">
                                                <label class="col-md-3 col-form-label">Job Description</label>
                                                <div class="col-md-9" >
                                                    <textarea id="mytextarea" class="" placeholder="Description text here" name="description" required></textarea>
                                                </div>
                                            </div>
                                            <p style="color: red;display: none" id="description">This field cannot be empty</p>
                                        </div>

                                        <!-------------STEP 3--------------->
                                        <div id="step-3" class="">
                                            <div class="form-group row">
                                                <label class="col-md-3 col-form-label">Job Category</label>
                                                <div class="col-md-9 input-group">
                                                    <select  class="form-control" id="categories">
                                                        <option value="">search for categories</option>
                                                        @foreach($categories as $category)
                                                            <option value="{{$category->name}}">{{$category->name}}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="input-group-append">
                                                        <a href="#" id="addcategory" class="add-more" style="
                                                    text-align: left;
                                                    line-height: 1.85;
                                                    -webkit-box-direction: reverse;
                                                    pointer-events: auto;
                                                    box-sizing: border-box;
                                                    text-decoration: none;
                                                    transition: all .3s ease;
                                                    display: inline-block;
                                                    outline: none;
                                                    font-size: 1.3rem;
                                                    font-weight: 500;
                                                    padding: 3px 15px;
                                                    margin-right: 0;
                                                    border: 0;
                                                    border-radius: 3px;
                                                    background: rgba(36, 109, 248, 0.15);
                                                    color: #246df8;">+ Add Category</a>
                                                    </div>
                                                </div>
                                                <br>
                                                <label class="col-md-2 col-form-label" style="color: white">Job Title</label>
                                                <div class="col-md-9" >
                                                    <input type="text" id="mycategories" class="form-control" data-role="tagsinput" name="categories" readonly required>
                                                </div>
                                                <p style="display: none;color: red" id="categories-error">this field cannot be empty</p>
                                            </div>
                                        </div>
                                        <!-------------STEP 4 --------------->
                                        <div id="step-4" class="">
                                            <div  class="form-group row">
                                                <label class="col-md-3 col-form-label">Job skills</label>
                                                <div class="col-md-9 input-group">
                                                    <select  class="form-control" id="tags">
                                                        <option value="">search for a skill</option>
                                                        @foreach($tags as $tag)
                                                            <option value="{{$tag->nom}}">{{$tag->nom}}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="input-group-append ">
                                                        <a href="#" id="addtag" class="add-more" style="
                                                    text-align: left;
                                                    line-height: 1.85;
                                                    -webkit-box-direction: reverse;
                                                    pointer-events: auto;
                                                    box-sizing: border-box;
                                                    text-decoration: none;
                                                    transition: all .3s ease;
                                                    display: inline-block;
                                                    outline: none;
                                                    font-size: 1.3rem;
                                                    font-weight: 500;
                                                    padding: 3px 15px;
                                                    margin-right: 0;
                                                    border: 0;
                                                    border-radius: 3px;
                                                    background: rgba(36, 109, 248, 0.15);
                                                    color: #246df8;">+ Add Skills</a>
                                                    </div>
                                                </div>
                                                <br>
                                                <label class="col-md-2 col-form-label" style="color: white">Job Title</label>
                                                <div class="col-md-9" >
                                                    <input type="text" id="myskills" class="form-control" data-role="tagsinput" name="skills" readonly required>
                                                </div>
                                                <p style="display: none;color: red" id="skills-error">this field cannot be empty</p>
                                            </div>
                                        </div>
                                        <!--------STEP 5----------->
                                        <div id="step-5" class="">
                                            <!--<div class="form-group row">
                                                <label class="col-md-3 col-form-label">Application Deadline</label>
                                                <div class="col-md-9">
                                                    <input type="date" class="form-control" placeholder="Application Deadline*" name="deadline" required>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3 col-form-label">Job Duration</label>
                                                <div class="col-md-9">
                                                    <input type="number" class="form-control" placeholder="Job Duration in month*" name="duration" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 col-form-label">Extra document(pdf,doc,docx)</label>
                                                <div class="col-md-9">
                                                    <input type="file" class="form-control" placeholder="Extra document" name="extra">
                                                </div>
                                            </div>-->
                                        </div>
                                    </div>
                                </div>
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
                    <!--<div class="post-sidebar">
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
                    </div>-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
     @include('scripts.post-job.smartwizard')
    @endsection

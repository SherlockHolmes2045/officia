<!-- Banner -->
@if(Route::currentRouteName() == "welcome")
<div class="banner banner-2 banner-2-bg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="banner-content">
                    <h1>Find the right job</h1>
                    <p>Create free account to find thousands Jobs, Employment & Career Opportunities around you!</p>
                    <div class="short-infos">
                        <div class="info">
                            <h4>5,862</h4>
                            <span>Jobs Posted</span>
                        </div>
                        <div class="info">
                            <h4>240</h4>
                            <span>Companies</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner End -->

<!-- Search and Filter -->
<div class="searchAndFilter-wrapper-2" id="searchbox">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="searchAndFilter-block">
                    <div class="searchAndFilter searchAndFilter-2">
                        <form action="#" class="search-form">
                            <input type="text" placeholder="Enter Keywords">
                            <select class="selectpicker" id="search-location">
                                <option value="" selected>Location</option>
                                <option value="california">California</option>
                                <option value="las-vegas">Las Vegas</option>
                                <option value="new-work">New Work</option>
                                <option value="carolina">Carolina</option>
                                <option value="chicago">Chicago</option>
                                <option value="silicon-vally">Silicon Vally</option>
                                <option value="washington">Washington DC</option>
                                <option value="neveda">Neveda</option>
                            </select>
                            <select class="selectpicker" id="search-category">
                                <option value="" selected>Category</option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                            <button class="button"><i class="fas fa-search"></i>Search Job</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
<!-- Search and Filter End -->

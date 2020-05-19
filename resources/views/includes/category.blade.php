<!-- Category -->
@if(Route::currentRouteName() == "welcome")
<div class="padding-bottom-60">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="categories">
                    @foreach($categories as $category)
                        <div class="category">
                            <div class="icon">
                                <i class="{{$category->icon}}" style="color: #246df8"></i>
                            </div>
                            <h5><a href="#">{{$category->name}}<span>(92)</span></a></h5>
                        </div>
                    @endforeach
                    <span class="vr vr-1"></span>
                    <span class="vr vr-2"></span>
                    <span class="vr vr-3"></span>
                    <span class="vr vr-4"></span>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
<!-- Category End -->

<script src="{{asset('js/jquery-ui.min.js')}}"></script>
<script src="{{asset("js/autocomplete-0.3.0.min.js")}}"></script>
<script src="{{asset("js/jquery.tagsinput-revisited.min.js")}}"></script>
<script>
    var simplemde = new SimpleMDE({
        element: $("#mytextarea")[0],
        forceSync: true
    });
    let skills = [
            @foreach ($tags as $tag)
        "{{ $tag->nom }}",
        @endforeach
    ];

    let categories = [
        @foreach($categories as $category)
        "{{$category->name}}",
        @endforeach
    ];

    $('#description').attr('required', false);
    /*$('.CodeMirror textarea').attr('required', true);*/

    $("#submit-button").click(function (e) {
        e.preventDefault();
        //console.log(simplemde.markdown(simplemde.value()));
        $("#mytextareay").val(simplemde.markdown(simplemde.value()));
        $("#post-job").submit();
    });

    $("#myskills").tagsInput({
        'autocomplete': {
            source: skills
        },
        placeholder:'Start typing to trigger the list of skills',
        whitelist:skills
    });
    $("#mycategories").tagsInput({
        placeholder: "Start typing to trigger the list categories",
        autocomplete: {
            source:categories
        },
        whitelist: categories
    });

    $("#type").on('change',function (e) {
        if(this.value === "Full Time"){
            $("#duration").attr("disabled","disabled");
        }else{
            $("#duration").removeAttr("disabled");
        }
    });
    @if(old("description"))
        var description = "{!! old('description') !!}";
        console.log(description);
    simplemde.value("{!! old('description') !!}");
        @endif
    @if(old("categories"))
        var sites = "{{old("categories")}}";
        sites = sites.split(",");
        for(let i =0;i<sites.length;i++){
            $("#mycategories").addTag(sites[i]);
        }
        @endif
        @if(old("skills"))
    var site = "{{old("skills")}}";
    site = site.split(",");
    for(let i =0;i<site.length;i++){
        $("#myskills").addTag(site[i]);
    }
    @endif
</script>

<script>

    //$('#smartwizard').smartWizard();

    var simplemde = new SimpleMDE({ element: $("#mytextarea")[0] });

    /*$("#smartwizard").on("leaveStep", function(e, anchorObject, stepNumber, stepDirection) {
        let testimony = true;
        switch(stepNumber){
            case 0 :
            testimony = !(!$("#title")[0].checkValidity() || !$('#type')[0].checkValidity() || !$('#experience')[0].checkValidity() || !$('#experience')[0].checkValidity());
            break;
            case 1:
                $("#mytextarea").val(simplemde.options.previewRender(simplemde.value()));
                testimony = $("#mytextarea")[0].checkValidity();
                if(!$('#mytextarea')[0].checkValidity()){
                    $('#description').show();
                }else{
                    $('#description').hide();
                }
                break;
            case 2:
                if($('#mycategories').val() == ""){
                    testimony = false;
                    $('#categories-error').show();
                }else{
                    $('#categories-error').hide();
                }
                break;
            case 3:
                console.log($('#myskills').val());
               if($('#myskills').val()==""){
                   testimony = false;
                   $("#skills-error").show();
               }else{
                   $("#skills-error").hide();
               }
                break;
            case 4:
                break;
            default:
                break;
        }
        if(!testimony){
            testimony = true;
            $("#submit-button").click();
            return  false;
        }else{
            testimony = true;
            return true;
        }
    });*/

    $("#addtag").click(function (e) {
        e.preventDefault();
        if($("#tags").val() !==""){
            var item = $("#tags").val();
            $('#myskills').tagsinput('add',item);
        }

    });
    $("#addcategory").click(function (e) {
        e.preventDefault();
        if($("#categories").val() !==""){
            var item = $("#categories").val();
            $('#mycategories').tagsinput('add',item);
        }
    });

    $("#type").on('change',function (e) {
        if(this.value === "Full Time"){
            $("#duration").attr("disabled","disabled");
        }else{
            $("#duration").removeAttr("disabled");
        }
    });
</script>

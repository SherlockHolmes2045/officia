<script>
    $("#save-job").click(function (e) {

        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "/job/{{$job->id}}/fav",
            method: 'POST',
            dataType: 'json',
            success: function (data) {
               if(data.message === "The job was successfully saved."){
                   $("#save-job").css('color','#ff8fa6');
                   $("#save-job").css('border-color',' #ff8fa6');
                   $("#save-job").html('<i data-feather="heart"></i> Unsave Job');
                   /*$('body').append("<div class=\"notify-alert notify-success animated bounceOutRight\" role=\"alert\" style=\"\">\n" +
                       "            <div class=\"notify-alert-icon\"><i class=\"flaticon2-check-mark\"></i></div>\n" +
                       "            <div class=\"notify-alert-text\">\n" +
                       "                <h4>success</h4>\n" +
                       "                <p>"+data.message+"</p>\n" +
                       "            </div>\n" +
                       "            <div class=\"notify-alert-close\">\n" +
                       "                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">\n" +
                       "                    <span aria-hidden=\"true\"><i class=\"flaticon2-cross\"></i></span>\n" +
                       "                </button>\n" +
                       "            </div>\n" +
                       "        </div>");*/
               }else{
                   $("#save-job").css('color','#6f7484');
                   $("#save-job").css('border','1px solid rgba(0, 0, 0, 0.05)');
                   $("#save-job").html('<i data-feather="heart"></i> Save Job');
                   /*$('body').append("<div class=\"notify-alert notify-success animated bounceOutRight\" role=\"alert\" style=\"\">\n" +
                       "            <div class=\"notify-alert-icon\"><i class=\"flaticon2-check-mark\"></i></div>\n" +
                       "            <div class=\"notify-alert-text\">\n" +
                       "                <h4>success</h4>\n" +
                       "                <p>"+data.message+"</p>\n" +
                       "            </div>\n" +
                       "            <div class=\"notify-alert-close\">\n" +
                       "                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">\n" +
                       "                    <span aria-hidden=\"true\"><i class=\"flaticon2-cross\"></i></span>\n" +
                       "                </button>\n" +
                       "            </div>\n" +
                       "        </div>");*/
               }
            },

            error: function(xhr, textStatus, errorThrown){
               alert(errorThrown);
            }
        });
    });
</script>

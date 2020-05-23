<script>

    $('.favourite').click(function (e) {

        e.preventDefault();
        let hrefValue = $(this).attr('href');
        hrefValue = hrefValue.split('/')[4];

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: `/job/${hrefValue}/fav`,
            method: 'POST',
            dataType: 'json',
            success: function (data) {
                /*if(data.message === "The job was successfully saved."){
                    $("#save-job").css('color','#ff8fa6');
                    $("#save-job").css('border-color',' #ff8fa6');
                    $("#save-job").html('<i data-feather="heart"></i> Unsave Job');

                }else{
                    $("#save-job").css('color','#6f7484');
                    $("#save-job").css('border','1px solid rgba(0, 0, 0, 0.05)');
                    $("#save-job").html('<i data-feather="heart"></i> Save Job');
                }*/
                alert(data.message);
            },

            error: function(xhr, textStatus, errorThrown){
                alert(errorThrown);
            }
        });
    });
</script>

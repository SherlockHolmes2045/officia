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
                console.log(data);
               alert(data.message)
            },

            error: function(xhr, textStatus, errorThrown){

               console.log(errorThrown);
               alert(errorThrown);
            }
        });
    });
</script>

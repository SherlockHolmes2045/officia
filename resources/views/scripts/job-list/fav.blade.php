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
                alert(data.message);
            },

            error: function(xhr, textStatus, errorThrown){
                alert(errorThrown);
            }
        });
    });
</script>

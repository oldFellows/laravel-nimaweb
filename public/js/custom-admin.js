jQuery(document).ready(function ($) {
    $('select.select2').select2();


    function readURL(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#preview').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#customFile").change(function() {
        readURL(this);
    });
});
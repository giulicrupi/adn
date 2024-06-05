jQuery(document).ready(function($) {
    $('#select-topico').change(function() {
        var selectedValue = $(this).val();

        if (selectedValue) {
            $.ajax({
                type: 'POST',
                url: ajax_params.ajax_url,
                data: {
                    action: 'load_contact_form',
                    topic: selectedValue
                },
                success: function(response) {
                    $('#form-container').html(response);
                }
            });
        } else {
            $('#form-container').html('');
        }
    });
});

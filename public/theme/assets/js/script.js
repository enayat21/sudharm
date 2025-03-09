$(document).ready(function() {
    // Set default jQuery Validation settings globally
    $.validator.setDefaults({
        errorElement: 'span',
        errorPlacement: function(error, element) {
            // Check if the parent of the input has the .input-group class
            if (element.closest('.input-group').length) {
                error.insertAfter(element.closest('.input-group'));
            } else {
                error.insertAfter(element);
            }
        }
    });
});
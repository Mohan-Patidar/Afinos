$(document).ready(function () {

    "use strict";

    $('.summernote').summernote({
        placeholder: 'Package Description',
        tabsize: 1,
        height: 170,
        toolbar: [
            ['font', ['bold', 'underline', 'clear']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'codeview', 'help']]
        ]
    });

    $('.date-picker').datepicker({
        orientation: "top auto",
        autoclose: true
    });

    $('#cp1').colorpicker({
        format: 'hex'
    });
    $('#cp2').colorpicker();

    $('#timepicker1').timepicker();
});

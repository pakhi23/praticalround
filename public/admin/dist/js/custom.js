
$(function () {

    bsCustomFileInput.init();
    $('.my-colorpicker1').colorpicker()
});



var i = 0;
$("#feature-btn").on('click', function () {
    ++i;
    $("#feature-section").append('' +
        '<div class="feature-area">' +
        '<span class="remove feature-remove"><i class="fas fa-times"></i></span>' +
        '<div  class="row">' +
        '<div class="col-lg-4">' +
        '<input type="text" name="addMoreInputFields[' + i +
        '][color]" class="form-control my-colorpicker1 colorpicker-element" placeholder="choose color " data-colorpicker-id="1" data-original-title="" title="">' +
        '</div>' +
        '<div class="col-lg-4">' +
        '<input type="text" name="addMoreInputFields[' + i +
        '][size]" value="" class="form-control " placeholder="Add size (eg. S,M,L,XL,XXL,3XL,4XL)"/>' +
        '</div>' +

        '</div>' +
        '</div>' +
        '');
});

$(document).on('click', '.feature-remove', function () {

    $(this.parentNode).remove();
    if (isEmpty($('#feature-section'))) {

        $("#feature-section").append('' +
            '<div class="feature-area">' +
            '<span class="remove feature-remove"><i class="fas fa-times"></i></span>' +
            '<div  class="row">' +
            '<div class="col-lg-4">' +
            '<input type="text" name="addMoreInputFields[' + i +
            '][color]" class="form-control my-colorpicker1 colorpicker-element" placeholder="Choose color" data-colorpicker-id="1" data-original-title="" title="">' +
            '</div>' +
            '<div class="col-lg-4">' +
            '<input type="text" name="addMoreInputFields[' + i +
            '][size]" value="" class="form-control " placeholder="Add size (eg. S,M,L,XL,XXL,3XL,4XL)" />' +
            '</div>' +

            '</div>' +
            '</div>' +
            '');
    }

});

$(function () {

    $('#selectOption').on('change', function () {

        $.get( "optionChange", { id: $(this).val()}, function( data ){
            $('#descriptionOption').text(data.description);
        });

    });
});

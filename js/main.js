// List all templates
$.get( "list/", function( file_list ) {
    for (name in file_list) {
        name = file_list[name];
        $('#template-list').append('<button type="button" class="list-group-item" data-toggle="modal" data-target="#edit" data-name="' + name + '">' + name + '</button>');
    }
});


$('#edit').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget); // Button that triggered the modal
    var name = button.data('name'); // Extract info from data-* attributes

    $.get( "edit.php?name=" + name, function( screen_list ) {
        output = screen_list;
        $('#layout').append(output);
    });

    var modal = $(this);
    modal.find('.modal-title').text('Edit ' + name);
});

$('#edit').on('hidden.bs.modal', function () {
    $('#layout').empty();
});


$('#new').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget); // Button that triggered the modal
    var name = button.data('name'); // Extract info from data-* attributes

    $.get( "new.php", function( screen_list ) {
        output = screen_list;
        $('#new-layout').append(output);
    });
});

$('#new').on('hidden.bs.modal', function () {
    $('#new-layout').empty();
});

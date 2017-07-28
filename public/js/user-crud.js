var page = 1;
var current_page = 1;
var total_page = 0;
var is_ajax_fire = 0;

manageData();

/* manage data list */
function manageData() {
    $.ajax({
        dataType: 'json',
        url: url,
        data: {page:page}
    }).done(function(data){

        total_page = data.last_page;
        current_page = data.current_page;

        $('#pagination').twbsPagination({
            totalPages: total_page,
            visiblePages: current_page,
            onPageClick: function (event, pageL) {
                page = pageL;
                if(is_ajax_fire != 0){
                  getPageData();
                }
            }
        });

        manageRow(data.data);
        is_ajax_fire = 1;
    });
}

$.ajaxSetup({
    headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
});

/* Get Page Data*/
function getPageData() {
    $.ajax({
        dataType: 'json',
        url: url,
        data: {page:page}
    }).done(function(data){
        manageRow(data.data);
    });
}

/* Add new Item table row */
function manageRow(data) {
    var rows = '';
    $.each(data, function(key, value) {
        rows = rows + '<tr>';
        rows = rows + '<td>'+value.name+'</td>';
        rows = rows + '<td>'+value.email+'</td>';
        rows = rows + '<td>'+value.phone+'</td>';
        rows = rows + '<td>'+value.status+'</td>';
        rows = rows + '<td>'+value.created_at+'</td>';
        rows = rows + '<td data-id="'+value.id+'">';
        rows = rows + '<button data-toggle="modal" data-target="#edit-item" class="btn btn-primary edit-item">Edit</button>';
        rows = rows + ' <button class="btn btn-danger remove-item">Delete</button>';
        rows = rows + '</td>';
        rows = rows + '</tr>';
    });

    $("tbody").html(rows);
}
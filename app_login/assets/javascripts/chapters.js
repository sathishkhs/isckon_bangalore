function getslug(val){
    $.getJSON('ajax/getslug/chapters_model/page_slug/' + val, function(data) {
        $("#" + data.field_id).val(data.field_val);
    });
}
$(document).ready(function() {



    $('#chapters_table').DataTable({
        "ajax": {
            url: "chapters/chapters_list",
        },

        "columnDefs": [
            { 
                "targets": [ 0 ], //first column / numbering column
                "orderable": false, //set not orderable
            },
            ],
    });
})
function getslug(val){
    $.getJSON('ajax/getslug/customers_model/page_slug/' + val, function(data) {
        $("#" + data.field_id).val(data.field_val);
    });
}
$(document).ready(function() {



    $('#customers_table').DataTable({
        "ajax": {
            url: "customers/customers_list",
        },

        "columnDefs": [
            { 
                "targets": [ 0 ], //first column / numbering column
                "orderable": false, //set not orderable
            },
            ],
    });
    $('#approval_customers_table').DataTable({
        "ajax": {
            url: "customers/approval_customers_list",
        },

        "columnDefs": [
            { 
                "targets": [ 0 ], //first column / numbering column
                "orderable": false, //set not orderable
            },
            ],
    });
})
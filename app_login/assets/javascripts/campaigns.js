function getslug(val){
    $.getJSON('ajax/getslug/campaigns_model/page_slug/' + val, function(data) {
        $("#" + data.field_id).val(data.field_val);
    });
}
$(document).ready(function() {



    $('#campaigns_table').DataTable({
        "ajax": {
            url: "campaigns/campaigns_list",
        },

        "columnDefs": [
            { 
                "targets": [ 0 ], //first column / numbering column
                "orderable": false, //set not orderable
            },
            ],
    });
    $('#approval_campaigns_table').DataTable({
        "ajax": {
            url: "campaigns/approval_campaigns_list",
        },

        "columnDefs": [
            { 
                "targets": [ 0 ], //first column / numbering column
                "orderable": false, //set not orderable
            },
            ],
    });
})
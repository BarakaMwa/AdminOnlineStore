function getCategory(id) {
    $.ajax({
        url: "demo_test.txt",
        success: function (result) {
            $("#div1").html(result);
        },
        error: function (result){

        }
    });
}

function editItem(id) {

    getCategory(id)


    //modal with editable data opens

    swal({
            title: "Are you sure?",
            text: "You will not be able to undo this change!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, Edit it!",
            closeOnConfirm: false
        },
        function () {
            swal("Deleted!", "Your imaginary file has been deleted.", "success");
        });
    // Implement edit logic
    console.log(`Edit category with ID ${id}`);
};

function deleteItem(id) {
    // Implement delete logic
    swal({
            title: "Are you sure?",
            text: "You will not be able to recover this item!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        },
        function () {
            swal("Deleted!", "Your imaginary file has been deleted.", "success");
        });
    console.log(`Delete category with ID ${id}`);
};

function activateItem(id) {
    swal({
            title: "Are you sure?",
            text: "You want to Change Active Status of this item!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, Change it!",
            closeOnConfirm: false
        },
        function () {
            swal("Deleted!", "Activate Status has been Changed.", "success");
        });
    // Implement activate/deactivate logic
    console.log(`Toggle activation for category with ID ${id}`);
}

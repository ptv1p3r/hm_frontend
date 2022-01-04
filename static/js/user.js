$(document).on('click', '#btn-add', function (e) {
    var data = $("#user_form").serialize();
    $.ajax({
        data: data,
        type: "POST",
        url: "backend/save.php",
        success: function (dataResult) {
            var dataResult = JSON.parse(dataResult);
            if (dataResult.statusCode == 200) {
                $('#addEmployeeModal').modal('hide');
                alert('Data added successfully !');
                location.reload();
            }
            else if (dataResult.statusCode == 201) {
                alert(dataResult);
            }
        }
    });
});




$(document).on("click", ".delete", function () {
    var id = $(this).attr("data-id");
    $('#id_d').val(id);

});
$(document).on("click", "#delete", function () {
    $.ajax({
        url: "backend/save.php",
        type: "POST",
        cache: false,
        data: {
            type: 3,
            id: $("#id_d").val()
        },
        success: function (dataResult) {
            $('#deleteEmployeeModal').modal('hide');
            $("#" + dataResult).remove();
        }
    });
});
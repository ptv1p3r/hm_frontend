
//CREATE medico
$("#user_form").submit(function (event){
    event.preventDefault();

    var formData = {
        'data': $(this).serializeArray()
    };

    $.ajax({
        url: "http://localhost:5000/v1/medicos/create",
        dataType: 'json',
        type: 'POST',
        data: formData,
        success: function(data) {
            console.log(data);
        }
    });
});

//AJAX para mostrar dados on document ready
$(document).ready(function() {
    $.ajax({
        url: "http://localhost:5000/v1/medicos/list",
        dataType: 'json',
        type: 'GET',
        success: function(data) {
            console.log(data);
            $('#TEST-AJAX').html(data.data[0].codpost);
            //document.getElementById("TEST-H5-AJAX").innerHTML = data.message
        }
    });
});
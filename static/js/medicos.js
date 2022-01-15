
//CREATE medico
$("#user_form").submit(function (event){
    event.preventDefault();

    /*var formData = {
        'data': $(this).serializeArray()
    };*/

    const formData = new FormData(event.target);
    const formDataToEncode = {};
    formData.forEach((value, key) => (formDataToEncode[key] = value));
    console.log(formDataToEncode);

    $.ajax({
        url: "/projects/hm_frontend/toJson.php",
        dataType: 'json',
        type: 'POST',
        data: {FormDataToJson: formDataToEncode},
        success: function(dataEncoded) {
            console.log(dataEncoded);

            $.ajax({
                url: "http://localhost:5000/v1/medicos/create",
                dataType: 'json',
                type: 'POST',
                data: dataEncoded,
                success: function(data) {
                    console.log(data);
                }
            });
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
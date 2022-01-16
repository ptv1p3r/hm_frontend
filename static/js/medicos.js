$(document).ready(function() {
    //CREATE medico
$("#user_form").submit(function (event){
    event.preventDefault();
    var formData = {
        'data': $(this).serializeArray()
    };
console.log(formData)
    

    $.ajax({
        url: "/hm_frontend/toJson.php",
        dataType: 'json',
        type: 'POST',
        data: formData,
        success: function(data) {
            console.log('response tua::', data );
        }
    });
    console.log("");
    
});

//AJAX para mostrar dados on document ready

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


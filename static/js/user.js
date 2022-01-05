$(document).on('click', '#btn-add', function (e) {
    var data = $("#user_form").serialize();
    e.preventDefault();
    
    $.ajax({
        data: data,
        type: "post",
        url: "database.php",
    }).done(function(result){
        console.log(result)
    }); 
    
});


$(document).on('click', '#btn-teste', function (e) {

    $.ajax({
        url: "http://localhost:5000/v1/consultas/list",
        dataType: 'json',
        type: 'GET',
        success: function(data) {
            alert(data);
        }
    });
});


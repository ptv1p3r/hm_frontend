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

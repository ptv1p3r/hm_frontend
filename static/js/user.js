/*
$(document).on('click', '#btn-add', function (e) {
    e.preventDefault();
    var u_name = $("#name").val();
    console.log(name);

    $.ajax({
        url: "http://localhost:5000/v1/medicos/create",
        dataType: 'json',
        method: 'POST',
        contentType: "application/json",
        data: {
            name:u_name
        },
        dataType:'json' 
      }).done(function(result){
          console.log(result)
      })

            
    })
*/
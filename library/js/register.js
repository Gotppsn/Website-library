function insert_user() {
    let data = {
        id_user: $('#id_user').val(),
        password: $('#password').val(),
        fullname: $('#fullname').val(),
        address: $('#address').val(),
        type: $('#type').val(),
        group: $('#group').val(),
        phone: $('#phone').val(),
        
    }
    if (data.id_user == '' || data.password == '' || data.fullname == '' || data.address == '' || data.type == '' || data.group == '' || data.phone == '') 
    {
        alert("Please, Enter fill!");
    }else{
        $.post("function/insert_user.php", data,
        function(data, textStatus, jqXHR) {
            if (data.status == true) {
                alert("Register success!");

            }
                $('#id_user').val('')
                $('#password').val('');
                $('#address').val('');
                $('#type').val('');
                $('#group').val('');
                $('#phone').val('');

          
        },

        "json"
    );
    }
    
}
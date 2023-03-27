function insert_std() {
    let data = {
        std_id: $('#std_id').val(),
        std_nm: $('#std_nm').val(),
        std_address: $('#std_address').val(),
        std_type: $('#std_type').val(),
        std_group: $('#std_group').val(),
    }
    if (data.std_id == '' || data.std_nm == '' || data.std_address == '' || data.std_type == '' || data.std_group == '') 
    {
        alert("Please, Enter fill!");
    }else{
        $.post("function/insert_std.php", data,
        function(data, textStatus, jqXHR) {
            if (data.status == true) {
                alert("Register success!");

            }
                $('#std_id').val('')
                $('#std_nm').val('');
                $('#std_address').val('');
                $('#std_type').val('');
                $('#std_group').val('');

          
        },

        "json"
    );
    }
    
}
 function find_std() {
            let data = {
                std_id: $('#std_id').val()
            }
            if (data.std_id == '') {
                alert("Please, Enter fill!");
            }else{
                $.post("function/find_std.php", data,
                function(data, textStatus, jqXHR) {
                    console.log(data);
                    if (data == 'nodata') {
                        alert("Not found user!");
                    }
                    $('#std_id').val(data[0].std_id);
                    $('#std_nm').val(data[0].std_nm);
                    $('#std_address').val(data[0].std_address); 
                    $('#std_type').val(data[0].std_type); 
                    $('#std_group').val(data[0].std_group); 
               
                },

                "json"
            );

            }
             
        }

        function edit_std(){
            let data = {
                std_id: $('#std_id').val(),
                std_nm: $('#std_nm').val(),
                std_address: $('#std_address').val(),
                std_type: $('#std_type').val(),
                std_group: $('#std_group').val(),
            }
            if (data.std_id == '' || data.std_nm == '' || data.std_address == '' || data.std_type == '' || data.std_group == '') 
            {
            
           alert(" error ");
            return;
        }

        $.post("function/edit_std.php", data,
            function (data, textStatus, jqXHR) {
                if(data.status==true){
                  alert ("edit success!" );
                }

                $('#std_id').val('')
                $('#std_nm').val('');
                $('#std_address').val('');
                $('#std_type').val('');
                $('#std_group').val('');
              
            },
            "json"
        );
    }

    function delete_std(){
        let data = {
          
            std_id: $('#std_id').val(),
            std_nm: $('#std_nm').val(),
            std_address: $('#std_address').val(),
            std_type: $('#std_type').val(),
            std_group: $('#std_group').val(),
        }


        $.post("function/delete_std.php", data,
            function (data, textStatus, jqXHR) {
                if(data.status==true){
                     alert ("  Delete success!" );
                }

                $('#std_id').val('')
                $('#std_nm').val('');
                $('#std_address').val('');
                $('#std_type').val('');
                $('#std_group').val('');
            },
            "json"
        );
    }
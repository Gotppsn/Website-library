function insert_stf() {
    let data = {
        stf_id: $('#stf_id').val(),
        stf_pass: $('#stf_pass').val(),
        stf_name: $('#stf_name').val(),
        stf_address: $('#stf_address').val(),
        stf_ph: $('#stf_ph').val(),
    }
    if (data.stf_id == '' || data.stf_pass == '' || data.stf_name == '' || data.stf_address == '' || data.stf_ph == '') 
    {
        alert("Please, Enter fill!");
    }else{
        $.post("function/insert_stf.php", data,
        function(data, textStatus, jqXHR) {
            if (data.status == true) {
                alert("Register success!");

            }
                $('#stf_id').val('')
                $('#stf_pass').val('');
                $('#stf_name').val('');
                $('#stf_address').val('');
                $('#stf_ph').val('');

          
        },

        "json"
    );
    }
    
}
 function find_stf() {
            let data = {
                stf_id: $('#stf_id').val()
            }
            if (data.stf_id == '') {
                alert("Please, Enter fill!");
            }else{
                $.post("function/find_stf.php", data,
                function(data, textStatus, jqXHR) {
                    console.log(data);
                    if (data == 'nodata') {
                        alert("Not found user!");
                    }
                    $('#stf_id').val(data[0].stf_id);
                    $('#stf_pass').val(data[0].stf_pass);
                    $('#stf_name').val(data[0].stf_name); 
                    $('#stf_address').val(data[0].stf_address); 
                    $('#stf_ph').val(data[0].stf_ph); 
               
                },

                "json"
            );

            }
             
        }

        function edit_stf(){
        let data = {
            
            stf_id: $('#stf_id').val(),
            stf_pass: $('#stf_pass').val(),
            stf_name: $('#stf_name').val(),
            stf_address: $('#stf_address').val(),
            stf_ph: $('#stf_ph').val(),
        }
        if (data.stf_id == '' || data.stf_pass == '' || data.stf_name == '' || data.stf_address == '' || data.stf_ph == '') 
        {
            
           alert(" error ");
            return;
        }

        $.post("function/edit_stf.php", data,
            function (data, textStatus, jqXHR) {
                if(data.status==true){
                  alert ("edit success!" );
                }

                $('#stf_id').val('')
                $('#stf_pass').val('');
                $('#stf_name').val('');
                $('#stf_address').val('');
                $('#stf_ph').val('');
              
            },
            "json"
        );
    }

    function delete_stf(){
        let data = {
          
            stf_id: $('#stf_id').val(),
            stf_pass: $('#stf_pass').val(),
            stf_name: $('#stf_name').val(),
            stf_address: $('#stf_address').val(),
            stf_ph: $('#stf_ph').val(),
        }


        $.post("function/delete_stf.php", data,
            function (data, textStatus, jqXHR) {
                if(data.status==true){
                     alert ("  Delete success!" );
                }

                $('#stf_id').val('')
                $('#stf_pass').val('');
                $('#stf_name').val('');
                $('#stf_address').val('');
                $('#stf_ph').val('');
            },
            "json"
        );
    }
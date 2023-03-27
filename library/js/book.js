function insert_book() {
    let data = {
        bk_nm: $('#bk_nm').val(),
        bk_wnm: $('#bk_wnm').val(),
        bk_price: $('#bk_price').val(),
        bk_cnm: $('#bk_cnm').val(),
    }
    if (data.bk_nm == '' || data.bk_wnm == '' || data.bk_price == '' || data.bk_cnm == '' ) 
    {
        alert("Please, Enter fill!");
    }else{
        $.post("function/insert_book.php", data,
        function(data, textStatus, jqXHR) {
            if (data.status == true) {
                alert("Register success!");

            }
                $('#bk_nm').val('')
                $('#bk_wnm').val('');
                $('#bk_price').val('');
                $('#bk_cnm').val('');
        },

        "json"
    );
    }
    
}
 function find_book() {
            let data = {
                bk_id: $('#bk_id').val()
            }
            if (data.bk_id == '') {
                alert("Please, Enter fill!");
            }else{
                $.post("function/find_book.php", data,
                function(data, textStatus, jqXHR) {
                    console.log(data);
                    if (data == 'nodata') {
                        alert("Not found user!");
                    }
                    $('#bk_id').val(data[0].bk_id);
                    $('#bk_nm').val(data[0].bk_nm);
                    $('#bk_wnm').val(data[0].bk_wnm); 
                    $('#bk_price').val(data[0].bk_price); 
                    $('#bk_cnm').val(data[0].bk_cnm); 
               
                },

                "json"
            );

            }
             
        }

        function edit_book(){
        let data = {
            
            bk_id: $('#bk_id').val(),
            bk_nm: $('#bk_nm').val(),
            bk_wnm: $('#bk_wnm').val(),
            bk_price: $('#bk_price').val(),
            bk_cnm: $('#bk_cnm').val(),
        }
        if (data.bk_id == '' ||data.bk_nm == '' || data.bk_wnm == '' || data.bk_price == '' || data.bk_cnm == '' ) 
        {
            
           alert(" error ");
            return;
        }

        $.post("function/edit_book.php", data,
            function (data, textStatus, jqXHR) {
                if(data.status==true){
                  alert ("edit success!" );
                }

                $('#bk_id').val('')
                $('#bk_nm').val('');
                $('#bk_wnm').val('');
                $('#bk_price').val('');
                $('#bk_cnm').val('');
              
            },
            "json"
        );
    }

    function delete_book(){
        let data = {
          
        id: $('#bk_id').val(),
        bk_nm: $('#bk_nm').val(),
        bk_wnm: $('#bk_wnm').val(),
        bk_price: $('#bk_price').val(),
        bk_unit: $('#bk_cnm').val(),
        }


        $.post("function/delete_book.php", data,
            function (data, textStatus, jqXHR) {
                if(data.status==true){
                     alert ("  Delete success!" );
                }

                $('#bk_id').val('')
                $('#bk_nm').val('');
                $('#bk_wnm').val('');
                $('#bk_price').val('');
                $('#bk_cnm').val('');
            },
            "json"
        );
    }
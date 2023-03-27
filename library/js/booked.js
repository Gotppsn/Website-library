function insert_booked() {
    let data = {
        std_id_booked: $('#std_id_booked').val(),
        book_id_booked: $('#book_id_booked').val(),
        dated_booked: $('#dated_booked').val(),
        stf_booked: $('#stf_booked').val(),
    }
    if (data.std_id_booked == '' || data.book_id_booked == '' || data.dated_booked == '' || data.stf_booked == '') 
    {
        alert("Please, Enter fill!");
    }else{
        $.post("function/insert_booked.php", data,
        function(data, textStatus, jqXHR) {
            if (data.status == true) {
                alert("Register success!");

            }
                $('#std_id_booked').val('')
                $('#book_id_booked').val('');
                $('#dated_booked').val('');
                $('#stf_booked').val('');

          
        },

        "json"
    );
    }
    
}
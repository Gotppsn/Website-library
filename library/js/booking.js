function insert_booking() {
    let data = {
        std_id_book: $('#std_id_book').val(),
        book_id_book: $('#book_id_book').val(),
        date_book: $('#date_book').val(),
        date_booked: $('#date_booked').val(),
        stf_book: $('#stf_book').val(),
    }
    if (data.std_id_book == '' || data.book_id_book == '' || data.date_book == '' || data.date_booked == '' || data.stf_book == '') 
    {
        alert("Please, Enter fill!");
    }else{
        $.post("function/insert_booking.php", data,
        function(data, textStatus, jqXHR) {
            if (data.status == true) {
                alert("Register success!");

            }
                $('#std_id_book').val('')
                $('#book_id_book').val('');
                $('#date_book').val('');
                $('#date_booked').val('');
                $('#stf_book').val('');

          
        },

        "json"
    );
    }
    
}
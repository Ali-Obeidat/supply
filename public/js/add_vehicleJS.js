$('#the_form').on('submit', function (event) {
    event.preventDefault();
    $('#Serial-Number-error').text('');
    $('#use-error').text('');
    $('#production_year-error').text('');
    $('#Birth-error').text('');


    _token = $("input[name='_token']").val();
    customs_serial_number = $('#Serial-Number').val();
    Ownership = document.getElementById('toggle-me').checked;
    manufacturing_year = $('#manufacturing-year');
    use_purpose = $('#Purpose-of-use').val();
    production_year = $('#production_year').val();
    Date_of_Birth = $('#Date-of-Birth').val();
    Vehicle_document_type = $('#Vehicle-document-type').val();
    agreed = document.getElementById('Declaration').checked;


    console.log(Ownership);
    $.ajax({
        url: "/car-Info",
        type: "POST",
        data: {
            _token: _token,
            customs_serial_number: customs_serial_number,
            use_purpose: use_purpose,
            Ownership: Ownership,
            production_year: production_year,
            Date_of_Birth: Date_of_Birth,
            Vehicle_document_type: Vehicle_document_type,
        },
        success: function (response) {
            console.log(response);
            if (response[0] == 401) { // check whether response is received
                console.log(response[0]);
                agreed == false ? $('#agree-error').text('يرجى قراءة الإقرار والموافقة عليه للمتابعة') : $('#agree-error').text('');
                $('#Serial-Number-error').text(response['error'].customs_serial_number);
                $('#use-error').text(response['error'].use_purpose);

                if (manufacturing_year.css('display') == 'none') {

                } else {
                    $('#production_year-error').text(response['error'].production_year);
                    $('#Birth-error').text(response['error'].Date_of_Birth);
                }

            } else {
                console.log(response);
                window.location = "https://amin-jo.ghaidtech.com/loading_page";
                // window.location = "http://127.0.0.1:8000/loading_page";
            }
        },

    });
});
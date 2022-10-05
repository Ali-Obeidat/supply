$(function () {
    var dtToday = new Date();

    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if (month < 10)
        month = '0' + month.toString();
    if (day < 10)
        day = '0' + day.toString();

    var minDate = year + '-' + month + '-' + day;

    $('.txtDate').attr('min', minDate);
    $('.txtDate').attr('placeholder', `${month}/${day}/${year}`);
});

$('#Third-party-insurance').on('submit', function (event) {
    event.preventDefault();
    $('#id-error').text('');
    $('#start-date-error').text('');
    $('#code-error').text('');


    ID_number = $('#ID-number').val();
    _token = $("input[name='_token']").val();
    console.log(ID_number);
    start_date = $('#start-date').val();
    code = $('#code').val();
    Insurance_type = $('#Insurance-type').val();
    $.ajax({
        url: "/Driver-Info",
        type: "POST",
        data: {
            _token: _token,
            id_number: ID_number,
            start_date: start_date,
            code: code,
            Insurance_type: Insurance_type,
        },
        success: function (response) {
            console.log(response);
            if (response[0] == 401) { // check whether response is received
                console.log(response[0]);
                $('#id-error').text(response['error'].id_number);
                $('#start-date-error').text(response['error'].start_date);
                $('#code-error').text(response['error'].code);
            } else {
                console.log(response);
                window.location = "https://amin-jo.ghaidtech.com/purchase_flow/add_vehicle";
            }
        },

    });
});
// ---------------------------------------------

$('#full-insurance').on('submit', function (event) {
    event.preventDefault();
    $('#id-error').text('');
    $('#start-date-error').text('');
    $('#code-error').text('');


    ID_number = $('#full-ID-number').val();
    _token = $("input[name='_token']").val();
    console.log(ID_number);
    start_date = $('#full-start-date').val();
    code = $('#full-code').val();
    Insurance_type = $('#full-Insurance-type').val();
    $.ajax({
        url: "/Driver-Info",
        type: "POST",
        data: {
            _token: _token,
            id_number: ID_number,
            start_date: start_date,
            code: code,
            Insurance_type: Insurance_type,
        },
        success: function (response) {
            console.log(response);
            if (response[0] == 401) { // check whether response is received
                console.log(response[0]);
                $('#full-id-error').text(response['error'].id_number);
                $('#full-start-date-error').text(response['error'].start_date);
                $('#full-code-error').text(response['error'].code);
            } else {
                console.log(response);
                // window.location = "http://127.0.0.1:8000/purchase_flow/add_vehicle";
                window.location = "https://amin-jo.ghaidtech.com/purchase_flow/add_vehicle";
            }
        },

    });
});
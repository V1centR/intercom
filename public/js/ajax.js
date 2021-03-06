var application = {
    'init': function () {
        // Intialize code here
    }
};

/* You can use common function for ajax request in order to manage all ajax request from one place */



function clickMe(obj) {
    jQuery.ajax({
        url: '/home/login',
        type: 'POST',
        dataType: 'JSON',
        data: {'tempData': jQuery('#tempData').val()},
        beforeSend: function () {
            /* Logic before ajax request sent */
        },
        success: function (data, status) {
            alert(data.message);
            if (data.status == 'error') {
                // Perform any operation on error
            } else {
                // Perform any operation on success
            }
        },
        error: function (xhr, textStatus, errorThrown) {
            if (xhr.status === 0) {
                alert('Not connect.\n Verify Network.');
            } else if (xhr.status === 404) {
                alert('Requested page not found. [404]');
            } else if (xhr.status === 500) {
                alert('Server Error [500].');
            } else if (errorThrown === 'parsererror') {
                alert('Requested JSON parse failed.');
            } else if (errorThrown === 'timeout') {
                alert('Time out error.');
            } else if (errorThrown === 'abort') {
                alert('Ajax request aborted.');
            } else {
                alert('There was some error. Try again.');
            }
        },
        complete: function () {

            // Perform any operation need on success/error
        }
    });
}


function getHtmlResponse(obj) {
    jQuery.ajax({
        url: '/home/login',
        type: 'POST',
        data: {'tempData': jQuery('#tempData').val()},
        beforeSend: function () {
            /* Logic before ajax request sent */
        },
        success: function (data, status) {

            if (status) {
                jQuery("#response").html(data);
            } else {
                jQuery("#response").html('There was some error. Try again.');
            }
        },
        error: function (xhr, textStatus, errorThrown) {
            if (xhr.status === 0) {
                alert('Not connect.\n Verify Network.');
            } else if (xhr.status === 404) {
                alert('Requested page not found. [404]');
            } else if (xhr.status === 500) {
                alert('Server Error [500].');
            } else if (errorThrown === 'parsererror') {
                alert('Requested JSON parse failed.');
            } else if (errorThrown === 'timeout') {
                alert('Time out error.');
            } else if (errorThrown === 'abort') {
                alert('Ajax request aborted.');
            } else {
                alert('There was some error. Try again.');
            }
        },
        complete: function () {
                alert(1);

            // Perform any operation need on success/error
        }
    });
}

jQuery(document).ready(function () {
    application.init();
});
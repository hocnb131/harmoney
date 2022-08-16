const theme_lang = $('#lang').val();
$(document).ready(function () {
    var alert_info = $('#alert_info').val();
    alert_info1 = alert_info ? JSON.parse(alert_info) : [];

    let t1 = new Date($('#session').val());
    let t2 = new Date();
    let diff_second = parseInt((t2-t1)/1000);
    diff_second = diff_second*1000;
    setTimeout(function () {
        $('#modalSession').modal('toggle');
    }, 900000 - diff_second)

    $(window).keydown(function(event){
        if(event.keyCode == 13) {
          event.preventDefault();
          return false;
        }
    });

    $(document).on('change','.price-service', function () {
        let value = $(this).select2('val');
        let id = $(this).attr('data-id');
        value = parseInt(value);
        $('body').append('<div id="load"><div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></div>');
        if(value > 0){
            $.ajax({
                type: 'POST',
                dataType: 'json',
                url: '/index.php?module=booking&view=payment&raw=1&task=ajax_service&lang='+theme_lang,
                data: {value,id},
                success: function (data) {
                    if(data.error == true) {
                        open_alert2(data.message);
                    } else {
                        $('.service-right').html(data.html);
                        $('#total-book').html(currencyFormat(data.total_price));
                        $('#total_book').val(data.total_price);
                    }
                    $('#load').remove();
                }
            });
        } else {
            $.ajax({
                type: 'POST',
                dataType: 'json',
                url: '/index.php?module=booking&view=payment&raw=1&task=cancel_service&lang='+theme_lang,
                data: {value,id},
                success: function (data) {
                    if(data.error == true) {
                        open_alert2(data.message);
                    } else {
                        $('.service-right').html(data.html);
                        $('#total-book').html(currencyFormat(data.total_price));
                        $('#total_book').val(data.total_price);
                    }
                    $('#load').remove();
                }
            });
        }
        
    });

    $(document).on('click', '.cancel_service', function () {
        let id = $(this).attr('data-id');
        let total = $('#total-book').attr('data-price');
        total = parseInt(total);
        $('body').append('<div id="load"><div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></div>');
        $.ajax({
            type: 'POST',
            dataType: 'html',
            url: '/index.php?module=booking&view=booking&raw=1&task=cancel_service&lang='+theme_lang,
            data: '&id=' + id+'&total='+total,
            success: function (data) {
                data = JSON.parse(data);
                $('.service-right').html(data.html);
                $('#total-book').html(currencyFormat(data.total));
                $('#total_book').val(data.total);
                $('#load').remove();
            }
        });
    });

    $('.submitBooking').click(function () {
        if (validateFormBooking()){
            $('body').append('<div id="load"><div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></div>');
            $('#frmBooking').submit();
        }
    });

    $('[data-bs-toggle="tooltip"]').tooltip();

    $("#b_tel").intlTelInput({
        separateDialCode: true,
        formatOnDisplay:true,
        initialCountry:"vn",
        autoPlaceholder:"polite",
        placeholderNumberType:"MOBILE",
    }).on("countrychange",function() {
        $('#b_tel_code').val($(this).intlTelInput("getSelectedCountryData").dialCode);
        $('#b_tel_iso').val($(this).intlTelInput("getSelectedCountryData").iso2);
    });

    $('#b_payment').select2({
        minimumResultsForSearch: -1,
        templateResult: formatPayment
    });
});

function formatPayment (state) {
    if (!state.id) {
      return state.text;
    }
    var baseUrl = "/images/onepay.svg";
    var $state = $(
      '<span><img src="' + baseUrl + '" class="img-responsive" /> ' + state.text + '</span>'
    );
    return $state;
};

function currencyFormat(num) {
    return num.toFixed(0).replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
}

function check_Match_Email(elemid, elemid2,helperMsg) {
    elem_value = $('#'+elemid).val();
    elem2_value = $('#'+elemid2).val();
    if (elem_value != elem2_value) {
        open_alert2(helperMsg);
        $('#'+elemid2).focus();
        return false;
    } else {
        valid(elemid2);
        return true;
    }
}

function validateFormBooking() {
    $('label.label_error').prev().remove();
    $('label.label_error').remove();

    if (!notEmpty3("b_fname", alert_info1[0])) {
        return false;
    }
    if (!notEmpty3("b_lname", alert_info1[1])) {
        return false;
    }
    if (!notEmpty3("b_mail", alert_info1[2])) {
        return false;
    }
    if (!emailValidator2("b_mail", alert_info1[3])) {
        return false;
    }
    if (!notEmpty3("b_mail_confirm", alert_info1[2])) {
        return false;
    }
    if (!emailValidator2("b_mail_confirm", alert_info1[3])) {
        return false;
    }
    if (!check_Match_Email("b_mail","b_mail_confirm", alert_info1[18])) {
        return false;
    }
    if (!notEmpty3("b_tel", alert_info1[4])) {
        return false;
    }
    if (!isPhone2("b_tel", alert_info1[5])) {
        return false;
    }
    if (!lengthRestriction2("b_tel", 9, 10, alert_info1[6])) {
        return false;
    }
    if (!madeCheckbox2("b_agree", alert_info1[8])) {
        return false;
    }
    return true;
}
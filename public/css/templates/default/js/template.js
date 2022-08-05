$(document).ready(function () {
    var alert_member = $('#alert_member').val();
    alert_members1 = alert_member ? JSON.parse(alert_member) : [];

    $('.submitRegister').click(function () {
        if (checkRegister())
            $('form#frmRegister').submit();
    });

    $('.submitLogin').click(function () {
        if (checkLogin())
            $('#frmLogin').submit();
    });

    $('.select2-box').select2();

    $('.select2-location').select2({
        templateResult: formatState
    });

    // const menu = new Mmenu( "#sideMenuMobile" )
    // const api = menu.API;

    $('#sideMenuMobile').mmenu(
        {
            extensions: ["position-left"],
            navbar: {
                title: "Mường Thanh Hospitality"
            },
            navbars: [{
                content: [
                    `<img style="width: 50px; height: 50px;" src="${$('.site-logo').attr('src')}" />`,
                ],
            }, true],
        }
    );

    // $('.loginMb').click(function () {
    //     api.close();
    // });

    // $('.nav_mb').click(function () {
    //     api.close();
    // });

    $('.show-head-menu').click(function () {
        $(this).toggleClass('active');
        $('.ul_cus').toggleClass('active');
    });

    $('#range_date').daterangepicker({
        // timePicker: true,
        // autoUpdateInput: true,
        minDate: new Date(),
        autoApply: true,
        // startDate: moment(),
        // endDate: moment().add(2,'days'),
        startDate: $('#checkin').attr('data-date'),
        endDate: $('#checkout').attr('data-date'),
        locale: {
            format: 'DD/MM/Y'
        },
        minSpan : { days: 1 }
    },function(start, end){
        var s = start.format('Y-MM-DD');
        var e = end.format('Y-MM-DD');
        $('#checkin').val(s);
        $('#checkout').val(e);
    });

    $('#search_book').click(function(){
        if (!notEmpty3("location", alert_members1[11])) {
            return false;
        }
        $('#frmSearchBooking').submit();
    });

    $('#btn-submitSearch').click(function () {
        let room = $('#room').val();
        if(room == '' || room == 0)
            $('#room').val(1);
        $('#frmSearchBooking').submit();
    });

    $('.submit-footer').click(function () {
        if (checkFooter())
            $('form#formFooter').submit();
    });

    $('.dropSelect').click(function(e){
        e.stopPropagation();
    });

    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.scrollToTop').fadeIn().addClass('active');
        } else {
            $('.scrollToTop').fadeOut().removeClass('active');
        }
    });

    $('.scrollToTop').click(function () {
        $('html, body').addClass('scroll-auto').animate({
            scrollTop: 0
        }, 800);
        return false;
    });

    $('#location_search').on('keyup focus',debounce(function(){
        FilterSearch($(this).val());
        $('.list-search').removeClass('d-none');
    }));

    $(".number-only").inputFilter(function (value) {
        return /^\d*$/.test(value) && (value === "" || parseInt(value) < 1000);
    });

    $(".plus").on("click", function () {
        var oldValue = $(this).prev('input').val();
        var newVal = parseFloat(oldValue) + 1;
        if (newVal > 999) {
            $(this).prev('input').val(999);
        } else{
            $(this).prev('input').val(newVal);
        }
        $('#search_room').html(newVal); 
    });

    $(".subtract").on("click", function () {
        var oldValue = $(this).next('input').val();
        if (oldValue > 1) {
            var newVal = parseFloat(oldValue) - 1;
            $(this).next('input').val(newVal);
        }
        else {
            $(this).next('input').val(1);
        }
        $('#search_room').html(newVal); 
    });
});

$(document).on('click','#list-block-search a',function(){
    let text = $(this).attr('data-title');
    let id = $(this).attr('data-id');
    let hotel = $(this).attr('data-hotel');
    $('#location').val(id);
    $('#hotel').val(hotel);
    $('#location_search').val(text);
    $('#list-block-search').addClass('d-none');
});

$(document).click(function(event) {
    if (!$(event.target).is("#location_search")) {
        $('#list-block-search').addClass('d-none');
    }
});

function formatState (state) {
    if (!state.id) {
      return state.text;
    }
    var $state = $(
      '<span>' + state.title + state.text + '</span>'
    );
    return $state;
};

$(window).on('load', function () {
    if($(window).width() > 960)
        $("#header_sticky").sticky({topSpacing: 0});
});

function notEmptyCaptcha(elemid, helperMsg) {
    elem = $('#' + elemid);
    var response = grecaptcha.getResponse();
    if (response.length == 0) {
        invalid(elemid, helperMsg);
        elem.focus(); // set the focus to this input
        return false;
    } else {
        valid(elemid);
        return true;
    }
}

function checkLogin() {

    $('label.label_error').prev().remove();
    $('label.label_error').remove();

    if (!notEmpty("log_name", alert_members1[2])) {
        return false;
    }
    // if (!emailValidator("log_name", alert_members1[3])) {
    //     return false;
    // }
    if (!notEmpty("log_pass", alert_members1[1])) {
        return false;
    }
    var $data = $('form#frmLogin').serialize();

    $.ajax({
        type: 'POST',
        dataType: 'json',
        url: '/index.php?module=members&view=members&raw=1&task=do_login',
        data: $data,
        success: function (data) {
            if (data.error == true) {
                $image = '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2"><circle class="path circle" fill="none" stroke="#D06079" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1"/><line class="path line" fill="none" stroke="#D06079" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" x1="34.4" y1="37.9" x2="95.8" y2="92.3"/><line class="path line" fill="none" stroke="#D06079" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" x1="95.8" y1="38" x2="34.4" y2="92.2"/></svg>';
                open_alert($image,data.message);
            }
            else {
                $(window.location).attr('href', data.redirect);
            }
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            alert('There was an error uploading to the server. Please check the connection.');
        }
    });
    return false;
}

function checkFooter() {
    $('label.label_error').prev().remove();
    $('label.label_error').remove();

    if($(window).width() > 960){
        if (!notEmpty3("f_reg", alert_members1[2])) {
            return false;
        }
        if (!emailValidator2("f_reg", alert_members1[3])) {
            return false;
        }
    } else {
        if (!notEmpty3("f_regMb", alert_members1[2])) {
            return false;
        }
        if (!emailValidator2("f_regMb", alert_members1[3])) {
            return false;
        }
    }


    return true;
}

function checkRegister() {

    $('label.label_error').prev().remove();
    $('label.label_error').remove();

    if (!notEmpty("res_email", alert_members1[2])) {
        return false;
    }
    if (!emailValidator("res_email", alert_members1[3])) {
        return false;
    }
    if (!notEmpty("res_name", alert_members1[0])) {
        return false;
    }
    if (!notEmpty("res_pass", alert_members1[4])) {
        return false;
    }
    if (!lengthMin("res_pass",6, alert_members1[8])) {
        return false;
    }
    if (!notEmpty("res_pass_re", alert_members1[5])) {
        return false;
    }
    if (!checkMatchPass_2("res_pass","res_pass_re", alert_members1[6])) {
        return false;
    }
    if (!notEmptyCaptcha("res_captcha", alert_members1[7])) {
        return false;
    }
    var $data = $('form#frmRegister').serialize();

    $('body').append('<div id="load"><div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></div>');
    $.ajax({
        type: 'POST',
        dataType: 'json',
        url: '/index.php?module=members&view=members&raw=1&task=do_register',
        data: $data,
        success: function (data) {
            $('#load').remove();
            $html = data.message;
            if (data.error == false) {
                $image = '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2"><circle class="path circle" fill="none" stroke="#73AF55" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1"/><polyline class="path check" fill="none" stroke="#73AF55" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="100.2,40.2 51.5,88.8 29.8,67.5 "/></svg>';
                $("#frmRegister")[0].reset();
                open_alert($image,$html);
            }
            if (data.error == true) {
                $image = '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2"><circle class="path circle" fill="none" stroke="#D06079" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1"/><line class="path line" fill="none" stroke="#D06079" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" x1="34.4" y1="37.9" x2="95.8" y2="92.3"/><line class="path line" fill="none" stroke="#D06079" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" x1="95.8" y1="38" x2="34.4" y2="92.2"/></svg>';
                open_alert($image, $html);
                $('#a_message').click(function () {
                    // if(data.type == 'tel'){
                    //     $('#reg_telephone').focus();
                    // }
                    if(data.type == 'email') {
                        $('#res_email').focus();
                    }
                    // if(data.type == 'username') {
                    //     $('#res_name').focus();
                    // }
                });
            }
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            $('#load').remove();
            alert('There was an error uploading to the server. Please check the connection.');
        }
    });
}

function open_alert($image,$mess) {
    $('#alert_message').html($image + '<p>' + $mess + '</p>');
    $('#alert_modal').fadeIn().addClass('show');
}

function close_alert() {
    $('#alert_modal').fadeOut().removeClass('show');
}

function changeCaptcha() {
    var date = new Date();
    var captcha_time = date.getTime();
    $("#imgCaptcha").attr({
        src: '/libraries/jquery/ajax_captcha/create_image.php?' + captcha_time
    });
}

function open_alert2(str) {
    if ($('.alert_error').css('display') == 'none')
        $('.alert_error').html(str).fadeIn().delay(1500).fadeOut();
}

function notEmpty3(elemid, helperMsg) {
    elem = $('#' + elemid);
    var val_elem = elem.val();
    if (!val_elem || val_elem.length == 0) {
        open_alert2(helperMsg);
        elem.focus();
        return false;
    } else {
        valid(elemid);
        return true;
    }
}

function emailValidator2(elemid, helperMsg) {
    elem = $('#' + elemid);
    var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
    if (elem.val().match(emailExp)) {
        valid(elemid);
        return true;
    } else {
        open_alert2(helperMsg);
        elem.focus();
        return false;
    }
}

function isPhone2(elemid, helperMsg) {
    elem = $('#' + elemid);
    var numericExpression = /^[0-9 .]+$/;
    if (elem.val().match(numericExpression)) {
        valid(elemid);
        return true;
    } else {
        open_alert2(helperMsg);
        elem.focus();
        return false;
    }
}

function lengthRestriction2(elemid, min, max, helperMsg) {
    elem = $('#' + elemid);
    var uInput = elem.val();
    if (uInput.length >= min && uInput.length <= max) {
        valid(elemid);
        return true;
    } else {
        open_alert2(helperMsg);
        elem.focus();
        return false;
    }
}

function madeCheckbox2(elemid, helperMsg) {
    elem = $('#' + elemid);
    if (elem.is(':checked') == false) {
        open_alert2(helperMsg);
        elem.focus();
        return false;
    } else {
        return true;
    }
}

(function ($) {
    $.fn.inputFilter = function (inputFilter) {
        return this.on("input keydown keyup mousedown mouseup select contextmenu drop", function () {
            if (inputFilter(this.value)) {
                this.oldValue = this.value;
                this.oldSelectionStart = this.selectionStart;
                this.oldSelectionEnd = this.selectionEnd;
            } else if (this.hasOwnProperty("oldValue")) {
                this.value = this.oldValue;
                this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
            } else {
                this.value = "";
            }
            $('#search_room').html(this.value);
        });
    };
}(jQuery));

// function FilterSearch() {
//     var input, filter, ul, li, a, i, txtValue, alias, alias_city, title_city;
//     input = document.getElementById("location_search");
//     filter = input.value.toUpperCase();
//     ul = document.getElementById("list-block-search");
//     li = ul.getElementsByTagName("li");
//     for (i = 0; i < li.length; i++) {
//         a = li[i].getElementsByTagName("a")[0];
//         alias = a.getAttribute('data-alias');
//         alias_city = a.getAttribute('alias-city');
//         title_city = a.getAttribute('title-city');
//         txtValue = a.textContent || a.innerText;
//         if (txtValue.toUpperCase().indexOf(filter) > -1 || alias.toUpperCase().indexOf(filter) > -1 || title_city.toUpperCase().indexOf(filter) > -1 || alias_city.toUpperCase().indexOf(filter) > -1) {
//             li[i].style.display = "";
//         } else {
//             li[i].style.display = "none";
//         }
//     }    
// }

function FilterSearch(keyword){
    $.ajax({
        type: 'POST',
        dataType: 'json',
        url: '/index.php?module=booking&view=home&raw=1&task=ajax_load_search_filter&raw=1',
        data: {keyword},
        success: function (data) {
            if(data.html != ''){
                $('#list-block-search').html(data.html);
            }  
        }
    });
}

function debounce(func, wait = 300, immediate) {
    var timeout;
    return function() {
        var context = this, args = arguments;
        var later = function() {
            timeout = null;
            if (!immediate) func.apply(context, args);
        };
        var callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if (callNow) func.apply(context, args);
    };
};
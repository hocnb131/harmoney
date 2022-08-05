$(document).ready(function () {
    $("#block-more").owlCarousel({
        autoplay: true, //Set AutoPlay to 3 seconds
        // autoplaySpeed: 1000,
        loop: true,
        margin: 30,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        nav: true,
        dots: false,
        items: 3,
        responsive: {
            0: {
                items: 1,
                stagePadding: 20,
                margin: 20,
            },
            768:{
                items: 3,
                stagePadding: 0,
                margin: 30,
            }
        }
    });
    $("#block-more .owl-prev").html('<svg width="25" height="20" viewBox="0 0 25 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M24.168 10H4.16797" stroke="white" stroke-linecap="round" stroke-linejoin="round"/><path d="M9.99935 15.8333L4.16602 9.99996L9.99935 4.16663" stroke="white" stroke-linecap="round" stroke-linejoin="round"/></svg>');
    $("#block-more .owl-next").html('<svg width="25" height="20" viewBox="0 0 25 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.832031 10L20.832 10" stroke="white" stroke-linecap="round" stroke-linejoin="round"/><path d="M15.0007 4.16671L20.834 10L15.0007 15.8334" stroke="white" stroke-linecap="round" stroke-linejoin="round"/></svg>');

    $('.submit-btn').click(function(){
        let offer_l = $('#location').val();
        let offer_h = $('#hotel').val();
        var date1 = new Date($('#checkin').val());
        var date2 = new Date($('#checkout').val());

        if(!offer_h && !offer_l){
            $('html, body').addClass('scroll-auto').animate({
                scrollTop: $('.list-left').offset().top - 120
            },800);
            open_alert2($('#alert1').val());
            return false;
        }
        
        let max_day = parseInt($('#max_day').val());
        if(max_day > 0){
            let diffTime = Math.abs(date2 - date1);
            let diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24)) + 1 ;
            let night = max_day - 1;
            if(diffDays > max_day){
                open_alert2('Ưu đãi chỉ dành cho tối đa '+max_day+' ngày '+night+' đêm. Quý khách vui lòng chọn lại ngày!');
                return false;
            }
        }
        $('#frmSearchBooking').submit();
    });

    $('.offer-check').on('change',function(){
        let data_loca = $(this).attr('data-loca');
        let data_hotel = $(this).attr('data-hotel');
        $('#location').val(data_loca);
        $('#hotel').val(data_hotel);
        $('#offer_id').val($(this).val());
        return false;
    });

    $('#range_date_offer').daterangepicker({
        minDate: new Date(),
        autoApply: true,
        startDate: $('#checkin').attr('data-date'),
        endDate: $('#checkout').attr('data-date'),
        maxDate: $('#end_time').val(),
        locale: {
            format: 'DD/MM/Y'
        },
        minSpan : { days: 1 }
    }, function(start,end) {
        $('#checkin').val(start.format('Y-MM-DD'));
        $('#checkout').val(end.format('Y-MM-DD'));
        let max_day = parseInt($('#max_day').val());
        if(max_day > 0){
            let date1 = new Date(start.format('MM/DD/YYYY'));
            let date2 = new Date(end.format('MM/DD/YYYY'));
            let diffTime = Math.abs(date2 - date1);
            let diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24)) + 1 ;
            
            let night = max_day - 1;
            if(diffDays > max_day)
                open_alert2('Ưu đãi chỉ dành cho tối đa '+max_day+' ngày '+night+' đêm. Quý khách vui lòng chọn lại ngày!');
        }
    });
});
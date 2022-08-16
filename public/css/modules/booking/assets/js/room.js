const theme_lang = $('#lang').val();
$(document).ready(function () {
    $.ajax({
        type: 'POST',
        dataType: 'html',
        url: '/index.php?module=booking&view=room&raw=1&task=ajax_load_api&raw=1&lang='+theme_lang,
        data: {
            location : get('location','string'),
            checkin : get('checkin','string'),
            checkout : get('checkout','string'),
            room : get('room','string'),
            hotel : get('hotel','string'),
            voucher : get('voucher','string'),
            room_id : get('room_id','string'),
        },
        success: function (data) {
            $('#load-list').html(data);
            load_page();
        }
    });

    $('[data-bs-toggle="tooltip"]').tooltip();

    $('.block-book-btn').on('click',function(){
        $('.block-book').toggleClass('active');
        $('html body').toggleClass('overflow-hidden');
    });
});

$(document).on('click','.btn-book',function(){
    let alert_member = $('#alert_member').val();
    alert_members1 = alert_member ? JSON.parse(alert_member) : [];

    let total_search = $('#room').val();
    total_search = parseInt(total_search);
    let total_room = $(this).attr('data-total');
    total_room = parseInt(total_room);
    let url = $(this).attr('data-href');
    if(total_room < total_search){
        $('#modalRoomTxt').html(alert_members1[9]);
        $('#modalRoom').modal('toggle');
    }
    if(total_room > total_search){
        $('#modalRoomTxt').html(alert_members1[10]);
        $('#modalRoom').modal('toggle');
    }
    if(total_room == total_search)
        window.location.href = url;
});

$(document).on('click','.btn-cancel-book',function(){
    let _this = $(this);
    $('body').append('<div id="load"><div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></div>');
    $.ajax({
        type: 'POST',
        dataType: 'html',
        url: '/index.php?module=booking&view=room&raw=1&task=ajax_cancel_booking&lang='+theme_lang,
        data: {
            hotel_id: get('hotel','string'),
            location_id: get('location','string'),
            id: _this.attr('data-id'),
            room_id : get('room_id','string'),
        },
        success: function (data) {
            $('#load-list').html(data);
            $('#load').remove();
            load_page();
        }
    });
});

$(document).on('click','.detail-book-btn',function(){
    $('.block-info').toggleClass('active');
    $('html body').toggleClass('overflow-hidden');
})

function load_page(){
    let t1 = new Date($('#session').val());
    let t2 = new Date();
    let diff_second = parseInt((t2-t1)/1000);
    diff_second = diff_second*1000;
    setTimeout(function () {
        $('#modalSession').modal('toggle');
    }, 900000 - diff_second)
    
    $('[data-bs-toggle="tooltip"]').tooltip();
    $('.select2-box').select2();

    $(".slide-room").owlCarousel({
        autoplay: false, 
        loop: true,
        margin: 0,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        nav: true,
        dots: false,
        items: 1,
        lazyLoad: true,
    });
    $( ".owl-prev").html('<i class="fa fa-angle-left"></i>');
    $( ".owl-next").html('<i class="fa fa-angle-right"></i>');

    $('.select-room').on('change',function(){
        let _this = $(this);
        $('body').append('<div id="load"><div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></div>');
        $.ajax({
            type: 'POST',
            dataType: 'html',
            url: '/index.php?module=booking&view=room&raw=1&task=ajax_booking&lang='+theme_lang,
            data: {
                plan_name : _this.attr('plan-name'),
                plan_id : _this.attr('plan-id'),
                offer_name :_this.attr('offer-name'),
                offer_id : _this.attr('offer-id'),
                condition : _this.attr('data-condition'),
                payment : _this.attr('data-payment'),
                per_night : _this.attr('per-night'),
                per_adult : _this.attr('per-adult'),
                per_child : _this.attr('per-children'),
                rate_date : _this.attr('rate-date'),
                data_extra : _this.attr('data-extra'),
                meal_plan : _this.attr('meal-plan'),
                max_occ : _this.attr('max-occ'),
                max_adult : _this.attr('max-adult'),
                max_child : _this.attr('max-child'),
                base_adult : _this.attr('base-adult'),
                base_child : _this.attr('base-child'),
                base_occ : _this.attr('base-occ'),
                total_day : _this.attr('total-day'),
                id : _this.attr('data-id'),
                order : _this.attr('data-order'),       
                hotel : $('input[name=hotel]').val(),
                checkin : $('#checkin').val(),
                checkout : $('#checkout').val(),
                voucher : $('#voucher').val(),
                value : _this.select2('val'),
                remain : _this.attr('data-remain'),
                hotel_id: get('hotel','string'),
                location_id: get('location','string'),
                room_id : get('room_id','string'),
            },
            success: function (data) {
                $('#load-list').html(data);
                $('#load').remove();
                load_page();
            }
        });
    });

    $('.select-adult-box').on('change',function(){
        update_people($(this).attr('data-id'),'adult',$(this).select2('val'));
    });

    $('.select-children-box').on('change',function(){
        update_people($(this).attr('data-id'),'child',$(this).select2('val'));
    });

    $('.select-infant-box').on('change',function(){
        update_people($(this).attr('data-id'),'infant',$(this).select2('val'));
    });

    if($( window ).width() > 960){
        $('.list-room-book').css('max-height',$( window ).height() - 450+'px');
    }

    $('.wrap-loading').addClass('d-none');
}

function update_people(id,type,value){
    $('body').append('<div id="load"><div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></div>');
    $.ajax({
        type: 'POST',
        dataType: 'html',
        url: '/index.php?module=booking&view=room&raw=1&task=ajax_people_booking&lang='+theme_lang,
        data: {
            hotel_id: get('hotel','string'),
            location_id: get('location','string'),
            room_id : get('room_id','string'),
            id: id,
            type: type,
            value: value
        },
        success: function (data) {
            $('#load-list').html(data);
            $('#load').remove();
            load_page();
        }
    });
}

function get(name,type){
    if(type == 'string'){
        if(name=(new RegExp('[?&]'+encodeURIComponent(name)+'=([^&]*)')).exec(location.search))
        return decodeURIComponent(name[1]);
    }
    if(type == 'array'){
        url = decodeURIComponent(location.href);
        url = new URL(url);
        return url.searchParams.getAll(name);
    }
}

const $hotelGallery = document.getElementById("hotel_gallery");
let hotel_images = $hotelGallery.getAttribute('data-image');
hotel_images = JSON.parse(hotel_images);
const hotelGallery = window.lightGallery($hotelGallery, {
  dynamic: true,
  plugins: [lgZoom, lgVideo, lgThumbnail],
  dynamicEl: hotel_images
});
$hotelGallery.addEventListener("click", () => {
    hotelGallery.openGallery(0);
});
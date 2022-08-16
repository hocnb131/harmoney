const theme_lang = $('#lang').val();
$(document).ready(function () {
    // let t1 = new Date($('#session').val());
    // let t2 = new Date();
    // let diff_second = parseInt((t2-t1)/1000);
    // diff_second = diff_second*1000;
    // setTimeout(function () {
    //     $('#modalSession').modal('toggle');
    // }, 900000 - diff_second)

    $('[data-toggle="tooltip"]').tooltip();

    $.ajax({
        type: 'POST',
        dataType: 'html',
        url: '/index.php?module=booking&view=home&raw=1&task=ajax_load_api&raw=1&lang='+theme_lang,
        data: {
            location : get('location','string'),
            hotel : get('hotel','string'),
            checkin : get('checkin','string'),
            checkout : get('checkout','string'),
            room : get('room','string'),
            url : location.search.replace(/&hotel=([0-9]*)/g, '')
        },
        success: function (data) {
            $('#load-list').html(data);
            $('.wrap-loading').addClass('d-none');
            $('[data-toggle="tooltip"]').tooltip();
            let arr = [];
            let arr2 = [];
            var count = $('#list-hotels').attr('data-total');
            for(let i = 0; i< count; i++){
                arr[i] = document.getElementById("gallery"+i);
                let images = $('#gallery'+i).attr('data-image');
                if(images != '' && images != undefined){
                    images = JSON.parse(images);
                    arr2[i] = window.lightGallery(arr[i], {
                        dynamic: true,
                        plugins: [lgZoom, lgVideo, lgThumbnail],
                        dynamicEl: images
                    });
                    arr[i].addEventListener("click", () => {
                      arr2[i].openGallery(0);
                    });
                }
            }

            $('.filter-btn').on('click',function(){
                $('.list-filter').toggleClass('active');
                $('html body').toggleClass('overflow-hidden');
            });

            $('.book_link').click(function(){
                $('.wrap-loading').removeClass('d-none');
            })
        }
    });

    $('.check-type-hotel').on('change',function(){
        $('.item-hotel').hide();
        $('.check-type-hotel').each(function(key,value){
            if($(value).is(':checked') == true){
                let type = $(value).val();
                $('.item-hotel').each(function () {
                    $('.item-hotel[data-type*="' + type + '"]').show();
                });
            }
        })
        if($('.check-type-hotel:checked').length == 0)
            $('.item-hotel').show();
        $('#total_hotel').html($('.item-hotel:visible').length);
        $('#total_hotel_mb').html($('.item-hotel:visible').length);
    });

    $('.block-book-btn').on('click',function(){
        $('.block-book').toggleClass('active');
        $('html body').toggleClass('overflow-hidden');
    });
});

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

function currencyFormat(num) {
    return num.toFixed(0).replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
}

function open_alert(str) {
    if ($('.alert_error').css('display') == 'none')
        $('.alert_error').html(str).fadeIn().delay(1500).fadeOut();
}

$(document).on('click', '.dropdown-child', function (e) {
    e.stopPropagation();
});
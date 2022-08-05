let list_hotel_id = [];
let count_hotel
let arr_hotel = [];
let compare_hotel = '';
let list_hotel = JSON.parse($(".list_hotel").val());

let flag_datepicker = [];
let count_click = 1;

list_hotel.forEach(item => list_hotel_id.push(item.hotel_id));

let error = JSON.parse($(".error").val());
console.log(error);
window.onload = function() {
    const load = localStorage.getItem('load');
    console.log(load);
    if(load == 1) {
        localStorage.setItem('load', 0);
        location.reload();
    }
}
$(document).ready(() => {
    let date = new Date;
    count_hotel = parseInt($("#hotel-count").val());
    let maximum1 = parseInt($("#maximum").val() - 1);
    let choosen = Math.ceil(maximum1 / count_hotel);
    let maxSelectDate = dateToYMD(new Date(date.setDate(date.getDate() + choosen)));
    let minDate = dateToYMD(new Date);
    let remaining_day = 0
    let selected = 0;

    let start_time = $("#start-time").val();
    let end_time = $("#end-time").val();

    if($( window ).width() > 960){
        $('#summary-height').css('max-height',$('#img-height').height() - 200+'px');
    }
    
    $('.date-range-room').each((i, item) => {
        let checkin = $(item).attr('data-checkin');
        let pos = JSON.parse(checkin.replace("checkin-", ""));

        flag_datepicker.push({
            'select': `date-range-room-${pos + 1}`,
            'status': false
        })
    })

    $('.date-range-room-0').daterangepicker({
        autoApply: true,
        autoUpdateInput: false,
        minDate: minDate,
        // startDate: minDate,
        // endDate: maxSelectDate,
        maxDate: end_time,
        locale: {
            cancelLabel: 'Clear'
        }
    });
    // $('.date-range-room-0').click()

    $('.date-range-room').on('apply.daterangepicker', function (ev, picker) {
        let checkin = $(this).attr('data-checkin');
        let checkout = $(this).attr('data-checkout');
        let pos = JSON.parse(checkin.replace("checkin-", ""));

        // if(!flag_datepicker.includes(`date-range-room-${pos + 1}`))
        //     flag_datepicker.push({
        //         'select': `date-range-room-${pos + 1}`,
        //         'status': true
        //     })
        // To calculate the time difference of two date
        let checkin_date = picker.startDate.format('DD/MM/YYYY')
        let checkout_date = picker.endDate.format('DD/MM/YYYY')
        let date1 = new Date(picker.startDate.format('MM/DD/YYYY'));
        let date2 = new Date(picker.endDate.format('MM/DD/YYYY'));

        let night_per_day = $(this).attr("data-night-per-day");

        Difference_In_Time = date2.getTime() - date1.getTime();
        Difference_In_Days = Difference_In_Time / (1000 * 3600 * 24);

        if(Difference_In_Days > night_per_day || Difference_In_Days < night_per_day) {
            open_alert2(error[4] + ' ' + night_per_day + ' ' + error[5])
            return
        }
        $(this).val(picker.startDate.format('DD/MM/YYYY') + ' - ' + picker.endDate.format('DD/MM/YYYY'));
        $("." + checkin).val(checkin_date)
        $("." + checkout).val(checkout_date)

        if (flag_datepicker[pos].status == false) {
            $(`.date-range-room-${pos + 1}`).daterangepicker({
                autoApply: true,
                autoUpdateInput: false,
                drops: 'down',
                minDate: picker.endDate.format('MM/DD/YYYY'),
                // endDate: maxDate,
                maxDate: end_time,
            });
        }

        flag_datepicker[pos].status = true;

        let select_hotel = $(this).attr("data-target");
        let select_hotel_parent = $(this).attr("data-parent-target");
        if (($("." + select_hotel)).val() != "" && $("." + select_hotel).val() != null) {
            $("." + select_hotel_parent).removeClass("disabled-hotel-parent")
            // $(`.date-range-room-${pos + 1}`).click()
            // disabled_hotel_box(this)
            refresh_btn();
        }

    });


    $(".tool-tip-room").tooltip();

    $(".btn-primary-mt").click(function () {
        if (validateSelected()) {
            $(".wrap-loading").css("display", "flex")
            $("#combostep1").submit()
        }
    })
    validateSelected = () => {
        let Difference_In_Time;
        let Difference_In_Days;
        let checkout = $(".checkout-input");
        $(".checkin-input").each((i, item) => {
            let date1 = $(item).val()
            let date2 = $(checkout[i]).val()
            date1 = date1.split(/\//);
            date1 = [date1[1], date1[0], date1[2]].join('/')
            date2 = date2.split(/\//);
            date2 = [date2[1], date2[0], date2[2]].join('/')

            Difference_In_Time = new Date(date2).getTime() - new Date(date1).getTime();
            Difference_In_Days = Difference_In_Time / (1000 * 3600 * 24);
            selected += Difference_In_Days

            if (date1 == '' && date2 == '') {
                open_alert2(error[1])
                return false;
            }
        })
        let check = '';
        $(".select-room").each(function(i, item) {
            if($(item).val() == "" || $(item).val() == undefined) {
                check = false;
            } else {
                check = true;
            }
        })
        if(!check) {
            open_alert2(error[6])
            return false;
        }
        let valid_hotel = true;
        $(".select-hotel").each((i, item) => {
            if ($(item).val() == null) {
                valid_hotel = false;
            }
        })

        if (valid_hotel == false) {
            open_alert2(error[3]);
            return false;
        }
        if (selected > maximum1) {
            open_alert2(error[2])
            selected = 0;
            return false;
        }
        return true;
    }


    // $(".select-hotel").change(function () {
    //     let option_hotel = `
    //         <option value="" selected disabled>Chọn khách sạn</option>
    //     `;
    //     let select_box = JSON.parse($(this).attr("data-select-box"));

    //     let target = $(this).attr("data-target");
    //     let select_hotel_parent = $(this).attr("data-parent-target");
    //     let checkin_input = $(this).attr("data-checkin");

    //     var room_pos = $(this).find(':selected').data('room-pos');
    //     let room_id = $(this).find(':selected').data('room-id');
    //     // let adult = $(this).find(':selected').data('adult');
    //     // let children = $(this).find(':selected').data('children');
    //     // let baby = $(this).find(':selected').data('baby');
    //     let data_room = $(this).find(':selected').data('room');

    //     selectRoom(JSON.parse($('option:selected', this).attr('data-rooms')), room_pos);

    //     $(".room" + room_pos).val(room_id)
    //     $(".adult" + room_pos).val(adult)
    //     $(".children" + room_pos).val(children)
    //     $(".baby" + room_pos).val(baby)

    //     // arr_hotel.push($(this).val())
    //     // console.log('arr_hotel: ' + arr_hotel)
    //     arr_hotel[select_box] = $(this).val()

    //     if (($("." + checkin_input)).val() != "") {
    //         $("." + select_hotel_parent).removeClass("disabled-hotel-parent")
    //         // disabled_hotel_box2(this)
    //         refresh_btn();
    //         // $(`.date-range-room-${pos + 1}`).click()

    //     }

    //     // list_hotel_id2 = list_hotel_id.filter((item) => !arr_hotel.includes(item))
    //     // $(".list_hotel").val(JSON.stringify(list_hotel));
    //     list_hotel.forEach(function (item, index) {
    //         // if(list_hotel_id2.includes(item.hotel_id))
    //         let adult = item.adult > 0 ? ' - ' + item.adult + ' người lớn' : '';
    //         let children = item.children > 0 ? ' - ' + item.children + ' ' + 'trẻ em từ 6-11 tuổi' : '';
    //         let baby = item.baby > 0 ? ' - ' + item.baby + ' em bé dưới 6 tuổi' : '';
            
    //         option_hotel += `
    //                 <option 
    //                     data-room-id="${item.room_id}" 
    //                     data-room-pos=${select_box + 1}
    //                     data-rooms='${JSON.stringify(item.rooms)}'
    //                     ${arr_hotel.includes(item.hotel_id) ? 'disabled' : ''} 
    //                     value='${item.hotel_id}'>
    //                     ${item.hotel_name}
    //                 </option>`
    //     })
    //     $("." + target).html(option_hotel)
    // })

    $(".btn-refresh").click(function () {
        location.reload();
    })

})

function dateToYMD(date) {
    var d = date.getDate();
    var m = date.getMonth() + 1;
    var y = date.getFullYear();
    return (m <= 9 ? '0' + m : m) + '-' + (d <= 9 ? '0' + d : d) + '-' + y;
}


function disabled_hotel_box(t) {
    $(t).parent().parent().parent().css({ "opacity": ".5", "pointer-events": "none", "transition": ".3s" })

}

function disabled_hotel_box2(t) {
    $(t).parent().parent().parent().parent().css({ "opacity": ".5", "pointer-events": "none", "transition": ".3s" })

}

function selectRoom(rooms, room_pos) {
    let html = '';
    let data_room;
    console.log(rooms);
    rooms.forEach(function(item, key) {
        html += `
            <option value='${item.id}'>${item.title}</option>
        `
    })

    console.log(html);
    $(".room-name-" + room_pos).html(html);

}

function refresh_btn() {
    $(".btn-refresh").slideDown();
}
$("document").ready(function() {
    if($("#dynamic-gallery-demo").length) {
        const $dynamicGallery = document.getElementById("dynamic-gallery-demo");
        const galleryHotel = JSON.parse($("#dynamic-gallery-demo").attr("data-image"));
        let dynamic;
        dynamic = galleryHotel.map(item => ({
            'src': '/' + item.image,
            'responsive': '/' + item.image,
            'thumb': '/' + item.image
        }))
        const dynamicGallery = window.lightGallery($dynamicGallery, {
          dynamic: true,
          plugins: [lgZoom, lgVideo, lgThumbnail],
          dynamicEl: dynamic
        });
        $dynamicGallery.addEventListener("click", () => {
          dynamicGallery.openGallery(0);
        });
    }

	$('#range_date_hotel').daterangepicker({
		// timePicker: true,
		// autoUpdateInput: true,
		minDate: new Date(),
		autoApply: true,
		startDate: $('#checkin-modal').attr('data-date'),
		endDate: $('#checkout-modal').attr('data-date'),
		locale: {
			format: 'DD/MM/Y',
			separator: ' - ',
		},
		minSpan: { days: 1 },
	}, function (start, end) {
		var s = start.format('Y-MM-DD');
		var e = end.format('Y-MM-DD');
		$('#checkin-modal').val(s);
		$('#checkout-modal').val(e);
	});

    function ChangeMonth(month)
    {
       var initialVal = $('.my-date-picker').datepicker('getDate')
       initialVal.setMonth(month - 1)

       $('.my-date-picker').datepicker('setDate', initialVal);

    }
	$('#range_date_hotel').change(function() {
        ChangeMonth($(this).data('daterangepicker').startDate.format('MM'))
	})
	let flag = 0
	$(".my-date-picker").datepicker({
		minDate: new Date(),
		beforeShowDay: function(date) {
			var date1 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#range_date_hotel").data('daterangepicker').startDate.format('MM/DD/YYYY'));
			var date2 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#range_date_hotel").data('daterangepicker').endDate.format('MM/DD/YYYY'));
			$("#checkin-modal").val($("#range_date_hotel").data('daterangepicker').startDate.format('YYYY-MM-DD'));
			$("#checkout-modal").val($("#range_date_hotel").data('daterangepicker').endDate.format('YYYY-MM-DD'));
			
			return [true, date1 && ((date.getTime() > date1.getTime())) && ((date.getTime() < date2.getTime())) ?  "dp-highlight" : date2 && ((date.getTime() == date2.getTime()) || (date.getTime() == date1.getTime()) || (date2 && date > date1 && date < date2)) ? 'dp-highlight-2' : ""];
		},
		onSelect: function(dateText, inst) {
			var date1 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#range_date_hotel").data('daterangepicker').startDate.format('MM/DD/YYYY'));
			var date2 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#range_date_hotel").data('daterangepicker').endDate.format('MM/DD/YYYY'));

			if (!flag) {
				$("#range_date_hotel").data('daterangepicker').setStartDate(formatDate(new Date(dateText)));
				$("#range_date_hotel").data('daterangepicker').setEndDate(formatDate(new Date(dateText)));

				$("#checkin-modal").val($("#range_date_hotel").data('daterangepicker').startDate.format('YYYY-MM-DD'));
				$("#checkout-modal").val($("#range_date_hotel").data('daterangepicker').endDate.format('YYYY-MM-DD'));

				
				flag = 1
			} else if(flag) {
				$("#checkin-modal").val($("#range_date_hotel").data('daterangepicker').startDate.format('YYYY-MM-DD'));
				$("#range_date_hotel").data('daterangepicker').setEndDate(formatDate(new Date(dateText)));
				flag = 0
			}
			if (date1 == date2) {
				flag = 1
			}
		}
	})
})

function formatDate(date) {
    var d = new Date(date),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();

    if (month.length < 2) 
        month = '0' + month;
    if (day.length < 2) 
        day = '0' + day;

    return [day, month, year].join('/');
}
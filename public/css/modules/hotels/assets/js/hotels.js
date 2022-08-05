$(document).ready(function () {
    $(document).on("click", ".btn-more-overview", function () {
        let txt = $(this).attr("data-less");
        let dom = `
        ${txt}
        <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 1L5 5L9 1" stroke="#002864" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        `
        $(".detail-overview").css({ 'max-height': 'inherit' })
        $(this).html(dom)
        $(this).addClass("btn-less-overview").removeClass("btn-more-overview");
    })
    $(document).on('click', '.btn-less-overview', function () {
        let txt = $(this).attr("data-more");
        let dom = `
        ${txt}
        <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 1L5 5L9 1" stroke="#002864" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        `
        $(".detail-overview").css({ 'max-height': '250px' })
        $(this).html(dom)
        $(this).addClass("btn-more-overview").removeClass("btn-less-overview")
    })
    // if($(".detail-overview").height() < 260) {
    //     $(".btn-more-overview").css("display", "none")
    // } else {
        
    // }
    let arrow_left = `
    <svg width="25" height="20" viewBox="0 0 25 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M24.1675 10H4.16748" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M9.99984 15.8333L4.1665 9.99996L9.99984 4.16663" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
    `
    let arrow_right = `
    <svg width="25" height="20" viewBox="0 0 25 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0.832519 10L20.8325 10" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M15.0002 4.16671L20.8335 10L15.0002 15.8334" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
    `
    $('#uu-dai, #list-restaurant, #list-meeting, #list-service').owlCarousel({
        loop: false,
        margin: 30,
        nav: true,
        dots: true,
        navText: [arrow_left, arrow_right],
        responsive: {
            0: {
                items: 1,
                margin: 10,
                stagePadding: 30
            },
            600: {
                items: 3
            }
        }
    })
    $('#list-room').owlCarousel({
        loop: false,
        nav: true,
        dots: true,
        navText: [arrow_left, arrow_right],
        autoplay:false,
        responsive: {
            0: {
                items: 1,
                margin: 10,
                stagePadding: 30,
            },
            600: {
                items: 3,
                margin: 30,
                touchDrag: false,
                mouseDrag: false,
            }
        }
    })
    // $(".service-etc-btn").click(function () {
    //     $(this).next().slideToggle({});
    //     if ($(".sign").hasClass("plus")) {
    //         $(".plus").removeClass("plus").addClass("minus")
    //         return;
    //     }
    //     if ($(".sign").hasClass("minus")) {
    //         $(".minus").removeClass("minus").addClass("plus")
    //         return;
    //     }
    // })

    $(".expand-btn").click(function () {
        if (!$(this).prev().before().hasClass("expand")) {
            $(this).prev().addClass("expand")
            $(this).children().addClass("fa-chevron-up").removeClass("fa-chevron-down")
        }
        else {
            $(this).prev().removeClass("expand")
            $(this).children().removeClass("fa-chevron-up").addClass("fa-chevron-down")
        }
    })

    let plusQna = `
    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect y="7" width="16" height="2" rx="0.5" fill="#008F9D" />
        <rect x="7" width="2" height="16" rx="0.5" fill="#008F9D" />
    </svg>
    `
    let minusQna = `
    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect y="7" width="16" height="2" rx="0.5" fill="white"/>
    </svg>
    
    `


    $(".plus-qna").click(function() {
        $(".more-info").slideUp()
        $('.bd-callout-info').removeClass("expand")
        $(".qna-btn").html(plusQna)
        let target = $(this).attr("data-target");
        if ($(target).css("display") === 'block') {
            $(target).slideUp();
            $(this).html(plusQna)
            $(this).addClass("plus-qna").removeClass("minus-qna");

        } else {
          $(target).slideDown();
          $(this).html(minusQna)
          $(this).parent().parent().addClass("expand")
        }
      })

    // $(".minus-qna").click(function() {
    //     $(this).html(plusQna)
    //     $(this).html(plusQna)
    //     $(this).addClass("plus-qna").removeClass("minus-qna");
    //     $(this).parent().next().slideUp()
    //     $(this).parent().parent().removeClass("expand")
    // })
    let plusRegulation = `
    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M6.36373 0.5C6.36373 0.223857 6.58759 0 6.86373 0H7.13646C7.4126 0 7.63646 0.223858 7.63646 0.5V13.5C7.63646 13.7761 7.4126 14 7.13646 14H6.86373C6.58759 14 6.36373 13.7761 6.36373 13.5V0.5Z" fill="#333333" />
        <path d="M0 6.86373C0 6.58759 0.223858 6.36373 0.5 6.36373H13.5C13.7761 6.36373 14 6.58759 14 6.86373V7.13646C14 7.4126 13.7761 7.63646 13.5 7.63646H0.5C0.223857 7.63646 0 7.4126 0 7.13646V6.86373Z" fill="#333333" />
    </svg>
    `
    let minusRegulation = `
    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 6.86373C0 6.58759 0.223858 6.36373 0.5 6.36373H13.5C13.7761 6.36373 14 6.58759 14 6.86373V7.13646C14 7.4126 13.7761 7.63646 13.5 7.63646H0.5C0.223857 7.63646 0 7.4126 0 7.13646V6.86373Z" fill="#333333" />
    </svg>
    `
    $(".regulation-btn").click(function () {
        if ($(this).children().hasClass("plus-regulation")) {
            $(this).children().html(minusRegulation)
            $(this).children().addClass("minus-regulation").removeClass("plus-regulation");
            $(this).next().slideToggle()
        } else if ($(this).children().hasClass("minus-regulation")) {
            $(this).children().html(plusRegulation)
            $(this).children().addClass("plus-regulation").removeClass("minus-regulation");
            $(this).next().slideToggle()
        }
    })

    $("#news").owlCarousel({
        loop: false,
        margin: 10,
        nav: true,
        navText: [arrow_left, arrow_right],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    })
    // $(".scrollTo").click(function () {
    //     let toID = $(this).attr('href');
    //     $('html, body').animate({
    //         scrollTop: $(`${toID}`).offset().top - 150
    //     });
    // });



    $(".menu-hotel li a[href^='#']").on('click', function (e) {

        // This sets the hash
        var target;
        target = this.hash;

        // Prevent default anchor click behavior
        e.preventDefault();

        // The grabs the height of my header
        var navOffset;
        // navOffset = $('#header').height();

        // Animate The Scroll
        $('html, body').animate({
            scrollTop: $(this.hash).offset().top - 145
        }, 0, function () {

            // Adds hash to end of URL
            return window.history.pushState(null, null, target);

        });

    });

    $(window).scroll(function () {
        var scrollDistance = $(window).scrollTop();

        $('.page-section').each(function (i) {
            if ($(this).position().top - 150 <= scrollDistance) {
                $('.active-menu').removeClass('active-menu');
                $('.scroll-to').eq(i).addClass('active-menu');
            }
        });
    }).scroll();

    $(".show-detail").click(function() {
        let images = JSON.parse($(this).attr('data-images'));
        let dom = '';
        let dom2 = '';
        images.forEach(item => {
            dom += `
            <div class="carousel-cell">
                <img src=${item.image}>
                <div class="title-image-carousel-main" style="position: absolute; bottom: 0px; left: 0px; width: 100%; background-color: #00000095">
                    <p class="mb-0 fw-bold" style="padding: 10px; color: white">${item.title}</p>
                </div>
            </div>
            `
            dom2 += `
            <div class="carousel-cell">
                <img src=${item.image}>
            </div>
            `
        })
        $(".carousel-main").html(dom)
        $(".carousel-nav").html(dom2)
        $("#services-box").on("hidden.bs.modal", function () {
            $("#services-box .modal-body").css({'opacity': 0})
            $('.carousel-main').flickity('destroy')
            $('.carousel-nav').flickity('destroy')
        });
        $('#services-box').on('shown.bs.modal', function(event) {
            $('.carousel-main').flickity({
                cellAlign: 'left',
                pageDots: false,
                prevNextButtons: false
            });
            // 2nd carousel, navigation
            $('.carousel-nav').flickity({
                asNavFor: '.carousel-main',
                prevNextButtons: false,
                cellAlign: 'left',
                contain: true,
                pageDots: false
            });

            $(".modal-body").css({'opacity': 1, 'transition': '.3s'})
        });
        let title = $(this).attr("data-title");
        $(".title-service").html(title);
        $(".sum").html($(this).attr("data-summary"));
        let dom3 = ``
        let all_services = JSON.parse($(this).attr("data-services"));
        all_services.forEach(item => {
            dom3 += `
            <div class="item-service">
                <div class="title">
                    ${item.image ? `<img src="${item.image}" alt="${item.image ? item.image : ''}" class="img-responsive">` : ''} 
                    ${item.service_name}
                </div>
                <div>${item.content.replace(/(\r\n|\n|\r)/gm, "")}</div>
            </div>
            `
        })
        $(".list-service").html(dom3)
    })

    $(".card-title, .image-box").click(function() {
        let images = JSON.parse($(this).attr('data-images'));

        let dom = '';
        let dom2 = '';
        images.forEach(item => {
            dom += `
            <div class="carousel-cell">
                <img src=${item.image}>
                <div class="title-image-carousel-main" style="position: absolute; bottom: 0px; left: 0px; width: 100%; background-color: #00000095">
                    <p class="mb-0 fw-bold" style="padding: 10px; color: white">${item.title}</p>
                </div>
            </div>
            `
            dom2 += `
            <div class="carousel-cell">
                <img src=${item.image}>
            </div>
            `
        })
        $(".carousel-main-room").html(dom)
        $(".carousel-nav-room").html(dom2)
        $('#room-box-modal').on('shown.bs.modal', function(event) {
            $('.carousel-main-room').flickity({
                cellAlign: 'left',
                pageDots: false,
                prevNextButtons: false
            });
            // 2nd carousel, navigation
            $('.carousel-nav-room').flickity({
                asNavFor: '.carousel-main-room',
                prevNextButtons: false,
                cellAlign: 'left',
                contain: true,
                pageDots: false
            });
            $("#room-box-modal .modal-body").css({'opacity': 1, 'transition': '.3s'})
        });

        let title = $(this).attr("data-title");
        $(".title-service").html(title);
        if($(this).attr("data-summary")) {
            $("#room-box-modal .sum").html($(this).attr("data-summary"));
        } else {
            $("#room-box-modal .sum").remove()
        }
        let dom3 = ``
        if($(this).attr("data-services") !== null || $(this).attr("data-services") !== '') {
            let all_services = JSON.parse($(this).attr("data-services"));

            if(all_services != null && all_services.length > 0) {
                all_services.forEach(item => {
                    dom3 += `
                    <div class="item-service" style="display: inline-block">
                        <div>
                            ${item.image ? `<img style="width: 15px; height: 15px; object-fit: contain; margin-right: 5px" src="${item.image}" alt="${item.image ? item.image : ''}" class="img-responsive">` : ''} 
                            ${item.title}
                        </div>
                    </div>
                    `
                })
            }

        }
        $(".list-service").html(dom3)

    })
    $("#room-box-modal").on("hidden.bs.modal", function () {
        $("#room-box-modal .modal-body").css({'opacity': 0})
        $('.carousel-main-room').flickity('destroy')
        $('.carousel-nav-room').flickity('destroy')
    });

    $(".btn-order-modal").click(function() {
        $(".wrap-loading").css("display", "flex")
    })


    $(".btn-order-room").click(function() {
        let room_id = $(this).attr("data-room-id");
        $("#room_id").val(room_id);
    })

    $(".order-room-now").click(function() {
        $("#room_id").val("");
    })
})


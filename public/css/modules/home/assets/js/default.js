

$(document).ready(function () {
    $('#uu-dai, #combo').owlCarousel({
        loop:true,
        margin:20,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:3
            }
        }
    })
    $('#diem-den').owlCarousel({
        loop:true,
        margin:30,
        nav:true,
        autoplay:true,
        smartSpeed:1500,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:3
            }
        }
    })
    // if (screen && screen.width > 768) {
    //     gsap.registerPlugin(ScrollTrigger);
    //     let t1 = gsap.timeline({
    //         scrollTrigger: {
    //             trigger: ".block-sale",
    //             start: "top 50%",
    //             toggleActions: "play pause resume reverse"
    //         }
    //     });
    //     t1.from(".block-sale .h2_title", { y: 100, opacity: 0, duration: 1 });

    //     let t2 = gsap.timeline({
    //         scrollTrigger: {
    //             trigger: ".block-address",
    //             start: "top 50%",
    //             toggleActions: "play pause resume reverse"
    //         }
    //     });
    //     t2.from(".block-address .h2_title", { y: 100, opacity: 0, duration: 1 });

        // let t3 = gsap.timeline({
        //     scrollTrigger: {
        //         trigger: ".block-area",
        //         start: "top 50%",
        //         toggleActions: "play pause resume reverse"
        //     }
        // });
        // t3.from(".block-area .h2_title", { y: 100, opacity: 0, duration: 1 });

        // let t4 = gsap.timeline({
        //     scrollTrigger: {
        //         trigger: ".block-news",
        //         start: "top 50%",
        //         toggleActions: "play pause resume reverse"
        //     }
        // });
        // t4.from(".block-news .h2_title", { y: 100, opacity: 0, duration: 1 })
        //     .from(".block-news .item1", { x: -100, opacity: 0, duration: 1 },"-=1")
        //     .from(".block-news .item2", { x: 100, opacity: 0, duration: 1 },"-=1");
    // }
});







$(document).ready(function () {
    $(".multiples, .not-multiples").click(function() {
        $(".wrap-loading").removeClass("d-none")
    })
    $('#uu-dai, #diem-den').owlCarousel({
        loop:true,
        margin:20,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:3
            }
        }
    })
});






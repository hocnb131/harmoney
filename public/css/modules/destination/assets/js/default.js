$(document).ready(function() {
    var theme_lang = $('#lang').val();
    $(".seemore").click(function() {
        if($(this).prev().hasClass("active")) {
            $(this).prev().removeClass("active")
            if(theme_lang == 'en'){
                $(this).html("View more")
            } else {
                $(this).html("Xem thêm")
            }
        } else {
            $(this).prev().addClass("active")
            if(theme_lang == 'en'){
                $(this).html("View less")
            } else {
                $(this).html("Thu gọn")
            }
        }
    })

    $(".img-box, .img-box-2").click(function(){
        $(".wrap-loading").removeClass("d-none")
    }) 
})
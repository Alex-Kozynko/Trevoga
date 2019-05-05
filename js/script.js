$(document).ready(function(){
	$(".burger").click(function(){
		$("nav").toggleClass("open");
        if ($("nav").offset().top > 1) {
            $("nav .logo").toggleClass("off");
        }
	});
    new WOW().init();
    var width=[];
    var element = $.makeArray($(".TV .item img"));
    $(element).each(function(){
        width=$(this).width();
        if($(window).width() < 1001) {
            $(this).width(width/5 + "vw");
        } else {
            $(this).width(width/19.2 + "vw");
        };
    });
    $(".slider").slick({
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 3,
        variableWidth: true,
        arrows: true, 
        dots: true,
        centerMode: true,
        initialSlide: 1
    });
    $(".more .year .item").click(function(e){
        $(".more .year .item .dots").removeClass("active");
        $(".slider2 .item").removeClass("active");
        $(this).find(".dots").addClass("active");
        e.preventDefault();
        var slideIndex = $(this).index()+1;
        $(".slider2 .item:nth-child("+slideIndex+")").addClass("active");
    });
    var i = $(".slider2 .active").index()+1;
    var a = $('.slider2 .item').length;
    $(".more .year .next").click(function(){
        i = $(".slider2 .active").index()+1;
        if (i < a){
            $(".slider2 .item:nth-child("+i+")").removeClass("active");
            $(".more .year .item:nth-child("+i+") .dots").removeClass("active");
            i++;
            $(".slider2 .item:nth-child("+i+")").addClass("active");
            $(".more .year .item:nth-child("+i+") .dots").addClass("active");
        } else {
            
        }
    });
    $(".more .year .prev").click(function(){
        i = $(".slider2 .active").index()+1;
        if (i > 1){
            $(".slider2 .item:nth-child("+i+")").removeClass("active");
            $(".more .year .item:nth-child("+i+") .dots").removeClass("active");
            i--;
            $(".slider2 .item:nth-child("+i+")").addClass("active");
            $(".more .year .item:nth-child("+i+") .dots").addClass("active");
        } else {
            
        }
    });
    $("main .timetable .container .week .item").click(function() {
        $("main .timetable .container .week .item").removeClass("active");
        $(this).addClass("active");
        var week = $(this).index();
        $("main .timetable .container .text:nth-child(1)").css("margin-left", ""+ -100 * week + '%' +"");
    });
    var width=[];
    var element = $.makeArray($("main .composition .container .item img"));
    $(element).each(function(){
        width=$(this).width();
        if($(window).width() < 1001) {
            
        } else {
            $(this).width(width/19.2 + "vw");
        };
    });
    $(".form-trigger").click(function(){
        $(".popup-forma").addClass("active");
        $("body").toggleClass("scroll");
    });
    $(".popup-forma .close-bg, .popup-forma .close").click(function(){
        $(".popup-forma").removeClass("active");
        $("body").toggleClass("scroll");
    });
    $(".more>.button").click(function(){
        $(".more .container").slideDown();
        $(this).addClass("off");
    });
    $("body").on("click",".open a", function (event) {
      //отменяем стандартную обработку нажатия по ссылке
      event.preventDefault();

      //забираем идентификатор бока с атрибута href
      var id = $(this).attr('href'),

      //узнаем высоту от начала страницы до блока на который ссылается якорь
      top = $(id).offset().top;

      //анимируем переход на расстояние - top за 1500 мс
      $('body,html').animate({scrollTop: top}, 1500);
    });
    if ($("nav").offset().top > 1) {
        $("nav .logo").addClass("off");
    }
    $(window).on('scroll', function() {
        if ($("nav").offset().top > 1) {
            $("nav .logo").addClass("off");
        } else {
            $("nav .logo").removeClass("off");
        };
    });
});
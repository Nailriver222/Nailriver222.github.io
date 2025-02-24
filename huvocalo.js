$('.slider').slick({
		autoplay: true,
		infinite: true,
		speed: 1000,
		slidesToShow: 3,
		slidesToScroll: 1,
		prevArrow: '<div class="slick-prev"></div>',
		nextArrow: '<div class="slick-next"></div>',
		centerMode: true,
		variableWidth: true,
		dots: true,
		responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
	});

$('.burger').click(function () {
	$('nav').toggleClass('active');
	$('main').toggleClass('active');
	$('.burger').toggleClass('active');
});
$('main').click(function () {
	$('nav').removeClass('active');
	$('main').removeClass('active');
	$('.burger').removeClass('active');
});

function PageTopAnime() {
	var scroll = $(window).scrollTop();
	if (scroll >= 200){
		$('#page-top').removeClass('DownMove');
		$('#page-top').addClass('UpMove');
	} else {
		if($('#page-top').hasClass('UpMove')){
			$('#page-top').removeClass('UpMove');
			$('#page-top').addClass('DownMove');
		}
	}
}
$(window).scroll(function () {
	PageTopAnime();
});

$(window).on('load', function () {
	PageTopAnime();
});

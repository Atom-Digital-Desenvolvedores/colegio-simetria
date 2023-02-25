$(function(){

	$(window).scroll(function(){
		if($(this).scrollTop()>110){
			$('.wsg-header').each(function(){
				$(this).addClass("wsg-header_fixo")
			}
		)}else{
			$('.wsg-header').each(function(){
				$(this).removeClass("wsg-header_fixo")
			})
		};
	});
	$(window).scroll();
	
	AOS.init();


	$('a.wsg-04_box').click(function(){

		var $bool = false;
		var interval = setInterval(function(){
			if($bool){
				clearInterval(interval);
			}
			if(!$('[aria-hidden="true"] .slick-slide:nth-child(2)').hasClass('slick-active')){
				$('[aria-hidden="true"] .slick-next').click();
				console.log(1);
			}else{
				$('[aria-hidden="true"] .slick-prev').click();
				console.log(2);
				if($('[aria-hidden="true"] .slick-slide:first-child').hasClass('slick-active')){
					$bool = true;
				}

			}
		}, 300)
		

		
	});

	$('#particles').particleground({
		dotColor: '#ffffff52',
		lineColor: '#ffffff52'
	  });
	  $('.intro').css({
		  'margin-top': -($('.intro').height(100) / 2)
	  });
});



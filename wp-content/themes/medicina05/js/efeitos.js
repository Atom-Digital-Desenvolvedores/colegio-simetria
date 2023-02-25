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
			if(!$('[aria-hidden="true"] .slick-dots li:last-child').hasClass('slick-active')){
				$('[aria-hidden="true"] .slick-dots li:last-child').click();
				console.log(1);
			}else{
				$('[aria-hidden="true"] .slick-dots li:first-child').click();
				console.log(2);
				if($('[aria-hidden="true"] .slick-dots li:first-child').hasClass('slick-active')){
					$bool = true;
				}

			}
		}, 100)
		

		
	});
});



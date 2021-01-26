$(function(){
    var mySwiper = new Swiper('.swiper-container', {
		// Optional parameters
		direction: 'horizontal',
		loop: true,
	  
		// If we need pagination
		pagination: {
		  el: '.swiper-pagination',
		  clickable:true
		}
	});

	/* PC 서브 popup */

	$('a[href="#"]').click(function(e){
		e.preventDefault();
	});
	
	$('.advice_list_01').click(function(e){
		e.preventDefault();
		$('.advice01_popup').addClass('active');
		});
		$('.advice_list_01 form .close').click(function(){
			$('.advice01_popup').removeClass('on');
		});
		$('.advice_list_02').click(function(e){
			e.preventDefault();
			$('.advice02_popup').addClass('active');
		});
		$('.advice_list_02 form .close').click(function(){
			$('.advice02_popup').removeClass('on');
		});
		$('.account_table .account_fee > a').click(function(e){
			e.preventDefault();
			$('.account_fee_popup').addClass('active');
		});
		$('.pop_inner .close').click(function(){
			$('.account_fee_popup').removeClass('on');
		});
		// $('.sub_menu_list > li').click(function(){
		//     $('.sub_menu_list .sub_sub_menu li').css({display:'block'});
		// })

		var left_nav_flag = 0;

		/* PC 서브 탭 메뉴 */

		$('.sub_menu_list li.on').children('.sub_sub_menu').show();
		

		$('.dep1_btn').click(function(){			
			
			$('.dep1_btn').parent('li').siblings().removeClass('on');
			$('.dep1_btn').siblings('.sub_sub_menu').children('li').removeClass('active');

			var par_li = $(this).parent('li');
			$(par_li).toggleClass('on');
			
			$(this).siblings('ul').slideToggle(500);

		});

		/* 모바일 respon메뉴 */
		$('.main_menu').click(function(){
			$('.re_main_menu').toggleClass('active');
		});
		$('.re_main_menu_list .main_title a').click(function(e){
			e.preventDefault();
			
			$('.re_main_menu_list .main_title a').parent().siblings('.sub_sub_menu').css({display:'none'});
			$(this).parent().siblings('.sub_sub_menu').css({display:'block'});
			$(this).parent().parent().addClass('on');
			$(this).parent().parent().siblings().removeClass('on');
			$(this).siblings('.re_main_down').children('.nomal_img').css({display:'none'});
			$(this).parent().parent().siblings().children().children().children('.nomal_img').css({display:'block'});
			$(this).siblings('.re_main_down').children('.on_img_none').css({display:'block'});
			$(this).parent().parent().siblings().children().children().children('.on_img_none').css({display:'none'});
		});

});
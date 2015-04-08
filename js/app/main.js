var desktop = false;
var isIpad = (/iPad/).test(navigator.userAgent);;
var defaultBG = '#0b5592'
var	wH = window.innerHeight;
var wW = window.innerWidth;

if(wW > 767){
	desktop = true; 
 }
//dependant variable for showNav()
var mobileNav = false;
//Hour Feature
function imgTime()
{
	var _o = '-';
	var _hrs;
	var _d = new Date();	
	if(!override_time) _hrs = _d.getHours();
	else _hrs = set_time;
	var morning = (_hrs>=6 && _hrs<=11) ? true : false;
	var day = (_hrs>=12 && _hrs<=16) ? true : false;
	var evening = (_hrs>=17 && _hrs<=20) ? true : false;
	var night = (_hrs>=21 || _hrs<=5) ? true : false;
	if(morning || day)
	{
		_o = '';
	} else {
		_o = _o + 'night';
		defaultBG = '#050a1d';
	}
	
	
	return _o;
}
var img_output = imgTime();

define('jquery', [], function() {
    return jQuery;
});

require(["jquery", "bootstrap","vegas","colorbox-min","resizestop"], function($) {
	
	// prevent links without a real href from refreshing page
	$('a[href="#"]').click(function(e){
		e.preventDefault();
	});
	
	/*
	 if(wW > 767){
		desktop = true; 
	 }
	*/
	
	var bodyid = $('body').attr('id');
	var bgimg = '';
	var defaultImg = false;
	if(bodyid != undefined){
		switch(bodyid) {
			case 'pg_about':
				bgimg = '/img/bg_aboutus.jpg';
				break;
			case 'pg_capabilities':
				bgimg = '/img/bg_capabilities.jpg';
				break;
			case 'pg_work':
				bgimg = '/img/bg_solutions.jpg';
				break;
			case 'pg_experience':
				bgimg = '/img/bg_experience.jpg';
				break;
			case 'pg_contact':
				bgimg = '/img/bg_contact.jpg';
				break;
			case 'pg_clientlounge':
				bgimg = '/img/bg_clientlounge.jpg';
				break;
			case 'pg_insurance':
			case 'pg_insurance_program':
			case 'pg_insurance_insight':
			case 'pg_insurance_products':
			case 'pg_insurance_agents':
			case 'pg_insurance_carriers':
			case 'pg_insurance_affiliates':
			case 'pg_insurance_experience':
				bgimg = '/img/bg_insurance_home.jpg';
				break;
			case 'pg_consulting':
			case 'pg_about':
			case 'pg_consulting_experience':
			case 'pg_services':
			case 'pg_auditing':
				bgimg = '/img/bg_consulting.png';
				break;
			default:
				if(wH<=600) img_output = img_output + '-600';
				bgimg = '/img/bg_main_home'+img_output+'.jpg';
				defaultImg = true;
		}
	}
	
	//===IF/THEN STATEMENTS===
	
	//CHECK IF IPAD
	//isIpad = (/iPad/).test(navigator.userAgent);
	
	//IS NOT HOMEPAGE ON IPAD; ELSE HOMEPAGE ON ANY DEVICE
	/*if(!defaultImg && isIpad)
	{
		$('body').append('<div style="background-image:url(' + bgimg + ')" id="ipad-bg" />');
	} else {
		$('html').css({'background-image': 'url('+bgimg+') '});;
	}*/
	var sH = screen.height;
	if(isIpad || !desktop)	$('body').append('<div style="background-image:url(' + bgimg + ');height:' + sH + 'px" id="global-bg"></div>');
	else $('html').css({'background-image': 'url('+bgimg+') '});
			
	//IF WINDOW WIDTH IS LESS THAN 770PX
	if(wW<770) $('#home_html').css('background-color',defaultBG);
	
	//IS NOT HOME PAGE ON DESKTOP
	if(!defaultImg && desktop) $('html').css({'background-attachment':'fixed'});
	
	//CLONES SUBNAV ON ANY DEVICE BUT DESKTOP
	if(!desktop)
	{
		var _e = checkElement('.active_sub_nav');
		if(_e.exists)
		{
			_e.obj.removeClass('active_sub_nav');
			_e = $(_e.obj).clone();
			$("#side_nav").append(_e);
			_e.addClass('visible-phone');
			_e.addClass('active_sub_nav');
			_e.removeClass('sub_nav');
		}
		//$('#main_nav').css('height',wH+'px');
	}
	
	//===DEFINE FUNCTIONS===
	
	//CALCULATES OVERFLOW HEIGHT OF CONTAINER
	function setContentHeight()
	{
		wH = window.innerHeight;
		var _e = checkElement('.active_sub_nav');
		var _h = 0;
		var _m = 0;
		alert(wW + ', ' + wH);
		if(_e.exists)
		{
			_h = _e.obj.height();
			_m = _m + _h;
		}
		$('.container').css('height',wH+'px');
		//$('#side_nav,html,body').css('width',wW+'px');
		$('#main_nav').css('height',wH+'px');
		$('#main_content').css('margin-top',_m+'px');
	}
	
	//RETURNS TRUE IF ELEMENT EXISTS
	function checkElement(e)
	{
		//This is a pretty lame function
		e = $(e);
		if(e.length)
		{
			var _o = {exists:true,obj:e}
			return _o;
		} else {
			return false;
		}
	}
	
	//===DECLARE FUNCTIONS===
	init_accordion();
});
	function active_nav_init(version){
	
			var active_nav = $('.nav .active');
			var offset = active_nav.offset();
			if(version == 'mobile'){
				var body_bg = $('body');
				var body_bg_img = body_bg.css('background-image');
			} else {
				var body_bg = $('img.vegas-background');
				var body_bg_img = 'url('+body_bg.attr('src')+')';
			}
			
			var top = 30;
			if(desktop){
					top = offset.top;
			}
			var active_bg_ps = '-'+offset.left+'px -'+top+'px';
			active_nav.find('a').css( {'background-image' : body_bg_img, 'background-position' : active_bg_ps, 'background-size' : body_bg.width()+'px' });
			
			 $(window).bind('resizestop', function (e) {
				active_nav_init();
			});
	}
		
	function interactive_arrow_nav(){
		$('#interactive_content').find('.arrow-nav').first().find('li:first-child').addClass('active');
		var last_li;
		$('.arrow-nav > ul > li').hover(
			function(){
				var currli = $(this); //Current LI Hovered
				if(last_li)
				{
					if(currli!=last_li) last_li.removeAttr('class');
				} else {
					$('.arrow-nav li.active').removeAttr('class');
				}
				currli.addClass('active');
				last_li = currli;
			},
			function(){
				return false;
			}
		);
	}
	
	function init_accordion(){
		$('.accordion').on('hide', function(){
			$(this).find('.active').removeClass('active');
			$(this).find('.icon-minus').removeClass('icon-minus').addClass('icon-plus');
			
		});
		$('.accordion').on('shown', function(){
			$(this).find('.in').prev().addClass('active').find('.icon-plus').removeClass('icon-plus').addClass('icon-minus');
		});
	}
	
	//POPS UP MOBILE NAVIGATION
	function showNav()
	{
		mobileNav = !mobileNav;
		if(mobileNav)
		{
			$("#side_nav").addClass('show-nav');
			$('html,body').css('overflow','hidden');
		} else {
			$('#side_nav').removeClass('show-nav');
			$('html,body').css('overflow','auto');
		}
	}
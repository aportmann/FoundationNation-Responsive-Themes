/* --------------------------------------------------
* Theme Credits
* Theme FoundationNation developed by David AE Levy
* Title of Work: FoundationNation Theme for GetSimple MCMS
* Attribute work to name: David AE Levy
* Attribute work to URL: http://www.webdevandphoto.com
* Source work URL: http://www.webdevandphoto.com
* More permissions URL: http://www.levyimage.com
* Format of work: Multiple formats
* Copyright 2013, David AE Levy - http://www.webdevandphoto.com + http://www.levyimage.com
* Released under the Creative Commons Attribution-NonCommercial 3.0 Unported License.
* To view a copy of this license, visit http://creativecommons.org/licenses/by-nc/3.0/
* According to the license agreement you must keep my attributions intact on this theme and must stay intact both during and after any alterations you make to the theme
* Attribution must be as follows in theme footer: Theme by <a href="http://www.webdevandphoto.com" >WD&amp;P</a>
* This massive comment block should also be left intact and unaltered.
* I ask if you make drastic changes to the theme please append your credits after my footer attribution so people know you edited the theme because I don't want credit for work I didn't do.
* thank you and I hope you enjoy my theme!
----------------------------------------- */
/* ------------------------------------------------------------------------
* Image Fade
* ------------------------------------------------------------------------- */  
(function(){$(document).ready(function(){});$(window).bind("load",function(){var t=$('[class^="attachment"]').length,i=0;var init=setInterval(function(){$('[class^="attachment"]').eq(i).fadeIn(500);i++;if(i==t){clearInterval(init);delete init}},200)})})();
/* ------------------------------------------------------------------------
* Image Hover
* ------------------------------------------------------------------------- */
(function(){$(document).ready(function(){$('.preload').hover(function(){$(this).children().first().children().first().stop(true);$(this).children().first().children().first().fadeTo('normal',.90)},function(){$(this).children().first().children().first().stop(true);$(this).children().first().children().first().fadeTo('normal',0)})})})();
/* ------------------------------------------------------------------------
*Initialize Orbit
* ------------------------------------------------------------------------- */
$(window).load(function(){
$("#featured").orbit({
	animation: 'fade',
	animationSpeed: 1200,
	timer: 'true',
	resetTimerOnClick: 'false',
	advanceSpeed: 4800,
	pauseOnHover: 'true',
	startClockOnMouseOut: 'true',
	startClockOnMouseOutAfter: 200,
	directionalNav: 'true',
	captions: 'true',
	captionAnimation: 'slideOpen',
	captionAnimationSpeed: 1200,
	bullets: 'true',
	bulletThumbs: 'true'	
	});
});
/* ------------------------------------------------------------------------
*Initialize prettyPhoto use a rel prettyPhoto
*Replace facebook link, title, and fb page image link (get from badge) with yours.
* ------------------------------------------------------------------------- */
$(document).ready(function(){
$("a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',theme:'light_rounded', social_tools:'<div class="pp_social"><a href="<?php echo FACEBOOK; ?>" target="_TOP" title="Levy Image"><img src="<?php get_theme_url(); ?>/images/facebookbadge.png" style="border: 0px; margin-top:50px; display:block;" /></a></div>'});
});
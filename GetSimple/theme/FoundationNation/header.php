<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
* @File: 		header.php
* @Package:		GetSimple
* @Action:		FoundationNation theme for GetSimple MCMS
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
*****************************************************/
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" > <!--<![endif]-->
<html>
<head>
	<!-- 
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
		-->
	<!-- Site Title -->
	<title><?php get_page_clean_title(); ?> &lt; <?php get_site_name(); ?></title>
	<?php get_header(); ?>
    <!-- Some robots are good and we want those ones to crawl here. Block bad ones via .htaccess -->
	<meta name="robots" content="index, follow" />
	<meta charset="utf-8">
	<link href="<?php get_theme_url(); ?>/style.css" rel="stylesheet">
    <!-- Include all other additional styles in this css file here -->
	<link href="<?php get_theme_url(); ?>/css/app.css" rel="stylesheet">
    <!-- Trick to use php to declare style images directly instead of via relative in external CSS -->
    <style type="text/css">
	.orbit-wrapper span.rotator { display: block; width: 40px; height: 40px; position: absolute; top: 0; left: -20px; background: url('<?php get_theme_url(); ?>/images/foundation/orbit/rotator-black.png') no-repeat; z-index: 3; }
	.orbit-wrapper span.mask.move { width: 40px; left: 0; background: url('<?php get_theme_url(); ?>/images/foundation/orbit/timer-black.png') repeat 0 0; }
	.orbit-wrapper span.pause { display: block; width: 40px; height: 40px; position: absolute; top: 0; left: 0; background: url('<?php get_theme_url(); ?>/images/foundation/orbit/pause-black.png') no-repeat; z-index: 4; opacity: 0; }
	.orbit-wrapper span.pause.active { background: url('<?php get_theme_url(); ?>/images/foundation/orbit/pause-black.png') no-repeat 0 -40px; }
	.orbit-wrapper .slider-nav span.right { background: url('<?php get_theme_url(); ?>/images/foundation/orbit/right-arrow.png'); background-size: 100%; right: 0; }
	.orbit-wrapper .slider-nav span.left { background: url('<?php get_theme_url(); ?>/images/foundation/orbit/left-arrow.png'); background-size: 100%; left: 0; }
	.lt-ie9 .orbit-wrapper .slider-nav span.right { background: url('<?php get_theme_url(); ?>/images/foundation/orbit/right-arrow-small.png'); }
	.lt-ie9 .orbit-wrapper .slider-nav span.left { background: url('<?php get_theme_url(); ?>/images/foundation/orbit/left-arrow-small.png'); }
	ul.orbit-bullets li { float: left; margin-left: 5px; cursor: pointer; color: #999999; text-indent: -9999px; background: url('<?php get_theme_url(); ?>/images/foundation/orbit/bullets.jpg') no-repeat 4px 0; width: 13px; height: 12px; overflow: hidden; }
	<!-- let us avoid doing this with prettyPhoto because there is just too damn many links -->
    </style>
    <!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- declare your standard Favicon -->
	<link rel="Shortcut Icon" type="image/x-icon" href="<?php get_theme_url(); ?>/images/favicons/favicon.ico" />
    <!-- For third-generation iPad with high-resolution Retina display as well as for iPhone with high-resolution Retina display: -->
	<link rel="apple-touch-icon" sizes="144x144" href="<?php get_theme_url(); ?>/images/favicons/touch-icon-ipad-retina.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php get_theme_url(); ?>/images/favicons/touch-icon-iphone-retina.png">
	<!-- For first- and second-generation iPad: -->
	<link rel="apple-touch-icon" sizes="72x72" href="<?php get_theme_url(); ?>/images/favicons/touch-icon-ipad.png">
	<!-- For iPhone and iPod touch. Available for iOS 2.0 and later: -->
	<link rel="apple-touch-icon" sizes="57x57" href="<?php get_theme_url(); ?>/images/favicons/apple-touch-icon-precomposed.png">
    <!-- Inlcude a Google Font or Fonts of your choice -->
    <?php if (defined('WEBFONT')) { ?>
	<link href='http://fonts.googleapis.com/css?family=<?php echo WEBFONT; ?>' rel='stylesheet' type='text/css'/> 
    <!-- Or if you want you can use this javascript to pull in your WebFont but you would need to manually enter your fonts below or add php and edit the theme plugin
    <script type="text/javascript">
	*  WebFontConfig = {
	*    google: { families: [ 'Source+Sans+Pro::latin', 'Droid+Sans::latin', 'Open+Sans::latin' ] }
	*  };
	*  (function() {
	*    var wf = document.createElement('script');
	*    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
	*      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
	*    wf.type = 'text/javascript';
	*    wf.async = 'true';
	*    var s = document.getElementsByTagName('script')[0];
	*    s.parentNode.insertBefore(wf, s);
	*  })(); </script> -->
	<?php } ?>

	
	<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]--> 
	
	<!--[if lt IE 7 ]>
    <script src="<?php get_theme_url(); ?>/js/dd_belatedpng.js"></script>
    <script> DD_belatedPNG.fix('img, .png_bg'); //fix any <img> or .png_bg background-images </script>
	<![endif]-->
	
    <!-- This theme will break without this. see file comments for details -->
	<script type="text/javascript" src="<?php get_theme_url(); ?>/js/foundation.min.js"></script>

</head>
<body id="<?php get_page_slug(); ?>" class="off-canvas" style="zoom: 1;" >
  <!-- ZURBar. This is very temperamental so be careful on what you change here unless you redid all the required CSS -->
  <div class="container top-bar home-border">
    <div class="attached">
      <div class="name" onclick="void(0);">
		<span>
        <span id="shortsitename">
        <?php if (defined('SHORTSITENAME')) { ?>
		<?php echo SHORTSITENAME; ?>&nbsp;
		<?php }
		else { ?>
		FoundationNation&nbsp;
		<?php }
		 ?>
        </span>
        <a href="#" class="toggle-nav"></a>
        </span>
  		</div>
		<!-- Here is our navigation -->
  		<ul class="right">
		<?php get_navigation(return_page_slug()); ?>
  		</ul>
  	</div>
  </div>

  <!-- INSERT MEGA DROP DOWN HERE. Here comes the sexy part. Hidden by CSS unless toggled -->
  <div class="container" id="megaDrop">
  <div class="mobile-main-nav-padding">
    <div class="row top">
      <div class="eight columns">
      	<!-- logo/sitename -->
      	<a href="<?php get_site_url(); ?>"><img src="<?php get_theme_url(); ?>/images/logo.png" title="<?php get_site_name(); ?>" alt="<?php get_site_name(); ?>" /></a><br />
		<!-- site slogan -->
        <h4 align="center" id="slogan">
		<?php if (defined('SLOGAN')) { ?>
		<?php echo SLOGAN; ?>
		<?php }
		else { ?>
		<?php get_site_name(); ?>
		<?php }
		 ?>
         </h4>
      </div>
      <div class="four columns">
        <div class="right links">
          <a href="<?php if (defined('ABOUTPAGE')) { ?><?php echo ABOUTPAGE; ?><?php }	else { ?>#<?php } ?>">About</a> | <a href="<?php if (defined('BLOGPAGE')) { ?><?php echo BLOGPAGE; ?><?php }	else { ?>#<?php } ?>"> Blog </a> | <a href="<?php get_site_url(); ?>/sitemap.xml">Sitemap</a>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="tablet-padding">
        <div class="three columns property" id="services">
          <a href="#">
            <h4>Mauris Nunc</h4>
            <p>Duis a lorem lorem. Proin rutrum ultricies leo sit amet malesuada. Nam tellus lorem, rutrum et eleifend ac, posuere non.</p>
            <span>Vestibulum ante ipsum. →</span>
          </a>
        </div>
        
        <div class="show-on-phones"></div>
        <div class="three columns property" id="foundation">
          <a href="#">
            <h4>Integer Pulvinar</h4>
            <p>Praesent eget molestie erat. Aenean egestas magna a urna porta blandit. Donec dui elit, iaculis sed gravida a, cursus a.</p>
            <span>Duis bibendum porta →</span>
          </a>
        </div>
        <div class="show-on-phones"></div>
        <div class="three columns property" id="apps">
          <a href="#">
            <h4>Sed Posuere</h4>
            <p>Sed in metus ligula, in blandit nisi. Maecenas interdum, mauris nec rutrum adipiscing, erat felis accumsan velit, eu feugiat est.</p>
            <span>Aliquam odio mi →</span>
          </a>
        </div>
        
        <div class="show-on-phones"></div>
        <div class="three columns property" id="expo">
          <a href="#">
            <h4>Eros Eu</h4>
            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis malesuada elit eu quam faucibus ullamcorper. Nam.</p>
            <span>Donec vitae enim →</span>
          </a>
        </div>
      </div>
    </div>    
  </div>
</div>
  <!-- end the fabled ZURBar -->
	<!-- Header. Does not need to be named header... I just went with it though. -->
	<div id="header">
    <!-- Social Links -->
	<div id="socialsiterow" class="row">
	<!-- Social Media URLs are set within the themes plugin -->
	<?php if (defined('FACEBOOK')) { ?>
	<a href="<?php echo FACEBOOK; ?>"><img src="<?php get_theme_url(); ?>/images/facebook.png" width="24" height="24" title="<?php echo FACEBOOK; ?>" alt="Facebook" /></a>
	<?php } ?>
    <?php if (defined('GOOGLEPLUS')) { ?>
	<a href="<?php echo GOOGLEPLUS; ?>"><img src="<?php get_theme_url(); ?>/images/googleplus.png" width="24" height="24" title="<?php echo GOOGLEPLUS; ?>" alt="Google Plus" /></a>
	<?php } ?>
	<?php if (defined('TWITTER')) { ?>
	<a href="<?php echo TWITTER; ?>"><img src="<?php get_theme_url(); ?>/images/twitter.png" width="24" height="24" title="<?php echo TWITTER; ?>" alt="Twitter" /></a>
	<?php } ?>
	<?php if (defined('LINKEDIN')) { ?>
	<a href="<?php echo LINKEDIN; ?>"><img src="<?php get_theme_url(); ?>/images/linkedin.png" width="24" height="24" title="<?php echo LINKEDIN; ?>" alt="Linkedin" /></a>
	<?php } ?>
	<?php if (defined('TUMBLR')) { ?>
	<a href="<?php echo TUMBLR; ?>"><img src="<?php get_theme_url(); ?>/images/tumblr.png" width="24" height="24" title="<?php echo TUMBLR; ?>" alt="Tumblr" /></a>
	<?php } ?>
	<?php if (defined('INSTAGRAM')) { ?>
	<a href="<?php echo INSTAGRAM; ?>"><img src="<?php get_theme_url(); ?>/images/instagram.png" width="24" height="24" title="<?php echo INSTAGRAM; ?>" alt="Instagram" /></a>
	<?php } ?>
    <?php if (defined('YOUTUBE')) { ?>
	<a href="<?php echo YOUTUBE; ?>"><img src="<?php get_theme_url(); ?>/images/youtube.png" width="24" height="24" title="<?php echo YOUTUBE; ?>" alt="YouTube" /></a>
	<?php } ?>
    <?php if (defined('VIMEO')) { ?>
	<a href="<?php echo VIMEO; ?>"><img src="<?php get_theme_url(); ?>/images/vimeo.png" width="24" height="24" title="<?php echo VIMEO; ?>" alt="Vimeo" /></a>
	<?php } ?>
    <?php if (defined('GITHUB')) { ?>
	<a href="<?php echo GITHUB; ?>"><img src="<?php get_theme_url(); ?>/images/github.png" width="24" height="24" title="<?php echo GITHUB; ?>" alt="Github" /></a>
	<?php } ?>
    <!-- addthis - Customization Documentation: http://support.addthis.com/customer/portal/articles/381235-customization-overview -->
	<div class="addthis_toolbox">
	<a href="//www.addthis.com/bookmark.php?v=300" class="addthis_button_compact"><img src="<?php get_theme_url(); ?>/images/share.png" title="For easy Sharing of this page on hundreds of social platforms" alt="addthis" /></a>
	</div><!-- end addthis -->
	</div><!-- end Social Links -->
    </div><!-- end Header -->
    <!-- breadcrumbs row -->
	<div class="row">
        	<!-- breadcrumbs -->
			<ul class="breadcrumbs">
			<a href="<?php get_site_url(); ?>">Home</a> &nbsp;&nbsp;&#149;&nbsp;&nbsp; <?php Foundation_Parent_Link(get_parent(FALSE)); ?> <b><?php get_page_clean_title(); ?></b>
			</ul><!-- end breadcrumbs -->
	</div><!-- end breadcrumbs row -->
    <!-- Slider Row -->
	<div class="row">
    	<!-- Start Slider Div and Title -->
    	<div class="twelve columns">
        	<?php if (defined('SLIDERTITLE')) { ?>
            <h3><?php echo SLIDERTITLE; ?></h3>
			<?php }
			else { ?>
			<div align="center"><h3>Welcome to <?php get_site_name(); ?></h3></div>
			<?php }
			 ?><!-- end Slider Title -->
            <!-- Start Slider -->
      		<div id="featured">
            <?php if (defined('SLIDE1')) { ?>
			<div data-caption="#captionOne"><?php echo SLIDE1; ?></div>
			<?php }
			else { ?>
			<img src="<?php get_theme_url(); ?>/images/orbit-1.jpg" alt="slide image" />
			<?php }
			 ?>
            <?php if (defined('SLIDE2')) { ?>
			<div data-caption="#captionTwo"><?php echo SLIDE2; ?></div>
			<?php }
			else { ?>
			<img src="<?php get_theme_url(); ?>/images/orbit-2.jpg" alt="slide image" />
			<?php }
			 ?>
            <?php if (defined('SLIDE3')) { ?>
			<div data-caption="#captionThree"><?php echo SLIDE3; ?></div>
			<?php } 
			else { ?>
			<img src="<?php get_theme_url(); ?>/images/orbit-3.jpg" alt="slide image" />
			<?php }
			?>
            <?php if (defined('SLIDE4')) { ?>
			<div data-caption="#captionFour"><?php echo SLIDE4; ?></div>
			<?php } ?>
            <?php if (defined('SLIDE5')) { ?>
			<div data-caption="#captionFive"><?php echo SLIDE5; ?></div>
			<?php } ?>
            <?php if (defined('SLIDE6')) { ?>
			<div data-caption="#captionSix"><?php echo SLIDE6; ?></div>
			<?php } ?>
            <?php if (defined('SLIDE7')) { ?>
			<div data-caption="#captionSeven"><?php echo SLIDE7; ?></div>
			<?php } ?>
            <?php if (defined('SLIDE8')) { ?>
			<div data-caption="#captionEight"><?php echo SLIDE8; ?></div>
			<?php } ?>
            <?php if (defined('SLIDE9')) { ?>
			<div data-caption="#captionNine"><?php echo SLIDE9; ?></div>
			<?php } ?>
            <?php if (defined('SLIDE10')) { ?>
			<div data-caption="#captionTen"><?php echo SLIDE10; ?></div>
			<?php } ?>
      		</div><!-- end Slider -->
            <!-- Slide Captions -->
            <?php if (defined('SLIDECAP1')) { ?>
			<span class="orbit-caption" id="captionOne"><?php echo SLIDECAP1; ?></span>
			<?php } ?>
            <?php if (defined('SLIDECAP2')) { ?>
			<span class="orbit-caption" id="captionOne"><?php echo SLIDECAP2; ?></span>
			<?php } ?>
            <?php if (defined('SLIDECAP3')) { ?>
			<span class="orbit-caption" id="captionOne"><?php echo SLIDECAP3; ?></span>
			<?php } ?>
            <?php if (defined('SLIDECAP4')) { ?>
			<span class="orbit-caption" id="captionOne"><?php echo SLIDECAP4; ?></span>
			<?php } ?>
            <?php if (defined('SLIDECAP5')) { ?>
			<span class="orbit-caption" id="captionOne"><?php echo SLIDECAP5; ?></span>
			<?php } ?>
            <?php if (defined('SLIDECAP6')) { ?>
			<span class="orbit-caption" id="captionOne"><?php echo SLIDECAP6; ?></span>
			<?php } ?>
            <?php if (defined('SLIDECAP7')) { ?>
			<span class="orbit-caption" id="captionOne"><?php echo SLIDECAP7; ?></span>
			<?php } ?>
            <?php if (defined('SLIDECAP8')) { ?>
			<span class="orbit-caption" id="captionOne"><?php echo SLIDECAP8; ?></span>
			<?php } ?>
            <?php if (defined('SLIDECAP9')) { ?>
			<span class="orbit-caption" id="captionOne"><?php echo SLIDECAP9; ?></span>
			<?php } ?>
            <?php if (defined('SLIDECAP10')) { ?>
			<span class="orbit-caption" id="captionOne"><?php echo SLIDECAP10; ?></span>
			<?php } ?>
            <!-- end slide captions -->         
    	</div><!-- end Slider Div -->
	</div><!-- end Slider Row -->
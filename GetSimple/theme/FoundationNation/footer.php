<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
* @File: 		footer.php
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
	<!-- lets clear our floats and make some space -->
	<div class="clear"></div>
	<!-- Start Plugins Footer -->
	<div id="footer">
    <!-- Start Plugins Footer Row -->
    <div class="row">
    <!-- Contain Plugins Footer within 12 columns -->
    <div class="twelve columns">
 
	<?php get_footer(); ?>

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
	 	<div class="left"><?php echo date('Y'); ?> <a href="<?php get_site_url(); ?>" ><?php get_site_name(); ?></a></div>
		<div class="right">Theme by <a href="http://www.webdevandphoto.com" >WD&amp;P</a> &middot; <?php get_site_credits(); ?></div>
    </div><!-- end twelve columns -->
    </div><!-- end Plugins Footer Row -->
	</div><!-- end Plugins Footer -->
	<!-- Include all other additional scripts which can be called at the end of the web document in this javascript file here, be sure to include license headers if required -->
	<script type="text/javascript" src="<?php get_theme_url(); ?>/js/app.js"></script>
	<!-- Include all initialization scripts in this javascript file -->
	<script type="text/javascript" src="<?php get_theme_url(); ?>/js/initialize.js"></script>
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js"></script>
</body>
</html>
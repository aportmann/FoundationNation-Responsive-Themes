<?php
/****************************************************
Plugin Name: FoundationNation Theme Settings
Description: Settings for the default GetSimple Theme: FoundationNation
Version: 1.0
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
This plugin is inspired by the original plugin: Innovation by ccagle8 
Original Plugin Author URI: http://chriscagle.me
*****************************************************/

# get correct id for plugin
$thisfile_found=basename(__FILE__, ".php");
$foundation_file=GSDATAOTHERPATH .'FoundationSettings.xml';

# add in this plugin's language file
i18n_merge($thisfile_found) || i18n_merge($thisfile_found, 'en_US');

# register plugin
register_plugin(
	$thisfile_found, 													# ID of plugin, should be filename minus php
	i18n_r($thisfile_found.'/FOUNDATION_TITLE'), 				# Title of plugin
	'1.0', 															# Version of plugin
	'Levy Image',											# Author of plugin
	'http://webdevandphoto.com', 			# Author URL
	i18n_r($thisfile_found.'/FOUNDATION_DESC'), 					# Plugin Description
	'theme', 														# Page type of plugin
	'foundation_show'  									# Function that displays content
);

# include HTMLawed
define("FOUND_PATH", dirname(__FILE__));
include (FOUND_PATH . "/FoundationPlugin/htmLawed.php");

# Configure HTMLawed
$lawedconfig = array(
		'safe'=>1, //auto config maximum safety
		'deny_attribute'=>'style, on*', //disable inline styles and on click to prevent click hijacking
		'tidy'=>-1, //minify any html data
		'elements'=>'* -script', //disable script element
		'keep_bad'=>0 //remove the bad tags
);
$lawedspec = ''; //allow elements override. see documentation

# hooks
add_action('theme-sidebar','createSideMenu',array($thisfile_found, i18n_r($thisfile_found.'/FOUNDATION_TITLE'))); 

# get XML data
if (file_exists($foundation_file)) {
	$x = getXML($foundation_file);
	$webfont = $x->webfont;
	$shortsitename = $x->shortsitename;
	$slogan = $x->slogan;
	$aboutpage = $x->aboutpage;
	$blogpage = $x->blogpage;
	$facebook = $x->facebook;
	$googleplus = $x->googleplus;
	$twitter = $x->twitter;
	$linkedin = $x->linkedin;
	$tumblr = $x->tumblr;
	$instagram = $x->instagram;
	$youtube = $x->youtube;
	$vimeo = $x->vimeo;
	$github = $x->github;
} else {
	$webfont ='';
	$shortsitename = '';
	$slogan = '';
	$aboutpage = '';
	$blogpage = '';
	$facebook = '';
	$googleplus = '';
	$twitter = '';
	$linkedin = '';
	$tumblr = '';
	$instagram = '';
	$youtube = '';
	$vimeo = '';
	$github = '';
}


function foundation_show() {
	global $foundation_file, $webfont, $shortsitename, $slogan, $aboutpage, $blogpage, $facebook, $googleplus, $twitter, $linkedin, $tumblr, $instagram, $youtube, $vimeo, $github, $thisfile_found;
	$success=null;$error=null;
	
	// submitted form
	if (isset($_POST['submit'])) {
		$webfont=null; $shortsitename=null; $slogan=null; $aboutpage=null; $blogpage=null; $facebook=null;	$googleplus=null; $twitter=null; $linkedin=null; $tumblr=null; $instagram=null; $youtube=null; $vimeo=null; $github=null;
		
		# check to see if the URLs provided are valid
		if ($_POST['webfont'] != '') {
			if (($_POST['webfont']) == (preg_replace("/[^a-zA-Z0-9+|:]+/", "",($_POST['webfont'])))) {
				$webfont = $_POST['webfont']; //we want characters +|: allowed so used preg rep
			} else {
				$error .= i18n_r($thisfile_found.'/WEBFONT_ERROR').' ';
			}
		}
		if ($_POST['shortsitename'] != '') {
			if (ctype_alnum($_POST['shortsitename'])) {
				$shortsitename = $_POST['shortsitename']; //ctype does the trick since we don't want spaces and only alphanum
			} else {
				$error .= i18n_r($thisfile_found.'/SHORTSITENAME_ERROR').' ';
			}
		}
		if ($_POST['aboutpage'] != '') {
			if (validate_url($_POST['aboutpage'])) {
				$aboutpage = $_POST['aboutpage']; //we must validate if real url
			} else {
				$error .= i18n_r($thisfile_found.'/ABOUTPAGE_ERROR').' ';
			}
		}
		if ($_POST['blogpage'] != '') {
			if (validate_url($_POST['blogpage'])) {
				$blogpage = $_POST['blogpage'];
			} else {
				$error .= i18n_r($thisfile_found.'/BLOGPAGE_ERROR').' ';
			}
		}
		if ($_POST['slogan'] != '') {
			if (($_POST['slogan']) == (preg_replace("/[^a-zA-Z0-9 ]+/", "",($_POST['slogan'])))) {
				$slogan = $_POST['slogan']; //we want spaces allowed so used preg rep
			} else {
				$error .= i18n_r($thisfile_found.'/SLOGAN_ERROR').' ';
			}
		}
		if ($_POST['facebook'] != '') {
			if (validate_url($_POST['facebook'])) {
				$facebook = $_POST['facebook'];
			} else {
				$error .= i18n_r($thisfile_found.'/FACEBOOK_ERROR').' ';
			}
		}
		
		if ($_POST['googleplus'] != '') {
			if (validate_url($_POST['googleplus'])) {
				$googleplus = $_POST['googleplus'];
			} else {
				$error .= i18n_r($thisfile_found.'/GOOGLEPLUS_ERROR').' ';
			}
		}
		
		if ($_POST['twitter'] != '') {
			if (validate_url($_POST['twitter'])) {
				$twitter = $_POST['twitter'];
			} else {
				$error .= i18n_r($thisfile_found.'/TWITTER_ERROR').' ';
			}
		}
		
		if ($_POST['linkedin'] != '') {
			if (validate_url($_POST['linkedin'])) {
				$linkedin = $_POST['linkedin'];
			} else {
				$error .= i18n_r($thisfile_found.'/LINKEDIN_ERROR').' ';
			}
		}
		if ($_POST['tumblr'] != '') {
			if (validate_url($_POST['tumblr'])) {
				$tumblr = $_POST['tumblr'];
			} else {
				$error .= i18n_r($thisfile_found.'/TUMBLR_ERROR').' ';
			}
		}
		if ($_POST['instagram'] != '') {
			if (validate_url($_POST['instagram'])) {
				$instagram = $_POST['instagram'];
			} else {
				$error .= i18n_r($thisfile_found.'/INSTAGRAM_ERROR').' ';
			}
		}
		if ($_POST['youtube'] != '') {
			if (validate_url($_POST['youtube'])) {
				$youtube = $_POST['youtube'];
			} else {
				$error .= i18n_r($thisfile_found.'/YOUTUBE_ERROR').' ';
			}
		}
		if ($_POST['vimeo'] != '') {
			if (validate_url($_POST['vimeo'])) {
				$vimeo = $_POST['vimeo'];
			} else {
				$error .= i18n_r($thisfile_found.'/VIMEO_ERROR').' ';
			}
		}
		if ($_POST['github'] != '') {
			if (validate_url($_POST['github'])) {
				$github = $_POST['github'];
			} else {
				$error .= i18n_r($thisfile_found.'/GITHUB_ERROR').' ';
			}
		}
		
		# if there are no errors, dave data
		if (!$error) {
			$xml = @new SimpleXMLElement('<item></item>');
			$xml->addChild('webfont', $webfont);
			$xml->addChild('shortsitename', $shortsitename);
			$xml->addChild('slogan', $slogan);
			$xml->addChild('aboutpage', $aboutpage);
			$xml->addChild('blogpage', $blogpage);
			$xml->addChild('facebook', $facebook);
			$xml->addChild('googleplus', $googleplus);
			$xml->addChild('twitter', $twitter);
			$xml->addChild('linkedin', $linkedin);
			$xml->addChild('tumblr', $tumblr);
			$xml->addChild('instagram', $instagram);
			$xml->addChild('youtube', $youtube);
			$xml->addChild('vimeo', $vimeo);
			$xml->addChild('github', $github);
			
			if (! $xml->asXML($foundation_file)) {
				$error = i18n_r('CHMOD_ERROR');
			} else {
				$x = getXML($foundation_file);
				$webfont = $x->webfont;
				$shortsitename = $x->shortsitename;
				$slogan = $x->slogan;
				$aboutpage = $x->aboutpage;
				$blogpage = $x->blogpage;
				$facebook = $x->facebook;
				$googleplus = $x->googleplus;
				$twitter = $x->twitter;
				$linkedin = $x->linkedin;
				$tumblr = $x->tumblr;
				$instagram = $x->instagram;
				$youtube = $x->youtube;
				$vimeo = $x->vimeo;
				$github = $x->github;
				$success = i18n_r('SETTINGS_UPDATED');
			}
		}
	}
	
	?>
	<h3><?php i18n($thisfile_found.'/FOUNDATION_TITLE'); ?></h3>
	
	<?php 
	if($success) { 
		echo '<p style="color:#5da423;"><b>'. $success .'</b></p>';
	} 
	if($error) { 
		echo '<p style="color:#c60f13;"><b>'. $error .'</b></p>';
	}
	?>
	
	<form method="post" action="<?php	echo $_SERVER ['REQUEST_URI']?>">
		
        <p><label for="inn_webfont" ><?php i18n($thisfile_found.'/WEBFONT_TEXT'); ?></label><input id="inn_webfont" name="webfont" class="text" value="<?php echo $webfont; ?>" type="text" /></p>
        <p><label for="inn_shortsitename" ><?php i18n($thisfile_found.'/SHORTSITENAME_TEXT'); ?></label><input id="inn_shortsitename" name="shortsitename" class="text" value="<?php echo $shortsitename; ?>" type="text" /></p>
		<p><label for="inn_aboutpage" ><?php i18n($thisfile_found.'/ABOUTPAGE_URL'); ?></label><input id="inn_aboutpage" name="aboutpage" class="text" value="<?php echo $aboutpage; ?>" type="url" /></p>
		<p><label for="inn_blogpage" ><?php i18n($thisfile_found.'/BLOGPAGE_URL'); ?></label><input id="inn_blogpage" name="blogpage" class="text" value="<?php echo $blogpage; ?>" type="url" /></p>
        <p><label for="inn_slogan" ><?php i18n($thisfile_found.'/SLOGAN_TEXT'); ?></label><input id="inn_slogan" name="slogan" class="text" value="<?php echo $slogan; ?>" type="text" /></p>
		<p><label for="inn_facebook" ><?php i18n($thisfile_found.'/FACEBOOK_URL'); ?></label><input id="inn_facebook" name="facebook" class="text" value="<?php echo $facebook; ?>" type="url" /></p>
        <p><label for="inn_googleplus" ><?php i18n($thisfile_found.'/GOOGLEPLUS_URL'); ?></label><input id="inn_googleplus" name="googleplus" class="text" value="<?php echo $googleplus; ?>" type="url" /></p>
		<p><label for="inn_twitter" ><?php i18n($thisfile_found.'/TWITTER_URL'); ?></label><input id="inn_twitter" name="twitter" class="text" value="<?php echo $twitter; ?>" type="url" /></p>
		<p><label for="inn_linkedin" ><?php i18n($thisfile_found.'/LINKEDIN_URL'); ?></label><input id="inn_linkedin" name="linkedin" class="text" value="<?php echo $linkedin; ?>" type="url" /></p>
        <p><label for="inn_tumblr" ><?php i18n($thisfile_found.'/TUMBLR_URL'); ?></label><input id="inn_tumblr" name="tumblr" class="text" value="<?php echo $tumblr; ?>" type="url" /></p>
		<p><label for="inn_instagram" ><?php i18n($thisfile_found.'/INSTAGRAM_URL'); ?></label><input id="inn_instagram" name="instagram" class="text" value="<?php echo $instagram; ?>" type="url" /></p>
		<p><label for="inn_youtube" ><?php i18n($thisfile_found.'/YOUTUBE_URL'); ?></label><input id="inn_youtube" name="youtube" class="text" value="<?php echo $youtube; ?>" type="url" /></p>
        <p><label for="inn_vimeo" ><?php i18n($thisfile_found.'/VIMEO_URL'); ?></label><input id="inn_vimeo" name="vimeo" class="text" value="<?php echo $vimeo; ?>" type="url" /></p>
		<p><label for="inn_github" ><?php i18n($thisfile_found.'/GITHUB_URL'); ?></label><input id="inn_github" name="github" class="text" value="<?php echo $github; ?>" type="url" /></p>
		
		<p><input type="submit" id="submit" class="submit" value="<?php i18n('BTN_SAVESETTINGS'); ?>" name="submit" /></p>
	</form>
	
	<?php
}

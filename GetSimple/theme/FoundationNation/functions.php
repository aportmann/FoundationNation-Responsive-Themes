<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
* @File: 		functions.php
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
/* This is our breadcrumb coding */
function Foundation_Parent_Link($name) {
	$file = GSDATAPAGESPATH . $name .'.xml';
	if (file_exists($file)) {
		$p = getXML($file);
		$title = $p->title;
		$parent = $p->parent;
		$slug = $p->slug;
		echo '<a href="'. find_url($name,'') .'">'. $title .'</a> &nbsp;&nbsp;&#149;&nbsp;&nbsp; ';
	}
}
/* This is our plugin data gatherer */
function Foundation_Settings() {
	$file = GSDATAOTHERPATH . 'FoundationSettings.xml';
	if (file_exists($file)) {
		$p = getXML($file);
		if ($p->facebook != '' ) define('FACEBOOK', $p->facebook);
		if ($p->googleplus != '' ) define('GOOGLEPLUS', $p->googleplus);
		if ($p->twitter != '' ) define('TWITTER', $p->twitter);
		if ($p->linkedin != '' ) define('LINKEDIN', $p->linkedin);
		if ($p->tumblr != '' ) define('TUMBLR', $p->tumblr);
		if ($p->instagram != '' ) define('INSTAGRAM', $p->instagram);
		if ($p->youtube != '' ) define('YOUTUBE', $p->youtube);
		if ($p->vimeo != '' ) define('VIMEO', $p->vimeo);
		if ($p->github != '' ) define('GITHUB', $p->github);
		if ($p->webfont != '' ) define('WEBFONT', $p->webfont);
		if ($p->shortsitename != '' ) define('SHORTSITENAME', $p->shortsitename);
		if ($p->slogan != '' ) define('SLOGAN', $p->slogan);
		if ($p->slidertitle != '' ) define('SLIDERTITLE', $p->slidertitle);
		if ($p->slide1 != '' ) define('SLIDE1', $p->slide1);
		if ($p->slide2 != '' ) define('SLIDE2', $p->slide2);
		if ($p->slide3 != '' ) define('SLIDE3', $p->slide3);
		if ($p->slide4 != '' ) define('SLIDE4', $p->slide4);
		if ($p->slide5 != '' ) define('SLIDE5', $p->slide5);
		if ($p->slide6 != '' ) define('SLIDE6', $p->slide6);
		if ($p->slide7 != '' ) define('SLIDE7', $p->slide7);
		if ($p->slide8 != '' ) define('SLIDE8', $p->slide8);
		if ($p->slide9 != '' ) define('SLIDE9', $p->slide9);
		if ($p->slide10 != '' ) define('SLIDE10', $p->slide10);
		if ($p->slidecap1 != '' ) define('SLIDECAP1', $p->slidecap1);
		if ($p->slidecap2 != '' ) define('SLIDECAP2', $p->slidecap2);
		if ($p->slidecap3 != '' ) define('SLIDECAP3', $p->slidecap3);
		if ($p->slidecap4 != '' ) define('SLIDECAP4', $p->slidecap4);
		if ($p->slidecap5 != '' ) define('SLIDECAP5', $p->slidecap5);
		if ($p->slidecap6 != '' ) define('SLIDECAP6', $p->slidecap6);
		if ($p->slidecap7 != '' ) define('SLIDECAP7', $p->slidecap7);
		if ($p->slidecap8 != '' ) define('SLIDECAP8', $p->slidecap8);
		if ($p->slidecap9 != '' ) define('SLIDECAP9', $p->slidecap9);
		if ($p->slidecap10 != '' ) define('SLIDECAP10', $p->slidecap10);
		return true;
	} else {
		return false;
	}
}
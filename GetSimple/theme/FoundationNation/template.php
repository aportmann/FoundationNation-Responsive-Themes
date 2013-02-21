<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
* @File: 		template.php
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
Foundation_Settings();
include('header.php'); 
?>
    <!-- Start Page row -->
	<div class="row">
	<!-- Page title -->
	<h1><?php get_page_title(); ?></h1>
	<!-- page content -->
	<div class="twelve columns" role="content">	
	<?php get_page_content(); ?>

	<!-- page footer -->
	<div class="pagefooter">
	<p>Published on &nbsp;<span><?php get_page_date('F jS, Y'); ?>&nbsp;&nbsp;<select name="translate" style="height:22px;width:122px;font-size:11px;" onchange="javascript:window.location='http://www.google.com/translate_c?hl=tr&amp;langpair=tr%7C' + this.value + '&amp;u=' + window.location.href;"><option value="">Language Selection</option><option value="af">Afrikaans</option><option value="sq">Albanian</option><option value="ar">Arabic</option><option value="hy">Armenian</option><option value="az">Azerbaijani</option><option value="eu">Basque</option><option value="be">Belarusian</option><option value="bn">Bengali</option><option value="bg">Bulgarian</option><option value="ca">Catalan</option><option value="zh-CN">Chinese Simplified</option><option value="zh-TW">Chinese Traditional</option><option value="hr">Croatian</option><option value="cs">Czech</option><option value="da">Danish</option><option value="nl">Dutch</option><option value="en">English</option><option value="eo">Esperanto</option><option value="et">Estonian</option><option value="tl">Filipino</option><option value="fi">Finnish</option><option value="fr">French</option><option value="gl">Galician</option><option value="ka">Georgian</option><option value="de">German</option><option value="el">Greek</option><option value="iw">Hebrew</option><option value="el">Greek</option><option value="gu">Gujarati</option><option value="ht">Haitian Creole</option><option value="hi">Hindi</option><option value="hu">Hungarian</option><option value="is">Icelandic</option><option value="id">Indonesian</option><option value="ga">Irish</option><option value="it">Italian</option><option value="ja">Japanese</option><option value="kn">Kannada</option><option value="ko">Korean</option><option value="lo">Lao</option><option value="la">Latin</option><option value="lv">Latvian</option><option value="lt">Lithuanian</option><option value="mk">Macedonian</option><option value="ms">Malay</option><option value="mt">Maltese</option><option value="no">Norwegian</option><option value="fa">Persian</option><option value="pl">Polish</option><option value="pt">Portuguese</option><option value="ro">Romanian</option><option value="ru">Russian</option><option value="sr">Serbian</option><option value="sk">Slovak</option><option value="sl">Slovenian</option><option value="es">Spanish</option><option value="sw">Swahili</option><option value="sv">Swedish</option><option value="ta">Tamil</option><option value="te">Telugu</option><option value="th">Thai</option><option value="tr">Turkish</option><option value="uk">Ukrainian</option><option value="ur">Urdu</option><option value="vi">Vietnamese</option><option value="cy">Welsh</option><option value="yi">Yiddish</option></select></span></p>
	</div><!-- end page footer -->
	</div><!-- end page content -->
	</div><!-- end Start Page row -->
	<!-- include the footer template -->
	<?php include('footer.php'); ?>
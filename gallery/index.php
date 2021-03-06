<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);


if (isset($_POST["submit"])) {
    // echo"Rehman";
    try {
        //Server settings
        $mail->SMTPDebug = 0;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'artminddecor@gmail.com';                     // SMTP username
        $mail->Password   = 'artminddecor123';                               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    
        //Recipients
        $mail->setFrom('info@artminddecor.com', $_POST['email']);
        $mail->addAddress('info@artminddecor.com','Art Mind Decor');     // Add a recipient
                // Name is optional
                
                // sending code
       
    
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $_POST['title'];
        $mail->Body    = $_POST['text'];
        $mail->AltBody = $_POST['email'];
    
        $mail->send();
		// echo '';
		echo "<script type='text/javascript'>
		alert('Message has been sent!');
		window.location.href='index.php';
		</script>";
		// header("Location: index.php");
		
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
};
?>


<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8" />
	
				<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
		
            
            
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<link rel="pingback" href="../xmlrpc.php" />

	<title>Art Mind Decor LLC | Contact Us</title>
<style type="text/css" id="stylesheet-inline-css-308">   .page-id-308.disabled_footer_top .footer_top_holder, .page-id-308.disabled_footer_bottom .footer_bottom_holder { display: none;}

</style><link rel='dns-prefetch' href='http://maps.googleapis.com/' />
<link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
<link rel='dns-prefetch' href='http://s.w.org/' />
<link rel="alternate" type="application/rss+xml" title="Art Mind Decor &raquo; Feed" href="../feed/index.html" />
<link rel="alternate" type="application/rss+xml" title="Art Mind Decor &raquo; Comments Feed" href="../comments/feed/index.html" />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/alzadcarpentry.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.9.8"}};
			!function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55358,56760,9792,65039],[55358,56760,8203,9792,65039]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
.button_color1:hover {
  /* background-color: red; */
  border:3px solid gray !important;
}
}
</style>
<link rel='stylesheet' id='layerslider-css'  href='../wp-content/plugins/LayerSlider/static/layerslider/css/layerslider6c2d.css?ver=6.8.2' type='text/css' media='all' />
<link rel='stylesheet' id='contact-form-7-css'  href='../wp-content/plugins/contact-form-7/includes/css/stylesb62d.css?ver=5.1.6' type='text/css' media='all' />
<link rel='stylesheet' id='rs-plugin-settings-css'  href='../wp-content/plugins/revslider/public/assets/css/settingsf542.css?ver=5.4.8.3' type='text/css' media='all' />
<style id='rs-plugin-settings-inline-css' type='text/css'>
#rs-demo-id {}
</style>
<link rel='stylesheet' id='mediaelement-css'  href='../wp-includes/js/mediaelement/mediaelementplayer-legacy.min45a0.css?ver=4.2.6-78496d1' type='text/css' media='all' />
<link rel='stylesheet' id='wp-mediaelement-css'  href='../wp-includes/js/mediaelement/wp-mediaelement.min5010.css?ver=4.9.8' type='text/css' media='all' />
<link rel='stylesheet' id='bridge-default-style-css'  href='../wp-content/themes/bridge/style5010.css?ver=4.9.8' type='text/css' media='all' />
<link rel='stylesheet' id='bridge-qode-font_awesome-css'  href='../wp-content/themes/bridge/css/font-awesome/css/font-awesome.min5010.css?ver=4.9.8' type='text/css' media='all' />
<link rel='stylesheet' id='bridge-qode-font_elegant-css'  href='../wp-content/themes/bridge/css/elegant-icons/style.min5010.css?ver=4.9.8' type='text/css' media='all' />
<link rel='stylesheet' id='bridge-qode-linea_icons-css'  href='../wp-content/themes/bridge/css/linea-icons/style5010.css?ver=4.9.8' type='text/css' media='all' />
<link rel='stylesheet' id='bridge-qode-dripicons-css'  href='../wp-content/themes/bridge/css/dripicons/dripicons5010.css?ver=4.9.8' type='text/css' media='all' />
<link rel='stylesheet' id='bridge-stylesheet-css'  href='../wp-content/themes/bridge/css/stylesheet.min5010.css?ver=4.9.8' type='text/css' media='all' />
<link rel='stylesheet' id='bridge-print-css'  href='../wp-content/themes/bridge/css/print5010.css?ver=4.9.8' type='text/css' media='all' />
<link rel='stylesheet' id='bridge-style-dynamic-css'  href='../wp-content/themes/bridge/css/style_dynamice425.css?ver=1578647867' type='text/css' media='all' />
<link rel='stylesheet' id='bridge-responsive-css'  href='../wp-content/themes/bridge/css/responsive.min5010.css?ver=4.9.8' type='text/css' media='all' />
<link rel='stylesheet' id='bridge-style-dynamic-responsive-css'  href='../wp-content/themes/bridge/css/style_dynamic_responsivee425.css?ver=1578647867' type='text/css' media='all' />
<style id='bridge-style-dynamic-responsive-inline-css' type='text/css'>
.full_width {position: relative;}

.q_counter_holder.center{
    padding-left: 0px;
    padding-right: 0px;
}

.q_counter_holder p.counter_text {
margin: 30px 0 0;
}

.q_progress_bar {
    position: relative;
    margin: 0 0 40px 0;
}

header.sticky .header_bottom .qode_icon_shortcode {
    border-color: #303030 !important;
}

header.sticky .header_bottom .qode_icon_shortcode .qode_icon_element {
    color: #303030 !important;
}

header.sticky .header_bottom .qode_icon_shortcode:hover {
    background-color: #303030 !important;
}

header.sticky .header_bottom .qode_icon_shortcode:hover .qode_icon_element {
    color: #fff !important;
}

header:not(.with_hover_bg_color) nav.main_menu > ul > li > a span:not(.plus) {
padding: 11px 16px;
}

header:not(.with_hover_bg_color) nav.main_menu > ul > li:hover > a{
    opacity: 1;
}

.wpcf7 form.wpcf7-form p {
    margin-bottom: 13px;
}

.cf7_custom_style_2 input.wpcf7-form-control.wpcf7-submit, .cf7_custom_style_2 input.wpcf7-form-control.wpcf7-submit:not([disabled]) {
    margin-top: 9px;
}

.q_dropcap{
    margin: 0px 18px 0px 0px;
}

.carousel-inner .slider_content .text .qbutton.white {
margin: 10px 0 0 16px;
}

.testimonials .testimonial_text_inner p.testimonial_author {
margin-top: 45px;
margin-bottom: 11px;
}

.testimonials_holder .flex-direction-nav a {
width: 33px;
height: 33px;
}

.testimonials_holder .flex-direction-nav li:first-child {
margin-right: 2px;
}

.testimonials_holder .flex-direction-nav a:before {
font-size: 20px;
line-height: 29px;
left: 1px;
}

@media screen and (max-width: 600px) {
.title.title_size_medium h1 {
font-size: 28px;
letter-spacing: 2px;
line-height: 30px;
}
}

.comments .comment .text .comment_date {
    font-size: 14px;
    font-weight: 500;
    color: #303030;
}

.comments .comment .text .text_holder {
    margin: 13px 0 0;
}

.comment_holder .comment {
    padding: 34px 25px 37px;
    background-color: #f9f9f9;
}

.cover_boxes ul li .box .box_content h3 {
    font-size: 18px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin: 0 0 21px;
}

.cover_boxes ul li .box .qbutton {
    margin: 38px 0 0;
    padding-left: 28px;
    padding-right: 27px;
    border-radius: 3px;
}

@media screen and (min-width: 1001px) {
.cover_boxes ul li .box .box_content {
padding-left: 4px;
}
}

.blog_holder article .post_text .post_text_inner {
    padding: 35px 36px 41px;
}

.blog_holder article .post_more .qbutton.small {
    height: 45px;
    line-height: 45px;
    padding-left: 20px;
    padding-right: 20px;
    letter-spacing: 2px;
}
</style>
<link rel='stylesheet' id='js_composer_front-css'  href='../wp-content/plugins/js_composer/assets/css/js_composer.mine23c.css?ver=5.7' type='text/css' media='all' />
<link rel='stylesheet' id='bridge-style-handle-google-fonts-css'  href='https://fonts.googleapis.com/css?family=Raleway%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C300italic%2C400italic%2C700italic%7CRaleway%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C300italic%2C400italic%2C700italic&amp;subset=latin%2Clatin-ext&amp;ver=1.0.0' type='text/css' media='all' />
<script type='text/javascript' src='../wp-content/themes/bridge/js/plugins/ScrollToPlugin.min5010.js?ver=4.9.8'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var LS_Meta = {"v":"6.8.2"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/LayerSlider/static/layerslider/js/greensockb3a6.js?ver=1.19.0'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/jqueryb8ff.js?ver=1.12.4'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1'></script>
<script type='text/javascript' src='../wp-content/plugins/LayerSlider/static/layerslider/js/layerslider.kreaturamedia.jquery6c2d.js?ver=6.8.2'></script>
<script type='text/javascript' src='../wp-content/plugins/LayerSlider/static/layerslider/js/layerslider.transitions6c2d.js?ver=6.8.2'></script>
<script type='text/javascript' src='../wp-content/plugins/revslider/public/assets/js/jquery.themepunch.tools.minf542.js?ver=5.4.8.3'></script>
<script type='text/javascript' src='../wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.minf542.js?ver=5.4.8.3'></script>
<script type='text/javascript'>
var mejsL10n = {"language":"en","strings":{"mejs.install-flash":"You are using a browser that does not have Flash player enabled or installed. Please turn on your Flash player plugin or download the latest version from https:\/\/get.adobe.com\/flashplayer\/","mejs.fullscreen-off":"Turn off Fullscreen","mejs.fullscreen-on":"Go Fullscreen","mejs.download-video":"Download Video","mejs.fullscreen":"Fullscreen","mejs.time-jump-forward":["Jump forward 1 second","Jump forward %1 seconds"],"mejs.loop":"Toggle Loop","mejs.play":"Play","mejs.pause":"Pause","mejs.close":"Close","mejs.time-slider":"Time Slider","mejs.time-help-text":"Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds.","mejs.time-skip-back":["Skip back 1 second","Skip back %1 seconds"],"mejs.captions-subtitles":"Captions\/Subtitles","mejs.captions-chapters":"Chapters","mejs.none":"None","mejs.mute-toggle":"Mute Toggle","mejs.volume-help-text":"Use Up\/Down Arrow keys to increase or decrease volume.","mejs.unmute":"Unmute","mejs.mute":"Mute","mejs.volume-slider":"Volume Slider","mejs.video-player":"Video Player","mejs.audio-player":"Audio Player","mejs.ad-skip":"Skip ad","mejs.ad-skip-info":["Skip in 1 second","Skip in %1 seconds"],"mejs.source-chooser":"Source Chooser","mejs.stop":"Stop","mejs.speed-rate":"Speed Rate","mejs.live-broadcast":"Live Broadcast","mejs.afrikaans":"Afrikaans","mejs.albanian":"Albanian","mejs.arabic":"Arabic","mejs.belarusian":"Belarusian","mejs.bulgarian":"Bulgarian","mejs.catalan":"Catalan","mejs.chinese":"Chinese","mejs.chinese-simplified":"Chinese (Simplified)","mejs.chinese-traditional":"Chinese (Traditional)","mejs.croatian":"Croatian","mejs.czech":"Czech","mejs.danish":"Danish","mejs.dutch":"Dutch","mejs.english":"English","mejs.estonian":"Estonian","mejs.filipino":"Filipino","mejs.finnish":"Finnish","mejs.french":"French","mejs.galician":"Galician","mejs.german":"German","mejs.greek":"Greek","mejs.haitian-creole":"Haitian Creole","mejs.hebrew":"Hebrew","mejs.hindi":"Hindi","mejs.hungarian":"Hungarian","mejs.icelandic":"Icelandic","mejs.indonesian":"Indonesian","mejs.irish":"Irish","mejs.italian":"Italian","mejs.japanese":"Japanese","mejs.korean":"Korean","mejs.latvian":"Latvian","mejs.lithuanian":"Lithuanian","mejs.macedonian":"Macedonian","mejs.malay":"Malay","mejs.maltese":"Maltese","mejs.norwegian":"Norwegian","mejs.persian":"Persian","mejs.polish":"Polish","mejs.portuguese":"Portuguese","mejs.romanian":"Romanian","mejs.russian":"Russian","mejs.serbian":"Serbian","mejs.slovak":"Slovak","mejs.slovenian":"Slovenian","mejs.spanish":"Spanish","mejs.swahili":"Swahili","mejs.swedish":"Swedish","mejs.tagalog":"Tagalog","mejs.thai":"Thai","mejs.turkish":"Turkish","mejs.ukrainian":"Ukrainian","mejs.vietnamese":"Vietnamese","mejs.welsh":"Welsh","mejs.yiddish":"Yiddish"}};
</script>
<script type='text/javascript' src='../wp-includes/js/mediaelement/mediaelement-and-player.min45a0.js?ver=4.2.6-78496d1'></script>
<script type='text/javascript' src='../wp-includes/js/mediaelement/mediaelement-migrate.min5010.js?ver=4.9.8'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var _wpmejsSettings = {"pluginPath":"\/wp-includes\/js\/mediaelement\/","classPrefix":"mejs-","stretching":"responsive"};
/* ]]> */
</script>
<meta name="generator" content="Powered by LayerSlider 6.8.2 - Multi-Purpose, Responsive, Parallax, Mobile-Friendly Slider Plugin for WordPress." />
<!-- LayerSlider updates and docs at: https://layerslider.kreaturamedia.com -->
<link rel='https://api.w.org/' href='../wp-json/index.html' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="../xmlrpc0db0.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="../wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.9.8" />
<link rel="canonical" href="index.html" />
<link rel='shortlink' href='../indexf454.html?p=308' />
<link rel="alternate" type="application/json+oembed" href="../wp-json/oembed/1.0/embed7205.json?url=https%3A%2F%2Falzadcarpentry.com%2Fcontact-us%2F" />
<link rel="alternate" type="text/xml+oembed" href="../wp-json/oembed/1.0/embed730f?url=https%3A%2F%2Falzadcarpentry.com%2Fcontact-us%2F&amp;format=xml" />
		<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
		<meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress."/>
<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="https://alzadcarpentry.com/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen"><![endif]--><meta name="generator" content="Powered by Slider Revolution 5.4.8.3 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
<link rel="icon" href="../wp-content/uploads/2020/01/cropped-logo-1-32x32.png" sizes="32x32" />
<link rel="icon" href="../wp-content/uploads/2020/01/cropped-logo-1-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon-precomposed" href="../wp-content/uploads/2020/01/cropped-logo-1-180x180.png" />
<!-- <meta name="msapplication-TileImage" content="https://alzadcarpentry.com/wp-content/uploads/2020/01/cropped-logo-1-270x270.png" /> -->
<script type="text/javascript">function setREVStartSize(e){									
						try{ e.c=jQuery(e.c);var i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;
							if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),"fullscreen"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(",");if (c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split("%").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(".rev_slider_wrapper").css({height:f})					
						}catch(d){console.log("Failure at Presize of Slider:"+d)}						
					};</script>
<style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1456911573069{padding-top: 112px !important;padding-bottom: 57px !important;}.vc_custom_1456911944161{padding-bottom: 91px !important;}.vc_custom_1456911787818{padding-right: 2.5% !important;}.vc_custom_1456911800626{padding-right: 5% !important;}</style><noscript><style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript></head>

<body data-rsssl=1 class="page-template page-template-full_width page-template-full_width-php page page-id-308 bridge-core-1.0.4 ajax_fade page_not_loaded  qode-title-hidden qode_grid_1300 qode-content-sidebar-responsive qode-theme-ver-18.0.9 qode-theme-bridge disabled_footer_top wpb-js-composer js-comp-ver-5.7 vc_responsive" itemscope itemtype="http://schema.org/WebPage">

	<div class="ajax_loader"><div class="ajax_loader_1"><div class="wave"><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div></div></div>
	
<div class="wrapper">
	<div class="wrapper_inner">

    
		<!-- Google Analytics start -->
				<!-- Google Analytics end -->

		
	<header class=" scroll_header_top_area dark stick transparent scrolled_not_transparent page_header">
	<div class="header_inner clearfix">
				<div class="header_top_bottom_holder">
			
			<div class="header_bottom clearfix" style=' background-color:rgba(255, 255, 255, 0);' >
											<div class="header_inner_left">
																	<div class="mobile_menu_button">
		<span>
			<span aria-hidden="true" class="qode_icon_font_elegant icon_menu " ></span>		</span>
	</div>
								<div class="logo_wrapper" >
									<div class="q_logo">
										<a itemprop="url" href="../index.html" >
											 <img itemprop="image" class="normal" src="../gallery/logo123.png" alt="Logo"> 	
													  <img itemprop="image" class="light" src="../gallery/logo123.png" alt="Logo"/> 		
													   <img itemprop="image" class="dark" src="../gallery/logo123.png" alt="Logo"/> 		
															<img itemprop="image" class="sticky" src="../gallery/logo123.png" alt="Logo"/> 		
																 <img itemprop="image" class="mobile" src="../gallery/logo123.png" alt="Logo"/> 		
									 </a>
									</div>
	</div>															</div>
															<div class="header_inner_right">
									<div class="side_menu_button_wrapper right">
																					<div class="header_bottom_right_widget_holder"><div class="header_bottom_widget widget_text">			<div class="textwidget"><span data-type="square" data-hover-bg-color="#ffffff" data-hover-icon-color="#000000" class="qode_icon_shortcode fa-stack q_font_awsome_icon_square fa-lg  " style="background-color: rgba(255,255,255,0.01);border: 2px solid #ffffff;margin: 0 8px 0 5px;font-size: 13px;font-size: 18px;border-radius: 3px; "><a   itemprop="url" href="http://www.facebook.com/" target="_blank"><span aria-hidden="true" class="qode_icon_font_elegant social_facebook qode_icon_element" style="font-size: 13px;color: #ffffff;" ></span></a></span><span data-type="square" data-hover-bg-color="#ffffff" data-hover-icon-color="#000000" class="qode_icon_shortcode fa-stack q_font_awsome_icon_square fa-lg  " style="background-color: rgba(255,255,255,0.01);border: 2px solid #ffffff;margin: 0 8px 0 0;font-size: 13px;font-size: 18px;border-radius: 3px; "><a   itemprop="url" href="http://twitter.com/" target="_blank"><span aria-hidden="true" class="qode_icon_font_elegant social_twitter qode_icon_element" style="font-size: 13px;color: #ffffff;" ></span></a></span><span data-type="square" data-hover-bg-color="#ffffff" data-hover-icon-color="#000000" class="qode_icon_shortcode fa-stack q_font_awsome_icon_square fa-lg  " style="background-color: rgba(255,255,255,0.01);border: 2px solid #ffffff;font-size: 13px;font-size: 18px;border-radius: 3px; "><a   itemprop="url" href="http://instagram.com/" target="_blank"><span aria-hidden="true" class="qode_icon_font_elegant social_instagram qode_icon_element" style="font-size: 13px;color: #ffffff;" ></span></a></span></div>
		</div></div>
																														<div class="side_menu_button">
																																											</div>
									</div>
								</div>
							
							
							<nav class="main_menu drop_down right">
								<ul id="menu-main-menu" class=""><li id="nav-menu-item-423" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home  narrow"><a href="../index.html" class=""><i class="menu_icon blank fa"></i><span>Home</span><span class="plus"></span></a></li>
<li id="nav-menu-item-579" class="menu-item menu-item-type-post_type menu-item-object-page  narrow"><a href="../about-us/index.html" class=""><i class="menu_icon blank fa"></i><span>About Us</span><span class="plus"></span></a></li>
<li id="nav-menu-item-426" class="menu-item menu-item-type-post_type menu-item-object-page  narrow"><a href="../services/index.html" class=""><i class="menu_icon blank fa"></i><span>Services</span><span class="plus"></span></a></li>
<li id="nav-menu-item-424" class="menu-item menu-item-type-post_type menu-item-object-page  narrow"><a href="../the-blog/index.html" class=""><i class="menu_icon blank fa"></i><span>Blog</span><span class="plus"></span></a></li>
<li id="nav-menu-item-563" class="menu-item menu-item-type-post_type menu-item-object-page  narrow"><a href="../gallery/index.html" class=""><i class="menu_icon blank fa"></i><span>GALLERY</span><span class="plus"></span></a></li>
<li id="nav-menu-item-427" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-308 current_page_item active narrow"><a href="index.html" class=" current "><i class="menu_icon blank fa"></i><span>Contact Us</span><span class="plus"></span></a></li>
</ul>							</nav>
														<nav class="mobile_menu">
	<ul id="menu-main-menu-1" class=""><li id="mobile-menu-item-423" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home "><a href="../index.html" class=""><span>Home</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
<li id="mobile-menu-item-579" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="../about-us/index.html" class=""><span>About Us</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
<li id="mobile-menu-item-426" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="../services/index.html" class=""><span>Services</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
<li id="mobile-menu-item-424" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="../the-blog/index.html" class=""><span>Blog</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
<li id="mobile-menu-item-563" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="../gallery/index.html" class=""><span>GALLERY</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
<li id="mobile-menu-item-427" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-308 current_page_item active"><a href="index.html" class=" current "><span>Contact Us</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
</ul></nav>											</div>
			</div>
		</div>

</header>	<a id="back_to_top" href="#">
        <span class="fa-stack">
            <i class="qode_icon_font_awesome fa fa-arrow-up " ></i>        </span>
	</a>
	
	
    
    
    <div class="content ">
            <div class="meta">

            
        <div class="seo_title">  Contact Us</div>

        


                        
            <span id="qode_page_id">308</span>
            <div class="body_classes">page-template,page-template-full_width,page-template-full_width-php,page,page-id-308,bridge-core-1.0.4,ajax_fade,page_not_loaded,,qode-title-hidden,qode_grid_1300,qode-content-sidebar-responsive,qode-theme-ver-18.0.9,qode-theme-bridge,disabled_footer_top,wpb-js-composer js-comp-ver-5.7,vc_responsive</div>
        </div>
        <div class="content_inner  ">
    <style type="text/css" data-type="vc_shortcodes-custom-css-308">.vc_custom_1456911573069{padding-top: 112px !important;padding-bottom: 57px !important;}.vc_custom_1456911944161{padding-bottom: 91px !important;}.vc_custom_1456911787818{padding-right: 2.5% !important;}.vc_custom_1456911800626{padding-right: 5% !important;}</style>					<div class="full_width">
	<div class="full_width_inner" >
										<div      class="vc_row wpb_row section vc_row-fluid " style=' text-align:left;'><div class=" full_section_inner clearfix"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper">	<div class="vc_empty_space"  style="height: 32px" ><span
			class="vc_empty_space_inner">
			<span class="empty_space_image"  ></span>
		</span></div>

</div></div></div></div></div>
<!-- <div      class="vc_row wpb_row section vc_row-fluid  vc_custom_1456911573069 grid_section" style=' text-align:center;'><div class=" section_inner clearfix"><div class='section_inner_margin clearfix'><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-3 vc_col-lg-6"><div class="vc_column-inner"><div class="wpb_wrapper">
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<h2>DUBAI</h2>
	
		</div> 
	</div> <div class="separator  transparent   " style="margin-top: 20px;margin-bottom: 0px;"></div>

	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<h4>Feel Free Contact us now for any Question!</h4>

		</div> 
	</div> </div></div></div></div></div></div>
	
	<div      class="vc_row wpb_row section vc_row-fluid  vc_custom_1456911944161 grid_section" style=' text-align:left;'><div class=" section_inner clearfix"><div class='section_inner_margin clearfix'><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6"><div class="vc_column-inner vc_custom_1456911787818"><div class="wpb_wrapper"><div class="separator  transparent   " style="margin-top: 2px;margin-bottom: 0px;"></div>
	<form action="" method="post"><br>
    <input type="text" name="title" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Your name">
    <input type="text" name="email" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email" aria-invalid="false" placeholder="Your e-mail address">
    <textarea type="text" name="text"  cols="40" rows="6" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Message"></textarea>
     <input type="submit" name="submit" value="submit" class="wpcf7-form-control wpcf7-submit">
    </form>
	<div role="form" class="wpcf7" id="wpcf7-f314-p308-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"></div>


</div>
<div class="separator  transparent   " style="margin-top: 58px;margin-bottom: 0px;"></div>
</div></div></div>
<div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-3 vc_col-xs-12"><div class="vc_column-inner vc_custom_1456911800626"><div class="wpb_wrapper"><div class="separator  transparent   " style="margin-top: 2px;margin-bottom: 0px;"></div>
<div class='google_map_shortcode_holder1' style='height:300px;'>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10224.359579693415!2d55.29703288457908!3d25.273818188543142!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f434f57647aab%3A0xd5cf32d1e7e638a5!2sAl%20Ansari%20Exchange%2C%20Naif%20Branch!5e0!3m2!1sen!2s!4v1587670248044!5m2!1sen!2s" width="300" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	
	<div class='google_map_shortcode_overlay'></div></div>
<div class="separator  transparent   " style="margin-top: 58px;margin-bottom: 0px;"></div>
</div></div></div><div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-3 vc_col-xs-12"><div class="vc_column-inner"><div class="wpb_wrapper">
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<h4>Our offices</h4>

		</div> 
	</div> <div class="separator  transparent   " style="margin-top: 28px;margin-bottom: 0px;"></div>

	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<ul class="thememount_vc_contact_wrapper">
<li class="thememount-contact-phonenumber tmicon-fa-phone">00971-55-5575101</li>
<li class="thememount-contact-email tmicon-fa-envelope-o"><a href="mailto:info@artminddecor.com">info@artminddecor.com</a></li>
<li class="thememount-contact-website tmicon-fa-globe"><a href="../index.html">https://www.artminddecor.com/</a></li>
<li class="thememount-contact-address tmicon-fa-map-marker">Art Mind Decor LLC<br />
P.O BOX 186692<br />
Shop no 1&2 owner sheikha Muhara Ahmad Majid Al ghuriar Diera Al qousis Dubai</li>
</ul>

		</div> 
	</div> <div class="separator  transparent   " style="margin-top: 38px;margin-bottom: 0px;"></div>
<span data-type="square" data-hover-bg-color="#303030" data-hover-icon-color="#ffffff" class="qode_icon_shortcode fa-stack q_font_awsome_icon_square fa-lg  " style="background-color: #ffffff;border: 2px solid #303030;margin: 0 8px 0 0;font-size: 13px;font-size: 18px;border-radius: 3px; "><a   itemprop="url" href="https://www.facebook.com/" target="_blank"><span aria-hidden="true" class="qode_icon_font_elegant social_facebook qode_icon_element" style="font-size: 13px;color: #303030;" ></span></a></span><span data-type="square" data-hover-bg-color="#303030" data-hover-icon-color="#ffffff" class="qode_icon_shortcode fa-stack q_font_awsome_icon_square fa-lg  " style="background-color: #ffffff;border: 2px solid #303030;margin: 0 8px 0 0;font-size: 13px;font-size: 18px;border-radius: 3px; "><a   itemprop="url" href="https://www.twitter.com/" target="_blank"><span aria-hidden="true" class="qode_icon_font_elegant social_twitter qode_icon_element" style="font-size: 13px;color: #303030;" ></span></a></span><span data-type="square" data-hover-bg-color="#303030" data-hover-icon-color="#ffffff" class="qode_icon_shortcode fa-stack q_font_awsome_icon_square fa-lg  " style="background-color: #ffffff;border: 2px solid #303030;font-size: 13px;font-size: 18px;border-radius: 3px; "><a   itemprop="url" href="https://www.instagram.com/" target="_blank"><span aria-hidden="true" class="qode_icon_font_elegant social_instagram qode_icon_element" style="font-size: 13px;color: #303030;" ></span></a></span><div class="separator  transparent   " style="margin-top: 58px;margin-bottom: 0px;"></div>
</div></div></div></div></div></div>
										 
												</div>
	</div>
				
	</div>
</div> -->

<div      class="vc_row wpb_row section vc_row-fluid  vc_custom_1456911573069 grid_section" style=' text-align:center;'><div class=" section_inner clearfix"><div class='section_inner_margin clearfix'><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-3 vc_col-lg-6"><div class="vc_column-inner"><div class="wpb_wrapper">
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<h2>DUBAI</h2>

		</div> 
	</div> <div class="separator  transparent   " style="margin-top: 20px;margin-bottom: 0px;"></div>

	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<h4>Feel Free Contact us now for any Question!</h4>

		</div> 
	</div> </div></div></div></div></div></div>
	
<div      class="vc_row wpb_row section vc_row-fluid  vc_custom_1456911944161 grid_section" style=' text-align:left;'>
<div class=" section_inner clearfix"><div class='section_inner_margin clearfix'>

<!-- <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6">
		<div class="vc_column-inner vc_custom_1456911787818"><div class="wpb_wrapper">
			<div class="separator  transparent   " style="margin-top: 2px;margin-bottom: 0px;"></div>
<div role="form" class="wpcf7" id="wpcf7-f314-p308-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"></div> -->
<!-- <form action="https://alzadcarpentry.com/contact-us/#wpcf7-f314-p308-o1" method="post" class="wpcf7-form cf7_custom_style_2" novalidate="novalidate">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="314" />
<input type="hidden" name="_wpcf7_version" value="5.1.6" />
<input type="hidden" name="_wpcf7_locale" value="en_US" />
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f314-p308-o1" />
<input type="hidden" name="_wpcf7_container_post" value="308" />
</div>
<p><span class="wpcf7-form-control-wrap full-name"><input type="text" name="full-name" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Your name" /></span></p>
<p><span class="wpcf7-form-control-wrap email"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email" aria-invalid="false" placeholder="Your e-mail address" /></span></p>
<p><span class="wpcf7-form-control-wrap message"><textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Message"></textarea></span></p>
<p><input type="submit" value="SEND MESSAGE" class="wpcf7-form-control wpcf7-submit" /></p>
<div class="wpcf7-response-output wpcf7-display-none"></div>
</form> -->
<!-- </div>
<div class="separator  transparent   " style="margin-top: 58px;margin-bottom: 0px;">
gg</div>
</div>
</div></div> -->

	
	<div      class="vc_row wpb_row section vc_row-fluid  vc_custom_1456911944161 grid_section" style=' text-align:left;'><div class=" section_inner clearfix"><div class='section_inner_margin clearfix'><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6"><div class="vc_column-inner vc_custom_1456911787818"><div class="wpb_wrapper"><div class="separator  transparent   " style="margin-top: 2px;margin-bottom: 0px;"></div>
	<form action="" method="post"><br>
    <input type="text" name="title" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Your name">
    <input type="text" name="email" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email" aria-invalid="false" placeholder="Your e-mail address">
    <textarea type="text" name="text"  cols="40" rows="6" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Message"></textarea>
     <input type="submit" name="submit" class="button_color1" value=" Send Message" style="margin-top: 38px;padding:12px; 
	 border:3px solid black;color:black;background-color:transparent; font-weidth:bolder;">
    </form>
	<div role="form" class="wpcf7" id="wpcf7-f314-p308-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"></div>


</div>
<div class="separator  transparent   " style="margin-top: 58px;margin-bottom: 0px;"></div>
</div></div></div>

<div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-3 vc_col-xs-12"><div class="vc_column-inner vc_custom_1456911800626"><div class="wpb_wrapper"><div class="separator  transparent   " style="margin-top: 2px;margin-bottom: 0px;"></div>
<div class='google_map_shortcode_holder' style='height:300px;'><div class='qode_google_map' style='height:300px;' id='map_canvas_88959' data-addresses='["united arab emirates"]' data-custom-map-style='false' data-color-overlay='#393939' data-saturation='-100' data-lightness='-60' data-zoom='5' data-pin='https://alzadcarpentry.com/wp-content/uploads/2016/03/pin.png' data-unique-id='88959' data-google-maps-scroll-wheel='false' data-snazzy-map-style='no' data-map-height='300'></div><div class='google_map_shortcode_overlay'></div></div><div class="separator  transparent   " style="margin-top: 58px;margin-bottom: 0px;"></div>
</div></div></div><div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-3 vc_col-xs-12"><div class="vc_column-inner"><div class="wpb_wrapper">
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<h4>Our offices</h4>

		</div> 
	</div> <div class="separator  transparent   " style="margin-top: 28px;margin-bottom: 0px;"></div>

	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
		<ul class="thememount_vc_contact_wrapper">
<li class="thememount-contact-phonenumber tmicon-fa-phone">00971-55-5575101</li>
<li class="thememount-contact-email tmicon-fa-envelope-o"><a href="mailto:info@artminddecor.com">info@artminddecor.com</a></li>
<li class="thememount-contact-website tmicon-fa-globe"><a href="../index.html">https://www.artminddecor.com/</a></li>
<li class="thememount-contact-address tmicon-fa-map-marker">Art Mind Decor LLC<br />
P.O BOX 186692<br />
Shop no 1&2 owner sheikha Muhara Ahmad Majid Al ghuriar Diera Al qousis Dubai</li>
</ul>

		</div> 
	</div> <div class="separator  transparent   " style="margin-top: 38px;margin-bottom: 0px;"></div>
<span data-type="square" data-hover-bg-color="#303030" data-hover-icon-color="#ffffff" class="qode_icon_shortcode fa-stack q_font_awsome_icon_square fa-lg  " style="background-color: #ffffff;border: 2px solid #303030;margin: 0 8px 0 0;font-size: 13px;font-size: 18px;border-radius: 3px; "><a   itemprop="url" href="https://www.facebook.com/" target="_blank"><span aria-hidden="true" class="qode_icon_font_elegant social_facebook qode_icon_element" style="font-size: 13px;color: #303030;" ></span></a></span><span data-type="square" data-hover-bg-color="#303030" data-hover-icon-color="#ffffff" class="qode_icon_shortcode fa-stack q_font_awsome_icon_square fa-lg  " style="background-color: #ffffff;border: 2px solid #303030;margin: 0 8px 0 0;font-size: 13px;font-size: 18px;border-radius: 3px; "><a   itemprop="url" href="https://www.twitter.com/" target="_blank"><span aria-hidden="true" class="qode_icon_font_elegant social_twitter qode_icon_element" style="font-size: 13px;color: #303030;" ></span></a></span><span data-type="square" data-hover-bg-color="#303030" data-hover-icon-color="#ffffff" class="qode_icon_shortcode fa-stack q_font_awsome_icon_square fa-lg  " style="background-color: #ffffff;border: 2px solid #303030;font-size: 13px;font-size: 18px;border-radius: 3px; "><a   itemprop="url" href="https://www.instagram.com/" target="_blank"><span aria-hidden="true" class="qode_icon_font_elegant social_instagram qode_icon_element" style="font-size: 13px;color: #303030;" ></span></a></span><div class="separator  transparent   " style="margin-top: 58px;margin-bottom: 0px;"></div>
</div></div></div></div></div></div>
										 
												</div>
	</div>
				
	</div>
</div>

	<footer >
		<div class="footer_inner clearfix">
				<div class="footer_top_holder">
            			<div class="footer_top">
								<div class="container">
					<div class="container_inner">
																	<div class="three_columns clearfix">
								<div class="column1 footer_col1">
									<div class="column_inner">
																			</div>
								</div>
								<div class="column2 footer_col2">
									<div class="column_inner">
																			</div>
								</div>
								<div class="column3 footer_col3">
									<div class="column_inner">
																			</div>
								</div>
							</div>
															</div>
				</div>
							</div>
					</div>
							<div class="footer_bottom_holder">
                									<div class="footer_bottom">
							<div class="textwidget"><span data-type="square" data-hover-bg-color="#ffffff" data-hover-icon-color="#000000" class="qode_icon_shortcode fa-stack q_font_awsome_icon_square fa-lg  " style="background-color: rgba(255,255,255,0.01);border: 2px solid #ffffff;margin: 0 8px 0 0;font-size: 13px;font-size: 18px;border-radius: 3px; "><a   itemprop="url" href="http://www.facebook.com/" target="_blank"><span aria-hidden="true" class="qode_icon_font_elegant social_facebook qode_icon_element" style="font-size: 13px;color: #ffffff;" ></span></a></span><span data-type="square" data-hover-bg-color="#ffffff" data-hover-icon-color="#000000" class="qode_icon_shortcode fa-stack q_font_awsome_icon_square fa-lg  " style="background-color: rgba(255,255,255,0.01);border: 2px solid #ffffff;margin: 0 8px 0 0;font-size: 13px;font-size: 18px;border-radius: 3px; "><a   itemprop="url" href="http://twitter.com/" target="_blank"><span aria-hidden="true" class="qode_icon_font_elegant social_twitter qode_icon_element" style="font-size: 13px;color: #ffffff;" ></span></a></span><span data-type="square" data-hover-bg-color="#ffffff" data-hover-icon-color="#000000" class="qode_icon_shortcode fa-stack q_font_awsome_icon_square fa-lg  " style="background-color: rgba(255,255,255,0.01);border: 2px solid #ffffff;font-size: 13px;font-size: 18px;border-radius: 3px; "><a   itemprop="url" href="http://instagram.com/" target="_blank"><span aria-hidden="true" class="qode_icon_font_elegant social_instagram qode_icon_element" style="font-size: 13px;color: #ffffff;" ></span></a></span></div>
							<div class="textwidget"><p>© Art Mind Decor 2020 – Developed By <b><a href="https://rehman-portfolio.netlify.app/">Rehman</a></b></p></div>
						</div>
								</div>
				</div>
	</footer>
		
</div>
</div>
<!-- WhatsHelp.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "00971-56-8344370", // WhatsApp number
            call: "00971.50.1780115", // Call phone number
            facebook: "https://www.artminddecor.com/", // Facebook page ID
            email: "info@artminddecor.com", // Email
            call_to_action: "Message us", // Call to action
            button_color: "#8C5418", // Color of button
            position: "left", // Position may be 'right' or 'left'
            order: "whatsapp,call", // Order of buttons
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /WhatsHelp.io widget --><script type='text/javascript'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"https:\/\/alzadcarpentry.com\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"}};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/contact-form-7/includes/js/scriptsb62d.js?ver=5.1.6'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/core.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/widget.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/accordion.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/position.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/menu.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='../wp-includes/js/wp-a11y.min5010.js?ver=4.9.8'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var uiAutocompleteL10n = {"noResults":"No results found.","oneResult":"1 result found. Use up and down arrow keys to navigate.","manyResults":"%d results found. Use up and down arrow keys to navigate.","itemSelected":"Item selected."};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/autocomplete.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/button.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/datepicker.mine899.js?ver=1.11.4'></script>
<script type='text/javascript'>
jQuery(document).ready(function(jQuery){jQuery.datepicker.setDefaults({"closeText":"Close","currentText":"Today","monthNames":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthNamesShort":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"nextText":"Next","prevText":"Previous","dayNames":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"dayNamesShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"dayNamesMin":["S","M","T","W","T","F","S"],"dateFormat":"MM d, yy","firstDay":1,"isRTL":false});});
</script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/mouse.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/resizable.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/draggable.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/dialog.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/droppable.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/progressbar.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/selectable.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/sortable.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/slider.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/spinner.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/tooltip.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/tabs.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/effect.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/effect-blind.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/effect-bounce.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/effect-clip.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/effect-drop.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/effect-explode.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/effect-fade.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/effect-fold.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/effect-highlight.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/effect-pulsate.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/effect-size.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/effect-scale.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/effect-shake.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/effect-slide.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/effect-transfer.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='../wp-content/themes/bridge/js/plugins/doubletaptogo5010.js?ver=4.9.8'></script>
<script type='text/javascript' src='../wp-content/themes/bridge/js/plugins/modernizr.min5010.js?ver=4.9.8'></script>
<script type='text/javascript' src='../wp-content/themes/bridge/js/plugins/jquery.appear5010.js?ver=4.9.8'></script>
<script type='text/javascript' src='../wp-includes/js/hoverIntent.minc245.js?ver=1.8.1'></script>
<script type='text/javascript' src='../wp-content/themes/bridge/js/plugins/counter5010.js?ver=4.9.8'></script>
<script type='text/javascript' src='../wp-content/themes/bridge/js/plugins/easypiechart5010.js?ver=4.9.8'></script>
<script type='text/javascript' src='../wp-content/themes/bridge/js/plugins/mixitup5010.js?ver=4.9.8'></script>
<script type='text/javascript' src='../wp-content/plugins/js_composer/assets/lib/prettyphoto/js/jquery.prettyPhoto.mine23c.js?ver=5.7'></script>
<script type='text/javascript' src='../wp-content/themes/bridge/js/plugins/jquery.fitvids5010.js?ver=4.9.8'></script>
<script type='text/javascript' src='../wp-content/plugins/js_composer/assets/lib/bower/flexslider/jquery.flexslider-mine23c.js?ver=5.7'></script>
<script type='text/javascript' src='../wp-includes/js/mediaelement/wp-mediaelement.min5010.js?ver=4.9.8'></script>
<script type='text/javascript' src='../wp-content/themes/bridge/js/plugins/infinitescroll.min5010.js?ver=4.9.8'></script>
<script type='text/javascript' src='../wp-content/themes/bridge/js/plugins/jquery.waitforimages5010.js?ver=4.9.8'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/jquery.form.min50fa.js?ver=4.2.1'></script>
<script type='text/javascript' src='../wp-content/plugins/js_composer/assets/lib/waypoints/waypoints.mine23c.js?ver=5.7'></script>
<script type='text/javascript' src='../wp-content/themes/bridge/js/plugins/jplayer.min5010.js?ver=4.9.8'></script>
<script type='text/javascript' src='../wp-content/themes/bridge/js/plugins/bootstrap.carousel5010.js?ver=4.9.8'></script>
<script type='text/javascript' src='../wp-content/themes/bridge/js/plugins/skrollr5010.js?ver=4.9.8'></script>
<script type='text/javascript' src='../wp-content/themes/bridge/js/plugins/Chart.min5010.js?ver=4.9.8'></script>
<script type='text/javascript' src='../wp-content/themes/bridge/js/plugins/jquery.easing.1.35010.js?ver=4.9.8'></script>
<script type='text/javascript' src='../wp-content/themes/bridge/js/plugins/abstractBaseClass5010.js?ver=4.9.8'></script>
<script type='text/javascript' src='../wp-content/themes/bridge/js/plugins/jquery.countdown5010.js?ver=4.9.8'></script>
<script type='text/javascript' src='../wp-content/themes/bridge/js/plugins/jquery.multiscroll.min5010.js?ver=4.9.8'></script>
<script type='text/javascript' src='../wp-content/themes/bridge/js/plugins/jquery.justifiedGallery.min5010.js?ver=4.9.8'></script>
<script type='text/javascript' src='../wp-content/themes/bridge/js/plugins/bigtext5010.js?ver=4.9.8'></script>
<script type='text/javascript' src='../wp-content/themes/bridge/js/plugins/jquery.sticky-kit.min5010.js?ver=4.9.8'></script>
<script type='text/javascript' src='../wp-content/themes/bridge/js/plugins/owl.carousel.min5010.js?ver=4.9.8'></script>
<script type='text/javascript' src='../wp-content/themes/bridge/js/plugins/typed5010.js?ver=4.9.8'></script>
<script type='text/javascript' src='../wp-content/themes/bridge/js/plugins/jquery.carouFredSel-6.2.1.min5010.js?ver=4.9.8'></script>
<script type='text/javascript' src='../wp-content/themes/bridge/js/plugins/lemmon-slider.min5010.js?ver=4.9.8'></script>
<script type='text/javascript' src='../wp-content/themes/bridge/js/plugins/jquery.fullPage.min5010.js?ver=4.9.8'></script>
<script type='text/javascript' src='../wp-content/themes/bridge/js/plugins/jquery.mousewheel.min5010.js?ver=4.9.8'></script>
<script type='text/javascript' src='../wp-content/themes/bridge/js/plugins/jquery.touchSwipe.min5010.js?ver=4.9.8'></script>
<script type='text/javascript' src='../wp-content/plugins/js_composer/assets/lib/bower/isotope/dist/isotope.pkgd.mine23c.js?ver=5.7'></script>
<script type='text/javascript' src='../wp-content/themes/bridge/js/plugins/packery-mode.pkgd.min5010.js?ver=4.9.8'></script>
<script type='text/javascript' src='../wp-content/themes/bridge/js/plugins/jquery.stretch5010.js?ver=4.9.8'></script>
<script type='text/javascript' src='../wp-content/themes/bridge/js/plugins/imagesloaded5010.js?ver=4.9.8'></script>
<script type='text/javascript' src='../wp-content/themes/bridge/js/plugins/rangeslider.min5010.js?ver=4.9.8'></script>
<script type='text/javascript' src='../wp-content/themes/bridge/js/plugins/jquery.event.move5010.js?ver=4.9.8'></script>
<script type='text/javascript' src='../wp-content/themes/bridge/js/plugins/jquery.twentytwenty5010.js?ver=4.9.8'></script>
<script type='text/javascript' src='../wp-content/themes/bridge/js/plugins/TweenLite.min5010.js?ver=4.9.8'></script>
<script type='text/javascript' src='../wp-content/themes/bridge/js/plugins/smoothPageScroll.min5010.js?ver=4.9.8'></script>
<script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?key=AIzaSyCaYD4P9m2S7L8CLl2r6Yx7IsF1KxLN5PI&amp;ver=4.9.8'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var no_ajax_obj = {"no_ajax_pages":["","https:\/\/alzadcarpentry.com\/wp-login.php?action=logout&_wpnonce=6369a8777f"]};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/themes/bridge/js/default_dynamice425.js?ver=1578647867'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var QodeAdminAjax = {"ajaxurl":"https:\/\/alzadcarpentry.com\/wp-admin\/admin-ajax.php"};
var qodeGlobalVars = {"vars":{"qodeAddingToCartLabel":"Adding to Cart...","page_scroll_amount_for_sticky":""}};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/themes/bridge/js/default.min5010.js?ver=4.9.8'></script>
<script type='text/javascript' src='../wp-includes/js/comment-reply.min5010.js?ver=4.9.8'></script>
<script type='text/javascript' src='../wp-content/themes/bridge/js/ajax.min5010.js?ver=4.9.8'></script>
<script type='text/javascript' src='../wp-content/plugins/js_composer/assets/js/dist/js_composer_front.mine23c.js?ver=5.7'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var qodeLike = {"ajaxurl":"https:\/\/alzadcarpentry.com\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/themes/bridge/js/plugins/qode-like.min5010.js?ver=4.9.8'></script>
<script type='text/javascript' src='../wp-includes/js/wp-embed.min5010.js?ver=4.9.8'></script>
<!-- Code injected by live-server -->
<script type="text/javascript">
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script></body>
<script>'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'}),_trfd.push({'ap':'cpsh'},{'server':'p3plcpnl0146'}) 
// Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.</script><script src='../../img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js'></script>


</html>

<!-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post"><br><br><br>
    <input type="text" name="title"><br><br><br>
    <input type="text" name="email"><br><br><br>
    <input type="text" name="text"><br><br><br>
     <input type="submit" name="submit" value="submit">
    </form>
<!-- Code injected b
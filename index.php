

<!DOCTYPE html>
<!--[if IE 8]>
<html xmlns="http://www.w3.org/1999/xhtml" class="ie8 wp-toolbar"  lang="en-US">
<![endif]-->
<!--[if !(IE 8) ]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" class="wp-toolbar"  lang="en-US">
<!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Manage Users &lsaquo; real &#8212; WordPress</title>
<script type="text/javascript">
addLoadEvent = function(func){if(typeof jQuery!="undefined")jQuery(document).ready(func);else if(typeof wpOnload!='function'){wpOnload=func;}else{var oldonload=wpOnload;wpOnload=function(){oldonload();func();}}};
var ajaxurl = '/wp-admin/admin-ajax.php',
	pagenow = 'users_page_manage-user-list',
	typenow = '',
	adminpage = 'users_page_manage-user-list',
	thousandsSeparator = ',',
	decimalPoint = '.',
	isRtl = 0;
</script>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel='dns-prefetch' href='//s.w.org' />
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
</style>
<link rel='stylesheet' href='http://real.nadsoftpro.info/wp-admin/load-styles.php?c=0&amp;dir=ltr&amp;load%5B%5D=dashicons,admin-bar,common,forms,admin-menu,dashboard,list-tables,edit,revisions,media,themes,about,nav-menus,wp-pointer,widgets&amp;load%5B%5D=,site-icon,l10n,buttons,wp-auth-check,wp-color-picker&amp;ver=4.9.1' type='text/css' media='all' />
<link rel='stylesheet' id='phppc_styles-css'  href='http://real.nadsoftpro.info/wp-content/plugins/php-code-for-posts/style.css?ver=4.9.1' type='text/css' media='all' />
<link rel='stylesheet' id='phppc_codemirror-css'  href='http://real.nadsoftpro.info/wp-content/plugins/php-code-for-posts/Codemirror/lib/codemirror.css?ver=4.9.1' type='text/css' media='all' />
<!--[if lte IE 7]>
<link rel='stylesheet' id='ie-css'  href='http://real.nadsoftpro.info/wp-admin/css/ie.min.css?ver=4.9.1' type='text/css' media='all' />
<![endif]-->
<link rel='stylesheet' id='fontawesome_css_for_training-css'  href='http://real.nadsoftpro.info/wp-content/plugins/manage-trainings/css/admin/font-awesome.min.css?ver=4.9.1' type='text/css' media='all' />
<link rel='stylesheet' id='bp-admin-bar-css'  href='http://real.nadsoftpro.info/wp-content/plugins/buddypress/bp-core/css/admin-bar.min.css?ver=2.9.2' type='text/css' media='all' />
<link rel='stylesheet' id='bp-admin-common-css-css'  href='http://real.nadsoftpro.info/wp-content/plugins/buddypress/bp-core/admin/css/common.min.css?ver=2.9.2' type='text/css' media='all' />
<link rel='stylesheet' id='bbp-admin-css-css'  href='http://real.nadsoftpro.info/wp-content/plugins/bbpress/includes/admin/css/admin.css?ver=2.5.14-6684' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-css'  href='http://real.nadsoftpro.info/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=1.8.8' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-admin-app-css'  href='http://real.nadsoftpro.info/wp-content/plugins/elementor/assets/css/admin.min.css?ver=1.8.8' type='text/css' media='all' />
<link rel='stylesheet' id='thickbox-css'  href='http://real.nadsoftpro.info/wp-includes/js/thickbox/thickbox.css?ver=4.9.1' type='text/css' media='all' />
<link rel='stylesheet' id='wpmu-select2-3-min-css-css'  href='http://real.nadsoftpro.info/wp-content/plugins/membership/lib/wpmu-lib/css/select2.3.min.css?ver=4.9.1' type='text/css' media='all' />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.3\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.3\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/real.nadsoftpro.info\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.9.1"}};
			!function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55358,56794,8205,9794,65039],[55358,56794,8203,9794,65039]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<script type='text/javascript'>
/* <![CDATA[ */
var BP_Confirm = {"are_you_sure":"Are you sure?"};
/* ]]> */
</script>

<script type='text/javascript'>
/* <![CDATA[ */
var userSettings = {"url":"\/","uid":"78","time":"1512997571","secure":""};/* ]]> */
</script>
<script type='text/javascript' src='http://real.nadsoftpro.info/wp-admin/load-scripts.php?c=0&amp;load%5B%5D=jquery-core,jquery-migrate,utils&amp;ver=4.9.1'></script>
<script type='text/javascript' src='http://real.nadsoftpro.info/wp-content/plugins/php-code-for-posts/PHPPostCode.js?ver=4.9.1'></script>
<script type='text/javascript' src='http://real.nadsoftpro.info/wp-content/plugins/php-code-for-posts/Codemirror/lib/codemirror.js?ver=4.9.1'></script>
<script type='text/javascript' src='http://real.nadsoftpro.info/wp-content/plugins/php-code-for-posts/Codemirror/lang/clike.js?ver=4.9.1'></script>
<script type='text/javascript' src='http://real.nadsoftpro.info/wp-content/plugins/php-code-for-posts/Codemirror/lang/css.js?ver=4.9.1'></script>
<script type='text/javascript' src='http://real.nadsoftpro.info/wp-content/plugins/php-code-for-posts/Codemirror/lang/htmlmixed.js?ver=4.9.1'></script>
<script type='text/javascript' src='http://real.nadsoftpro.info/wp-content/plugins/php-code-for-posts/Codemirror/lang/javascript.js?ver=4.9.1'></script>
<script type='text/javascript' src='http://real.nadsoftpro.info/wp-content/plugins/php-code-for-posts/Codemirror/lang/php.js?ver=4.9.1'></script>
<script type='text/javascript' src='http://real.nadsoftpro.info/wp-content/plugins/php-code-for-posts/Codemirror/lang/xml.js?ver=4.9.1'></script>
<script type='text/javascript' src='http://real.nadsoftpro.info/wp-content/plugins/php-code-for-posts/Codemirror/addon/matchbrackets.js?ver=4.9.1'></script>
<script type='text/javascript' src='http://real.nadsoftpro.info/wp-content/plugins/buddypress/bp-core/js/confirm.min.js?ver=2.9.2'></script>
<script type='text/javascript' src='http://real.nadsoftpro.info/wp-content/plugins/ocean-extra//includes/widgets/js/insta-admin.js?ver=4.9.1'></script>
<script type='text/javascript' src='http://real.nadsoftpro.info/wp-content/plugins/membership/app/assets/js/ms-admin.min.js?ver=4.1.1'></script>
<script type='text/javascript' src='http://real.nadsoftpro.info/wp-content/plugins/membership/app/assets/js/jquery.m2.plugins.js?ver=4.1.1'></script>
<style>div#setting-error-tgmpa{display:block;}</style>	<link id="wp-admin-canonical" rel="canonical" href="http://real.nadsoftpro.info/wp-admin/users.php?page=manage-user-list" />
	<script>
		if ( window.history.replaceState ) {
			window.history.replaceState( null, null, document.getElementById( 'wp-admin-canonical' ).href + window.location.hash );
		}
	</script>
<script type="text/javascript">var _wpColorScheme = {"icons":{"base":"#82878c","focus":"#00a0d2","current":"#fff"}};</script>
<style type="text/css" media="print">#wpadminbar { display:none; }</style>
</head>
<body class="wp-admin wp-core-ui no-js  buddypress users_page_manage-user-list auto-fold admin-bar branch-4-9 version-4-9-1 admin-color-fresh locale-en-us multisite no-customize-support no-svg">
<script type="text/javascript">
	document.body.className = document.body.className.replace('no-js','js');
</script>

	<!--[if lte IE 8]>
		<script type="text/javascript">
			document.body.className = document.body.className.replace( /(^|\s)(no-)?customize-support(?=\s|$)/, '' ) + ' no-customize-support';
		</script>
	<![endif]-->
	<!--[if gte IE 9]><!-->
		<script type="text/javascript">
			(function() {
				var request, b = document.body, c = 'className', cs = 'customize-support', rcs = new RegExp('(^|\\s+)(no-)?'+cs+'(\\s+|$)');

						request = true;
		
				b[c] = b[c].replace( rcs, ' ' );
				// The customizer requires postMessage and CORS (if the site is cross domain)
				b[c] += ( window.postMessage && request ? ' ' : ' no-' ) + cs;
			}());
		</script>
	<!--<![endif]-->
	
<div id="wpwrap">

<div id="adminmenumain" role="navigation" aria-label="Main menu">
<a href="#wpbody-content" class="screen-reader-shortcut">Skip to main content</a>
<a href="#wp-toolbar" class="screen-reader-shortcut">Skip to toolbar</a>
<div id="adminmenuback"></div>
<div id="adminmenuwrap">
<ul id="adminmenu">


	<li class="wp-first-item wp-has-submenu wp-not-current-submenu menu-top menu-top-first menu-icon-dashboard menu-top-first menu-top-last" id="menu-dashboard">
	<a href='index.php' class="wp-first-item wp-has-submenu wp-not-current-submenu menu-top menu-top-first menu-icon-dashboard menu-top-first menu-top-last" aria-haspopup="true"><div class="wp-menu-arrow"><div></div></div><div class='wp-menu-image dashicons-before dashicons-dashboard'><br /></div><div class='wp-menu-name'>Dashboard</div></a>
	<ul class='wp-submenu wp-submenu-wrap'><li class='wp-submenu-head' aria-hidden='true'>Dashboard</li><li class="wp-first-item"><a href='index.php' class="wp-first-item">Home</a></li><li><a href='my-sites.php'>My Sites</a></li></ul></li>
	<li class="wp-not-current-submenu wp-menu-separator" aria-hidden="true"><div class="separator"></div></li>
	<li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-post open-if-no-js menu-top-first" id="menu-posts">
	<a href='edit.php' class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-post open-if-no-js menu-top-first" aria-haspopup="true"><div class="wp-menu-arrow"><div></div></div><div class='wp-menu-image dashicons-before dashicons-admin-post'><br /></div><div class='wp-menu-name'>Posts</div></a>
	<ul class='wp-submenu wp-submenu-wrap'><li class='wp-submenu-head' aria-hidden='true'>Posts</li><li class="wp-first-item"><a href='edit.php' class="wp-first-item">All Posts</a></li><li><a href='post-new.php'>Add New</a></li><li><a href='edit-tags.php?taxonomy=category'>Categories</a></li><li><a href='edit-tags.php?taxonomy=post_tag'>Tags</a></li></ul></li>
	<li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-media" id="menu-media">
	<a href='upload.php' class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-media" aria-haspopup="true"><div class="wp-menu-arrow"><div></div></div><div class='wp-menu-image dashicons-before dashicons-admin-media'><br /></div><div class='wp-menu-name'>Media</div></a>
	<ul class='wp-submenu wp-submenu-wrap'><li class='wp-submenu-head' aria-hidden='true'>Media</li><li class="wp-first-item"><a href='upload.php' class="wp-first-item">Library</a></li><li><a href='media-new.php'>Add New</a></li></ul></li>
	<li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-page" id="menu-pages">
	<a href='edit.php?post_type=page' class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-page" aria-haspopup="true"><div class="wp-menu-arrow"><div></div></div><div class='wp-menu-image dashicons-before dashicons-admin-page'><br /></div><div class='wp-menu-name'>Pages</div></a>
	<ul class='wp-submenu wp-submenu-wrap'><li class='wp-submenu-head' aria-hidden='true'>Pages</li><li class="wp-first-item"><a href='edit.php?post_type=page' class="wp-first-item">All Pages</a></li><li><a href='post-new.php?post_type=page'>Add New</a></li><li><a href='edit-tags.php?taxonomy=category&amp;post_type=page'>Categories</a></li><li><a href='edit-tags.php?taxonomy=post_tag&amp;post_type=page'>Tags</a></li></ul></li>
	<li class="wp-not-current-submenu menu-top toplevel_page_Manage Training" id="toplevel_page_Manage-Training">
	<a href='admin.php?page=Manage Training' class="wp-not-current-submenu menu-top toplevel_page_Manage Training" ><div class="wp-menu-arrow"><div></div></div><div class='wp-menu-image dashicons-before dashicons-welcome-learn-more'><br /></div><div class='wp-menu-name'>Manage Training</div></a></li>
	<li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-training" id="menu-posts-training">
	<a href='edit.php?post_type=training' class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-training" aria-haspopup="true"><div class="wp-menu-arrow"><div></div></div><div class='wp-menu-image dashicons-before dashicons-awards'><br /></div><div class='wp-menu-name'>Categories</div></a>
	<ul class='wp-submenu wp-submenu-wrap'><li class='wp-submenu-head' aria-hidden='true'>Categories</li><li class="wp-first-item"><a href='edit.php?post_type=training' class="wp-first-item">Categories</a></li><li><a href='post-new.php?post_type=training'>Add New</a></li></ul></li>
	<li class="wp-has-submenu wp-not-current-submenu menu-top toplevel_page_ctc-custom-quiz/mlw_quizmaster2" id="toplevel_page_ctc-custom-quiz-mlw_quizmaster2"><a href='admin.php?page=ctc-custom-quiz/mlw_quizmaster2.php' class="wp-has-submenu wp-not-current-submenu menu-top toplevel_page_ctc-custom-quiz/mlw_quizmaster2" aria-haspopup="true"><div class="wp-menu-arrow"><div></div></div><div class='wp-menu-image dashicons-before dashicons-editor-spellcheck'><br /></div><div class='wp-menu-name'>Quiz</div></a>
	<ul class='wp-submenu wp-submenu-wrap'><li class='wp-submenu-head' aria-hidden='true'>Quiz</li><li class="wp-first-item"><a href='admin.php?page=ctc-custom-quiz/mlw_quizmaster2.php' class="wp-first-item">Quiz</a></li><li><a href='admin.php?page=mlw_category_options'>Category</a></li><li><a href='admin.php?page=mlw_quiz_results'>Results</a></li><li><a href='admin.php?page=qmn_global_settings'>Settings</a></li><li><a href='admin.php?page=mlw_quiz_tools'>Tools</a></li><li><a href='admin.php?page=qmn_stats'>Stats</a></li></ul></li>
	<li class="wp-not-current-submenu menu-top menu-icon-comments menu-top-last" id="menu-comments">
	<a href='edit-comments.php' class="wp-not-current-submenu menu-top menu-icon-comments menu-top-last" ><div class="wp-menu-arrow"><div></div></div><div class='wp-menu-image dashicons-before dashicons-admin-comments'><br /></div><div class='wp-menu-name'>Comments <span class="awaiting-mod count-0"><span class="pending-count">0</span></span></div></a></li>
	<li class="wp-not-current-submenu wp-menu-separator bbpress" aria-hidden="true"><div class="separator"></div></li>
	<li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-forum menu-top-first" id="menu-posts-forum">
	<a href='edit.php?post_type=forum' class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-forum menu-top-first" aria-haspopup="true"><div class="wp-menu-arrow"><div></div></div><div class='wp-menu-image dashicons-before'></div><div class='wp-menu-name'>Forums</div></a>
	<ul class='wp-submenu wp-submenu-wrap'><li class='wp-submenu-head' aria-hidden='true'>Forums</li><li class="wp-first-item"><a href='edit.php?post_type=forum' class="wp-first-item">All Forums</a></li><li><a href='post-new.php?post_type=forum'>New Forum</a></li></ul></li>
	<li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-topic" id="menu-posts-topic">
	<a href='edit.php?post_type=topic' class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-topic" aria-haspopup="true"><div class="wp-menu-arrow"><div></div></div><div class='wp-menu-image dashicons-before'></div><div class='wp-menu-name'>Topics</div></a>
	<ul class='wp-submenu wp-submenu-wrap'><li class='wp-submenu-head' aria-hidden='true'>Topics</li><li class="wp-first-item"><a href='edit.php?post_type=topic' class="wp-first-item">All Topics</a></li><li><a href='post-new.php?post_type=topic'>New Topic</a></li><li><a href='edit-tags.php?taxonomy=topic-tag&amp;post_type=topic'>Topic Tags</a></li></ul></li>
	<li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-reply menu-top-last" id="menu-posts-reply">
	<a href='edit.php?post_type=reply' class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-reply menu-top-last" aria-haspopup="true"><div class="wp-menu-arrow"><div></div></div><div class='wp-menu-image dashicons-before'></div><div class='wp-menu-name'>Replies</div></a>
	<ul class='wp-submenu wp-submenu-wrap'><li class='wp-submenu-head' aria-hidden='true'>Replies</li><li class="wp-first-item"><a href='edit.php?post_type=reply' class="wp-first-item">All Replies</a></li><li><a href='post-new.php?post_type=reply'>New Reply</a></li></ul></li>
	<li class="wp-not-current-submenu wp-menu-separator buddypress" aria-hidden="true"><div class="separator"></div></li>
	<li class="wp-not-current-submenu menu-top toplevel_page_bp-activity menu-top-first" id="toplevel_page_bp-activity">
	<a href='admin.php?page=bp-activity' class="wp-not-current-submenu menu-top toplevel_page_bp-activity menu-top-first" ><div class="wp-menu-arrow"><div></div></div><div class='wp-menu-image dashicons-before'><br /></div><div class='wp-menu-name'>Activity</div></a></li>
	<li class="wp-not-current-submenu menu-top toplevel_page_bp-groups" id="toplevel_page_bp-groups">
	<a href='admin.php?page=bp-groups' class="wp-not-current-submenu menu-top toplevel_page_bp-groups" ><div class="wp-menu-arrow"><div></div></div><div class='wp-menu-image dashicons-before'><br /></div><div class='wp-menu-name'>Groups</div></a></li>
	<li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-bp-email menu-top-last" id="menu-posts-bp-email">
	<a href='edit.php?post_type=bp-email' class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-bp-email menu-top-last" aria-haspopup="true"><div class="wp-menu-arrow"><div></div></div><div class='wp-menu-image dashicons-before dashicons-email'><br /></div><div class='wp-menu-name'>Emails</div></a>
	<ul class='wp-submenu wp-submenu-wrap'><li class='wp-submenu-head' aria-hidden='true'>Emails</li><li class="wp-first-item"><a href='edit.php?post_type=bp-email' class="wp-first-item">All Emails</a></li><li><a href='post-new.php?post_type=bp-email'>Add New</a></li><li><a href='edit.php?post_type=bp-email&#038;page=bp-emails-customizer-redirect'>Customize</a></li></ul></li>
	<li class="wp-not-current-submenu wp-menu-separator" aria-hidden="true"><div class="separator"></div></li>
	<li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-appearance menu-top-first" id="menu-appearance">
	<a href='themes.php' class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-appearance menu-top-first" aria-haspopup="true"><div class="wp-menu-arrow"><div></div></div><div class='wp-menu-image dashicons-before dashicons-admin-appearance'><br /></div><div class='wp-menu-name'>Appearance</div></a>
	<ul class='wp-submenu wp-submenu-wrap'><li class='wp-submenu-head' aria-hidden='true'>Appearance</li><li class="wp-first-item"><a href='themes.php' class="wp-first-item">Themes</a></li><li class="hide-if-no-customize"><a href='customize.php?return=%2Fwp-admin%2Fusers.php%3Fpage%3Dmanage-user-list' class="hide-if-no-customize">Customize</a></li><li><a href='widgets.php'>Widgets</a></li><li><a href='nav-menus.php'>Menus</a></li><li class="hide-if-no-customize"><a href='customize.php?return=%2Fwp-admin%2Fusers.php%3Fpage%3Dmanage-user-list&#038;autofocus%5Bcontrol%5D=header_image' class="hide-if-no-customize">Header</a></li><li><a href='themes.php?page=bp-emails-customizer-redirect'>Emails</a></li><li><a href='themes.php?page=custom-header'>Header</a></li><li><a href='edit.php?post_type=elementor-hf'>Header Footer Builder</a></li></ul></li>
	<li class="wp-not-current-submenu menu-top menu-icon-plugins" id="menu-plugins">
	<a href='plugins.php' class="wp-not-current-submenu menu-top menu-icon-plugins" ><div class="wp-menu-arrow"><div></div></div><div class='wp-menu-image dashicons-before dashicons-admin-plugins'><br /></div><div class='wp-menu-name'>Plugins </div></a></li>
	<li class="wp-has-submenu wp-has-current-submenu wp-menu-open menu-top menu-icon-users" id="menu-users">
	<a href='user-new.php' class="wp-has-submenu wp-has-current-submenu wp-menu-open menu-top menu-icon-users" ><div class="wp-menu-arrow"><div></div></div><div class='wp-menu-image dashicons-before dashicons-admin-users'><br /></div><div class='wp-menu-name'>Users</div></a>
	<ul class='wp-submenu wp-submenu-wrap'><li class='wp-submenu-head' aria-hidden='true'>Users</li><li class="wp-first-item"><a href='user-new.php' class="wp-first-item">Add New</a></li><li><a href='profile.php'>Your Profile</a></li><li class="current"><a href='users.php?page=manage-user-list' class="current" aria-current="page">Manage Users</a></li><li><a href='users.php?page=bp-profile-setup'>Profile Fields</a></li></ul></li>
	<li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-tools" id="menu-tools">
	<a href='tools.php' class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-tools" aria-haspopup="true"><div class="wp-menu-arrow"><div></div></div><div class='wp-menu-image dashicons-before dashicons-admin-tools'><br /></div><div class='wp-menu-name'>Tools</div></a>
	<ul class='wp-submenu wp-submenu-wrap'><li class='wp-submenu-head' aria-hidden='true'>Tools</li><li class="wp-first-item"><a href='tools.php' class="wp-first-item">Available Tools</a></li><li><a href='import.php'>Import</a></li><li><a href='export.php'>Export</a></li><li><a href='ms-delete-site.php'>Delete Site</a></li><li><a href='tools.php?page=bp-tools'>BuddyPress</a></li><li><a href='tools.php?page=bbp-repair'>Forums</a></li></ul></li>
	<li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-settings menu-top-last" id="menu-settings">
	<a href='options-general.php' class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-settings menu-top-last" aria-haspopup="true"><div class="wp-menu-arrow"><div></div></div><div class='wp-menu-image dashicons-before dashicons-admin-settings'><br /></div><div class='wp-menu-name'>Settings</div></a>
	<ul class='wp-submenu wp-submenu-wrap'><li class='wp-submenu-head' aria-hidden='true'>Settings</li><li class="wp-first-item"><a href='options-general.php' class="wp-first-item">General</a></li><li><a href='options-writing.php'>Writing</a></li><li><a href='options-reading.php'>Reading</a></li><li><a href='options-discussion.php'>Discussion</a></li><li><a href='options-media.php'>Media</a></li><li><a href='options-permalink.php'>Permalinks</a></li><li><a href='options-general.php?page=bp-components'>BuddyPress</a></li><li><a href='options-general.php?page=bbpress'>Forums</a></li></ul></li>
	<li class="wp-not-current-submenu wp-menu-separator" aria-hidden="true"><div class="separator"></div></li>
	<li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-generic toplevel_page_elementor menu-top-first" id="toplevel_page_elementor"><a href='admin.php?page=elementor' class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-generic toplevel_page_elementor menu-top-first" aria-haspopup="true"><div class="wp-menu-arrow"><div></div></div><div class='wp-menu-image dashicons-before dashicons-admin-generic'><br /></div><div class='wp-menu-name'>Elementor</div></a>
	<ul class='wp-submenu wp-submenu-wrap'><li class='wp-submenu-head' aria-hidden='true'>Elementor</li><li class="wp-first-item"><a href='admin.php?page=elementor' class="wp-first-item">Settings</a></li><li><a href='edit.php?post_type=elementor_library'>My Library</a></li><li><a href='admin.php?page=elementor-tools'>Tools</a></li><li><a href='admin.php?page=elementor-system-info'>System Info</a></li><li><a href='admin.php?page=go_elementor_pro'><span class="dashicons dashicons-star-filled" style="font-size: 17px"></span> Go Pro</a></li></ul></li>
	<li class="wp-has-submenu wp-not-current-submenu menu-top toplevel_page_oceanwp-panel" id="toplevel_page_oceanwp-panel"><a href='admin.php?page=oceanwp-panel' class="wp-has-submenu wp-not-current-submenu menu-top toplevel_page_oceanwp-panel" aria-haspopup="true"><div class="wp-menu-arrow"><div></div></div><div class='wp-menu-image dashicons-before dashicons-admin-generic'><br /></div><div class='wp-menu-name'>Theme Panel</div></a>
	<ul class='wp-submenu wp-submenu-wrap'><li class='wp-submenu-head' aria-hidden='true'>Theme Panel</li><li class="wp-first-item"><a href='admin.php?page=oceanwp-panel' class="wp-first-item">Theme Panel</a></li><li><a href='edit.php?post_type=oceanwp_library'>My Library</a></li><li><a href='admin.php?page=oceanwp-panel-scripts'>Scripts &amp; Styles</a></li><li><a href='admin.php?page=oceanwp-panel-import-export'>Import/Export</a></li><li><a href='admin.php?page=oceanwp-panel-install-demos'>Install Demos</a></li><li><a href='admin.php?page=oceanwp-panel-rec-plugins'>Rec. Plugins</a></li><li><a href='admin.php?page=oceanwp-panel-extensions'><span class="dashicons dashicons-star-filled" style="font-size: 16px; color: #ec4848;"></span> <span style="color: #ec4848">Extensions</span></a></li></ul></li>
	<li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-generic toplevel_page_biztech-crm-portal" id="toplevel_page_biztech-crm-portal"><a href='admin.php?page=biztech-crm-portal' class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-generic toplevel_page_biztech-crm-portal" aria-haspopup="true"><div class="wp-menu-arrow"><div></div></div><div class='wp-menu-image dashicons-before dashicons-admin-generic'><br /></div><div class='wp-menu-name'>Customer Portal</div></a>
	<ul class='wp-submenu wp-submenu-wrap'><li class='wp-submenu-head' aria-hidden='true'>Customer Portal</li><li class="wp-first-item"><a href='admin.php?page=biztech-crm-portal' class="wp-first-item">Customer Portal</a></li><li><a href='admin.php?page=scp-extra-settings'>Module Ordering</a></li></ul></li>
	<li class="wp-has-submenu wp-not-current-submenu menu-top toplevel_page_duplicator" id="toplevel_page_duplicator"><a href='admin.php?page=duplicator' class="wp-has-submenu wp-not-current-submenu menu-top toplevel_page_duplicator" aria-haspopup="true"><div class="wp-menu-arrow"><div></div></div><div class='wp-menu-image svg' style="background-image:url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz48IURPQ1RZUEUgc3ZnIFBVQkxJQyAiLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9HcmFwaGljcy9TVkcvMS4xL0RURC9zdmcxMS5kdGQiPjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iQXJ0d29yayIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiIHdpZHRoPSIyMy4yNXB4IiBoZWlnaHQ9IjIyLjM3NXB4IiB2aWV3Qm94PSIwIDAgMjMuMjUgMjIuMzc1IiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCAyMy4yNSAyMi4zNzUiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxwYXRoIGZpbGw9IiM5Q0ExQTYiIGQ9Ik0xOC4wMTEsMS4xODhjLTEuOTk1LDAtMy42MTUsMS42MTgtMy42MTUsMy42MTRjMCwwLjA4NSwwLjAwOCwwLjE2NywwLjAxNiwwLjI1TDcuNzMzLDguMTg0QzcuMDg0LDcuNTY1LDYuMjA4LDcuMTgyLDUuMjQsNy4xODJjLTEuOTk2LDAtMy42MTUsMS42MTktMy42MTUsMy42MTRjMCwxLjk5NiwxLjYxOSwzLjYxMywzLjYxNSwzLjYxM2MwLjYyOSwwLDEuMjIyLTAuMTYyLDEuNzM3LTAuNDQ1bDIuODksMi40MzhjLTAuMTI2LDAuMzY4LTAuMTk4LDAuNzYzLTAuMTk4LDEuMTczYzAsMS45OTUsMS42MTgsMy42MTMsMy42MTQsMy42MTNjMS45OTUsMCwzLjYxNS0xLjYxOCwzLjYxNS0zLjYxM2MwLTEuOTk3LTEuNjItMy42MTQtMy42MTUtMy42MTRjLTAuNjMsMC0xLjIyMiwwLjE2Mi0xLjczNywwLjQ0M2wtMi44OS0yLjQzNWMwLjEyNi0wLjM2OCwwLjE5OC0wLjc2MywwLjE5OC0xLjE3M2MwLTAuMDg0LTAuMDA4LTAuMTY2LTAuMDEzLTAuMjVsNi42NzYtMy4xMzNjMC42NDgsMC42MTksMS41MjUsMS4wMDIsMi40OTUsMS4wMDJjMS45OTQsMCwzLjYxMy0xLjYxNywzLjYxMy0zLjYxM0MyMS42MjUsMi44MDYsMjAuMDA2LDEuMTg4LDE4LjAxMSwxLjE4OHoiLz48L3N2Zz4=')"><br /></div><div class='wp-menu-name'>Duplicator</div></a>
	<ul class='wp-submenu wp-submenu-wrap'><li class='wp-submenu-head' aria-hidden='true'>Duplicator</li><li class="wp-first-item"><a href='admin.php?page=duplicator' class="wp-first-item">Packages</a></li><li><a href='admin.php?page=duplicator-tools'>Tools</a></li><li><a href='admin.php?page=duplicator-settings'>Settings</a></li><li><a href='admin.php?page=duplicator-gopro'><span style="color:#f18500">Go Pro!</span></a></li></ul></li>
	<li class="wp-not-current-submenu menu-top toplevel_page_phppc_menu" id="toplevel_page_phppc_menu">
	<a href='admin.php?page=phppc_menu' class="wp-not-current-submenu menu-top toplevel_page_phppc_menu" ><div class="wp-menu-arrow"><div></div></div><div class='wp-menu-image dashicons-before'><img src="http://real.nadsoftpro.info/wp-content/plugins/php-code-for-posts/php-icon.png" alt="" /></div><div class='wp-menu-name'>PHP Code</div></a></li>
	<li class="wp-not-current-submenu menu-top menu-icon-generic toplevel_page_wp_wplfta_setting" id="toplevel_page_wp_wplfta_setting">
	<a href='admin.php?page=wp_wplfta_setting' class="wp-not-current-submenu menu-top menu-icon-generic toplevel_page_wp_wplfta_setting" ><div class="wp-menu-arrow"><div></div></div><div class='wp-menu-image dashicons-before dashicons-admin-generic'><br /></div><div class='wp-menu-name'> (Login Form)</div></a></li>
	<li class="wp-has-submenu wp-not-current-submenu menu-top toplevel_page_membership2 menu-top-last" id="toplevel_page_membership2"><a href='admin.php?page=membership2' class="wp-has-submenu wp-not-current-submenu menu-top toplevel_page_membership2 menu-top-last" aria-haspopup="true"><div class="wp-menu-arrow"><div></div></div><div class='wp-menu-image dashicons-before dashicons-lock'><br /></div><div class='wp-menu-name'>Membership 2</div></a>
	<ul class='wp-submenu wp-submenu-wrap'><li class='wp-submenu-head' aria-hidden='true'>Membership 2</li><li class="wp-first-item"><a href='admin.php?page=membership2' class="wp-first-item">Memberships</a></li><li><a href='admin.php?page=membership2-protection'>Protection Rules</a></li><li><a href='admin.php?page=membership2-members'>All Members</a></li><li><a href='admin.php?page=membership2-add-member'>Add Member</a></li><li><a href='admin.php?page=membership2-addon'>Add-ons</a></li><li><a href='admin.php?page=membership2-settings'>Settings</a></li><li><a href='admin.php?page=membership2-help'>Help</a></li></ul></li><li id="collapse-menu" class="hide-if-no-js"><button type="button" id="collapse-button" aria-label="Collapse Main menu" aria-expanded="true"><span class="collapse-button-icon" aria-hidden="true"></span><span class="collapse-button-label">Collapse menu</span></button></li></ul>
</div>
</div>
<div id="wpcontent">

		<div id="wpadminbar" class="nojq nojs">
						<div class="quicklinks" id="wp-toolbar" role="navigation" aria-label="Toolbar" tabindex="0">
				<ul id="wp-admin-bar-root-default" class="ab-top-menu">
		<li id="wp-admin-bar-menu-toggle"><a class="ab-item" href="#"><span class="ab-icon"></span><span class="screen-reader-text">Menu</span></a>		</li>
		<li id="wp-admin-bar-wp-logo" class="menupop"><a class="ab-item" aria-haspopup="true" href="http://real.nadsoftpro.info/wp-admin/about.php"><span class="ab-icon"></span><span class="screen-reader-text">About WordPress</span></a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-wp-logo-default" class="ab-submenu">
		<li id="wp-admin-bar-about"><a class="ab-item" href="http://real.nadsoftpro.info/wp-admin/about.php">About WordPress</a>		</li>
		<li id="wp-admin-bar-bp-about"><a class="ab-item" href="http://real.nadsoftpro.info/wp-admin/index.php?page=bp-about">About BuddyPress</a>		</li>
		<li id="wp-admin-bar-bbp-about"><a class="ab-item" href="http://real.nadsoftpro.info/wp-admin/index.php?page=bbp-about">About bbPress</a>		</li></ul><ul id="wp-admin-bar-wp-logo-external" class="ab-sub-secondary ab-submenu">
		<li id="wp-admin-bar-wporg"><a class="ab-item" href="https://wordpress.org/">WordPress.org</a>		</li>
		<li id="wp-admin-bar-documentation"><a class="ab-item" href="https://codex.wordpress.org/">Documentation</a>		</li>
		<li id="wp-admin-bar-support-forums"><a class="ab-item" href="https://wordpress.org/support/">Support Forums</a>		</li>
		<li id="wp-admin-bar-feedback"><a class="ab-item" href="https://wordpress.org/support/forum/requests-and-feedback">Feedback</a>		</li></ul></div>		</li>
		<li id="wp-admin-bar-my-sites" class="menupop"><a class="ab-item" aria-haspopup="true" href="http://real.nadsoftpro.info/wp-admin/my-sites.php">My Sites</a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-my-sites-list" class="ab-submenu">
		<li id="wp-admin-bar-blog-1" class="menupop"><a class="ab-item" aria-haspopup="true" href="http://nadsoftpro.info"><div class="blavatar"></div>MRB</a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-blog-1-default" class="ab-submenu">
		<li id="wp-admin-bar-blog-1-v"><a class="ab-item" href="http://nadsoftpro.info/">Visit Site</a>		</li></ul></div>		</li>
		<li id="wp-admin-bar-blog-62" class="menupop"><a class="ab-item" aria-haspopup="true" href="http://gaurav.nadsoftpro.info"><div class="blavatar"></div>gaurav</a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-blog-62-default" class="ab-submenu">
		<li id="wp-admin-bar-blog-62-v"><a class="ab-item" href="http://gaurav.nadsoftpro.info/">Visit Site</a>		</li></ul></div>		</li>
		<li id="wp-admin-bar-blog-68" class="menupop"><a class="ab-item" aria-haspopup="true" href="http://real.nadsoftpro.info/wp-admin/"><div class="blavatar"></div>real</a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-blog-68-default" class="ab-submenu">
		<li id="wp-admin-bar-blog-68-d"><a class="ab-item" href="http://real.nadsoftpro.info/wp-admin/">Dashboard</a>		</li>
		<li id="wp-admin-bar-blog-68-n"><a class="ab-item" href="http://real.nadsoftpro.info/wp-admin/post-new.php">New Post</a>		</li>
		<li id="wp-admin-bar-blog-68-c"><a class="ab-item" href="http://real.nadsoftpro.info/wp-admin/edit-comments.php">Manage Comments</a>		</li>
		<li id="wp-admin-bar-blog-68-v"><a class="ab-item" href="http://real.nadsoftpro.info/">Visit Site</a>		</li></ul></div>		</li></ul></div>		</li>
		<li id="wp-admin-bar-site-name" class="menupop"><a class="ab-item" aria-haspopup="true" href="http://real.nadsoftpro.info/">real</a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-site-name-default" class="ab-submenu">
		<li id="wp-admin-bar-view-site"><a class="ab-item" href="http://real.nadsoftpro.info/">Visit Site</a>		</li></ul></div>		</li>
		<li id="wp-admin-bar-comments"><a class="ab-item" href="http://real.nadsoftpro.info/wp-admin/edit-comments.php"><span class="ab-icon"></span><span class="ab-label awaiting-mod pending-count count-0" aria-hidden="true">0</span><span class="screen-reader-text">0 comments awaiting moderation</span></a>		</li>
		<li id="wp-admin-bar-new-content" class="menupop"><a class="ab-item" aria-haspopup="true" href="http://real.nadsoftpro.info/wp-admin/post-new.php"><span class="ab-icon"></span><span class="ab-label">New</span></a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-new-content-default" class="ab-submenu">
		<li id="wp-admin-bar-new-post"><a class="ab-item" href="http://real.nadsoftpro.info/wp-admin/post-new.php">Post</a>		</li>
		<li id="wp-admin-bar-new-media"><a class="ab-item" href="http://real.nadsoftpro.info/wp-admin/media-new.php">Media</a>		</li>
		<li id="wp-admin-bar-new-page"><a class="ab-item" href="http://real.nadsoftpro.info/wp-admin/post-new.php?post_type=page">Page</a>		</li>
		<li id="wp-admin-bar-new-forum"><a class="ab-item" href="http://real.nadsoftpro.info/wp-admin/post-new.php?post_type=forum">Forum</a>		</li>
		<li id="wp-admin-bar-new-topic"><a class="ab-item" href="http://real.nadsoftpro.info/wp-admin/post-new.php?post_type=topic">Topic</a>		</li>
		<li id="wp-admin-bar-new-reply"><a class="ab-item" href="http://real.nadsoftpro.info/wp-admin/post-new.php?post_type=reply">Reply</a>		</li>
		<li id="wp-admin-bar-new-training"><a class="ab-item" href="http://real.nadsoftpro.info/wp-admin/post-new.php?post_type=training">Training</a>		</li>
		<li id="wp-admin-bar-new-user"><a class="ab-item" href="http://real.nadsoftpro.info/wp-admin/user-new.php">User</a>		</li></ul></div>		</li>
		<li id="wp-admin-bar-ms-test-memberships" class="ms-test-memberships"><a class="ab-item" tabindex="1" href="http://real.nadsoftpro.info/wp-admin/?action=ms_simulate&#038;membership_id=901&#038;_wpnonce=1103019380" title="Membership Simulation Menu">Test Memberships</a>		</li></ul><ul id="wp-admin-bar-top-secondary" class="ab-top-secondary ab-top-menu">
		<li id="wp-admin-bar-my-account" class="menupop with-avatar"><a class="ab-item" aria-haspopup="true" href="http://real.nadsoftpro.info/wp-admin/profile.php">Howdy, <span class="display-name">real</span><img alt='' src='//www.gravatar.com/avatar/05963d3722fe5259ae7f15637e5f83e0?s=26&#038;r=g&#038;d=mm' srcset='//www.gravatar.com/avatar/05963d3722fe5259ae7f15637e5f83e0?s=26&#038;r=g&#038;d=mm 2x' class='avatar avatar-26 photo' height='26' width='26' /></a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-user-actions" class="ab-submenu">
		<li id="wp-admin-bar-user-info"><a class="ab-item" tabindex="-1" href="http://real.nadsoftpro.info/wp-admin/profile.php"><img alt='' src='//www.gravatar.com/avatar/05963d3722fe5259ae7f15637e5f83e0?s=64&#038;r=g&#038;d=mm' srcset='//www.gravatar.com/avatar/05963d3722fe5259ae7f15637e5f83e0?s=64&#038;r=g&#038;d=mm 2x' class='avatar avatar-64 photo' height='64' width='64' /><span class='display-name'>real</span></a>		</li>
		<li id="wp-admin-bar-edit-profile"><a class="ab-item" href="http://real.nadsoftpro.info/wp-admin/profile.php">Edit My Profile</a>		</li>
		<li id="wp-admin-bar-logout"><a class="ab-item" href="http://real.nadsoftpro.info/wp-login.php?action=logout&#038;_wpnonce=819bd5e2e2&#038;redirect_to=http%3A%2F%2Freal.nadsoftpro.info%2Fwp-admin%2Fusers.php%3Fpage%3Dmanage-user-list%26loggedout%3Dtrue">Log Out</a>		</li></ul><ul id="wp-admin-bar-my-account-buddypress" class="ab-sub-secondary ab-submenu">
		<li id="wp-admin-bar-my-account-activity" class="menupop"><a class="ab-item" aria-haspopup="true" href="http://real.nadsoftpro.info/members/real/activity/">Activity</a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-my-account-activity-default" class="ab-submenu">
		<li id="wp-admin-bar-my-account-activity-personal"><a class="ab-item" href="http://real.nadsoftpro.info/members/real/activity/">Personal</a>		</li>
		<li id="wp-admin-bar-my-account-activity-mentions"><a class="ab-item" href="http://real.nadsoftpro.info/members/real/activity/mentions/">Mentions</a>		</li>
		<li id="wp-admin-bar-my-account-activity-favorites"><a class="ab-item" href="http://real.nadsoftpro.info/members/real/activity/favorites/">Favorites</a>		</li>
		<li id="wp-admin-bar-my-account-activity-friends"><a class="ab-item" href="http://real.nadsoftpro.info/members/real/activity/friends/">Friends</a>		</li>
		<li id="wp-admin-bar-my-account-activity-groups"><a class="ab-item" href="http://real.nadsoftpro.info/members/real/activity/groups/">Groups</a>		</li></ul></div>		</li>
		<li id="wp-admin-bar-my-account-xprofile" class="menupop"><a class="ab-item" aria-haspopup="true" href="http://real.nadsoftpro.info/members/real/profile/">Profile</a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-my-account-xprofile-default" class="ab-submenu">
		<li id="wp-admin-bar-my-account-xprofile-public"><a class="ab-item" href="http://real.nadsoftpro.info/members/real/profile/">View</a>		</li>
		<li id="wp-admin-bar-my-account-xprofile-edit"><a class="ab-item" href="http://real.nadsoftpro.info/members/real/profile/edit/">Edit</a>		</li>
		<li id="wp-admin-bar-my-account-xprofile-change-avatar"><a class="ab-item" href="http://real.nadsoftpro.info/members/real/profile/change-avatar/">Change Profile Photo</a>		</li>
		<li id="wp-admin-bar-my-account-xprofile-change-cover-image"><a class="ab-item" href="http://real.nadsoftpro.info/members/real/profile/change-cover-image/">Change Cover Image</a>		</li></ul></div>		</li>
		<li id="wp-admin-bar-my-account-blogs" class="menupop"><a class="ab-item" aria-haspopup="true" href="http://real.nadsoftpro.info/members/real/blogs/">Sites</a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-my-account-blogs-default" class="ab-submenu">
		<li id="wp-admin-bar-my-account-blogs-my-sites"><a class="ab-item" href="http://real.nadsoftpro.info/members/real/blogs/">My Sites</a>		</li></ul></div>		</li>
		<li id="wp-admin-bar-my-account-notifications" class="menupop"><a class="ab-item" aria-haspopup="true" href="http://real.nadsoftpro.info/members/real/notifications/">Notifications <span class="count">1</span></a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-my-account-notifications-default" class="ab-submenu">
		<li id="wp-admin-bar-my-account-notifications-unread"><a class="ab-item" href="http://real.nadsoftpro.info/members/real/notifications/">Unread <span class="count">1</span></a>		</li>
		<li id="wp-admin-bar-my-account-notifications-read"><a class="ab-item" href="http://real.nadsoftpro.info/members/real/notifications/read/">Read</a>		</li></ul></div>		</li>
		<li id="wp-admin-bar-my-account-messages" class="menupop"><a class="ab-item" aria-haspopup="true" href="http://real.nadsoftpro.info/members/real/messages/">Messages</a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-my-account-messages-default" class="ab-submenu">
		<li id="wp-admin-bar-my-account-messages-inbox"><a class="ab-item" href="http://real.nadsoftpro.info/members/real/messages/">Inbox</a>		</li>
		<li id="wp-admin-bar-my-account-messages-starred"><a class="ab-item" href="http://real.nadsoftpro.info/members/real/messages/starred/">Starred</a>		</li>
		<li id="wp-admin-bar-my-account-messages-sentbox"><a class="ab-item" href="http://real.nadsoftpro.info/members/real/messages/sentbox/">Sent</a>		</li>
		<li id="wp-admin-bar-my-account-messages-compose"><a class="ab-item" href="http://real.nadsoftpro.info/members/real/messages/compose/">Compose</a>		</li>
		<li id="wp-admin-bar-my-account-messages-notices"><a class="ab-item" href="http://real.nadsoftpro.info/members/real/messages/notices/">All Member Notices</a>		</li></ul></div>		</li>
		<li id="wp-admin-bar-my-account-friends" class="menupop"><a class="ab-item" aria-haspopup="true" href="http://real.nadsoftpro.info/members/real/friends/">Friends</a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-my-account-friends-default" class="ab-submenu">
		<li id="wp-admin-bar-my-account-friends-friendships"><a class="ab-item" href="http://real.nadsoftpro.info/members/real/friends/">Friendships</a>		</li>
		<li id="wp-admin-bar-my-account-friends-requests"><a class="ab-item" href="http://real.nadsoftpro.info/members/real/friends/requests/">No Pending Requests</a>		</li></ul></div>		</li>
		<li id="wp-admin-bar-my-account-groups" class="menupop"><a class="ab-item" aria-haspopup="true" href="http://real.nadsoftpro.info/members/real/groups/">Groups</a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-my-account-groups-default" class="ab-submenu">
		<li id="wp-admin-bar-my-account-groups-memberships"><a class="ab-item" href="http://real.nadsoftpro.info/members/real/groups/">Memberships</a>		</li>
		<li id="wp-admin-bar-my-account-groups-invites"><a class="ab-item" href="http://real.nadsoftpro.info/members/real/groups/invites/">No Pending Invites</a>		</li>
		<li id="wp-admin-bar-my-account-groups-create"><a class="ab-item" href="http://real.nadsoftpro.info/groups/create/">Create a Group</a>		</li></ul></div>		</li>
		<li id="wp-admin-bar-my-account-forums" class="menupop"><a class="ab-item" aria-haspopup="true" href="http://real.nadsoftpro.info/members/real/forums/">Forums</a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-my-account-forums-default" class="ab-submenu">
		<li id="wp-admin-bar-my-account-forums-topics"><a class="ab-item" href="http://real.nadsoftpro.info/members/real/forums/topics/">Topics Started</a>		</li>
		<li id="wp-admin-bar-my-account-forums-replies"><a class="ab-item" href="http://real.nadsoftpro.info/members/real/forums/replies/">Replies Created</a>		</li>
		<li id="wp-admin-bar-my-account-forums-favorites"><a class="ab-item" href="http://real.nadsoftpro.info/members/real/forums/favorites/">Favorite Topics</a>		</li>
		<li id="wp-admin-bar-my-account-forums-subscriptions"><a class="ab-item" href="http://real.nadsoftpro.info/members/real/forums/subscriptions/">Subscribed Topics</a>		</li></ul></div>		</li>
		<li id="wp-admin-bar-my-account-settings" class="menupop"><a class="ab-item" aria-haspopup="true" href="http://real.nadsoftpro.info/members/real/settings/">Settings</a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-my-account-settings-default" class="ab-submenu">
		<li id="wp-admin-bar-my-account-settings-general"><a class="ab-item" href="http://real.nadsoftpro.info/members/real/settings/">General</a>		</li>
		<li id="wp-admin-bar-my-account-settings-notifications"><a class="ab-item" href="http://real.nadsoftpro.info/members/real/settings/notifications/">Email</a>		</li>
		<li id="wp-admin-bar-my-account-settings-profile"><a class="ab-item" href="http://real.nadsoftpro.info/members/real/settings/profile/">Profile</a>		</li></ul></div>		</li></ul></div>		</li>
		<li id="wp-admin-bar-bp-notifications" class="menupop"><a class="ab-item" aria-haspopup="true" href="http://real.nadsoftpro.info/members/real/notifications/"><span id="ab-pending-notifications" class="pending-count alert">1</span></a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-bp-notifications-default" class="ab-submenu">
		<li id="wp-admin-bar-notification-15"><a class="ab-item" href="http://real.nadsoftpro.info/members/real/friends/my-friends/">yuvraj yuvraj accepted your friendship request</a>		</li></ul></div>		</li></ul>			</div>
						<a class="screen-reader-shortcut" href="http://real.nadsoftpro.info/wp-login.php?action=logout&#038;_wpnonce=819bd5e2e2&#038;redirect_to=http%3A%2F%2Freal.nadsoftpro.info%2Fwp-admin%2Fusers.php%3Fpage%3Dmanage-user-list%26loggedout%3Dtrue">Log Out</a>
					</div>

		
<div id="wpbody" role="main">

<div id="wpbody-content" aria-label="Main content" tabindex="0">
		<div id="screen-meta" class="metabox-prefs">

			<div id="contextual-help-wrap" class="hidden no-sidebar" tabindex="-1" aria-label="Contextual Help Tab">
				<div id="contextual-help-back"></div>
				<div id="contextual-help-columns">
					<div class="contextual-help-tabs">
						<ul>
												</ul>
					</div>

					
					<div class="contextual-help-tabs-wrap">
											</div>
				</div>
			</div>
				</div>
		<!DOCTYPE html>
<html lang="en-US">
<title>real</title>
<link rel='dns-prefetch' href='//maxcdn.bootstrapcdn.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="real &raquo; Feed" href="http://real.nadsoftpro.info/feed/" />
<link rel="alternate" type="application/rss+xml" title="real &raquo; Comments Feed" href="http://real.nadsoftpro.info/comments/feed/" />
<link rel='stylesheet' id='bbp-default-css'  href='http://real.nadsoftpro.info/wp-content/plugins/bbpress/templates/default/css/bbpress.css?ver=2.5.14-6684' type='text/css' media='screen' />
<link rel='stylesheet' id='bp-legacy-css-css'  href='http://real.nadsoftpro.info/wp-content/plugins/buddypress/bp-templates/bp-legacy/css/buddypress.min.css?ver=2.9.2' type='text/css' media='screen' />
<link rel='stylesheet' id='hfe-style-css'  href='http://real.nadsoftpro.info/wp-content/plugins/header-footer-elementor/assets/css/header-footer-elementor.css?ver=1.0.7' type='text/css' media='all' />
<link rel='stylesheet' id='bootstrap-css-css'  href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='child-custom-css-css'  href='http://real.nadsoftpro.info/wp-content/themes/oceanwp-child/css/childstyle.css?ver=4.9.1' type='text/css' media='all' />
<link rel='stylesheet' id='parent-style-css'  href='http://real.nadsoftpro.info/wp-content/themes/oceanwp/style.css?ver=4.9.1' type='text/css' media='all' />
<link rel='stylesheet' id='oceanwp-bbpress-css'  href='http://real.nadsoftpro.info/wp-content/themes/oceanwp/assets/css/third/bbpress.min.css?ver=4.9.1' type='text/css' media='all' />
<link rel='stylesheet' id='oceanwp-buddypress-css'  href='http://real.nadsoftpro.info/wp-content/themes/oceanwp/assets/css/third/buddypress.min.css?ver=4.9.1' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome.min-css'  href='http://real.nadsoftpro.info/wp-content/plugins/biztech-crm-portal/assets/css/font-awesome.min.css?ver=4.9.1' type='text/css' media='all' />
<link rel='stylesheet' id='fullcalendar-css'  href='http://real.nadsoftpro.info/wp-content/plugins/biztech-crm-portal/assets/css/fullcalendar.css?ver=4.9.1' type='text/css' media='all' />
<link rel='stylesheet' id='jquery-ui-timepicker-addon-css'  href='http://real.nadsoftpro.info/wp-content/plugins/biztech-crm-portal/assets/css/jquery-ui.min.css?ver=4.9.1' type='text/css' media='all' />
<link rel='stylesheet' id='scp-style-css'  href='http://real.nadsoftpro.info/wp-content/plugins/biztech-crm-portal/assets/css/scp-style.css?ver=4.9.1' type='text/css' media='all' />
<link rel='stylesheet' id='oe-widgets-style-css'  href='http://real.nadsoftpro.info/wp-content/plugins/ocean-extra/assets/css/widgets.css?ver=4.9.1' type='text/css' media='all' />
<script type='text/javascript'>
/* <![CDATA[ */
var BP_DTheme = {"accepted":"Accepted","close":"Close","comments":"comments","leave_group_confirm":"Are you sure you want to leave this group?","mark_as_fav":"Favorite","my_favs":"My Favorites","rejected":"Rejected","remove_fav":"Remove Favorite","show_all":"Show all","show_all_comments":"Show all comments for this thread","show_x_comments":"Show all comments (%d)","unsaved_changes":"Your profile has unsaved changes. If you leave the page, the changes will be lost.","view":"View"};
/* ]]> */
</script>
<script type='text/javascript' src='http://real.nadsoftpro.info/wp-content/plugins/biztech-crm-portal/assets/js/moment.min.js?ver=4.9.1'></script>
<script type='text/javascript' src='http://real.nadsoftpro.info/wp-content/plugins/biztech-crm-portal/assets/js/fullcalendar.min.js?ver=4.9.1'></script>
<script type='text/javascript' src='http://real.nadsoftpro.info/wp-content/plugins/biztech-crm-portal/assets/js/jquery-ui/jquery-ui-1.10.3.custom.min.js?ver=1.10.3'></script>
<script type='text/javascript' src='http://real.nadsoftpro.info/wp-content/plugins/buddypress/bp-core/js/widget-members.min.js?ver=2.9.2'></script>
<script type='text/javascript' src='http://real.nadsoftpro.info/wp-content/plugins/buddypress/bp-core/js/jquery-query.min.js?ver=2.9.2'></script>
<script type='text/javascript' src='http://real.nadsoftpro.info/wp-content/plugins/buddypress/bp-core/js/vendor/jquery-cookie.min.js?ver=2.9.2'></script>
<script type='text/javascript' src='http://real.nadsoftpro.info/wp-content/plugins/buddypress/bp-core/js/vendor/jquery-scroll-to.min.js?ver=2.9.2'></script>
<script type='text/javascript' src='http://real.nadsoftpro.info/wp-content/plugins/buddypress/bp-templates/bp-legacy/js/buddypress.min.js?ver=2.9.2'></script>
<script type='text/javascript' src='http://real.nadsoftpro.info/wp-content/plugins/biztech-crm-portal/assets/js/scp-js.js?ver=4.9.1'></script>
<script type='text/javascript' src='http://real.nadsoftpro.info/wp-content/plugins/biztech-crm-portal/assets/js/bootstrap.min.js?ver=4.9.1'></script>
<script type='text/javascript' src='http://real.nadsoftpro.info/wp-content/plugins/biztech-crm-portal/assets/js/jquery.cookie.min.js?ver=4.9.1'></script>
<script type='text/javascript' src='http://real.nadsoftpro.info/wp-content/plugins/biztech-crm-portal/assets/js/app.js?ver=4.9.1'></script>
<script type='text/javascript' src='http://real.nadsoftpro.info/wp-content/plugins/biztech-crm-portal/assets/js/jquery.blockui.min.js?ver=4.9.1'></script>
<script type='text/javascript' src='http://real.nadsoftpro.info/wp-content/plugins/biztech-crm-portal/assets/js/jquery-ui-timepicker-addon.js?ver=4.9.1'></script>
<script type='text/javascript' src='http://real.nadsoftpro.info/wp-content/plugins/biztech-crm-portal/assets/js/jquery.validate/jquery.validate.js?ver=4.9.1'></script>
<script type='text/javascript' src='http://real.nadsoftpro.info/wp-content/plugins/biztech-crm-portal/assets/js/scp-manage-page-js.js?ver=4.9.1'></script>
<link rel='https://api.w.org/' href='http://real.nadsoftpro.info/wp-json/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://real.nadsoftpro.info/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://real.nadsoftpro.info/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.9.1" />
        <script type="text/javascript">
            var ajaxurl = 'http://real.nadsoftpro.info/wp-admin/admin-ajax.php';
            var image_url = 'http://real.nadsoftpro.info/wp-content/plugins/biztech-crm-portal/assets/images/';
            var pathId = '';
            //General function
            function form_submit(doc_id) {
                jQuery('#scp_id').val(doc_id);
                if (confirm('Are you sure you want to delete the record?')) {
                    document.getElementById("actionform").submit();
                    return false;
                } else {
                    return false;
                }
            }

        </script>
        <style type="text/css">
                </style>
        <script type="text/javascript">
            jQuery(document).ready(function () {
                if (jQuery('.datetimepicker').length > 0) {
                    // Add any datepickers to all fields with the class
                    jQuery('.datetimepicker').datetimepicker();
                }
            });
        </script>
            <script type="text/javascript">

    var ajaxurl = 'http://real.nadsoftpro.info/wp-admin/admin-ajax.php';
    </script>

	<script type="text/javascript">var ajaxurl = 'http://real.nadsoftpro.info/wp-admin/admin-ajax.php';</script>

		<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
		<style type="text/css" media="print">#wpadminbar { display:none; }</style>
<style type="text/css" media="screen">
	html { margin-top: 32px !important; }
	* html body { margin-top: 32px !important; }
	@media screen and ( max-width: 782px ) {
		html { margin-top: 46px !important; }
		* html body { margin-top: 46px !important; }
	}
</style>
<meta name="viewport" content="width=device-width,initial-scale=1.0">


<link rel="stylesheet" type="text/css" media="all" href="http://real.nadsoftpro.info/wp-content/plugins/custom-user-list/css/custom.css" />
<link rel="stylesheet" type="text/css" media="all" href="http://real.nadsoftpro.info/wp-content/plugins/custom-user-list/css/daterangepicker.css" />
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" />
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.4/css/bootstrap3/bootstrap-switch.min.css" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script src="http://real.nadsoftpro.info/wp-content/plugins/custom-user-list/js/manage_staff.js"></script>
<script type="javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>


<!--<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>-->
<!--<script type='text/javascript' src='//cdn.datatables.net/1.10.11/js/dataTables.bootstrap.min.js?ver=4.5.12'></script>-->
<script type="text/javascript" src="http://real.nadsoftpro.info/wp-content/plugins/custom-user-list/js/moment.js"></script>
<script type="text/javascript" src="http://real.nadsoftpro.info/wp-content/plugins/custom-user-list/js/datetime-moment.js"></script>
<script type="text/javascript" src="http://real.nadsoftpro.info/wp-content/plugins/custom-user-list/js/daterangepicker.js"></script>
<script type="text/javascript" src="http://real.nadsoftpro.info/wp-content/plugins/custom-user-list/js/keypress_validation.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.4/js/bootstrap-switch.js" data-turbolinks-track="true"></script>

<style>
.input-group.input-append{ float: right; margin: 0 5px 9px 0; width: 200px; height:29px; }
.input-group-addon{ padding: 0 15px 0 20px; color: #337ab7; }
.fail_status { color:red; }
.active_status { color:#000000; }
th{ color:#337ab7;}
.input-group.input-append {height: 28px;}

#staffModal .form-control, #staffModal .col-sm-4 label, #staffModal .control-label {
    margin-top: 15px;
}

#staffModal .modal-title{
    text-align: center;
}

#active, #deactive {
    margin-top: 18px;
}

#datepickerform {display: inline-block;}

#report_table_manage_staff_area_wrapper label .form-control {
    width: 75%;
}

#updateStaff {
    margin-top: 15px;
}

.modal-dialog {
    margin-top: 8%;
}

.well {
    box-shadow: none;
}

#manage_users_staff_area table thead th {
    background-color: #1d3565;
    color: #fff;
    border: 1px solid #1d3565;
}

#staffModal label {
    font-weight: normal;
}

.additionalinfo_table_container {
    width: 100%;
}

.additionalinfo_table_container .content_td, .panel-heading {
    padding: 10px 15px;
}

#additionalInfoImage {
    cursor: pointer;
    margin-top: 1px;
    max-width:none;
}

.training-title {
    margin-top: 30px;
}

.table-page-status-content td {
    padding: 10px;
    width: 50%;
} 

div.slider {
    display: none;
}
@media only screen and (max-width : 768px){
    #datePickerDiv{margin-top:8px;}
}
@media only screen and (min-width : 992px) and (max-width :1200px) {
    #reportrangeManageStaffArea{width:80%;}  
}    
</style>

<script>
	/* Storing the image path of plus and minus image */
	details_open = "http://real.nadsoftpro.info/wp-content/plugins/custom-user-list/images/details_open.png";
	details_close = "http://real.nadsoftpro.info/wp-content/plugins/custom-user-list/images/details_close.png";
</script>

<!--<div class="container content" id="manage_users_staff_area">-->
<div class="col-md-12" id="manage_users_staff_area">
    <div class="posts">
    	<div class="content">
            <div class="well">
                <h2 class="text-center">My Team
                    <span>
                        <a style="text-decoration: none; float:right;" href="/staff-registration/" title="Add New Staff"> <i class="fa fa-user-plus" aria-hidden="true"></i></a>
                    </span>
                </h2>
            </div>
            <div class="post- page type-page status-publish hentry odd">
            <!--                <div class="row">-->
                    <div class="col-xs-12 col-md-12">
                        <table width="100%" class="table table-bordered table-hover table-striped dataTable" id="report_table_manage_staff_area">
                            <thead>
                                <tr>
                                    <th width="5%"></th>
                                    <th width="10%">Join Date</th>
                                    <th width="15%">Name</th>
                                    <th width="23%">Email</th>
                                    <th width="12%">Phone</th>
                                    <th width="12%">Department</th>
                                    <th width="8%">Status</th>
                                    <th width="5%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                                                <tr>
                                        <td class="text-center"><span id="195" class="additional_info"><img id="additionalInfoImage" src="http://real.nadsoftpro.info/wp-content/plugins/custom-user-list/images/details_open.png"></span></td>
                                        <td>Dec 11, 2017</td>
                                        <td>realtest4 realtest4                                            <input type="hidden" id="uname_195" name="uname" value="realtest4">
                                            <input type="hidden" id="fname_195" name="fname" value="realtest4">
                                            <input type="hidden" id="lname_195" name="lname" value="realtest4">
                                            <input type="hidden" id="profile_img_195" name="profile_img" value="">
                                            <input type="hidden" id="join_date_195" name="join_date" value="Dec 11, 2017">
                                            <input type="hidden" id="training_status_195" name="training_status" value='{"195":[{"training_name":"Mycat01","training_status":"incomplete","page_name":["mypagecat01","mypagecat02","mypagecat03","mypagecat04","mypagecat05","mypagecat06","mypagecat07","mypagecat08"],"page_status":["Current","Locked","Locked","Locked","Locked","Locked","Locked","Locked"]},{"training_name":"Mycat02","training_status":"incomplete","page_name":["mycatpage01","mycatpage02","mycatpage03","mycatpage04"],"page_status":["Current","Locked","Locked","Locked"]}]}'>
                                        </td>
                                        <td id="email_195">realtest4@te.vg</td>
                                        <td id="phone_195">() -</td>
                                        <td id="department_195">
                                        Intern<input type="hidden" id="membership_195" value="902">                                        </td>
                                        <td class="text-center"><input type="checkbox" name="onoffswitch-195" class="onoffswitch-checkbox quick_action" data-val="" data-user-id="195" checked></td>
                                        <td class="text-center"><a href="javascript:void(0);" data-id="195" class="dashicons-before dashicons-edit manage-user-edit" style="text-decoration:none;"> </a><span data-val="195" data-user-name=" " data-user-id="u195" class="dashicons-before dashicons-trash user_delete_action" style="margin-right:5px;cursor:pointer;color:#E14D43;"></span>&nbsp;</td>
                                    </tr>
                                                                <tr>
                                        <td class="text-center"><span id="194" class="additional_info"><img id="additionalInfoImage" src="http://real.nadsoftpro.info/wp-content/plugins/custom-user-list/images/details_open.png"></span></td>
                                        <td>Dec 11, 2017</td>
                                        <td>realtest3 realtest3                                            <input type="hidden" id="uname_194" name="uname" value="realtest3">
                                            <input type="hidden" id="fname_194" name="fname" value="realtest3">
                                            <input type="hidden" id="lname_194" name="lname" value="realtest3">
                                            <input type="hidden" id="profile_img_194" name="profile_img" value="">
                                            <input type="hidden" id="join_date_194" name="join_date" value="Dec 11, 2017">
                                            <input type="hidden" id="training_status_194" name="training_status" value='{"194":[]}'>
                                        </td>
                                        <td id="email_194">realtest3@ted.vm</td>
                                        <td id="phone_194">() -</td>
                                        <td id="department_194">
                                        -                                        </td>
                                        <td class="text-center"><input type="checkbox" name="onoffswitch-194" class="onoffswitch-checkbox quick_action" data-val="" data-user-id="194" ></td>
                                        <td class="text-center"><a href="javascript:void(0);" data-id="194" class="dashicons-before dashicons-edit manage-user-edit" style="text-decoration:none;"> </a><span data-val="194" data-user-name=" " data-user-id="u194" class="dashicons-before dashicons-trash user_delete_action" style="margin-right:5px;cursor:pointer;color:#E14D43;"></span>&nbsp;</td>
                                    </tr>
                                                                <tr>
                                        <td class="text-center"><span id="193" class="additional_info"><img id="additionalInfoImage" src="http://real.nadsoftpro.info/wp-content/plugins/custom-user-list/images/details_open.png"></span></td>
                                        <td>Dec 11, 2017</td>
                                        <td>realtest2 realtest2                                            <input type="hidden" id="uname_193" name="uname" value="realtest2">
                                            <input type="hidden" id="fname_193" name="fname" value="realtest2">
                                            <input type="hidden" id="lname_193" name="lname" value="realtest2">
                                            <input type="hidden" id="profile_img_193" name="profile_img" value="">
                                            <input type="hidden" id="join_date_193" name="join_date" value="Dec 11, 2017">
                                            <input type="hidden" id="training_status_193" name="training_status" value='{"193":[{"training_name":"Mycat03","training_status":"incomplete","page_name":["mycat301","mycat302","mycat303","mycat304","mycat305","mycat306"],"page_status":["Current","Locked","Locked","Locked","Locked","Locked"]}]}'>
                                        </td>
                                        <td id="email_193">realtest2@test.com</td>
                                        <td id="phone_193">() -</td>
                                        <td id="department_193">
                                        Bird Dogs<input type="hidden" id="membership_193" value="937">                                        </td>
                                        <td class="text-center"><input type="checkbox" name="onoffswitch-193" class="onoffswitch-checkbox quick_action" data-val="" data-user-id="193" ></td>
                                        <td class="text-center"><a href="javascript:void(0);" data-id="193" class="dashicons-before dashicons-edit manage-user-edit" style="text-decoration:none;"> </a><span data-val="193" data-user-name=" " data-user-id="u193" class="dashicons-before dashicons-trash user_delete_action" style="margin-right:5px;cursor:pointer;color:#E14D43;"></span>&nbsp;</td>
                                    </tr>
                                                                <tr>
                                        <td class="text-center"><span id="191" class="additional_info"><img id="additionalInfoImage" src="http://real.nadsoftpro.info/wp-content/plugins/custom-user-list/images/details_open.png"></span></td>
                                        <td>Dec 11, 2017</td>
                                        <td>realtest1 realtest1                                            <input type="hidden" id="uname_191" name="uname" value="realtest1">
                                            <input type="hidden" id="fname_191" name="fname" value="realtest1">
                                            <input type="hidden" id="lname_191" name="lname" value="realtest1">
                                            <input type="hidden" id="profile_img_191" name="profile_img" value="">
                                            <input type="hidden" id="join_date_191" name="join_date" value="Dec 11, 2017">
                                            <input type="hidden" id="training_status_191" name="training_status" value='{"191":[{"training_name":"Mycat01","training_status":"incomplete","page_name":["mypagecat01","mypagecat02","mypagecat03","mypagecat04","mypagecat05","mypagecat06","mypagecat07","mypagecat08"],"page_status":["Current","Locked","Locked","Locked","Locked","Locked","Locked","Locked"]},{"training_name":"Mycat02","training_status":"incomplete","page_name":["mycatpage01","mycatpage02","mycatpage03","mycatpage04"],"page_status":["Current","Locked","Locked","Locked"]}]}'>
                                        </td>
                                        <td id="email_191">realtest1@gm.com</td>
                                        <td id="phone_191">() -</td>
                                        <td id="department_191">
                                        Intern<input type="hidden" id="membership_191" value="902">                                        </td>
                                        <td class="text-center"><input type="checkbox" name="onoffswitch-191" class="onoffswitch-checkbox quick_action" data-val="" data-user-id="191" checked></td>
                                        <td class="text-center"><a href="javascript:void(0);" data-id="191" class="dashicons-before dashicons-edit manage-user-edit" style="text-decoration:none;"> </a><span data-val="191" data-user-name=" " data-user-id="u191" class="dashicons-before dashicons-trash user_delete_action" style="margin-right:5px;cursor:pointer;color:#E14D43;"></span>&nbsp;</td>
                                    </tr>
                                                                <tr>
                                        <td class="text-center"><span id="189" class="additional_info"><img id="additionalInfoImage" src="http://real.nadsoftpro.info/wp-content/plugins/custom-user-list/images/details_open.png"></span></td>
                                        <td>Dec 11, 2017</td>
                                        <td>usermetatest usermetatest                                            <input type="hidden" id="uname_189" name="uname" value="usermetatest">
                                            <input type="hidden" id="fname_189" name="fname" value="usermetatest">
                                            <input type="hidden" id="lname_189" name="lname" value="usermetatest">
                                            <input type="hidden" id="profile_img_189" name="profile_img" value="">
                                            <input type="hidden" id="join_date_189" name="join_date" value="Dec 11, 2017">
                                            <input type="hidden" id="training_status_189" name="training_status" value='{"189":[{"training_name":"Mycat03","training_status":"incomplete","page_name":["mycat301","mycat302","mycat303","mycat304","mycat305","mycat306"],"page_status":["Current","Locked","Locked","Locked","Locked","Locked"]}]}'>
                                        </td>
                                        <td id="email_189">usermetatest@gm.com</td>
                                        <td id="phone_189">() -</td>
                                        <td id="department_189">
                                        Bird Dogs<input type="hidden" id="membership_189" value="937">                                        </td>
                                        <td class="text-center"><input type="checkbox" name="onoffswitch-189" class="onoffswitch-checkbox quick_action" data-val="" data-user-id="189" checked></td>
                                        <td class="text-center"><a href="javascript:void(0);" data-id="189" class="dashicons-before dashicons-edit manage-user-edit" style="text-decoration:none;"> </a><span data-val="189" data-user-name=" " data-user-id="u189" class="dashicons-before dashicons-trash user_delete_action" style="margin-right:5px;cursor:pointer;color:#E14D43;"></span>&nbsp;</td>
                                    </tr>
                                                                <tr>
                                        <td class="text-center"><span id="115" class="additional_info"><img id="additionalInfoImage" src="http://real.nadsoftpro.info/wp-content/plugins/custom-user-list/images/details_open.png"></span></td>
                                        <td>Dec 1, 2017</td>
                                        <td>newinreal newinreal                                            <input type="hidden" id="uname_115" name="uname" value="newinreal">
                                            <input type="hidden" id="fname_115" name="fname" value="newinreal">
                                            <input type="hidden" id="lname_115" name="lname" value="newinreal">
                                            <input type="hidden" id="profile_img_115" name="profile_img" value="">
                                            <input type="hidden" id="join_date_115" name="join_date" value="Dec 1, 2017">
                                            <input type="hidden" id="training_status_115" name="training_status" value='{"115":[{"training_name":"Mycat03","training_status":"completed","page_name":["mycat301","mycat302","mycat303","mycat304","mycat305","mycat306"],"page_status":["completed","completed","completed","completed","completed","completed"]}]}'>
                                        </td>
                                        <td id="email_115">newinreal@gmail.com</td>
                                        <td id="phone_115">() -</td>
                                        <td id="department_115">
                                        Bird Dogs<input type="hidden" id="membership_115" value="937">                                        </td>
                                        <td class="text-center"><input type="checkbox" name="onoffswitch-115" class="onoffswitch-checkbox quick_action" data-val="" data-user-id="115" checked></td>
                                        <td class="text-center"><a href="javascript:void(0);" data-id="115" class="dashicons-before dashicons-edit manage-user-edit" style="text-decoration:none;"> </a><span data-val="115" data-user-name=" " data-user-id="u115" class="dashicons-before dashicons-trash user_delete_action" style="margin-right:5px;cursor:pointer;color:#E14D43;"></span>&nbsp;</td>
                                    </tr>
                                                                <tr>
                                        <td class="text-center"><span id="80" class="additional_info"><img id="additionalInfoImage" src="http://real.nadsoftpro.info/wp-content/plugins/custom-user-list/images/details_open.png"></span></td>
                                        <td>Dec 1, 2017</td>
                                        <td>hello hooktest                                            <input type="hidden" id="uname_80" name="uname" value="hooktest">
                                            <input type="hidden" id="fname_80" name="fname" value="hello">
                                            <input type="hidden" id="lname_80" name="lname" value="hooktest">
                                            <input type="hidden" id="profile_img_80" name="profile_img" value="">
                                            <input type="hidden" id="join_date_80" name="join_date" value="Dec 1, 2017">
                                            <input type="hidden" id="training_status_80" name="training_status" value='{"80":[{"training_name":"Mycat01","training_status":"incomplete","page_name":["mypagecat01","mypagecat02","mypagecat03","mypagecat04","mypagecat05","mypagecat06","mypagecat07","mypagecat08"],"page_status":["Current","Locked","Locked","Locked","Locked","Locked","Locked","Locked"]},{"training_name":"Mycat02","training_status":"incomplete","page_name":["mycatpage01","mycatpage02","mycatpage03","mycatpage04"],"page_status":["Current","Locked","Locked","Locked"]}]}'>
                                        </td>
                                        <td id="email_80">hooktest@gmail.com</td>
                                        <td id="phone_80">() -</td>
                                        <td id="department_80">
                                        Intern<input type="hidden" id="membership_80" value="902">                                        </td>
                                        <td class="text-center"><input type="checkbox" name="onoffswitch-80" class="onoffswitch-checkbox quick_action" data-val="" data-user-id="80" checked></td>
                                        <td class="text-center"><a href="javascript:void(0);" data-id="80" class="dashicons-before dashicons-edit manage-user-edit" style="text-decoration:none;"> </a><span data-val="80" data-user-name=" " data-user-id="u80" class="dashicons-before dashicons-trash user_delete_action" style="margin-right:5px;cursor:pointer;color:#E14D43;"></span>&nbsp;</td>
                                    </tr>
                                                                <tr>
                                        <td class="text-center"><span id="79" class="additional_info"><img id="additionalInfoImage" src="http://real.nadsoftpro.info/wp-content/plugins/custom-user-list/images/details_open.png"></span></td>
                                        <td>Dec 1, 2017</td>
                                        <td>sagar123 sagar123                                            <input type="hidden" id="uname_79" name="uname" value="sagar123">
                                            <input type="hidden" id="fname_79" name="fname" value="sagar123">
                                            <input type="hidden" id="lname_79" name="lname" value="sagar123">
                                            <input type="hidden" id="profile_img_79" name="profile_img" value="">
                                            <input type="hidden" id="join_date_79" name="join_date" value="Dec 1, 2017">
                                            <input type="hidden" id="training_status_79" name="training_status" value='{"79":[{"training_name":"Mycat01","training_status":"completed","page_name":["mypagecat01","mypagecat02","mypagecat03","mypagecat04","mypagecat05","mypagecat06","mypagecat07","mypagecat08"],"page_status":["completed","completed","completed","completed","completed","completed","completed","completed"]},{"training_name":"Mycat02","training_status":"completed","page_name":["mycatpage01","mycatpage02","mycatpage03","mycatpage04"],"page_status":["completed","completed","completed","completed"]}]}'>
                                        </td>
                                        <td id="email_79">sagar123@gmail.com</td>
                                        <td id="phone_79">() -</td>
                                        <td id="department_79">
                                        Intern<input type="hidden" id="membership_79" value="902">                                        </td>
                                        <td class="text-center"><input type="checkbox" name="onoffswitch-79" class="onoffswitch-checkbox quick_action" data-val="" data-user-id="79" checked></td>
                                        <td class="text-center"><a href="javascript:void(0);" data-id="79" class="dashicons-before dashicons-edit manage-user-edit" style="text-decoration:none;"> </a><span data-val="79" data-user-name=" " data-user-id="u79" class="dashicons-before dashicons-trash user_delete_action" style="margin-right:5px;cursor:pointer;color:#E14D43;"></span>&nbsp;</td>
                                    </tr>
                                                                <tr>
                                        <td class="text-center"><span id="78" class="additional_info"><img id="additionalInfoImage" src="http://real.nadsoftpro.info/wp-content/plugins/custom-user-list/images/details_open.png"></span></td>
                                        <td>Dec 1, 2017</td>
                                        <td>                                             <input type="hidden" id="uname_78" name="uname" value="real">
                                            <input type="hidden" id="fname_78" name="fname" value="">
                                            <input type="hidden" id="lname_78" name="lname" value="">
                                            <input type="hidden" id="profile_img_78" name="profile_img" value="">
                                            <input type="hidden" id="join_date_78" name="join_date" value="Dec 1, 2017">
                                            <input type="hidden" id="training_status_78" name="training_status" value='{"78":[]}'>
                                        </td>
                                        <td id="email_78">real@gm.com</td>
                                        <td id="phone_78">() -</td>
                                        <td id="department_78">
                                        -                                        </td>
                                        <td class="text-center"><span style="color:red"> Active </span></td>
                                        <td class="text-center"><a href="javascript:void(0);" data-id="78" class="dashicons-before dashicons-edit manage-user-edit" style="text-decoration:none;"> </a><span class="dashicons-before dashicons-trash" style="margin-right:5px;opacity:0.5;cursor:not-allowed;color:#E14D43;" disabled>&nbsp;</span></td>
                                    </tr>
                                                                <tr>
                                        <td class="text-center"><span id="77" class="additional_info"><img id="additionalInfoImage" src="http://real.nadsoftpro.info/wp-content/plugins/custom-user-list/images/details_open.png"></span></td>
                                        <td>Dec 1, 2017</td>
                                        <td>hammid hammid                                            <input type="hidden" id="uname_77" name="uname" value="hammid">
                                            <input type="hidden" id="fname_77" name="fname" value="hammid">
                                            <input type="hidden" id="lname_77" name="lname" value="hammid">
                                            <input type="hidden" id="profile_img_77" name="profile_img" value="">
                                            <input type="hidden" id="join_date_77" name="join_date" value="Dec 1, 2017">
                                            <input type="hidden" id="training_status_77" name="training_status" value='{"77":[]}'>
                                        </td>
                                        <td id="email_77">hammid@gma.com</td>
                                        <td id="phone_77">() -</td>
                                        <td id="department_77">
                                        -                                        </td>
                                        <td class="text-center"><input type="checkbox" name="onoffswitch-77" class="onoffswitch-checkbox quick_action" data-val="" data-user-id="77" checked></td>
                                        <td class="text-center"><a href="javascript:void(0);" data-id="77" class="dashicons-before dashicons-edit manage-user-edit" style="text-decoration:none;"> </a><span data-val="77" data-user-name=" " data-user-id="u77" class="dashicons-before dashicons-trash user_delete_action" style="margin-right:5px;cursor:pointer;color:#E14D43;"></span>&nbsp;</td>
                                    </tr>
                                                        </tbody>
                        </table>
                    </div>

                    <div id="FilterHTML" class="hide">
                        <div class="col-sm-3 col-md-2" id="selectFilter" >
                            <select id="statusFilter" class="form-control">
                                <option value="">All</option>
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
                            </select>
                            <span>&nbsp;&nbsp;</span>
                        </div>

                        <div class="col-sm-3 col-md-2" id="membershipSelectFilter">											
                            <select name="membershipFilter" id="membershipFilter" class="form-control">
                                <option value="">Select Membership Role</option>
                                                                    <option value="Intern">Intern</option>
                                                                    <option value="Bird Dogs">Bird Dogs</option>
                                                                    <option value="Sales Team">Sales Team</option>
                                                                    <option value="Research Team">Research Team</option>
                                                                    <option value="Repair Team">Repair Team</option>
                                                            </select>
                        </div>
                        
                        <div class="col-sm-6 col-md-5" id="dateFilter">
                            <form id="datepickerform" action="" method="post">
                                <input type="hidden" name="fdate" id="fromDate" value="" />
                                <input type="hidden" name="tdate" id="toDate" value="" />
                                <div style="float:left;"></div>
                                <div class="input-group" id="datePickerDiv" style="float:right;margin-bottom:2px">
                                    <div id="reportrangeManageStaffArea" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 8px; border: 1px solid #ccc;">
                                        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;
                                        <span></span> <b class="caret"></b>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                    <div id="datehtml" class="hide">		
						<div class="col-sm-6 col-md-8 col-lg-9" id="dateFilter">
							<form id="datepickerform" action="" method="post">
								<input type="hidden" name="fdate" id="fromDate" value="" />
								<input type="hidden" name="tdate" id="toDate" value="" />
								<div style="float:left;"></div>
								<div class="input-group" id="datePickerDiv" style="float:right;margin-bottom:10px;">
									 <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc;">
										 <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;
										 <span></span> <b class="caret"></b>
									</div>	
								</div>
							</form>
							<select id="statusFilter" class="form-control" style="margin-right:10px;margin-bottom:7px;">
								<option value="">All Roles</option>
								<option value="company">Company</option>
								<option value="manager">Manager</option>
								<option value="staff">Staff</option>
							</select>
						</div>
					</div>
				</div><br><br><br>	
                <!--</div>-->
                            </div>
            <!-- Modal -->
            <div id="staffModal" class="modal fade" role="dialog">
                <form name="staffUpdateForm" id="staffUpdateForm">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title"> UPDATE STAFF </h4>
                            </div>
                            <div class="modal-body" style="padding: 10px 35px;">
                                <div class="row">
                                    <div id="statusupdate" class="text-center"></div>
                                </div>
                                <div class="row">
                                    <div class="message_container" style="margin: 15px 0;"></div>
                                    <input type="hidden" id="_wp_http_referer" name="_wp_http_referer" value="/wp-admin/users.php?page=manage-user-list">
                                    <input type="hidden" id="uid" name="uid" value="">

                                    <div class="form-group">
                                        <label for="user_login" class="col-sm-4 control-label text-right">Username <span class="mandatory">*</span></label>
                                        <div class="col-sm-7">
                                            <input maxlength="20" type="text" id="user_login" name="user_login" class="form-control required alphanumericValidation" placeholder="Enter Username" readonly>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="first_name" class="col-sm-4 control-label text-right">First Name <span class="mandatory">*</span></label>
                                        <div class="col-sm-7">
                                            <input type="text" id="first_name" placeholder="Enter First Name" maxlength="30" name="first_name" class="form-control required alphabetWithSpace">
                                            <input type="hidden" id="prev_first_name" name="prev_first_name" value="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="last_name" class="col-sm-4 control-label text-right">Last Name <span class="mandatory">*</span></label>
                                        <div class="col-sm-7">
                                            <input type="text" id="last_name" placeholder="Enter Last Name" maxlength="30" name="last_name" class="form-control required alphabetWithSpace">
                                            <input type="hidden" id="prev_last_name" name="prev_last_name" value="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="ctc_mlevel" class="col-sm-4 control-label text-right">Department <span class="mandatory">*</span></label>
                                        <div class="col-sm-7">											
                                            <select name="membership" id="membership" class="form-control required">
                                                <option value="">Select Department</option>
                                                                                                        <option value="902">Intern</option>
                                                                                                        <option value="937">Bird Dogs</option>
                                                                                                        <option value="938">Sales Team</option>
                                                                                                        <option value="940">Research Team</option>
                                                                                                        <option value="941">Repair Team</option>
                                                                                            </select>
                                        </div>
                                        <input type="hidden" id="prev_membership" name="prev_membership" value="">
                                    </div>

                                    <div class="form-group">
                                        <label for="email" class="col-sm-4 control-label text-right">Email Address <span class="mandatory">*</span></label>
                                        <div class="col-sm-7">
                                            <input type="email" id="email" name="email" placeholder="Enter Email Address" maxlength="100" class="form-control required emailValidation" readonly>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="phone_no" class="col-sm-4 control-label text-right">Phone Number <span class="mandatory">*</span></label>
                                        <div class="col-sm-7">
                                            <input type="text" id="phone_no" name="phone_no" placeholder="Phone Number" class="form-control required phone-mask">
                                            <input type="hidden" id="prev_phone_no" name="prev_phone_no" value="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-4 control-label text-right">Status <span class="mandatory">*</span></label>
                                        <div class="col-sm-7">
                                            <input type="radio" name="status" id="active" value="active"> Active
                                            <input type="radio" name="status" id="deactive" value="pending"> Inactive
                                        </div>
                                        <input type="hidden" id="prev_status" name="prev_status" value="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text-center" style="padding: 10px;">
                                        <button type="button" class="btn btn-success" id="updateStaffManageStaffArea">Update &nbsp; <i class="fa fa-arrow-circle-o-right"></i></button>
                                    </div>
                                </div>							
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary pull-left" id="resetPassword">Reset Password&nbsp; <i class="fa fa-arrow-circle-o-right"></i></button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- modal box for reset passowrd confirmation -->
<div id="resetpassword-confiramation" class="modal fade" style="padding-top:10%;">
    <div class="modal-dialog modal-dialog-custom-box">
        <div class="modal-content modal-content-custom-box">
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-primary" data-id="" class="" id="reset" style="text-shadow:none;box-shadow: none;">Yes </button>
                <button type="button" data-dismiss="modal" class="btn">No </button>
            </div>
        </div>
    </div>
</div>

 <!-- Modal for delete user confirmation -->
<div id="deleteUserBox" class="modal fade" style="padding-top:10%;">
	<div class="modal-dialog modal-dialog-custom-box">
		<div class="modal-content modal-content-custom-box">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Delete User</h4>
			</div>
			<div class="modal-body">
				<p style="text-align:center;"><strong>Are You Sure ? </strong></p>
			</div>
			<div class="modal-footer">
				<button type="button" data-dismiss="modal" class="btn btn-danger">Close</button>&nbsp;
				<button type="button" data-dismiss="modal" data-id="" class="btn btn-danger" id="deleteusr" >Delete</button>
			</div>
		</div>
	</div>
</div>

<div class="clear"></div></div><!-- wpbody-content -->
<div class="clear"></div></div><!-- wpbody -->
<div class="clear"></div></div><!-- wpcontent -->

<div id="wpfooter" role="contentinfo">
		<p id="footer-left" class="alignleft">
		<span id="footer-thankyou">Thank you for creating with <a href="https://wordpress.org/">WordPress</a>.</span>	</p>
	<p id="footer-upgrade" class="alignright">
		Version 4.9.1	</p>
	<div class="clear"></div>
</div>
<script>window.ms_data = {"ms_init":["controller_adminbar","frontend_register","controller_adminbar"],"switching_text":"Switching..."};</script>	<div id="wp-auth-check-wrap" class="hidden">
	<div id="wp-auth-check-bg"></div>
	<div id="wp-auth-check">
	<button type="button" class="wp-auth-check-close button-link"><span class="screen-reader-text">Close dialog</span></button>
			<div id="wp-auth-check-form" class="loading" data-src="http://real.nadsoftpro.info/wp-login.php?interim-login=1&#038;wp_lang=en_US"></div>
			<div class="wp-auth-fallback">
		<p><b class="wp-auth-fallback-expired" tabindex="0">Session expired</b></p>
		<p><a href="http://real.nadsoftpro.info/wp-login.php" target="_blank">Please log in again.</a>
		The login page will open in a new window. After logging in you can close it and return to this page.</p>
	</div>
	</div>
	</div>
	<script type='text/javascript'>
/* <![CDATA[ */
var ElementorAdminConfig = {"home_url":"http:\/\/real.nadsoftpro.info","i18n":{"rollback_confirm":"Are you sure you want to reinstall previous version?","rollback_to_previous_version":"Rollback to Previous Version","yes":"Yes","cancel":"Cancel"}};
/* ]]> */
</script>

<script type='text/javascript'>
/* <![CDATA[ */
var commonL10n = {"warnDelete":"You are about to permanently delete these items from your site.\nThis action cannot be undone.\n 'Cancel' to stop, 'OK' to delete.","dismiss":"Dismiss this notice.","collapseMenu":"Collapse Main menu","expandMenu":"Expand Main menu"};var heartbeatSettings = {"nonce":"262fa129fb"};var authcheckL10n = {"beforeunload":"Your session has expired. You can log in again from this page or go to the login page.","interval":"180"};var wpColorPickerL10n = {"clear":"Clear","clearAriaLabel":"Clear color","defaultString":"Default","defaultAriaLabel":"Select default color","pick":"Select Color","defaultLabel":"Color value"};var thickboxL10n = {"next":"Next >","prev":"< Prev","image":"Image","of":"of","close":"Close","noiframes":"This feature requires inline frames. You have iframes disabled or your browser does not support them.","loadingAnimation":"http:\/\/real.nadsoftpro.info\/wp-includes\/js\/thickbox\/loadingAnimation.gif"};/* ]]> */
</script>
<script type='text/javascript' src='http://real.nadsoftpro.info/wp-admin/load-scripts.php?c=0&amp;load%5B%5D=hoverIntent,common,admin-bar,svg-painter,heartbeat,wp-auth-check,jquery-ui-core,jquery-ui-widget,jquery-ui-mouse,jquery-ui-dragg&amp;load%5B%5D=able,jquery-ui-slider,jquery-touch-punch,iris,wp-color-picker,suggest,thickbox&amp;ver=4.9.1'></script>
<script type='text/javascript' src='http://real.nadsoftpro.info/wp-content/plugins/biztech-crm-portal/assets/js/scp-js.js?ver=4.9.1'></script>
<script type='text/javascript' src='http://real.nadsoftpro.info/wp-content/plugins/manage-trainings/js/admin/jquery.inputmask.bundle.js?ver=4.9.1'></script>
<script type='text/javascript' src='http://real.nadsoftpro.info/wp-content/plugins/elementor/assets/js/admin.min.js?ver=1.8.8'></script>
<script type='text/javascript' src='http://real.nadsoftpro.info/wp-content/plugins/membership/lib/wpmu-lib/js/select2.3.min.js?ver=4.9.1'></script>
<script type='text/javascript' src='http://real.nadsoftpro.info/wp-includes/js/jquery/ui/datepicker.min.js?ver=1.11.4'></script>
<script type='text/javascript'>
jQuery(document).ready(function(jQuery){jQuery.datepicker.setDefaults({"closeText":"Close","currentText":"Today","monthNames":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthNamesShort":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"nextText":"Next","prevText":"Previous","dayNames":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"dayNamesShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"dayNamesMin":["S","M","T","W","T","F","S"],"dateFormat":"MM d, yy","firstDay":1,"isRTL":false});});
jQuery(document).ready(function(jQuery){jQuery.datepicker.setDefaults({"closeText":"Close","currentText":"Today","monthNames":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthNamesShort":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"nextText":"Next","prevText":"Previous","dayNames":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"dayNamesShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"dayNamesMin":["S","M","T","W","T","F","S"],"dateFormat":"MM d, yy","firstDay":1,"isRTL":false});});
</script>
<script type='text/javascript' src='http://real.nadsoftpro.info/wp-content/plugins/bbpress/templates/default/js/editor.js?ver=2.5.14-6684'></script>
<script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script type='text/javascript' src='http://real.nadsoftpro.info/wp-content/themes/oceanwp-child/js/custom.js?ver=1.0.0'></script>
<script type='text/javascript' src='http://real.nadsoftpro.info/wp-includes/js/wp-embed.min.js?ver=4.9.1'></script>

<div class="clear"></div></div><!-- wpwrap -->
<script type="text/javascript">if(typeof wpOnload=='function')wpOnload();</script>
</body>
</html>

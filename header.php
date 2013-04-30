<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">

<title><?php bloginfo('name'); ?> <?php wp_title('&raquo;', true, 'left'); ?></title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="robots" content="index,follow" />

<link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php bloginfo('template_directory'); ?>/style/google-map.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php bloginfo('template_directory'); ?>/style/print.css" rel="stylesheet" type="text/css" media="print" />
<link href="http://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css"/>

<!--[if (gte IE 6)&(lte IE 8)]>
<script type="text/javascript" src="js/html5.js"></script>
<script type="text/javascript" src="js/selectivizr-min.js"></script>
<link rel="stylesheet" href="css/ie_7.css" type="text/css" />
<![endif]-->

<script src="<?php bloginfo('template_directory'); ?>/js/jQuery.min.js"  type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/functions.js"  type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/contact-form/contact-form.js"  type="text/javascript"></script>

<!-- Image Gallery -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/fancybox/jquery.fancybox-1.3.4.css" media="screen" />

<!-- Popup Contact Form -->
<script src="<?php bloginfo('template_directory'); ?>/js/popup.js" type="text/javascript"></script>


<!-- Style Swticher -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/styleswitch.js"></script>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style/big.css" title="big" media="screen" />
<link rel="alternate stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style/blue.css" title="blue" media="screen" />
<link rel="alternate stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style/blue2.css" title="blue2" media="screen" />
<link rel="alternate stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style/br.css" title="br" media="screen" />
<link rel="alternate stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style/brown.css" title="brown" media="screen" />
<link rel="alternate stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style/bs.css" title="bs" media="screen" />
<link rel="alternate stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style/cgrey.css" title="cgrey" media="screen" />
<link rel="alternate stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style/dark.css" title="dark" media="screen" />
<link rel="alternate stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style/orange.css" title="orange" media="screen" />
<link rel="alternate stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style/purple.css" title="purple" media="screen" />
<link rel="alternate stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style/white.css" title="white" media="screen" />
<link rel="alternate stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style/yellow.css" title="yellow" media="screen" />
<link rel="alternate stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style/mini.css" title="mini" media="screen" />


<style type="text/css">
/* Style Sheet Switcher */

.onpage-style-switcher{width:40px; position:absolute; margin-top:170px; padding-top:10px; padding-bottom:10px; background-color:#fff;}
.onpage-style-switcher li{ padding:0px; margin:1px 0px 0px 0px;}
.onpage-style-switcher li a{color:#fff; text-shadow:none;}
.onpage-style-switcher li a div:hover{padding-right:20px;}
</style>

<link href="<?php bloginfo('template_directory'); ?>/style/popup.css" rel="stylesheet" type="text/css" media="screen" />
<?php wp_head(); ?>
</head>

<body>



<ul class="onpage-style-switcher">
	<li><a href="style/style=white" rel="white" class="styleswitch"><div style="background-color:#5FB053; height:25px; width:30px;"></div></a></li>
	<li><a href="style/style=big" rel="big" class="styleswitch"><div style="background-color:#1f3862; height:25px; width:30px;"></div></a></li>
	<li><a href="style/style=yellow" rel="yellow" class="styleswitch"><div style="background-color:#fdff01; height:25px; width:30px;"></div></a></li>
	<li><a href="style/style=br" rel="br" class="styleswitch"><div style="background-color:#9a1b1f; height:25px; width:30px;"></div></a></li>
    <li><a href="style/style=bs" rel="bs" class="styleswitch"><div style="background-color:#eb374b; height:25px; width:30px;"></div></a></li>
    <li><a href="style/style=brown" rel="brown" class="styleswitch"><div style="background-color:#2f2913; height:25px; width:30px;"></div></a></li>
    <li><a href="style/style=mini" rel="mini" class="styleswitch"><div style="background-color:#dedede; height:25px; width:30px;"></div></a></li>
    <li><a href="style/style=cgrey" rel="cgrey" class="styleswitch"><div style="background-color:#3c3d3f; height:25px; width:30px;"></div></a></li>
    <li><a href="style/style=orange" rel="orange" class="styleswitch"><div style="background-color:#bd492a; height:25px; width:30px;"></div></a></li>
	<li><a href="style/style=dark" rel="dark" class="styleswitch"><div style="background-color:#111111; height:25px; width:30px;"></div></a></li>
    <li><a href="style/style=blue2" rel="blue2" class="styleswitch"><div style="background-color:#359ccf; height:25px; width:30px;"></div></a></li>
	<li><a href="style/style=purple" rel="purple" class="styleswitch"><div style="background-color:#d34699; height:25px; width:30px;"></div></a></li>
	<li><a href="style/style=blue" rel="blue" class="styleswitch"><div style="background-color:#90d3d9; height:25px; width:30px;"></div></a></li>
</ul>


<div id="mydiv" class="success" style="display:none;">

Thank you for contacting me!

</div>

<div style="clear:both;"></div>

<!--map start-->
<div id="map-wrapper">

<div id="topLine"></div>

        <div id="topPanel">
		<div id="googleMap" class="googleMap" data-zoom="8" data-latitude="31.229009" data-longitude="73.859312" data-title="Rana Hunting Resort Restaurant">
		</div>

        <div class="gwrap">

            <div id="topPanelHandle"><span>Map</span></div>

            </div>


	</div>
</div>
<!--map ends-->

<!--header start-->
<header class="header">






			<div class="headerwrapper">



             <h1><?php bloginfo('name'); ?></h1>

             <div class="clearfix"></div>

             <h2><?php bloginfo ( 'description' ); ?></h2>
            </div>


</header>
<!--header end-->


			<!--wrapper start-->
			<div id="wrapper">
<!doctype html>

<html> 


<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Jeana Clark :: Designer <?php if (isset($pagename)) { ?>:: <?php echo $pagename; } ?></title>

    <link rel="icon" href="/img/favicon.png" />

    <link rel="stylesheet" media="screen" type="text/css" href="/css/normalize.css" />
    <link rel="stylesheet" media="screen" type="text/css" href="/css/rwd.css" />

    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link href='http://fonts.googleapis.com/css?family=Raleway:400,200,300,500,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Kristi' rel='stylesheet' type='text/css'>
 
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>


	<meta property="og:title" content="Jeana Clark :: Graphic Designer"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="http://www.jeanaclark.org/"/>
    <meta property="og:image" content="http://www.jeanaclark.org/img/jlogo3.png"/>
    <meta property="og:site_name" content="Jeana Clark :: Graphic Designer"/>
    <meta property="og:description"
          content="Creative and innovative graphic designer who collaborates with organizations and companies to help them tell their unique and inspiring story. + 12 years in web development, 14 years in print design + HTML, CSS, PHP, JavaScript, ASP, Responsive Web Design. + Drupal + Wordpress + Graphic design skills + logo and brand development, brand collateral and publication design."/>
          
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41110643-1', 'jeanaclark.org');
  ga('send', 'pageview');

</script>




</head>

<body class="wireframe">


	<header id="header">
	</header>
	
<div id="page">

  <header id="logo">

  <div>
    <a href="/"><img src="/img/jlogo.png" alt="JeanaClarkLogo" width="100" height="140" /></a>
    <div>
      <span class="mediumgreen">Jeana</span>
      <span class="mediumgreen2">Clark</span>
    </div>
  </div>

  <nav id="nav">

<?php
        $homepage = "/";
        $web = "/web/";
        $print = "/print/";
        $logos = "/logos/";
        $currentpage = $_SERVER['REQUEST_URI'];
          ?>

    <ul>
      <li <?php if ($currentpage==$web) { ?>class="selected"<?php } ?>><a href="/web">Web</a></li>
      <li <?php if ($currentpage==$print) { ?>class="selected"<?php } ?>><a href="/print">Print</a></li>
      <li <?php if ($currentpage==$logos) { ?>class="selected"<?php } ?>><a href="/logos">Logos</a></li>
      <li><a href="/contact">Contact</a></li>
    </ul>
  </nav>

  </header>
<!doctype html>

<html> 


<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Jeana Clark :: Graphic Designer</title>

    <link rel="icon" href="/img/favicon.png" />

    <link rel="stylesheet" media="screen" type="text/css" href="/css/normalize.css" />
    <link rel="stylesheet" media="screen" type="text/css" href="/css/rwd.css" />

    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link href='http://fonts.googleapis.com/css?family=Raleway:400,200,300,500,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Kristi' rel='stylesheet' type='text/css'>
 
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>

<body class="wireframe">
<?php include_once("/js/analytics.php") ?>

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
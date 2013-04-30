<!doctype html>

<html> 
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Jeana Clark :: Graphic Designer</title>

    <?php
        $homepage = "/";
        $currentpage = $_SERVER['REQUEST_URI'];
        if($homepage==$currentpage) {  ?>
<script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/thickbox.js"></script>
    <link href="/css/thickbox.css" rel="stylesheet" type="text/css" />
            <?php } ?>
            
    <link rel="icon" href="/img/favicon.png" />
    <link rel="stylesheet" media="screen" type="text/css" href="/css/style.css" />
</head>

<body>
    <div id="top">        
    </div>

    <div id="nav">
        <a href="/">
            <img src="/img/jlogo.png" alt="JeanaClarkLogo" style="float:left;" />
        </a>
        <a href="/">
            <img src="/img/jc-name.png" alt="JeanaClark" width="280" height="43" style="margin:35px 0 0 20px;float:left;" />
        </a>

        <ul>
            <li><a href="mailto:jeana@jeanaclark.org"><img src="/img/email-icon.png" alt="Email" /> contact</a></li>
            <li><a href="/JeanaClarkResume_web.pdf"><img src="/img/pdficon_small.gif" alt="Download Resume" /> resume</a></li>
            <li><a href="/" style="border-bottom:none;">portfolio</a>
                <ul>
                    <li><a href="/logos/">Logos</a></li>
                    <li><a href="/collateral/">Collateral</a></li>
                    <li><a href="/magazines/">Magazines</a></li>
                    <li><a href="/web/">Websites</a></li>
                </ul>
            </li>        
        </ul>
    </div>

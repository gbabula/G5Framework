<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start('ob_gzhandler'); else ob_start(); ?>
<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>

<!DOCTYPE html><!--G5Framework-->

<!--[if lt IE 7 ]> <html class="no-js lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
<meta charset="utf-8">
<link rel="dns-prefetch" href="//ajax.googleapis.com/" />

<title>HTML5 Front End Development - G5Framework</title>

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta http-equiv="imagetoolbar" content="no" />

<meta name="author" content="G5Framework.com" />  
<meta name="copyright" content="&copy; 2013" /> 
<meta name="description" content="G5Framework is a HTML5 Cross Browser Front End Development Boilerplate" /> 

<meta property="og:title" content="HTML5 Front End Development - G5Framework" />
<meta property="og:description" content="G5Framework is a HTML5 Cross Browser Front End Development Boilerplate" />
<meta property="og:type" content="website" />
<meta property="og:url" content="/<?php echo $page ?>" />
<meta property="og:image" content="_assets/icon/touch-icon-iphone4.png" />

<meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1" />
<meta name="robots" content="index,follow" /> 
<meta name="robots" content="noodp" />

<link rel="author" href="humans.txt" />
<link rel="canonical" href="/<?php echo $page ?>" />

<link rel="apple-touch-icon" href="_assets/icon/touch-icon-iphone.png" />
<link rel="apple-touch-icon" sizes="72x72" href="_assets/icon/touch-icon-ipad.png" />
<link rel="apple-touch-icon" sizes="114x114" href="_assets/icon/touch-icon-iphone4.png" />

<link rel="icon" href="_assets/icon/favicon.png" />
<!--[if IE]><link rel="shortcut icon" href="_assets/icon/favicon.ico" /><![endif]-->
<meta name="msapplication-TileColor" content="#411c15" />
<meta name="msapplication-TileImage" content="_assets/icon/tile-icon.png" />

<link rel="stylesheet" href="_assets/css/base.css?v=1" />
<link rel="stylesheet" href="_assets/css/media.css?v=1" />

<script src="_assets/js/libs/modernizr.2.6.2-min.js"></script>

</head>
<body class="demo-page">

    <div id="main" role="main">

        <?php include("parts/header.php"); ?>

        <section class="content wrap-max">
            <div class="wrap cf">

                <?php include("include/demo.php"); ?>

            </div><!--end .wrap-->
        </section><!--end .content-->

        <?php include("parts/footer.php"); ?>

        <?php include("parts/modals.php"); ?>

    </div><!--end #main-->

    <script src="_assets/js/app.js"></script>

</body>
</html>
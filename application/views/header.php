<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic Page Needs
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title><?php if($pageTitle) echo $pageTitle . ' | '; ?>Indian Academy of Sciences</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FONT
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="stylesheet" id="royal_enqueue_Lato-css" href="https://fonts.googleapis.com/css?family=Lato%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900&amp;ver=1.0.0" type="text/css" media="all">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400italic,400,600,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,400,300,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet">
    <!-- Javascript calls
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?=PUBLIC_URL?>js/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="<?=PUBLIC_URL?>js/lightbox.js"></script>
        <script type="text/javascript" src="<?=PUBLIC_URL?>js/viewer.js"></script>
 
    <!-- CSS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="stylesheet" href="<?=PUBLIC_URL?>css/normalize.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="css/skeleton.css"> -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css"> -->
    <link rel="stylesheet" href="<?=PUBLIC_URL?>css/navbar.css">
    <link rel="stylesheet" href="<?=PUBLIC_URL?>css/carousel.css">
    <link rel="stylesheet" href="<?=PUBLIC_URL?>css/page.css">
    <link rel="stylesheet" href="<?=PUBLIC_URL?>css/archive.css">
    <link rel="stylesheet" href="<?=PUBLIC_URL?>css/general.css">
    <link rel="stylesheet" href="<?=PUBLIC_URL?>css/flat.css">
    <link rel="stylesheet" href="<?=PUBLIC_URL?>css/form.css">
    <link rel="stylesheet" href="<?=PUBLIC_URL?>css/aux.css">
    <link rel="stylesheet" href="<?=PUBLIC_URL?>css/social.css">
    <link rel="stylesheet" href="<?=PUBLIC_URL?>css/viewer.css">
    <script type="text/javascript">var base_url = "<?= BASE_URL?>";</script>
    <!-- Favicon
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="icon" type="image/png" href="<?=PUBLIC_URL?>images/favicon.png">
</head>
<body>
<?php echo file_get_contents( BASE_URL . 'vendor/analyticstracking.php' ); ?>
    <!-- Navigation
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <nav class="navbar navbar-default navbar-fixed-top wider">
        <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-primary-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbar-primary-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="<?=BASE_URL?>#home">Home</a></li>
                    <li><a>·</a></li>
                    <li><a href="#">About</a></li>
                    <li><a>·</a></li>
                    <li><a href="#">Speakers</a></li>
                    <li><a>·</a></li>
                    <li><a href="<?=BASE_URL?>page/flat/Schedule">Schedule</a></li>                    
                    <li><a>·</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#"><img src="<?=PUBLIC_URL?>images/logo.png" alt="Logo of the Indian Academy of Sciences" class="img-circle logo"></a></li>
                    <li><a href="#">Info for Participants</a></li>
                    <li><a>·</a></li>
                    <li><a href="#">Downloads</a></li>
                    <li><a>·</a></li>
                    <li><a href="<?=BASE_URL?>Information/Contact">Contact Us</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <!-- End Navigation
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
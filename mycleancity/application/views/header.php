<?php
    $p0='';
    $p1='';
    $p2='';
    switch ($numPage) {
        case '0':
            $p0 = ' style="font-weight: bold"';
            break;
        case '1':
            $p1 = ' style="font-weight: bold"';
            break;
        case '2':
            $p2 = ' style="font-weight: bold"';
            break;

        default:
            break;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>My Clean City</title>

    <!-- Bootstrap Core CSS -->
    <link href="/mycleancity-hackathon/mycleancity/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/mycleancity-hackathon/mycleancity/assets/css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
    <script src='https://api.tiles.mapbox.com/mapbox.js/v2.1.9/mapbox.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox.js/v2.1.9/mapbox.css' rel='stylesheet' />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!--     <div class="brand">mycleancityf</div> -->
    <div class="address-bar">
    <a href="/mycleancity-hackathon/mycleancity/index.php/uploadController"><img class="img-responsive img-center" src="/mycleancity-hackathon/mycleancity/assets/img/logoMCC2.png" alt=""></a>
    </div>
    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">mycleancity</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="/mycleancity-hackathon/mycleancity/index.php/uploadController" <?php echo $p0; ?>>Accueil</a>
                    </li>
                    <li>
                        <a href="/mycleancity-hackathon/mycleancity/index.php/moderationController" <?php echo $p1; ?>>Mod&#233;ration</a>
                    </li>
					<li>
                        <a href="/mycleancity-hackathon/mycleancity/index.php/listingController" <?php echo $p2; ?>>En attente</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
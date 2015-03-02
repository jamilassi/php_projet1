<?php if( !defined('OK') ){ exit(); } ?><!doctype html>
<html lang="<?php echo $lang ?>">
<head>
	<meta charset="<?php echo $encoding ?>">
	
	<title></title>

    <!-- 
        
        BOOTSTRAP
                      
     -->
     
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="css/normalize.css" rel="stylesheet" type="text/css"> 
    
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css"> 
    
    <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css"> 
    
    <link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
	
    
    <!-- 
        
        CUSTOM STYLE
                      
     -->
    <link href="css/grayscale.css" rel="stylesheet">
     
    <link href="css/flags.css" rel="stylesheet" type="text/css">
    

    <script>var SCRIPT_NAME="<?php echo $filename; ?>"</script>
  
      <!-- 
            Custom Fonts 
      -->
  <!-- Custom CSS -->
    

  
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="index.php#page-top">
                    <i class="fa fa-play-circle"></i>  <span class="light">Address Book</span><!--<span><a>En</a></span>&nbsp;&bull;&nbsp;<span><a>Fr</a></span>-->
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Your List</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact Me</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

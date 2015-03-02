<?php
define('OK',1);
include('php/global.php');
include('php/functions.php');
include('php/connection.php');
	
	$form_action = 'contact.php';
	$button_text = 'Add Contact';
		
	$ID = (isset($_GET['id'])	&& 	is_numeric($_GET['id'])	)	?	$_GET['id']:'';
	$action = (isset($_GET['action']))	?	$_GET['action']:'';
	
	$firstname = (isset($_POST['firstname']))	?	$_POST['firstname']:'';
	$lastname = (isset($_POST['lastname']))		?	$_POST['lastname']:'';
	$email = (isset($_POST['email']))	?	$_POST['email']:'';
		
			


if ($ID == ''	&&	$firstname != ''	&&	$lastname !=''	&&	$email != '') 
			{
					add_contact();
			}



if ($ID!=''	&&	$action=='update') 
			{
					update_contact();
			}


if ($ID != ''	&&	$row= get_contact($ID)) 
			{
					$firstname 		= $row['firstname'];
					$lastname 		= $row['lastname'];
					$email 			= $row['email'];
					
					$form_action 	= 'contact.php?action=update&id=%d';
					$form_action 	= sprintf($form_action,$ID);
					
					$button_text 	= "Save Contact";
	
			}
		
?>
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
                    <i class="fa fa-play-circle"></i>  <span class="light">Address Book</span>&nbsp;&bull;&nbsp;<span>Back</span><!--<span><a>En</a></span>&nbsp;&bull;&nbsp;<span><a>Fr</a></span>-->
                </a>
            </div>
     
        <!-- /.container -->
        <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                  
                    <li>
                        <a class="page-scroll" href="#contact">Contact Me</a>
                    </li>
                </ul>
            </div>
            </div>
    </nav>
<!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        
                     <div class="thumbnail" style="background-color:#000;">
                     		<?php include('php/form.php'); ?>
                      </div>   
                        
                    </div>
                </div>
            </div>
        </div>
    </header>
                    


    

    
<?php  
include('php/footer.php');
?>
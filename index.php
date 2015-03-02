<?php
define('OK',1);
include('php/global.php');
include('php/functions.php');
include('php/connection.php');
include('php/header.php');
?>

<!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading" style="font-family: 'Crete Round', serif;">Address Book</h1>
                        <p class="intro-text">Access to your Address Book</p>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Your Contacts</h2>
  <?php  

              
                        function show_contacts()
                                    {
                                    global $mysqli;
                                    $query = "SELECT * FROM clients";
                                    $html ='<a href="%s" class="list-group-item ">';
                                    $html.='<h4 class="list-group-item-heading">%s</h4>';
                                    $html.='<p class="list-group-item-text">%s</p>';
									$html.='<p class="list-group-item-text">%s</p></a>';
                    
                                    $result = $mysqli->query($query);
                    
                      
                                    while($row = $result->fetch_assoc()) 
                                            { 
                                            $ID='?id='.$row['client_id']; 
                                            $href='about.php'.$ID;
                                            $name= $row['firstname'].' '.$row['lastname'];
                                            printf($html,'about.php'.$ID, $name,$row['email'],$row['phone']);
                                            }
                    
                                    }
?>
<div class="row">
<div class="col-md-2">
</div>
<div class="col-md-8">
	
    <div class="list-group">
    <a href="contact.php" class="btn "><span class="glyphicon glyphicon-plus">&nbsp;Add New</span></a>
    <br>
	<?php show_contacts(); ?>
    
    </div>
 </div>
 <div class="col-md-2">
</div>
 </div>
            </div>
        </div>
    </section>
    
<?php  
include('php/footer.php');
?>
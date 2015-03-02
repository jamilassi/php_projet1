<?php if( !defined('OK') ){ exit(); } 

if( isset($mysqli) ){ 
          
          $mysqli->close(); 
      }

?>

    </div>
    

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ 
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>-->
    <script type="text/javascript" src="js/main.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>
    
 <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contact me</h2>
                <label for="email">Enter your email here to contact me</label>
                
                <form method="post" action="php/server.php">
                	<input type="text" class="form-control" name="email" id="email" placeholder="Enter Email">
                <br><br>
                <button type="submit" class="btn">Submit</button>
                </form>
                
            </div>
        </div>
    </section>    
 <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; Your Website 2014</p>
        </div>
    </footer>
</body>

</html>   
</body>
</html>
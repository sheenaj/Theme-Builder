<?php

$h4_block = "Contents Saved!";
$some = $_POST['some1'];
//$entity_some = htmlentities($some);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="css/font-awesome.min.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="css/main.css">
      <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>

  </head>
  
  <body>
      <div class="topband">
        <div class="tinylogo">
      </div>
     </div>
  
          <div class="col-md-12">
  <div class="node-name">
      <div class="left pull-left"> 
        <h4 class="pull-left"><strong>Node Name:</h4>
          <h4 class="pull-right data" style="color: rgb(255, 110, 159);"><strong>testbed-0-3684201167</strong></h4>
      </div>

      <div class="right pull-right"> 
        <h4 class="pull-left"><strong>Mesh-IP-Address:</h4>
          <h4 class="pull-right data" style="color: rgb(255, 110, 159);"><strong>100.1.1.678</strong></h4>
      </div>
      </div>
    </div>

      
  
         <div class="thinband">
           <div  class="pull-left leftstrip"></div>
             <div  class="rightstrip pull-right"> </div>
               <div class="centerstrip">         

           </div>
           
            <div class="row">
           <div class= "main-content  matter col-md-12">
            
            <h4>Welcome!</h4>
            <div>
              <?php echo $some; ?>
            </div>
          
              
            <div class="grid">
              <img src="img/apps.png">
            </div></br>
            <p style="color: rgb(255, 110, 159)">Local Applications</p>
          </br>
          <div class="grid">
            <img src="img/internet.png">
          </div>
          </br>
            <p style="color: rgb(255, 110, 159)">Internet Connection</p>
          </br>



           </div>

            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="footer">
                  <div class="triangle"></div>
                        <div class="row">
                    <div class=" col-md-3 bottom-options">
                        
                        <div class="col-md-3">
                        <div class="newgrid ">
                          <img src="img/about.png">
                          <p>About</p>
                          </div>
                        </div>


                           <div class="col-md-3">
                          <div class="newgrid ">
                          <img src="img/advance.png">
                          <p>Admin</p>
                          </div>
                          </div>
                      
                          <div class="col-md-3">
                          <div class="newgrid ">
                          <img src="img/license.png">
                          <p>License</p>
                          </div>
                        </div>

                            <div class="col-md-3">
                          <div class="newgrid">
                          <img src="img/help.png">
                          <p>Help</p>
                          </div>
                        </div>

                    </div>  
                    </div> 



                

              </div>
            </div>
          
    
      

    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/jquery-1.11.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

<html lang="en">
<head>
	<title>Parking Management System | Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel= "icon" type= "image/png" href='static/images/icons/favicon.ico'>
    <link rel= "stylesheet" type= "text/css" href= "static/vendor/bootstrap/css/bootstrap.min.css">
    <link rel= "stylesheet" type= "text/css" href= "static/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel= "stylesheet" type= "text/css" href= "static/vendor/animate/animate.css">
    <link rel= "stylesheet" type= "text/css" href= "static/vendor/css-hamburgers/hamburgers.min.css">
    <link rel= "stylesheet" type= "text/css" href= "static/vendor/select2/select2.min.css">
    <link rel= "stylesheet" type= "text/css" href= "static/css/util.css">
    <link rel= "stylesheet" type= "text/css" href= "static/css/main.css">
    <link rel="stylesheet" href="static/css/bootstrap.min.css">

    

    <style>
        #logout{
            position: absolute;
            right: 2%;
            top:1%;
            cursor: pointer;
        }
        .dash{
           border-radius: 10px;
           height: 500px;
            background-color: white;
            padding: 10px;
        }
        
    </style>
</head>
    
    <script>

        function logout(){    
            open("logout","_self");
        }
        
        function choose(){
            open("choose","_self");   
        }
        function leave(){
            open("leave","_self");
        }
       
      
    </script>
    
    
<body class="container-login100">
	                           
	 
   <h5 id="logout" name="logout" onclick="logout()">Logout</h5>
		 
          
	<div class="container">
        <div class="row  justify-content-center" style="margin-top:10%">
            <div class="dash col-8 " >
                <h4 style="color:purple " class="text-center">Welcome User</h4>
<!--
                <form class="text-center" method="get" action="incdec">
                @csrf
-->
                <div class="row justify-content-center text-center" style="margin-top:100px;" >
                    
                    <?php
                        if($data['slot']!=0){
                            $ct=time();
                            $elapsed=round(($ct-$data['time'])/60,2);
                            echo '<div class="col-12">
                                <h4 style="text-center;color:purple">Chosen Slot : '.$data["slot"].' , Time Elapsed : '.$elapsed.' min</h4>
                                <h style="text-center">Refresh the page to update the elapsed time. </h7>
                            </div>';
                        }
                        else{
                            echo  '<div class="col-12">
                                <h4 style="text-center;color:purple">No Slots Chosen.</h4>
                            </div>';
                        }   
                    ?>
                    
                        <div class="col-5">
                            <div class="container-login100-form-btn">
                                <button onclick="choose()"  id="but" name="choose" class="login100-form-btn" <?php if($data['slot']!=0){echo 'disabled style="opacity:50%"';}?>>
                                    Choose Slot
                                </button>
                           </div>
                        </div>
                         <div class="col-5">
                             <div class="container-login100-form-btn">
                                <button  onclick="leave()" id="but" name="leave" class="login100-form-btn" <?php if($data['slot']==0){echo 'disabled style="opacity:50%"';}?>>
                                    Leave Slot
                                </button>
                           </div>
                        </div>
                </div>
<!--                </form>-->
                
                
                <div style="margin-top:50px;margin-left:50px;" class="row  justify-content-left">
                    <div class="col">
                      <ul>
                          <li>1. Check number of available slots from below.</li>
                          <li>2. Do check the rate . It chanegs as per the demand.</li>
                          <li>3. If slots are not avialble, wait for soem time.</li>
                        </ul>
                   </div>
                </div>
                
                
             <h6 style="position:absolute;left:2%;bottom:2%;color:green">Available Slots : <?php echo 10-$data['occupied'];?> | Rate : 20/30min</h6>
            </div>
        </div>
    </div>
	

	
    <script src="static/js/jquery-3.2.1.min.js"></script>
    <script src="static/js/bootstrap.bundle.min.js"></script>
     <script type = "text/javascript" src = "static/vendor/jquery/jquery-3.2.1.min.js" ></script>
     <script type = "text/javascript" src = "static/vendor/bootstrap/js/popper.js" ></script>
     <script type = "text/javascript" src = "static/vendor/bootstrap/js/bootstrap.min.js" ></script>
     <script type = "text/javascript" src = "static/vendor/select2/select2.min.js" ></script>
     <script type = "text/javascript" src = "static/vendor/tilt/tilt.jquery.min.js" ></script>
    <script type = "text/javascript" src = "static/js/main.js" ></script>
    <!--<script type="text/javascript" src="static/materialize/js/materialize.min.js"></script>-->
	<script >
		
        
	</script>

    
 

</body>
</html>
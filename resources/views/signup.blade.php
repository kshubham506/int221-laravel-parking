
<html lang="en">
<head>
	<title>Parking Management System | Login</title>
	<meta charsegt="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
    <link rel= "icon" type= "image/png" href='static/images/icons/favicon.ico'>
<!--===============================================================================================-->
    <link rel= "stylesheet" type= "text/css" href= "static/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel= "stylesheet" type= "text/css" href= "static/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel= "stylesheet" type= "text/css" href= "static/vendor/animate/animate.css">
<!--===============================================================================================-->	
    <link rel= "stylesheet" type= "text/css" href= "static/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel= "stylesheet" type= "text/css" href= "static/vendor/select2/select2.min.css">
<!--===============================================================================================-->
    <link rel= "stylesheet" type= "text/css" href= "static/css/util.css">
    <link rel= "stylesheet" type= "text/css" href= "static/css/main.css">
<!--===============================================================================================
    <link type="text/css" rel="stylesheet" href="static/materialize/css/materialize.min.css"  media="screen,projection"/>-->
   
    

    <style>
    
        #load{
                position: absolute;
                top:30%;
                left:50%;
                z-index: 1;
            }
    </style>
</head>
    
    <script>

        
        function gotologin(){
            open("/","_self");
        }
    </script>
    
    
<body>
	                           
	   <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100" style="margin-top:5%;margin-left:15%;">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="static/images/parking1.png" alt="IMG">
				</div>
               
				<div class="login100-form validate-form">
                
					<span class="login100-form-title">
						Signup
					</span>
                    <form method="post" action='submitsign'>
                   @csrf
                        <div class="wrap-input100 validate-input" data-validate = "Valid Email Required">
                            <input class="input100" type="email" id="uid" name="uid" placeholder="Email">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                        </div>



                        <div class="wrap-input100 validate-input" data-validate = "Password is required">
                            <input class="input100" type="password" id="pwd" name="pwd" placeholder="Password">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="container-login100-form-btn">
                            <button name="submit" type="submit" class="login100-form-btn">
                                Signup
                            </button>
                        </div>
                    </form>
                    
                    <div onclick="gotologin()" class="text-center p-t-5">
						Login<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
					</div>
                   
					<div class="text-center p-t-12">
						<span style="color:red" class="txt1" id="err">
                                @if(isset($data))
                                    {{$data}}    
                                @endif
                            
						</span>
						<!--<a class="txt2" href="#">
							Username / Password?
						</a>-->
					</div>
                             
					<div class="text-center p-t-136">
						<a style="cursor:pointer" id="foot" class="txt2" >
							INT221-Class Project
						
						</a>
					</div>
		      </div>
                    
			</div>
		</div>
	</div>
	
	

	

     <script type = "text/javascript" src = "static/vendor/jquery/jquery-3.2.1.min.js" ></script>
     <script type = "text/javascript" src = "static/vendor/bootstrap/js/popper.js" ></script>
     <script type = "text/javascript" src = "static/vendor/bootstrap/js/bootstrap.min.js" ></script>
     <script type = "text/javascript" src = "static/vendor/select2/select2.min.js" ></script>
     <script type = "text/javascript" src = "static/vendor/tilt/tilt.jquery.min.js" ></script>
    <script type = "text/javascript" src = "static/js/main.js" ></script>
    <!--<script type="text/javascript" src="static/materialize/js/materialize.min.js"></script>-->
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
        
       k=0;
        
	</script>

     <div id="load" style="display:none">
                <div class="preloader-wrapper big active" >
                <div class="spinner-layer ">
                  <div class="circle-clipper left">
                    <div class="circle"></div>
                  </div><div class="gap-patch">
                    <div class="circle"></div>
                  </div><div class="circle-clipper right">
                    <div class="circle"></div>
                  </div>
                </div>
              </div>
        </div>
    
 

</body>
</html>
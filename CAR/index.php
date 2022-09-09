<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Navbar Transparent to Solid on Scroll Example</title>
    <meta name="author" content="Codeconvey" />
    
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">
    
    <!--Only for demo purpose - no need to add.-->
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
	
</head>
<body>
		

<header class="ScriptHeader" style="margin-top: 80px">
    <div class="rt-container">
    	<div class="col-rt-12">
        	<div class="rt-heading">
            	<h1 style="color: #fff">Navbar Transparent to Solid on Scroll Example</h1>
                <p style="color: #fff">A responsive transparent navbar to solid on scroll down.</p>
                <p> <a style="display: inline-block; padding: 10px 20px; color: #fff; background: blue; border-radius: 10px" href="https://codeconvey.com/navbar-transparent-to-solid-on-scroll">Back to Tutorial</a></p>
            </div>
        </div>
    </div>
</header>

<section>
    <div class="rt-container">
          <div class="col-rt-12">
              <div class="Scriptcontent">
              
<!-- partial:index.partial.html -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<div class="navbar navbar-fixed-top container-fluid" id="navbar">
  	 <div class="navbar-header">
      <button type="button" class="navbar-toggle navbar-default" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand">Brand</a>
    </div>
    <div class="collapse navbar-right navbar-collapse" id="myNavbar">
    	<ul class="nav navbar-nav">
    		<li>Home</li>
    		<li>About</li>
    		<li>Contact</li>
    		<li>Login</li>
    		<li>Signup</li>
    	</ul>
    </div>
  </div>

<!-- partial -->
    		
           
    		</div>
		</div>
    </div>
</section>
     
<script>
    window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    
    document.getElementById("navbar").style.background = "#501e27";
  } else {
   
    document.getElementById("navbar").style.background = "none";
  }
}
</script>
    
    
   <!-- ANALYTICS -->

	</body>
</html>
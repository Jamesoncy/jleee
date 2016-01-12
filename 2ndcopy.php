<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width" />
	  
		  <link rel="icon" href="img/favicon.png" type="image" />
<link rel="shortcut icon" href="img/favicon.png" type="image" />

<title>Birth Cert/Marriage Con Upload</title>
     <link rel="stylesheet" href="user/css/components.css">
      <link rel="stylesheet" href="user/css/responsee.css">
      <link rel="stylesheet" href="user/owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="user/owl-carousel/owl.theme.css">
      <!-- CUSTOM STYLE -->  
      <link rel="stylesheet" href="user/css/template-style.css">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <script type="text/javascript" src="user/js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="user/js/jquery-ui.min.js"></script>    
      <script type="text/javascript" src="user/js/modernizr.js"></script>
      <script type="text/javascript" src="user/js/responsee.js"></script>   
<script type="text/javascript">
$.validator.setDefaults({
	//submitHandler: function() { alert("submitted!"); }
});

$().ready(function() {	
	// validate signup form on keyup and submit
	$("#signupForm").validate({			
		rules: {
			image: "required"
			},
		messages: {
			image: "Please Select Image First to Proceed"
		}
	});
});
</script>
<style type="text/css">
#signupForm { width: 670px; }
#signupForm label.error {
	width: auto;
	font-size:10PX;
	display:list-item;
	/*display: inline;*/
	color:#FF0000;
}
</style>
 </head>
   <body class="size-1140">
      <!-- TOP NAV WITH LOGO -->  
      <header>
         <nav>
            <div class="line">
               <div class="top-nav">              
                  <div class="logo hide-l">
                     <a href="index.php">JLEEM <br /><strong>REALTY</strong></a>
                  </div>                  
                  <p class="nav-text">MENU</p>
                  <div class="top-nav s-12 l-5">
                     <ul class="right top-ul chevron">
                        <li><a href="index.php">Home</a>
                        </li>
                        <li><a href="update.php">Location Map</a>
                        </li>
                        <li><a href="profile.php">Profile</a>
                        </li>
                     </ul>
                  </div>
                  <ul class="s-12 l-2">
                     <li class="logo hide-s">
                        <a href="index.php">JLEEM <br /><strong>REALTY</strong></a>
                     </li>
                  </ul>
                  <div class="top-nav s-12 l-5">
                     <ul class="top-ul chevron">
                        <li><a href="modelhouse.php">Model House</a>
                        </li>
                       
						<li><a href="loginuser.php">Customer Login</a>
                        </li>
                     </ul> 
                  </div>
               </div>
            </div>
         </nav>
      </header>
      <section>
         <!-- CAROUSEL -->  	
         <div id="carousel">
            <div id="owl-demo" class="owl-carousel owl-theme">
               <div class="item">
                  <img src="user/img/first.jpg" alt="">      
                  <div class="carousel-text">
                     <div class="line">
                        <div class="s-12 l-9">
                           <h2>Spend quality time with your family</h2>
                        </div>
                        <div class="s-12 l-9">
                           <p>Stay physically and spiritually fit as you jog on our tree lined joggin park and meditation park
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <img src="user/img/second.jpg" alt="">      
                  <div class="carousel-text">
                     <div class="line">
                        <div class="s-12 l-9">
                           <h2>Sleep soundly knowing that you and your family are safe</h2>
                        </div>
                        <div class="s-12 l-9">
                           <p>Enjoy the cool breeze of fresh air
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <img src="user/img/third.jpg" alt="">      
                  <div class="carousel-text">
                     <div class="line">
                        <div class="s-12 l-9">
                           <h2>Nurture your family as you celebrate life in a friendly neighborhood.</h2>
                        </div>
                        <div class="s-12 l-9">
                           <p>A sure investments that appreciates in time
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
		 
		 
<div class="content">

<div align="center">
<br />

	<form  action="save2ndcopy.php"method="post" enctype="multipart/form-data" id="signupForm">
		<input type="hidden" name="userid" value="<?php echo $_SESSION['id']; ?>" />
		<input type="hidden" name="email" value="<?php echo $_SESSION['email']; ?>" />
		<input type="hidden" name="buyer" value="<?php echo $_SESSION['name']; ?>" />
		<input type="hidden" name="date"  value="<?php echo date("D, M d, Y"); ?>"/>
<br />
<div align="center">
  <h8>First Page of Marriage Contract has been Successfully Uploaded
  <br />
  <br />
  Upload Second Page of Marriage Contract</h8>
</div><br />
File Name:
    <input type="file" name="image" id="image"> <br /><br />
	<input name="submit" type="submit" class="btn" value="Upload" />
	<a href="requirements.php">
	<input name="submit2" type="button" class="btn" value="Back" />
	</a>
	</form>
<br/><br/>
</div>
   <!-- FOOTER -->   
      <footer>
         <div class="line">
            <div class="s-12 l-6">
         
            </div>
            <div class="s-12 l-6">
            
            </div>
         </div>
      </footer>
      <script type="text/javascript" src="user/owl-carousel/owl.carousel.js"></script>   
      <script type="text/javascript">
         jQuery(document).ready(function($) {  
           $("#owl-demo").owlCarousel({
         	slideSpeed : 300,
         	autoPlay : true,
         	navigation : false,
         	pagination : false,
         	singleItem:true
           });
           $("#owl-demo2").owlCarousel({
         	slideSpeed : 300,
         	autoPlay : true,
         	navigation : false,
         	pagination : true,
         	singleItem:true
           });
         });	
          
      </script> 
   </body>
</html>
<?php session_start(); ?>
<?php
$phase=$_POST['phase'];
$block=$_POST['block'];
$lotno=$_POST['lotno'];
$subname=$_POST['subname'];
$lotarea=$_POST['lotarea'];
$price=$_POST['price'];

?><html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Reservation</title>
<link rel="icon" href="img/favicon.png" type="image" />
<link rel="shortcut icon" href="img/favicon.png" type="image" />
		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400|" rel="stylesheet" type="text/css">
		<link href="html/fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="html/style.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript" src="js/jquery.maskedinput-1.0.js"></script>
<script type="text/javascript"  src="js/ui.core.js"></script>
<script type="text/javascript"  src="js/ui.accordion.js"></script>

<script language="Javascript" type="text/javascript">
function DisplayLocation (locationPair) 
	{
	 var loc = locationPair.split('|');
  	//var payamount = document.getElementById('payamount').value; // (user input pay amount student pay for course)
	 document.getElementById('location').value = loc[1]; //(display course fee when item is selected)
	}
	
/*(A)*/
	function DisplayTerms (TermPair) 
	{
	 var terms = TermPair.split('|');
  	//var payamount = document.getElementById('payamount').value; // (user input pay amount student pay for course)
	 document.getElementById('term1').value = terms[1]; //(display course fee when item is selected)
	}


	function CalculateFee ()
	 {
	  var area = document.getElementById('area').value;//para sa inputfield nga area
	  var price = document.getElementById('price').value;//para sa inputfield nga price
	  //computation of costprice
	  var costprice = (area*1) * (price*1);//calculate price and area
	  document.getElementById('cost').value = costprice; //automatic display when calculate button is pressed
	  

	  var reqdownpayment=(costprice*1)*0.20;//calculate reqd downpayment
	  document.getElementById('reqdown').value = reqdownpayment; //automatic display when calculate button is pressed
	  
	  var balance=(costprice*1)-(reqdownpayment*1);//downpayment balance
	  document.getElementById('downbal').value = balance; //para sa downpayment balance
	  document.getElementById('amortbal1').value = balance; //para sa amortization balance
  
	  
	  
	  
	 var termss = document.getElementById('term1').value;//para kuhaon ang value sg terms of payment
	 var monthlyamortization=(costprice)/(termss/12);
	var result= Math.round(monthlyamortization)/100;
	 document.getElementById('amort').value=monthlyamortization;
	// var balance1 = document.getElementById('reqdown').value;//para sa inputfield nga price
	  //compute monthly amortization
	}
function result()
{
var phase=document.getElementById('phase').value;
var block=document.getElementById('block').value;
var lot=document.getElementById('lot').value;
$.ajax({
		type: "POST",
		data: ({phase: phase,block: block,lot: lot}),
		url:"result.php",
		success: function(response) {
		
		$(".result").html(response);
		
		
		}
		
		});

}



</script>




<script type="text/javascript">
$(document).ready(function(){

	$("#recordClientPhoneAlt").mask("(999) 999-9999");
	$("#bday").mask("99-99-9999");
	//$("#mobile").mask("9999999999999");	
	$("#tax").mask("999-999-999");	
	$("#sss").mask("99-9999999-9");	
	// add * to required field labels
	$('label.required').append('&nbsp;<strong>*</strong>&nbsp;');

	// accordion functions
	var accordion = $("#stepForm").accordion(); 
	var current = 0;
	
	$.validator.addMethod("pageRequired", function(value, element) {
		var $element = $(element)
		function match(index) {
			return current == index && $(element).parents("#sf" + (index + 1)).length;
		}
		if (match(0) || match(1) || match(2)) {
			return !this.optional(element);
		}
		return "dependency-mismatch";
	}, $.validator.messages.required)
	
	var v = $("#cmaForm").validate({
		errorClass: "warning",
		onkeyup: false,
		onblur: false,
		/*submitHandler: function() {
			alert("Submitted, thanks!");
		}*/
	});
	
	// back buttons do not need to run validation
	$("#sf2 .prevbutton").click(function(){
		accordion.accordion("activate", 0);
		current = 0;
	}); 
	$("#sf3 .prevbutton").click(function(){
		accordion.accordion("activate", 1);
		current = 1;
	}); 
	// these buttons all run the validation, overridden by specific targets above
	$(".open2").click(function() {
	  if (v.form()) {
	    accordion.accordion("activate", 2);
	    current = 2;
	  }
	});
	$(".open1").click(function() {
	  if (v.form()) {
	    accordion.accordion("activate", 1);
	    current = 1;
	  }
	});
	$(".open0").click(function() {
	  if (v.form()) {
	    accordion.accordion("activate", 0);
	    current = 0;
	  }
	});
 
});
</script>
<!--sa input that accept number only-->
<SCRIPT language=Javascript>
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      //-->
</SCRIPT></head>
   
   
   
   
   
   
   
   
   
   <?php 
//test for class
$user_id = 2;
$start_date = '2015-02-02';
$amortization = new Amortization();
$amortization->year_term = 30;
$amortization->annual_interest_percent = 7.0;
$amortization->sale_price =  "150000";
$amortization->down_payment = 15000;
$amortization->compute();


$step = 0;
//insert
$stmt = $conn->prepare('INSERT INTO amortization_data (user_id,year_term,annual_interest_percent,sale_price,down_payment,start_date) VALUES(?,?,?,?,?,?) ');
$stmt->execute(array($user_id,$amortization->year_term,$amortization->annual_interest_percent,$amortization->sale_price,$amortization->down_payment,$start_date));

//get last inserted id
$amortizationId = $conn->lastInsertId();

//get data
$stmt = $conn->prepare( 'SELECT * FROM amortization_data WHERE id = ?' );
$stmt->execute(array($amortizationId));
$rs = $stmt->fetch();
// var_dump($rs);
//sample
$stmt = $conn->prepare( 'SELECT * FROM amortization_data ' );
$stmt->execute();
while($rs = $stmt->fetch()){
	// var_dump($rs['user_id']);
}



?>
   
   
   
   
   
   
  
   
   
   
   


	<body>
		
		<div id="site-content">
			<div class="site-header">
				<div class="container">
					<a href="index.php" id="branding">
						<img src="html/images/logo.png" alt="" class="logo">
						<div class="logo-text">
							<h1 class="site-title">JLEEM Realty</h1>
							<small class="site-description">A Home is Where your Heart is</small>
						</div>
					</a> <!-- #branding -->

					<!-- Default snippet for navigation -->
					<div class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item "><a href="user_index.php">Home</a></li>
							<li class="menu-item"><a href="user_updates.php">Location Map</a></li>
							<li class="menu-item"><a href="user_modelhouses.php">Model Houses</a></li>
							<li class="menu-item"><a href="requirements.php">Requirements</a></li>
							<li class="menu-item current-menu-item"><a href="user_contactus.php">Contact</a></li>
							<li class="menu-item "><a href="userlogout.php">Logout</a></li>
						</ul> <!-- .menu -->
					</div> <!-- .main-navigation -->

<h1 class="top bottom">
<form name="cmaForm" id="cmaForm" method="post" action="save_admindirect.php">
<input type="hidden" name="recordRequestPrimaryServiceID" id="recordRequestPrimaryServiceID" value="100" />
<input type="hidden" name="recordClientServices" id="recordClientServices" value="1,3" />
<input type="hidden" name="date"  value="<?php echo date("M d, Y"); ?>"/>
<ul id="stepForm" class="ui-accordion-container">
	<li id="sf1"><a href='#' class="ui-accordion-link"> </a>
	<div>
	<fieldset><legend> Step 1 of 3 </legend>
	<h3 class="stepHeader">Subdivision Information </h3>
<table width="658" align="center">
	<tr>
	<td width="191" align="left">Name of Subdivision:</td>
	<td width="455" align="left"><input type="text" name="subname" id="subname" value="<?php echo $subname; ?>"  readonly=""/></td>
	</tr>
	<tr>
	<td align="left">Phase Number:</td>
	<td align="left"><input type="text" name="phase" id="phase" value="<?php echo $phase; ?>" readonly="" /></td>
	</tr>
	<tr>
	<td align="left">Block Number:</td>
	<td align="left"><input type="text" name="block" id="block" value="<?php echo $block; ?>" readonly="" /></td>
	</tr>
	<tr>
	<td align="left">Lot Number:</td>
	<td align="left"><input type="text" name="lotno" id="lotno" value="<?php echo $lotno; ?>" readonly="" /></td>
	</tr>
	<tr>
	<td align="left">Lot Area (sq.m.):</td>
	<td align="left"><input type="text" name="area" id="area" value="<?php echo $lotarea; ?>"  readonly=""/></td>
	</tr>
	<tr>
	<td align="left">Price (sq./m.):</td>
	<td align="left"><input type="text" name="price" id="price" value="<?php echo $price; ?>" readonly="" /></td>
	</tr>

	</table>
	<div class="buttonWrapper">
<input name="formNext1" type="button" class="open1 nextbutton" value="Next" alt="Next" title="Next" />
</div>
	</fieldset>
	</div>
	</li>
	<li id="sf2">
	<a href='#' class="ui-accordion-link">
	</a>
	<div>
	<fieldset><legend> Step 2 of 3 </legend>
	<h3 class="stepHeader">Personal Details </h3>
<table width="658" align="center">
	<tr>
	<td align="left" width="235">Name of Buyer:</td>
	<td width="411" align="left"><input name="buyer" id="buyer" class="inputclass pageRequired" title="Buyer Name is Required" maxlength="254" onblur="recordClientAddress1.value = this.value" style="text-transform:capitalize"/></td>
	</tr>
	<tr>
	<td align="left">Current Address:</td>
	<td align="left"><input name="address" id="address" class="inputclass pageRequired" title="Address is Required" maxlength="254" onblur="recordClientAddress1.value = this.value" style="text-transform:capitalize"/></td>
	</tr>	
	<tr>
	<td align="left">Marital Status:</td>
	<td align="left">	<select name="status" id="status" class="inputclass pageRequired" title="Select Marital Status" style="width:170px;">
      <option value="">-Select Status-</option>
      <option>Single</option>
      <option>Married</option>
    </select></td>
	</tr>	
	<tr>
	<td align="left">Spouse:</td>
	<td align="left">	<input name="spouse" id="spouse" class="inputclass" style="text-transform:capitalize"/></td>
	</tr>	
	<tr>
	<td align="left">Gender:</td>
	<td align="left">	<select name="gender" id="gender" class="inputclass pageRequired" title="Select Gender" style="width:170px;">
      <option value="">-Select Gender-</option>
      <option>Male</option>
      <option>Female</option>
    </select></td>
	</tr>
	<tr>
	<td align="left">Date of Birth(mm-dd-yyyy):</td>
	<td align="left">	<input name="bday" id="bday" class="inputclass pageRequired" title="Date of Birth is Required" maxlength="254" onblur="recordClientAddress1.value = this.value"  /></td>
	</tr>	
	<tr>
	<td align="left">Tax Identification  Number (TIN):</td>
	<td align="left"><input name="tax" id="tax" class="inputclass pageRequired" title="Tax Identification Number is Required" maxlength="254" onblur="recordClientAddress1.value = this.value" /></td>
	</tr>
	<tr>
	<td align="left">Social Security/Government Security Number:</td>
	<td align="left"><input name="sss" id="sss" class="inputclass pageRequired" title="Social Security/Government Security No. is Required" maxlength="254" onblur="recordClientAddress1.value = this.value" /></td>
	</tr>	
	<tr>
	<td align="left">Telephone/Mobile Number:</td>
	<td align="left"><input name="mobile" id="mobile" class="inputclass pageRequired" title="Contact No. is Required" maxlength="15" onblur="recordClientAddress1.value = this.value" onkeypress="return isNumberKey(event)" /></td>
	</tr>
<tr>
<td width="195" align="left"> Email Address:</td>
<td width="451" align="left"><input name="email" id="email" class="inputclass pageRequired email" maxlength="254" title="Email address is required" /></td>
</tr>
	</table>	
	<div class="buttonWrapper">
	  <input name="formBack0" type="button" class="open0 prevbutton" value="Back" alt="Back" title="Back" />
	  <input name="formNext2" type="button" class="open2 nextbutton" value="Next" alt="Next" title="Next" /></div>
	</fieldset>
	</div>
	</li>
	<li id="sf3">
	<a href='#' class="ui-accordion-link">
	</a>
	<div>
	<fieldset><legend> Step 3 of 3 </legend>
	<h3 class="stepHeader">Price and Mode Of Payment </h3>
	<br />
<table width="658" align="center">
<tr>
<td align="left">Terms of Payment</td>
	<td align="left"><input name="termss" id="term1" class="inputclass pageRequired" title="Terms of Payment" maxlength="254" method="get" /></td>
</td>
</tr>      <input type="hidden" name="term1" id="term1" />
<tr>
<td align="left"><label>Total Cost Price:</label></td>
<td align="left"><input type="text" name="costprice" id="cost" readonly="" /></td>
</tr>
<tr>
<td align="left"><label>Required Downpayment :</label></td>
<td align="left"><input name="discount"  id="reqdown" readonly="" /></td>
</tr>
<tr>
<td align="left"><label>Downpayment Balance :</label></td>
<td align="left"><input name="downbal" id="downbal" readonly="" /></td>
</tr>
<tr>
<td align="left"><label>Balance for Amortization: :</label></td>
<td align="left"><input name="amortbal" id="amortbal1" readonly=""/></td>
</tr>
<tr>
<td align="left"><label>Monthly Amortization :</label></td>
<td align="left"><input type="text" name="amort" id="amort"  readonly=""/></td>
</tr>
</table>	
    <div align="center">
      <input style="background-color:#6633FF; color:#FFFFFF; height:50px;" type="button" name="Button" value="Calculate Payment" onclick="CalculateFee()"  />
    </div>
    <div class="buttonWrapper">
	  <input name="formBack1" type="button" class="open1 prevbutton" value="Back" alt="Back" title="Back" />
	  <input name="submit" type="submit" id="submit" value="Submit" class="submitbutton" alt="Submit" title="Submit"></div>
	</fieldset>
	</div>
	</li>
</ul>
</form>

</div>

<br />
<div style="clear:both"></div>
</div>
<br />
<div style="clear:both"></div>

<div class="footer">

</div>
</div>
</body>
</html>

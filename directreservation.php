<?php 
session_start(); 
require_once("db_func.php");

if(!isAllowedToReserve($_SESSION['id'])){
	header("location: user_lotqoutation.php?lotid=".$_GET['lotid']."&status=0");
	exit();
}


$phase=$_POST['phase'];
$block=$_POST['block'];
$lotno=$_POST['lotno'];
$subname=$_POST['subname'];
$lotarea=$_POST['lotarea'];
$price=$_POST['price'];

?>




<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">	
		<title>Reservation</title>
		<link rel="icon" href="img/favicon.png" type="image" />
		<link rel="shortcut icon" href="img/favicon.png" type="image" />
		<!-- Loading third party fonts -->
		<!--link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400|" rel="stylesheet" type="text/css"-->
		<link href="html/fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="html/style.css">
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/jquery.validate.js"></script>
		<script type="text/javascript" src="js/jquery.maskedinput-1.0.js"></script>
		<script type="text/javascript"  src="js/ui.core.js"></script>
		<script type="text/javascript"  src="js/ui.accordion.js"></script>
		 <script src="senp-validate.js"></script>
		 
		<script type="text/javascript">
			$(document).ready(function(){
				
				//$('#step2').css('display','none');
				$('#step3').css('display','none');
				$('#comTableContainer').css('display','none');
				
				$('#step1_next').bind('click',function(event){
					$('#step1').css('display','none');
					$('#step3').css('display','');
				});
				
				// $('#step2_next').bind('click',function(event){
					// $('#step2').css('display','none');
					// $('#step3').css('display','');
				// });
				// $('#step2_back').bind('click',function(event){
					// $('#step2').css('display','none');
					// $('#step1').css('display','');
				// });
				$('#step3_back').bind('click',function(event){
					$('#step3').css('display','none');
					$('#step1').css('display','');
				});
				$('#viewTable').bind('click',function(event){
					$('#step3').css('display','none');
					$('#comTableContainer').css('display','');
				});
				$('.computation_back').bind('click',function(event){
					$('#step3').css('display','');
					$('#comTableContainer').css('display','none');
				});
				
				$('#saveButton').bind('click',function(event){
					var object = $('#cmaForm').serialize();
					$.ajax({ 
						data : object,
						url : './json_save_reserve.php',
						dataType : 'json',
						type : 'post',
						success : function(xretobj){
							window.location = "./reservationsuccess.php";
						}
					});
				});
				
				$('#calculateButton').bind('click',function(event){
					var object = $('#cmaForm').serialize();
					$.ajax({ 
						data : object,
						url : './json_amort_payment.php',
						dataType : 'json',
						type : 'post',
						success : function(xretobj){
							$('#cost').val(xretobj.cost);
							$('#total_amort').val(xretobj.total_amort);
							$('#month_payment').val(xretobj.month_payment);
							$('#month_payment_pmi').val(xretobj.month_payment_pmi);
							$('#amount_finance').val(xretobj.amount_finance);
							$('#try').html(xretobj.errs);
							$('#computationTable').html(xretobj.ComputationTable);
						}
						
					});
				});
			});
			
	
			</script>
			
			

</head>
	<body>
		<div id="site-content">
			<div class="site-header">
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
						<li class="menu-item current-menu-item"><a href="user_updates.php">Location Map</a></li>
						<li class="menu-item"><a href="user_modelhouses.php">Model Houses</a></li>
						<li class="menu-item"><a href="requirements.php">Requirements</a></li>
						<li class="menu-item"><a href="user_contactus.php">Contact</a></li>
						<li class="menu-item "><a href="userlogout.php">Logout</a></li>
					</ul> <!-- .menu -->
				</div> <!-- .main-navigation -->
			</div>
			<div class="container" >
				<h1 class="top bottom">
				<form name="cmaForm" id="cmaForm" method="post" action="save_admindirect.php">
					<input type="hidden" name="recordRequestPrimaryServiceID" id="recordRequestPrimaryServiceID" value="100" />
					<input type="hidden" name="recordClientServices" id="recordClientServices" value="1,3" />
					<input type="hidden" name="date"  value="<?php echo date("M d, Y"); ?>"/>

					<div id='step1'>
						<fieldset><legend> Step 1 of 2 </legend>
							<h3 class="stepHeader">Subdivision Information </h3>
							<table width="658" align="center">
								<tr>
									<td width="191" align="left">Name of Subdivision:</td>
									<td width="455" align="left"><input type="text" name="data[subname]" id="subname" value="<?php echo $subname; ?>"  readonly=""/></td>
								</tr>
								<tr>
									<td align="left">Phase Number:</td>
									<td align="left"><input type="text" name="data[phase]" id="phase" value="<?php echo $phase; ?>" readonly="" /></td>
								</tr>
								<tr>
									<td align="left">Block Number:</td>
									<td align="left"><input type="text" name="data[block]" id="block" value="<?php echo $block; ?>" readonly="" /></td>
								</tr>
								<tr>
									<td align="left">Lot Number:</td>
									<td align="left"><input type="text" name="data[lotno]" id="lotno" value="<?php echo $lotno; ?>" readonly="" /></td>
								</tr>
								<tr>
									<td align="left">Lot Area (sq.m.):</td>
									<td align="left"><input type="text" name="data[area]" id="area" value="<?php echo $lotarea; ?>"  readonly=""/></td>
								</tr>
								<tr>
									<td align="left">Price (sq./m.):</td>
									<td align="left"><input type="text" name="data[price]" id="price" value="<?php echo $price; ?>" readonly="" /></td>
								</tr>
							</table>
							<div class="buttonWrapper">
								<input type="button" id='step1_next' class="open1 nextbutton" value="Next" alt="Next" title="Next" />
							</div>
						</fieldset>
					</div>
					<!--div id='step2'>
						<fieldset><legend> Step 2 of 3 </legend>
						<h3 class="stepHeader">Personal Details </h3>
						<table width="658" align="center">
							<tr>
								<td align="left" width="235">Name of Buyer:</td>
								<td width="411" align="left"><input name="data[buyer]" id="buyer" class="inputclass pageRequired" title="Buyer Name is Required" maxlength="254" onblur="recordClientAddress1.value = this.value" style="text-transform:capitalize"/></td>
							</tr>
							<tr>
								<td align="left">Current Address:</td>
								<td align="left"><input name="data[address]" id="address" class="inputclass pageRequired" title="Address is Required" maxlength="254" onblur="recordClientAddress1.value = this.value" style="text-transform:capitalize"/></td>
							</tr>	
							<tr>
								<td align="left">Marital Status:</td>
								<td align="left">	<select name="data[status]" id="status" class="inputclass pageRequired" title="Select Marital Status" style="width:170px;">
								  <option value="">-Select Status-</option>
								  <option>Single</option>
								  <option>Married</option>
								</select></td>
							</tr>	
							<tr>
								<td align="left">Spouse:</td>
								<td align="left">	<input name="data[spouse]" id="spouse" class="inputclass" style="text-transform:capitalize"/></td>
							</tr>	
							<tr>
								<td align="left">Gender:</td>
								<td align="left">	<select name="data[gender]" id="gender" class="inputclass pageRequired" title="Select Gender" style="width:170px;">
								  <option value="">-Select Gender-</option>
								  <option>Male</option>
								  <option>Female</option>
								</select></td>
							</tr>
							<tr>
								<td align="left">Date of Birth(mm-dd-yyyy):</td>
								<td align="left">	<input name="data[bday]" id="bday" class="inputclass pageRequired" title="Date of Birth is Required" maxlength="254" onblur="recordClientAddress1.value = this.value"  /></td>
							</tr>	
							<tr>
								<td align="left">Tax Identification  Number (TIN):</td>
								<td align="left"><input name="data[tax]" id="tax" class="inputclass pageRequired" title="Tax Identification Number is Required" maxlength="254" onblur="recordClientAddress1.value = this.value" /></td>
							</tr>
							<tr>
								<td align="left">Social Security/Government Security Number:</td>
								<td align="left"><input name="data[sss]" id="sss" class="inputclass pageRequired" title="Social Security/Government Security No. is Required" maxlength="254" onblur="recordClientAddress1.value = this.value" /></td>
							</tr>	
							<tr>
								<td align="left">Telephone/Mobile Number:</td>
								<td align="left"><input name="data[mobile]" id="mobile" class="inputclass pageRequired" title="Contact No. is Required" maxlength="15" onblur="recordClientAddress1.value = this.value" onkeypress="return isNumberKey(event)" /></td>
							</tr>
							<tr>
								<td width="195" align="left"> Email Address:</td>
								<td width="451" align="left"><input name="data[email]" id="email" class="inputclass pageRequired email" maxlength="254" title="Email address is required" /></td>
							</tr>
						</table>	
						<div class="buttonWrapper">
						  <input type="button" class="open0 prevbutton" id='step2_back' value="Back" alt="Back" title="Back" />
						  <input type="button" class="open2 nextbutton" id='step2_next' value="Next" alt="Next" title="Next" /></div>
						</fieldset>
					</div-->
					
					
					
					<div id='step3'>
						<fieldset><legend> Step 2 of 2 </legend>
						<h3 class="stepHeader">Price and Mode Of Payment </h3>
						<br />
						<table width="658" align="center">
							<tr>
								<td align="left">Terms of Payment (Years): <br><h6><font color="red">(Maximum year is 30)</h6></font></td>
								<td align="left"><input name="data[terms]" id="term1" class="inputclass pageRequired" title="How long will you pay in year?" method="get" /></td>
								
							</tr>
							<tr>
								<td align="left"><label>Down Payment: <br><h6><font color="red">(Below 1000 cannot be accepted)</h6></font></label></td>
								<td align="left"><input type="text" name="data[downpayment]" id="downpayment"  /></td>
							</tr>
							
							<tr>
								<td align="left"><label>Start date:(DD/MM/YYYY)</label></td>
								<td align="left"><input type="input" name="data[start_date]" id="start_date" title="When will you like to start your amortization?"   /></td>
							</tr>
							<tr>
								<td colspan='2' style='text-align:center;padding:20px'>
									<label id='try'> 
									 <input style="background-color:#6633FF; color:#FFFFFF; height:50px;" type="button" name="Button" value="Calculate Payment" id='calculateButton'  />
								 <label id='try'> </label>
								</td>
							</tr>
							<tr>
								<td align="left"><label>Total Cost Price:</label></td>
								<td align="left"><input type="text" name="data[costprice]" id="cost" readonly="" /></td>
							</tr>
							<tr>
								<td align="left"><label>Amount Financed : </label></td>
								<td align="left"><input name="data[amount_finance]"  id="amount_finance" readonly="" /></td>
							</tr>
							<tr>
								<td align="left"><label>Monthly Payment :</label></td>
								<td align="left"><input name="data[month_payment]" id="month_payment" readonly="" /></td>
							</tr>
							<tr>
								<td align="left"><label>Monthly Payment:  (with pmi)</label></td>
								<td align="left"><input name="data[month_payment_pmi]" id="month_payment_pmi" readonly=""/></td>
							</tr>
							<tr>
								<td align="left"><label>TOTAL Monthly Payment :</label></td>
								<td align="left"><input type="text" name="data[total_amort]" id="total_amort"  readonly=""/></td>
							</tr>
							<tr>
								<td align="left"><input type='button'  value='Computation Table' id='viewTable'/></td>
								
							</tr>
						</table>	
						
						
						
						
						<div class="buttonWrapper">
						  <input type="button" class="open1 prevbutton" id='step3_back' value="Back" alt="Back" title="Back" />
						  <input type="button" id="saveButton" value="Submit" class="submitbutton" alt="Submit" title="Submit"></div>
						</fieldset>
					</div>
					<div id='comTableContainer'>
						<input type='button' class='computation_back' value='back' />
						<div id='computationTable'>
							
						</div>
						<input type='button' class='computation_back' value='back' />
					</div>
				</form>
			</div>
			<br />
			<div style="clear:both"></div>
			<br />
			<div style="clear:both"></div>

			<div class="footer">

			</div>
		</div>
</body>
</html
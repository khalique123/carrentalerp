
request sesion 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Contact Us - Easy Rent a Car </title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
   <link rel="stylesheet" href="css/bjqs.css" type="text/css">
<link href="http://designers.hubspot.com/hs-fs/hub/327485/file-2054199286-css/font-awesome.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<link type="text/css" href="themes/base/ui.all.css" rel="stylesheet" />
  	
<script type="text/javascript" src="ui/ui.core.js"></script>
<script type="text/javascript" src="ui/ui.datepicker.js"></script>
<link type="text/css" href="css/demos.css" rel="stylesheet" />
  
  <script language="javascript">

 window.onload = function() {
		var frm = document.getElementById("makepaym");
		frm.onsubmit = function() {
			document.getElementById("confb").disabled = true;
			document.getElementById("confb").value = "Please Wait";
			
		}
	}
 </script>
  
</head>

<body onload="myFunction()">
<div class="main_container">
<div class="container">
<div class="container-fluid">
<!--header--->

<script type="text/javascript">

function submitform(lng)
{
	//alert(lng);
var v;
if(lng==1) {v="en";}
if(lng==2) {v="es";}
if(lng==3) {v="fr";}
if(lng==4) {v="nl";}
if(lng==5) {v="0";}


 document.myform.l.value = v;
document.myform.submit();
}


</script>
<style>
.head_comp {
   color: #fff;
    float: left;
	font-family: "Open Sans",sans-serif;
    font-size: 35px;
    font-weight: bold; 
}
</style>
<body>
<div class="main_container">
<div class="container">
<div class="container-fluid">
<!--header--->
<div class="row top_container">
<div class="nav navbar-default" roll="navigation">

<div class="navbar-header">
<button data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
<div class="navbar-brand"><img src="images/erpo_logo.png" alt="" height="120"/></div>
<div class="head_comp">Easy Rent a Car</div>
</div>

<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 pull-right clearfix">
 
 

<div class="head_right_part">
	<div class="head_right_part_section j_rcolumn">
    	<div>
    			
					<div class="head_select_lang_txt">Select Language</div>
                    <div class="head_top_rght">
                    <form name="myform" action="index.php" method="POST" class="lang_top_form">
					<a title = "English" href="javascript: submitform(1)" class="flg en"></a>&nbsp;<a title = "Spanish" href="javascript: submitform(2)" class="flg es"></a>&nbsp;<a title = "French" href="javascript: submitform(3)" class="flg fr"></a>&nbsp;<a title = "Dutch" href="javascript: submitform(4)" class="flg nl"></a>&nbsp;                    	<input type="hidden" name="l" value="en" />
    				</form>
						<div style="clear:both;"></div>
						
                    </div>
                    
                            	<div style="clear:both;"></div>
            
        </div>
        
	<div>	
	  
    	<div class="head_ph_num">1-305-675-2179 </div>
    	<div class="head_ph_icon">
    	
   		</div> 
        <div class="jsales"><a href="">info@easyrentpro.com </a></div>
    </div>
	<div style="clear:both;"></div>
    </div>
</div>
</div>
<div id="navbar" class="navbar-collapse collapse col-sm-10"> 

<ul class="nav navbar-nav  pull-left" style="nowrap" >
    <li  ><a href="index.php"><span style="font-size: 80%">Home</span></a></li>
    <li ><a href="fleet.php"><span style="font-size: 80%">Fleet</span></a></li>
    <li ><a href="location.php"><span style="font-size: 80%">Locations</span></a></li>
    <li ><a href="reservations.php"><span style="font-size: 80%">Reservations</span></a></li>
 
	<li  id="care_icon"><a href="contact_us.php"><span style="font-size: 80%">Contact Us</span></a></li>
</ul>
</div>
</div>
</div>
<!--header--->
</div>
</div>
<br />
<form  action="confirm.php?action=booking" id="makepaym"  method="post">
  <!--contact start--->
 <div class="container">
 <div class="container-fluid">
  
  <div class="j-Economy">
 					<div class="cf_driver">Payment Details</div>
 					<div class="j_ebottom clearfix">
 
 <div class="row">
 <div class="col-lg-12">
 <div class="verify_header">
 <span>Rental Information</span>
 </div>
 
 <div class="verify-inform">
  <span>Pick-up Location :</span>
  Main Office</div>
<div class="verify-inform">
  <span>Date & Time :</span>
  Thu, Mar 09, 2017 @ 12:00 PM</div>
<br>
<div class="verify-inform">
  <span>Return Location :</span>
  Main Office</div>
<div class="verify-inform">
  <span>Date & Time :</span>
  Fri, Mar 10, 2017 @ 12:00 PM</div>
<br>
<div class="verify_header">
 <span>Your Vehicle</span>
 </div>
 
 <div class="verify-inform">
  <span>Car Class :</span>
  Compact</div>
<div class="verify-inform">
  <span>Rate Details :</span>
  SRD 40.00 
</div>
<div class="verify-inform">
  <span>Total Amount :</span>
 SRD 40.00 For 1 Day (s)</div>
<br>
<div class="verify_header"><span>Driver Details</span></div>
 
 <div class="verify-inform"><span>First Name :</span>mohammed</div>
 <div class="verify-inform"><span>Last Name :</span>khalique</div>
 <div class="verify-inform"><span>Address :</span>asdjfl</div>
 <div class="verify-inform"><span>Address2 :</span></div>
 <div class="verify-inform"><span>State / County :</span>telangana</div>
 <div class="verify-inform"><span>City :</span>hyderabad</div>
 <div class="verify-inform"><span>Postal / Zip Code :</span>156656</div>
 <div class="verify-inform"><span>Country :</span>India</div>

  <br>

 <div class="verify_header"><span>Protection/Coverages</span></div>
 		<input type="hidden" name="proid[]" value="3" />
		<input type="hidden" name="proname[]" value="Surcharges" />
		<input type="hidden" name="proqty[]" value="0" />
		<input type="hidden" name="proval[]" value="4.8" />
		
         <div class="verify-inform"><span>Surcharges :</span>SRD 4.80</div>  <br>
 <div class="verify_header"><span>Included Tax & Charges</span></div>
 		<input type="hidden" name="taxid[]" value="4" />
		<input type="hidden" name="taxname[]" value="Insurance" />
		<input type="hidden" name="taxqty[]" value="0" />
		<input type="hidden" name="taxval[]" value="1" />
		
         <div class="verify-inform"><span>Insurance :</span>SRD 1.00</div>		<input type="hidden" name="taxid[]" value="2" />
		<input type="hidden" name="taxname[]" value="Tax" />
		<input type="hidden" name="taxqty[]" value="0" />
		<input type="hidden" name="taxval[]" value="0.916" />
		
         <div class="verify-inform"><span>Tax :</span>SRD 0.92</div>  <br>
<div class="verify_header"><span>lan_tr_billing_details</span></div>
  <div class="verify-inform"><span>Total Amount :</span>SRD 46.72</div>
<hr class="cf_bot-bot" />
 <div class="verify-inform">By clicking confirm you are confirming your booking and agreeing for your card to be debited with the amount due. All transactions are conducted over our secure server.</div>
 <br>
 <div class="verify-inform">Please note that it may take a few moments to process your reservation. Please don't attempt to re-submit your request while this operation is in progress.</div>
 <hr class="cf_bot-bot" />



	
	<input type="hidden" name="btotal" id="btotal" value="41.82" />
					<input type="hidden" name="cr_amt" id="cr_amt" value="" />
					<input type="hidden" name="estimated_amt" id="estimated_amt" value="46.716" />
					<input type="hidden" name="fname" id="fname" value="mohammed" />
					<input type="hidden" name="lname" id="lname" value="khalique" />
					  <input type="hidden" name="card_type" id="card_type" value="" />
					    <input type="hidden" name="nameoncard" id="nameoncard" value="" />
					   <input type="hidden" name="card" id="card" value="" />
					    <input type="hidden" name="ccexpmonth" id="ccexpmonth" value="" />
						 <input type="hidden" name="year" id="year" value="" />
						  <input type="hidden" name="cvv" id="cvv" value="" />
						   <input type="hidden" name="address" id="address" value="asdjfl" />
						    <input type="hidden" name="city" id="city" value="hyderabad" />
							 <input type="hidden" name="zip" id="zip" value="156656" />
							  <input type="hidden" name="state" id="state" value="telangana" />
							   <input type="hidden" name="country" id="country" value="99" />
							   <input type="hidden" name="country_iso" id="country_iso" value="IN" />
							    <input type="hidden" name="boptotal" id="boptotal" value="" />
                                <input type="hidden" name="bextotal" id="bextotal" value="4.8" />
                                <input type="hidden" name="btxtotal" id="btxtotal" value="1.916" />
                                <input type="hidden" name="bperdaycost" id="bperdaycost" value="40" />
                                <input type="hidden" name="basecost" id="basecost" value="40" />
								 <input type="hidden" name="driverage" id="driverage" value="58" />
								  <input type="hidden" name="phone" id="phone" value="123546846" />
								   <input type="hidden" name="email" id="email" value="test@test.com" />
								    <input type="hidden" name="reemail" id="reemail" value="test@test.com" />
								    <input type="hidden" name="flightno" id="flightno" value="" />
									<input type="hidden" name="code_red" id="code_red" value="" />   
									<input type="hidden" name="book_days" id="book_days" value="1" />
								<input type="hidden" name="ccy" id="ccy" value="SRD" />
 <div class="verify-button"><input style="align="center" type="submit" class="button" id="confb" value="Confirm Booking"  /></div>
<br>	
 </form>
<form  action="confirm.php"  method="post">

  <input type="hidden" name="btotal" id="btotal" value="41.82" />
  <input type="hidden" name="cr_amt" id="cr_amt" value="" />
					<input type="hidden" name="fname" id="fname" value="mohammed" />
					<input type="hidden" name="lname" id="lname" value="khalique" />
					  <input type="hidden" name="card_type" id="card_type" value="" />
					   <input type="hidden" name="nameoncard" id="nameoncard" value="" />
					   <input type="hidden" name="card" id="card" value="" />
					    <input type="hidden" name="ccexpmonth" id="ccexpmonth" value="" />
						 <input type="hidden" name="year" id="year" value="" />
						  <input type="hidden" name="cvv" id="cvv" value="" />
						   <input type="hidden" name="address" id="address" value="asdjfl" />
						    <input type="hidden" name="address2" id="address2" value="" />
						    <input type="hidden" name="city" id="city" value="hyderabad" />
							 <input type="hidden" name="zip" id="zip" value="156656" />
							  <input type="hidden" name="state" id="state" value="telangana" />
							   <input type="hidden" name="country" id="country" value="99" />
							   <input type="hidden" name="code_red" id="code_red" value="" />   
							    <input type="hidden" name="boptotal" id="boptotal" value="0" />
                                <input type="hidden" name="bextotal" id="bextotal" value="0" />
                                <input type="hidden" name="btxtotal" id="btxtotal" value="1.82" />
                                <input type="hidden" name="bperdaycost" id="bperdaycost" value="40" />
                                <input type="hidden" name="basecost" id="basecost" value="40" />
								 <input type="hidden" name="driverage" id="driverage" value="58" />
								  <input type="hidden" name="phone" id="phone" value="123546846" />
								   <input type="hidden" name="email" id="email" value="test@test.com" />
								    <input type="hidden" name="reemail" id="reemail" value="test@test.com" />
								    <input type="hidden" name="flightno" id="flightno" value="" />
									 <input type="hidden" name="action" id="action" value="back" />
									

 <div class="verify-button"><input style="align="center"  type="submit"  border="0" id="submit" name="submit" value="Back" /></div>
  
                  
            
  	</form> 
 
 </div>
 </div>
 </div>
 </div>
 </div>
 </div>
 
  <!--contact end--->
   <!--footer start--->
<div class="container">
<div class="container-fluid">
<div class="row">
<div style="align:center;" class="jsocial_box">
<div style="width:15%; align:center" class="jsocial_icon clearfix">
<div class="jsocial_icon-b pull-left"><a href="http://www.facebook.com/easyrentprosoftware" target="_blank"><img src="images/fac.png" alt="" /></a></div><div class="jsocial_icon-b pull-left"><a href="http://twitter.com" target="_blank"><img src="images/twitter.png" alt="" /></a></div><div class="jsocial_icon-b pull-left"><a href="http://linkedin.com" target="_blank"><img src="images/linkedin.png" alt="" /></a></div></div>
</div>
<div style="text-align:center" class="bot_menu">
 <a href="index.php">Home</a>  |  
 <a href="fleet.php">Fleet</a>  |  
 <a href="location.php">Locations</a>  |  
 <a href="reservations.php">Reservations</a>  |  
  
 <a href="about_us.php">About us</a>  |  
 <a href="terms_condition.php">Terms and Conditions</a>
</div>
<div class="jbot_box">All Rights Reserved &#169 2017 Easy Rent a Car. Powered By:<a href="http://www.easyrentpro.com" target="_blank">Easy Rent Pro Software</a></div>
<div class="jbot_box">Any unauthorized reproduction or distribution of the contents of this website is a violation of copyright law and may result in severe civil and criminal penalties</div>
<br />
<br />
</div>
</div>
</div>
<!--footer end--->
</div>
</body>

</html>

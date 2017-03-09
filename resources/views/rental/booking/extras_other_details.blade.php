
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Confirm2 </title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
   <link rel="stylesheet" href="css/bjqs.css" type="text/css">
<link href="http://designers.hubspot.com/hs-fs/hub/327485/file-2054199286-css/font-awesome.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<link type="text/css" href="themes/base/ui.all.css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery-1.3.2.js"></script>
<script type="text/javascript" src="ui/ui.core.js"></script>
<script type="text/javascript" src="ui/ui.datepicker.js"></script>
<link type="text/css" href="css/demos.css" rel="stylesheet" />

<script type="text/javascript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
  function pic_pop()
  {

        myWindow = window.open("terms_condition.php", "tinyWindow", 'toolbar,width=800,height=600,left=100,top=100,scrollbars=yes')
        myWindow.document.close();

  }
  
 

</script>
<script type="text/JavaScript" src="script.js"></script>
<script>
                    function take_data()
                    {
					
  						
                        var str="";if(document.getElementById("chk~1").checked==true)
                        {
                            str=str+"&arropp[]="+document.getElementById("chk~1").value;
                            str=str+"&sel~1="+document.getElementById("sel~1").value;
                        }

                        if(document.getElementById("chk~2").checked==true)
                        {
                            str=str+"&arropp[]="+document.getElementById("chk~2").value;
                            str=str+"&sel~2="+document.getElementById("sel~2").value;
                        }

                        if(document.getElementById("chk~3").checked==true)
                        {
                            str=str+"&arropp[]="+document.getElementById("chk~3").value;
                            str=str+"&sel~3="+document.getElementById("sel~3").value;
                        }

                        if(document.getElementById("chk2~3").checked==true)
                        {
                            str=str+"&arrtax[]="+document.getElementById("chk2~3").value;

                        }

                        if(document.getElementById("chk2~5").checked==true)
                        {
                            str=str+"&arrtax[]="+document.getElementById("chk2~5").value;

                        }

                        if(document.getElementById("chk2~6").checked==true)
                        {
                            str=str+"&arrtax[]="+document.getElementById("chk2~6").value;

                        }

                        if(document.getElementById("chk2~7").checked==true)
                        {
                            str=str+"&arrtax[]="+document.getElementById("chk2~7").value;

                        }

                        if( document.bk.code_red.value !="")
                        {
                            str=str+"&coup_c="+document.getElementById("coupon_code").value;

                        }

                        confirm_panel(str);


      }
                    </script>
<script type="text/javascript">	

$(document).ready(function(){
		$('.dropdown-menu').each(function(){
			var length = $(this).find('li').length;
			if(length >3){
				$(this).css('height','200px');
				//alert('1');
			}
			else{
				$(this).css('height','50px');
				//alert($(this).parent.html());
				//alert('2');
			}
		});
		/*$('.navbar-toggle').click(function(){
			$('#navbar').slideToggle();
		});
		
		$('.dropdown-toggle').click(function(){
			$(this).parent().find('.dropdown-menu').slideToggle();
		});*/
		
		
		$('.driver_country_drop li').click(function(){
			var title = $(this).find('a').html();
			var val = $(this).find('div').html();
			//alert(title+' '+val);
			$('#driver_country_drop_span').html(title);
			//$(this).parent().slideUp();
			$('#country').val(val);
		});
		
		
		$('#driver_country_drop_span').html($("#country option:selected").text());
		//alert($("#country option:selected").text());
		
		
	});


function setfval()
{

document.bk.fname2.value=document.cn.fname.value;
document.bk.lname2.value=document.cn.lname.value;

document.bk.phone2.value=document.cn.phone.value;
document.bk.email2.value=document.cn.email.value;
document.bk.reemail2.value=document.cn.reemail.value;
document.bk.address2.value=document.cn.address.value;
document.bk.address22.value=document.cn.address2.value;

document.bk.state2.value=document.cn.state.value;
document.bk.city2.value=document.cn.city.value;
document.bk.zip2.value=document.cn.zip.value;
document.bk.flightno2.value=document.cn.flightno.value;
document.bk.card2.value=document.cn.card.value;
document.bk.card_type2.value=document.cn.card_type.value;
document.bk.nameoncard2.value=document.cn.nameoncard.value;
document.bk.ccexpmonth2.value=document.cn.ccexpmonth.value;
document.bk.cvv2.value=document.cn.cvv.value;
document.bk.year2.value=document.cn.year.value;

 if(document.bk.code_red.value !="")
  {document.cn.code_red2.value=document.bk.code_red.value;}

}	
	  function checkcoupon()
{
    var coupon_code = $('#coupon_code').attr('value');
if (coupon_code == "")
	 alert('Enter a valid Discount Coupon Code!'); 
	 else
	 {
	 if(document.getElementById("redeem").value =="Revoke")
	 {
	 document.getElementById("redeem").value="Redeem";
	  document.getElementById("coupon_code").value="";
	  document.bk.code_red.value="";
	  document.getElementById("verimg").style.visibility="hidden";
	   take_data();
	 }
	else
{	
 	
	$.ajax({
      url: "check_coupon.php?coupon_code="+coupon_code+"&start_date=2017-03-09&end_date=2017-03-10&tot_days=1",
	  type: "POST", 
	   success: function(data) {
	    var cur_str= data;
	 
        if(data == false)
		  {  
		  document.getElementById("verimg").style.visibility="hidden"; 
          document.bk.code_red.value="";		  
          alert('Discount Coupon Code is invalid!'); // User not Exist!
		  }
		  else
		  { 
		  document.getElementById("verimg").style.visibility="visible"; 
		   document.getElementById("redeem").value="Revoke";
		   document.bk.code_red.value=document.getElementById("coupon_code").value;
		   take_data();
		  }
      } 
    });
		return false;}}
}
</script>	

</head>

<body >
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
    
 <li ><a href="page1.php"><span style="font-size: 80%">Custom Page</span></a></li>
 
  
	<li  id="care_icon"><a href="contact_us.php"><span style="font-size: 80%">Contact Us</span></a></li>
</ul>
</div>
</div>
</div>
<!--header--->
</div>
</div>
<br />
 <!--confirm start--->
 <div class="container">
 <div class="container-fluid">
 <div class="row steps_container_main">
 <div class="col-lg-4 col-xs-4">
 <div class="j_topbox">
 <img src="images/search_arrow.png" alt="" />
 <span>Search</span>
 </div>
 </div>
  <div class="col-lg-4 col-xs-4">
   <div class="j_topbox">
  <img src="images/select_arrow.png" alt="" />
  <span>Select</span>
  </div>
  </div>
   <div class="col-lg-4 col-xs-4">
    <div class="j_topbox">
  <img src="images/book_arrow.png" alt="" />
  <span>Book</span>
  </div>
   </div>
 </div>
 <form style="margin:0px;" name="bk" id="bk" action="book.php" method="post">
            <input type="hidden" name="datepicker" value="03/09/2017" />
            <input type="hidden" name="ph" value="12.00" />
            <input type="hidden" name="datepicker2" value="03/10/2017" />
            <input type="hidden" name="rh" value="12.00" />
            <input type="hidden" name="action" value="available" />
            <input type="hidden" name="pl" value="3" />
            <input type="hidden" name="rl" value="3" />
            <input type="hidden" name="da" value="26" />
            <input type="hidden" name="country" value="99" />
            <input type="hidden" name="carstatus" value="1" />
			<input type="hidden" name="code_red" id="code_red" value="" />   
			<input type="hidden" name="fname2" id="fname2" value="" />
			<input type="hidden" name="lname2" id="lname2" value="" />
			  <input type="hidden" name="card_type2" id="card_type2" value="" />
			   <input type="hidden" name="nameoncard2" id="nameoncard2" value="" />
			   <input type="hidden" name="card2" id="card2" value="" />
				<input type="hidden" name="ccexpmonth2" id="ccexpmonth2" value="" />
				 <input type="hidden" name="year2" id="year2" value="" />
				  <input type="hidden" name="cvv2" id="cvv2" value="" />
				   <input type="hidden" name="address2" id="address2" value="" />
					<input type="hidden" name="address22" id="address22" value="" />
					<input type="hidden" name="city2" id="city2" value="" />
					 <input type="hidden" name="zip2" id="zip2" value="" />
					  <input type="hidden" name="state2" id="state2" value="" />
						<input type="hidden" name="driverage2" id="driverage2" value="" />
						  <input type="hidden" name="phone2" id="phone2" value="" />
						   <input type="hidden" name="email2" id="email2" value="" />
							 <input type="hidden" name="reemail2" id="reemail2" value="" />
							<input type="hidden" name="flightno2" id="flightno2" value="" />
									 
</form>
 <div class="row">
 <div class="col-lg-4 col-sm-5" >
 <div class="bsummary_box clearfix">
 <div class="bs_top">Rental Information</div>
 <div class="cf_bettom clearfix">
 <div class="cf_header">Pick-Up Information </div>
 <div class="j_pu-inform">
  <span>Location</span>
  Main Office</div>
<div class="j_pu-inform">
  <span>Date & Time</span>
  Thu, Mar 09, 2017 @ 12:00 PM</div>
<hr class="cf_border" />
 <div class="cf_header">Return Information</div>
 <div class="j_pu-inform">
  <span>Location</span>
  Main Office</div>
<div class="j_pu-inform">
  <span>Date & Time</span>
 Fri, Mar 10, 2017 @ 12:00 PM</div>
<br />
 </div>
 </div>
 
 <!-- Your Car Start -->


	<div class="bsummary_box clearfix">
 <div class="bs_top">Your Vehicle</div>
 <div class="cf_bettom clearfix">
 <div class="cf-veh_header">
 <span>Car Class</span>
   	Compact
 </div>
  <div class="cf-veh_botom">
  <img src="car_image/thumb/4.jpg" width="232" height="154" alt="" />
  </div>
  <div class="cf-veh_text">
  <div class="cf_text_head">SRD 40.00 per day</div>
  <div class="cf_vicon clearfix">
  <a href="javascript:void(0);"><img src="images/castomer.png" width="35" height="36" title="Passenger Quantity" alt="Passenger Quantity" /></a>
  <a href="javascript:void(0);"><img src="images/bag.png" width="35" title="Baggage Quantity" alt="Baggage Quantity" height="36" alt="" /></a>
  <a href="javascript:void(0);"><img src="images/door.png" width="35" title="Doors" alt="Doors" height="36" alt="" /></a><a href="javascript:void(0);"><img src="images/ac.png" alt="Air Conditioning" title="Air Conditioning" width="35" height="36" /></a><a href="javascript:void(0);"><img src="images/jupdate.png" alt="Automatic Transmission" title="Automatic Transmission" width="35" height="36" /></a>
 
  </div>
  <div class="cf_text_mult"><div class="vehicle_btm_txt">x 5</div><div class="vehicle_btm_txt">x 2</div><div class="vehicle_btm_txt">x 4</div></div>
  </div>
 </div>
 </div>

<!-- Your Car End -->  
 

 <div class="bsummary_box clearfix" id="amt_calc">
  
  
 <div class="bs_top">Estimated Total</div>
 
  <div class="cf_bettom clearfix">
   
    <div>
	    <div class="et_left_block">
		    <div class="et_left_txt1">Base Rate => 1 Day (s)		    <span class="et_left_txt2"></span>
		    </div>
	    </div>
	    <div class="et_right_block">
		    <span class="et_left_txt3">SRD 40.00 </span>
		    
	    </div>
	    <div style="clear: both;"></div>
    </div>
    			    
			    <div>
				<div class="et_left_block">
					<div class="et_left_txt1">Insurance 					
					
			    
								  (2.50%)				    <span class="et_left_txt2"></span>
				    </div>
				    </div>
				    <div class="et_right_block">
					    <span class="et_left_txt3">SRD 1.00 </span>
					    
				    </div>
				   <div style="clear: both;"></div>
			      </div>
			    
                            			    
			    <div>
				<div class="et_left_block">
					<div class="et_left_txt1">Tax 					
					
			    
								  (2.00%)				    <span class="et_left_txt2"></span>
				    </div>
				    </div>
				    <div class="et_right_block">
					    <span class="et_left_txt3">SRD 0.82 </span>
					    
				    </div>
				   <div style="clear: both;"></div>
			      </div>
			    
                                                    
                        				 	    
	    
		<hr class="cf_bot-bot" />
	    <div>
	      <div class="et_left_block">
		      <div class="et_left_txt1" style="color: #FFFF00">Estimated Total		      <span class="et_left_txt2"></span>
		      </div>
	      </div>
	      <div class="et_right_block">
		      <span class="et_left_txt3" style="color: #FFFF00">SRD 41.82 </span>
		      
	      </div>
	      <div style="clear: both;"></div>
	    </div>
	    <div>
	      <div class="et_left_block">
		      <div class="et_left_txt1" style="color: #00FF00">Payable Amount Now		      <span class="et_left_txt2"></span>
		      </div>
	      </div>
	      <div class="et_right_block">
		      <span class="et_left_txt3" style="color: #00FF00"  >SRD 41.82</span>
		      
	      </div>
	      <div style="clear: both;"></div>
	    </div>
	    <div>
	      <div class="et_left_block">
		      <div class="et_left_txt1" style="color: #FF6600">Payable Amount at Pickup		      <span class="et_left_txt2"></span>
		      </div>
	      </div>
	      <div class="et_right_block">
		      <span class="et_left_txt3" style="color: #FF6600">SRD 0.00</span>
		      
	      </div>
	      <div style="clear: both;"></div>
	    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
   
 
  <hr class="cf_bot-bot" />
  <p>Your rate was calculated based on the information provided. Some modifications may change this rate.</p>
  </div><!---bottom container end--->

 </div>
 </div> <div class="col-lg-8 col-sm-7">
 <div style="margin-top:20px;" align="right"> 
 	<a href="javascript:document.bk.submit();" class="smallbutton" onClick="setfval();"><button type="button" value="" class="jCheck_btn">Back</button></a>
 </div>
 
<div class="j-Economy">
 <div class="cf_eheader">Rental Options</div>
 <div class="cf_ebottom clearfix">
  <div class="rental_top clearfix">
  <div class="ren_box">Options </div>
  <div class="ren_box">Quantity</div>
  <div class="ren_box">Amount</div>
  </div><div class="rental_bot">
	  <div class="ren_box">
	  <input onClick="take_data()"; type="checkbox" name="arropp[]" value="1" id="chk~1" />
	  <span>Child Seat</span>
	  </div>
	   <div class="ren_box">
	   <div class="p_date_right clearfix">
		<div class="form-group">
		  <div class="btn-group pull-right">
						 <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="width:73px;">
						   <span data-bind="label">1</span>&nbsp;<span class="caret"></span>
							</button>
						 <ul class="dropdown-menu" role="menu">
						   <li><a href="javascript:void(0);">1</a></li>
						   <li><a href="javascript:void(0);">2</a></li>
						   <li><a href="javascript:void(0);">3</a></li>
						   <li><a href="javascript:void(0);">4</a></li>
						   <li><a href="javascript:void(0);">5</a></li>
						 </ul>
						 
						 <select onchange="take_data();" name="sel~1" class="field_17" id="sel~1" style="display:none;">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                         </select>
						 
					   </div>
		</div>
		</div>
	   </div>
    <div class="ren_box"><span>10.00 SRD per day</span></div>
	</div><div class="rental_bot">
	  <div class="ren_box">
	  <input onClick="take_data()"; type="checkbox" name="arropp[]" value="2" id="chk~2" />
	  <span>Extra Driver</span>
	  </div>
	   <div class="ren_box">
	   <div class="p_date_right clearfix">
		<div class="form-group">
		  <div class="btn-group pull-right">
						 <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="width:73px;">
						   <span data-bind="label">1</span>&nbsp;<span class="caret"></span>
							</button>
						 <ul class="dropdown-menu" role="menu">
						   <li><a href="javascript:void(0);">1</a></li>
						   <li><a href="javascript:void(0);">2</a></li>
						   <li><a href="javascript:void(0);">3</a></li>
						   <li><a href="javascript:void(0);">4</a></li>
						   <li><a href="javascript:void(0);">5</a></li>
						 </ul>
						 
						 <select onchange="take_data();" name="sel~2" class="field_17" id="sel~2" style="display:none;">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                         </select>
						 
					   </div>
		</div>
		</div>
	   </div>
    <div class="ren_box"><span>25.00 SRD per day</span></div>
	</div><div class="rental_bot">
	  <div class="ren_box">
	  <input onClick="take_data()"; type="checkbox" name="arropp[]" value="3" id="chk~3" />
	  <span>GPS Device</span>
	  </div>
	   <div class="ren_box">
	   <div class="p_date_right clearfix">
		<div class="form-group">
		  <div class="btn-group pull-right">
						 <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="width:73px;">
						   <span data-bind="label">1</span>&nbsp;<span class="caret"></span>
							</button>
						 <ul class="dropdown-menu" role="menu">
						   <li><a href="javascript:void(0);">1</a></li>
						   <li><a href="javascript:void(0);">2</a></li>
						   <li><a href="javascript:void(0);">3</a></li>
						   <li><a href="javascript:void(0);">4</a></li>
						   <li><a href="javascript:void(0);">5</a></li>
						 </ul>
						 
						 <select onchange="take_data();" name="sel~3" class="field_17" id="sel~3" style="display:none;">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                         </select>
						 
					   </div>
		</div>
		</div>
	   </div>
    <div class="ren_box"><span>25.00 SRD Per rental</span></div>
	</div>
  
 </div>
 </div>
 <br />
 <!--Protections Start-->


<div class="j-Economy">
 <div class="cf_compack">Protection/Coverages</div>
 <div class="j_ebottom clearfix">
 <p class="cf_proheader">Optional insurances are subject to tax in certain locations. This tax is not reflected in the Estimated total</p><div class="cf_Protec clearfix">
			<div class="cf_Protec_left pull-left">
			 <input onClick="take_data();" type="checkbox" name="arrtax[]" value="3" id="chk2~3" />
			  <span>Surcharges</span>
			</div>
			<div class="cf_Protec_right pull-right">12.00 % Per rental</div>
			</div><div class="cf_Protec clearfix">
			<div class="cf_Protec_left pull-left">
			 <input onClick="take_data();" type="checkbox" name="arrtax[]" value="5" id="chk2~5" />
			  <span>Baggage Loss</span>
			</div>
			<div class="cf_Protec_right pull-right">4.00 SRD Per rental</div>
			</div><div class="cf_Protec clearfix">
			<div class="cf_Protec_left pull-left">
			 <input onClick="take_data();" type="checkbox" name="arrtax[]" value="6" id="chk2~6" />
			  <span>P.A.I.</span>
			</div>
			<div class="cf_Protec_right pull-right">20.00 SRD Per rental</div>
			</div><div class="cf_Protec clearfix">
			<div class="cf_Protec_left pull-left">
			 <input onClick="take_data();" type="checkbox" name="arrtax[]" value="7" id="chk2~7" />
			  <span>C.D.Ws</span>
			</div>
			<div class="cf_Protec_right pull-right">25.00 SRD per day</div>
			</div>

<br />
<br />
 </div>
 </div>

<!--Protections End --> 
 
 <br />
  <div class="j-Economy">
 <div class="j_luxery">Discount Coupon</div>
 <div class="j_ebottom clearfix">
 <div class="cf_discoun"><span>Discount Coupon </span>
 <div class="cf_disinput pull-left">
<div class="form-group">
<input name="coupon_code" type="text" class="form-control" id="coupon_code" value=""/>

</div>
</div>
<div class="cf_disbtn pull-left"> <span><img src="images/ver.jpg" id="verimg" width="30" height="20" style="visibility:hidden"></span>

<input onClick="checkcoupon(); return false;" type="submit"  alt="" border="0" id="redeem" name="redeem" value="Redeem" class="jCheck_btn" />
</div>
 </div> 
 </div>
 </div>  <div class="j-Economy">
  
<form style="margin:0px;" name="cn" id="cn" action="verify_order.php"  onsubmit="return make_confirm2()" method="post">

<input type="hidden" name="code_red2" id="code_red2" value="" /> 

 <div class="cf_driver">Driver Details</div>
 <div class="j_ebottom clearfix">
<div class="cf_d_box">
 <p>Please enter the driver details below to complete your booking Fields marked with '*' symbols are mandatory</p>
 <div class="cf_divform clearfix">
 <span>Title <b>*</b> </span>
<div class="form-group">



<div class="cf_divdropdown pull-right">
               <div class="btn-group pull-left clearfix" style="width:64%;">
                 <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="width:100%;">
                   <span data-bind="label">Mr.</span>&nbsp;<span class="caret"></span>
                    </button>
                 <ul class="dropdown-menu" role="menu">
                   <li><a href="javascript:void(0);">Mr.</a></li>
                   <li><a href="javascript:void(0);">Miss</a></li>
                   <li><a href="javascript:void(0);">Mrs.</a></li>
                   
                 </ul>
                 <select name="title" class="field_8 title_select_drop" id="title" style="display:none;">
					<option value="Mr.">Mr.</option>
					<option value="Miss">Miss</option>
					<option value="Mrs.">Mrs.</option>
				</select>
               </div>
</div>




</div>
<input type="hidden" name="pay_option" id="pay_option" value="0" />
<input type="hidden" name="btotal" id="btotal" value="41.82" />
								
<input type="hidden" name="coup_code" id="coup_code" value="" />
<input type="hidden" name="boptotal" id="boptotal" value="0" />
<input type="hidden" name="bextotal" id="bextotal" value="0" />
<input type="hidden" name="btxtotal" id="btxtotal" value="1.82" />
<input type="hidden" name="bperdaycost" id="bperdaycost" value="40" />
<input type="hidden" name="basecost" id="basecost" value="40" />
<input type="hidden" name="book_days" id="book_days" value="" />
<input type="hidden" name="ccy" id="ccy" value="SRD" />
		<input type="hidden" name="taxid[]" value="4" />
		<input type="hidden" name="taxname[]" value="Insurance" />
		<input type="hidden" name="taxqty[]" value="0" />
		<input type="hidden" name="taxval[]" value="1" />
		<input type="hidden" name="taxid[]" value="2" />
		<input type="hidden" name="taxname[]" value="Tax" />
		<input type="hidden" name="taxqty[]" value="0" />
		<input type="hidden" name="taxval[]" value="0.82" />
</div>	
<div class="cf_divform clearfix">
 <span>First Name<b>*</b> </span>
<div class="form-group">
<input name="fname" type="text" class="form-control" id="fname" value=""/>

</div>
</div>

<div class="cf_divform clearfix">
 <span>Last Name<b>*</b> </span>
<div class="form-group">
<input name="lname" type="text" class="form-control" id="lname" value=""/>

</div>
</div>
<div class="cf_divform clearfix">
 <span>Driver's Age<b>*</b> </span>
<div class="form-group">
<input name="driverage" type="text" class="form-control" id="driverage" value="" />
<input type="hidden" name="oda" id="oda" value="" />  
</div>
</div>
<div class="cf_divform clearfix">
 <span>Phone No<b>*</b> </span>
<div class="form-group">
<input name="phone" type="text" class="form-control" id="phone" value=""/>
</div>
</div>
<div class="cf_divform clearfix">
 <span>Email<b>*</b> </span>
<div class="form-group">
<input name="email" type="text" class="form-control" id="email" value=""/>
</div>
</div>
<div class="cf_divform clearfix">
 <span>Reconfirm Email<b>*</b> </span>
<div class="form-group">
<input name="reemail" type="text" class="form-control" id="reemail" value=""/>
</div>
</div>
<div class="cf_divform clearfix">
 <span>Address <b>*</b> </span>
<div class="form-group">
<input name="address" type="text" class="form-control" id="address" value=""/>
</div>
</div>
<div class="cf_divform clearfix">
 <span>Address2 </span>
<div class="form-group">
<input name="address2" type="text" class="form-control" id="address2" value=""/>

</div>
</div>
<div class="cf_divform clearfix">
 <span>Country<b>*</b> </span>
<div class="form-group">
							
									
									
								<div class="cf_divdropdown pull-right">
								   <div class="btn-group pull-left clearfix" style="width:64%;">
									<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="width:100%;">
                   <span data-bind="label" id="driver_country_drop_span">Select One</span>&nbsp;<span class="caret"></span>
                    </button>
                 <ul class="dropdown-menu driver_country_drop" role="menu">
					                       
                      
                                              <li><a href="javascript:void(0);">Afghanistan</a><div style="display:none;">1</div></li>
                      
                                              <li><a href="javascript:void(0);">Albania</a><div style="display:none;">2</div></li>
                      
                                              <li><a href="javascript:void(0);">Algeria</a><div style="display:none;">3</div></li>
                      
                                              <li><a href="javascript:void(0);">American Samoa</a><div style="display:none;">4</div></li>
                      
                                              <li><a href="javascript:void(0);">Andorra</a><div style="display:none;">5</div></li>
                      
                                              <li><a href="javascript:void(0);">Angola</a><div style="display:none;">6</div></li>
                      
                                              <li><a href="javascript:void(0);">Anguilla</a><div style="display:none;">7</div></li>
                      
                                              <li><a href="javascript:void(0);">Antarctica</a><div style="display:none;">8</div></li>
                      
                                              <li><a href="javascript:void(0);">Antigua and Barbuda</a><div style="display:none;">9</div></li>
                      
                                              <li><a href="javascript:void(0);">Argentina</a><div style="display:none;">10</div></li>
                      
                                              <li><a href="javascript:void(0);">Armenia</a><div style="display:none;">11</div></li>
                      
                                              <li><a href="javascript:void(0);">Aruba</a><div style="display:none;">12</div></li>
                      
                                              <li><a href="javascript:void(0);">Australia</a><div style="display:none;">13</div></li>
                      
                                              <li><a href="javascript:void(0);">Austria</a><div style="display:none;">14</div></li>
                      
                                              <li><a href="javascript:void(0);">Azerbaijan</a><div style="display:none;">15</div></li>
                      
                                              <li><a href="javascript:void(0);">Bahamas</a><div style="display:none;">16</div></li>
                      
                                              <li><a href="javascript:void(0);">Bahrain</a><div style="display:none;">17</div></li>
                      
                                              <li><a href="javascript:void(0);">Bangladesh</a><div style="display:none;">18</div></li>
                      
                                              <li><a href="javascript:void(0);">Barbados</a><div style="display:none;">19</div></li>
                      
                                              <li><a href="javascript:void(0);">Belarus</a><div style="display:none;">20</div></li>
                      
                                              <li><a href="javascript:void(0);">Belgium</a><div style="display:none;">21</div></li>
                      
                                              <li><a href="javascript:void(0);">Belize</a><div style="display:none;">22</div></li>
                      
                                              <li><a href="javascript:void(0);">Benin</a><div style="display:none;">23</div></li>
                      
                                              <li><a href="javascript:void(0);">Bermuda</a><div style="display:none;">24</div></li>
                      
                                              <li><a href="javascript:void(0);">Bhutan</a><div style="display:none;">25</div></li>
                      
                                              <li><a href="javascript:void(0);">Bolivia</a><div style="display:none;">26</div></li>
                      
                                              <li><a href="javascript:void(0);">Bosnia and Herzegovina</a><div style="display:none;">27</div></li>
                      
                                              <li><a href="javascript:void(0);">Botswana</a><div style="display:none;">28</div></li>
                      
                                              <li><a href="javascript:void(0);">Bouvet Island</a><div style="display:none;">29</div></li>
                      
                                              <li><a href="javascript:void(0);">Brazil</a><div style="display:none;">30</div></li>
                      
                                              <li><a href="javascript:void(0);">British Indian Ocean Territory</a><div style="display:none;">31</div></li>
                      
                                              <li><a href="javascript:void(0);">Brunei Darussalam</a><div style="display:none;">32</div></li>
                      
                                              <li><a href="javascript:void(0);">Bulgaria</a><div style="display:none;">33</div></li>
                      
                                              <li><a href="javascript:void(0);">Burkina Faso</a><div style="display:none;">34</div></li>
                      
                                              <li><a href="javascript:void(0);">Burundi</a><div style="display:none;">35</div></li>
                      
                                              <li><a href="javascript:void(0);">Cambodia</a><div style="display:none;">36</div></li>
                      
                                              <li><a href="javascript:void(0);">Cameroon</a><div style="display:none;">37</div></li>
                      
                                              <li><a href="javascript:void(0);">Canada</a><div style="display:none;">38</div></li>
                      
                                              <li><a href="javascript:void(0);">Cape Verde</a><div style="display:none;">39</div></li>
                      
                                              <li><a href="javascript:void(0);">Cayman Islands</a><div style="display:none;">40</div></li>
                      
                                              <li><a href="javascript:void(0);">Central African Republic</a><div style="display:none;">41</div></li>
                      
                                              <li><a href="javascript:void(0);">Chad</a><div style="display:none;">42</div></li>
                      
                                              <li><a href="javascript:void(0);">Chile</a><div style="display:none;">43</div></li>
                      
                                              <li><a href="javascript:void(0);">China</a><div style="display:none;">44</div></li>
                      
                                              <li><a href="javascript:void(0);">Christmas Island</a><div style="display:none;">45</div></li>
                      
                                              <li><a href="javascript:void(0);">Cocos (Keeling) Islands</a><div style="display:none;">46</div></li>
                      
                                              <li><a href="javascript:void(0);">Colombia</a><div style="display:none;">47</div></li>
                      
                                              <li><a href="javascript:void(0);">Comoros</a><div style="display:none;">48</div></li>
                      
                                              <li><a href="javascript:void(0);">Congo</a><div style="display:none;">49</div></li>
                      
                                              <li><a href="javascript:void(0);">Congo, the Democratic Republic of the</a><div style="display:none;">50</div></li>
                      
                                              <li><a href="javascript:void(0);">Cook Islands</a><div style="display:none;">51</div></li>
                      
                                              <li><a href="javascript:void(0);">Costa Rica</a><div style="display:none;">52</div></li>
                      
                                              <li><a href="javascript:void(0);">Cote D'Ivoire</a><div style="display:none;">53</div></li>
                      
                                              <li><a href="javascript:void(0);">Croatia</a><div style="display:none;">54</div></li>
                      
                                              <li><a href="javascript:void(0);">Cuba</a><div style="display:none;">55</div></li>
                      
                                              <li><a href="javascript:void(0);">Cyprus</a><div style="display:none;">56</div></li>
                      
                                              <li><a href="javascript:void(0);">Czech Republic</a><div style="display:none;">57</div></li>
                      
                                              <li><a href="javascript:void(0);">Denmark</a><div style="display:none;">58</div></li>
                      
                                              <li><a href="javascript:void(0);">Djibouti</a><div style="display:none;">59</div></li>
                      
                                              <li><a href="javascript:void(0);">Dominica</a><div style="display:none;">60</div></li>
                      
                                              <li><a href="javascript:void(0);">Dominican Republic</a><div style="display:none;">61</div></li>
                      
                                              <li><a href="javascript:void(0);">Ecuador</a><div style="display:none;">62</div></li>
                      
                                              <li><a href="javascript:void(0);">Egypt</a><div style="display:none;">63</div></li>
                      
                                              <li><a href="javascript:void(0);">El Salvador</a><div style="display:none;">64</div></li>
                      
                                              <li><a href="javascript:void(0);">Equatorial Guinea</a><div style="display:none;">65</div></li>
                      
                                              <li><a href="javascript:void(0);">Eritrea</a><div style="display:none;">66</div></li>
                      
                                              <li><a href="javascript:void(0);">Estonia</a><div style="display:none;">67</div></li>
                      
                                              <li><a href="javascript:void(0);">Ethiopia</a><div style="display:none;">68</div></li>
                      
                                              <li><a href="javascript:void(0);">Falkland Islands (Malvinas)</a><div style="display:none;">69</div></li>
                      
                                              <li><a href="javascript:void(0);">Faroe Islands</a><div style="display:none;">70</div></li>
                      
                                              <li><a href="javascript:void(0);">Fiji</a><div style="display:none;">71</div></li>
                      
                                              <li><a href="javascript:void(0);">Finland</a><div style="display:none;">72</div></li>
                      
                                              <li><a href="javascript:void(0);">France</a><div style="display:none;">73</div></li>
                      
                                              <li><a href="javascript:void(0);">French Guiana</a><div style="display:none;">74</div></li>
                      
                                              <li><a href="javascript:void(0);">French Polynesia</a><div style="display:none;">75</div></li>
                      
                                              <li><a href="javascript:void(0);">French Southern Territories</a><div style="display:none;">76</div></li>
                      
                                              <li><a href="javascript:void(0);">Gabon</a><div style="display:none;">77</div></li>
                      
                                              <li><a href="javascript:void(0);">Gambia</a><div style="display:none;">78</div></li>
                      
                                              <li><a href="javascript:void(0);">Georgia</a><div style="display:none;">79</div></li>
                      
                                              <li><a href="javascript:void(0);">Germany</a><div style="display:none;">80</div></li>
                      
                                              <li><a href="javascript:void(0);">Ghana</a><div style="display:none;">81</div></li>
                      
                                              <li><a href="javascript:void(0);">Gibraltar</a><div style="display:none;">82</div></li>
                      
                                              <li><a href="javascript:void(0);">Greece</a><div style="display:none;">83</div></li>
                      
                                              <li><a href="javascript:void(0);">Greenland</a><div style="display:none;">84</div></li>
                      
                                              <li><a href="javascript:void(0);">Grenada</a><div style="display:none;">85</div></li>
                      
                                              <li><a href="javascript:void(0);">Guadeloupe</a><div style="display:none;">86</div></li>
                      
                                              <li><a href="javascript:void(0);">Guam</a><div style="display:none;">87</div></li>
                      
                                              <li><a href="javascript:void(0);">Guatemala</a><div style="display:none;">88</div></li>
                      
                                              <li><a href="javascript:void(0);">Guinea</a><div style="display:none;">89</div></li>
                      
                                              <li><a href="javascript:void(0);">Guinea-Bissau</a><div style="display:none;">90</div></li>
                      
                                              <li><a href="javascript:void(0);">Guyana</a><div style="display:none;">91</div></li>
                      
                                              <li><a href="javascript:void(0);">Haiti</a><div style="display:none;">92</div></li>
                      
                                              <li><a href="javascript:void(0);">Heard Island and Mcdonald Islands</a><div style="display:none;">93</div></li>
                      
                                              <li><a href="javascript:void(0);">Holy See (Vatican City State)</a><div style="display:none;">94</div></li>
                      
                                              <li><a href="javascript:void(0);">Honduras</a><div style="display:none;">95</div></li>
                      
                                              <li><a href="javascript:void(0);">Hong Kong</a><div style="display:none;">96</div></li>
                      
                                              <li><a href="javascript:void(0);">Hungary</a><div style="display:none;">97</div></li>
                      
                                              <li><a href="javascript:void(0);">Iceland</a><div style="display:none;">98</div></li>
                      
                                              <li><a href="javascript:void(0);">India</a><div style="display:none;">99</div></li>
                      
                                              <li><a href="javascript:void(0);">Indonesia</a><div style="display:none;">100</div></li>
                      
                                              <li><a href="javascript:void(0);">Iran, Islamic Republic of</a><div style="display:none;">101</div></li>
                      
                                              <li><a href="javascript:void(0);">Iraq</a><div style="display:none;">102</div></li>
                      
                                              <li><a href="javascript:void(0);">Ireland</a><div style="display:none;">103</div></li>
                      
                                              <li><a href="javascript:void(0);">Israel</a><div style="display:none;">104</div></li>
                      
                                              <li><a href="javascript:void(0);">Italy</a><div style="display:none;">105</div></li>
                      
                                              <li><a href="javascript:void(0);">Jamaica</a><div style="display:none;">106</div></li>
                      
                                              <li><a href="javascript:void(0);">Japan</a><div style="display:none;">107</div></li>
                      
                                              <li><a href="javascript:void(0);">Jordan</a><div style="display:none;">108</div></li>
                      
                                              <li><a href="javascript:void(0);">Kazakhstan</a><div style="display:none;">109</div></li>
                      
                                              <li><a href="javascript:void(0);">Kenya</a><div style="display:none;">110</div></li>
                      
                                              <li><a href="javascript:void(0);">Kiribati</a><div style="display:none;">111</div></li>
                      
                                              <li><a href="javascript:void(0);">Korea, Democratic </a><div style="display:none;">112</div></li>
                      
                                              <li><a href="javascript:void(0);">Korea, Republic of</a><div style="display:none;">113</div></li>
                      
                                              <li><a href="javascript:void(0);">Kuwait</a><div style="display:none;">114</div></li>
                      
                                              <li><a href="javascript:void(0);">Kyrgyzstan</a><div style="display:none;">115</div></li>
                      
                                              <li><a href="javascript:void(0);">Lao People's Democratic Republic</a><div style="display:none;">116</div></li>
                      
                                              <li><a href="javascript:void(0);">Latvia</a><div style="display:none;">117</div></li>
                      
                                              <li><a href="javascript:void(0);">Lebanon</a><div style="display:none;">118</div></li>
                      
                                              <li><a href="javascript:void(0);">Lesotho</a><div style="display:none;">119</div></li>
                      
                                              <li><a href="javascript:void(0);">Liberia</a><div style="display:none;">120</div></li>
                      
                                              <li><a href="javascript:void(0);">Libyan Arab Jamahiriya</a><div style="display:none;">121</div></li>
                      
                                              <li><a href="javascript:void(0);">Liechtenstein</a><div style="display:none;">122</div></li>
                      
                                              <li><a href="javascript:void(0);">Lithuania</a><div style="display:none;">123</div></li>
                      
                                              <li><a href="javascript:void(0);">Luxembourg</a><div style="display:none;">124</div></li>
                      
                                              <li><a href="javascript:void(0);">Macao</a><div style="display:none;">125</div></li>
                      
                                              <li><a href="javascript:void(0);">Madagascar</a><div style="display:none;">127</div></li>
                      
                                              <li><a href="javascript:void(0);">Malawi</a><div style="display:none;">128</div></li>
                      
                                              <li><a href="javascript:void(0);">Malaysia</a><div style="display:none;">129</div></li>
                      
                                              <li><a href="javascript:void(0);">Maldives</a><div style="display:none;">130</div></li>
                      
                                              <li><a href="javascript:void(0);">Mali</a><div style="display:none;">131</div></li>
                      
                                              <li><a href="javascript:void(0);">Malta</a><div style="display:none;">132</div></li>
                      
                                              <li><a href="javascript:void(0);">Marshall Islands</a><div style="display:none;">133</div></li>
                      
                                              <li><a href="javascript:void(0);">Martinique</a><div style="display:none;">134</div></li>
                      
                                              <li><a href="javascript:void(0);">Mauritania</a><div style="display:none;">135</div></li>
                      
                                              <li><a href="javascript:void(0);">Mauritius</a><div style="display:none;">136</div></li>
                      
                                              <li><a href="javascript:void(0);">Mayotte</a><div style="display:none;">137</div></li>
                      
                                              <li><a href="javascript:void(0);">Mexico</a><div style="display:none;">138</div></li>
                      
                                              <li><a href="javascript:void(0);">Micronesia, Federated States of</a><div style="display:none;">139</div></li>
                      
                                              <li><a href="javascript:void(0);">Moldova, Republic of</a><div style="display:none;">140</div></li>
                      
                                              <li><a href="javascript:void(0);">Monaco</a><div style="display:none;">141</div></li>
                      
                                              <li><a href="javascript:void(0);">Mongolia</a><div style="display:none;">142</div></li>
                      
                                              <li><a href="javascript:void(0);">Montserrat</a><div style="display:none;">143</div></li>
                      
                                              <li><a href="javascript:void(0);">Morocco</a><div style="display:none;">144</div></li>
                      
                                              <li><a href="javascript:void(0);">Mozambique</a><div style="display:none;">145</div></li>
                      
                                              <li><a href="javascript:void(0);">Myanmar</a><div style="display:none;">146</div></li>
                      
                                              <li><a href="javascript:void(0);">Namibia</a><div style="display:none;">147</div></li>
                      
                                              <li><a href="javascript:void(0);">Nauru</a><div style="display:none;">148</div></li>
                      
                                              <li><a href="javascript:void(0);">Nepal</a><div style="display:none;">149</div></li>
                      
                                              <li><a href="javascript:void(0);">Netherlands</a><div style="display:none;">150</div></li>
                      
                                              <li><a href="javascript:void(0);">Netherlands Antilles</a><div style="display:none;">151</div></li>
                      
                                              <li><a href="javascript:void(0);">New Caledonia</a><div style="display:none;">152</div></li>
                      
                                              <li><a href="javascript:void(0);">New Zealand</a><div style="display:none;">153</div></li>
                      
                                              <li><a href="javascript:void(0);">Nicaragua</a><div style="display:none;">154</div></li>
                      
                                              <li><a href="javascript:void(0);">Niger</a><div style="display:none;">155</div></li>
                      
                                              <li><a href="javascript:void(0);">Nigeria</a><div style="display:none;">156</div></li>
                      
                                              <li><a href="javascript:void(0);">Niue</a><div style="display:none;">157</div></li>
                      
                                              <li><a href="javascript:void(0);">Norfolk Island</a><div style="display:none;">158</div></li>
                      
                                              <li><a href="javascript:void(0);">Northern Mariana Islands</a><div style="display:none;">159</div></li>
                      
                                              <li><a href="javascript:void(0);">Norway</a><div style="display:none;">160</div></li>
                      
                                              <li><a href="javascript:void(0);">Oman</a><div style="display:none;">161</div></li>
                      
                                              <li><a href="javascript:void(0);">Pakistan</a><div style="display:none;">162</div></li>
                      
                                              <li><a href="javascript:void(0);">Palau</a><div style="display:none;">163</div></li>
                      
                                              <li><a href="javascript:void(0);">Palestinian Territory, Occupied</a><div style="display:none;">164</div></li>
                      
                                              <li><a href="javascript:void(0);">Panama</a><div style="display:none;">165</div></li>
                      
                                              <li><a href="javascript:void(0);">Papua New Guinea</a><div style="display:none;">166</div></li>
                      
                                              <li><a href="javascript:void(0);">Paraguay</a><div style="display:none;">167</div></li>
                      
                                              <li><a href="javascript:void(0);">Peru</a><div style="display:none;">168</div></li>
                      
                                              <li><a href="javascript:void(0);">Philippines</a><div style="display:none;">169</div></li>
                      
                                              <li><a href="javascript:void(0);">Pitcairn</a><div style="display:none;">170</div></li>
                      
                                              <li><a href="javascript:void(0);">Poland</a><div style="display:none;">171</div></li>
                      
                                              <li><a href="javascript:void(0);">Portugal</a><div style="display:none;">172</div></li>
                      
                                              <li><a href="javascript:void(0);">Puerto Rico</a><div style="display:none;">173</div></li>
                      
                                              <li><a href="javascript:void(0);">Qatar</a><div style="display:none;">174</div></li>
                      
                                              <li><a href="javascript:void(0);">Reunion</a><div style="display:none;">175</div></li>
                      
                                              <li><a href="javascript:void(0);">Romania</a><div style="display:none;">176</div></li>
                      
                                              <li><a href="javascript:void(0);">Russian Federation</a><div style="display:none;">177</div></li>
                      
                                              <li><a href="javascript:void(0);">Rwanda</a><div style="display:none;">178</div></li>
                      
                                              <li><a href="javascript:void(0);">Saint Helena</a><div style="display:none;">179</div></li>
                      
                                              <li><a href="javascript:void(0);">Saint Kitts and Nevis</a><div style="display:none;">180</div></li>
                      
                                              <li><a href="javascript:void(0);">Saint Lucia</a><div style="display:none;">181</div></li>
                      
                                              <li><a href="javascript:void(0);">Saint Pierre and Miquelon</a><div style="display:none;">182</div></li>
                      
                                              <li><a href="javascript:void(0);">Saint Vincent and the Grenadines</a><div style="display:none;">183</div></li>
                      
                                              <li><a href="javascript:void(0);">Samoa</a><div style="display:none;">184</div></li>
                      
                                              <li><a href="javascript:void(0);">San Marino</a><div style="display:none;">185</div></li>
                      
                                              <li><a href="javascript:void(0);">Sao Tome and Principe</a><div style="display:none;">186</div></li>
                      
                                              <li><a href="javascript:void(0);">Saudi Arabia</a><div style="display:none;">187</div></li>
                      
                                              <li><a href="javascript:void(0);">Senegal</a><div style="display:none;">188</div></li>
                      
                                              <li><a href="javascript:void(0);">Serbia and Montenegro</a><div style="display:none;">189</div></li>
                      
                                              <li><a href="javascript:void(0);">Seychelles</a><div style="display:none;">190</div></li>
                      
                                              <li><a href="javascript:void(0);">Sierra Leone</a><div style="display:none;">191</div></li>
                      
                                              <li><a href="javascript:void(0);">Singapore</a><div style="display:none;">192</div></li>
                      
                                              <li><a href="javascript:void(0);">Slovakia</a><div style="display:none;">193</div></li>
                      
                                              <li><a href="javascript:void(0);">Slovenia</a><div style="display:none;">194</div></li>
                      
                                              <li><a href="javascript:void(0);">Solomon Islands</a><div style="display:none;">195</div></li>
                      
                                              <li><a href="javascript:void(0);">Somalia</a><div style="display:none;">196</div></li>
                      
                                              <li><a href="javascript:void(0);">South Africa</a><div style="display:none;">197</div></li>
                      
                                              <li><a href="javascript:void(0);">South Georgia </a><div style="display:none;">198</div></li>
                      
                                              <li><a href="javascript:void(0);">Spain</a><div style="display:none;">199</div></li>
                      
                                              <li><a href="javascript:void(0);">Sri Lanka</a><div style="display:none;">200</div></li>
                      
                                              <li><a href="javascript:void(0);">Sudan</a><div style="display:none;">201</div></li>
                      
                                              <li><a href="javascript:void(0);">Suriname</a><div style="display:none;">202</div></li>
                      
                                              <li><a href="javascript:void(0);">Svalbard and Jan Mayen</a><div style="display:none;">203</div></li>
                      
                                              <li><a href="javascript:void(0);">Swaziland</a><div style="display:none;">204</div></li>
                      
                                              <li><a href="javascript:void(0);">Sweden</a><div style="display:none;">205</div></li>
                      
                                              <li><a href="javascript:void(0);">Switzerland</a><div style="display:none;">206</div></li>
                      
                                              <li><a href="javascript:void(0);">Syrian Arab Republic</a><div style="display:none;">207</div></li>
                      
                                              <li><a href="javascript:void(0);">Taiwan, Province of China</a><div style="display:none;">208</div></li>
                      
                                              <li><a href="javascript:void(0);">Tajikistan</a><div style="display:none;">209</div></li>
                      
                                              <li><a href="javascript:void(0);">Tanzania, United Republic of</a><div style="display:none;">210</div></li>
                      
                                              <li><a href="javascript:void(0);">Thailand</a><div style="display:none;">211</div></li>
                      
                                              <li><a href="javascript:void(0);">Timor-Leste</a><div style="display:none;">212</div></li>
                      
                                              <li><a href="javascript:void(0);">Togo</a><div style="display:none;">213</div></li>
                      
                                              <li><a href="javascript:void(0);">Tokelau</a><div style="display:none;">214</div></li>
                      
                                              <li><a href="javascript:void(0);">Tonga</a><div style="display:none;">215</div></li>
                      
                                              <li><a href="javascript:void(0);">Trinidad and Tobago</a><div style="display:none;">216</div></li>
                      
                                              <li><a href="javascript:void(0);">Tunisia</a><div style="display:none;">217</div></li>
                      
                                              <li><a href="javascript:void(0);">Turkey</a><div style="display:none;">218</div></li>
                      
                                              <li><a href="javascript:void(0);">Turkmenistan</a><div style="display:none;">219</div></li>
                      
                                              <li><a href="javascript:void(0);">Turks and Caicos Islands</a><div style="display:none;">220</div></li>
                      
                                              <li><a href="javascript:void(0);">Tuvalu</a><div style="display:none;">221</div></li>
                      
                                              <li><a href="javascript:void(0);">Uganda</a><div style="display:none;">222</div></li>
                      
                                              <li><a href="javascript:void(0);">Ukraine</a><div style="display:none;">223</div></li>
                      
                                              <li><a href="javascript:void(0);">United Arab Emirates</a><div style="display:none;">224</div></li>
                      
                                              <li><a href="javascript:void(0);">United Kingdom</a><div style="display:none;">225</div></li>
                      
                                              <li><a href="javascript:void(0);">United States</a><div style="display:none;">226</div></li>
                      
                                              <li><a href="javascript:void(0);">United States Minor Outlying Islands</a><div style="display:none;">227</div></li>
                      
                                              <li><a href="javascript:void(0);">Uruguay</a><div style="display:none;">228</div></li>
                      
                                              <li><a href="javascript:void(0);">Uzbekistan</a><div style="display:none;">229</div></li>
                      
                                              <li><a href="javascript:void(0);">Vanuatu</a><div style="display:none;">230</div></li>
                      
                                              <li><a href="javascript:void(0);">Venezuela</a><div style="display:none;">231</div></li>
                      
                                              <li><a href="javascript:void(0);">Viet Nam</a><div style="display:none;">232</div></li>
                      
                                              <li><a href="javascript:void(0);">Virgin Islands, British</a><div style="display:none;">233</div></li>
                      
                                              <li><a href="javascript:void(0);">Virgin Islands, U.s.</a><div style="display:none;">234</div></li>
                      
                                              <li><a href="javascript:void(0);">Wallis and Futuna</a><div style="display:none;">235</div></li>
                      
                                              <li><a href="javascript:void(0);">Western Sahara</a><div style="display:none;">236</div></li>
                      
                                              <li><a href="javascript:void(0);">Yemen</a><div style="display:none;">237</div></li>
                      
                                              <li><a href="javascript:void(0);">Zambia</a><div style="display:none;">238</div></li>
                      
                                              <li><a href="javascript:void(0);">Zimbabwe</a><div style="display:none;">239</div></li>
                      
                                        
                 </ul>
                                   <select name="country" id="country" style="display:none;">
                 
                                    <option value="1">Afghanistan</option>
                                    <option value="2">Albania</option>
                                    <option value="3">Algeria</option>
                                    <option value="4">American Samoa</option>
                                    <option value="5">Andorra</option>
                                    <option value="6">Angola</option>
                                    <option value="7">Anguilla</option>
                                    <option value="8">Antarctica</option>
                                    <option value="9">Antigua and Barbuda</option>
                                    <option value="10">Argentina</option>
                                    <option value="11">Armenia</option>
                                    <option value="12">Aruba</option>
                                    <option value="13">Australia</option>
                                    <option value="14">Austria</option>
                                    <option value="15">Azerbaijan</option>
                                    <option value="16">Bahamas</option>
                                    <option value="17">Bahrain</option>
                                    <option value="18">Bangladesh</option>
                                    <option value="19">Barbados</option>
                                    <option value="20">Belarus</option>
                                    <option value="21">Belgium</option>
                                    <option value="22">Belize</option>
                                    <option value="23">Benin</option>
                                    <option value="24">Bermuda</option>
                                    <option value="25">Bhutan</option>
                                    <option value="26">Bolivia</option>
                                    <option value="27">Bosnia and Herzegovina</option>
                                    <option value="28">Botswana</option>
                                    <option value="29">Bouvet Island</option>
                                    <option value="30">Brazil</option>
                                    <option value="31">British Indian Ocean Territory</option>
                                    <option value="32">Brunei Darussalam</option>
                                    <option value="33">Bulgaria</option>
                                    <option value="34">Burkina Faso</option>
                                    <option value="35">Burundi</option>
                                    <option value="36">Cambodia</option>
                                    <option value="37">Cameroon</option>
                                    <option value="38">Canada</option>
                                    <option value="39">Cape Verde</option>
                                    <option value="40">Cayman Islands</option>
                                    <option value="41">Central African Republic</option>
                                    <option value="42">Chad</option>
                                    <option value="43">Chile</option>
                                    <option value="44">China</option>
                                    <option value="45">Christmas Island</option>
                                    <option value="46">Cocos (Keeling) Islands</option>
                                    <option value="47">Colombia</option>
                                    <option value="48">Comoros</option>
                                    <option value="49">Congo</option>
                                    <option value="50">Congo, the Democratic Republic of the</option>
                                    <option value="51">Cook Islands</option>
                                    <option value="52">Costa Rica</option>
                                    <option value="53">Cote D'Ivoire</option>
                                    <option value="54">Croatia</option>
                                    <option value="55">Cuba</option>
                                    <option value="56">Cyprus</option>
                                    <option value="57">Czech Republic</option>
                                    <option value="58">Denmark</option>
                                    <option value="59">Djibouti</option>
                                    <option value="60">Dominica</option>
                                    <option value="61">Dominican Republic</option>
                                    <option value="62">Ecuador</option>
                                    <option value="63">Egypt</option>
                                    <option value="64">El Salvador</option>
                                    <option value="65">Equatorial Guinea</option>
                                    <option value="66">Eritrea</option>
                                    <option value="67">Estonia</option>
                                    <option value="68">Ethiopia</option>
                                    <option value="69">Falkland Islands (Malvinas)</option>
                                    <option value="70">Faroe Islands</option>
                                    <option value="71">Fiji</option>
                                    <option value="72">Finland</option>
                                    <option value="73">France</option>
                                    <option value="74">French Guiana</option>
                                    <option value="75">French Polynesia</option>
                                    <option value="76">French Southern Territories</option>
                                    <option value="77">Gabon</option>
                                    <option value="78">Gambia</option>
                                    <option value="79">Georgia</option>
                                    <option value="80">Germany</option>
                                    <option value="81">Ghana</option>
                                    <option value="82">Gibraltar</option>
                                    <option value="83">Greece</option>
                                    <option value="84">Greenland</option>
                                    <option value="85">Grenada</option>
                                    <option value="86">Guadeloupe</option>
                                    <option value="87">Guam</option>
                                    <option value="88">Guatemala</option>
                                    <option value="89">Guinea</option>
                                    <option value="90">Guinea-Bissau</option>
                                    <option value="91">Guyana</option>
                                    <option value="92">Haiti</option>
                                    <option value="93">Heard Island and Mcdonald Islands</option>
                                    <option value="94">Holy See (Vatican City State)</option>
                                    <option value="95">Honduras</option>
                                    <option value="96">Hong Kong</option>
                                    <option value="97">Hungary</option>
                                    <option value="98">Iceland</option>
                                    <option value="99">India</option>
                                    <option value="100">Indonesia</option>
                                    <option value="101">Iran, Islamic Republic of</option>
                                    <option value="102">Iraq</option>
                                    <option value="103">Ireland</option>
                                    <option value="104">Israel</option>
                                    <option value="105">Italy</option>
                                    <option value="106">Jamaica</option>
                                    <option value="107">Japan</option>
                                    <option value="108">Jordan</option>
                                    <option value="109">Kazakhstan</option>
                                    <option value="110">Kenya</option>
                                    <option value="111">Kiribati</option>
                                    <option value="112">Korea, Democratic </option>
                                    <option value="113">Korea, Republic of</option>
                                    <option value="114">Kuwait</option>
                                    <option value="115">Kyrgyzstan</option>
                                    <option value="116">Lao People's Democratic Republic</option>
                                    <option value="117">Latvia</option>
                                    <option value="118">Lebanon</option>
                                    <option value="119">Lesotho</option>
                                    <option value="120">Liberia</option>
                                    <option value="121">Libyan Arab Jamahiriya</option>
                                    <option value="122">Liechtenstein</option>
                                    <option value="123">Lithuania</option>
                                    <option value="124">Luxembourg</option>
                                    <option value="125">Macao</option>
                                    <option value="127">Madagascar</option>
                                    <option value="128">Malawi</option>
                                    <option value="129">Malaysia</option>
                                    <option value="130">Maldives</option>
                                    <option value="131">Mali</option>
                                    <option value="132">Malta</option>
                                    <option value="133">Marshall Islands</option>
                                    <option value="134">Martinique</option>
                                    <option value="135">Mauritania</option>
                                    <option value="136">Mauritius</option>
                                    <option value="137">Mayotte</option>
                                    <option value="138">Mexico</option>
                                    <option value="139">Micronesia, Federated States of</option>
                                    <option value="140">Moldova, Republic of</option>
                                    <option value="141">Monaco</option>
                                    <option value="142">Mongolia</option>
                                    <option value="143">Montserrat</option>
                                    <option value="144">Morocco</option>
                                    <option value="145">Mozambique</option>
                                    <option value="146">Myanmar</option>
                                    <option value="147">Namibia</option>
                                    <option value="148">Nauru</option>
                                    <option value="149">Nepal</option>
                                    <option value="150">Netherlands</option>
                                    <option value="151">Netherlands Antilles</option>
                                    <option value="152">New Caledonia</option>
                                    <option value="153">New Zealand</option>
                                    <option value="154">Nicaragua</option>
                                    <option value="155">Niger</option>
                                    <option value="156">Nigeria</option>
                                    <option value="157">Niue</option>
                                    <option value="158">Norfolk Island</option>
                                    <option value="159">Northern Mariana Islands</option>
                                    <option value="160">Norway</option>
                                    <option value="161">Oman</option>
                                    <option value="162">Pakistan</option>
                                    <option value="163">Palau</option>
                                    <option value="164">Palestinian Territory, Occupied</option>
                                    <option value="165">Panama</option>
                                    <option value="166">Papua New Guinea</option>
                                    <option value="167">Paraguay</option>
                                    <option value="168">Peru</option>
                                    <option value="169">Philippines</option>
                                    <option value="170">Pitcairn</option>
                                    <option value="171">Poland</option>
                                    <option value="172">Portugal</option>
                                    <option value="173">Puerto Rico</option>
                                    <option value="174">Qatar</option>
                                    <option value="175">Reunion</option>
                                    <option value="176">Romania</option>
                                    <option value="177">Russian Federation</option>
                                    <option value="178">Rwanda</option>
                                    <option value="179">Saint Helena</option>
                                    <option value="180">Saint Kitts and Nevis</option>
                                    <option value="181">Saint Lucia</option>
                                    <option value="182">Saint Pierre and Miquelon</option>
                                    <option value="183">Saint Vincent and the Grenadines</option>
                                    <option value="184">Samoa</option>
                                    <option value="185">San Marino</option>
                                    <option value="186">Sao Tome and Principe</option>
                                    <option value="187">Saudi Arabia</option>
                                    <option value="188">Senegal</option>
                                    <option value="189">Serbia and Montenegro</option>
                                    <option value="190">Seychelles</option>
                                    <option value="191">Sierra Leone</option>
                                    <option value="192">Singapore</option>
                                    <option value="193">Slovakia</option>
                                    <option value="194">Slovenia</option>
                                    <option value="195">Solomon Islands</option>
                                    <option value="196">Somalia</option>
                                    <option value="197">South Africa</option>
                                    <option value="198">South Georgia </option>
                                    <option value="199">Spain</option>
                                    <option value="200">Sri Lanka</option>
                                    <option value="201">Sudan</option>
                                    <option value="202">Suriname</option>
                                    <option value="203">Svalbard and Jan Mayen</option>
                                    <option value="204">Swaziland</option>
                                    <option value="205">Sweden</option>
                                    <option value="206">Switzerland</option>
                                    <option value="207">Syrian Arab Republic</option>
                                    <option value="208">Taiwan, Province of China</option>
                                    <option value="209">Tajikistan</option>
                                    <option value="210">Tanzania, United Republic of</option>
                                    <option value="211">Thailand</option>
                                    <option value="212">Timor-Leste</option>
                                    <option value="213">Togo</option>
                                    <option value="214">Tokelau</option>
                                    <option value="215">Tonga</option>
                                    <option value="216">Trinidad and Tobago</option>
                                    <option value="217">Tunisia</option>
                                    <option value="218">Turkey</option>
                                    <option value="219">Turkmenistan</option>
                                    <option value="220">Turks and Caicos Islands</option>
                                    <option value="221">Tuvalu</option>
                                    <option value="222">Uganda</option>
                                    <option value="223">Ukraine</option>
                                    <option value="224">United Arab Emirates</option>
                                    <option value="225">United Kingdom</option>
                                    <option value="226">United States</option>
                                    <option value="227">United States Minor Outlying Islands</option>
                                    <option value="228">Uruguay</option>
                                    <option value="229">Uzbekistan</option>
                                    <option value="230">Vanuatu</option>
                                    <option value="231">Venezuela</option>
                                    <option value="232">Viet Nam</option>
                                    <option value="233">Virgin Islands, British</option>
                                    <option value="234">Virgin Islands, U.s.</option>
                                    <option value="235">Wallis and Futuna</option>
                                    <option value="236">Western Sahara</option>
                                    <option value="237">Yemen</option>
                                    <option value="238">Zambia</option>
                                    <option value="239">Zimbabwe</option>
                                    </select>
									 
								   </div>
</div>
									
</div>
</div>

 <div class="cf_divform clearfix">
 <span>State / County<b>*</b> </span>
<div class="form-group">
<input name="state" type="text" id="state" value="" class="form-control"/>

</div>
</div>




<div class="cf_divform clearfix">
 <span>City<b>*</b> </span>
<div class="form-group">
<input name="city" type="text" class="form-control" id="city"  value=""/>
</div>
</div>
<div class="cf_divform clearfix">
 <span>Postal / Zip Code</span>
<div class="form-group">
<input name="zip" type="text" class="form-control" id="zip" value=""/>
</div>
</div>
<div class="cf_divform clearfix" id="flno">
 <span>Flight No<b>*</b> </span>
<div class="form-group">
<input name="flightno" type="text" class="form-control" id="flightno" value=""/>
</div>
</div>

<div class="cf_divform clearfix">
<div class="divcheck">
<div class="form-group">
<input type="checkbox" value="1" name="notknownflightno" id="notknownflightno" onchange="flight();" />
</div>
</div>
<p>I don't know my flight number / I am not arriving by plane</p>
</div>

 </div> 
 </div>
 </div>
 
 <!-- Payment Details Start -->
 				 
 
 <div class="j-Economy">
 <div class="cf_eng">Booking Engine Terms & Conditions</div>
 <div class="j_ebottom clearfix">
 <div class="book_engservice">
<div class="bookeng">

</div>

<p><input type="checkbox" name="terms" id="terms" />&nbsp;&nbsp;I confirm that I have read, understood and agree with the BOOKING TERMS & CONDITIONS provided.<br /> 
<span><a href="javascript:pic_pop();" style="text-decoration:none;"><b style="color:#8e2020;">BOOKING TERMS &amp; CONDITIONS</b></a></span></p>
<p>
<input type="submit"  onClick="setfval();" alt="" border="0" id="submit" name="submit" value="Confirm Booking" class="jCheck_btn"/>

</p>
</div>
 
 </div>
 </div>
 
 </div>
 </div>
 </div>
 </div>
  </form> 
  <!--confrim end--->
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
 <a href="page1.php">Custom Page</a>  | 
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
</div>
</body>
<script type="text/javascript">
  /*$( document.body ).on( 'click', '.dropdown-menu li', function( event ) {

      var $target = $( event.currentTarget );

      $target.closest( '.btn-group' )
         .find( '[data-bind="label"]' ).text( $target.text() )
            .end()
         .children( '.dropdown-toggle' ).dropdown( 'toggle' );

      return false;

   });*/
   $(document).ready(function(){
	   $('.dropdown-toggle').click(function(){
		   $(this).parent().find('.dropdown-menu').slideToggle();
	   });
	   $('.dropdown-menu li').click(function(){
			var val = $(this).find('a').html();
			if(val == "American Express"){
				val = "Amex";
			}
			var html = $(this).find('a').html();
			//alert(val+' '+html);
			$(this).parent().parent().find('select').val(val);
			$(this).parent().parent().find('button').find('span:first-child').html(html);
			
			$(this).parent().slideUp();
			take_data();
	   });
	   
	   
	   
	   
   });
</script>

</html>

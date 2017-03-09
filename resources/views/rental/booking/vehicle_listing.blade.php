

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>book</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
   <link rel="stylesheet" href="css/bjqs.css" type="text/css">
<link href="http://designers.hubspot.com/hs-fs/hub/327485/file-2054199286-css/font-awesome.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    
    <link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css"/>
    <script src="src/facebox.js" type="text/javascript"></script>
    
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="languages/locales/datepicker-en.js"></script>
  <script type="text/javascript">
   /* $(document).ready(function($) {
    $('a[rel*=facebox]').facebox()
    });*/
    $(function() {
		$('#datepicker').datepicker({

			numberOfMonths: 2,
			dateFormat: 'mm/dd/yy' ,
			showButtonPanel: true


		});

	});
    $(function() {
		$('#datepicker2').datepicker({

			numberOfMonths: 2,
			dateFormat: 'mm/dd/yy' ,
			showButtonPanel: true


		});

	});
	</script>

    <script type="text/javascript">
        function frm_sub()
        {
            avail_chk();

        }

        function avail_chk()
        {	 
           
            if(document.getElementById("datepicker").value.replace(/^\s+|\s+$/g,'')=='')
            {
              alert("Please Enter Pick-Up Date.....");
              document.getElementById("datepicker").focus();
              return false;
            }
            if(document.getElementById("ph").value=='h')
            {
              alert("Please Select Pick-Up Hour.....");
              document.getElementById("ph").focus();
              return false;
            }
           
            if(document.getElementById("datepicker2").value.replace(/^\s+|\s+$/g,'')=='')
            {
              alert("Please Enter Return Date.....");
              document.getElementById("datepicker2").focus();
              return false;
            }
            if(document.getElementById("rh").value=='h')
            {
              alert("Please Select Return Hour.....");
              document.getElementById("rh").focus();
              return false;
            }
            var pd,ph,rd,rh,diff;
            var arrpd=Array();
            var arrrd=Array();
            var arrph=Array();
            var arrrh=Array();

           arrpd=document.getElementById("datepicker").value.split("/");
            arrrd=document.getElementById("datepicker2").value.split("/");
            arrph=document.getElementById("ph").value.split(".");
            arrrh=document.getElementById("rh").value.split(".");

            pd=Date.UTC(arrpd[2],arrpd[0],arrpd[1],arrph[0]);
            rd=Date.UTC(arrrd[2],arrrd[0],arrrd[1],arrrh[0]);
            diff=(rd-pd);

            var d = new Date();
            var currdate=Date.UTC(d.getFullYear(),(d.getMonth()+1),d.getDate(),d.getHours());


             if((pd-currdate)<0)
            {
                alert("Pick-Up Date Or Hour Should Be Greater Than Today's Date Or Hour.....");
                document.getElementById("datepicker").value="";
                document.getElementById("ph").value="h";
                document.getElementById("pd").focus();
                return false;

            }
            if((rd-currdate)<0)
            {
                alert("Return Date Or Hour Should Be Greater Than Today's Date Or Hour.....");
                document.getElementById("datepicker2").value="";
                document.getElementById("rh").value="h";
                document.getElementById("rd").focus();
                return false;

            }



            if(diff<0)
            {
                alert("Return Date Or Hour Should Be Greater Than Pick-Up Date Or Hour.....");
                document.getElementById("datepicker2").value="";
                document.getElementById("rh").value="h";
                document.getElementById("rd").focus();
                return false;


            }
             if(document.getElementById("ph").value<document.getElementById("busifh").value || document.getElementById("ph").value>document.getElementById("busith").value)
            {

               alert("Pick up Time Is From :"+am_pm(document.getElementById("busifh").value)+"  To :"+am_pm(document.getElementById("busith").value)+" Please Select Your Booking Time Accordingly.....");


              return false;
            }
			 if(document.getElementById("rh").value<document.getElementById("busifhi").value || document.getElementById("rh").value>document.getElementById("busithi").value)
            {

               alert("Drop Off Time Is From :"+am_pm(document.getElementById("busifhi").value)+"  To :"+am_pm(document.getElementById("busithi").value)+" Please Select Your Booking Time Accordingly.....");


              return false;
            }
            if(document.getElementById("carstatus").value=='0')
            {
                alert("Please Select A Vehicle Status.....");
                document.getElementById("carstatus").focus();
                return false;

            }

            take_data();
           // document.getElementById("frm_avail").submit();

        }
        function am_pm(hours)
        {
           // alert("dfkjsdf");
           var arrph=Array();

            var suffix = "AM";

            arrph=hours.split(".");
            if (eval(arrph[0]) >= 12) {
            suffix = "PM";
            arrph[0] = eval(arrph[0]) - 12;
            }
            if (eval(arrph[0]) == 0) {
            arrph[0] = 12;
            }
            return eval(arrph[0])+"."+arrph[1]+" "+suffix;

        }
        /*function chk_state()
        {
          if(document.getElementById("carstatus").value=='2')
          {
            document.getElementById("carclass").style.display="block";
          }
          else
          {
            document.getElementById("carclass").style.display="none";
          }
        }  */

    </script>


    <script>
    //THIN BOX
    function details(car_id)
    {
      thinboxSetup(450,495,450);
      showThinBox(1,"popup_details.php?action=details&car_id="+car_id);
    }
    function rate_details(car_id)
    {
      thinboxSetup(450,300,450);
      showThinBox(1,"popup_ratedetails.php?action=rate_details&car_id="+car_id);
    }
    //Thin Box End
    </script>


   <!--THIN BOX-->
 <script type="text/JavaScript" src="thinBox.js"></script>
<!--Thin Box End-->
    <script type="text/JavaScript" src="script.js"></script>
    <script>
        function select_all_eq()
        {
            document.getElementById("automatic").checked=true;
            document.getElementById("manual").checked=true;
            take_data();
        }
        function unselect_all_eq()
        {
            document.getElementById("automatic").checked=false;
            document.getElementById("manual").checked=false;
            take_data();
        }



    </script>

    <script>
                    function select_all_cc()
                    {document.getElementById("class~1").checked=true;document.getElementById("class~2").checked=true;document.getElementById("class~3").checked=true;document.getElementById("class~4").checked=true;document.getElementById("class~5").checked=true;document.getElementById("class~9").checked=true;take_data();}
                   function unselect_all_cc()
                   { document.getElementById("class~1").checked=false;document.getElementById("class~2").checked=false;document.getElementById("class~3").checked=false;document.getElementById("class~4").checked=false;document.getElementById("class~5").checked=false;document.getElementById("class~9").checked=false;take_data();}
                    </script>    <script>
                    function take_data()
                    {  
                        var str="";
                        if(document.getElementById("automatic").checked==true)
                        {
                            str=str+"&arreq[]="+document.getElementById("automatic").value;
                        }
                        if(document.getElementById("manual").checked==true)
                        {
                            str=str+"&arreq[]="+document.getElementById("manual").value;
                        }if(document.getElementById("class~1").checked==true)
                        {
                            str=str+"&arrcargroup[]="+document.getElementById("class~1").value;
                        }

                        str=str+"&datepicker="+document.getElementById("datepicker").value;
                        str=str+"&ph="+document.getElementById("ph").value;
                        str=str+"&datepicker2="+document.getElementById("datepicker2").value;
                        str=str+"&rh="+document.getElementById("rh").value;
                        str=str+"&pl="+document.getElementById("pl").value;
                        str=str+"&rl="+document.getElementById("rl").value;
                        str=str+"&ch=12345";
						//alert(str);



                        if(document.getElementById("class~2").checked==true)
                        {
                            str=str+"&arrcargroup[]="+document.getElementById("class~2").value;
                        }

                        str=str+"&datepicker="+document.getElementById("datepicker").value;
                        str=str+"&ph="+document.getElementById("ph").value;
                        str=str+"&datepicker2="+document.getElementById("datepicker2").value;
                        str=str+"&rh="+document.getElementById("rh").value;
                        str=str+"&pl="+document.getElementById("pl").value;
                        str=str+"&rl="+document.getElementById("rl").value;
                        str=str+"&ch=12345";
						//alert(str);



                        if(document.getElementById("class~3").checked==true)
                        {
                            str=str+"&arrcargroup[]="+document.getElementById("class~3").value;
                        }

                        str=str+"&datepicker="+document.getElementById("datepicker").value;
                        str=str+"&ph="+document.getElementById("ph").value;
                        str=str+"&datepicker2="+document.getElementById("datepicker2").value;
                        str=str+"&rh="+document.getElementById("rh").value;
                        str=str+"&pl="+document.getElementById("pl").value;
                        str=str+"&rl="+document.getElementById("rl").value;
                        str=str+"&ch=12345";
						//alert(str);



                        if(document.getElementById("class~4").checked==true)
                        {
                            str=str+"&arrcargroup[]="+document.getElementById("class~4").value;
                        }

                        str=str+"&datepicker="+document.getElementById("datepicker").value;
                        str=str+"&ph="+document.getElementById("ph").value;
                        str=str+"&datepicker2="+document.getElementById("datepicker2").value;
                        str=str+"&rh="+document.getElementById("rh").value;
                        str=str+"&pl="+document.getElementById("pl").value;
                        str=str+"&rl="+document.getElementById("rl").value;
                        str=str+"&ch=12345";
						//alert(str);



                        if(document.getElementById("class~5").checked==true)
                        {
                            str=str+"&arrcargroup[]="+document.getElementById("class~5").value;
                        }

                        str=str+"&datepicker="+document.getElementById("datepicker").value;
                        str=str+"&ph="+document.getElementById("ph").value;
                        str=str+"&datepicker2="+document.getElementById("datepicker2").value;
                        str=str+"&rh="+document.getElementById("rh").value;
                        str=str+"&pl="+document.getElementById("pl").value;
                        str=str+"&rl="+document.getElementById("rl").value;
                        str=str+"&ch=12345";
						//alert(str);



                        if(document.getElementById("class~9").checked==true)
                        {
                            str=str+"&arrcargroup[]="+document.getElementById("class~9").value;
                        }

                        str=str+"&datepicker="+document.getElementById("datepicker").value;
                        str=str+"&ph="+document.getElementById("ph").value;
                        str=str+"&datepicker2="+document.getElementById("datepicker2").value;
                        str=str+"&rh="+document.getElementById("rh").value;
                        str=str+"&pl="+document.getElementById("pl").value;
                        str=str+"&rl="+document.getElementById("rl").value;
                        str=str+"&ch=12345";
						//alert(str);



                        filter_data_now(str);


      }
                    </script>    <script type="text/JavaScript">
     $(document).ready(function(){
      // $('a[rel*=facebox]').facebox();
       $('.dropdown-toggle').click(function(){
           var current_drop = $(this).parent().find('.dropdown-menu');
           $('.dropdown-menu').not(current_drop).each(function(){
	  	         $(this).slideUp();
	  	    });
           current_drop.slideToggle();
	  		
	  		
       });
       $('.reservation_location1 li').click(function(){
		  var title = $(this).find('a').html();
		  var val = $(this).find('div').html();
		  //alert(title+' '+val);
		  $('#reservation_location1_select_val').html(title);
		  $('#pl').val(val);
		  $(this).parent().slideUp();
       });
       
       $('.reservation_time1_ul li').click(function(){
		  var title = $(this).find('a').html();
		  var val = $(this).find('div').html();
		  //alert(title+' '+val);
		  $('#reservation_time1_select_val').html(title);
		  $('#ph').val(val);
		  $(this).parent().slideUp();
	  
	  });
       
       $('.reservation_location2 li').click(function(){
		  var title = $(this).find('a').html();
		  var val = $(this).find('div').html();
		  //alert(title+' '+val);
		  $('#reservation_location2_select_val').html(title);
		  $('#rl').val(val);
		  $(this).parent().slideUp();
       });
       
       $('.reservation_time2_ul li').click(function(){
		  var title = $(this).find('a').html();
		  var val = $(this).find('div').html();
		  //alert(title+' '+val);
		  $('#reservation_time2_select_val').html(title);
		  $('#rh').val(val);
		  $(this).parent().slideUp();
	  
	  });
       
       $('#reservation_location1_select_val').html($('.reservation_location1 li:first-child').find('a').html());
       $('#reservation_time1_select_val').html($('#ph').val());
       
       $('#reservation_location2_select_val').html($('.reservation_location2 li:first-child').find('a').html());
       $('#reservation_time2_select_val').html($('#rh').val());

       $('.dropdown-menu').each(function(){
			var length = $(this).find('li').length;
			if(length >3){
				$(this).css('height','224px');
				//alert('1');
			}
			else{
				$(this).css('height','70px');
				//alert($(this).parent.html());
				//alert('2');
			}
		});

       
     });
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
 <!--book page start--->
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
 <div class="row">
  
  <form style="margin:0px;" name="frm_avail" id="frm_avail" action="book.php?action=available" method="post">
 <div class="col-lg-4 col-sm-5">
 <div class="bsummary_box clearfix">
 <div class="bs_top">Booking Summary</div>
 <div class="bs_bettom clearfix">
 <div class="bs_header">Pick Up</div>
 <div class="jb_drop pull-right clearfix">
               <div class="btn-group pull-right" style="width:100%;">
                 <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="width:100%;">
                   <span data-bind="label" id="reservation_location1_select_val">Select One</span>&nbsp;<span class="caret"></span>
                    </button>
                 <input type="hidden" name="action" value="available" />
                                              <select name="pl" class="field_5" id="pl" style="display:none;">
                             
                                                            <option selected value="3">Main Office</option>
                                                                                          <option value="4">Downtown Branch</option>
                                                                                        </select>
                 <ul class="dropdown-menu reservation_location1" role="menu">
                                          <li><a href="javascript:void(0);">Main Office</a><div style="display: none;">3</div></li>
                                                <li><a href="javascript:void(0);">Downtown Branch</a><div style="display: none;">4</div></li>
                                           
                 </ul>
                 
               </div>
</div>
<div class="jb_drop pull-right clearfix">
<div class="form-group">
  
  <input type="text" class="form-control" value="03/09/2017" name="datepicker" id="datepicker" readonly="readonly" />
  <div class="btn-group pull-right">
                 <button type="button" class="btn btn-default dropdown-toggle pck_tme" data-toggle="dropdown" >
                   <span data-bind="label" id="reservation_time1_select_val">00:00</span>&nbsp;<span class="caret"></span>
                    </button>
                 <select name="ph" class="field_7" id="ph" style="display: none;">
                              <option value="h">Time</option>
                                                            <option value="00.00">12:00 AM</option>
                                                            <option value="00.30">12:30 AM</option>
                                                            <option value="01.00">1:00 AM</option>
                                                            <option value="01.30">1:30 AM</option>
                                                            <option value="02.00">2:00 AM</option>
                                                            <option value="02.30">2:30 AM</option>
                                                            <option value="03.00">3:00 AM</option>
                                                            <option value="03.30">3:30 AM</option>
                                                            <option value="04.00">4:00 AM</option>
                                                            <option value="04.30">4:30 AM</option>
                                                            <option value="05.00">5:00 AM</option>
                                                            <option value="05.30">5:30 AM</option>
                                                            <option value="06.00">6:00 AM</option>
                                                            <option value="06.30">6:30 AM</option>
                                                            <option value="07.00">7:00 AM</option>
                                                            <option value="07.30">7:30 AM</option>
                                                            <option value="08.00">8:00 AM</option>
                                                            <option value="08.30">8:30 AM</option>
                                                            <option value="09.00">9:00 AM</option>
                                                            <option value="09.30">9:30 AM</option>
                                                            <option value="10.00">10:00 AM</option>
                                                            <option value="10.30">10:30 AM</option>
                                                            <option value="11.00">11:00 AM</option>
                                                            <option value="11.30">11:30 AM</option>
                                                            <option selected value="12:00 PM">12:00 PM</option>
                                                            <option value="12.30">12:30 PM</option>
                                                            <option value="13.00">1:00 PM</option>
                                                            <option value="13.30">1:30 PM</option>
                                                            <option value="14.00">2:00 PM</option>
                                                            <option value="14.30">2:30 PM</option>
                                                            <option value="15.00">3:00 PM</option>
                                                            <option value="15.30">3:30 PM</option>
                                                            <option value="16.00">4:00 PM</option>
                                                            <option value="16.30">4:30 PM</option>
                                                            <option value="17.00">5:00 PM</option>
                                                            <option value="17.30">5:30 PM</option>
                                                            <option value="18.00">6:00 PM</option>
                                                            <option value="18.30">6:30 PM</option>
                                                            <option value="19.00">7:00 PM</option>
                                                            <option value="19.30">7:30 PM</option>
                                                            <option value="20.00">8:00 PM</option>
                                                            <option value="20.30">8:30 PM</option>
                                                            <option value="21.00">9:00 PM</option>
                                                            <option value="21.30">9:30 PM</option>
                                                            <option value="22.00">10:00 PM</option>
                                                            <option value="22.30">10:30 PM</option>
                                                            <option value="23.00">11:00 PM</option>
                                                            <option value="23.30">11:30 PM</option>
                                                </select>
                 <ul class="dropdown-menu reservation_time1_ul" role="menu">
                    <li><a href="javascript:void(0);">Time</a><div style="display: none;">h</div></li>

                                            <li><a href="javascript:void(0);">12:00 AM</a><div style="display: none;">00.00</div></li>
                                                <li><a href="javascript:void(0);">12:30 AM</a><div style="display: none;">00.30</div></li>
                                                <li><a href="javascript:void(0);">1:00 AM</a><div style="display: none;">01.00</div></li>
                                                <li><a href="javascript:void(0);">1:30 AM</a><div style="display: none;">01.30</div></li>
                                                <li><a href="javascript:void(0);">2:00 AM</a><div style="display: none;">02.00</div></li>
                                                <li><a href="javascript:void(0);">2:30 AM</a><div style="display: none;">02.30</div></li>
                                                <li><a href="javascript:void(0);">3:00 AM</a><div style="display: none;">03.00</div></li>
                                                <li><a href="javascript:void(0);">3:30 AM</a><div style="display: none;">03.30</div></li>
                                                <li><a href="javascript:void(0);">4:00 AM</a><div style="display: none;">04.00</div></li>
                                                <li><a href="javascript:void(0);">4:30 AM</a><div style="display: none;">04.30</div></li>
                                                <li><a href="javascript:void(0);">5:00 AM</a><div style="display: none;">05.00</div></li>
                                                <li><a href="javascript:void(0);">5:30 AM</a><div style="display: none;">05.30</div></li>
                                                <li><a href="javascript:void(0);">6:00 AM</a><div style="display: none;">06.00</div></li>
                                                <li><a href="javascript:void(0);">6:30 AM</a><div style="display: none;">06.30</div></li>
                                                <li><a href="javascript:void(0);">7:00 AM</a><div style="display: none;">07.00</div></li>
                                                <li><a href="javascript:void(0);">7:30 AM</a><div style="display: none;">07.30</div></li>
                                                <li><a href="javascript:void(0);">8:00 AM</a><div style="display: none;">08.00</div></li>
                                                <li><a href="javascript:void(0);">8:30 AM</a><div style="display: none;">08.30</div></li>
                                                <li><a href="javascript:void(0);">9:00 AM</a><div style="display: none;">09.00</div></li>
                                                <li><a href="javascript:void(0);">9:30 AM</a><div style="display: none;">09.30</div></li>
                                                <li><a href="javascript:void(0);">10:00 AM</a><div style="display: none;">10.00</div></li>
                                                <li><a href="javascript:void(0);">10:30 AM</a><div style="display: none;">10.30</div></li>
                                                <li><a href="javascript:void(0);">11:00 AM</a><div style="display: none;">11.00</div></li>
                                                <li><a href="javascript:void(0);">11:30 AM</a><div style="display: none;">11.30</div></li>
                                                <li><a href="javascript:void(0);">12:00 PM</a><div style="display: none;">12.00</div></li>
                                                <li><a href="javascript:void(0);">12:30 PM</a><div style="display: none;">12.30</div></li>
                                                <li><a href="javascript:void(0);">1:00 PM</a><div style="display: none;">13.00</div></li>
                                                <li><a href="javascript:void(0);">1:30 PM</a><div style="display: none;">13.30</div></li>
                                                <li><a href="javascript:void(0);">2:00 PM</a><div style="display: none;">14.00</div></li>
                                                <li><a href="javascript:void(0);">2:30 PM</a><div style="display: none;">14.30</div></li>
                                                <li><a href="javascript:void(0);">3:00 PM</a><div style="display: none;">15.00</div></li>
                                                <li><a href="javascript:void(0);">3:30 PM</a><div style="display: none;">15.30</div></li>
                                                <li><a href="javascript:void(0);">4:00 PM</a><div style="display: none;">16.00</div></li>
                                                <li><a href="javascript:void(0);">4:30 PM</a><div style="display: none;">16.30</div></li>
                                                <li><a href="javascript:void(0);">5:00 PM</a><div style="display: none;">17.00</div></li>
                                                <li><a href="javascript:void(0);">5:30 PM</a><div style="display: none;">17.30</div></li>
                                                <li><a href="javascript:void(0);">6:00 PM</a><div style="display: none;">18.00</div></li>
                                                <li><a href="javascript:void(0);">6:30 PM</a><div style="display: none;">18.30</div></li>
                                                <li><a href="javascript:void(0);">7:00 PM</a><div style="display: none;">19.00</div></li>
                                                <li><a href="javascript:void(0);">7:30 PM</a><div style="display: none;">19.30</div></li>
                                                <li><a href="javascript:void(0);">8:00 PM</a><div style="display: none;">20.00</div></li>
                                                <li><a href="javascript:void(0);">8:30 PM</a><div style="display: none;">20.30</div></li>
                                                <li><a href="javascript:void(0);">9:00 PM</a><div style="display: none;">21.00</div></li>
                                                <li><a href="javascript:void(0);">9:30 PM</a><div style="display: none;">21.30</div></li>
                                                <li><a href="javascript:void(0);">10:00 PM</a><div style="display: none;">22.00</div></li>
                                                <li><a href="javascript:void(0);">10:30 PM</a><div style="display: none;">22.30</div></li>
                                                <li><a href="javascript:void(0);">11:00 PM</a><div style="display: none;">23.00</div></li>
                                                <li><a href="javascript:void(0);">11:30 PM</a><div style="display: none;">23.30</div></li>
                                           
                 </ul>
                 
               </div>
</div>
</div>
<div class="bs_bottom" id="dt_from_show">Wed 31 Dec 1969</div>
 <div class="bs_header">Drop Off</div>
 <div class="jb_drop pull-right clearfix">
               <div class="btn-group pull-right" style="width:100%;">
                 <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="width:100%;">
                   <span data-bind="label" id="reservation_location2_select_val">Select One</span>&nbsp;<span class="caret"></span>
                    </button>
                 
                                                           <select name="rl" class="field_5" id="rl" style="display: none;">
                                            
                                                                                        <option selected value="3">Main Office</option>
                                                                                        <option value="4">Downtown Branch</option>
                                                                                      </select>
                 <ul class="dropdown-menu reservation_location2" role="menu">
                                          <li><a href="javascript:void(0);">Main Office</a><div style="display:none;">3</div></li>
                                              <li><a href="javascript:void(0);">Downtown Branch</a><div style="display:none;">4</div></li>
                                         
                 </ul>
                 
               </div>
</div>
<div class="jb_drop pull-right clearfix">
<div class="form-group">
  
  <input type="text" value="03/10/2017" class="form-control" name="datepicker2" id="datepicker2" readonly="readonly" />
  <div class="btn-group pull-right">
                 <button type="button" class="btn btn-default dropdown-toggle pck_tme" data-toggle="dropdown">
                   <span data-bind="label" id="reservation_time2_select_val">00:00</span>&nbsp;<span class="caret"></span>
                    </button>
                 
                 
                 <select name="rh" class="field_7" id="rh" style="display: none;">
                                    <option value="h">Time</option>
                                                                        <option value="00.00">12:00 AM</option>
                                                                        <option value="00.30">12:30 AM</option>
                                                                        <option value="01.00">1:00 AM</option>
                                                                        <option value="01.30">1:30 AM</option>
                                                                        <option value="02.00">2:00 AM</option>
                                                                        <option value="02.30">2:30 AM</option>
                                                                        <option value="03.00">3:00 AM</option>
                                                                        <option value="03.30">3:30 AM</option>
                                                                        <option value="04.00">4:00 AM</option>
                                                                        <option value="04.30">4:30 AM</option>
                                                                        <option value="05.00">5:00 AM</option>
                                                                        <option value="05.30">5:30 AM</option>
                                                                        <option value="06.00">6:00 AM</option>
                                                                        <option value="06.30">6:30 AM</option>
                                                                        <option value="07.00">7:00 AM</option>
                                                                        <option value="07.30">7:30 AM</option>
                                                                        <option value="08.00">8:00 AM</option>
                                                                        <option value="08.30">8:30 AM</option>
                                                                        <option value="09.00">9:00 AM</option>
                                                                        <option value="09.30">9:30 AM</option>
                                                                        <option value="10.00">10:00 AM</option>
                                                                        <option value="10.30">10:30 AM</option>
                                                                        <option value="11.00">11:00 AM</option>
                                                                        <option value="11.30">11:30 AM</option>
                                                                        <option selected value="12:00 PM">12:00 PM</option>
                                                                        <option value="12.30">12:30 PM</option>
                                                                        <option value="13.00">1:00 PM</option>
                                                                        <option value="13.30">1:30 PM</option>
                                                                        <option value="14.00">2:00 PM</option>
                                                                        <option value="14.30">2:30 PM</option>
                                                                        <option value="15.00">3:00 PM</option>
                                                                        <option value="15.30">3:30 PM</option>
                                                                        <option value="16.00">4:00 PM</option>
                                                                        <option value="16.30">4:30 PM</option>
                                                                        <option value="17.00">5:00 PM</option>
                                                                        <option value="17.30">5:30 PM</option>
                                                                        <option value="18.00">6:00 PM</option>
                                                                        <option value="18.30">6:30 PM</option>
                                                                        <option value="19.00">7:00 PM</option>
                                                                        <option value="19.30">7:30 PM</option>
                                                                        <option value="20.00">8:00 PM</option>
                                                                        <option value="20.30">8:30 PM</option>
                                                                        <option value="21.00">9:00 PM</option>
                                                                        <option value="21.30">9:30 PM</option>
                                                                        <option value="22.00">10:00 PM</option>
                                                                        <option value="22.30">10:30 PM</option>
                                                                        <option value="23.00">11:00 PM</option>
                                                                        <option value="23.30">11:30 PM</option>
                                                                      </select>
                 
                 <ul class="dropdown-menu reservation_time2_ul" role="menu">
                      <li><a href="javascript:void(0);">Time</a><div style="display: none;">h</div></li>

                                        <li><a href="javascript:void(0);">12:00 AM</a><div style="display: none;">00.00</div></li>
                                            <li><a href="javascript:void(0);">12:30 AM</a><div style="display: none;">00.30</div></li>
                                            <li><a href="javascript:void(0);">1:00 AM</a><div style="display: none;">01.00</div></li>
                                            <li><a href="javascript:void(0);">1:30 AM</a><div style="display: none;">01.30</div></li>
                                            <li><a href="javascript:void(0);">2:00 AM</a><div style="display: none;">02.00</div></li>
                                            <li><a href="javascript:void(0);">2:30 AM</a><div style="display: none;">02.30</div></li>
                                            <li><a href="javascript:void(0);">3:00 AM</a><div style="display: none;">03.00</div></li>
                                            <li><a href="javascript:void(0);">3:30 AM</a><div style="display: none;">03.30</div></li>
                                            <li><a href="javascript:void(0);">4:00 AM</a><div style="display: none;">04.00</div></li>
                                            <li><a href="javascript:void(0);">4:30 AM</a><div style="display: none;">04.30</div></li>
                                            <li><a href="javascript:void(0);">5:00 AM</a><div style="display: none;">05.00</div></li>
                                            <li><a href="javascript:void(0);">5:30 AM</a><div style="display: none;">05.30</div></li>
                                            <li><a href="javascript:void(0);">6:00 AM</a><div style="display: none;">06.00</div></li>
                                            <li><a href="javascript:void(0);">6:30 AM</a><div style="display: none;">06.30</div></li>
                                            <li><a href="javascript:void(0);">7:00 AM</a><div style="display: none;">07.00</div></li>
                                            <li><a href="javascript:void(0);">7:30 AM</a><div style="display: none;">07.30</div></li>
                                            <li><a href="javascript:void(0);">8:00 AM</a><div style="display: none;">08.00</div></li>
                                            <li><a href="javascript:void(0);">8:30 AM</a><div style="display: none;">08.30</div></li>
                                            <li><a href="javascript:void(0);">9:00 AM</a><div style="display: none;">09.00</div></li>
                                            <li><a href="javascript:void(0);">9:30 AM</a><div style="display: none;">09.30</div></li>
                                            <li><a href="javascript:void(0);">10:00 AM</a><div style="display: none;">10.00</div></li>
                                            <li><a href="javascript:void(0);">10:30 AM</a><div style="display: none;">10.30</div></li>
                                            <li><a href="javascript:void(0);">11:00 AM</a><div style="display: none;">11.00</div></li>
                                            <li><a href="javascript:void(0);">11:30 AM</a><div style="display: none;">11.30</div></li>
                                            <li><a href="javascript:void(0);">12:00 PM</a><div style="display: none;">12.00</div></li>
                                            <li><a href="javascript:void(0);">12:30 PM</a><div style="display: none;">12.30</div></li>
                                            <li><a href="javascript:void(0);">1:00 PM</a><div style="display: none;">13.00</div></li>
                                            <li><a href="javascript:void(0);">1:30 PM</a><div style="display: none;">13.30</div></li>
                                            <li><a href="javascript:void(0);">2:00 PM</a><div style="display: none;">14.00</div></li>
                                            <li><a href="javascript:void(0);">2:30 PM</a><div style="display: none;">14.30</div></li>
                                            <li><a href="javascript:void(0);">3:00 PM</a><div style="display: none;">15.00</div></li>
                                            <li><a href="javascript:void(0);">3:30 PM</a><div style="display: none;">15.30</div></li>
                                            <li><a href="javascript:void(0);">4:00 PM</a><div style="display: none;">16.00</div></li>
                                            <li><a href="javascript:void(0);">4:30 PM</a><div style="display: none;">16.30</div></li>
                                            <li><a href="javascript:void(0);">5:00 PM</a><div style="display: none;">17.00</div></li>
                                            <li><a href="javascript:void(0);">5:30 PM</a><div style="display: none;">17.30</div></li>
                                            <li><a href="javascript:void(0);">6:00 PM</a><div style="display: none;">18.00</div></li>
                                            <li><a href="javascript:void(0);">6:30 PM</a><div style="display: none;">18.30</div></li>
                                            <li><a href="javascript:void(0);">7:00 PM</a><div style="display: none;">19.00</div></li>
                                            <li><a href="javascript:void(0);">7:30 PM</a><div style="display: none;">19.30</div></li>
                                            <li><a href="javascript:void(0);">8:00 PM</a><div style="display: none;">20.00</div></li>
                                            <li><a href="javascript:void(0);">8:30 PM</a><div style="display: none;">20.30</div></li>
                                            <li><a href="javascript:void(0);">9:00 PM</a><div style="display: none;">21.00</div></li>
                                            <li><a href="javascript:void(0);">9:30 PM</a><div style="display: none;">21.30</div></li>
                                            <li><a href="javascript:void(0);">10:00 PM</a><div style="display: none;">22.00</div></li>
                                            <li><a href="javascript:void(0);">10:30 PM</a><div style="display: none;">22.30</div></li>
                                            <li><a href="javascript:void(0);">11:00 PM</a><div style="display: none;">23.00</div></li>
                                            <li><a href="javascript:void(0);">11:30 PM</a><div style="display: none;">23.30</div></li>
                                         
                 </ul>
                 
               </div>
</div>
</div>
<div class="bs_bottom clearfix" id="dt_till_show">Wed 31 Dec 1969</div>
<a href="javascript:frm_sub();"><button type="button" value="" class="jCheck_btn">Change</button></a>
 </div>
 </div>
 
 <br />
<b>Fatal error</b>:  Call to a member function number_of_cars_left_panel() on a non-object in <b>/home/erpdemo/public_html/res-trial-kiran/includes/leftpanel_book.php</b> on line <b>247</b><br />

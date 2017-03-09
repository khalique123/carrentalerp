
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
                <title>Easy Reservation Online Home Page </title>
                <meta name="description" content="This is the home page of Easy Reservations Online" />
                <meta name="keywords" content="" />
                <link href="<?php echo e(asset('/css/booking/style.css')); ?>" rel="stylesheet" type="text/css" />
                <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
                <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
                    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />
                    <link rel="stylesheet" href="css/bjqs.css" type="text/css">
                        <link href="http://designers.hubspot.com/hs-fs/hub/327485/file-2054199286-css/font-awesome.css" rel="stylesheet">
                            <link rel="stylesheet" href="jq/jquery-ui.css">
                                <script src="<?php echo e(asset('jq/jquery.min.js')); ?>"></script>
                                <script src="<?php echo e(asset('jq/external/jquery/jquery.js')); ?>"></script>
                                <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
                                <script src="<?php echo e(asset('jq/jquery-ui.js')); ?>"></script>
                                <script src="<?php echo e(asset('languages/locales/datepicker-en.js')); ?>"></script> 
                                </head>
                                <script type="text/javascript">
function submitform(lng)
{
    //alert(lng);
    var v;
    if (lng == 1) {
        v = "en";
    }
    if (lng == 2) {
        v = "es";
    }
    if (lng == 3) {
        v = "fr";
    }
    if (lng == 4) {
        v = "nl";
    }
    if (lng == 5) {
        v = "0";
    }
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
                                                                        <div class="head_ph_num">Phone number here </div>
                                                                        <div class="head_ph_icon">
                                                                        </div> 
                                                                        <div class="jsales"><a href="">Crap Data/Change </a></div>
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
                                                <script type="text/javascript">
                                                    $(function () {
                                                        $('#datepicker').datepicker({
                                                            numberOfMonths: 2,
                                                            dateFormat: 'mm/dd/yy',
                                                            showButtonPanel: true
                                                        });
                                                    });
                                                    $(function () {
                                                        $('#datepicker2').datepicker({
                                                            numberOfMonths: 2,
                                                            dateFormat: 'mm/dd/yy',
                                                            showButtonPanel: true
                                                        });
                                                    });
                                                    $(document).ready(function () {
                                                        $('.dropdown-menu').each(function () {
                                                            var length = $(this).find('li').length;
                                                            if (length > 3) {
                                                                $(this).css('height', '224px');
                                                                //alert('1');
                                                            } else {
                                                                $(this).css('height', '70px');
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
                                                        $('.location_one_drop_ul li').click(function () {
                                                            var title = $(this).find('a').html();
                                                            var val = $(this).find('div').html();
                                                            //alert(title+' '+val);
                                                            $('#location_drop_select_val').html(title);
                                                            $('#pl').val(val);
                                                            //$(this).parent().slideUp();
                                                        });
                                                        $('.time_one_drop_ul li').click(function () {
                                                            var title = $(this).find('a').html();
                                                            var val = $(this).find('div').html();
                                                            //alert(title+' '+val);
                                                            $('#ph').val(val);
                                                            $('#time1_span').html(title);
                                                            //$(this).parent().slideUp();
                                                        });
                                                        $('.return_location_drop li').click(function () {
                                                            var title = $(this).find('a').html();
                                                            var val = $(this).find('div').html();
                                                            $('#return_location_span').html(title);
                                                            //$(this).parent().slideUp();
                                                            $('#rl').val(val);
                                                            //alert(title+' '+val);
                                                        });
                                                        $('.return_location_time2 li').click(function () {
                                                            var title = $(this).find('a').html();
                                                            var val = $(this).find('div').html();
                                                            $('#return_location_time2_span').html(title);
                                                            //$(this).parent().slideUp();
                                                            $('#rh').val(val);
                                                        });
                                                        $('.driver_country_drop li').click(function () {
                                                            var title = $(this).find('a').html();
                                                            var val = $(this).find('div').html();
                                                            //alert(title+' '+val);
                                                            $('#driver_country_drop_span').html(title);
                                                            //$(this).parent().slideUp();
                                                            $('#country').val(val);
                                                        });
                                                        $('#time1_span').html($('#ph').val());
                                                        $('#location_drop_select_val').html($('.location_one_drop_ul li:first-child').find('a').html());
                                                        $('#return_location_span').html($('.return_location_drop li:first-child').find('a').html());
                                                        $('#driver_country_drop_span').html($("#country option:selected").text());
                                                        //alert($("#country option:selected").text());
                                                        //alert($('.return_location_time2 li:first-child').find('a').html());
                                                        $('#return_location_time2_span').html($('#rh').val());
                                                    });
                                                    // validation
                                                </script>
                                                <script type="text/javascript">
                                                    function frm_sub()
                                                    {
                                                        //alert('work');
                                                        avail_chk();
                                                    }
                                                    function avail_chk()
                                                    {
                                                        if (document.getElementById("datepicker").value.replace(/^\s+|\s+$/g, '') == '')
                                                        {
                                                            alert("Please Enter Pick-Up Date.....");
                                                            document.getElementById("datepicker").focus();
                                                            return false;
                                                        }
                                                        if (document.getElementById("ph").value == 'h')
                                                        {
                                                            alert("Please Select Pick-Up Time.....");
                                                            document.getElementById("ph").focus();
                                                            return false;
                                                        }
                                                        if (document.getElementById("datepicker2").value.replace(/^\s+|\s+$/g, '') == '')
                                                        {
                                                            alert("Please Enter Return Date.....");
                                                            document.getElementById("datepicker2").focus();
                                                            return false;
                                                        }
                                                        if (document.getElementById("rh").value == 'h')
                                                        {
                                                            alert("Please Select Return Time.....");
                                                            document.getElementById("rh").focus();
                                                            return false;
                                                        }
                                                        //alert('ok');
                                                        var pd, ph, rd, rh, diff;
                                                        var arrpd = Array();
                                                        var arrrd = Array();
                                                        var arrph = Array();
                                                        var arrrh = Array();
                                                        arrpd = document.getElementById("datepicker").value.split("/");
                                                        arrrd = document.getElementById("datepicker2").value.split("/");
                                                        arrph = document.getElementById("ph").value.split(".");
                                                        arrrh = document.getElementById("rh").value.split(".");
                                                        pd = Date.UTC(arrpd[2], arrpd[0] - 1, arrpd[1], arrph[0]);
                                                        rd = Date.UTC(arrrd[2], arrrd[0] - 1, arrrd[1], arrrh[0]);
                                                        diff = (rd - pd);
                                                        var d = new Date();
                                                        var currdate = Date.UTC(d.getFullYear(), (d.getMonth()), d.getDate(), d.getHours());
                                                        var xd = new Date(pd);
                                                        var yd = new Date(rd);
                                                        if ((pd - currdate) < 0)
                                                        {
                                                            alert("Pick-Up Date Or Time Should Be Greater Than Today's Date Or Time.....");
                                                            document.getElementById("datepicker").value = "";
                                                            document.getElementById("ph").value = "h";
                                                            document.getElementById("datepicker").focus();
                                                            return false;
                                                        }
                                                        if ((rd - currdate) < 0)
                                                        {
                                                            alert("Return Date Or Time Should Be Greater Than Today's Date Or Time.....");
                                                            document.getElementById("datepicker2").value = "";
                                                            document.getElementById("rh").value = "h";
                                                            document.getElementById("datepicker2").focus();
                                                            return false;
                                                        }
                                                        if (diff < 0)
                                                        {
                                                            alert(xd + " " + yd + "Return Date Or Time Should Be Greater Than Pick-Up Date Or Time.....");
                                                            document.getElementById("datepicker2").value = "";
                                                            document.getElementById("rh").value = "h";
                                                            document.getElementById("datepicker2").focus();
                                                            return false;
                                                        }
                                                        if (document.getElementById("ph").value < document.getElementById("busifh").value || document.getElementById("ph").value > document.getElementById("busith").value)
                                                        {
                                                            alert("Pick up Time Is From :" + am_pm(document.getElementById("busifh").value) + "  To :" + am_pm(document.getElementById("busith").value) + " Please Select Your Booking Time Accordingly.....");
                                                            return false;
                                                        }
                                                        if (document.getElementById("rh").value < document.getElementById("busifhi").value || document.getElementById("rh").value > document.getElementById("busithi").value)
                                                        {
                                                            alert("Drop Off Time Is From :" + am_pm(document.getElementById("busifhi").value) + "  To :" + am_pm(document.getElementById("busithi").value) + " Please Select Your Booking Time Accordingly.....");
                                                            return false;
                                                        }
                                                        //alert('1');
                                                        if (document.getElementById("da").value.replace(/^\s+|\s+$/g, '') == '')
                                                        {
                                                            alert("Please Enter Driver's Age.....");
                                                            document.getElementById("da").focus();
                                                            return false;
                                                        }
                                                        //alert('2');
                                                        if (isNaN(document.getElementById("da").value))
                                                        {
                                                            alert("Please Enter Driver's Age As Numeric Value.....");
                                                            document.getElementById("da").value = "";
                                                            document.getElementById("da").focus();
                                                            return false;
                                                        }
                                                        if (document.getElementById("da").value < document.getElementById("oda").value)
                                                        {
                                                            alert("Driver's Age Should Be Minimum " + document.getElementById("oda").value + ".....");
                                                            document.getElementById("da").value = "";
                                                            document.getElementById("da").focus();
                                                            return false;
                                                        }
                                                        if (document.getElementById("country").value == '0')
                                                        {
                                                            alert("Please Select Driver's Country.....");
                                                            document.getElementById("country").focus();
                                                            return false;
                                                        }
                                                        document.getElementById("frm_avail").submit();
                                                    }
                                                    function am_pm(hours)
                                                    {
                                                        // alert("dfkjsdf");
                                                        var arrph = Array();
                                                        var suffix = "AM";
                                                        arrph = hours.split(".");
                                                        if (eval(arrph[0]) >= 12) {
                                                            suffix = "PM";
                                                            arrph[0] = eval(arrph[0]) - 12;
                                                        }
                                                        if (eval(arrph[0]) == 0) {
                                                            arrph[0] = 12;
                                                        }
                                                        return eval(arrph[0]) + "." + arrph[1] + " " + suffix;
                                                    }
                                                    function agent_chk()
                                                    {
                                                        if (document.getElementById("username").value.replace(/^\s+|\s+$/g, '') == '')
                                                        {
                                                            alert("Please Enter User Name Of The Agent.....");
                                                            document.getElementById("username").focus();
                                                            return false;
                                                        }
                                                        if (document.getElementById("password").value.replace(/^\s+|\s+$/g, '') == '')
                                                        {
                                                            alert("Please Enter Password Of The Agent.....");
                                                            document.getElementById("password").focus();
                                                            return false;
                                                        }
                                                    }
                                                </script>
                                                <!--header--->
                                                <!--banner & Rates --->
                                                <div class="row home_left_first_block">
                                                    <form style="margin:0px;" name="frm_avail" id="frm_avail" action="book.php" method="post" >
                                                        <div class="col-xs-12 col-sm-5 col-md-4" style=" padding:0;">
                                                            <div class="j-Rates">Get Rates & Reservations</div>
                                                            <div class="j-rates_bottom">
                                                                <!--form--->
                                                                <div class="j-rates_tbox"><span>Pick-up Date & Location</span></div>
                                                                <div class="j-rates_tbox">
                                                                    <div class="j-r_left pull-left clearfix">
                                                                        <span>Pick-up Location <b>*</b></span>
                                                                        <input type="hidden" name="action" value="available" />
                                                                        <input type="hidden" name="carstatus" value="2" />
                                                                        <span>Pick-up Date<b>*</b></span>
                                                                    </div>
                                                                    <div class="j-r_right pull-right clearfix">
                                                                        <div class="btn-group pull-right" style="width:100%;">
                                                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="width:100%;">
                                                                                <span data-bind="label" id="location_drop_select_val">Select One</span>&nbsp;<span class="caret"></span>
                                                                            </button>
                                                                            <ul class="dropdown-menu location_one_drop_ul" role="menu">
                                                                            <?php $__currentLoopData = $branches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $branch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                <li><a href="javascript:void(0);"><?php echo e($branch->name); ?></a>
                                                                                    <div style="display:none;" class="location1"><?php echo e($branch->id); ?></div>
                                                                                </li>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                
                                                                            </ul>
                                                                            <select name="pl" class="field_2 location_one_drop_select" id="pl" style="display:none;">
                                                                            <?php $__currentLoopData = $branches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $branch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                <option value="<?php echo e($branch->id); ?>"><?php echo e($branch->name); ?></option>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="j-r_right pull-right clearfix">
                                                                        <div class="form-group">
                                                                            <input type="text" value="03/09/2017" name="datepicker" class="form-control datepick_bx" id="datepicker" size="12" readonly>
                                                                                <div class="btn-group pull-right">
                                                                                    <button type="button" class="btn btn-default dropdown-toggle pck_tme" data-toggle="dropdown">
                                                                                        <span data-bind="label" id="time1_span">00:00</span>&nbsp;<span class="caret_time_drop"></span>
                                                                                    </button>
                                                                                    <ul class="dropdown-menu time_one_drop_ul" role="menu">
                                                                                        <li><a href="javascript:void(0);">Time</a><div style="display:none;">h</div></li>
                                                                                        <?php $__currentLoopData = $static_times; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $time): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                        <li><a href="javascript:void(0);"><?php echo e($time->time_am_pm_format); ?></a><div style="display:none;"><?php echo e($time->time_24_hr_format); ?></div></li>
                                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                    </ul>
                                                                                    <select name="ph" id="ph" style="display:none;">
                                                                                        <option value="h" >Time</option>
                                                                                        <?php $__currentLoopData = $static_times; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $time): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                        <option value="<?php echo e($time->time_24_hr_format); ?>"><?php echo e($time->time_am_pm_format); ?></option>
                                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                    </select>
                                                                                </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--form--->
                                                                <div class="j-rates_tbox"><span>Return Date & Location</span></div>
                                                                <div class="j-rates_tbox">
                                                                    <div class="j-r_left pull-left">
                                                                        <span>Return Location<b>*</b></span>
                                                                        <span>Return Date<b>*</b></span>
                                                                    </div>
                                                                    <div class="j-r_right pull-right">
                                                                        <div class="btn-group pull-right clearfix" style="width:100%;">
                                                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="width:100%;">
                                                                                <span data-bind="label" id="return_location_span">Select One</span>&nbsp;<span class="caret"></span>
                                                                            </button>
                                                                            <ul class="dropdown-menu return_location_drop" role="menu">
                                                                            <?php $__currentLoopData = $branches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $branch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                <li><a href="javascript:void(0);"><?php echo e($branch->name); ?></a><div style="display:none;"><?php echo e($branch->id); ?></div></li>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                            </ul>
                                                                            <select name="rl" class="field_2" id="rl" style="display:none;">
                                                                            <?php $__currentLoopData = $branches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $branch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                <option value="<?php echo e($branch->id); ?>"><?php echo e($branch->name); ?></option>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                            </select>                    
                                                                        </div>
                                                                    </div>
                                                                    <div class="j-r_right pull-right clearfix">
                                                                        <div class="form-group">
                                                                            <input type="text"  value="03/10/2017" name="datepicker2" class="form-control datepick_bx"  id="datepicker2" size="12" readonly>          
                                                                                <div class="btn-group pull-right">
                                                                                    <button type="button" class="btn btn-default dropdown-toggle pck_tme" data-toggle="dropdown">
                                                                                        <span data-bind="label" id="return_location_time2_span">00:00</span>&nbsp;<span class="caret_time_drop"></span>
                                                                                    </button>
                                                                                    <ul class="dropdown-menu return_location_time2" role="menu">
                                                                                        <li><a href="javascript:void(0);">Time</a><div style="display:none;">h</div></li>
                                                                                        <?php $__currentLoopData = $static_times; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $time): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                        <li><a href="javascript:void(0);"><?php echo e($time->time_am_pm_format); ?></a><div style="display:none;"><?php echo e($time->time_24_hr_format); ?></div></li>
                                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                    </ul>
                                                                                    <select name="rh" class="field_3" id="rh" style="display:none;">
                                                                                        <option value="h">Time</option>
                                                                                        <?php $__currentLoopData = $static_times; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $time): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                        <option value="<?php echo e($time->time_24_hr_format); ?>">{$time->time_am_pm_format}}</option>
                                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                    </select>
                                                                                </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--form--->
                                                                <div class="j-rates_tbox"><span>Other Necessary Information</span></div>
                                                                <div class="j-rates_tbox">
                                                                    <div class="j-r_left pull-left clearfix">
                                                                        <span>Driver's Age<b>*</b></span>
                                                                        <input type="hidden" name="oda" id="oda" value="18" />
                                                                        <input type="hidden" name="busifh" id="busifh" value="00.00" />
                                                                        <input type="hidden" name="busith" id="busith" value="23.30" />
                                                                        <input type="hidden" name="busifhi" id="busifhi" value="00.00" />
                                                                        <input type="hidden" name="busithi" id="busithi" value="23.30" />
                                                                        <input type="hidden" name="carstatus" id="carstatus" value="1" />
                                                                        <span>Driver's Country<b>*</b></span>
                                                                    </div>
                                                                    <div class="j-r_right pull-right clearfix">
                                                                        <div class="form-group">
                                                                            <input name="da" type="text" class="form-control" id="da"> 
                                                                        </div>            
                                                                    </div>
                                                                    <div class="j-r_right pull-right clearfix">
                                                                        <div class="btn-group pull-right" style="width:100%;">
                                                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="width:100%;">
                                                                                <span data-bind="label" id="driver_country_drop_span">Select One</span>&nbsp;<span class="caret"></span>
                                                                            </button>
                                                                            <ul class="dropdown-menu driver_country_drop" role="menu">
                                                                                <li><a href="javascript:void(0);">Select  Country</a><div style="display:none;">0</div></li>
                                                                                <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                <li><a href="javascript:void(0);"><?php echo e($country->name); ?></a><div style="display:none;"><?php echo e($country->id); ?></div></li>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                            </ul>
                                                                            <select name="country" id="country" style="display:none;">
                                                                                <option value="0">Select  Country</option>
                                                                                <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                <option value="<?php echo e($country->id); ?>"><?php echo e($country->name); ?></option>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="j-rates_tbox">
                                                                    <div class="j-r_left_text pull-left clearfix">Please note that.</div>
                                                                    <div class="j-r_left_btn pull-right clearfix"><a href="#"><button type="button" value="" class="jCheck_btn" onclick="frm_sub()">Check Availability</button></a></div>
                                                                </div>
                                                            </div>
                                                            <!--form--->
                                                    </form>
                                                </div><div class="col-xs-12 col-sm-7 col-md-8 col-lg-8 j_slider">
                                                    <div >
                                                        <div class="carousel slide" id="myCarousel">
                                                            <div class="carousel-inner">
                                                                <div class="item active">
                                                                    <div class="bannerImage">
                                                                        <a href="#"><img height="350" width="650" src="images/banner01.jpg" alt=""></a>
                                                                    </div>
                                                                </div><!-- /Slide1 --> 
                                                                <div class="item">
                                                                    <div class="bannerImage">
                                                                        <a href="#"><img height="350" width="650" src="images/banner02.jpg" alt=""></a>
                                                                    </div>                                     
                                                                </div><!-- /Slide2 -->             
                                                                <div class="item">
                                                                    <div class="bannerImage">
                                                                        <a href="#"><img height="350" width="650" src="images/banner03.jpg" alt=""></a>
                                                                    </div>
                                                                </div><!-- /Slide2 -->                      
                                                            </div>
                                                            <div class="control-box">                            
                                                                <a data-slide="prev" href="#myCarousel" class="carousel-control left">�</a>
                                                                <a data-slide="next" href="#myCarousel" class="carousel-control right">�</a>
                                                            </div><!-- /.control-box -->   
                                                        </div><!-- /#myCarousel -->
                                                    </div><!-- /.span12 -->          
                                                </div>
                                                <!--banner & Rates --->
                                            </div>
                                            <!--welcome_box start --->
                                            <div class="row">
                                                <div class="welcome_box col-lg-8 col-sm-8 col-xs-12">
                                                    <h1>
                                                        <span>Welcome to</span> Demo Car Rental</h1>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 col-xs-12">
                                                    <img alt="" class="welcome_img" src="/images/welcome_bg.png" style="width: 358px; height: 228px;" /></div>
                                                <div style="clear:both;">
                                                    &nbsp;</div>
                                                <div class="product_box">
                                                    <div class="container">
                                                        <div class="container-fluid">
                                                            <div class="row">
                                                                <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <div class="jpro_box col-lg-3 col-sm-3 clearfix">
                                                                    <div class="jpro-img">
                                                                        <img alt="" src="" /></div>
                                                                    <div class="jpro-car">
                                                                        <h2>
                                                                            $vehicle->name</h2>
                                                                        <p>
                                                                            Rs. 4900.00<span> per day</span></p>
                                                                    </div>
                                                                </div>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="container-fluid">
                                                    <div class="row book_ban">
                                                        <div class="book-option col-lg-4 col-md-4 col-sm-4 col-xs-12 clearfix">
                                                            <ul>
                                                                <li>
                                                                    <a href=""><span>Major Car</span> Rental Brands</a></li>
                                                                <li>
                                                                    <a href=""><span>Low Cost</span> Car Rental</a></li>
                                                                <li>
                                                                    <a href=""><span>No</span> Hidden Extras</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="book_text col-lg-3 col-md-3 col-sm-4 col-xs-12 clearfix">
                                                            <a href="">Book now!</a></div>
                                                        <div class="book-img col-lg-5 col-md-5 col-sm-4 col-xs-12 clearfix">
                                                            <img alt="" src="/images/booking_img.png" /></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--welcome_box end --->
                                        </div>
                                    </div>
                                    <br />
                                    <div class="container">
                                    </div>
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
                                               <br />
                                                <br />
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
                                </script>
                                <!--- slider ----->
                                <script type="text/javascript">
                                    $(document).ready(function () {
                                        $('.carousel').carousel({
                                            interval: 6000
                                        })
                                    });
                                </script>
                                </html>

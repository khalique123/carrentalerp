<?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
<?php echo $__env->make('leftpanel', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<td width="2%">&nbsp;</td>
<td width="80%" valign="top">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td class="heading_1" style="padding:5px;">Add Vehicle</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td align="center">
                <table border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td class="step_active">Step 1</td>
                        <td width="197" class="arrow">&nbsp;</td>
                        <td class="step_deactive">Step 2</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td valign="top" class="txt_1"  align="center">
                <form  method="POST" enctype="multipart/form-data" action="<?php echo e(route('vehicle_insert_route')); ?>" onsubmit="return check_car_step1();"  style="padding-left:5px;">
                    <table width="100%" cellpadding="2" cellspacing="4" bgcolor="#f3f3f3">
                        <tr>
                            <td colspan="3" style="padding-left:70px;">&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="3" style="padding-left:70px;">Fields marked with ' <span style="color:#8e2020; font-size:15px;">*</span> ' are mandatory.</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="error_txt" style="text-align:center;"/>
                        </tr>
                        <tr>
                            <td width="39%" class="txt_1" style="text-align:right;">
                                <b>Copy Details From : &nbsp;&nbsp;</b>
                            </td>
                            <td width="54%">
                                <select name="ajax_car_id" id="ajax_car_id">
                                    <option value="0" selected="selected">Select A Vehicle</option>
                                    <?php $__currentLoopData = $existing_vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $existingVehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($existingVehicle->id); ?>"><><?php echo e($existingVehicle->code); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <div id="car_details_info">
                                    <table cellpadding="0" cellspacing="4" border="0" width="100%">
                                        <tr>
                                            <td width="39%" class="txt_1" style="text-align:right;">
                                                <b>Vehicle Image :<span style="color:#8e2020; font-size:15px;">*</span>
                                                </b>
                                            </td>
                                            <td width="54%">
                                                <input type="file" name="gallery_img" id="gallery_img" class="upload">
                                            </td>
                                            <td width="7%">
                                                <input type="hidden" value="" id="img_checking" name="img_checking" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="txt_1" style="text-align:right;">
                                                <b>Vehicle Location : <span style="color:#8e2020; font-size:15px;">*</span>
                                                </b>
                                            </td>
                                            <td>
                                                <select name="veh_loc" id="veh_loc" ">
                                                    <option value="0">Select A Location</option>
                                                    <?php $__currentLoopData = $branches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $branch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($branch->id); ?>"><?php echo e($branch->name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td class="txt_1" style="text-align:right;">
                                                <b>Stock Number : <span style="color:#8e2020; font-size:15px;">*</span>
                                                </b>
                                            </td>
                                            <td>
                                                <input type="text" name="code" id="code" class="txtbox" value="" />
                                            </td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td class="txt_1" style="text-align:right;">
                                                <b>Reg. No. : <span style="color:#8e2020; font-size:15px;">*</span>
                                                </b>
                                            </td>
                                            <td>
                                                <input type="text" name="reg" id="reg" class="txtbox" value="" />
                                            </td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td class="txt_1" style="text-align:right;">
                                                <b>VIN : <span style="color:#8e2020; font-size:15px;">*</span>
                                                </b>
                                            </td>
                                            <td>
                                                <input type="text" name="vin" id="vin" class="txtbox" value="" />
                                            </td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td class="txt_1" style="text-align:right;">
                                                <b>Make : <span style="color:#8e2020; font-size:15px;">*</span>
                                                </b>
                                            </td>
                                            <td>
                                                <input type="text" name="make" id="make" class="txtbox" value="" />
                                            </td>
                                            <td>&nnbsp;</td>
                                        </tr>
                                        <tr>
                                            <td class="txt_1" style="text-align:right;">
                                                <b>Model : <span style="color:#8e2020; font-size:15px;">*</span>
                                                </b>
                                            </td>
                                            <td>
                                                <input type="text" name="model" id="model" class="txtbox" value="" />
                                            </td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td class="txt_1" style="text-align:right;">
                                                <b>Year : <span style="color:#8e2020; font-size:15px;">*</span>
                                                </b>
                                            </td>
                                            <td>
                                                <input type="text" name="year" id="year" class="txtbox" value="" />
                                            </td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td class="txt_1" style="text-align:right;">
                                                <b>Color : <span style="color:#8e2020; font-size:15px;">*</span>
                                                </b>
                                            </td>
                                            <td>
                                                <input type="text" name="color" id="color" class="txtbox" value="" />
                                            </td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td class="txt_1" style="text-align:right;">
                                                <b>People Capacity : <span style="color:#8e2020; font-size:15px;">*</span>
                                                </b>
                                            </td>
                                            <td align="left">
                                                <input type="text" name="people" id="people" class="txtbox" value="" />
                                            </td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td class="txt_1" style="text-align:right;">
                                                <b>Baggage Capacity : <span style="color:#8e2020; font-size:15px;">*</span>
                                                </b>
                                            </td>
                                            <td align="left">
                                                <input type="text" name="baggage" id="baggage" class="txtbox" value="" />
                                            </td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td class="txt_1" style="text-align:right;">
                                                <b>Vehicle Doors : <span style="color:#8e2020; font-size:15px;">*</span>
                                                </b>
                                            </td>
                                            <td align="left">
                                                <input type="text" name="doors" id="doors" class="txtbox" value="" />
                                            </td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td class="txt_1" style="text-align:right;">
                                                <b>Current Mileage: <span style="color:#8e2020; font-size:15px;">*</span>
                                                </b>
                                            </td>
                                            <td align="left">
                                                <input type="text" name="curmilage" id="curmilage" class="txtbox" value="" />
                                            </td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td class="txt_1" style="text-align:right;">
                                                <b>Air Conditioned :</b>
                                            </td>
                                            <td align="left">
                                                <input  type="checkbox" name="ac" id="ac" />
                                            </td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td class="txt_1" style="text-align:right;">
                                                <b>Class : <span style="color:#8e2020; font-size:15px;">*</span>
                                                </b>
                                            </td>
                                            <td>
                                                <select name="class" id="class" onchange="check_ques_mark();">
                                                    <option value="0">Select A Class</option>
                                                    <?php $__currentLoopData = $vehicle_classes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicleClass): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($vehicleClass->id); ?>"><?php echo e($vehicleClass->name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td class="txt_1" style="text-align:right;">
                                                <b>Maximum Weight : &nbsp;&nbsp;</b>
                                            </td>
                                            <td>
                                                <input type="text" name="weight" id="weight" class="txtbox" value="" />
                                                <b>&nbsp;Kg.</b>
                                            </td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td class="txt_1" style="text-align:right;">
                                                <b>Transmission : <span style="color:#8e2020; font-size:15px;">*</span>
                                                </b>
                                            </td>
                                            <td>
                                                <select name="transmission" id="transmission" style="width:145px;">
                                                    <option value="0">Select Transmission</option>
                                                    <?php $__currentLoopData = $transmissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transmission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($transmission->id); ?>"><?php echo e($vehicleClass->name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td valign="top" class="txt_1" style="text-align:right;">
                                                <b>Description : <span style="color:#8e2020; font-size:15px;">*</span>
                                                </b>
                                            </td>
                                            <td>
                                                <textarea rows="3" cols="15" name="desc" id="desc"/>
                                            </td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td class="txt_1" style="text-align:right;">
                                                <b>Fuel Type : <span style="color:#8e2020; font-size:15px;">*</span>
                                                </b>
                                            </td>
                                            <td>
                                                <select name="power_type" id="power_type">
                                                    <option value="0">Select Power Type</option>
                                                    <?php $__currentLoopData = $fuels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fuel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($fuel->id); ?>"><?php echo e($fuel->id); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td class="txt_1" style="text-align:right;">
                                                <b>Availability : <span style="color:#8e2020; font-size:15px;">*</span>
                                                </b>
                                            </td>
                                            <td>
                                                <select name="availability" id="availability">
                                                    <option value="0">Select Availability</option>
                                                    <?php $__currentLoopData = $availabilities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $availability): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($availability->id); ?>"><?php echo e($availability->name); ?></option>
                                                </select>
                                            </td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td class="txt_1" style="text-align:right;" valign="top">
                                                <b>Vehicle Rate Type : <span style="color:#8e2020; font-size:15px;">*</span>
                                                </b>
                                            </td>
                                            <td>
                                                <table width="100%" border="0" cellspacing="2" cellpadding="0">
                                                    <tr>
                                                        <td width="9%" align="left">
                                                            <input type="radio" checked name="ratetype" id="ratetype1" value="1" />
                                                        </td>
                                                        <td width="18%" align="left">Season</td>
                                                        <td width="73%" align="left">
                                                            <div id="sq" style="display:none;">
                                                                <a href="javascript:season();">
                                                                    <img src="images/icon_question.jpg" alt="" width="13" height="13" border="0" />
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="radio"  name="ratetype" id="ratetype2" value="2" />
                                                        </td>
                                                        <td>Class</td>
                                                        <td align="left">
                                                            <div id="cq" style="display:none;">
                                                                <a href="javascript:car_class();">
                                                                    <img src="images/icon_question.jpg" alt="" width="13" height="13" border="0" />
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="radio"  name="ratetype" id="ratetype3" value="3" />
                                                        </td>
                                                        <td align="left">Individual</td>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                </table>
                                                <br />
                                            </td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td class="txt_1" style="text-align:right;">
                                                <b>Display Order : <span style="color:#8e2020; font-size:15px;">*</span>
                                                </b>
                                            </td>
                                            <td>
                                                <input type="text" name="disp_order" id="disp_order" class="txtbox" value="" />
                                            </td>
                                            <td>
                                                <input type="hidden" name="ID" value="" />
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <div align="center">
                                    <input type="submit" name="add_car" value="Save & Go To Next Step >>" class="btn_1" /></div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">&nbsp;</td>
                        </tr>
                    </table>
                </form>
            </td>
        </tr>
    </table>
</td>
</tr>
</table>
</td>
</tr>
    <?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</table>
</table>

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript"></script>
<script type="text/javascript" src="jquery-1.4.2.min.js"></script>
<link type="text/css" href="../themes/base/ui.all.css" rel="stylesheet" />
<script type="text/javascript" src="../js/jquery-1.3.2.js"></script>
<script type="text/javascript" src="../ui/ui.core.js"></script>
<script type="text/javascript" src="../ui/ui.datepicker.js"></script>
<link type="text/css" href="../css/demos.css" rel="stylesheet" />

<script type="text/javascript">
                                                    $(function () {
                                                        $('#datepicker').datepicker({

                                                            numberOfMonths: 2,
                                                            dateFormat: 'mm/dd/yy',
                                                            showButtonPanel: true


                                                        });

                                                    });



// validation

</script>

<script type="text/javascript">
    $(document).ready(function () {
        $("#ajax_car_id").change(function () {
            //alert("sdkhjasdfjksdh");
            var cid = document.getElementById("ajax_car_id").value;
            //alert(cid);
            $.get("ajax_copy_car.php?car_id=" + cid, function (result) {
                $("#car_details_info").html(result);
            });
        });
    });
</script>
<script type="text/javascript" src="../script.js"></script>
</body>
</html>
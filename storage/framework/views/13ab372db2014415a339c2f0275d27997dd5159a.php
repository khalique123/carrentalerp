<?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<td width="2%">&nbsp;</td>
<td width="80%" valign="top">
    <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border:0px solid #FF9933;">
        <tr>
            <td colspan="3" width="10%"  align="left" class="heading_1" style="padding-left:6px;"> Manage Vehicles</td>
            <td  width="18%"  align="left" class="link">
                <div align="right" class="pas-txt">
                    <a href="<?php echo e(route('vehicle_create_route')); ?>">Add Vehicle</a>
                </div>
            </td>
        </tr>
        <tr>
        <tr height="10"/>
        <td   style="padding-left:6px;" align="left" class="av-txt"> Available in fleet: <span align="left" class="av-txt_c"><?php echo e($num_available); ?></span>
        </td>
        <td  style="padding-left:6px;" align="left" class="av-txt">Vehicles in Maintenance: <span align="left" class="av-txt_c"><?php echo e($num_maintenance); ?></span>
        </td>
        <td colspan="2" style="padding-left:6px;" align="left" class="av-txt">Vehicles in Accident: <span align="left" class="av-txt_c"><?php echo e($num_accident); ?></span>
        </td>
    </tr>
    <tr>
        <td colspan="2" align="left" class="txt_1" style="padding-bottom:10px; padding-left:7px; font-weight:bold; color:#999900;"/>
    </tr>
    <tr class="lp_title1">
        <td colspan="4" style="padding:5px; ">
            <form name="listing_form" id="sfrm" style="margin:0px;" action="<?php echo e(route('vehicle_decision_route')); ?>" method="post">
                <?php echo e(csrf_field()); ?>

                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td  width="5%" class="con-txt-3">Class :</td>
                        <td width="10%" align="left">
                            <select name="car_class" id="car_class" style="width:160px;">
                                <option value="0">Select Class</option>
                                <?php $__currentLoopData = $vehicle_classes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicleClass): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option  value="<?php echo e($vehicleClass->id); ?>"><?php echo e($vehicleClass->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </td>
                        <td align="right" width="6%" class="con-txt-3">Make :</td>
                        <td align="center" width="10%">
                            <input type="text" name="make" id="make" value="" />
                        </td>
                        <td width="10%" align="right" class="con-txt-3">Model :</td>
                        <td width="10%" align="center">
                            <input type="text" name="model" id="model" value=""/>
                        </td>
                        <td align="center" rowspan="2" width="10%">
                            <button name="buttonFilterVehicles" type="submit" class="btn_2" style="border:1px solid #ffffff;" value="GO">GO</button>
                        </td>
                        <td rowspan="2" width="10%">
                            <button name="buttonAllVehicles" type="submit" style="border:1px solid #ffffff;" class="btn_2" value="Show All">Show All</button>
                        </td>
                    </tr>
                    <tr>
                        <td  width="8%" class="con-txt-3">Availability :</td>
                        <td width="10%" align="left">
                            <select name="car_av" id="car_av" style="width:160px;">
                                <option value="0">Select Availability</option>
                                <?php $__currentLoopData = $availabilities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $availability): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option  value="<?php echo e($availability->id); ?>"><?php echo e($availability->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        <td  align="right" class="con-txt-3">Color :</td>
                        <td  align="center">
                            <input type="text" name="color" id="color" value=""/>
                        </td>
                        <td  align="right" class="con-txt-3">License Plate #:</td>
                        <td  align="center">
                            <input type="text" name="license" id="license" value=""/>
                        </td>
                    </tr>
                    <tr>                            
                        <td  align="right" class="con-txt-3">Booking Start Date :</td>
                        <td  align="center">
                            <input type="text" name="booking_start_date" id="color" value=""/>
                        </td>
                        <td  align="right" class="con-txt-3">Booking End Date :</td>
                        <td  align="center">
                            <input type="text" name="booking_end_date" id="license" value=""/>
                        </td>
                    </tr>
                </table>
            </form>
        </td>
    </tr>
    <tr>
        <td colspan="4">&nbsp;</td>
    </tr>
    <tr>
        <td height="5" colspan="2" />
    </tr>
    <tr>
        <td colspan="4">
            <table width="100%" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td  style="padding-left:6px;" align="left" class="av-txt">Vehicles Selected: <span align="left" class="av-txt_c"><?php echo e($vehicles->count()); ?></span>
                    </td>
                    <td align="right" bgcolor="#FFFFFF" style="padding:3px;">
                        <div class="page-txt">
                            <span class="proname">Page 1 of 1                                                                               | Pages :<span style='color:#000000;'>1</span>&nbsp;                                                                                </span>
                        </div>
                    </td>
                </tr>
                <tr bgcolor="#842a2a">
                    <td colspan="2" height="1"/>
                </tr>
                <!--khalique!-->
                <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr bgcolor="#FFFFFF">
                    <td colspan="2" valign="top" bgcolor="#FFFFFF">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td>
                                    <table width="100%" border="0" cellpadding="2" cellspacing="0">
                                        <tr>
                                            <td height="2" colspan="2" valign="top" bgcolor="#FFFFFF"/>
                                        </tr>
                                        <tr bgcolor="#FFFF9E">
                                            <td width="14%" valign="top" bgcolor="#FFFFFF">
                                                <table width="95%" border="0" align="center" cellpadding="3" cellspacing="0">
                                                    <tr>
                                                        <td>
                                                            <div align="center" class="con-txt">
                                                                <a rel="lightbox[roadtrip]" title=""  href="../car_image/7.jpg">
                                                                    <img height="100" width="160" border="0" src="../car_image/thumb/7.jpg?1487083567" />
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td width="25%" valign="top" class="txt_1" style="padding-left:15px;">
                                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                    <tr>
                                                        <td width="50%" >
                                                            <b>Vehicle Code:</b>
                                                        </td>
                                                        <td>
                                                            <span class="txt_1" style="text-align:center;"><?php echo e($vehicle->vehicle_code); ?></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <b>License #:</b>
                                                        </td>
                                                        <td>
                                                            <span class="txt_1" style="text-align:center;"><?php echo e($vehicle->reg_number); ?></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <b>Class:</b>
                                                        </td>
                                                        <td>
                                                            <span class="txt_1" style="text-align:center;"><?php echo e($vehicle->vehicleClass->name); ?></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <b>Availability:</b>
                                                        </td>
                                                        <td>
                                                            <span class="av-txt_c"><?php echo e($vehicle->availability['name']); ?></span>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td width="18%" valign="top" class="txt_1" >
                                                <table border="0" >
                                                    <tr>
                                                        <td width="50%">
                                                            <b>Make:</b>
                                                        </td>
                                                        <td>
                                                            <span class="txt_1" style="text-align:center;"><?php echo e($vehicle->make); ?></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <b>Model:</b>
                                                        </td>
                                                        <td>
                                                            <span class="txt_1" style="text-align:center;"><?php echo e($vehicle->model); ?></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <b>Color:</b>
                                                        </td>
                                                        <td>
                                                            <span class="txt_1" style="text-align:center;"><?php echo e($vehicle->color); ?></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <b>Year:</b>
                                                        </td>
                                                        <td>
                                                            <span class="txt_1" style="text-align:center;"><?php echo e($vehicle->manu_year); ?></span>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td valign="top" >
                                                <table>
                                                    <tr>
                                                        <td width="25%" valign="top" class="txt_1">
                                                            <b>Transmission Type :</b>
                                                        </td
                                                        <td>
                                                            <span class="txt_1" style="text-align:center;"><?php echo e($vehicle->transmission->name); ?></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="25%" valign="top" class="txt_1">
                                                            <b>Capacity & Features:</b>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="txt_1">
                                                            <table border="0" cellspacing="0" cellpadding="0">
                                                                <tr>
                                                                    <td>
                                                                        <img src="images/icon_passenger.jpg" alt="Passener Quantity" title="Passener Quantity" width="23" height="24" />
                                                                    </td>
                                                                    <td width="3"/>
                                                                    <td>
                                                                        <img src="images/icon_baggage.jpg" alt="Baggage Quantity" title="Baggage Quantity" width="23" height="23" />
                                                                    </td>
                                                                    <td width="3"/>
                                                                    <td>
                                                                        <img src="images/icon_door.jpg" alt="Doors" title="Doors" width="23" height="23" />
                                                                    </td>
                                                                    <td width="3"/>
                                                                    <?php if($vehicle->is_air_conditioned): ?>
                                                                    <td>
                                                                        <img src="images/icon_ac.jpg" alt="Air Conditioning" title="Air Conditioning" width="23" height="23" />
                                                                    </td>
                                                                    <?php endif; ?>
                                                                </tr>
                                                                <tr>
                                                                    <td valign="top" class="txt_3">x <?php echo e($vehicle->passenger_capacity); ?></td>
                                                                    <td class="txt_3"/>
                                                                    <td valign="top" class="txt_3">x <?php echo e($vehicle->baggage_capacity); ?></td>
                                                                    <td class="txt_3"/>
                                                                    <td valign="top" class="txt_3">x <?php echo e($vehicle->number_of_doors); ?></td>
                                                                    <td/>
                                                                    <td>&nbsp;</td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td width="25%" valign="top">
                                                <table>
                                                    <tr>
                                                        <td   style="padding-left:15px;" class="txt_1">
                                                            <b>Description</b>
                                                            <br /><?php echo e($vehicle->description); ?>																		</td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5" valign="top" bgcolor="#FFFFFF">
                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                    <tr>
                                                        <td width="19%" valign="top">
                                                            <span align="center" class="txt">
                                                                <b>
                                                                    <a href="<?php echo e(route('booking_create_route', ['id' => $vehicle->id, 'from_date' => "document.getElementById('booking_start_date')", 'to_date' => "document.getElementById('booking_end_date')"])); ?>">Book</a>
                                                                </b>&nbsp;</span> | <span align="center" class="txt-2">
                                                        </td>
                                                        <td width="4%" valign="top" style="padding-left:4px;"/>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td height="1" bgcolor="#497084"/>
                            </tr>
                        </table>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <!--khalique!-->
            </table>
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
<script type="text/javascript" src="lightbox/js/prototype.js"></script>
<script type="text/javascript" src="lightbox/js/scriptaculous.js?load=effects,builder"></script>
<script type="text/javascript" src="lightbox/js/lightbox.js"></script>
<script type="text/javascript">
<!--
function chk_search() { //v3.0

    if (document.getElementById("make").value.replace(/^\s+|\s+$/g, '') == '' && document.getElementById("model").value.replace(/^\s+|\s+$/g, '') == '' && document.getElementById("stock").value.replace(/^\s+|\s+$/g, '') == '' && document.getElementById("license").value.replace(/^\s+|\s+$/g, '') == '' && document.getElementById("car_class").value == '0' && document.getElementById("car_av").value == '0')
    {
        alert("Please Enter Atleast One Search Criteria.....");

    } else
    {
        document.getElementById("sfrm").submit();
    }

}
function show_all() { //v3.0

    document.getElementById("car_class").value = 0;
    document.getElementById("car_av").value = 0;
    document.getElementById("sfrm").submit();


}

//-->
</script>
</script>
</body>
</html>
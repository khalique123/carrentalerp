<?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>  
<?php echo $__env->make('leftpanel', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<td width="2%">&nbsp;</td>

<td width="80%" valign="top">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td class="heading_1" style="padding:5px;">Edit Vehicle Classes</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td valign="top" class="txt_1"  align="center">
                    <table width="100%" cellpadding="2" cellspacing="4" class="tab-border" bgcolor="#f3f3f3">
                        <tr>
                            <td class="txt_1" style="text-align:right;">
                                <b>Vehicle Class Name : <span style="color:#8e2020; font-size:15px;"/>
                                </b>
                            </td>
                            <td><?php echo e($vehicle_class_info->name); ?></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td valign="top" class="txt_1" style="text-align:right;">
                                <b>Vehicle Class Description : <span style="color:#8e2020; font-size:15px;"/>
                                </b>
                            </td>
                            <td><?php echo e($vehicle_class_info->description); ?></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="txt_1" style="text-align:right;">
                                <b>Display Order : <span style="color:#8e2020; font-size:15px;"/>
                                </b>
                            </td>
                            <td><?php echo e($vehicle_class_info->display_order); ?></td>
                        </tr>
                        <tr>
                            <td class="txt_1" style="text-align:right;">
                                <b>Vehicle Class Image  : <span style="color:#8e2020; font-size:15px;"/>
                                </b>
                            </td>
                            <td>
                                <img src="../car_class_image/thumb/3.jpg">
                            </td>
                            <td>
                                <input type="hidden" name="ID" value="3" />
                            </td>
                        </tr>
                        <?php $__currentLoopData = $seasons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $season): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td  colspan="3" class="lp_title1"  style="text-align:center">
                                <b>--------------------------------------------------<?php echo e($season->name); ?>--------------------------------------------------</b>
                            </td>
                        </tr>
                        <?php $__currentLoopData = $pricing_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pricingType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="txt_1" style="text-align:right;">
                                <b><?php echo e($pricingType->name); ?> : <span style="color:#8e2020; font-size:15px;"/>
                                </b>
                            </td>
                            <td><?php echo e($vehicle_class_info->prices()->where('pricing_type_id', '=', $pricingType->id)->where('pricing_season_id', '=', $season->id)->first()['rate']); ?></td>
                            <td>&nbsp; </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>&nbsp;&nbsp;                                               </td>
                            <td>
                                <a href="<?php echo e(route('vehicle_class_list_route')); ?>" >Back</a>
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
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

<script>
    function check_carclass()
    {
        if (document.getElementById('class_name').value.replace(/^\s+|\s+$/g, '') == '')
        {
            alert('Please Enter Class Name.....');
            document.getElementById('class_name').focus();
            return false;
        }
        if (document.getElementById('class_desc').value.replace(/^\s+|\s+$/g, '') == '')
        {
            alert('Please Enter Class Description.....');
            document.getElementById('class_desc').focus();
            return false;
        }

        if (document.getElementById('disp_order').value.replace(/^\s+|\s+$/g, '') == '')
        {
            alert('Please Enter Display Order.....');
            document.getElementById('disp_order').focus();
            return false;
        }

        if (isNaN(document.getElementById('disp_order').value))
        {
            alert('Please Enter Display Order As Numeric Value.....');
            document.getElementById('disp_order').value = '';
            document.getElementById('disp_order').focus();
            return false;
        }



        if (document.getElementById('daily_rate').value.replace(/^\s+|\s+$/g, '') == '')
        {
            alert('Please Enter Daily rate.....');
            document.getElementById('daily_rate').focus();
            return false;
        }

        if (isNaN(document.getElementById('daily_rate').value))
        {
            alert('Please Enter Daily rate As Numeric Value.....');
            document.getElementById('daily_rate').value = '';
            document.getElementById('daily_rate').focus();
            document.getElementById('daily_rate').focus();
            return false;
        }

        if (document.getElementById('weekly_rate').value.replace(/^\s+|\s+$/g, '') == '')
        {
            alert('Please Enter Weekly rate.....');
            document.getElementById('weekly_rate').focus();
            return false;
        }

        if (isNaN(document.getElementById('weekly_rate').value))
        {
            alert('Please Enter Weekly rate As Numeric Value.....');
            document.getElementById('weekly_rate').value = '';
            document.getElementById('weekly_rate').focus();
            document.getElementById('weekly_rate').focus();
            return false;
        }






        if (document.getElementById('span~5').value.replace(/^\s+|\s+$/g, '') == '')
        {
            alert('Please Enter Default 1 Day Rate.....');
            document.getElementById('span~5').focus();
            return false;
        }

        if (isNaN(document.getElementById('span~5').value))
        {
            alert('Please Enter Default 1 Day Rate As Numeric Value.....');
            document.getElementById('span~5').value = '';
            document.getElementById('span~5').focus();
            return false;
        }
        if (document.getElementById('span~4').value.replace(/^\s+|\s+$/g, '') == '')
        {
            alert('Please Enter Default 2days Rate.....');
            document.getElementById('span~4').focus();
            return false;
        }

        if (isNaN(document.getElementById('span~4').value))
        {
            alert('Please Enter Default 2days Rate As Numeric Value.....');
            document.getElementById('span~4').value = '';
            document.getElementById('span~4').focus();
            return false;
        }
        if (document.getElementById('span~3').value.replace(/^\s+|\s+$/g, '') == '')
        {
            alert('Please Enter Default 3days Rate.....');
            document.getElementById('span~3').focus();
            return false;
        }

        if (isNaN(document.getElementById('span~3').value))
        {
            alert('Please Enter Default 3days Rate As Numeric Value.....');
            document.getElementById('span~3').value = '';
            document.getElementById('span~3').focus();
            return false;
        }
        if (document.getElementById('span~6').value.replace(/^\s+|\s+$/g, '') == '')
        {
            alert('Please Enter Default 4 Days Rate.....');
            document.getElementById('span~6').focus();
            return false;
        }

        if (isNaN(document.getElementById('span~6').value))
        {
            alert('Please Enter Default 4 Days Rate As Numeric Value.....');
            document.getElementById('span~6').value = '';
            document.getElementById('span~6').focus();
            return false;
        }
        if (document.getElementById('span~7').value.replace(/^\s+|\s+$/g, '') == '')
        {
            alert('Please Enter Default 5 Days Rate.....');
            document.getElementById('span~7').focus();
            return false;
        }

        if (isNaN(document.getElementById('span~7').value))
        {
            alert('Please Enter Default 5 Days Rate As Numeric Value.....');
            document.getElementById('span~7').value = '';
            document.getElementById('span~7').focus();
            return false;
        }
        if (document.getElementById('span~8').value.replace(/^\s+|\s+$/g, '') == '')
        {
            alert('Please Enter Default 6 Days Rate.....');
            document.getElementById('span~8').focus();
            return false;
        }

        if (isNaN(document.getElementById('span~8').value))
        {
            alert('Please Enter Default 6 Days Rate As Numeric Value.....');
            document.getElementById('span~8').value = '';
            document.getElementById('span~8').focus();
            return false;
        }
        if (document.getElementById('span~2').value.replace(/^\s+|\s+$/g, '') == '')
        {
            alert('Please Enter Default Weekly Rate.....');
            document.getElementById('span~2').focus();
            return false;
        }

        if (isNaN(document.getElementById('span~2').value))
        {
            alert('Please Enter Default Weekly Rate As Numeric Value.....');
            document.getElementById('span~2').value = '';
            document.getElementById('span~2').focus();
            return false;
        }
        if (document.getElementById('span~1').value.replace(/^\s+|\s+$/g, '') == '')
        {
            alert('Please Enter Default Monthly Rate.....');
            document.getElementById('span~1').focus();
            return false;
        }

        if (isNaN(document.getElementById('span~1').value))
        {
            alert('Please Enter Default Monthly Rate As Numeric Value.....');
            document.getElementById('span~1').value = '';
            document.getElementById('span~1').focus();
            return false;
        }
        if (document.getElementById('span~5~3').value.replace(/^\s+|\s+$/g, '') == '')
        {
            alert('Please Enter High Season 1 Day Rate.....');
            document.getElementById('span~5~3').focus();
            return false;
        }

        if (isNaN(document.getElementById('span~5~3').value))
        {
            alert('Please Enter High Season 1 Day Rate As Numeric Value.....');
            document.getElementById('span~5~3').value = '';
            document.getElementById('span~5~3').focus();
            return false;
        }
        if (document.getElementById('span~4~3').value.replace(/^\s+|\s+$/g, '') == '')
        {
            alert('Please Enter High Season 2days Rate.....');
            document.getElementById('span~4~3').focus();
            return false;
        }

        if (isNaN(document.getElementById('span~4~3').value))
        {
            alert('Please Enter High Season 2days Rate As Numeric Value.....');
            document.getElementById('span~4~3').value = '';
            document.getElementById('span~4~3').focus();
            return false;
        }
        if (document.getElementById('span~3~3').value.replace(/^\s+|\s+$/g, '') == '')
        {
            alert('Please Enter High Season 3days Rate.....');
            document.getElementById('span~3~3').focus();
            return false;
        }

        if (isNaN(document.getElementById('span~3~3').value))
        {
            alert('Please Enter High Season 3days Rate As Numeric Value.....');
            document.getElementById('span~3~3').value = '';
            document.getElementById('span~3~3').focus();
            return false;
        }
        if (document.getElementById('span~6~3').value.replace(/^\s+|\s+$/g, '') == '')
        {
            alert('Please Enter High Season 4 Days Rate.....');
            document.getElementById('span~6~3').focus();
            return false;
        }

        if (isNaN(document.getElementById('span~6~3').value))
        {
            alert('Please Enter High Season 4 Days Rate As Numeric Value.....');
            document.getElementById('span~6~3').value = '';
            document.getElementById('span~6~3').focus();
            return false;
        }
        if (document.getElementById('span~7~3').value.replace(/^\s+|\s+$/g, '') == '')
        {
            alert('Please Enter High Season 5 Days Rate.....');
            document.getElementById('span~7~3').focus();
            return false;
        }

        if (isNaN(document.getElementById('span~7~3').value))
        {
            alert('Please Enter High Season 5 Days Rate As Numeric Value.....');
            document.getElementById('span~7~3').value = '';
            document.getElementById('span~7~3').focus();
            return false;
        }
        if (document.getElementById('span~8~3').value.replace(/^\s+|\s+$/g, '') == '')
        {
            alert('Please Enter High Season 6 Days Rate.....');
            document.getElementById('span~8~3').focus();
            return false;
        }

        if (isNaN(document.getElementById('span~8~3').value))
        {
            alert('Please Enter High Season 6 Days Rate As Numeric Value.....');
            document.getElementById('span~8~3').value = '';
            document.getElementById('span~8~3').focus();
            return false;
        }
        if (document.getElementById('span~2~3').value.replace(/^\s+|\s+$/g, '') == '')
        {
            alert('Please Enter High Season Weekly Rate.....');
            document.getElementById('span~2~3').focus();
            return false;
        }

        if (isNaN(document.getElementById('span~2~3').value))
        {
            alert('Please Enter High Season Weekly Rate As Numeric Value.....');
            document.getElementById('span~2~3').value = '';
            document.getElementById('span~2~3').focus();
            return false;
        }
        if (document.getElementById('span~1~3').value.replace(/^\s+|\s+$/g, '') == '')
        {
            alert('Please Enter High Season Monthly Rate.....');
            document.getElementById('span~1~3').focus();
            return false;
        }

        if (isNaN(document.getElementById('span~1~3').value))
        {
            alert('Please Enter High Season Monthly Rate As Numeric Value.....');
            document.getElementById('span~1~3').value = '';
            document.getElementById('span~1~3').focus();
            return false;
        }
        if (document.getElementById('span~5~4').value.replace(/^\s+|\s+$/g, '') == '')
        {
            alert('Please Enter Low Season 1 Day Rate.....');
            document.getElementById('span~5~4').focus();
            return false;
        }

        if (isNaN(document.getElementById('span~5~4').value))
        {
            alert('Please Enter Low Season 1 Day Rate As Numeric Value.....');
            document.getElementById('span~5~4').value = '';
            document.getElementById('span~5~4').focus();
            return false;
        }
        if (document.getElementById('span~4~4').value.replace(/^\s+|\s+$/g, '') == '')
        {
            alert('Please Enter Low Season 2days Rate.....');
            document.getElementById('span~4~4').focus();
            return false;
        }

        if (isNaN(document.getElementById('span~4~4').value))
        {
            alert('Please Enter Low Season 2days Rate As Numeric Value.....');
            document.getElementById('span~4~4').value = '';
            document.getElementById('span~4~4').focus();
            return false;
        }
        if (document.getElementById('span~3~4').value.replace(/^\s+|\s+$/g, '') == '')
        {
            alert('Please Enter Low Season 3days Rate.....');
            document.getElementById('span~3~4').focus();
            return false;
        }

        if (isNaN(document.getElementById('span~3~4').value))
        {
            alert('Please Enter Low Season 3days Rate As Numeric Value.....');
            document.getElementById('span~3~4').value = '';
            document.getElementById('span~3~4').focus();
            return false;
        }
        if (document.getElementById('span~6~4').value.replace(/^\s+|\s+$/g, '') == '')
        {
            alert('Please Enter Low Season 4 Days Rate.....');
            document.getElementById('span~6~4').focus();
            return false;
        }

        if (isNaN(document.getElementById('span~6~4').value))
        {
            alert('Please Enter Low Season 4 Days Rate As Numeric Value.....');
            document.getElementById('span~6~4').value = '';
            document.getElementById('span~6~4').focus();
            return false;
        }
        if (document.getElementById('span~7~4').value.replace(/^\s+|\s+$/g, '') == '')
        {
            alert('Please Enter Low Season 5 Days Rate.....');
            document.getElementById('span~7~4').focus();
            return false;
        }

        if (isNaN(document.getElementById('span~7~4').value))
        {
            alert('Please Enter Low Season 5 Days Rate As Numeric Value.....');
            document.getElementById('span~7~4').value = '';
            document.getElementById('span~7~4').focus();
            return false;
        }
        if (document.getElementById('span~8~4').value.replace(/^\s+|\s+$/g, '') == '')
        {
            alert('Please Enter Low Season 6 Days Rate.....');
            document.getElementById('span~8~4').focus();
            return false;
        }

        if (isNaN(document.getElementById('span~8~4').value))
        {
            alert('Please Enter Low Season 6 Days Rate As Numeric Value.....');
            document.getElementById('span~8~4').value = '';
            document.getElementById('span~8~4').focus();
            return false;
        }
        if (document.getElementById('span~2~4').value.replace(/^\s+|\s+$/g, '') == '')
        {
            alert('Please Enter Low Season Weekly Rate.....');
            document.getElementById('span~2~4').focus();
            return false;
        }

        if (isNaN(document.getElementById('span~2~4').value))
        {
            alert('Please Enter Low Season Weekly Rate As Numeric Value.....');
            document.getElementById('span~2~4').value = '';
            document.getElementById('span~2~4').focus();
            return false;
        }
        if (document.getElementById('span~1~4').value.replace(/^\s+|\s+$/g, '') == '')
        {
            alert('Please Enter Low Season Monthly Rate.....');
            document.getElementById('span~1~4').focus();
            return false;
        }

        if (isNaN(document.getElementById('span~1~4').value))
        {
            alert('Please Enter Low Season Monthly Rate As Numeric Value.....');
            document.getElementById('span~1~4').value = '';
            document.getElementById('span~1~4').focus();
            return false;
        }
        if (document.getElementById('span~5~2').value.replace(/^\s+|\s+$/g, '') == '')
        {
            alert('Please Enter Mid Season 1 Day Rate.....');
            document.getElementById('span~5~2').focus();
            return false;
        }

        if (isNaN(document.getElementById('span~5~2').value))
        {
            alert('Please Enter Mid Season 1 Day Rate As Numeric Value.....');
            document.getElementById('span~5~2').value = '';
            document.getElementById('span~5~2').focus();
            return false;
        }
        if (document.getElementById('span~4~2').value.replace(/^\s+|\s+$/g, '') == '')
        {
            alert('Please Enter Mid Season 2days Rate.....');
            document.getElementById('span~4~2').focus();
            return false;
        }

        if (isNaN(document.getElementById('span~4~2').value))
        {
            alert('Please Enter Mid Season 2days Rate As Numeric Value.....');
            document.getElementById('span~4~2').value = '';
            document.getElementById('span~4~2').focus();
            return false;
        }
        if (document.getElementById('span~3~2').value.replace(/^\s+|\s+$/g, '') == '')
        {
            alert('Please Enter Mid Season 3days Rate.....');
            document.getElementById('span~3~2').focus();
            return false;
        }

        if (isNaN(document.getElementById('span~3~2').value))
        {
            alert('Please Enter Mid Season 3days Rate As Numeric Value.....');
            document.getElementById('span~3~2').value = '';
            document.getElementById('span~3~2').focus();
            return false;
        }
        if (document.getElementById('span~6~2').value.replace(/^\s+|\s+$/g, '') == '')
        {
            alert('Please Enter Mid Season 4 Days Rate.....');
            document.getElementById('span~6~2').focus();
            return false;
        }

        if (isNaN(document.getElementById('span~6~2').value))
        {
            alert('Please Enter Mid Season 4 Days Rate As Numeric Value.....');
            document.getElementById('span~6~2').value = '';
            document.getElementById('span~6~2').focus();
            return false;
        }
        if (document.getElementById('span~7~2').value.replace(/^\s+|\s+$/g, '') == '')
        {
            alert('Please Enter Mid Season 5 Days Rate.....');
            document.getElementById('span~7~2').focus();
            return false;
        }

        if (isNaN(document.getElementById('span~7~2').value))
        {
            alert('Please Enter Mid Season 5 Days Rate As Numeric Value.....');
            document.getElementById('span~7~2').value = '';
            document.getElementById('span~7~2').focus();
            return false;
        }
        if (document.getElementById('span~8~2').value.replace(/^\s+|\s+$/g, '') == '')
        {
            alert('Please Enter Mid Season 6 Days Rate.....');
            document.getElementById('span~8~2').focus();
            return false;
        }

        if (isNaN(document.getElementById('span~8~2').value))
        {
            alert('Please Enter Mid Season 6 Days Rate As Numeric Value.....');
            document.getElementById('span~8~2').value = '';
            document.getElementById('span~8~2').focus();
            return false;
        }
        if (document.getElementById('span~2~2').value.replace(/^\s+|\s+$/g, '') == '')
        {
            alert('Please Enter Mid Season Weekly Rate.....');
            document.getElementById('span~2~2').focus();
            return false;
        }

        if (isNaN(document.getElementById('span~2~2').value))
        {
            alert('Please Enter Mid Season Weekly Rate As Numeric Value.....');
            document.getElementById('span~2~2').value = '';
            document.getElementById('span~2~2').focus();
            return false;
        }
        if (document.getElementById('span~1~2').value.replace(/^\s+|\s+$/g, '') == '')
        {
            alert('Please Enter Mid Season Monthly Rate.....');
            document.getElementById('span~1~2').focus();
            return false;
        }

        if (isNaN(document.getElementById('span~1~2').value))
        {
            alert('Please Enter Mid Season Monthly Rate As Numeric Value.....');
            document.getElementById('span~1~2').value = '';
            document.getElementById('span~1~2').focus();
            return false;
        }
    }</script>

<script type="text/javascript" src="../script.js"></script>
</body>
</html>
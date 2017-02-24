<?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('leftpanel', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<td width="2%">&nbsp;</td>
<td width="80%" valign="top">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td class="heading_1" style="padding:5px;">
                Add Rental Accessories
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td valign="top" class="txt_1"  align="center">
                <form  method="POST" action="<?php echo e(route('accessory_insert_route')); ?>"  style="padding-left:5px;">
                    <?php echo e(csrf_field()); ?>

                    <table width="100%" cellpadding="2" cellspacing="4" bgcolor="#f3f3f3">
                        <tr><td colspan="3" style="padding-left:70px;">Fields marked with ' <span style="color:#8e2020; font-size:15px;">*</span> ' are mandatory.</td></tr>
                        <tr>
                            <td class="txt_1" style="text-align:right;"><b>Name : <span style="color:#8e2020; font-size:15px;">*</span></b></td>
                            <td align="left" style="width: 205px"><input type="text" name="name" id="rate" class="txtbox" value="" /></td>
                        </tr>
                        <tr>
                            <td class="txt_1" style="text-align:right;"><b>Code : <span style="color:#8e2020; font-size:15px;">*</span></b></td>
                            <td align="left" style="width: 205px"><input type="text" name="code" id="rate" class="txtbox" value="" /></td>
                        </tr>
                        <tr>
                            <td class="txt_1" style="text-align:right;"><b>Calculation : <span style="color:#8e2020; font-size:15px;">*</span></b></td>
                            <td align="left" style="width: 205px"><select name="calculation" id="calculation"  style="width:145px;">
                                    <option value="0" selected="selected">Select Calculation</option>
                                    <?php $__currentLoopData = $pricing_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pricingType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($pricingType->id); ?>"><?php echo e($pricingType->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="txt_1" style="text-align:right;"><b>Amount : <span style="color:#8e2020; font-size:15px;">*</span></b></td>
                            <td align="left" style="width: 205px"><input type="text" name="rate" id="rate" class="txtbox" value="" /></td>
                        </tr>
                        <tr>
                            <td class="txt_1" style="text-align:right;"><b>Taxable :</b></td>
                            <td align="left" style="width: 205px">
                                <input type="checkbox"  name="taxable" id="taxable" /></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                                &nbsp;&nbsp;
                            </td>
                            <td style="width: 205px">
                                <input type="submit" name="add_op" value="Add" class="btn_1" />
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                    </table>
                </form>
            </td>
        </tr>
    </table>
</td>
</tr>
</table></td>
</tr>
<?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</table>
</table>
<script type="text/javascript" src="../script.js"></script>
<script type="text/javascript">
<!--
    function MM_jumpMenu(targ, selObj, restore) { //v3.0
        eval(targ + ".location='" + selObj.options[selObj.selectedIndex].value + "'");
        if (restore)
            selObj.selectedIndex = 0;
    }
//-->
</script>
</body>
</html>
<?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<td width="2%">&nbsp;</td>
<td width="80%" valign="top">
    <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border:0px solid #FF9933;">
        <tr><td width="82%"  align="left" class="heading_1" style="padding-left:6px;">
                Rental Accessories
            </td>
            <td width="18%"  align="left" class="link"><div align="right" class="pas-txt"><a href="<?php echo e(route('accessory_create_route')); ?>">Add Rental Accessory</a></div></td>
        </tr>
        <tr><td colspan="2"  align="right" class="link">&nbsp;</td></tr>
        <tr>
            <td colspan="4" align="left" class="txt_1" style="padding-bottom:10px; padding-left:7px; font-weight:bold; color:#999900;">
            </td>
        </tr>
        <tr><td height="5" colspan="2" ></td></tr>
        <tr>
            <td colspan="2"  >
                <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#7199af"  >
                    <tr>
                        <td colspan="7" align="right" bgcolor="#FFFFFF">
                            <div class="page-txt">
                                <span class="proname">
                                    Page 1 of 1                                                                              
                                    | Pages :
                                    <span style='color:#000000;'>1</span>&nbsp;                                                                                </span>                                                                              </div>                                                                    </td>
                    </tr>
                    <tr bgcolor="#842a2a">
                        <td width="19%" height="20" class="lp_title1"><div  class="con-txt-3">Description</div></td>
                        <td width="19%" height="20" class="lp_title1"><div  class="con-txt-3">Code</div></td>
                        <td width="10%" class="lp_title1"><div align="center" class="con-txt-3">Calculation</div></td>
                        <td width="6%" class="lp_title1"><div align="center" class="con-txt-3">Amount</div></td>
                        <td width="9%" class="lp_title1"><div align="center" class="con-txt-3">Taxable</div></td>
                        <td class="lp_title1" colspan="3"><div align="center" class="con-txt-3">Action</div></td>
                    </tr>
                    <?php $__currentLoopData = $rental_accessories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rentalAccessory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr bgcolor="#FFFFFF">
                    <form  method="POST" action="<?php echo e(route('accessory_decision_route')); ?>"  style="padding-left:5px;">
                        <?php echo e(csrf_field()); ?>

                        <input type="hidden" name="id" value="<?php echo e($rentalAccessory->id); ?>">
                        <td bgcolor="#FFFFFF" style="padding-left:5px;" class="txt_1"><div align="center" class="con-txt"><?php echo e($rentalAccessory->name); ?></div></td>
                        <td bgcolor="#FFFFFF" style="padding-left:5px;" class="txt_1"><div align="center" class="con-txt"><?php echo e($rentalAccessory->code); ?></div></td>
                        <td bgcolor="#FFFFFF"  class="txt_1" style="text-align:center;"><?php echo e($rentalAccessory->pricing_type); ?></td>
                        <td bgcolor="#FFFFFF"  class="txt_1" style="text-align:center;"><?php echo e($rentalAccessory->rate); ?></td>
                        <td bgcolor="#FFFFFF"  class="txt_1" style="text-align:center;"><?php if($rentalAccessory->is_taxable == true): ?><?php echo e('Yes'); ?><?php else: ?><?php echo e('No'); ?><?php endif; ?></td>
                        <td width="6%"  align="center" bgcolor="#FFFFFF"  class="link_1" ><div align="center" class="txt"><b><a href="<?php echo e(route('accessory_edit_route', ['id' => $rentalAccessory->id])); ?>"  >Edit</a></b>&nbsp;</div></td>
                        <td colspan="2" width="10%"  align="center" bgcolor="#FFFFFF"  class="link_1" ><div align="center" class="txt-2">
                                <b><button type="submit"  name="delete" value="<?php echo e($rentalAccessory->id); ?>" onclick="javascript:return confirm('Are you sure?')" >Delete</button></b>&nbsp;
                            </div></td>
                    </form>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <tr><td colspan="7" height="4" bgcolor="#659dba"></td></tr>
    </table>                                                            </td>
</tr>
</table>
</td>
</tr>
</table></td>
</tr>
<?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</table>
</table>
</body>
</html>
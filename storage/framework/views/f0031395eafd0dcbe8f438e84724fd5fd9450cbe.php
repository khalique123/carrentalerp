<?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('leftpanel', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<td width="2%">&nbsp;</td>
<td width="80%" valign="top">
    <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border:0px solid #FF9933;">
        <tr>
            <td width="82%"  align="left" class="heading_1" style="padding-left:6px;">Vehicle Classes</td>
            <td width="18%"  align="left" class="link">
                <div align="right" class="pas-txt">
                    <a href="<?php echo e(route('vehicle_class_create_route')); ?>">Add Vehicle Class</a>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2"  align="right" class="link">&nbsp;</td>
        </tr>
        <tr>
            <td colspan="4" align="left" class="txt_1" style="padding-bottom:10px; padding-left:7px; font-weight:bold; color:#999900;"/>
        </tr>
        <tr>
            <td height="5" colspan="2" />
        </tr>
        <tr>
            <td colspan="2" bgcolor="#BBBBBB" >
                <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#7199af" >
                    <tr>
                        <td colspan="7" align="right" bgcolor="#FFFFFF">
                            <div class="page-txt">
                                <span class="proname">Page 1 of 1                                                                               | Pages :<span style='color:#000000;'>1</span>&nbsp;</span>
                            </div>
                        </td>
                    </tr>
                    <tr bgcolor="#842a2a">
                        <td width="27%" height="20" class="lp_title1">
                            <div align="left" class="con-txt-3">Vehicle Class</div>
                        </td>
                        <td width="26%" height="20" class="lp_title1">
                            <div align="left" class="con-txt-3">Class Description</div>
                        </td>
                        <td width="14%" class="lp_title1">
                            <div align="center" class="con-txt-3">Display Order</div>
                        </td>
                        <td class="lp_title1" colspan="4">
                            <div align="center" class="con-txt-3">Action</div>
                        </td>
                    </tr>
                    <?php $__currentLoopData = $vehicle_classes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vechicleClass): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <form id="vehicle-class-<?php echo e($vechicleClass->id); ?>" action="<?php echo e(route('vehicle_class_decision_route')); ?>" method="POST" style="display: none;">
                        <?php echo e(csrf_field()); ?>

                        <input type="hidden" name="id" value="<?php echo e($vechicleClass->id); ?>"/>
                        <tr bgcolor="#FFFFFF">
                            <td bgcolor="#FFFFFF" style="padding-left:5px;" class="txt_1">
                                <div align="left"  class="con-txt"><?php echo e($vechicleClass->name); ?></div>
                            </td>
                            <td bgcolor="#FFFFFF" style="padding-left:5px;" class="txt_1">
                                <div align="left"  class="con-txt"><?php echo e($vechicleClass->description); ?></div>
                            </td>
                            <td bgcolor="#FFFFFF"  class="txt_1" style="text-align:center;"><?php echo e($vechicleClass->display_order); ?></td>
                            <td width="12%"  align="center" bgcolor="#FFFFFF"  class="link_1" >
                                <div align="center" class="txt">
                                    <b>
                                        <a href="<?php echo e(route('vehicle_class_show_route', ['id' => $vechicleClass->id])); ?>" >Details</a>
                                    </b>&nbsp;</div>
                            </td>
                            <td width="12%"  align="center" bgcolor="#FFFFFF"  class="link_1" >
                                <div align="center" class="txt">
                                    <b>
                                        <a href="<?php echo e(route('vehicle_class_edit_route', ['id' => $vechicleClass->id])); ?>" >Edit</a>
                                    </b>&nbsp;</div>
                            </td>
                            <td width="11%"  align="center" bgcolor="#FFFFFF"  class="link_1" >
                                <div align="center" class="txt-2">
                                    <b>
                                        <button type="submit" href=#  name="delete" onclick="javascript:return confirm('Are you sure?')" value="true">Delete</button>
                                    </b>&nbsp;</div>
                            </td>
                            <td width="10%"  align="center" bgcolor="#FFFFFF" >
                                <a type=submit" href=# name="deactivate" value="true">
                                    <?php if($vechicleClass->is_active == 1): ?>
                                    <img src="images/icon_active.gif" alt="Deactivate Vehicle Class" title="Deactivate Vehicle Class" width="10" height="10" border="0" />
                                    <?php else: ?>
                                    <img src=<?php echo e(asset("/images/icon_close.gif")); ?> alt="Activate Vehicle Class" title="Activate Vehicle Class" width="10" height="10" border="0" />
                                    <?php endif; ?>
                                </a>
                            </td>
                        </tr>
                    </form>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td colspan="6" height="4" bgcolor="#7199AF"/>
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
</body>
</html>
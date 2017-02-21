<?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('leftpanel', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</td>
<td width="2%">&nbsp;</td>
<td width="80%" valign="top">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td class="heading_1" style="padding:5px;"><?php echo e($branch->name); ?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td valign="top" class="txt_1"  align="center">
                <table width="100%" cellpadding="2" cellspacing="4" bgcolor="#f3f3f3">
                    <tr>
                        <td width="30%" class="txt_1" style="text-align:right;">
                            <b>Display Order : </span>
                            </b>
                        </td>
                        <td width="30%" class="txt_1" style="text-align:right;">
                            <b><?php echo e($branch->display_order); ?></span>
                            </b>
                        </td>
                        <td>
                            <input type="hidden" name="ID" value="<?php echo e($branch->id); ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td class="txt_1" style="text-align:right;">
                            <b>Location Name :</span>
                            </b>
                        </td>
                        <td class="txt_1" style="text-align:right;">
                            <b><?php echo e($branch->name); ?></span>
                            </b>
                        </td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="txt_1"  style="text-align:right;" valign="top">
                            <b>Address : &nbsp;&nbsp;</b>
                        </td>
                        <td>&nbsp;</td>
                        <td class="txt_1"  style="text-align:right;" valign="top">
                            <b><?php echo e($branch->address); ?></b>
                        </td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="txt_1"  style="text-align:right;" valign="top">
                            <b>Country : &nbsp;&nbsp;</b>
                        </td>
                        <td>&nbsp;</td>
                        <td class="txt_1"  style="text-align:right;" valign="top">
                            <b><?php echo e($branch->city->state->country->name); ?></b>
                        </td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="txt_1"  style="text-align:right;" valign="top">
                            <b>State : &nbsp;&nbsp;</b>
                        </td>
                        <td>&nbsp;</td>
                        <td class="txt_1"  style="text-align:right;" valign="top">
                            <b><?php echo e($branch->city->state->name); ?></b>
                        </td>
                        <td>&nbsp;</td>
                    </tr>

                    <tr>
                        <td class="txt_1"  style="text-align:right;" valign="top">
                            <b>City : &nbsp;&nbsp;</b>
                        </td>
                        <td>&nbsp;</td>
                        <td class="txt_1"  style="text-align:right;" valign="top">
                            <b><?php echo e($branch->city->name); ?></b>
                        </td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="txt_1" style="text-align:right;">
                            <b>Phone No :
                            </b>
                        </td>
                        <td>&nbsp; </td>
                        <td class="txt_1" style="text-align:right;">
                            <?php echo e($branch->phone_number); ?>

                        </td>
                        <td>&nbsp; </td>
                    </tr>
                    <tr>
                        <td class="txt_1" style="text-align:right;">
                            <b>Email Id :
                            </b>
                        </td>
                        <td>&nbsp; </td
                        <td class="txt_1" style="text-align:right;">
                            <?php echo e($branch->email); ?>

                        </td>
                        <td>&nbsp; </td>
                    </tr>
                    <tr>
                        <td class="txt_1" style="text-align:right;">
                            <b>Business Hours :</b>
                        </td>
                        <td>&nbsp; </td>
                        <td class="txt_1" style="text-align:right;">
                            <b><?php echo e($branch->business_hours); ?>

                            </b>
                        </td>
                        <td>&nbsp; </td>
                    </tr>
                    <tr>
                        <td class="txt_1" style="text-align:right;">
                            <b>Landmark   :</b>
                        </td>
                        <td>&nbsp; </td>
                        <td class="txt_1" style="text-align:right;">
                            <b><?php echo e($branch->landmark); ?>

                            </b>
                        </td>
                        <td>&nbsp; </td>
                    </tr>
                    <tr>
                        <td>&nbsp;&nbsp;</td>
                        <td>
                            <form name="show_branch" id="show_branch" method="POST" action="{">
                            <a href="<?php echo e(route('branch_edit_route', ['id' => $branch->id])); ?>">Edit</a>
                        </td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
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
</tr><?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?></table>
</table>
</body>
</html>
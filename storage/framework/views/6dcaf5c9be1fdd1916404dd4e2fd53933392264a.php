<?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
<?php echo $__env->make('leftpanel', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<td width="2%">&nbsp;</td>
<td width="80%" valign="top">
  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border:0px solid #FF9933;">
    <tr>
      <td width="82%"  align="left" class="heading_1" style="padding-left:6px;">Rental Locations    </td>
      <td width="18%"  align="left" class="link">
        <div align="right" class="pas-txt">
          <a href=<?php echo e(route("branch_create_route")); ?>>Add Rental Location</a>
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
      <td colspan="2"  >
        <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#7199af"  >
          <tr>
            <td colspan="25" align="right" bgcolor="#FFFFFF">
              <div class="page-txt">
                <span class="proname">Page <?php echo e($branches->currentPage()); ?> of <?php echo e($branches->lastPage()); ?>&nbsp;</span>
              </div>
            </td>
          </tr>
          <tr bgcolor="#842a2a">
            <td width="33%" height="20" class="lp_title1">
              <div  class="con-txt-3">Location Name</div>
            </td>
            <td width="21%" class="lp_title1">
              <div align="center" class="con-txt-3">Display Order</div>
            </td>
            <td class="lp_title1" colspan="3">
              <div align="center" class="con-txt-3">Action</div>
            </td>
          </tr>
          <?php $__currentLoopData = $branches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $branch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr bgcolor="#FFFFFF">
          <form id="delete-branch-<?php echo e($branch->id); ?>" action="<?php echo e(route('branch_delete_route', ['id' => $branch->id,])); ?>" method="POST" style="display: none;">
                    <?php echo e(csrf_field()); ?>

                    <?php echo e(method_field('DELETE')); ?>

            <?php if($errors->has('id')): ?>
                <span class="help-block">
                    <strong><?php echo e($errors->first('id')); ?></strong>
                </span>
            <?php endif; ?>
            <td bgcolor="#FFFFFF" style="padding-left:5px;" class="txt_1">
              <div align="center" class="con-txt"><?php echo e($branch->name); ?></div>
            </td>
            <td bgcolor="#FFFFFF"  class="txt_1" style="text-align:center;"><?php echo e($branch->display_order); ?></td>
            <td width="15%"  align="center" bgcolor="#FFFFFF"  class="link_1" >
              <div align="center" class="txt">
                <b>
                  <a href="add_location.php?action=edit&location_id=1"  >Edit</a>
                </b>&nbsp;</div>
            </td>
            <td width="16%"  align="center" bgcolor="#FFFFFF"  class="link_1" >
              <div align="center" class="txt-2">
                <b> 
                    <button type="submit"> Delete </button>
                  </b>&nbsp;</div>
            </td>
            <td width="15%"  align="center" bgcolor="#FFFFFF" >
              <a href="manage_location.php?page=&action=stschng0&location_id=1">
                <?php if($branch->is_active == 1): ?>
                    <img src=<?php echo e(asset("/images/icon_active.gif")); ?> alt="Deactivate Location" title="Deactivate Location" width="10" height="10" border="0" />
                <?php else: ?>
                    <img src=<?php echo e(asset("/images/icon_close.gif")); ?> alt="Activate Location" title="Activate Location" width="10" height="10" border="0" />
                <?php endif; ?>
              </a>
            </td>
            </form>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td colspan="5" height="4" bgcolor="#659dba"/>
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
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript">
</script>
</body>
</html>
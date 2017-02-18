<?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('leftpanel', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
<td width="2%">&nbsp;</td>
        <td width="80%" valign="top">


        <!-- Content Start -->
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td class="heading_1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Welcome Admin</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="27%" height="50" align="center" bgcolor="#f4f4f4" style="padding:0px 20px; border:1px solid #e0e0e0;"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                     <tr>
                    <td width="22%" align="left"><a href=<?php echo e(url("password/change")); ?>><img src="images/icon_changepassword.gif" alt="Change Password" width="27" height="27" border="0" /></a></td>
                    <td width="78%" class="index_link"><a href=<?php echo e(url("password/change")); ?>>Change Password</a></td>
                  </tr>
                                 </table></td>
                <td width="4%">&nbsp;</td>
                <td width="35%" bgcolor="#F4F4F4" style="padding:0px 20px; border:1px solid #e0e0e0;"><table width="100%" border="0" cellspacing="0" cellpadding="0">

                                    <tr>
                    <td width="19%" align="left"><a href=<?php echo e(route('branch_list_route')); ?>><img src="images/icon_mangelocation.gif" alt="Manage Location" width="17" height="32" border="0" /></a></td>
                    <td width="81%" class="index_link"><a href=<?php echo e(route('branch_list_route')); ?>>Rental Locations</a></td>
                  </tr>
                   
                </table></td>
                <td width="4%">&nbsp;</td>
                <td width="31%" bgcolor="#F4F4F4" style="padding:0px 20px; border:1px solid #e0e0e0;"><table width="100%" border="0" cellspacing="0" cellpadding="0">

                                     <tr>
                    <td width="20%" align="left"><a href="manage_bookingspan.php"><img src="images/icon_manage_booking.gif" alt="Manage Booking Span" width="27" height="28" border="0" /></a></td>
                    <td width="80%" class="index_link"><a href="manage_bookingspan.php">Booking Span</a></td>
                  </tr>
                                  </table></td>
                </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                </tr>
              <tr>
                <td height="50" bgcolor="#F4F4F4" style="padding:0px 20px; border:1px solid #e0e0e0;"><table width="100%" border="0" cellspacing="0" cellpadding="0">

                                               <tr>
                    <td width="22%" align="left"><a href="manage_carclass.php"><img src="images/icon_manage_carclass.gif" alt="Manage Vehicle Class" width="30" height="25" border="0" /></a></td>
                    <td width="78%" class="index_link"><a href="manage_carclass.php">Vehicle Classes</a></td>
                  </tr>
                                  </table></td>
                <td>&nbsp;</td>
                <td bgcolor="#F4F4F4" style="padding:0px 20px; border:1px solid #e0e0e0;"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  
                <tr>
                    <td width="20%" align="left"><a href="manage_options.php"><img src="images/icon_manageoption.gif" alt="Manage Options" width="27" height="26" border="0" /></a></td>
                    <td width="80%" class="index_link"><a href="manage_options.php">Rental Options</a></td>
                  </tr>
                 

                </table></td>
                <td>&nbsp;</td>

                <td bgcolor="#F4F4F4" style="padding:0px 20px; border:1px solid #e0e0e0;"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                 <tr>
                    <td width="23%" align="left"><a href="manage_car.php"><img src="images/icon_managecar.gif" alt="Manage Vehicle" width="34" height="26" border="0" /></a></td>
                    <td width="77%" class="index_link"><a href="manage_car.php">Manage Vehicles</a></td>
                  </tr>
                    
                </table></td>

              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>

                <td bgcolor="#F4F4F4" style="padding:0px 20px; border:1px solid #e0e0e0;"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                 <tr>
                    <td width="25%" align="left"><a href="manage_season.php"><img src="images/icon_season.gif" alt="Manage Season" width="29" height="28" border="0" /></a></td>
                    <td width="75%" class="index_link"><a href="manage_season.php">Rental Seasons</a></td>
                  </tr>
                   
                </table></td>

                <td>&nbsp;</td>
                <td height="50" bgcolor="#F4F4F4" style="padding:0px 20px; border:1px solid #e0e0e0;"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                   <tr>
                    <td width="13%" align="left"><a href="manage_tax.php"><img src="images/icon_tax.gif" alt="Manage Taxes &amp; Surcharges" width="17" height="23" border="0" /></a></td>
                    <td width="87%" class="index_link"><a href="manage_tax.php">Taxes &amp; Surcharges</a></td>
                  </tr>
                                  </table></td>
                <td>&nbsp;</td>
                <td bgcolor="#F4F4F4" style="padding:0px 20px; border:1px solid #e0e0e0;"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                 <tr>
                    <td width="21%" align="left"><a href="add_cominfo.php"><img src="images/icon_cominfo.gif" alt="Company Information" width="22" height="25" border="0" /></a></td>
                    <td width="79%" class="index_link"><a href="add_cominfo.php?action=edit&com_id=1">Company Details</a></td>
                  </tr>
                  




                </table></td>
                </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td bgcolor="#F4F4F4" style="padding:0px 20px; border:1px solid #e0e0e0;"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                    <td width="24%" align="left"><a href="manage_lookfeel.php"><img src="images/icon_lookfeel.gif" alt="Look and Feel" width="26" height="23" border="0" /></a></td>
                    <td width="76%" class="index_link"><a href="add_look.php?action=edit&lookfeel_id=1">Pages Title and Banner</a></td>
                  </tr>
                                  </table></td>
                <td>&nbsp;</td>
                <td height="50" bgcolor="#F4F4F4" style="padding:0px 20px; border:1px solid #e0e0e0;"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                 <tr>
                    <td width="18%" align="left"><a href="common_settings.php"><img src="images/icon_settings.gif" alt="Common Settings" width="24" height="25" border="0" /></a></td>
                    <td width="82%" class="index_link"><a href="add_settings.php?action=edit&settings_id=1">System Configuration</a></td>
                  </tr>
                                  </table></td>
                <td>&nbsp;</td>
                <td bgcolor="#F4F4F4" style="padding:0px 20px; border:1px solid #e0e0e0;"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                 <tr>
                    <td width="24%" align="left"><a href="email_temp.php?action=edit&settings_id=1"><img src="images/icon_emailtemp.gif" alt="Email Template" width="24" height="22" border="0" /></a></td>
                    <td width="76%" class="index_link"><a href="email_temp.php?action=edit&id=1">Email Configuration</a></td>
                  </tr>
                                  </table></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td bgcolor="#F4F4F4" style="padding:0px 20px; border:1px solid #e0e0e0;"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                    <td width="24%" align="left">
                        <img src="images/icons_manage-booking.gif" alt="Logout" width="27" height="26" border="0" />
                    </td>
                    <td width="76%" class="index_link"><a href="manage_booking.php?action=search">Online Reservations</a></td>
                  </tr>
                                  </table></td>
                <td>&nbsp;</td>
                <td height="50" bgcolor="#F4F4F4" style="padding:0px 20px; border:1px solid #e0e0e0;"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                 
                <tr>
                    <td width="24%" align="left">
                        <img src="images/icons_agents.gif" alt="Logout" width="29" height="23" border="0" />
                    </td>
                    <td width="76%" class="index_link"><a href="manage_agent.php">Manage Agents</a></td>
                  </tr>

                                  </table></td>
                <td>&nbsp;</td>
                <td bgcolor="#F4F4F4" style="padding:0px 20px; border:1px solid #e0e0e0;"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                 
                <tr>
                    <td width="24%" align="left">
                        <img src="images/icons_manage-payment-requests.gif" alt="Agent Payment Request" width="25" height="25" border="0" title="Agent Payment Request"/>
                    </td>
                    <td width="76%" class="index_link"><a href="manage_payment_requests.php">Agents Payment Requests</a></td>
                  </tr>
                                  </table></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td bgcolor="#F4F4F4" style="padding:0px 20px; border:1px solid #e0e0e0;"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="24%" align="left">
                        <img src="images/icon_logout.gif" alt="Logout" width="23" height="29" border="0" /></td>
                    <td width="76%" class="index_link">
                        <a href="<?php echo e(route('logout')); ?>"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                    </td>
                  </tr>
                </table></td>
                <td>&nbsp;</td>
                <td height="50" >&nbsp;</td>
                <td>&nbsp;</td>
                <td >&nbsp;</td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td class="txt_1"></td>
          </tr>
        </table>


        <!-- Content End -->


        </td>
      </tr>
    </table></td>
  </tr>
<?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</table>
@include('header') 
@include('leftpanel')

<td width="2%">&nbsp;</td>
<td width="80%" valign="top">
    <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border:0px solid #FF9933;">
        <tr>
            <td colspan="3" align="left" valign="top">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="3%" height="25" align="left" bgcolor="#F3F3F3">
                            <input type="checkbox" name="cr2" id="cr2" onchange="show_hide();" />
                        </td>
                        <td width="32%" bgcolor="#F3F3F3" class="con-txt-4">Vehicle Rates                                                                  </td>
                        <td width="3%" align="left" bgcolor="#F3F3F3">
                            <input type="checkbox" name="od2" id="od2" onchange="show_hide();" />
                        </td>
                        <td width="25%" bgcolor="#F3F3F3" class="con-txt-4">Option Details</td>
                        <td width="3%" align="left" bgcolor="#F3F3F3">
                            <input type="checkbox" name="ts2" id="ts2" onchange="show_hide();" />
                        </td>
                        <td width="34%" bgcolor="#F3F3F3" class="con-txt-4">Taxes &amp; Surcharges</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="3" align="left" valign="top">&nbsp;</td>
        </tr>
        <tr>
            <td colspan="3" align="left" valign="top">
                <!-- Car Details Start -->
                <table width="100%" border="0" cellpadding="2" cellspacing="2" bgcolor="#FFFFFF">
                    <tr>
                        <td height="22" colspan="4" class="lp_title1"  style="padding-left:15px;">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td width="94%" class="con-txt-3">Vehicle Details</td>
                                    <td width="6%" class="con-txt-3">
                                        <a href="add_car_step1.php?action=edit&car_id=16">Edit</a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4" align="center" bgcolor="#E0E9ED" style="padding:10px 0px;">
                            <table width="98%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td width="18%" valign="top">
                                        <img src="../car_image/thumb/16.jpg" />
                                    </td>
                                    <td width="82%" class="con-txt-5" valign="top">
                                        <b>Description :</b>
                                        <br />Chevrolet Aveo 2008</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td width="15%" bgcolor="#e0e9ed" class="con-txt-4">Stock Number  :</td>
                        <td width="26%" bgcolor="#f3f3f3" class="con-txt-5">1</td>
                        <td width="18%" bgcolor="#E0E9ED" class="con-txt-4">Class :</td>
                        <td width="41%" bgcolor="#f3f3f3" class="con-txt-5">Economy</td>
                    </tr>
                    <tr>
                        <td bgcolor="#e0e9ed" class="con-txt-4">Reg. No  :</td>
                        <td bgcolor="#f3f3f3" class="con-txt-5">H-45 66</td>
                        <td bgcolor="#E0E9ED" class="con-txt-4">Maximum Weight :</td>
                        <td bgcolor="#f3f3f3" class="con-txt-5">2450</td>
                    </tr>
                    <tr>
                        <td bgcolor="#e0e9ed" class="con-txt-4"> VIN :</td>
                        <td bgcolor="#f3f3f3" class="con-txt-5">120941RHFN9823</td>
                        <td bgcolor="#E0E9ED" class="con-txt-4">Transmission :</td>
                        <td bgcolor="#f3f3f3" class="con-txt-5">Automatic</td>
                    </tr>
                    <tr>
                        <td bgcolor="#e0e9ed" class="con-txt-4">Make :</td>
                        <td bgcolor="#f3f3f3" class="con-txt-5">Chevrolet</td>
                        <td bgcolor="#E0E9ED" class="con-txt-4">Engine :</td>
                        <td bgcolor="#f3f3f3" class="con-txt-5">1.3</td>
                    </tr>
                    <tr>
                        <td bgcolor="#e0e9ed" class="con-txt-4">Model :</td>
                        <td bgcolor="#f3f3f3" class="con-txt-5">Aveo</td>
                        <td bgcolor="#E0E9ED" class="con-txt-4">Power Type :</td>
                        <td bgcolor="#f3f3f3" class="con-txt-5">Fuel</td>
                    </tr>
                    <tr>
                        <td bgcolor="#e0e9ed" class="con-txt-4">Year :</td>
                        <td bgcolor="#f3f3f3" class="con-txt-5">2010</td>
                        <td bgcolor="#E0E9ED" class="con-txt-4">Fuel Charges :</td>
                        <td bgcolor="#f3f3f3" class="con-txt-5">45.00</td>
                    </tr>
                    <tr>
                        <td bgcolor="#e0e9ed" class="con-txt-4">Color :</td>
                        <td bgcolor="#f3f3f3" class="con-txt-5">gray</td>
                        <td bgcolor="#E0E9ED" class="con-txt-4">Availability :</td>
                        <td bgcolor="#f3f3f3" class="con-txt-5">Available</td>
                    </tr>
                </table>
                <!-- Car Details End -->
            </td>
        </tr>
        <tr>
            <td colspan="3" align="left" valign="top">
                <!-- Car Rates Start -->
                <div style="display:none; width:100%; float:left;" id="cr">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
                        <tr>
                            <td height="22" colspan="3" style="padding-left:15px;">&nbsp;</td>
                        </tr>
                        <tr>
                            <td height="22" colspan="3" class="lp_title1"  style="padding-left:15px;">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td width="94%" class="con-txt-3">Vehicle Rate For Vehicle Class &gt; Economy                                                                                                                                                </td>
                                        <td width="6%" class="con-txt-3"/>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td bgcolor="#FFFFFF">
                                <table width="100%" border="0" cellspacing="2" cellpadding="0">
                                    <tr>
                                        <td height="24" bgcolor="#E0E9ED" class="con-txt-5">Monthly</td>
                                        <td height="24" bgcolor="#E0E9ED" class="con-txt-5">Weekly</td>
                                        <td height="24" bgcolor="#E0E9ED" class="con-txt-5">3days</td>
                                        <td height="24" bgcolor="#E0E9ED" class="con-txt-5">2days</td>
                                        <td height="24" bgcolor="#E0E9ED" class="con-txt-5">1 Day</td>
                                        <td height="24" bgcolor="#E0E9ED" class="con-txt-5">4 Days</td>
                                        <td height="24" bgcolor="#E0E9ED" class="con-txt-5">5 Days</td>
                                        <td height="24" bgcolor="#E0E9ED" class="con-txt-5">6 Days</td>
                                    </tr>
                                    <tr>
                                        <td bgcolor="#F3F3F3" class="con-txt-5">1200.00</td>
                                        <td bgcolor="#F3F3F3" class="con-txt-5">325.00</td>
                                        <td bgcolor="#F3F3F3" class="con-txt-5">150.00</td>
                                        <td bgcolor="#F3F3F3" class="con-txt-5">100.00</td>
                                        <td bgcolor="#F3F3F3" class="con-txt-5">50.00</td>
                                        <td bgcolor="#F3F3F3" class="con-txt-5">200.00</td>
                                        <td bgcolor="#F3F3F3" class="con-txt-5">250.00</td>
                                        <td bgcolor="#F3F3F3" class="con-txt-5">300.00</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>
                <!-- Car Rates End -->
            </td>
        </tr>
        <tr>
            <td colspan="3" align="left" valign="top">                                                              </td>
        </tr>
        <tr>
            <td colspan="3" align="left" valign="top">
                <!-- Option Details Start -->
                <div style="display:none; width:100%; float:left;" id="od">
                    <table width="100%" border="0" cellpadding="4" cellspacing="2" bgcolor="#FFFFFF">
                        <tr>
                            <td colspan="5" height="15"/>
                        </tr>
                        <tr>
                            <td height="22" colspan="5" class="lp_title1"  style="padding-left:15px;">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td width="94%" class="con-txt-3">Option Details</td>
                                        <td width="6%" class="con-txt-3"/>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td width="23%" height="22" bgcolor="#E0E9ED" class="con-txt-5">Child Seat</td>
                            <td width="20%" bgcolor="#E0E9ED" class="txt_1">Per Day                                                                              </td>
                            <td width="13%" bgcolor="#E0E9ED" class="txt_1">10.00                                                                                                                                                              </td>
                            <td width="6%" align="center" bgcolor="#E0E9ED">
                                <img src="images/green_circle.gif" width="11" height="11" />
                            </td>
                            <td width="12%" bgcolor="#E0E9ED" class="txt_1">Taxable</td>
                        </tr>
                        <tr>
                            <td width="23%" height="22" bgcolor="#E0E9ED" class="con-txt-5">Extra Driver</td>
                            <td width="20%" bgcolor="#E0E9ED" class="txt_1">Per Day                                                                              </td>
                            <td width="13%" bgcolor="#E0E9ED" class="txt_1">25.00                                                                                                                                                              </td>
                            <td width="6%" align="center" bgcolor="#E0E9ED">
                                <img src="images/red_circle.gif" width="11" height="11" />
                            </td>
                            <td width="12%" bgcolor="#E0E9ED" class="txt_1">Taxable</td>
                        </tr>
                        <tr>
                            <td width="23%" height="22" bgcolor="#E0E9ED" class="con-txt-5">GPS Device</td>
                            <td width="20%" bgcolor="#E0E9ED" class="txt_1">Per Rental                                                                              </td>
                            <td width="13%" bgcolor="#E0E9ED" class="txt_1">25.00                                                                                                                                                              </td>
                            <td width="6%" align="center" bgcolor="#E0E9ED">
                                <img src="images/red_circle.gif" width="11" height="11" />
                            </td>
                            <td width="12%" bgcolor="#E0E9ED" class="txt_1">Taxable</td>
                        </tr>
                    </table>
                </div>
                <!-- Tax Details End -->
            </td>
        </tr>
        <tr>
            <td colspan="3" align="left" valign="top">&nbsp;</td>
        </tr>
        <tr>
            <td colspan="3" align="left" valign="top">
                <!-- Taxes & Surcharges Start -->
                <div style="display:none; width:100%; float:left;" id="ts">
                    <table width="100%" border="0" cellpadding="4" cellspacing="2" bgcolor="#FFFFFF">
                        <tr>
                            <td height="22" colspan="8" class="lp_title1"  style="padding-left:15px;">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td width="94%" class="con-txt-3">Taxes &amp; Surcharges</td>
                                        <td width="6%" class="con-txt-3">&nbsp;</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td width="6%" height="22" align="center" bgcolor="#e0e9ed">
                                <img src="images/green_circle.gif" width="11" height="11" />
                            </td>
                            <td width="13%" bgcolor="#E0E9ED" class="txt_1">Apply Always</td>
                            <td width="14%" bgcolor="#E0E9ED" class="txt_1">Tax</td>
                            <td width="21%" bgcolor="#E0E9ED" class="txt_1">Tax                                                                          </td>
                            <td width="8%" bgcolor="#E0E9ED" class="txt_1">
                                <div align="center">+</div>
                            </td>
                            <td width="18%" bgcolor="#E0E9ED" class="txt_1">2.00                                                                                %  </td>
                            <td width="7%" bgcolor="#E0E9ED" align="center">
                                <img src="images/red_circle.gif" width="11" height="11" />
                            </td>
                            <td width="13%" bgcolor="#E0E9ED" class="txt_1">Taxable</td>
                        </tr>
                        <tr>
                            <td width="6%" height="22" align="center" bgcolor="#e0e9ed">
                                <img src="images/red_circle.gif" width="11" height="11" />
                            </td>
                            <td width="13%" bgcolor="#E0E9ED" class="txt_1">Apply Always</td>
                            <td width="14%" bgcolor="#E0E9ED" class="txt_1">Surcharges</td>
                            <td width="21%" bgcolor="#E0E9ED" class="txt_1">SurCharge                                                                          </td>
                            <td width="8%" bgcolor="#E0E9ED" class="txt_1">
                                <div align="center">+</div>
                            </td>
                            <td width="18%" bgcolor="#E0E9ED" class="txt_1">12.00                                                                                %  </td>
                            <td width="7%" bgcolor="#E0E9ED" align="center">
                                <img src="images/green_circle.gif" width="11" height="11" />
                            </td>
                            <td width="13%" bgcolor="#E0E9ED" class="txt_1">Taxable</td>
                        </tr>
                        <tr>
                            <td width="6%" height="22" align="center" bgcolor="#e0e9ed">
                                <img src="images/green_circle.gif" width="11" height="11" />
                            </td>
                            <td width="13%" bgcolor="#E0E9ED" class="txt_1">Apply Always</td>
                            <td width="14%" bgcolor="#E0E9ED" class="txt_1">Insurance</td>
                            <td width="21%" bgcolor="#E0E9ED" class="txt_1">SurCharge                                                                          </td>
                            <td width="8%" bgcolor="#E0E9ED" class="txt_1">
                                <div align="center">+</div>
                            </td>
                            <td width="18%" bgcolor="#E0E9ED" class="txt_1">2.50                                                                                %  </td>
                            <td width="7%" bgcolor="#E0E9ED" align="center">
                                <img src="images/green_circle.gif" width="11" height="11" />
                            </td>
                            <td width="13%" bgcolor="#E0E9ED" class="txt_1">Taxable</td>
                        </tr>
                        <tr>
                            <td width="6%" height="22" align="center" bgcolor="#e0e9ed">
                                <img src="images/red_circle.gif" width="11" height="11" />
                            </td>
                            <td width="13%" bgcolor="#E0E9ED" class="txt_1">Apply Always</td>
                            <td width="14%" bgcolor="#E0E9ED" class="txt_1">Baggage Loss</td>
                            <td width="21%" bgcolor="#E0E9ED" class="txt_1">SurCharge                                                                          </td>
                            <td width="8%" bgcolor="#E0E9ED" class="txt_1">
                                <div align="center">+</div>
                            </td>
                            <td width="18%" bgcolor="#E0E9ED" class="txt_1">4.00                                                                                  </td>
                            <td width="7%" bgcolor="#E0E9ED" align="center">
                                <img src="images/red_circle.gif" width="11" height="11" />
                            </td>
                            <td width="13%" bgcolor="#E0E9ED" class="txt_1">Taxable</td>
                        </tr>
                        <tr>
                            <td width="6%" height="22" align="center" bgcolor="#e0e9ed">
                                <img src="images/red_circle.gif" width="11" height="11" />
                            </td>
                            <td width="13%" bgcolor="#E0E9ED" class="txt_1">Apply Always</td>
                            <td width="14%" bgcolor="#E0E9ED" class="txt_1">P.A.I.</td>
                            <td width="21%" bgcolor="#E0E9ED" class="txt_1">SurCharge                                                                          </td>
                            <td width="8%" bgcolor="#E0E9ED" class="txt_1">
                                <div align="center">+</div>
                            </td>
                            <td width="18%" bgcolor="#E0E9ED" class="txt_1">20.00                                                                                  </td>
                            <td width="7%" bgcolor="#E0E9ED" align="center">
                                <img src="images/red_circle.gif" width="11" height="11" />
                            </td>
                            <td width="13%" bgcolor="#E0E9ED" class="txt_1">Taxable</td>
                        </tr>
                        <tr>
                            <td width="6%" height="22" align="center" bgcolor="#e0e9ed">
                                <img src="images/red_circle.gif" width="11" height="11" />
                            </td>
                            <td width="13%" bgcolor="#E0E9ED" class="txt_1">Apply Always</td>
                            <td width="14%" bgcolor="#E0E9ED" class="txt_1">C.D.Ws</td>
                            <td width="21%" bgcolor="#E0E9ED" class="txt_1">SurCharge                                                                          </td>
                            <td width="8%" bgcolor="#E0E9ED" class="txt_1">
                                <div align="center">+</div>
                            </td>
                            <td width="18%" bgcolor="#E0E9ED" class="txt_1">25.00                                                                                  </td>
                            <td width="7%" bgcolor="#E0E9ED" align="center">
                                <img src="images/green_circle.gif" width="11" height="11" />
                            </td>
                            <td width="13%" bgcolor="#E0E9ED" class="txt_1">Taxable</td>
                        </tr>
                    </table>
                </div>
                <!-- Taxes & Surcharges End -->
            </td>
        </tr>
    </table>
</td>
</tr>
</table>
</td>
</tr>
@include('footer')
</table>

</table>
<script type="text/javascript">
function show_hide()
{
    if(document.getElementById("cr2").checked==true)
	{
	    document.getElementById("cr").style.display="block";
	}
	else
	{
	    document.getElementById("cr").style.display="none";
	}
	
	if(document.getElementById("od2").checked==true)
	{
	    document.getElementById("od").style.display="block";
	}
	else
	{
	    document.getElementById("od").style.display="none";
	}
	
	if(document.getElementById("ts2").checked==true)
	{
	    document.getElementById("ts").style.display="block";
	}
	else
	{
	    document.getElementById("ts").style.display="none";
	}
	
}
</script>
</body>
</html>
@include('header')
@include('leftpanel')
<td width="2%">&nbsp;</td>
<td width="80%" valign="top">
    <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border:0px solid #FF9933;">
        <tr>
            <td colspan="3" width="10%"  align="left" class="heading_1" style="padding-left:6px;"> Manage Vehicles</td>
            <td  width="18%"  align="left" class="link">
                <div align="right" class="pas-txt">
                    <a href="add_car_step1.php?action=add">Add Vehicle</a>
                </div>
            </td>
        </tr>
        <tr>
            <tr height="10"/>
            <td   style="padding-left:6px;" align="left" class="av-txt"> Available in fleet: <span align="left" class="av-txt_c">10</span>
            </td>
            <td  style="padding-left:6px;" align="left" class="av-txt">Vehicles in Maintenance: <span align="left" class="av-txt_c">2</span>
            </td>
            <td colspan="2" style="padding-left:6px;" align="left" class="av-txt">Vehicles in Accident: <span align="left" class="av-txt_c">0</span>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="left" class="txt_1" style="padding-bottom:10px; padding-left:7px; font-weight:bold; color:#999900;"/>
        </tr>
        <tr class="lp_title1">
            <td colspan="4" style="padding:5px; ">
                <form name="sfrm" id="sfrm" style="margin:0px;" action="manage_car.php" method="post">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td  width="5%" class="con-txt-3">Class :</td>
                            <td width="10%" align="left">
                                <select name="car_class" id="car_class" style="width:160px;">
                                    <option value="0">Select Class</option>
                                    <option  value="1">Economy</option>
                                    <option  value="2">Luxury</option>
                                    <option  value="3">Compact</option>
                                    <option  value="4">Convertible</option>
                                    <option  value="5">Pickup</option>
                                    <option  value="9">SUV</option>
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
                                <input name="button" type="button" class="btn_2" style="border:1px solid #ffffff;" value="GO" onclick="javascript:chk_search();" />
                            </td>
                            <td rowspan="2" width="10%">
                                <input name="button2" type="button" style="border:1px solid #ffffff;" class="btn_2" value="Show All" onclick="javascript:show_all();" />
                            </td>
                        </tr>
                        <tr>
                            <td  width="8%" class="con-txt-3">Availability :</td>
                            <td width="10%" align="left">
                                <select name="car_av" id="car_av" style="width:160px;">
                                    <option value="0">Select Availability</option>
                                    <option  value="1">Available</option>
                                    <option  value="2">Maintenance</option>
                                    <option  value="3">Accident</option>
                                    <option  value="4">Sold</option>
                                    <option  value="5">Pending Sale</option>
                                    <option  value="6">List on Site for Sale</option>
                                    <option  value="7">Disposed</option>
                                </select>
                                <td  align="right" class="con-txt-3">Stock #:</td>
                                <td  align="center">
                                    <input type="text" name="stock" id="stock" value=""/>
                                </td>
                                <td  align="right" class="con-txt-3">License Plate #:</td>
                                <td  align="center">
                                    <input type="text" name="license" id="license" value=""/>
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
                            <td  style="padding-left:6px;" align="left" class="av-txt">Vehicles Selected: <span align="left" class="av-txt_c">12</span>
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
                        <!-->khalique<-->
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
                                                                    <b>Stock #:</b>
                                                                </td>
                                                                <td>
                                                                    <span class="txt_1" style="text-align:center;">8</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <b>License #:</b>
                                                                </td>
                                                                <td>
                                                                    <span class="txt_1" style="text-align:center;">G-45 34</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <b>Class:</b>
                                                                </td>
                                                                <td>
                                                                    <span class="txt_1" style="text-align:center;">SUV</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <b>Availability:</b>
                                                                </td>
                                                                <td>
                                                                    <span class="			av-txt_c																		 				">Maintenance</span>
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
                                                                    <span class="txt_1" style="text-align:center;">Mitsubishi</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <b>Model:</b>
                                                                </td>
                                                                <td>
                                                                    <span class="txt_1" style="text-align:center;">Montero</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <b>Color:</b>
                                                                </td>
                                                                <td>
                                                                    <span class="txt_1" style="text-align:center;">Gray</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <b>Year:</b>
                                                                </td>
                                                                <td>
                                                                    <span class="txt_1" style="text-align:center;">2008</span>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                    <td valign="top" >
                                                        <table>
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
                                                                            <td>
                                                                                <img src="images/icon_ac.jpg" alt="Air Conditioning" title="Air Conditioning" width="23" height="23" />
                                                                            </td>
                                                                            <td width="3"/>
                                                                            <td>
                                                                                <img src="images/icon_auto_trans.jpg" alt="Automatic Transmission" title="Automatic Transmission" width="23" height="23" />
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td valign="top" class="txt_3">x 6</td>
                                                                            <td class="txt_3"/>
                                                                            <td valign="top" class="txt_3">x 4</td>
                                                                            <td class="txt_3"/>
                                                                            <td valign="top" class="txt_3">x 5</td>
                                                                            <td/>
                                                                            <td>&nbsp;</td>
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
                                                                    <br />Mitsubishi Montero																		</td>
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
                                                                            <a href="add_car_step1.php?action=edit&car_id=7"  >Edit</a>
                                                                        </b>&nbsp;</span> | <span align="center" class="txt-2">
                                                                        <b>
                                                                            <a href="manage_car.php?action=delete&car_id=7"  onclick="javascript:return confirm('Are you sure?')" >Delete</a>
                                                                        </b>&nbsp;</span> | <span align="center" class="txt-2">
                                                                        <b>
                                                                            <a href="details_car.php?action=details&car_id=7">Details</a>
                                                                        </b>&nbsp;</span>
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
                    <!-->khalique<-->
                    </table>
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
<script type="text/javascript" src="lightbox/js/prototype.js"></script>
<script type="text/javascript" src="lightbox/js/scriptaculous.js?load=effects,builder"></script>
<script type="text/javascript" src="lightbox/js/lightbox.js"></script>
<script type="text/javascript">
<!--
function chk_search(){ //v3.0

        if(document.getElementById("make").value.replace(/^\s+|\s+$/g,'')=='' && document.getElementById("model").value.replace(/^\s+|\s+$/g,'')=='' && document.getElementById("stock").value.replace(/^\s+|\s+$/g,'')=='' && document.getElementById("license").value.replace(/^\s+|\s+$/g,'')=='' && document.getElementById("car_class").value=='0' && document.getElementById("car_av").value=='0')
        {
          alert("Please Enter Atleast One Search Criteria.....");

        }
        else
        {
           document.getElementById("sfrm").submit();
        }

}
function show_all(){ //v3.0

    document.getElementById("car_class").value=0;
	document.getElementById("car_av").value=0;
    document.getElementById("sfrm").submit();


}

//-->
</script>
</script>
</body>
</html>
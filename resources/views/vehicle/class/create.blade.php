@include('header')
@include('leftpanel')
<td width="2%">&nbsp;</td>
<td width="80%" valign="top">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td class="heading_1" style="padding:5px;">Add Vehicle Classes</td>
        </tr>
        <tr>
            <td width="10"valign="top" class="txt_1"  align="center">
                <form  method="POST" action="add_carclass.php" onsubmit="return check_carclass();"  style="padding-left:5px;" enctype="multipart/form-data">
                    <table width="100%" cellpadding="2" cellspacing="4" class="tab-border" bgcolor="#f3f3f3">
                        <tr>
                            <td colspan="6" style="padding-left:70px;">Fields marked with ' <span style="color:#8e2020; font-size:15px;">*</span> ' are mandatory.</td>
                        </tr>
                        <tr>
                            <td class="txt_1" style="text-align:right; width: 518px;">
                                <b>Language : </b>
                            </td>
                            <td width="50" style="text-align:center;" class="txt_1" >
                                <b>English</b>
                            </td>
                            <td width="5%">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="txt_1" style="text-align:right; width: 518px;">
                                <b>Vehicle Class Name : <span style="color:#8e2020; font-size:15px;">*</span>
                                </b>
                            </td>
                            <td width="50" >
                                <input size="20"type="text" name="class_name" id="class_name" class="txtbox" value="" style="width: 237px" />
                            </td>
                            <td align="center" width="50" >
                                <input  size="20" type="text" name="class_name_lang_2" id="class_name_lang_2" class="txtbox" value="" />
                            </td>&nbsp;																								<td align="center" width="50" >
                                <input  size="20" type="text" name="class_name_lang_3" id="class_name_lang_3" class="txtbox" value="" />
                            </td>&nbsp;																								<td align="center" width="50" >
                                <input  size="20" type="text" name="class_name_lang_4" id="class_name_lang_4" class="txtbox" value="" />
                            </td>&nbsp;																								<td width="5%">&nbsp;</td>
                        </tr>
                        <tr>
                            <td valign="top" class="txt_1" style="text-align:right; width: 518px;">
                                <b>Vehicle Class Description : <span style="color:#8e2020; font-size:15px;">*</span>
                                </b>
                            </td>
                            <td>
                                <textarea rows="5" name="class_desc" id="class_desc" style="width: 238px"/>
                            </td>&nbsp;<td align="center" >
                                <textarea rows="5" cols="16" name="class_desc_lang_2" id="class_desc_lang_2"/>
                            </td>																										&nbsp;<td align="center" >
                                <textarea rows="5" cols="16" name="class_desc_lang_3" id="class_desc_lang_3"/>
                            </td>																										&nbsp;<td align="center" >
                                <textarea rows="5" cols="16" name="class_desc_lang_4" id="class_desc_lang_4"/>
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="txt_1" style="text-align:right; width: 518px;">
                                <b>Display Order : <span style="color:#8e2020; font-size:15px;">*</span>
                                </b>
                            </td>
                            <td>
                                <input type="text" name="disp_order" id="disp_order" class="txtbox" value="" />
                            </td>
                            <td>
                                <input type="hidden" name="ID" value="" />
                            </td>
                        </tr>
                        <tr>
                            <td class="txt_1" style="text-align:right; width: 518px;">
                                <b>Daily Rate  : <span style="color:#8e2020; font-size:15px;">*</span>
                                </b>
                            </td>
                            <td>
                                <input type="text" name="daily_rate" id="daily_rate" class="txtbox" value="" />
                            </td>
                            <td>
                                <input type="hidden" name="ID" value="" />
                            </td>
                        </tr>
                        <tr>
                            <td class="txt_1" style="text-align:right; width: 518px;">
                                <b>Weekly rate : <span style="color:#8e2020; font-size:15px;">*</span>
                                </b>
                            </td>
                            <td>
                                <input type="text" name="weekly_rate" id="weekly_rate" class="txtbox" value="" />
                            </td>
                            <td>
                                <input type="hidden" name="ID" value="" />
                            </td>
                        </tr>
                        <tr>
                            <td class="txt_1" style="text-align:right; width: 518px;">
                                <b>Vehicle Class Image  : <span style="color:#8e2020; font-size:15px;">*</span>
                                </b>
                            </td>
                            <td>
                                <input type="file" name="classimage"  class="txtbox"/>
                                <img src="../car_class_image/thumb/?1487083567">
                                </td>
                                <td>
                                    <input type="hidden" name="ID" value="" />
                                </td>
                            </tr>
                            <tr>
                                <td  colspan="3" class="lp_title1"  style="text-align:center">
                                    <b>--------------------------------------------------Default Rates--------------------------------------------------</b>
                                </td>
                            </tr>
                            <tr>
                                <td class="txt_1" style="text-align:right; width: 518px;">
                                    <b>1 Day : <span style="color:#8e2020; font-size:15px;">*</span>
                                    </b>
                                </td>
                                <td>
                                    <input type="text" name="span~5" id="span5" class="txtbox" value="0" />
                                </td>
                                <td>&nbsp; </td>
                            </tr>
                            <tr>
                                <td class="txt_1" style="text-align:right; width: 518px;">
                                    <b>2days : <span style="color:#8e2020; font-size:15px;">*</span>
                                    </b>
                                </td>
                                <td>
                                    <input type="text" name="span~4" id="span4" class="txtbox" value="0" />
                                </td>
                                <td>&nbsp; </td>
                            </tr>
                            <tr>
                                <td class="txt_1" style="text-align:right; width: 518px;">
                                    <b>3days : <span style="color:#8e2020; font-size:15px;">*</span>
                                    </b>
                                </td>
                                <td>
                                    <input type="text" name="span~3" id="span3" class="txtbox" value="0" />
                                </td>
                                <td>&nbsp; </td>
                            </tr>
                            <tr>
                                <td class="txt_1" style="text-align:right; width: 518px;">
                                    <b>4 Days : <span style="color:#8e2020; font-size:15px;">*</span>
                                    </b>
                                </td>
                                <td>
                                    <input type="text" name="span~6" id="span6" class="txtbox" value="0" />
                                </td>
                                <td>&nbsp; </td>
                            </tr>
                            <tr>
                                <td class="txt_1" style="text-align:right; width: 518px;">
                                    <b>5 Days : <span style="color:#8e2020; font-size:15px;">*</span>
                                    </b>
                                </td>
                                <td>
                                    <input type="text" name="span~7" id="span7" class="txtbox" value="0" />
                                </td>
                                <td>&nbsp; </td>
                            </tr>
                            <tr>
                                <td class="txt_1" style="text-align:right; width: 518px;">
                                    <b>6 Days : <span style="color:#8e2020; font-size:15px;">*</span>
                                    </b>
                                </td>
                                <td>
                                    <input type="text" name="span~8" id="span8" class="txtbox" value="0" />
                                </td>
                                <td>&nbsp; </td>
                            </tr>
                            <tr>
                                <td class="txt_1" style="text-align:right; width: 518px;">
                                    <b>Weekly : <span style="color:#8e2020; font-size:15px;">*</span>
                                    </b>
                                </td>
                                <td>
                                    <input type="text" name="span~2" id="span2" class="txtbox" value="0" />
                                </td>
                                <td>&nbsp; </td>
                            </tr>
                            <tr>
                                <td class="txt_1" style="text-align:right; width: 518px;">
                                    <b>Monthly : <span style="color:#8e2020; font-size:15px;">*</span>
                                    </b>
                                </td>
                                <td>
                                    <input type="text" name="span~1" id="span1" class="txtbox" value="0" />
                                </td>
                                <td>&nbsp; </td>
                            </tr>
                            <tr>
                                <td  colspan="3" class="lp_title1"  style="text-align:center" >
                                    <b>--------------------------------------------------High Season--------------------------------------------------</b>
                                </td>
                            </tr>
                            <tr>
                                <td class="txt_1" style="text-align:right; width: 518px;">
                                    <b>1 Day : <span style="color:#8e2020; font-size:15px;">*</span>
                                    </b>
                                </td>
                                <td>
                                    <input type="text" name="span~5~3" id="span53" class="txtbox" value="0" />
                                </td>
                                <td>&nbsp; </td>
                            </tr>
                            <tr>
                                <td class="txt_1" style="text-align:right; width: 518px;">
                                    <b>2days : <span style="color:#8e2020; font-size:15px;">*</span>
                                    </b>
                                </td>
                                <td>
                                    <input type="text" name="span~4~3" id="span43" class="txtbox" value="0" />
                                </td>
                                <td>&nbsp; </td>
                            </tr>
                            <tr>
                                <td class="txt_1" style="text-align:right; width: 518px;">
                                    <b>3days : <span style="color:#8e2020; font-size:15px;">*</span>
                                    </b>
                                </td>
                                <td>
                                    <input type="text" name="span~3~3" id="span33" class="txtbox" value="0" />
                                </td>
                                <td>&nbsp; </td>
                            </tr>
                            <tr>
                                <td class="txt_1" style="text-align:right; width: 518px;">
                                    <b>4 Days : <span style="color:#8e2020; font-size:15px;">*</span>
                                    </b>
                                </td>
                                <td>
                                    <input type="text" name="span~6~3" id="span63" class="txtbox" value="0" />
                                </td>
                                <td>&nbsp; </td>
                            </tr>
                            <tr>
                                <td class="txt_1" style="text-align:right; width: 518px;">
                                    <b>5 Days : <span style="color:#8e2020; font-size:15px;">*</span>
                                    </b>
                                </td>
                                <td>
                                    <input type="text" name="span~7~3" id="span73" class="txtbox" value="0" />
                                </td>
                                <td>&nbsp; </td>
                            </tr>
                            <tr>
                                <td class="txt_1" style="text-align:right; width: 518px;">
                                    <b>6 Days : <span style="color:#8e2020; font-size:15px;">*</span>
                                    </b>
                                </td>
                                <td>
                                    <input type="text" name="span~8~3" id="span83" class="txtbox" value="0" />
                                </td>
                                <td>&nbsp; </td>
                            </tr>
                            <tr>
                                <td class="txt_1" style="text-align:right; width: 518px;">
                                    <b>Weekly : <span style="color:#8e2020; font-size:15px;">*</span>
                                    </b>
                                </td>
                                <td>
                                    <input type="text" name="span~2~3" id="span23" class="txtbox" value="0" />
                                </td>
                                <td>&nbsp; </td>
                            </tr>
                            <tr>
                                <td class="txt_1" style="text-align:right; width: 518px;">
                                    <b>Monthly : <span style="color:#8e2020; font-size:15px;">*</span>
                                    </b>
                                </td>
                                <td>
                                    <input type="text" name="span~1~3" id="span13" class="txtbox" value="0" />
                                </td>
                                <td>&nbsp; </td>
                            </tr>
                            <tr>
                                <td  colspan="3" class="lp_title1"  style="text-align:center" >
                                    <b>--------------------------------------------------Low Season--------------------------------------------------</b>
                                </td>
                            </tr>
                            <tr>
                                <td class="txt_1" style="text-align:right; width: 518px;">
                                    <b>1 Day : <span style="color:#8e2020; font-size:15px;">*</span>
                                    </b>
                                </td>
                                <td>
                                    <input type="text" name="span~5~4" id="span54" class="txtbox" value="0" />
                                </td>
                                <td>&nbsp; </td>
                            </tr>
                            <tr>
                                <td class="txt_1" style="text-align:right; width: 518px;">
                                    <b>2days : <span style="color:#8e2020; font-size:15px;">*</span>
                                    </b>
                                </td>
                                <td>
                                    <input type="text" name="span~4~4" id="span44" class="txtbox" value="0" />
                                </td>
                                <td>&nbsp; </td>
                            </tr>
                            <tr>
                                <td class="txt_1" style="text-align:right; width: 518px;">
                                    <b>3days : <span style="color:#8e2020; font-size:15px;">*</span>
                                    </b>
                                </td>
                                <td>
                                    <input type="text" name="span~3~4" id="span34" class="txtbox" value="0" />
                                </td>
                                <td>&nbsp; </td>
                            </tr>
                            <tr>
                                <td class="txt_1" style="text-align:right; width: 518px;">
                                    <b>4 Days : <span style="color:#8e2020; font-size:15px;">*</span>
                                    </b>
                                </td>
                                <td>
                                    <input type="text" name="span~6~4" id="span64" class="txtbox" value="0" />
                                </td>
                                <td>&nbsp; </td>
                            </tr>
                            <tr>
                                <td class="txt_1" style="text-align:right; width: 518px;">
                                    <b>5 Days : <span style="color:#8e2020; font-size:15px;">*</span>
                                    </b>
                                </td>
                                <td>
                                    <input type="text" name="span~7~4" id="span74" class="txtbox" value="0" />
                                </td>
                                <td>&nbsp; </td>
                            </tr>
                            <tr>
                                <td class="txt_1" style="text-align:right; width: 518px;">
                                    <b>6 Days : <span style="color:#8e2020; font-size:15px;">*</span>
                                    </b>
                                </td>
                                <td>
                                    <input type="text" name="span~8~4" id="span84" class="txtbox" value="0" />
                                </td>
                                <td>&nbsp; </td>
                            </tr>
                            <tr>
                                <td class="txt_1" style="text-align:right; width: 518px;">
                                    <b>Weekly : <span style="color:#8e2020; font-size:15px;">*</span>
                                    </b>
                                </td>
                                <td>
                                    <input type="text" name="span~2~4" id="span24" class="txtbox" value="0" />
                                </td>
                                <td>&nbsp; </td>
                            </tr>
                            <tr>
                                <td class="txt_1" style="text-align:right; width: 518px;">
                                    <b>Monthly : <span style="color:#8e2020; font-size:15px;">*</span>
                                    </b>
                                </td>
                                <td>
                                    <input type="text" name="span~1~4" id="span14" class="txtbox" value="0" />
                                </td>
                                <td>&nbsp; </td>
                            </tr>
                            <tr>
                                <td  colspan="3" class="lp_title1"  style="text-align:center" >
                                    <b>--------------------------------------------------Mid Season--------------------------------------------------</b>
                                </td>
                            </tr>
                            <tr>
                                <td class="txt_1" style="text-align:right; width: 518px;">
                                    <b>1 Day : <span style="color:#8e2020; font-size:15px;">*</span>
                                    </b>
                                </td>
                                <td>
                                    <input type="text" name="span~5~2" id="span52" class="txtbox" value="0" />
                                </td>
                                <td>&nbsp; </td>
                            </tr>
                            <tr>
                                <td class="txt_1" style="text-align:right; width: 518px;">
                                    <b>2days : <span style="color:#8e2020; font-size:15px;">*</span>
                                    </b>
                                </td>
                                <td>
                                    <input type="text" name="span~4~2" id="span42" class="txtbox" value="0" />
                                </td>
                                <td>&nbsp; </td>
                            </tr>
                            <tr>
                                <td class="txt_1" style="text-align:right; width: 518px;">
                                    <b>3days : <span style="color:#8e2020; font-size:15px;">*</span>
                                    </b>
                                </td>
                                <td>
                                    <input type="text" name="span~3~2" id="span32" class="txtbox" value="0" />
                                </td>
                                <td>&nbsp; </td>
                            </tr>
                            <tr>
                                <td class="txt_1" style="text-align:right; width: 518px;">
                                    <b>4 Days : <span style="color:#8e2020; font-size:15px;">*</span>
                                    </b>
                                </td>
                                <td>
                                    <input type="text" name="span~6~2" id="span62" class="txtbox" value="0" />
                                </td>
                                <td>&nbsp; </td>
                            </tr>
                            <tr>
                                <td class="txt_1" style="text-align:right; width: 518px;">
                                    <b>5 Days : <span style="color:#8e2020; font-size:15px;">*</span>
                                    </b>
                                </td>
                                <td>
                                    <input type="text" name="span~7~2" id="span72" class="txtbox" value="0" />
                                </td>
                                <td>&nbsp; </td>
                            </tr>
                            <tr>
                                <td class="txt_1" style="text-align:right; width: 518px;">
                                    <b>6 Days : <span style="color:#8e2020; font-size:15px;">*</span>
                                    </b>
                                </td>
                                <td>
                                    <input type="text" name="span~8~2" id="span82" class="txtbox" value="0" />
                                </td>
                                <td>&nbsp; </td>
                            </tr>
                            <tr>
                                <td class="txt_1" style="text-align:right; width: 518px;">
                                    <b>Weekly : <span style="color:#8e2020; font-size:15px;">*</span>
                                    </b>
                                </td>
                                <td>
                                    <input type="text" name="span~2~2" id="span22" class="txtbox" value="0" />
                                </td>
                                <td>&nbsp; </td>
                            </tr>
                            <tr>
                                <td class="txt_1" style="text-align:right; width: 518px;">
                                    <b>Monthly : <span style="color:#8e2020; font-size:15px;">*</span>
                                    </b>
                                </td>
                                <td>
                                    <input type="text" name="span~1~2" id="span12" class="txtbox" value="0" />
                                </td>
                                <td>&nbsp; </td>
                            </tr>
                            <tr>
                                <td style="width: 518px">&nbsp;&nbsp;                                               </td>
                                <td>
                                    <input type="hidden" name="ID" value="" />
                                    <input type="submit" name="add_class" id="sub_but" value="Add" class="btn_1" />
                                </td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td style="width: 518px">&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                    </form>
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
<script>
                            function check_carclass()
                             {
                  if(document.getElementById('class_name').value.replace(/^\s+|\s+$/g,'')=='')
                  {
                    alert('Please Enter Class Name.....');
                    document.getElementById('class_name').focus();
                    return false;
                  }
                  if(document.getElementById('class_desc').value.replace(/^\s+|\s+$/g,'')=='')
                  {
                    alert('Please Enter Class Description.....');
                    document.getElementById('class_desc').focus();
                    return false;
                  }

                  if(document.getElementById('disp_order').value.replace(/^\s+|\s+$/g,'')=='')
                  {
                    alert('Please Enter Display Order.....');
                    document.getElementById('disp_order').focus();
                    return false;
                  }

                  if(isNaN(document.getElementById('disp_order').value))
                  {
                    alert('Please Enter Display Order As Numeric Value.....');
                     document.getElementById('disp_order').value='';
                    document.getElementById('disp_order').focus();
                    return false;
                  }



                if(document.getElementById('daily_rate').value.replace(/^\s+|\s+$/g,'')=='')
                  {
                    alert('Please Enter Daily rate.....');
                    document.getElementById('daily_rate').focus();
                    return false;
                  }

                  if(isNaN(document.getElementById('daily_rate').value))
                  {
                    alert('Please Enter Daily rate As Numeric Value.....');
                     document.getElementById('daily_rate').value='';
                    document.getElementById('daily_rate').focus();
                    document.getElementById('daily_rate').focus();
                    return false;
                  }

                 if(document.getElementById('weekly_rate').value.replace(/^\s+|\s+$/g,'')=='')
                  {
                    alert('Please Enter Weekly rate.....');
                    document.getElementById('weekly_rate').focus();
                    return false;
                  }

                  if(isNaN(document.getElementById('weekly_rate').value))
                  {
                    alert('Please Enter Weekly rate As Numeric Value.....');
                     document.getElementById('weekly_rate').value='';
                    document.getElementById('weekly_rate').focus();
                    document.getElementById('weekly_rate').focus();
                    return false;
                  }
                   if((document.getElementById('classimage').value=='')&&(document.getElementById('sub_but').value=='Add'))
                  {
                    alert('Please Choose an image.....');
                    document.getElementById('classimage').focus();
                    return false;
                  }





                  if(document.getElementById('span~5').value.replace(/^\s+|\s+$/g,'')=='')
                      {
                        alert('Please Enter Default 1 Day Rate.....');
                        document.getElementById('span~5').focus();
                        return false;
                      }

                      if(isNaN(document.getElementById('span~5').value))
                      {
                        alert('Please Enter Default 1 Day Rate As Numeric Value.....');
                         document.getElementById('span~5').value='';
                        document.getElementById('span~5').focus();
                        return false;
                      }if(document.getElementById('span~4').value.replace(/^\s+|\s+$/g,'')=='')
                      {
                        alert('Please Enter Default 2days Rate.....');
                        document.getElementById('span~4').focus();
                        return false;
                      }

                      if(isNaN(document.getElementById('span~4').value))
                      {
                        alert('Please Enter Default 2days Rate As Numeric Value.....');
                         document.getElementById('span~4').value='';
                        document.getElementById('span~4').focus();
                        return false;
                      }if(document.getElementById('span~3').value.replace(/^\s+|\s+$/g,'')=='')
                      {
                        alert('Please Enter Default 3days Rate.....');
                        document.getElementById('span~3').focus();
                        return false;
                      }

                      if(isNaN(document.getElementById('span~3').value))
                      {
                        alert('Please Enter Default 3days Rate As Numeric Value.....');
                         document.getElementById('span~3').value='';
                        document.getElementById('span~3').focus();
                        return false;
                      }if(document.getElementById('span~6').value.replace(/^\s+|\s+$/g,'')=='')
                      {
                        alert('Please Enter Default 4 Days Rate.....');
                        document.getElementById('span~6').focus();
                        return false;
                      }

                      if(isNaN(document.getElementById('span~6').value))
                      {
                        alert('Please Enter Default 4 Days Rate As Numeric Value.....');
                         document.getElementById('span~6').value='';
                        document.getElementById('span~6').focus();
                        return false;
                      }if(document.getElementById('span~7').value.replace(/^\s+|\s+$/g,'')=='')
                      {
                        alert('Please Enter Default 5 Days Rate.....');
                        document.getElementById('span~7').focus();
                        return false;
                      }

                      if(isNaN(document.getElementById('span~7').value))
                      {
                        alert('Please Enter Default 5 Days Rate As Numeric Value.....');
                         document.getElementById('span~7').value='';
                        document.getElementById('span~7').focus();
                        return false;
                      }if(document.getElementById('span~8').value.replace(/^\s+|\s+$/g,'')=='')
                      {
                        alert('Please Enter Default 6 Days Rate.....');
                        document.getElementById('span~8').focus();
                        return false;
                      }

                      if(isNaN(document.getElementById('span~8').value))
                      {
                        alert('Please Enter Default 6 Days Rate As Numeric Value.....');
                         document.getElementById('span~8').value='';
                        document.getElementById('span~8').focus();
                        return false;
                      }if(document.getElementById('span~2').value.replace(/^\s+|\s+$/g,'')=='')
                      {
                        alert('Please Enter Default Weekly Rate.....');
                        document.getElementById('span~2').focus();
                        return false;
                      }

                      if(isNaN(document.getElementById('span~2').value))
                      {
                        alert('Please Enter Default Weekly Rate As Numeric Value.....');
                         document.getElementById('span~2').value='';
                        document.getElementById('span~2').focus();
                        return false;
                      }if(document.getElementById('span~1').value.replace(/^\s+|\s+$/g,'')=='')
                      {
                        alert('Please Enter Default Monthly Rate.....');
                        document.getElementById('span~1').focus();
                        return false;
                      }

                      if(isNaN(document.getElementById('span~1').value))
                      {
                        alert('Please Enter Default Monthly Rate As Numeric Value.....');
                         document.getElementById('span~1').value='';
                        document.getElementById('span~1').focus();
                        return false;
                      }if(document.getElementById('span~5~3').value.replace(/^\s+|\s+$/g,'')=='')
                      {
                        alert('Please Enter High Season 1 Day Rate.....');
                        document.getElementById('span~5~3').focus();
                        return false;
                      }

                      if(isNaN(document.getElementById('span~5~3').value))
                      {
                        alert('Please Enter High Season 1 Day Rate As Numeric Value.....');
                         document.getElementById('span~5~3').value='';
                        document.getElementById('span~5~3').focus();
                        return false;
                      }if(document.getElementById('span~4~3').value.replace(/^\s+|\s+$/g,'')=='')
                      {
                        alert('Please Enter High Season 2days Rate.....');
                        document.getElementById('span~4~3').focus();
                        return false;
                      }

                      if(isNaN(document.getElementById('span~4~3').value))
                      {
                        alert('Please Enter High Season 2days Rate As Numeric Value.....');
                         document.getElementById('span~4~3').value='';
                        document.getElementById('span~4~3').focus();
                        return false;
                      }if(document.getElementById('span~3~3').value.replace(/^\s+|\s+$/g,'')=='')
                      {
                        alert('Please Enter High Season 3days Rate.....');
                        document.getElementById('span~3~3').focus();
                        return false;
                      }

                      if(isNaN(document.getElementById('span~3~3').value))
                      {
                        alert('Please Enter High Season 3days Rate As Numeric Value.....');
                         document.getElementById('span~3~3').value='';
                        document.getElementById('span~3~3').focus();
                        return false;
                      }if(document.getElementById('span~6~3').value.replace(/^\s+|\s+$/g,'')=='')
                      {
                        alert('Please Enter High Season 4 Days Rate.....');
                        document.getElementById('span~6~3').focus();
                        return false;
                      }

                      if(isNaN(document.getElementById('span~6~3').value))
                      {
                        alert('Please Enter High Season 4 Days Rate As Numeric Value.....');
                         document.getElementById('span~6~3').value='';
                        document.getElementById('span~6~3').focus();
                        return false;
                      }if(document.getElementById('span~7~3').value.replace(/^\s+|\s+$/g,'')=='')
                      {
                        alert('Please Enter High Season 5 Days Rate.....');
                        document.getElementById('span~7~3').focus();
                        return false;
                      }

                      if(isNaN(document.getElementById('span~7~3').value))
                      {
                        alert('Please Enter High Season 5 Days Rate As Numeric Value.....');
                         document.getElementById('span~7~3').value='';
                        document.getElementById('span~7~3').focus();
                        return false;
                      }if(document.getElementById('span~8~3').value.replace(/^\s+|\s+$/g,'')=='')
                      {
                        alert('Please Enter High Season 6 Days Rate.....');
                        document.getElementById('span~8~3').focus();
                        return false;
                      }

                      if(isNaN(document.getElementById('span~8~3').value))
                      {
                        alert('Please Enter High Season 6 Days Rate As Numeric Value.....');
                         document.getElementById('span~8~3').value='';
                        document.getElementById('span~8~3').focus();
                        return false;
                      }if(document.getElementById('span~2~3').value.replace(/^\s+|\s+$/g,'')=='')
                      {
                        alert('Please Enter High Season Weekly Rate.....');
                        document.getElementById('span~2~3').focus();
                        return false;
                      }

                      if(isNaN(document.getElementById('span~2~3').value))
                      {
                        alert('Please Enter High Season Weekly Rate As Numeric Value.....');
                         document.getElementById('span~2~3').value='';
                        document.getElementById('span~2~3').focus();
                        return false;
                      }if(document.getElementById('span~1~3').value.replace(/^\s+|\s+$/g,'')=='')
                      {
                        alert('Please Enter High Season Monthly Rate.....');
                        document.getElementById('span~1~3').focus();
                        return false;
                      }

                      if(isNaN(document.getElementById('span~1~3').value))
                      {
                        alert('Please Enter High Season Monthly Rate As Numeric Value.....');
                         document.getElementById('span~1~3').value='';
                        document.getElementById('span~1~3').focus();
                        return false;
                      }if(document.getElementById('span~5~4').value.replace(/^\s+|\s+$/g,'')=='')
                      {
                        alert('Please Enter Low Season 1 Day Rate.....');
                        document.getElementById('span~5~4').focus();
                        return false;
                      }

                      if(isNaN(document.getElementById('span~5~4').value))
                      {
                        alert('Please Enter Low Season 1 Day Rate As Numeric Value.....');
                         document.getElementById('span~5~4').value='';
                        document.getElementById('span~5~4').focus();
                        return false;
                      }if(document.getElementById('span~4~4').value.replace(/^\s+|\s+$/g,'')=='')
                      {
                        alert('Please Enter Low Season 2days Rate.....');
                        document.getElementById('span~4~4').focus();
                        return false;
                      }

                      if(isNaN(document.getElementById('span~4~4').value))
                      {
                        alert('Please Enter Low Season 2days Rate As Numeric Value.....');
                         document.getElementById('span~4~4').value='';
                        document.getElementById('span~4~4').focus();
                        return false;
                      }if(document.getElementById('span~3~4').value.replace(/^\s+|\s+$/g,'')=='')
                      {
                        alert('Please Enter Low Season 3days Rate.....');
                        document.getElementById('span~3~4').focus();
                        return false;
                      }

                      if(isNaN(document.getElementById('span~3~4').value))
                      {
                        alert('Please Enter Low Season 3days Rate As Numeric Value.....');
                         document.getElementById('span~3~4').value='';
                        document.getElementById('span~3~4').focus();
                        return false;
                      }if(document.getElementById('span~6~4').value.replace(/^\s+|\s+$/g,'')=='')
                      {
                        alert('Please Enter Low Season 4 Days Rate.....');
                        document.getElementById('span~6~4').focus();
                        return false;
                      }

                      if(isNaN(document.getElementById('span~6~4').value))
                      {
                        alert('Please Enter Low Season 4 Days Rate As Numeric Value.....');
                         document.getElementById('span~6~4').value='';
                        document.getElementById('span~6~4').focus();
                        return false;
                      }if(document.getElementById('span~7~4').value.replace(/^\s+|\s+$/g,'')=='')
                      {
                        alert('Please Enter Low Season 5 Days Rate.....');
                        document.getElementById('span~7~4').focus();
                        return false;
                      }

                      if(isNaN(document.getElementById('span~7~4').value))
                      {
                        alert('Please Enter Low Season 5 Days Rate As Numeric Value.....');
                         document.getElementById('span~7~4').value='';
                        document.getElementById('span~7~4').focus();
                        return false;
                      }if(document.getElementById('span~8~4').value.replace(/^\s+|\s+$/g,'')=='')
                      {
                        alert('Please Enter Low Season 6 Days Rate.....');
                        document.getElementById('span~8~4').focus();
                        return false;
                      }

                      if(isNaN(document.getElementById('span~8~4').value))
                      {
                        alert('Please Enter Low Season 6 Days Rate As Numeric Value.....');
                         document.getElementById('span~8~4').value='';
                        document.getElementById('span~8~4').focus();
                        return false;
                      }if(document.getElementById('span~2~4').value.replace(/^\s+|\s+$/g,'')=='')
                      {
                        alert('Please Enter Low Season Weekly Rate.....');
                        document.getElementById('span~2~4').focus();
                        return false;
                      }

                      if(isNaN(document.getElementById('span~2~4').value))
                      {
                        alert('Please Enter Low Season Weekly Rate As Numeric Value.....');
                         document.getElementById('span~2~4').value='';
                        document.getElementById('span~2~4').focus();
                        return false;
                      }if(document.getElementById('span~1~4').value.replace(/^\s+|\s+$/g,'')=='')
                      {
                        alert('Please Enter Low Season Monthly Rate.....');
                        document.getElementById('span~1~4').focus();
                        return false;
                      }

                      if(isNaN(document.getElementById('span~1~4').value))
                      {
                        alert('Please Enter Low Season Monthly Rate As Numeric Value.....');
                         document.getElementById('span~1~4').value='';
                        document.getElementById('span~1~4').focus();
                        return false;
                      }if(document.getElementById('span~5~2').value.replace(/^\s+|\s+$/g,'')=='')
                      {
                        alert('Please Enter Mid Season 1 Day Rate.....');
                        document.getElementById('span~5~2').focus();
                        return false;
                      }

                      if(isNaN(document.getElementById('span~5~2').value))
                      {
                        alert('Please Enter Mid Season 1 Day Rate As Numeric Value.....');
                         document.getElementById('span~5~2').value='';
                        document.getElementById('span~5~2').focus();
                        return false;
                      }if(document.getElementById('span~4~2').value.replace(/^\s+|\s+$/g,'')=='')
                      {
                        alert('Please Enter Mid Season 2days Rate.....');
                        document.getElementById('span~4~2').focus();
                        return false;
                      }

                      if(isNaN(document.getElementById('span~4~2').value))
                      {
                        alert('Please Enter Mid Season 2days Rate As Numeric Value.....');
                         document.getElementById('span~4~2').value='';
                        document.getElementById('span~4~2').focus();
                        return false;
                      }if(document.getElementById('span~3~2').value.replace(/^\s+|\s+$/g,'')=='')
                      {
                        alert('Please Enter Mid Season 3days Rate.....');
                        document.getElementById('span~3~2').focus();
                        return false;
                      }

                      if(isNaN(document.getElementById('span~3~2').value))
                      {
                        alert('Please Enter Mid Season 3days Rate As Numeric Value.....');
                         document.getElementById('span~3~2').value='';
                        document.getElementById('span~3~2').focus();
                        return false;
                      }if(document.getElementById('span~6~2').value.replace(/^\s+|\s+$/g,'')=='')
                      {
                        alert('Please Enter Mid Season 4 Days Rate.....');
                        document.getElementById('span~6~2').focus();
                        return false;
                      }

                      if(isNaN(document.getElementById('span~6~2').value))
                      {
                        alert('Please Enter Mid Season 4 Days Rate As Numeric Value.....');
                         document.getElementById('span~6~2').value='';
                        document.getElementById('span~6~2').focus();
                        return false;
                      }if(document.getElementById('span~7~2').value.replace(/^\s+|\s+$/g,'')=='')
                      {
                        alert('Please Enter Mid Season 5 Days Rate.....');
                        document.getElementById('span~7~2').focus();
                        return false;
                      }

                      if(isNaN(document.getElementById('span~7~2').value))
                      {
                        alert('Please Enter Mid Season 5 Days Rate As Numeric Value.....');
                         document.getElementById('span~7~2').value='';
                        document.getElementById('span~7~2').focus();
                        return false;
                      }if(document.getElementById('span~8~2').value.replace(/^\s+|\s+$/g,'')=='')
                      {
                        alert('Please Enter Mid Season 6 Days Rate.....');
                        document.getElementById('span~8~2').focus();
                        return false;
                      }

                      if(isNaN(document.getElementById('span~8~2').value))
                      {
                        alert('Please Enter Mid Season 6 Days Rate As Numeric Value.....');
                         document.getElementById('span~8~2').value='';
                        document.getElementById('span~8~2').focus();
                        return false;
                      }if(document.getElementById('span~2~2').value.replace(/^\s+|\s+$/g,'')=='')
                      {
                        alert('Please Enter Mid Season Weekly Rate.....');
                        document.getElementById('span~2~2').focus();
                        return false;
                      }

                      if(isNaN(document.getElementById('span~2~2').value))
                      {
                        alert('Please Enter Mid Season Weekly Rate As Numeric Value.....');
                         document.getElementById('span~2~2').value='';
                        document.getElementById('span~2~2').focus();
                        return false;
                      }if(document.getElementById('span~1~2').value.replace(/^\s+|\s+$/g,'')=='')
                      {
                        alert('Please Enter Mid Season Monthly Rate.....');
                        document.getElementById('span~1~2').focus();
                        return false;
                      }

                      if(isNaN(document.getElementById('span~1~2').value))
                      {
                        alert('Please Enter Mid Season Monthly Rate As Numeric Value.....');
                         document.getElementById('span~1~2').value='';
                        document.getElementById('span~1~2').focus();
                        return false;
                      } } </script>
</body>
</html>
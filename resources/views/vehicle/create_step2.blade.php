@include('header') 
@include('leftpanel')
<td width="2%">&nbsp;</td>
<td width="80%" valign="top">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td class="heading_1" style="padding:5px;">Add Rates </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td align="center">
                <table border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td class="step_deactive">Step 1</td>
                        <td width="197" class="arrow">&nbsp;</td>
                        <td class="step_active">Step 2</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td valign="top" class="txt_1"  align="center">
                <form  method="POST" enctype="multipart/form-data" action="add_car_step2.php" onsubmit="return check_carrates();"  style="padding-left:5px;">
                    <table width="100%" cellpadding="2" cellspacing="4" bgcolor="#f3f3f3">
                        <tr>
                            <td colspan="3" style="padding-left:70px;">&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="3" style="padding-left:70px;">Fields marked with ' <span style="color:#8e2020; font-size:15px;">*</span> ' are mandatory.</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="error_txt" style="text-align:center;"/>
                        </tr>
                        <tr>
                            <td width="44%" class="txt_1" style="text-align:right;">
                                <b>1 Day : <span style="color:#8e2020; font-size:15px;">*</span>
                                </b>
                            </td>
                            <td width="51%">
                                <input type="text" name="span~5" id="span~5" class="txtbox" value="50.00" />
                            </td>
                            <td width="5%">&nbsp;</td>
                        </tr>
                        <tr>
                            <td width="44%" class="txt_1" style="text-align:right;">
                                <b>2days : <span style="color:#8e2020; font-size:15px;">*</span>
                                </b>
                            </td>
                            <td width="51%">
                                <input type="text" name="span~4" id="span~4" class="txtbox" value="100.00" />
                            </td>
                            <td width="5%">&nbsp;</td>
                        </tr>
                        <tr>
                            <td width="44%" class="txt_1" style="text-align:right;">
                                <b>3days : <span style="color:#8e2020; font-size:15px;">*</span>
                                </b>
                            </td>
                            <td width="51%">
                                <input type="text" name="span~3" id="span~3" class="txtbox" value="150.00" />
                            </td>
                            <td width="5%">&nbsp;</td>
                        </tr>
                        <tr>
                            <td width="44%" class="txt_1" style="text-align:right;">
                                <b>4 Days : <span style="color:#8e2020; font-size:15px;">*</span>
                                </b>
                            </td>
                            <td width="51%">
                                <input type="text" name="span~6" id="span~6" class="txtbox" value="200.00" />
                            </td>
                            <td width="5%">&nbsp;</td>
                        </tr>
                        <tr>
                            <td width="44%" class="txt_1" style="text-align:right;">
                                <b>5 Days : <span style="color:#8e2020; font-size:15px;">*</span>
                                </b>
                            </td>
                            <td width="51%">
                                <input type="text" name="span~7" id="span~7" class="txtbox" value="250.00" />
                            </td>
                            <td width="5%">&nbsp;</td>
                        </tr>
                        <tr>
                            <td width="44%" class="txt_1" style="text-align:right;">
                                <b>6 Days : <span style="color:#8e2020; font-size:15px;">*</span>
                                </b>
                            </td>
                            <td width="51%">
                                <input type="text" name="span~8" id="span~8" class="txtbox" value="300.00" />
                            </td>
                            <td width="5%">&nbsp;</td>
                        </tr>
                        <tr>
                            <td width="44%" class="txt_1" style="text-align:right;">
                                <b>Weekly : <span style="color:#8e2020; font-size:15px;">*</span>
                                </b>
                            </td>
                            <td width="51%">
                                <input type="text" name="span~2" id="span~2" class="txtbox" value="325.00" />
                            </td>
                            <td width="5%">&nbsp;</td>
                        </tr>
                        <tr>
                            <td width="44%" class="txt_1" style="text-align:right;">
                                <b>Monthly : <span style="color:#8e2020; font-size:15px;">*</span>
                                </b>
                            </td>
                            <td width="51%">
                                <input type="text" name="span~1" id="span~1" class="txtbox" value="1200.00" />
                            </td>
                            <td width="5%">&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center">&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center">&nbsnbsp;&nbsp;<input type="submit" name="add_car" value="Save & Finish" class="btn_1" />
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
</table>
</td>
</tr>
@include('footer')
</table>

</table>
<script>
                            function check_carrates()
                             {if(document.getElementById('span~5').value.replace(/^\s+|\s+$/g,'')=='')
                      {
                        alert('Please Enter 1 Day Rate.....');
                        document.getElementById('span~5').focus();
                        return false;
                      }

                      if(isNaN(document.getElementById('span~5').value))
                      {
                        alert('Please Enter 1 Day Rate As Numeric Value.....');
                         document.getElementById('span~5').value='';
                        document.getElementById('span~5').focus();
                        return false;
                      }if(document.getElementById('span~4').value.replace(/^\s+|\s+$/g,'')=='')
                      {
                        alert('Please Enter 2days Rate.....');
                        document.getElementById('span~4').focus();
                        return false;
                      }

                      if(isNaN(document.getElementById('span~4').value))
                      {
                        alert('Please Enter 2days Rate As Numeric Value.....');
                         document.getElementById('span~4').value='';
                        document.getElementById('span~4').focus();
                        return false;
                      }if(document.getElementById('span~3').value.replace(/^\s+|\s+$/g,'')=='')
                      {
                        alert('Please Enter 3days Rate.....');
                        document.getElementById('span~3').focus();
                        return false;
                      }

                      if(isNaN(document.getElementById('span~3').value))
                      {
                        alert('Please Enter 3days Rate As Numeric Value.....');
                         document.getElementById('span~3').value='';
                        document.getElementById('span~3').focus();
                        return false;
                      }if(document.getElementById('span~6').value.replace(/^\s+|\s+$/g,'')=='')
                      {
                        alert('Please Enter 4 Days Rate.....');
                        document.getElementById('span~6').focus();
                        return false;
                      }

                      if(isNaN(document.getElementById('span~6').value))
                      {
                        alert('Please Enter 4 Days Rate As Numeric Value.....');
                         document.getElementById('span~6').value='';
                        document.getElementById('span~6').focus();
                        return false;
                      }if(document.getElementById('span~7').value.replace(/^\s+|\s+$/g,'')=='')
                      {
                        alert('Please Enter 5 Days Rate.....');
                        document.getElementById('span~7').focus();
                        return false;
                      }

                      if(isNaN(document.getElementById('span~7').value))
                      {
                        alert('Please Enter 5 Days Rate As Numeric Value.....');
                         document.getElementById('span~7').value='';
                        document.getElementById('span~7').focus();
                        return false;
                      }if(document.getElementById('span~8').value.replace(/^\s+|\s+$/g,'')=='')
                      {
                        alert('Please Enter 6 Days Rate.....');
                        document.getElementById('span~8').focus();
                        return false;
                      }

                      if(isNaN(document.getElementById('span~8').value))
                      {
                        alert('Please Enter 6 Days Rate As Numeric Value.....');
                         document.getElementById('span~8').value='';
                        document.getElementById('span~8').focus();
                        return false;
                      }if(document.getElementById('span~2').value.replace(/^\s+|\s+$/g,'')=='')
                      {
                        alert('Please Enter Weekly Rate.....');
                        document.getElementById('span~2').focus();
                        return false;
                      }

                      if(isNaN(document.getElementById('span~2').value))
                      {
                        alert('Please Enter Weekly Rate As Numeric Value.....');
                         document.getElementById('span~2').value='';
                        document.getElementById('span~2').focus();
                        return false;
                      }if(document.getElementById('span~1').value.replace(/^\s+|\s+$/g,'')=='')
                      {
                        alert('Please Enter Monthly Rate.....');
                        document.getElementById('span~1').focus();
                        return false;
                      }

                      if(isNaN(document.getElementById('span~1').value))
                      {
                        alert('Please Enter Monthly Rate As Numeric Value.....');
                         document.getElementById('span~1').value='';
                        document.getElementById('span~1').focus();
                        return false;
                      } } </script>
</script>
</body>
</html>
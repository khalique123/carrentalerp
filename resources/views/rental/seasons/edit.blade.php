@include('header')
{{--@include('leftpanel')--}}
<td width="2%">&nbsp;</td>
<td width="80%" valign="top">

    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td class="heading_1" style="padding:5px;">
                Edit
                Rental Seasons
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td valign="top" class="txt_1"  align="center">
                <form  method="POST" action="{{route('season_update_route', ['id' => $season->id])}}" onsubmit="return check_season();"  style="padding-left:5px;">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    <table width="100%" cellpadding="2" cellspacing="4" class="tab-border" bgcolor="#f3f3f3">
                        <tr><td colspan="3" style="padding-left:70px;">
                                Fields marked with ' <span style="color:#8e2020; font-size:15px;">*</span> ' are mandatory.
                            </td>
                        </tr>

                        <tr>
                            <td class="txt_1" style="text-align:right;"><b>Season Name : <span style="color:#8e2020; font-size:15px;">*</span></b></td>
                            <td><input type="text" name="season_name" id="season_name" class="txtbox" value="{{$season->name}}" /></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td valign="top" class="txt_1" style="text-align:right;"><b>Season Description : <span style="color:#8e2020; font-size:15px;">*</span></b></td>
                            <td>
                                <textarea rows="5" cols="15" name="season_desc" id="season_desc">{{$season->description}}</textarea>
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="txt_1" style="text-align:right;"><b>Start Date : <span style="color:#8e2020; font-size:15px;">*</span></b></td>
                            <td>
                                <input type="date" name="start_date" id="start_date" value="{{$season->start_date}}">
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="txt_1" style="text-align:right;"><b>End Date : <span style="color:#8e2020; font-size:15px;">*</span></b></td>
                            <td>
                                <input type="date" name="end_date" id="end_date" value="{{$season->end_date}}">
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="txt_1" style="text-align:right;"><b>Display Order : <span style="color:#8e2020; font-size:15px;">*</span></b></td>
                            <td><input type="text" name="disp_order" id="disp_order" class="txtbox" value="{{$season->display_order}}" /></td>
                        </tr>
                        <tr>
                            <td>
                                &nbsp;&nbsp;
                            </td>

                            <td>
                                <input type="submit" name="add_season" value="Edit" class="btn_1" />
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
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
</table></td>
</tr>
@include('footer')
</table>

</table>
<script>
    function check_season()
    {

        if (document.getElementById('season_name').value.replace(/^\s+|\s+$/g, '') == '')
        {
            alert('Please Enter Season Name.....');
            document.getElementById('season_name').focus();
            return false;
        }
        if (document.getElementById('season_desc').value.replace(/^\s+|\s+$/g, '') == '')
        {
            alert('Please Enter Season Description.....');
            document.getElementById('season_desc').focus();
            return false;
        }
        if (document.getElementById('start_date').value.replace(/^\s+|\s+$/g, '') == '')
        {
            alert('Please Select Start Date For The Season.....');
            document.getElementById('start_date').focus();
            return false;
        }
        if (document.getElementById('end_date').value.replace(/^\s+|\s+$/g, '') == '')
        {
            alert('Please Select End Date For The Season.....');
            document.getElementById('end_date').focus();
            return false;
        }


        if (document.getElementById('disp_order').value.replace(/^\s+|\s+$/g, '') == '')
        {
            alert('Please Enter Display Order.....');
            document.getElementById('disp_order').focus();
            return false;
        }

        if (isNaN(document.getElementById('disp_order').value))
        {
            alert('Please Enter Display Order As Numeric Value.....');
            document.getElementById('disp_order').value = '';
            document.getElementById('disp_order').focus();
            return false;
        } }</script>



<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../script.js"></script>

<!--Calender Start-->
<link rel="STYLESHEET" type="text/css" href="rich_calendar/rich_calendar.css">
<style type="text/css" src="calendar-win2k-1.css"></style>
<script language="JavaScript" type="text/javascript" src="rich_calendar/rich_calendar.js"></script>
<script language="JavaScript" type="text/javascript" src="rich_calendar/rc_lang_en.js"></script>
<script language="JavaScript" type="text/javascript" src="rich_calendar/rc_lang_ru.js"></script>
<script language="javascript" src="domready/domready.js"></script>

<script>
var cal_obj2 = null;
var cal_obj3 = null;
//var format = '%j %M %Y %H:%i';
var format = '%j, %M';
var formatday = '%j';
var formatmonth = '%m';
// show calendar
function show_cal(el) {

    if (cal_obj2)
        return;

    var text_field = document.getElementById("start_date");


    cal_obj2 = new RichCalendar();
    cal_obj2.start_week_day = 2;
    //cal_obj2.show_time = true;
    cal_obj2.user_onchange_handler = cal2_on_change;
    cal_obj2.user_onclose_handler = cal2_on_close;
    cal_obj2.user_onautoclose_handler = cal2_on_autoclose;

    cal_obj2.parse_date(text_field.value, format);

    cal_obj2.show_at_element(text_field, "adj_right-bottom");
    cal_obj2.change_skin('alt');

}

// user defined onchange handler
function cal2_on_change(cal, object_code) {
    if (object_code == 'day') {
        document.getElementById("start_date").value = cal.get_formatted_date(format);
        document.getElementById("start_day").value = cal.get_formatted_date(formatday);
        document.getElementById("start_month").value = cal.get_formatted_date(formatmonth);

        cal.hide();
        cal_obj2 = null;
    }
}

// user defined onclose handler (used in pop-up mode - when auto_close is true)
function cal2_on_close(cal) {
    cal.hide();
    cal_obj2 = null;
}

// user defined onautoclose handler
function cal2_on_autoclose(cal) {
    cal_obj2 = null;
}
/*-2nnd-*/

function show_cal3(el) {

    if (cal_obj3)
        return;

    var text_field = document.getElementById("end_date");


    cal_obj3 = new RichCalendar();
    cal_obj3.start_week_day = 2;
    //cal_obj2.show_time = true;
    cal_obj3.user_onchange_handler = cal3_on_change;
    cal_obj3.user_onclose_handler = cal3_on_close;
    cal_obj3.user_onautoclose_handler = cal3_on_autoclose;

    cal_obj3.parse_date(text_field.value, format);

    cal_obj3.show_at_element(text_field, "adj_right-bottom");
    cal_obj3.change_skin('alt');

}

// user defined onchange handler
function cal3_on_change(cal, object_code) {
    if (object_code == 'day') {
        document.getElementById("end_date").value = cal.get_formatted_date(format);
        document.getElementById("end_day").value = cal.get_formatted_date(formatday);
        document.getElementById("end_month").value = cal.get_formatted_date(formatmonth);
        cal.hide();
        cal_obj3 = null;
    }
}

// user defined onclose handler (used in pop-up mode - when auto_close is true)
function cal3_on_close(cal) {
    cal.hide();
    cal_obj3 = null;
}

// user defined onautoclose handler
function cal3_on_autoclose(cal) {
    cal_obj3 = null;
}
</script>

</body>
</html>
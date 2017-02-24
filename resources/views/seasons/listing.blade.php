@include('header')
@include('leftpanel')
<td width="2%">&nbsp;</td>
<td width="80%" valign="top">
    <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border:0px solid #FF9933;">
        <tr><td width="82%"  align="left" class="heading_1" style="padding-left:6px;">
                Rental Seasons
            </td>
            <td width="18%"  align="left" class="link"><div align="right" class="pas-txt"><a href="{{route('season_create_route')}}">Add Rental Seasons </a></div></td>
        </tr>
        <tr><td colspan="2"  align="right" class="link">&nbsp;</td></tr>
        <tr>
            <td colspan="4" align="left" class="txt_1" style="padding-bottom:10px; padding-left:7px; font-weight:bold; color:#999900;">
            </td>
        </tr>
        <tr><td height="5" colspan="2" ></td></tr>
        <tr>
            <td colspan="2" bgcolor="#BBBBBB" >
                <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#7199af" >
                    <tr>
                        <td colspan="12" align="right" bgcolor="#FFFFFF">
                            <div class="page-txt">
                                <span class="proname">
                                    Page 1 of 1                                                                              
                                    | Pages :
                                    <span style='color:#000000;'>1</span>&nbsp;
                                </span>
                            </div>
                        </td>
                    </tr>
                    <tr bgcolor="#842a2a">
                        <td width="25%" height="20" class="lp_title1"><div align="left" class="con-txt-3">Season Name</div></td>
                        <td width="12%" height="20" class="lp_title1"><div align="left" class="con-txt-3">Start Date</div></td>
                        <td width="11%" height="20" class="lp_title1"><div align="left" class="con-txt-3">End Date</div></td>
                        <td width="13%" class="lp_title1"><div align="center" class="con-txt-3">Display Order</div></td>
                        <td class="lp_title1" colspan="8"><div align="center" class="con-txt-3">Action</div></td>
                    </tr>
                    @foreach($seasons as $season)
                    <tr bgcolor="#FFFFFF">
                    <form  method="POST" action="{{route('season_decision_route')}}" onsubmit="return check_season();"  style="padding-left:5px;">
                        {{csrf_field()}}
                        <td bgcolor="#FFFFFF" style="padding-left:5px;" class="txt_1"><div align="left"  class="con-txt">{{$season->name}}</div></td>
                        <td bgcolor="#FFFFFF" style="padding-left:5px;" class="txt_1"><div align="left"  class="con-txt">{{$season->start_date}}</div></td>
                        <td bgcolor="#FFFFFF" style="padding-left:5px;" class="txt_1"><div align="left"  class="con-txt">{{$season->end_date}}</div></td>
                        <td bgcolor="#FFFFFF"  class="txt_1" style="text-align:center;">{{$season->display_order}}</td>
                        <td width="12%"  align="center" bgcolor="#FFFFFF"  class="link_1" ><div align="center" class="txt"><b><a href="{{route('season_edit_route', ['id' => $season->id])}}" >Edit</a></b>&nbsp;</div></td>
                        <td width="12%"  align="center" bgcolor="#FFFFFF"  class="link_1" >
                            <div align="center" class="txt-2">
                                <b><button type="submit"  name="delete" value="{{$season->id}}" onclick="javascript:return confirm('Are you sure?')" >Delete</button></b>&nbsp;
                            </div>
                        </td>
                        <td colspan="6" width="6%"  align="center" bgcolor="#FFFFFF" >
                            @if($season->is_active === 1)
                            <button type="submit" name="deactivate" value="false"><img src="{{asset('images/icon_active.gif')}}" alt="Deactivate Season" title="Deactivate Season" width="10" height="10" border="0" /></button>
                            @else
                            <button type="submit" name="deactivate" value="true"><img src="{{asset('images/icon_close.gif')}}" alt="Activate Season" title="Activate Season" width="10" height="10" border="0" /></button>
                            @endif
                        </td>
                        <input type="hidden" name="id" value="{{$season->id}}">
                    </form>
        </tr>
        @endforeach
        <tr>
            <td colspan="12" height="4" bgcolor="#7199AF">
            </td>
        </tr>
    </table>                                                            
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
</body>
</html>
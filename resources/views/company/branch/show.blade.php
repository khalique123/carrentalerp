@include('header')
@include('leftpanel')
</td>
<td width="2%">&nbsp;</td>
<td width="80%" valign="top">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td class="heading_1" style="padding:5px;">{{$branch->name}}</td>
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
                            <b>{{$branch->display_order}}</span>
                            </b>
                        </td>
                        <td>
                            <input type="hidden" name="ID" value="{{$branch->id}}" />
                        </td>
                    </tr>
                    <tr>
                        <td class="txt_1" style="text-align:right;">
                            <b>Location Name :</span>
                            </b>
                        </td>
                        <td class="txt_1" style="text-align:right;">
                            <b>{{$branch->name}}</span>
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
                            <b>{{$branch->address}}</b>
                        </td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="txt_1"  style="text-align:right;" valign="top">
                            <b>Country : &nbsp;&nbsp;</b>
                        </td>
                        <td>&nbsp;</td>
                        <td class="txt_1"  style="text-align:right;" valign="top">
                            <b>{{$branch->city->state->country->name}}</b>
                        </td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="txt_1"  style="text-align:right;" valign="top">
                            <b>State : &nbsp;&nbsp;</b>
                        </td>
                        <td>&nbsp;</td>
                        <td class="txt_1"  style="text-align:right;" valign="top">
                            <b>{{$branch->city->state->name}}</b>
                        </td>
                        <td>&nbsp;</td>
                    </tr>

                    <tr>
                        <td class="txt_1"  style="text-align:right;" valign="top">
                            <b>City : &nbsp;&nbsp;</b>
                        </td>
                        <td>&nbsp;</td>
                        <td class="txt_1"  style="text-align:right;" valign="top">
                            <b>{{$branch->city->name}}</b>
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
                            {{$branch->phone_number}}
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
                            {{$branch->email}}
                        </td>
                        <td>&nbsp; </td>
                    </tr>
                    <tr>
                        <td class="txt_1" style="text-align:right;">
                            <b>Business Hours :</b>
                        </td>
                        <td>&nbsp; </td>
                        <td class="txt_1" style="text-align:right;">
                            <b>{{$branch->business_hours}}
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
                            <b>{{$branch->landmark}}
                            </b>
                        </td>
                        <td>&nbsp; </td>
                    </tr>
                    <tr>
                        <td>&nbsp;&nbsp;</td>
                        <td>
                            <form name="show_branch" id="show_branch" method="POST" action="{">
                            <a href="{{route('branch_edit_route', ['id' => $branch->id])}}">Edit</a>
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
</tr>@include('footer')</table>
</table>
</body>
</html>
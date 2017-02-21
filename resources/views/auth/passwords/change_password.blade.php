@include('header') @include('leftpanel')<td width="2%">&nbsp;</td>
<td width="80%" valign="top">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td class="heading_1" style="padding:5px;">Password Change</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td valign="top" class="txt_1"  align="center">
                <form name="frmchangepass" id="frmchangepass" method="POST" action="{{route('update_password')}}" onsubmit="return check_pwordchange();"  style="padding-left:5px;">
                    {{csrf_field()}}
                    <table width="100%"  cellpadding="2" cellspacing="4" bgcolor="#f3f3f3">
                        <tr>
                            <td colspan="3" style="padding-left:70px;">
                                <b>All fields are mandatory.</b>
                            </td>
                        </tr>
                        <tr>
                            <td class="txt_1" style="text-align:right;">
                                <b>Old Password *</b>
                            </td>
                            <td>
                                <input type="password" name="old_password" id="old_password" class="txtbox"/>
                                @if ($errors->has('old_password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('old_password') }}</strong>
                                </span>
                                @endif
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="txt_1" style="text-align:right;">
                                <b>New Password *</b>
                            </td>
                            <td>
                                <input type="password" name="password" id="password" class="txtbox"/>
                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="txt_1" style="text-align:right;">
                                <b>Re-type Password *</b>
                            </td>
                            <td>
                                <input type="password" name="confirm_password" id="confirm_password" class="txtbox"/>
                                @if ($errors->has('confirm_password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('confirm_password') }}</strong>
                                </span>
                                @endif
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td/>
                            <td>
                                <input type="submit" value="Update" class="btn_1" />
                            </td>
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
@if ( Session::has('flash_message') )
<tr>
    <td>
        <div class="alert {{ Session::get('flash_type') }}">
            <h3>{{ Session::get('flash_message') }}</h3>
        </div>
         <?php echo '<pre>';var_dump(Session::all()); ?>
    </td>
</tr>

@endif
@include('footer')
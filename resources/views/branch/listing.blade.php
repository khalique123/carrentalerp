@include('header') 
@include('leftpanel')

<td width="2%">&nbsp;</td>
<td width="80%" valign="top">
  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border:0px solid #FF9933;">
    <tr>
      <td width="82%"  align="left" class="heading_1" style="padding-left:6px;">Rental Locations    </td>
      <td width="18%"  align="left" class="link">
        <div align="right" class="pas-txt">
          <a href={{route("branch_create_route")}}>Add Rental Location</a>
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
                <span class="proname">Page {{$branches->currentPage()}} of {{$branches->lastPage()}}&nbsp;</span>
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
          @foreach($branches as $branch)
          <tr bgcolor="#FFFFFF">
          <form id="delete-branch-{{$branch->id}}" action="{{ route('branch_delete_route', ['id' => $branch->id,]) }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                    {{method_field('DELETE')}}
            <td bgcolor="#FFFFFF" style="padding-left:5px;" class="txt_1">
              <div align="center" class="con-txt">{{$branch->name}}</div>
            </td>
            <td bgcolor="#FFFFFF"  class="txt_1" style="text-align:center;">{{$branch->display_order}}</td>
            <td width="15%"  align="center" bgcolor="#FFFFFF"  class="link_1" >
              <div align="center" class="txt">
                <b>
                  <a href="{{route('branch_edit_route', ['id' => $branch->id])}}"  >Edit</a>
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
                @if($branch->is_active == 1)
                    <img src={{asset("/images/icon_active.gif")}} alt="Deactivate Location" title="Deactivate Location" width="10" height="10" border="0" />
                @else
                    <img src={{asset("/images/icon_close.gif")}} alt="Activate Location" title="Activate Location" width="10" height="10" border="0" />
                @endif
              </a>
            </td>
            </form>
          </tr>
          @endforeach
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
@include('footer')
</table>

</table>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript">
</script>
</body>
</html>
@include('header') 
{{--@include('leftpanel')--}}

<td width="2%">&nbsp;</td>
<td width="80%" valign="top">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td class="heading_1" style="padding:5px;">Add Vehicle</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td align="center">
                <table border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td class="step_active">Step 1</td>
                        <td width="197" class="arrow">&nbsp;</td>
                        <td class="step_deactive">Step 2</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td valign="top" class="txt_1"  align="center">
                <form  method="POST" enctype="multipart/form-data" action="{{route('vehicle_insert_route')}}" onsubmit="return check_car_step1();"  style="padding-left:5px;">
                    {{csrf_field()}}
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
                            <td width="39%" class="txt_1" style="text-align:right;">
                                <b>Copy Details From : &nbsp;&nbsp;</b>
                            </td>
                            <td width="54%">
                                <select name="existing_car_id" id="ajax_car_id">
                                    <option value="0" selected="selected">Select A Vehicle</option>
                                                            @foreach($existing_vehicles as $existingVehicle)
                                    <option value="{{$existingVehicle->id}}">{{$existingVehicle->code}}</option>
                                                                    @endforeach
                                                                </select>
                                                                </td>
                                                                <td>
                                                                    @if ($errors->has('existing_car_id'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->first('existing_car_id') }}</strong>
                                                                    </span>
                                                                    @endif
                                                                </td>
                                                                <td>&nbsp;</td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="3">
                                                                        <div id="car_details_info">
                                                                            <table cellpadding="0" cellspacing="4" border="0" width="100%">
                                                                                <tr>
                                                                                    <td width="39%" class="txt_1" style="text-align:right;">
                                                                                        <b>Vehicle Image :<span style="color:#8e2020; font-size:15px;">*</span>
                                                                                        </b>
                                                                                    </td>
                                                                                    <td width="54%">
                                                                                        <input type="file" name="gallery_img" id="gallery_img" class="upload">
                                                                                    </td>
                                                                                    <td width="7%">
                                                                                        <input type="hidden" value="" id="img_checking" name="img_checking" />
                                                                                    </td>
                                                                                    <td>
                                                                                        @if ($errors->has('gallery_img'))
                                                                                        <span class="help-block">
                                                                                            <strong>{{ $errors->first('gallery_img') }}</strong>
                                                                                        </span>
                                                                                        @endif
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="txt_1" style="text-align:right;">
                                                                                        <b>Vehicle Location : <span style="color:#8e2020; font-size:15px;">*</span>
                                                                                        </b>
                                                                                    </td>
                                                                                    <td>
                                                                                        <select name="veh_loc" id="veh_loc" ">
                                                                                            <option value="0">Select A Location</option>
                                                                                            @foreach($branches as $branch)
                                                                                            <option value="{{$branch->id}}">{{$branch->name}}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </td>
                                                                                    <td>&nbsp;</td>
                                                                                    <td>
                                                                                        @if ($errors->has('veh_loc'))
                                                                                        <span class="help-block">
                                                                                            <strong>{{ $errors->first('veh_loc') }}</strong>
                                                                                        </span>
                                                                                        @endif
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="txt_1" style="text-align:right;">
                                                                                        <b>Code : <span style="color:#8e2020; font-size:15px;">*</span>
                                                                                        </b>
                                                                                    </td>
                                                                                    <td>
                                                                                        <input type="text" name="code" id="code" class="txtbox" value="" />
                                                                                    </td>
                                                                                    <td>&nbsp;</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="txt_1" style="text-align:right;">
                                                                                        <b>Reg. No. : <span style="color:#8e2020; font-size:15px;">*</span>
                                                                                        </b>
                                                                                    </td>
                                                                                    <td>
                                                                                        <input type="text" name="reg" id="reg" class="txtbox" value="" />
                                                                                    </td>
                                                                                    <td>&nbsp;</td>
                                                                                    <td>
                                                                                        @if ($errors->has('reg'))
                                                                                        <span class="help-block">
                                                                                            <strong>{{ $errors->first('reg') }}</strong>
                                                                                        </span>
                                                                                        @endif
                                                                                    </td>
                                                                                </tr
                                                                                <tr>
                                                                                    <td class="txt_1" style="text-align:right;">
                                                                                        <b>Chassis No. : <span style="color:#8e2020; font-size:15px;">*</span>
                                                                                        </b>
                                                                                    </td>
                                                                                    <td>
                                                                                        <input type="text" name="chassis" id="chassis" class="txtbox" value="" />
                                                                                    </td>
                                                                                    <td>&nbsp;</td>
                                                                                    <td>
                                                                                        @if ($errors->has('chassis'))
                                                                                        <span class="help-block">
                                                                                            <strong>{{ $errors->first('chassis') }}</strong>
                                                                                        </span>
                                                                                        @endif
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="txt_1" style="text-align:right;">
                                                                                        <b>Engine No. : <span style="color:#8e2020; font-size:15px;">*</span>
                                                                                        </b>
                                                                                    </td>
                                                                                    <td>
                                                                                        <input type="text" name="engine" id="engine" class="txtbox" value="" />
                                                                                    </td>
                                                                                    <td>&nbsp;</td>
                                                                                    <td>
                                                                                        @if ($errors->has('engine'))
                                                                                        <span class="help-block">
                                                                                            <strong>{{ $errors->first('engine') }}</strong>
                                                                                        </span>
                                                                                        @endif
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="txt_1" style="text-align:right;">
                                                                                        <b>VIN : <span style="color:#8e2020; font-size:15px;">*</span>
                                                                                        </b>
                                                                                    </td>
                                                                                    <td>
                                                                                        <input type="text" name="vin" id="vin" class="txtbox" value="" />
                                                                                    </td>
                                                                                    <td>&nbsp;</td>
                                                                                    <td>
                                                                                        @if ($errors->has('vin'))
                                                                                        <span class="help-block">
                                                                                            <strong>{{ $errors->first('vin') }}</strong>
                                                                                        </span>
                                                                                        @endif
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="txt_1" style="text-align:right;">
                                                                                        <b>Make : <span style="color:#8e2020; font-size:15px;">*</span>
                                                                                        </b>
                                                                                    </td>
                                                                                    <td>
                                                                                        <input type="text" name="make" id="make" class="txtbox" value="" />
                                                                                    </td>
                                                                                    <td>&nbsp;</td>
                                                                                    <td>
                                                                                        @if ($errors->has('make'))
                                                                                        <span class="help-block">
                                                                                            <strong>{{ $errors->first('make') }}</strong>
                                                                                        </span>
                                                                                        @endif
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="txt_1" style="text-align:right;">
                                                                                        <b>Model : <span style="color:#8e2020; font-size:15px;">*</span>
                                                                                        </b>
                                                                                    </td>
                                                                                    <td>
                                                                                        <input type="text" name="model" id="model" class="txtbox" value="" />
                                                                                    </td>
                                                                                    <td>&nbsp;</td>
                                                                                    <td>
                                                                                        @if ($errors->has('model'))
                                                                                        <span class="help-block">
                                                                                            <strong>{{ $errors->first('model') }}</strong>
                                                                                        </span>
                                                                                        @endif
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="txt_1" style="text-align:right;">
                                                                                        <b>Year : <span style="color:#8e2020; font-size:15px;">*</span>
                                                                                        </b>
                                                                                    </td>
                                                                                    <td>
                                                                                        <input type="text" name="year" id="year" class="txtbox" value="" />
                                                                                    </td>
                                                                                    <td>&nbsp;</td>
                                                                                    <td>
                                                                                        @if ($errors->has('year'))
                                                                                        <span class="help-block">
                                                                                            <strong>{{ $errors->first('year') }}</strong>
                                                                                        </span>
                                                                                        @endif
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="txt_1" style="text-align:right;">
                                                                                        <b>Color : <span style="color:#8e2020; font-size:15px;">*</span>
                                                                                        </b>
                                                                                    </td>
                                                                                    <td>
                                                                                        <input type="text" name="color" id="color" class="txtbox" value="" />
                                                                                    </td>
                                                                                    <td>&nbsp;</td>
                                                                                    <td>
                                                                                        @if ($errors->has('color'))
                                                                                        <span class="help-block">
                                                                                            <strong>{{ $errors->first('color') }}</strong>
                                                                                        </span>
                                                                                        @endif
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="txt_1" style="text-align:right;">
                                                                                        <b>People Capacity : <span style="color:#8e2020; font-size:15px;">*</span>
                                                                                        </b>
                                                                                    </td>
                                                                                    <td align="left">
                                                                                        <input type="text" name="people" id="people" class="txtbox" value="" />
                                                                                    </td>
                                                                                    <td>&nbsp;</td>
                                                                                    <td>
                                                                                        @if ($errors->has('people'))
                                                                                        <span class="help-block">
                                                                                            <strong>{{ $errors->first('people') }}</strong>
                                                                                        </span>
                                                                                        @endif
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="txt_1" style="text-align:right;">
                                                                                        <b>Baggage Capacity : <span style="color:#8e2020; font-size:15px;">*</span>
                                                                                        </b>
                                                                                    </td>
                                                                                    <td align="left">
                                                                                        <input type="text" name="baggage" id="baggage" class="txtbox" value="" />
                                                                                    </td>
                                                                                    <td>&nbsp;</td>
                                                                                    <td>
                                                                                        @if ($errors->has('baggage'))
                                                                                        <span class="help-block">
                                                                                            <strong>{{ $errors->first('baggage') }}</strong>
                                                                                        </span>
                                                                                        @endif
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="txt_1" style="text-align:right;">
                                                                                        <b>Vehicle Doors : <span style="color:#8e2020; font-size:15px;">*</span>
                                                                                        </b>
                                                                                    </td>
                                                                                    <td align="left">
                                                                                        <input type="text" name="doors" id="doors" class="txtbox" value="" />
                                                                                    </td>
                                                                                    <td>&nbsp;</td>
                                                                                    <td>
                                                                                        @if ($errors->has('doors'))
                                                                                        <span class="help-block">
                                                                                            <strong>{{ $errors->first('doors') }}</strong>
                                                                                        </span>
                                                                                        @endif
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="txt_1" style="text-align:right;">
                                                                                        <b>Air Conditioned :</b>
                                                                                    </td>
                                                                                    <td align="left">
                                                                                        <input  type="checkbox" name="ac" id="ac" />
                                                                                    </td>
                                                                                    <td>&nbsp;</td>
                                                                                    <td>
                                                                                        @if ($errors->has('ac'))
                                                                                        <span class="help-block">
                                                                                            <strong>{{ $errors->first('ac') }}</strong>
                                                                                        </span>
                                                                                        @endif
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="txt_1" style="text-align:right;">
                                                                                        <b>Class : <span style="color:#8e2020; font-size:15px;">*</span>
                                                                                        </b>
                                                                                    </td>
                                                                                    <td>
                                                                                        <select name="class" id="class" onchange="check_ques_mark();">
                                                                                            <option value="0">Select A Class</option>
                                                                                            @foreach($vehicle_classes as $vehicleClass)
                                                                                            <option value="{{$vehicleClass->id}}">{{$vehicleClass->name}}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </td>
                                                                                    <td>&nbsp;</td>
                                                                                    <td>
                                                                                        @if ($errors->has('class'))
                                                                                        <span class="help-block">
                                                                                            <strong>{{ $errors->first('class') }}</strong>
                                                                                        </span>
                                                                                        @endif
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="txt_1" style="text-align:right;">
                                                                                        <b>Maximum Weight : &nbsp;&nbsp;</b>
                                                                                    </td>
                                                                                    <td>
                                                                                        <input type="text" name="weight" id="weight" class="txtbox" value="" />
                                                                                        <b>&nbsp;Kg.</b>
                                                                                    </td>
                                                                                    <td>&nbsp;</td>
                                                                                    <td>
                                                                                        @if ($errors->has('weight'))
                                                                                        <span class="help-block">
                                                                                            <strong>{{ $errors->first('weight') }}</strong>
                                                                                        </span>
                                                                                        @endif
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="txt_1" style="text-align:right;">
                                                                                        <b>Transmission : <span style="color:#8e2020; font-size:15px;">*</span>
                                                                                        </b>
                                                                                    </td>
                                                                                    <td>
                                                                                        <select name="transmission" id="transmission" style="width:145px;">
                                                                                            <option value="0">Select Transmission</option>
                                                                                            @foreach($transmissions as $transmission)
                                                                                            <option value="{{$transmission->id}}">{{$transmission->name}}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </td>
                                                                                    <td>&nbsp;</td>
                                                                                    <td>
                                                                                        @if ($errors->has('transmission'))
                                                                                        <span class="help-block">
                                                                                            <strong>{{ $errors->first('transmission') }}</strong>
                                                                                        </span>
                                                                                        @endif
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td valign="top" class="txt_1" style="text-align:right;">
                                                                                        <b>Description : <span style="color:#8e2020; font-size:15px;">*</span>
                                                                                        </b>
                                                                                    </td>
                                                                                    <td>
                                                                                        <textarea rows="3" cols="15" name="desc" id="desc"></textarea>
                                                                                    </td>
                                                                                    <td>&nbsp;</td>
                                                                                    <td>
                                                                                        @if ($errors->has('desc'))
                                                                                        <span class="help-block">
                                                                                            <strong>{{ $errors->first('desc') }}</strong>
                                                                                        </span>
                                                                                        @endif
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="txt_1" style="text-align:right;">
                                                                                        <b>Fuel Type : <span style="color:#8e2020; font-size:15px;">*</span>
                                                                                        </b>
                                                                                    </td>
                                                                                    <td>
                                                                                        <select name="fuel_type" id="fuel_type">
                                                                                            <option value="0">Select Fuel Type</option>
                                                                                            @foreach($fuels as $fuel)
                                                                                            <option value="{{$fuel->id}}">{{$fuel->name}}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </td>
                                                                                    <td>&nbsp;</td>
                                                                                    <td>
                                                                                        @if ($errors->has('fuel_type'))
                                                                                        <span class="help-block">
                                                                                            <strong>{{ $errors->first('fuel_type') }}</strong>
                                                                                        </span>
                                                                                        @endif
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="txt_1" style="text-align:right;">
                                                                                        <b>Availability : <span style="color:#8e2020; font-size:15px;">*</span>
                                                                                        </b>
                                                                                    </td>
                                                                                    <td>
                                                                                        <select name="availability" id="availability">
                                                                                            <option value="0">Select Availability</option>
                                                                                            @foreach($availabilities as $availability)
                                                                                            <option value="{{$availability->id}}">{{$availability->name}}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </td>
                                                                                    <td>&nbsp;</td>
                                                                                    <td>
                                                                                        @if ($errors->has('availability'))
                                                                                        <span class="help-block">
                                                                                            <strong>{{ $errors->first('availability') }}</strong>
                                                                                        </span>
                                                                                        @endif
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="txt_1" style="text-align:right;" valign="top">
                                                                                        <b>Vehicle Rate Type : <span style="color:#8e2020; font-size:15px;">*</span>
                                                                                        </b>
                                                                                    </td>
                                                                                    <td>
                                                                                        <table width="100%" border="0" cellspacing="2" cellpadding="0">
                                                                                            <tr>
                                                                                                <td width="9%" align="left">
                                                                                                    <input type="radio" checked name="ratetype" id="ratetype1" value="1" />
                                                                                                </td>
                                                                                                <td width="18%" align="left">Season</td>
                                                                                                <td width="73%" align="left">
                                                                                                    <div id="sq" style="display:none;">
                                                                                                        <a href="javascript:season();">
                                                                                                            <img src="images/icon_question.jpg" alt="" width="13" height="13" border="0" />
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    <input type="radio"  name="ratetype" id="ratetype2" value="2" />
                                                                                                </td>
                                                                                                <td>Class</td>
                                                                                                <td align="left">
                                                                                                    <div id="cq" style="display:none;">
                                                                                                        <a href="javascript:car_class();">
                                                                                                            <img src="images/icon_question.jpg" alt="" width="13" height="13" border="0" />
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    <input type="radio"  name="ratetype" id="ratetype3" value="3" />
                                                                                                </td>
                                                                                                <td align="left">Individual</td>
                                                                                                <td>&nbsp;</td>
                                                                                            </tr>
                                                                                        </table>
                                                                                        <br />
                                                                                    </td>
                                                                                    <td>&nbsp;</td>
                                                                                    <td>
                                                                                        @if ($errors->has('ratetype'))
                                                                                        <span class="help-block">
                                                                                            <strong>{{ $errors->first('ratetype') }}</strong>
                                                                                        </span>
                                                                                        @endif
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="txt_1" style="text-align:right;">
                                                                                        <b>Display Order : <span style="color:#8e2020; font-size:15px;">*</span>
                                                                                        </b>
                                                                                    </td>
                                                                                    <td>
                                                                                        <input type="text" name="disp_order" id="disp_order" class="txtbox" value="" />
                                                                                    </td>
                                                                                    <td>
                                                                                        @if ($errors->has('disp_order'))
                                                                                        <span class="help-block">
                                                                                            <strong>{{ $errors->first('disp_order') }}</strong>
                                                                                        </span>
                                                                                        @endif
                                                                                    </td>
                                                                                    <td>
                                                                                        <input type="hidden" name="ID" value="" />
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="3">
                                                                        <div align="center">
                                                                            <input type="submit" name="add_car" value="Save & Go To Next Step >>" class="btn_1" /></div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="3">&nbsp;</td>
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

                                                                </body>
                                                                </html>
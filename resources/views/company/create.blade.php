@include('header') 
@include('leftpanel')

<td width="2%">&nbsp;</td>
<td width="80%" valign="top">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td class="heading_1" style="padding:5px;">Edit Company Details</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td valign="top" class="txt_1"  align="center">
                <form  method="POST" enctype="multipart/form-data" action="add_cominfo.php" onsubmit="return check_cominfo2();"  style="padding-left:5px;">
                    <table width="100%" cellpadding="2" cellspacing="4" bgcolor="#f3f3f3">
                        <tr>
                            <td colspan="3" style="padding-left:70px;">
                                <b/>Fields marked with ' <span style="color:#8e2020; font-size:15px;">*</span> ' are mandatory.</td>
                        </tr>
                        <tr>
                            <td colspan="3" align="center" class="error_txt"/>
                        </tr>
                        <tr>
                            <td class="txt_1" style="text-align:right;">
                                <b>Company Name : <span style="color:#8e2020; font-size:15px;">*</span>
                                </b>
                            </td>
                            <td align="left">
                                <input type="text" value="Easy Rent a Car" name="name" id="name" style="width:180px;" />
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td valign="top" class="txt_1" style="text-align:right;">
                                <b>Address : <span style="color:#8e2020; font-size:15px;">*</span>
                                </b>
                            </td>
                            <td align="left">
                                <textarea value="7545-C NW 72 Ave Miami Florida, 33166 United States" name="address" id="address" cols="45" rows="5" style="width:180px;">7545-C NW 72 Ave Miami Florida, 33166 United States</textarea>
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="txt_1" style="text-align:right;">
                                <b>Email : <span style="color:#8e2020; font-size:15px;">*</span>
                                </b>
                            </td>
                            <td align="left">
                                <input type="text" value="info@easyrentpro.com" name="email" id="email" style="width:180px;" />
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="txt_1" style="text-align:right;">
                                <b>Country : <span style="color:#8e2020; font-size:15px;">*</span>
                                </b>
                            </td>
                            <td align="left">
                                <select name="country" id="country" style="width:180px;">
                                    <option value="0">Select Country</option>
                                    <option value="1">Afghanistan</option>
                                    <option value="2">Albania</option>
                                    <option value="3">Algeria</option>
                                    <option value="4">American Samoa</option>
                                    <option value="5">Andorra</option>
                                    <option value="6">Angola</option>
                                    <option value="7">Anguilla</option>
                                    <option value="8">Antarctica</option>
                                    <option value="9">Antigua and Barbuda</option>
                                    <option value="10">Argentina</option>
                                    <option value="11">Armenia</option>
                                    <option value="12">Aruba</option>
                                    <option value="13">Australia</option>
                                    <option value="14">Austria</option>
                                    <option value="15">Azerbaijan</option>
                                    <option value="16">Bahamas</option>
                                    <option value="17">Bahrain</option>
                                    <option value="18">Bangladesh</option>
                                    <option value="19">Barbados</option>
                                    <option value="20">Belarus</option>
                                    <option value="21">Belgium</option>
                                    <option value="22">Belize</option>
                                    <option value="23">Benin</option>
                                    <option value="24">Bermuda</option>
                                    <option value="25">Bhutan</option>
                                    <option value="26">Bolivia</option>
                                    <option value="27">Bosnia and Herzegovina</option>
                                    <option value="28">Botswana</option>
                                    <option value="29">Bouvet Island</option>
                                    <option value="30">Brazil</option>
                                    <option value="31">British Indian Ocean Territory</option>
                                    <option value="32">Brunei Darussalam</option>
                                    <option value="33">Bulgaria</option>
                                    <option value="34">Burkina Faso</option>
                                    <option value="35">Burundi</option>
                                    <option value="36">Cambodia</option>
                                    <option value="37">Cameroon</option>
                                    <option value="38">Canada</option>
                                    <option value="39">Cape Verde</option>
                                    <option value="40">Cayman Islands</option>
                                    <option value="41">Central African Republic</option>
                                    <option value="42">Chad</option>
                                    <option value="43">Chile</option>
                                    <option value="44">China</option>
                                    <option value="45">Christmas Island</option>
                                    <option value="46">Cocos (Keeling) Islands</option>
                                    <option value="47">Colombia</option>
                                    <option value="48">Comoros</option>
                                    <option value="49">Congo</option>
                                    <option value="50">Congo, the Democratic Republic of the</option>
                                    <option value="51">Cook Islands</option>
                                    <option value="52">Costa Rica</option>
                                    <option value="53">Cote D'Ivoire</option>
                                    <option value="54">Croatia</option>
                                    <option value="55">Cuba</option>
                                    <option value="56">Cyprus</option>
                                    <option value="57">Czech Republic</option>
                                    <option value="58">Denmark</option>
                                    <option value="59">Djibouti</option>
                                    <option value="60">Dominica</option>
                                    <option value="61">Dominican Republic</option>
                                    <option value="62">Ecuador</option>
                                    <option value="63">Egypt</option>
                                    <option value="64">El Salvador</option>
                                    <option value="65">Equatorial Guinea</option>
                                    <option value="66">Eritrea</option>
                                    <option value="67">Estonia</option>
                                    <option value="68">Ethiopia</option>
                                    <option value="69">Falkland Islands (Malvinas)</option>
                                    <option value="70">Faroe Islands</option>
                                    <option value="71">Fiji</option>
                                    <option value="72">Finland</option>
                                    <option value="73">France</option>
                                    <option value="74">French Guiana</option>
                                    <option value="75">French Polynesia</option>
                                    <option value="76">French Southern Territories</option>
                                    <option value="77">Gabon</option>
                                    <option value="78">Gambia</option>
                                    <option value="79">Georgia</option>
                                    <option value="80">Germany</option>
                                    <option value="81">Ghana</option>
                                    <option value="82">Gibraltar</option>
                                    <option value="83">Greece</option>
                                    <option value="84">Greenland</option>
                                    <option value="85">Grenada</option>
                                    <option value="86">Guadeloupe</option>
                                    <option value="87">Guam</option>
                                    <option value="88">Guatemala</option>
                                    <option value="89">Guinea</option>
                                    <option value="90">Guinea-Bissau</option>
                                    <option value="91">Guyana</option>
                                    <option value="92">Haiti</option>
                                    <option value="93">Heard Island and Mcdonald Islands</option>
                                    <option value="94">Holy See (Vatican City State)</option>
                                    <option value="95">Honduras</option>
                                    <option value="96">Hong Kong</option>
                                    <option value="97">Hungary</option>
                                    <option value="98">Iceland</option>
                                    <option value="99">India</option>
                                    <option value="100">Indonesia</option>
                                    <option value="101">Iran, Islamic Republic of</option>
                                    <option value="102">Iraq</option>
                                    <option value="103">Ireland</option>
                                    <option value="104">Israel</option>
                                    <option value="105">Italy</option>
                                    <option value="106">Jamaica</option>
                                    <option value="107">Japan</option>
                                    <option value="108">Jordan</option>
                                    <option value="109">Kazakhstan</option>
                                    <option value="110">Kenya</option>
                                    <option value="111">Kiribati</option>
                                    <option value="112">Korea, Democratic </option>
                                    <option value="113">Korea, Republic of</option>
                                    <option value="114">Kuwait</option>
                                    <option value="115">Kyrgyzstan</option>
                                    <option value="116">Lao People's Democratic Republic</option>
                                    <option value="117">Latvia</option>
                                    <option value="118">Lebanon</option>
                                    <option value="119">Lesotho</option>
                                    <option value="120">Liberia</option>
                                    <option value="121">Libyan Arab Jamahiriya</option>
                                    <option value="122">Liechtenstein</option>
                                    <option value="123">Lithuania</option>
                                    <option value="124">Luxembourg</option>
                                    <option value="125">Macao</option>
                                    <option value="127">Madagascar</option>
                                    <option value="128">Malawi</option>
                                    <option value="129">Malaysia</option>
                                    <option value="130">Maldives</option>
                                    <option value="131">Mali</option>
                                    <option value="132">Malta</option>
                                    <option value="133">Marshall Islands</option>
                                    <option value="134">Martinique</option>
                                    <option value="135">Mauritania</option>
                                    <option value="136">Mauritius</option>
                                    <option value="137">Mayotte</option>
                                    <option value="138">Mexico</option>
                                    <option value="139">Micronesia, Federated States of</option>
                                    <option value="140">Moldova, Republic of</option>
                                    <option value="141">Monaco</option>
                                    <option value="142">Mongolia</option>
                                    <option value="143">Montserrat</option>
                                    <option value="144">Morocco</option>
                                    <option value="145">Mozambique</option>
                                    <option value="146">Myanmar</option>
                                    <option value="147">Namibia</option>
                                    <option value="148">Nauru</option>
                                    <option value="149">Nepal</option>
                                    <option value="150">Netherlands</option>
                                    <option value="151">Netherlands Antilles</option>
                                    <option value="152">New Caledonia</option>
                                    <option value="153">New Zealand</option>
                                    <option value="154">Nicaragua</option>
                                    <option value="155">Niger</option>
                                    <option value="156">Nigeria</option>
                                    <option value="157">Niue</option>
                                    <option value="158">Norfolk Island</option>
                                    <option value="159">Northern Mariana Islands</option>
                                    <option value="160">Norway</option>
                                    <option value="161">Oman</option>
                                    <option value="162">Pakistan</option>
                                    <option value="163">Palau</option>
                                    <option value="164">Palestinian Territory, Occupied</option>
                                    <option value="165">Panama</option>
                                    <option value="166">Papua New Guinea</option>
                                    <option value="167">Paraguay</option>
                                    <option value="168">Peru</option>
                                    <option value="169">Philippines</option>
                                    <option value="170">Pitcairn</option>
                                    <option value="171">Poland</option>
                                    <option value="172">Portugal</option>
                                    <option value="173">Puerto Rico</option>
                                    <option value="174">Qatar</option>
                                    <option value="175">Reunion</option>
                                    <option value="176">Romania</option>
                                    <option value="177">Russian Federation</option>
                                    <option value="178">Rwanda</option>
                                    <option value="179">Saint Helena</option>
                                    <option value="180">Saint Kitts and Nevis</option>
                                    <option value="181">Saint Lucia</option>
                                    <option value="182">Saint Pierre and Miquelon</option>
                                    <option value="183">Saint Vincent and the Grenadines</option>
                                    <option value="184">Samoa</option>
                                    <option value="185">San Marino</option>
                                    <option value="186">Sao Tome and Principe</option>
                                    <option value="187">Saudi Arabia</option>
                                    <option value="188">Senegal</option>
                                    <option value="189">Serbia and Montenegro</option>
                                    <option value="190">Seychelles</option>
                                    <option value="191">Sierra Leone</option>
                                    <option value="192">Singapore</option>
                                    <option value="193">Slovakia</option>
                                    <option value="194">Slovenia</option>
                                    <option value="195">Solomon Islands</option>
                                    <option value="196">Somalia</option>
                                    <option value="197">South Africa</option>
                                    <option value="198">South Georgia </option>
                                    <option value="199">Spain</option>
                                    <option value="200">Sri Lanka</option>
                                    <option value="201">Sudan</option>
                                    <option value="202">Suriname</option>
                                    <option value="203">Svalbard and Jan Mayen</option>
                                    <option value="204">Swaziland</option>
                                    <option value="205">Sweden</option>
                                    <option value="206">Switzerland</option>
                                    <option value="207">Syrian Arab Republic</option>
                                    <option value="208">Taiwan, Province of China</option>
                                    <option value="209">Tajikistan</option>
                                    <option value="210">Tanzania, United Republic of</option>
                                    <option value="211">Thailand</option>
                                    <option value="212">Timor-Leste</option>
                                    <option value="213">Togo</option>
                                    <option value="214">Tokelau</option>
                                    <option value="215">Tonga</option>
                                    <option value="216">Trinidad and Tobago</option>
                                    <option value="217">Tunisia</option>
                                    <option value="218">Turkey</option>
                                    <option value="219">Turkmenistan</option>
                                    <option value="220">Turks and Caicos Islands</option>
                                    <option value="221">Tuvalu</option>
                                    <option value="222">Uganda</option>
                                    <option value="223">Ukraine</option>
                                    <option value="224">United Arab Emirates</option>
                                    <option value="225">United Kingdom</option>
                                    <option selected value="226">United States</option>
                                    <option value="227">United States Minor Outlying Islands</option>
                                    <option value="228">Uruguay</option>
                                    <option value="229">Uzbekistan</option>
                                    <option value="230">Vanuatu</option>
                                    <option value="231">Venezuela</option>
                                    <option value="232">Viet Nam</option>
                                    <option value="233">Virgin Islands, British</option>
                                    <option value="234">Virgin Islands, U.s.</option>
                                    <option value="235">Wallis and Futuna</option>
                                    <option value="236">Western Sahara</option>
                                    <option value="237">Yemen</option>
                                    <option value="238">Zambia</option>
                                    <option value="239">Zimbabwe</option>
                                </select>
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="txt_1" style="text-align:right;">
                                <b>State : &nbsp;&nbsp;</b>
                            </td>
                            <td align="left">
                                <input type="text" value="FL" name="state" id="state" style="width:180px;" />
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="txt_1" style="text-align:right;">
                                <b>City : &nbsp;&nbsp;</b>
                            </td>
                            <td align="left">
                                <input type="text" value="Miami" name="city" id="city" style="width:180px;" />
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="txt_1" style="text-align:right;">
                                <b>Zip Code : &nbsp;&nbsp;</b>
                            </td>
                            <td align="left">
                                <input type="text" value="33166" name="zip" id="zip" style="width:180px;" />
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="txt_1" style="text-align:right;">
                                <b>Phone : <span style="color:#8e2020; font-size:15px;">*</span>
                                </b>
                            </td>
                            <td align="left">
                                <input type="text" value="1-305-675-2179" name="phone" id="phone" style="width:180px;" />
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="txt_1" style="text-align:right;">
                                <b>Phone 2 : &nbsp;&nbsp;</b>
                            </td>
                            <td align="left">
                                <input type="text" value="1-305-600-2984" name="phone2" id="phone2" style="width:180px;" />
                            </td>
                            <td>
                                <input type="hidden" name="ID" value="1" />
                            </td>
                        </tr>
                        <tr>
                            <td class="txt_1" style="text-align:right;">
                                <b>Facebook : &nbsp;&nbsp;</b>
                            </td>
                            <td valign="center" align="left">
                                <input type="text" value="http://www.facebook.com/easyrentprosoftware" name="facebook" id="facebook" style="width:250px;" />
                            </td>
                        </tr>
                        <tr>
                            <td class="txt_1" style="text-align:right;">
                                <b>Twitter : &nbsp;&nbsp;</b>
                            </td>
                            <td valign="center" align="left">
                                <input type="text" value="twitter.com" name="twitter" id="twitter" style="width:250px;" />
                            </td>
                        </tr>
                        <tr>
                            <td class="txt_1" style="text-align:right;">
                                <b>LinkedIn : &nbsp;&nbsp;</b>
                            </td>
                            <td valign="center" align="left">
                                <input type="text" value="linkedin.com" name="linkedin" id="linkedin" style="width:250px;" />
                            </td>
                        </tr>
                        <tr>
                            <td class="txt_1" style="text-align:right;">
                                <b>Pinterest : &nbsp;&nbsp;</b>
                            </td>
                            <td valign="center" align="left">
                                <input type="text" value="" name="pinterest" id="pinterest" style="width:250px;" />
                            </td>
                        </tr>
                        <tr>
                            <td class="txt_1" style="text-align:right;">
                                <b>Google Plus+ : &nbsp;&nbsp;</b>
                            </td>
                            <td valign="center" align="left">
                                <input type="text" value="" name="gplus" id="gplus" style="width:250px;" />
                            </td>
                        </tr>
                        <tr>
                            <td class="txt_1" style="text-align:right;">
                                <b>Instagram+ : &nbsp;&nbsp;</b>
                            </td>
                            <td valign="center" align="left">
                                <input type="text" value="" name="instagram" id="instagram" style="width:250px;" />
                            </td>
                        </tr>
                        <tr>
                            <td>                                            </td>
                            <td>
                                <input type="submit" name="upd_loc" value="Update" class="btn_1" />
                                <input type="button" onclick="javascript:location.href='index.php';" name="upd_loc2" value="Cancel" class="btn_1" />
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
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript">
</script>
</body>
</html>
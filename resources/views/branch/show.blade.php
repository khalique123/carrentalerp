@include('header')  @include('leftpanel')</td>
<td width="2%">&nbsp;</td>
<td width="80%" valign="top">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td class="heading_1" style="padding:5px;">Add Rental Locations</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td valign="top" class="txt_1"  align="center">
                <form  method="POST" action={{route("branch_insert_route")}} onsubmit="return check_location();"  style="padding-left:5px;">
                    {{csrf_field()}}
                    <table width="100%" cellpadding="2" cellspacing="4" bgcolor="#f3f3f3">
                        <tr>
                            <td colspan="3" style="padding-left:70px;">
                                <b/>Fields marked with ' <span style="color:#8e2020; font-size:15px;">*</span> ' are mandatory.</td>
                        </tr>
                        <tr>
                            <td width="30%" class="txt_1" style="text-align:right;">
                                <b>Display Order : <span style="color:#8e2020; font-size:15px;">*</span>
                                </b>
                            </td>
                            <td >
                                <input type="text" name="disp_order" id="disp_order" class="txtbox" value="{{$branch->name}}" />
                            </td>
                            <td>
                                <input type="hidden" name="ID" value="{{$branch->id}}" />
                            </td>
                        </tr>
                        <tr>
                            <td class="txt_1" style="text-align:right;">
                                <b>Location Name : <span style="color:#8e2020; font-size:15px;">*</span>
                                </b>
                            </td>
                            <td>
                                <input type="text" name="loc_name" id="loc_name" class="txtbox" value="" />
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="txt_1"  style="text-align:right;" valign="top">
                                <b>Address : &nbsp;&nbsp;</b>
                            </td>
                            <td>
                                <textarea rows="5" cols="15" name="address" id="address" class="no"></textarea>
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="txt_1"  style="text-align:right;" valign="top">
                                <b>Country : &nbsp;&nbsp;</b>
                            </td>
                            <td>
                                <select name="country" id="country" class="no">
                                <option value="0">Select Country</option>
                                    @foreach($countries as $country)
                                        <option value="{{$country->id}}">{{$country->name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="txt_1"  style="text-align:right;" valign="top">
                                <b>State : &nbsp;&nbsp;</b>
                            </td>
                            <td>
                                <select name="country" id="country" class="no">
                                <option value="0">Select State</option>
                                    @foreach($states as $state)
                                        <option value="{{$state->id}}">{{$state->name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        
                        <tr>
                            <td class="txt_1"  style="text-align:right;" valign="top">
                                <b>City : &nbsp;&nbsp;</b>
                            </td>
                            <td>
                                <select name="city" id="city" class="no">
                                <option value="0">Select City</option>
                                    @foreach($cities as $city)
                                        <option value="{{$city->id}}">{{$city->name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="txt_1" style="text-align:right;">
                                <b>Phone No : <span style="color:#8e2020; font-size:15px;">*</span>
                                </b>
                            </td>
                            <td>
                                <input type="text" name="phone" id="phone" class="txtbox" value="" />
                            </td>
                            <td>&nbsp; </td>
                        </tr>
                        <tr>
                            <td class="txt_1" style="text-align:right;">
                                <b>Email Id : <span style="color:#8e2020; font-size:15px;">*</span>
                                </b>
                            </td>
                            <td>
                                <input type="text" name="email" id="email" class="txtbox" value="" />
                            </td>
                            <td>&nbsp; </td>
                        </tr>
                        <tr>
                            <td class="txt_1" style="text-align:right;">
                                <b>Business Hours : <span style="color:#8e2020; font-size:15px;">*</span>
                                </b>
                            </td>
                            <td>
                                <input type="text" name="busihour" id="busihour" class="txtbox" value="" />
                            </td>
                            <td>&nbsp; </td>
                        </tr>
                        <tr>
                            <td class="txt_1" style="text-align:right;">
                                <b>Landmark   : <span style="color:#8e2020; font-size:15px;">*</span>
                                </b>
                            </td>
                            <td>
                                <textarea cols="80" id="landmark" name="landmark" rows="10"></textarea>
                            </td>
                            <td>&nbsp; </td>
                        </tr>
                        <tr>
                            <td class="txt_1"  style="text-align:right;" valign="top">
                                <b>Address Locator : &nbsp;&nbsp;&nbsp;</b>
                            </td>
                            <td>
                                <input type="text" size="100" name="gmaploc" id="gmaploc" class="txtbox" value=""/>
                                <input type="button" value="Locate!" onclick="showAddress(gmaploc.value);" /> (Enter street & number,country)</td>
                            <td align="left">&nbsp; </td>
                        </tr>
                        <tr>
                            <td class="txt_1"  style="text-align:right;" valign="top">
                                <b>Latitude : &nbsp;&nbsp;</b>
                            </td>
                            <td>
                                <input type="text" size="25" name="gmaplat" id="gmaplat" class="txtbox" value=""/>
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="txt_1"  style="text-align:right;" valign="top">
                                <b>Longitude : &nbsp;&nbsp;</b>
                            </td>
                            <td>
                                <input type="text" size="25" name="gmaplng" id="gmaplng" class="txtbox" value=""/>
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr >
                            <td class="txt_1"  style="text-align:right;" valign="top">
                                <b>Google Map : &nbsp;&nbsp;</b>
                            </td>
                            <td >
                                <div id="map_canvas" style="width: 500px; height: 300px" />
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;&nbsp;</td>
                            <td>
                                <input type="submit" name="add_loc" value="Add" class="btn_1" />
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
</tr>@include('footer')</table>
</table>

<script type="text/javascript" src="../script.js"> </script>
 <script src="https://maps.google.com/maps?file=api&amp;v=2&amp;key=AIzaSyBhuO-AuRQVU4Vw2VOO-hOPWZIhmwNWJOA&sensor=false" type="text/javascript"></script>
 <script type="text/javascript" src="tinymce/tinymce.min.js"></script>         
    <script type="text/javascript">	
	var map = null;
	    var geocoder = null;
    function initialize() {
      if (GBrowserIsCompatible()) {
      
	  
	   if((document.getElementById("gmaplat").value=='') || (document.getElementById("gmaplng").value=='')){
	  
        var map = new GMap2(document.getElementById("map_canvas"));
        map.setCenter(new GLatLng(37.88, -122.442626), 10);
	  geocoder = new GClientGeocoder();
        map.setUIToDefault();
		}
		else
		{
 
	  
	  
	  
	   var map = new GMap2(document.getElementById("map_canvas"));
        map.setCenter(new GLatLng(document.getElementById("gmaplat").value,document.getElementById("gmaplng").value), 13);
     map.setUIToDefault();
       
          var point = new GLatLng(document.getElementById("gmaplat").value,document.getElementById("gmaplng").value);
         // map.addOverlay(new GMarker(point));
		   var marker = new GMarker(point);
              map.addOverlay(marker);
              // As this is user-generated content, we display it as
              // text rather than HTML to reduce XSS vulnerabilities.
              marker.openInfoWindow(document.createTextNode(document.getElementById("gmaploc").value));
       }
		
        GEvent.addListener(map,"click", function(overlay,latlng) {
          if (overlay) {
            // ignore if we click on the info window
            return;
          }
          var tileCoordinate = new GPoint();
          var tilePoint = new GPoint();
          var currentProjection = G_NORMAL_MAP.getProjection();
          tilePoint = currentProjection.fromLatLngToPixel(latlng, map.getZoom());
          tileCoordinate.x = Math.floor(tilePoint.x / 256);
          tileCoordinate.y = Math.floor(tilePoint.y / 256);
		    var marker = new GMarker(tilePoint);
              map.addOverlay(marker);
          var myHtml = "Latitude: " + latlng.lat() + "<br/>Longitude: " + latlng.lng() + 
            "<br/>The Tile Coordinate is:<br/> x: " + tileCoordinate.x + 
            "<br/> y: " + tileCoordinate.y + "<br/> at zoom level " + map.getZoom();
	document.getElementById("gmaplat").value = latlng.lat();	
document.getElementById("gmaplng").value = latlng.lng();		
          map.openInfoWindow(latlng, myHtml);
        });
      }
    }
	
	function showAddress(gmaploc) {
	 if (GBrowserIsCompatible()) {
      
        var map = new GMap2(document.getElementById("map_canvas"));
        map.setCenter(new GLatLng(37.88, -122.442626), 10);
	  geocoder = new GClientGeocoder();
        map.setUIToDefault();

        GEvent.addListener(map,"click", function(overlay,latlng) {
          if (overlay) {
            // ignore if we click on the info window
            return;
          }
          var tileCoordinate = new GPoint();
          var tilePoint = new GPoint();
          var currentProjection = G_NORMAL_MAP.getProjection();
          tilePoint = currentProjection.fromLatLngToPixel(latlng, map.getZoom());
          tileCoordinate.x = Math.floor(tilePoint.x / 256);
          tileCoordinate.y = Math.floor(tilePoint.y / 256);
		  //  var marker = new GMarker(tilePoint, {draggable: true});
             
          var myHtml = "Latitude: " + latlng.lat() + "<br/>Longitude: " + latlng.lng() + 
            "<br/>The Tile Coordinate is:<br/> x: " + tileCoordinate.x + 
            "<br/> y: " + tileCoordinate.y + "<br/> at zoom level " + map.getZoom();
	document.getElementById("gmaplat").value = latlng.lat();	
document.getElementById("gmaplng").value = latlng.lng();
map.clearOverlays() ;
 var latlng = new GLatLng(latlng.lat(), latlng.lng());
          map.addOverlay(new GMarker(latlng));
		  
 // map.addOverlay(marker); 
          map.openInfoWindow(latlng, myHtml);
        });
      }
      if (geocoder) {
        geocoder.getLatLng(
          gmaploc,
          function(point) {
            if (!point) {
              alert(gmaploc + " not found");
            } else {
			
              map.setCenter(point, 13);
              var marker = new GMarker(point, {draggable: true});
			  GEvent.addListener(marker, "dragstart", function() {
          map.closeInfoWindow();
        });

		 GEvent.addListener(marker, "dragend", function(latlng) {
         
		  
          var tileCoordinate = new GPoint();
          var tilePoint = new GPoint();
          var currentProjection = G_NORMAL_MAP.getProjection();
          tilePoint = currentProjection.fromLatLngToPixel(latlng, map.getZoom());
          tileCoordinate.x = Math.floor(tilePoint.x / 256);
          tileCoordinate.y = Math.floor(tilePoint.y / 256);
		   
		     var marker = new GMarker(tilePoint, {draggable: true});
             marker.openInfoWindowHtml("Just bouncing along..."); 
          var myHtml = "Latitude: " + latlng.lat() + "<br/>Longitude: " + latlng.lng() + 
            "<br/>The Tile Coordinate is:<br/> x: " + tileCoordinate.x + 
            "<br/> y: " + tileCoordinate.y + "<br/> at zoom level " + map.getZoom();
	document.getElementById("gmaplat").value = latlng.lat();	
document.getElementById("gmaplng").value = latlng.lng();

      //    marker.openInfoWindowHtml(latlng, myHtml);
		   map.addOverlay(marker);
        });
		
		
	//alert(latlng.lng());

              map.addOverlay(marker);
			  var center = marker.getLatLng();
			  document.getElementById("gmaplat").value = center.lat();	
              document.getElementById("gmaplng").value = center.lng();


              // As this is user-generated content, we display it as
              // text rather than HTML to reduce XSS vulnerabilities.
              marker.openInfoWindow(document.createTextNode(gmaploc));
            }
          }
        );
      }
    }
	function chlang() {
  location.href="add_location.php?location_id=&action=edit&l="+document.getElementById('sel_lang').value;
  }
    </script>


 <script type="text/javascript">
     
  tinyMCE.init({selector: '#loc_desc', 
  theme: "modern",
  

  fontsize_formats: "6pt 8pt 10pt 12pt 14pt 16pt 18pt 20pt 24pt 30pt 36pt 48pt 72pt",
   height: 150,
    
  plugins: [
  
         "advlist autolink code link image lists charmap print preview hr anchor pagebreak imagetools fullscreen autosave",
         "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking spellchecker template",
         "table contextmenu directionality emoticons paste textcolor jbimages colorpicker textpattern"
   ],
   relative_urls: false,
    browser_spellcheck : true ,
    
   style_formats: [
                {title: 'Bold text', inline: 'b'},
                {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                {title: 'Example 1', inline: 'span', classes: 'example1'},
                {title: 'Example 2', inline: 'span', classes: 'example2'},
                {title: 'Table styles'},
                {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
        ],
 
   
    menubar: false,
    toolbar_items_size: 'small',
  
   image_advtab: true,

   toolbar1: "newdocument | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect forecolor backcolor | removeformat",
  toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor | insertdatetime preview | subscript superscript charmap emoticons visualchars visualblocks",
   toolbar3: "table | hr  | print fullscreen | ltr rtl | spellchecker | nonbreaking template pagebreak restoredraft | rotateleft rotateright flipv fliph editimage imageoptions image jbimages media | code ",file_browser_callback: RoxyFileBrowser}); 

function RoxyFileBrowser(field_name, url, type, win) {
  var roxyFileman = 'tinymce/fileman/index.html';
  if (roxyFileman.indexOf("?") < 0) {     
    roxyFileman += "?type=" + type;   
  }
  else {
    roxyFileman += "&type=" + type;
  }
  roxyFileman += '&input=' + field_name + '&value=' + win.document.getElementById(field_name).value;
  if(tinyMCE.activeEditor.settings.language){
    roxyFileman += '&langCode=' + tinyMCE.activeEditor.settings.language;
  }
  tinyMCE.activeEditor.windowManager.open({
     file: roxyFileman,
     title: 'Images On Server',
     width: 850, 
     height: 650,
     resizable: "yes",
     plugins: "media",
     inline: "yes",
     close_previous: "no"  
  }, {     window: win,     input: field_name    });
  return false; 
}
    </script>
</body>
</html>
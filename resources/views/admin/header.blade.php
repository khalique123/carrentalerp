<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Car Rentals</title><link href="/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link href={{asset("/css/style.css")}} rel="stylesheet">
<link href={{("/css/app.css")}} rel="stylesheet">
</head>

<body>
<table align="center" width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#FFFFFF" class="header_pane">

    <table width="100%" border="0" cellpadding="0" cellspacing="0" class="top_bg">
      <tr>
        <td width="56%" align="left" style="padding-left:25px;"><a href="/home"><img src={{asset("/images/download.jpg")}} alt="" /></a></td>
        <td width="44%" height="100" class="top_txt">Admin Control Panel<br/><br/>
        Welcome&nbsp;admin        </td>

        </tr>
         <tr>
             <td width="100%" height="15" valign="top"  colspan="2" class="top_txt">&nbsp;</td>
        </tr>
    </table>
    
    @yield('content')
</body>
</html>
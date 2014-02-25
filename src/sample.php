<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><head>
<meta content="text/html; charset=UTF-8" http-equiv="content-type">

<title>Image Verify</title>
  
<meta content="Nobby Noboru Hirano" name="author">
  
<meta name="viewport" content="width=320, initial-scale=1.0, user-scalable=yes, maximum-scale=2.0, minimum-scale=0.2">


<style type="text/css">
<!--
body {
  color: black
  font-size: 75%;
}
-->
</style> 
</head><body>
<?php
/*
================================================================================
// 
//    This tutorial will show you how to make an image verification
// like they use (used?) on Yahoo or they still do on Planet Source 
// Code. 
//
// IMPORTANT NOTE
// there is no warranty, implied or otherwise with this software.
// 
//
// released under a ntools BSD licence.
//
//   Nobby N Hirano
//   nob@ntools.net
//   http://ntools.net/
//==============================================================================
*/
  require_once('mkrand.php');
  session_cache_limiter('nocache');
  session_start();

	// Make randam 6digit string.
	$_SESSION["IV_RndamText"] = GetRandomString(6);

// BELOW THIS LINE YOU CAN WRITE HTML CODE OR ANYTHING ELSE.
?>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>
    Here comes the HTML 
        code or any other code you want.<br />
        write anything to the output yet, you might even use <strong>Header()</strong>;</font></p>
      <hr size="1" noshade="noshade" />
      <p>Please type 
        the code you see in the image into the textfield below. If you cannot 
        read the code, just press &quot;<strong>Reload</strong>&quot; to generate 
        a new image.
      <div align="center"><img src="imgdisp.php?<?php echo SID ?>" /></div>
      <form action="verificate.php" method="POST" name="frmImgVerific" target="_self" id="frmImgVerific">
        <p> Enter the code 
          here: 
          <input name="txtCode" autocomplete="off" type="text" id="txtCode" size="30" />
        </p>
        <p>
          <input type="submit" name="Submit" value="OK" />
        </p>
      </form>
    </td>
  </tr>
</table>

<hr>
<div id="futter">Produced by Nobby Noboru Hirano <br>
Designed by <a href="http://mxkv.com/mailtx/" target="_blank">Nobby Noboru Hirano </a></div>
<div id=fter>Last modified:
<?php
  $d = filectime($_SERVER['SCRIPT_FILENAME']);
  $t = date("D M d Y H:i:s ", $d);
  printf("%s", $t);
?>
</div>

</body></html>

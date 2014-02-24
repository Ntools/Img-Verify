<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><head>
<meta content="Nobby Noboru Hirano" name="author">
<meta content="text/html; charset=UTF-8" http-equiv="content-type">

<title>Image Verify</title>
<?php
	// At first we initialize our session again.
	session_cache_limiter('nocache');
	session_start();
	
	// Then we get the Text entered by the user and 
	// the random generated text
	$IV_InputText = $_POST["txtCode"];  // form input
	$IV_RandomText = $_SESSION["IV_RndamText"]; // 

	// Now we are ready and can unset and destroy our session
	session_unset();
	session_destroy();
	echo "</head><body>\n";

	// Now we check, if the two strings are the same
	if (strcasecmp($IV_InputText,$IV_RandomText) == 0) {
//		echo "You have entered the code correctly. :)";
		header("Location: http://mxkv.com/"); // redirect to url ...
	} else {
//		echo "You haven't entered the correct code. Please try again!\n";
		header("Location: http://mxkv.com/Img-Verify/"); // back to url ...
	}
	
?>
</body></html>

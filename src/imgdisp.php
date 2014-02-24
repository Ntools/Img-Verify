<?php

/*
** This function generates a picture with a text passed to it.
**  Image Verify
**             for php5
*/

// Create the image, size -> width=100 and height=20
$Imgver_image = imagecreate(100,20);

// Allocate 2 colors, background and font color.
// This uses the RGB names of the colors
$Imgver_back_color = imagecolorallocate ($Imgver_image, 200, 200, 200);
$Imgver_font_color = imagecolorallocate ($Imgver_image, 25, 25, 55);

// Flood Fill our image with black
imagefill($Imgver_image, 0, 0, $Imgver_back_color);

// This handles our session. We get the random text that
// was stored in our session var on the first page.
session_start();
$Imgver_randomtext = $_SESSION["IV_RndamText"];
 
// Since our Text had 6 chars (we defined this not to be longer)
// we now write the 6 random chars in our picture
// For those who donŽt know: You can access the third character
//in a string easily by typing $myString[2];
imagechar($Imgver_image, 4, 10, 3, $Imgver_randomtext[0] ,$Imgver_font_color);
imagechar($Imgver_image, 5, 25, 3, $Imgver_randomtext[1] ,$Imgver_font_color);
imagechar($Imgver_image, 3, 40, 3, $Imgver_randomtext[2] ,$Imgver_font_color);
imagechar($Imgver_image, 4, 55, 3, $Imgver_randomtext[3] ,$Imgver_font_color);
imagechar($Imgver_image, 5, 70, 3, $Imgver_randomtext[4] ,$Imgver_font_color);
imagechar($Imgver_image, 3, 85, 3, $Imgver_randomtext[5] ,$Imgver_font_color);

//Now we send the picture to the Browser
header("Content-type: image/jpeg");
imagejpeg($Imgver_image);
?>

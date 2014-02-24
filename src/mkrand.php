<?php
	function GetRandomChar() {
	// This function generates random char
		
		mt_srand((double)microtime()*1000000);
		$randval = mt_rand(1,2); // do not use lower case characters.

		
		switch ($randval) {
	     case 1:
	  	  // 48 to 57 are the ASCII codes for the 
	  	  // numbers from 0->48 to 9->57.
	        $randval = mt_rand(48, 57);
	        break;
	     case 2:
	  	  // 65 to 90 are the ASCII codes for upper-
	  	  // case characters from A to Z except O.
	  	  	do {
                $randval = mt_rand(65, 90);
            } while ($randval == 'O');
	        break;
	     case 3:
	  	  // 97 to 122 are the ASCII codes for lower-
	  	  // case characters from a to z except o.
	  	  	do {
                $randval = mt_rand(97, 122);
            } while ($randval == 'o');
	        break;
		}
		
	// Now we return the character, generated from the ASCII code
		return chr($randval);
	}

	function GetRandomString($cnt) {
		$randstr = "";
		for ($i = 0; $i < $cnt; $i++) {
	       $randstr .= GetRandomChar();
		}
		return($randstr);
	}
?>

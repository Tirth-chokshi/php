<?php
if(isset($_POST['str'])){
	$n=$_POST['str'];
	$rev=strrev($n);
	
	if($n==$rev){
		echo "$n Palindrome";
	}
	else{
		echo "$n not a palindrome";
	}
}
?>
<form method="POST" action="">
<input type="textbox" name="str" required>
<input type="submit" value="submit">
</form>

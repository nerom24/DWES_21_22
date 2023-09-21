<?php
	// the message
	$msg = "First line of text\nSecond line of text";

	// use wordwrap() if lines are longer than 70 characters
	$msg = wordwrap($msg,70);

	// send email
	mail("nerom24@gmail.com","My subject",$msg, "To:nerom24@gmail.com");
?>
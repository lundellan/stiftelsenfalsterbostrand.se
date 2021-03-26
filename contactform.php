<?php
	
	if (isset($_POST['submit']))	{
		$name = $_POST['name'];
		$mailFrom = $_POST['mail'];
		$message = $_POST['message'];
		
		$subject = "Nytt meddelande från hemsidan";
		$mailTo = "jacoblundell@hotmail.se";
		
		$headers = "Från: ".$mailFrom;
		$txt = "Du har fått ett meddelande från ".$name;.".\n\n".$message;
		
		
		mail($mailTo, $subject, $txt, $headers);
		header("Location: index.php?mailsend");
	}
<?php
session_start();
	include('includes/content.php');
	$header=new header_content;
	$footer=new footer_content;	
	$old_user=$_SESSION['admin_user'];
	unset($_SESSION['admin_user']);
	session_destroy();	
	$header->content();
	if (!empty ($old_user)){		
		echo '<center><h3>Успешный выход!</h3></br><a href="login.php">Вход</a></center>';			
	}
	else{		
		echo '<center><h3>Вы не входили в систему, поэтому и выходить из нее не нужно!</h3></br><a href="login.php">Вход</a></center>';		
	}
	$footer->content();	
?>
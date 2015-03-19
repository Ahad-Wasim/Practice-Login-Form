<?php
    session_start(); 				//start a session
    session_destroy();				//destroy the session with session_destroy
    								// or unset($_SESSION['user_information']);
    								//done!
    



    header("location: index.php");

?>

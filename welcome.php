<?php
session_start();

?>


<h1> Welcome You have now logged in     <?php print_r($_SESSION['user_information']['fullname']); ?>     </h1>


<a href = "logout.php">Logout</a>


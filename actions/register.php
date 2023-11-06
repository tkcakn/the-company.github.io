<?php

include "../classes/User.php";

// CREATE AN OBJ
$user = new User;

// CALL THE METHOD
$user->store($_POST);


?>
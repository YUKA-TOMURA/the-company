<?php

include "../classes/User.php";

//instantiate / creating object of user class
$user_obj = new User;

// $first_name = $_POST['first_name'];


$user_obj->store($_POST);

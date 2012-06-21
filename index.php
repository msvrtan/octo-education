<?php

include 'User.class.php'

$obj_user = new User();

$obj_user->load( 11 );

$obj_user->active = 0;

$obj_user->save();


?>

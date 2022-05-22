<?php

  $mysql_host = 'localhost':
  $mysql_user = 'root':
  $mysql_password = 'royalacademy123';
  $link = mysqli_connect($mysql_host, $mysql_user, $mysql_password);

  if (@mysqli_connect_error())
  {
  	die(User can not connect to the Database! Try Again ...');

  }
  else
  {
  	@mysqli_select_db($link, 'Royalschool');
  }
?>
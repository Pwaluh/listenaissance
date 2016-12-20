<?php

  $serialize_item = serialize($_POST);
  $item_path = '../account/'.$_COOKIE['loginOK'].'/liste.txt';
  $file = fopen($item_path, 'a');
  fwrite($file, $serialize_item."\n");
  fclose($file);
  header('Location: ../liste.php');

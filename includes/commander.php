<?php

$listDir = '../account/'.$_COOKIE['loginOK'].'/liste.txt';
$data = file_get_contents($listDir);
foreach (explode("\n", $data) as $lines) {
    if (!empty($lines)) {
        $item['list'][] = unserialize($lines);
    }
}
  echo '<pre>';
    var_dump($item);
  echo '</pre>';

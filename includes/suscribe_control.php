<?php
  $timestampCreation = time();
  $email = $_POST['email'];
  $password = $_POST['password'];
  $name = $_POST['name'];
  $firstname = $_POST['fisrtname'];
  $cryptedPassword = md5('Dublabla'.$password.$timestampCreation);
  $patternScript = '/[<#]/i';
  $dataLog = file_get_contents('../account/log.txt');
  $login = array();
  $accountFile = fopen('../account/log.txt', 'a');
  $accountInfo = "$email,$cryptedPassword,$timestampCreation\n";
  $taken = 0;
    if (preg_match($patternScript, $email)) {
        echo 'HAHAHAHAHAHA NO!';
    } else {
        foreach (explode("\n", $dataLog) as $lines) {
            if (!empty($lines)) {
                $login = explode(',', $lines);
                if ($login[0] == $email) {
                    $taken = 1;
                }
            }
        }
    }
    if ($taken == 0) {
        fwrite($accountFile, $accountInfo);
        mkdir('../account/'.$email.$cryptedPassword);
        setcookie('loginOK', $email.$cryptedPassword, time() + 3600, '/');
        header('Location: /liste.php');
    } else {
        header('Location: /suscribe.php?erreur=1');
    }
    fclose($accountFile);

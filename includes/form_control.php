<?php
  $email = $_POST['email'];
  $password = $_POST['password'];
  $patternScript = '/[<#]/i';
  $dataLog = file_get_contents('../account/log.txt');
  $cryptedPassword = '';
  $login = array();
  $mdperreur = false;
    if (preg_match($patternScript, $email)) {
        echo 'HAHAHAHAHAHA NO!';
    } else {
        foreach (explode("\n", $dataLog) as $lines) {
            if (!empty($lines)) {
                $login = explode(',', $lines);
                $cryptedPassword = md5('Dublabla'.$password.$login[2]);
                if ($login[0] == $email) {
                    if ($login[1] == $cryptedPassword) {
                        setcookie('loginOK', $email.$cryptedPassword, time() + 3600, '/');
                        header('Location: /liste.php');
                        die();
                    } else {
                        $mdperreur = true;
                    }
                }
            }
        }
    }

    if ($mdperreur == true) {
        header('Location: /login.php?erreur=2');
    } else {
        header('Location: /login.php?erreur=1');
    }

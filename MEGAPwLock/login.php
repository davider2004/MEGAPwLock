<?php
/* © 2017 RamondettiDavide.com */

include('config.php');
include('password.php');

$return_url = $_GET['return_url'];
$pass = $_POST['pass'];

if (!$return_url) {
  exit("CHECK IF THERE IS THE RETURN URL!!!!!!");
}

if ($_COOKIE['bruteforce'] > 3) {
  exit("STUPID BOT! YOU CANNOT HACK MY WEBSITE!");
}

if ($pass = $pass[$return_url]) {
  echo "<font color=green><b>Login OK</b></font>: I will redirect you to the page and you can stay logged in 1h.";
  $cookieName = $return_url."_login";
  setCookie($cookieName,"ok",time()+3600);
  header("Refresh: 3; URL=".$return_url);
} else {
  if (!$_COOKIE['bruteforce']) {
    setCokie("bruteforce","1",time()+86400);
  } else {
    setCookie("bruteforce",$_COOKIE['bruteforce']+1,time()+86400);
  }
}

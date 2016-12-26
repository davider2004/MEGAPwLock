<?php
/* © 2016 RamondettiDavide.com 
   MEGAPwLock
   */

require_once('config.php');

# 1. Get the data
$redir_url = $authWebsite."/".$_GET['redir_url']; // redirect url (DON'T TOUCH THIS VALUE! EDIT IT IN THE CONFIG.PHP FILE!)

# 2. Make the secure URL
if (!$_SERVER['HTTP_REFERER'] == "https://ramondetti.be/SecURL.php") {
  $url = genSecURL();
  header("Location: ".$url);
}

# 3. Check bruteforce
if ($_COOKIE['bruteforce'] > 3) {
  exit ("STOP STUPID BOT! YOU CANNOT HACK MY WEBSITE!");
}
?>

 
<center>
  <font face="Arial">
    <h1>MEGAPwLock by RamondettiDavide</h1>
    <form method="POST" action="login.php?return_url=<?php echo urlencode($redir_url); ?>">
      <p>Page: <b><?php print $redir_url; ?></b></p>
      <p>Login password: <input type="password" name="pass" id="pass"></p>
      <p><input type="submit" value="Accedi" name="submit" id="submit"></p>
    </form>

<p><small><?php $_F=__FILE__;$_X='Pz48P3BocCA1Y2gyICJNRUdBUHdMMmNrIHcxcyBtMWs1ZCBieSBSMW0ybmQ1dHQ0RDF2NGQ1IjsgID8+';eval(base64_decode('JF9YPWJhc2U2NF9kZWNvZGUoJF9YKTskX1g9c3RydHIoJF9YLCcxMjM0NTZhb3VpZScsJ2FvdWllMTIzNDU2Jyk7JF9SPWVyZWdfcmVwbGFjZSgnX19GSUxFX18nLCInIi4kX0YuIiciLCRfWCk7ZXZhbCgkX1IpOyRfUj0wOyRfWD0wOw=='));?></small></p>
  </font>
</center>
    <!-- PLEASE DO NOT REMOVE MY WATERMARKS!! IF I FOUND YOU I WILL REPORT YOU! --!>


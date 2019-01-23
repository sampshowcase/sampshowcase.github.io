<?php 
$ip = $_SERVER['REMOTE_ADDR'];
$browser = $_SERVER['HTTP_USER_AGENT'];
$dateTime = date('Y/m/d G:i:s');
$file = "visitors.html"; // Файл, куда сохраняются данные
$file = fopen($file, "a");
$data = "<p><pre><b>User IP</b>: $ip <b> Browser</b>: $browser <br>on Time : $dateTime <br></p></pre>";
fwrite($file, $data);
fclose($file);
?>